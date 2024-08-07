<?php
$campaignFilter = isset($_GET['campaign']) ? $_GET['campaign'] : '';
$postfield = '""';
if(strlen($campaignFilter) > 0){
    $postfield = '{"campaignFilter": "'.$campaignFilter.'",}';
};

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://prod-62.westus.logic.azure.com:443/workflows/3e71788e7c1a4ad1a2add9c0f6f0078e/triggers/manual/paths/invoke?api-version=2016-06-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=I51oCtjs77Ix4RBDSAi9Je4y3CGQq89TefPvFfBeRxs',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => $postfield,
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'Cookie: ARRAffinity=55af0aa9d1042a9062cf39d6800f79adc8da60404d5f07a99b58afc8e1b04a15; ARRAffinitySameSite=55af0aa9d1042a9062cf39d6800f79adc8da60404d5f07a99b58afc8e1b04a15'
    ),
));

$response = curl_exec($curl);

curl_close($curl);
$response = json_decode($response, true);

$campaigns = $contents_type = $contents_type_aux = $emails = array();


//Obtain distinct Campaign name
foreach ($response['emailList'] as $key => $email) {
    $selected = 0;
    if($campaignFilter == $email['Campaign Name']){
        $selected = 1;
    };
    $campaigns[] = array(
        'campaign_id' => $email['Campaign ID'],
        'campaign'    => $email['Campaign Name'],
        'selected'    => $selected
    );
}
$campaigns = array_unique($campaigns, SORT_REGULAR);

//Order Alpha Campaigns
$aux = array();
foreach ($campaigns as $key => $row) {
    $aux[$key] = $row['campaign'];
}
array_multisort($aux, SORT_ASC, $campaigns);


//Obtain Contents Type
foreach ($response['emailList'] as $key => $email) {
    if(!empty($email['Content Type']))
    {
        $contents_type[] = array(
            'content_type' => $email['Content Type'],
        );
    }
}
$contents_type = array_unique($contents_type, SORT_REGULAR);


//Order Alpha Contents Type
$aux = array();
foreach ($contents_type as $key => $row) {
    $aux[$key] = $row['content_type'];
}
array_multisort($aux, SORT_ASC, $contents_type);

//Asign color too content type
$type_color = array('border-img-purple', 'border-img-purple-light', 'border-img-red-dark', 'border-img-yellow', '', '');
$bg_color = array('bg-purple', 'bg-purple-light', 'bg-red-dark', 'bg-yellow', '', '');
foreach ($contents_type as $key => $row) {

    $html = '<div class="d-inline-flex align-items-center">';
    $html .= '    <div><span class="legend-indicator d-flex '.$bg_color[$key].'"></span></div>';
    $html .= '    <div><p class="mb-0 me-3 fw-bold">'.$row['content_type'].'</p></div>';
    $html .= '</div>';


    $contents_type_aux[] = array(
        'content_type' => $row['content_type'],
        'color'        => $type_color[$key],
        'legend'       => $html
    );
};
$contents_type = $contents_type_aux;

//Obtain emails data
$content = "";
foreach ($response['emailList'] as $key => $email) {
    
    if(!file_exists('../assets/img/emails/'.$email['Thumbnail']) || empty($email['Thumbnail']) || empty($email['Content Type'])){
        continue;
    }

    $border_color = '';
    foreach ($contents_type as $key => $type){
        if($type['content_type'] == $email['Content Type']){
            $border_color = $type['color'];
        }
    };

    $content .= '<div class="col-6 col-md-3 mb-3">';
    $content .= '  <div class="d-flex justify-content-end" data-performance="'.$email['Performance'].'" data-type="'.$email['Content Type'].'" data-campaign="'.$email['Campaign Name'].'" data-thumbnail="'.$email['Thumbnail'].'">';
    $content .= '      <div class="position-absolute pe-2 pt-2">';
    if($email['Performance'] == 'Overperformed'){
        $content .= '          <img src="./assets/img/icos/ico-up-circle-green.svg" alt="" class="d-none icon-performance">';    
    } elseif ($email['Performance'] == 'Underperformed') {
        $content .= '          <img src="./assets/img/icos/ico-down-circle-red.svg" alt="" class="d-none icon-performance">';
    } else {
        $content .= '          <img src="./assets/img/icos/ico-equal-circle-yellow.svg" alt="" class="d-none icon-performance">';
    };
    $content .= '      </div>';
    $content .= '      <div class="btn-img email-item border-normal '.$border_color.'" data-email_id="'.$email['Email ID'].'">';

    if(file_exists('../assets/img/emails/'.$email['Thumbnail']) && !empty($email['Thumbnail'])){
        $content .= '          <img src="./assets/img/emails/'.$email['Thumbnail'].'" alt="" class="img-fluid border-0">';
    } else {
        $content .= '          <img src="./assets/img/default_mailing.png" alt="" class="img-fluid border-0">';
    }
    $content .= '      </div>';
    $content .= '  </div>';
    $content .= '</div>';

    $emails[] = array(
        'campaign_id' => $email['Campaign ID'],
        'campaign'    => $email['Campaign Name'],
        'subject'     => $email['Subject'],
        'thumbnail'   => $email['Thumbnail'],
        'name'        => $email['Name'],
        'email_id'    => $email['Email ID'],
        'performance' => $email['Performance'],
        'type'        => $email['Content Type'],
    );
}


$data = array(
    'campaigns' => $campaigns,
    'types'     => $contents_type,
    'emails'    => $emails,
    'content'   => $content
);


//echo "</pre>";

$data = json_encode($data);

echo $data;

?>
