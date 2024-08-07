<?php
$platformFilter = isset($_GET['platform']) ? $_GET['platform'] : '';
$postfield = '""';
if(strlen($platformFilter) > 0){
    $postfield = '{"platformFilter": "'.$platformFilter.'",}';
};

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://prod-90.westus.logic.azure.com:443/workflows/e35593cf8bdf4cff87ab89e8b5500de0/triggers/manual/paths/invoke?api-version=2016-06-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=dPnVPbgP77YK7Vk1HEVWSvB2ux98H9TxTGoqBUahWGY',
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

$platforms = $platforms_type = $contents_type_aux = $posts = $postList = $errors = array();

//Clear array
foreach ($response['postList'] as $key => $post) {

    $postList[] = array(
        'post_id'     => $post['postId'],
        'campaign'    => $post['campaignName'],
        'platform'    => $post['platform'],
        'thumbnail'   => $post['thumbnail'],
        'performance' => $post['Performance']
    );
};



//Obtain distinct Platform name
foreach ($postList as $key => $post) {
    $selected = 0;
    if($platformFilter == $post['platform']){
        $selected = 1;
    };
    $platforms[] = array(
        'platform'    => $post['platform'],
        'selected'    => $selected
    );
}
$platforms = array_unique($platforms, SORT_REGULAR);


//Order Alpha platforms
$aux = array();
foreach ($platforms as $key => $row) {
    $aux[$key] = $row['platform'];
}
array_multisort($aux, SORT_ASC, $platforms);


//Obtain Contents Type
foreach ($postList as $key => $post) {
    if(!empty($post['platform']))
    {
        $platforms_type[] = array(
            'platform' => $post['platform'],
        );
    }
}
$platforms_type = array_unique($platforms_type, SORT_REGULAR);


//Order Alpha Contents Type
$aux = array();
foreach ($platforms_type as $key => $row) {
    $aux[$key] = $row['platform'];
}
array_multisort($aux, SORT_ASC, $platforms_type);

//Asign color too content type
$type_color = array('border-img-red-dark', 'border-img-purple-light', 'border-img-purple', 'border-img-yellow', '', '');
$bg_color = array('bg-red-dark', 'bg-purple-light', 'bg-purple', 'bg-yellow', '', '');
foreach ($platforms_type as $key => $row) {
    
    $html = '<div class="d-inline-flex align-items-center">';
    $html .= '    <div><span class="legend-indicator d-flex '.$bg_color[$key].'"></span></div>';
    $html .= '    <div><p class="mb-0 me-3 fw-bold">'.$row['platform'].'</p></div>';
    $html .= '</div>';


    $platforms_type_aux[] = array(
        'platform' => $row['platform'],
        'color'        => $type_color[$key],
        'legend'       => $html
    );
};
$platforms_type = $platforms_type_aux;


//Obtain emails data
$content = "";
foreach ($postList as $key => $post) {
    
    $border_color = '';
    foreach ($platforms_type as $key => $type){
        if($type['platform'] == $post['platform']){
            $border_color = $type['color'];
        }
    };

    $content .= '<div class="col-6 col-md-3 mb-3">';
    $content .= '  <div class="d-flex justify-content-end" data-performance="'.$post['performance'].'" data-platform="'.$post['platform'].'">';
    $content .= '      <div class="position-absolute pe-2 pt-2">';
    if($post['performance'] == 'Overperformed'){
        $content .= '          <img src="./assets/img/icos/ico-up-circle-green.svg" alt="" class="d-none icon-performance">';    
    } elseif ($post['performance'] == 'Underperformed') {
        $content .= '          <img src="./assets/img/icos/ico-down-circle-red.svg" alt="" class="d-none icon-performance">';
    } else {
        $content .= '          <img src="./assets/img/icos/ico-equal-circle-yellow.svg" alt="" class="d-none icon-performance">';
    };
    $content .= '      </div>';
    $content .= '      <div class="btn-img post-item" data-post_id="'.$post['post_id'].'">';
    $content .= '          <img src="./assets/img/content-analysis-social-media/'.$post['thumbnail'].'" alt="" class="img-fluid border-0 '.$border_color.'">';
    $content .= '      </div>';
    $content .= '  </div>';
    $content .= '</div>';

    $posts[] = array(
        'post_id'     => $post['post_id'],
        'campaign'    => $post['campaign'],
        'platform'    => $post['platform'],
        'thumbnail'   => $post['thumbnail'],
        'performance' => $post['performance']
    );
}

$data = array(
    'platforms' => $platforms,
    'types'     => $platforms_type,
    'posts'     => $posts,
    'content'   => $content,
    'errors'    => $errors
);


//echo "</pre>";

$data = json_encode($data);

echo $data;

?>
