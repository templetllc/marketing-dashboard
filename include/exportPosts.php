 <?php
/* 
Content Analysis
https://libertynet.templet.io/marketing-dashboard/content-distribution-social-media-content-analysis.html
lo publicado:
    ▪post id: {string}
    ▪campaign name: {string}
    ▪campaign id: {string}
    ▪platform: {string}
    ▪fecha de publicación (agendada): {date}
    ▪Reach: {number}
    ▪Likes: {number}
    ▪Comments: {number}
    ▪Shares: {number}
    ▪Views: {number}
    ▪tipo de publicacion: {video | imagen}
 */

/*
POSTS
https://app.metricool.com/api/v2/analytics/posts/linkedin?blogId=3301043&userId=2679114&from=2024-05-05T00:00:00&to=2024-05-11T23:59:59&userToken=VUFTTUAVSIEHNTHUYAJWWQUEYVINMYBCXBMSQPEHQTHPRBMPGMFJHRXVZQTWINPR
{
    "blogId": 3301043,
    "pageId": "113278035070360",
    "postId": "113278035070360_363571503403779",
    "created": {
        "dateTime": "2024-05-28T16:29:37",
        "timezone": "Europe/Madrid"
    },
    "timestamp": 1716906577000,
    "link": "https://facebook.com/286163514477912/posts/363571503403779",
    "text": "En Liberty Networks, estamos orgullosos de ser el aliado estratégico de la Universidad de La Sabana, en su búsqueda por llevar la educación hacia el futuro. “Yo lo que veo en Liberty, es que con todas las capacidades que tienen de cómputo y de conectividad, por supuesto van a apalancar fuertemente el crecimiento y el desarrollo de la universidad” Carlos Martinez \uD83C\uDF1F\uD83D\uDCBB.\n\n​\n\nDescubra más en este video\uD83D\uDC49  ​​https://youtu.be/JHB5cVAbOXY",
    "type": "video",
    "shares": 0,
    "comments": 0,
    "reactions": 2,
    "impressions": 106,
    "impressionsPaid": 0,
    "impressionsOrganic": 106,
    "impressionsUnique": 95,
    "impressionsUniquePaid": 0,
    "impressionsUniqueOrganic": 95,
    "clicks": 3,
    "engagement": 5.2631578947368425,
    "picture": "https://scontent-lhr6-2.xx.fbcdn.net/v/t15.5256-10/442064468_412528658279859_463714316298361608_n.jpg?stp=dst-jpg_p130x130&_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_ohc=hc_WCxaHK1IQ7kNvgG2LHGI&_nc_ht=scontent-lhr6-2.xx&edm=AKIiGfEEAAAA&oh=00_AYDpiVK8jSA09OaOny4di-9LYVxi74gwT5gNIK158HkoHA&oe=666A48AF",
    "videoViews": 29,
    "videoViewsPaid": 0,
    "videoViewsOrganic": 29,
    "videoTimeWatched": 5,
    "linkclicks": 1,
    "spend": 0.0
},
*/

date_default_timezone_set('America/Bogota');

//Constants
$_blogId = '3301043';
$_userId = '2679114';
$_token = 'VUFTTUAVSIEHNTHUYAJWWQUEYVINMYBCXBMSQPEHQTHPRBMPGMFJHRXVZQTWINPR';
$_initUrl = 'blogId='.$_blogId.'&userId='.$_userId.'&userToken='.$_token;


$date_now = date('d-m-Y');
$date_past = strtotime('-1 day', strtotime($date_now));

$dateStart = '2024-02-01T00:00:00';
$dateEnd = date("Y-m-d", $date_past) . 'T23:59:59';

$_startDate = isset($_GET['s']) ? date("Y-m-d", strtotime($_GET['s'])).'T00:00:00' : $dateStart;
$_endDate = isset($_GET['e']) ? date("Y-m-d", strtotime($_GET['e'])). 'T23:59:59' : $dateEnd;


// $dateStart = '2024-05-16T00:00:00';
// $dateEnd = '2024-05-28T23:59:59';

$_start = date('Ymd', strtotime($_startDate));
$_end = date('Ymd', strtotime($_endDate));
$_timestamp = date('m/d/Y', strtotime($_endDate));
$_month = date('F', strtotime($_endDate));
$_year = date('Y', strtotime($_endDate));

$_posts = $_posts_bad = $_posts_all = array();

echo "<pre>";

//####  LINKEDIN  ####//
$_network = 'linkedin';
$response = getPost($_initUrl, $_startDate, $_endDate, $_network);

foreach($response->data as $data)
{

    $_posts_all[] = array(
        'post_id'       => $data->postId,
        'campaign_name' => '',
        'campaign_id'   => '',
        'platform'      => $_network,
        'created'       => $data->created->dateTime,
        'reach'         => isset($data->impressions) ? $data->impressions : 0,
        'likes'         => isset($data->likes) ? $data->likes : 0,
        'comments'      => isset($data->comments) ? $data->comments : 0,
        'shares'        => isset($data->shares) ? $data->shares : 0,
        'views'         => isset($data->viewers) ? $data->viewers : 0,
        'type'          => isset($data->type) ? $data->type : '',
        'thumbnail'     => isset($data->picture) ? $data->picture : '',
        'link'          => $data->url,
        'text'          => $data->comment
    );


    if(empty($data->picture)){
        $_posts_bad[] = array(
            'post_id'       => $data->postId,
            'campaign_name' => '',
            'campaign_id'   => '',
            'platform'      => $_network,
            'created'       => $data->created->dateTime,
            'reach'         => isset($data->impressions) ? $data->impressions : 0,
            'likes'         => isset($data->likes) ? $data->likes : 0,
            'comments'      => isset($data->comments) ? $data->comments : 0,
            'shares'        => isset($data->shares) ? $data->shares : 0,
            'views'         => isset($data->viewers) ? $data->viewers : 0,
            'type'          => isset($data->type) ? $data->type : '',
            'thumbnail'     => isset($data->picture) ? $data->picture : '',
            'link'          => $data->url,
            'text'          => $data->comment
        );
        continue;  
    }; 

    list($width, $height) = @getimagesize($data->picture);

    if(($width != $height) || empty($width)){
        $_posts_bad[] = array(
            'post_id'       => $data->postId,
            'campaign_name' => '',
            'campaign_id'   => '',
            'platform'      => $_network,
            'created'       => $data->created->dateTime,
            'reach'         => isset($data->impressions) ? $data->impressions : 0,
            'likes'         => isset($data->likes) ? $data->likes : 0,
            'comments'      => isset($data->comments) ? $data->comments : 0,
            'shares'        => isset($data->shares) ? $data->shares : 0,
            'views'         => isset($data->viewers) ? $data->viewers : 0,
            'type'          => isset($data->type) ? $data->type : '',
            'thumbnail'     => isset($data->picture) ? $data->picture : '',
            'link'          => $data->url,
            'text'          => $data->comment
        );
        continue;
    };

    $_posts[] = array(
        'post_id'       => $data->postId,
        'campaign_name' => '',
        'campaign_id'   => '',
        'platform'      => $_network,
        'created'       => $data->created->dateTime,
        'reach'         => isset($data->impressions) ? $data->impressions : 0,
        'likes'         => isset($data->likes) ? $data->likes : 0,
        'comments'      => isset($data->comments) ? $data->comments : 0,
        'shares'        => isset($data->shares) ? $data->shares : 0,
        'views'         => isset($data->viewers) ? $data->viewers : 0,
        'type'          => isset($data->type) ? $data->type : '',
        'thumbnail'     => isset($data->picture) ? $data->picture : '',
        'link'          => $data->url,
        'text'          => $data->comment
    );
}


//####  INSTAGRAM  ####//
$_network = 'instagram';
$response = getPostIG($_initUrl, $_start, $_end, $_network);

foreach($response as $data)
{   
    $_posts_all[] = array(
        'post_id'       => $data->postId,
        'campaign_name' => '',
        'campaign_id'   => '',
        'platform'      => $_network,
        'created'       => $data->created,
        'reach'         => isset($data->reach) ? $data->reach : 0,
        'likes'         => isset($data->likes) ? $data->likes : 0,
        'comments'      => isset($data->comments) ? $data->comments : 0,
        'shares'        => isset($data->shares) ? $data->shares : 0,
        'views'         => isset($data->impressions) ? $data->impressions : 0,
        'type'          => $data->type,
        'thumbnail'     => isset($data->imageUrl) ? $data->imageUrl : '',
        'link'          => $data->url,
        'text'          => $data->content
    );

    if(empty($data->imageUrl)){
        $_posts_bad[] = array(
            'post_id'       => $data->postId,
            'campaign_name' => '',
            'campaign_id'   => '',
            'platform'      => $_network,
            'created'       => $data->created->dateTime,
            'reach'         => isset($data->impressions) ? $data->impressions : 0,
            'likes'         => isset($data->likes) ? $data->likes : 0,
            'comments'      => isset($data->comments) ? $data->comments : 0,
            'shares'        => isset($data->shares) ? $data->shares : 0,
            'views'         => isset($data->viewers) ? $data->viewers : 0,
            'type'          => isset($data->type) ? $data->type : '',
            'thumbnail'     => isset($data->picture) ? $data->picture : '',
            'link'          => $data->url,
            'text'          => $data->comment
        );
        continue;
    };

    list($width, $height) = @getimagesize($data->imageUrl);

    if(($width != $height) || empty($width)){
        $_posts_bad[] = array(
            'post_id'       => $data->postId,
            'campaign_name' => '',
            'campaign_id'   => '',
            'platform'      => $_network,
            'created'       => isset($data->created->dateTime) ? $data->created->dateTime : '',
            'reach'         => isset($data->impressions) ? $data->impressions : 0,
            'likes'         => isset($data->likes) ? $data->likes : 0,
            'comments'      => isset($data->comments) ? $data->comments : 0,
            'shares'        => isset($data->shares) ? $data->shares : 0,
            'views'         => isset($data->viewers) ? $data->viewers : 0,
            'type'          => isset($data->type) ? $data->type : '',
            'thumbnail'     => isset($data->picture) ? $data->picture : '',
            'link'          => $data->url,
            'text'          => isset($data->comment) ? $data->comment : ''
        );
        continue;
    }

    $_posts[] = array(
        'post_id'       => $data->postId,
        'campaign_name' => '',
        'campaign_id'   => '',
        'platform'      => $_network,
        'created'       => $data->created,
        'reach'         => isset($data->reach) ? $data->reach : 0,
        'likes'         => isset($data->likes) ? $data->likes : 0,
        'comments'      => isset($data->comments) ? $data->comments : 0,
        'shares'        => isset($data->shares) ? $data->shares : 0,
        'views'         => isset($data->impressions) ? $data->impressions : 0,
        'type'          => $data->type,
        'thumbnail'     => isset($data->imageUrl) ? $data->imageUrl : '',
        'link'          => $data->url,
        'text'          => $data->content
    );
}

//####  FACEBOOK  ####//
$_network = 'facebook';
$response = getPost($_initUrl, $_startDate, $_endDate, $_network);

foreach($response->data as $data)
{
    $_posts_all[] = array(
        'post_id'       => $data->postId,
        'campaign_name' => '',
        'campaign_id'   => '',
        'platform'      => $_network,
        'created'       => $data->created->dateTime,
        'reach'         => isset($data->impressions) ? $data->impressions : 0,
        'likes'         => isset($data->reactions) ? $data->reactions : 0,
        'comments'      => isset($data->comments) ? $data->comments : 0,
        'shares'        => isset($data->shares) ? $data->shares : 0,
        'views'         => isset($data->viewers) ? $data->viewers : 0,
        'type'          => isset($data->type) ? $data->type : '',
        'thumbnail'     => isset($data->picture) ? $data->picture : '',
        'link'          => $data->link,
        'text'          => $data->text
    );

    if(empty($data->picture)) {
        $_posts_bad[] = array(
            'post_id'       => $data->postId,
            'campaign_name' => '',
            'campaign_id'   => '',
            'platform'      => $_network,
            'created'       => $data->created->dateTime,
            'reach'         => isset($data->impressions) ? $data->impressions : 0,
            'likes'         => isset($data->reactions) ? $data->reactions : 0,
            'comments'      => isset($data->comments) ? $data->comments : 0,
            'shares'        => isset($data->shares) ? $data->shares : 0,
            'views'         => isset($data->viewers) ? $data->viewers : 0,
            'type'          => isset($data->type) ? $data->type : '',
            'thumbnail'     => isset($data->picture) ? $data->picture : '',
            'link'          => $data->link,
            'text'          => $data->text
        );
        continue;
    };

    list($width, $height) = @getimagesize($data->picture);

    if(($width != $height) || empty($width) || $width < 300){
        $_posts_bad[] = array(
            'post_id'       => $data->postId,
            'campaign_name' => '',
            'campaign_id'   => '',
            'platform'      => $_network,
            'created'       => $data->created->dateTime,
            'reach'         => isset($data->impressions) ? $data->impressions : 0,
            'likes'         => isset($data->reactions) ? $data->reactions : 0,
            'comments'      => isset($data->comments) ? $data->comments : 0,
            'shares'        => isset($data->shares) ? $data->shares : 0,
            'views'         => isset($data->viewers) ? $data->viewers : 0,
            'type'          => isset($data->type) ? $data->type : '',
            'thumbnail'     => isset($data->picture) ? $data->picture : '',
            'link'          => $data->link,
            'text'          => $data->text
        );
        continue;
    };

    $_posts[] = array(
        'post_id'       => $data->postId,
        'campaign_name' => '',
        'campaign_id'   => '',
        'platform'      => $_network,
        'created'       => $data->created->dateTime,
        'reach'         => isset($data->impressions) ? $data->impressions : 0,
        'likes'         => isset($data->reactions) ? $data->reactions : 0,
        'comments'      => isset($data->comments) ? $data->comments : 0,
        'shares'        => isset($data->shares) ? $data->shares : 0,
        'views'         => isset($data->viewers) ? $data->viewers : 0,
        'type'          => isset($data->type) ? $data->type : '',
        'thumbnail'     => isset($data->picture) ? $data->picture : '',
        'link'          => $data->link,
        'text'          => $data->text
    );
}

//print_r($_posts);

echo "Done!";
echo "</pre>";

//Save File
$summaryString = json_encode($_posts);
$errorsString = json_encode($_posts_bad);
$allString = json_encode($_posts_all);

//LOCAL
$fileDir = '../data/';
$fileSummary = $fileDir.'content_analysis.json';
file_put_contents($fileSummary, $summaryString);

$fileSummary_error = $fileDir.'content_analysis_error.json';
file_put_contents($fileSummary_error, $errorsString);

$fileSummary_all = $fileDir.'content_analysis_all.json';
file_put_contents($fileSummary_all, $allString);


//SERVER
$fileDirServer = "/home/u348838306/domains/templet.io/public_html/clients/libertynet/marketing-dashboard/data/";

$fileSummary2 = $fileDirServer.'content_analysis.json';
file_put_contents($fileSummary2, $summaryString);

$fileSummary_error = $fileDirServer.'content_analysis_error.json';
file_put_contents($fileSummary_error, $errorsString);

$fileSummary_all = $fileDirServer.'content_analysis_all.json';
file_put_contents($fileSummary_all, $allString);


function getPost($initUrl, $start, $end, $network)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://app.metricool.com/api/v2/analytics/posts/'.$network.'?'.$initUrl.'&from='.$start.'&to='.$end,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Cookie: AWSALB=3KvmGV6+HSoXyJTe0NKhm+fuX+ZB3YTBndZA0jXev+PYHkmoMqpx0S7CKMobKFATZPM6kK1Mp08qRQGPQv7r3cGAvuhqdJkuR4xvEzpogn0/4MsBl1Sytp1babix; AWSALBCORS=3KvmGV6+HSoXyJTe0NKhm+fuX+ZB3YTBndZA0jXev+PYHkmoMqpx0S7CKMobKFATZPM6kK1Mp08qRQGPQv7r3cGAvuhqdJkuR4xvEzpogn0/4MsBl1Sytp1babix; JSESSIONID=80E827D793E9E0CE43261A0A1F347052'
        ),
    ));
    $response = curl_exec($curl);
    $response = json_decode($response);
    return $response;
}

function getPostIG($initUrl, $start, $end, $network)
{
    $curl = curl_init();

    //echo 'https://app.metricool.com/api/stats/instagram/posts?'.$initUrl.'&start='.$start.'&end='.$end;

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://app.metricool.com/api/stats/'.$network.'/posts/?'.$initUrl.'&start='.$start.'&end='.$end,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Cookie: AWSALB=3KvmGV6+HSoXyJTe0NKhm+fuX+ZB3YTBndZA0jXev+PYHkmoMqpx0S7CKMobKFATZPM6kK1Mp08qRQGPQv7r3cGAvuhqdJkuR4xvEzpogn0/4MsBl1Sytp1babix; AWSALBCORS=3KvmGV6+HSoXyJTe0NKhm+fuX+ZB3YTBndZA0jXev+PYHkmoMqpx0S7CKMobKFATZPM6kK1Mp08qRQGPQv7r3cGAvuhqdJkuR4xvEzpogn0/4MsBl1Sytp1babix; JSESSIONID=80E827D793E9E0CE43261A0A1F347052'
        ),
    ));
    $response = curl_exec($curl);
    $response = json_decode($response);
    return $response;
}

