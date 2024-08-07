<?php
date_default_timezone_set('America/Bogota');

//Constants
$_blogId = '3301043';
$_userId = '2679114';
$_token = 'VUFTTUAVSIEHNTHUYAJWWQUEYVINMYBCXBMSQPEHQTHPRBMPGMFJHRXVZQTWINPR';
$_initUrl = 'blogId='.$_blogId.'&userId='.$_userId.'&userToken='.$_token;

for($i = 1; $i < 30; $i++){

	$lastDay = mktime(0, 0, 0, date("m")  , date("d")-$i, date("Y"));
	$dateStart = date("Y-m-d", $lastDay) . 'T00:00:00';
	$dateEnd = date("Y-m-d", $lastDay) . 'T23:59:59';

	// $dateStart = '2024-05-05T00:00:00';
	// $dateEnd = '2024-05-11T23:59:59';

	$_startDate = isset($_GET['s']) ? $_GET['s'] : $dateStart;
	$_endDate = isset($_GET['e']) ? $_GET['e'] : $dateEnd;

	$_start = date('Ymd', strtotime($_startDate));
	$_end = date('Ymd', strtotime($_endDate));
	$_timestamp = date('m/d/Y', strtotime($_endDate));
	$_month = date('F', strtotime($_endDate));
	$_year = date('Y', strtotime($_endDate));

	echo "<pre>";
	//####  LINKEDIN  ####//
	//Followers
	$_network = 'linkedin';
	$response = getTimeline($_initUrl, $_startDate, $_endDate, 'Followers', $_network, 'account');
	$linkedin_followers = $response->data[0]->values[0]->value;
	//Reach
	$response = getTimeline($_initUrl, $_startDate, $_endDate, 'CompanyImpressions', $_network, 'account');
	$linkedin_reach = 0;
	foreach($response->data[0]->values as $data)
	{
		$linkedin_reach += $data->value;
	}
	//Like
	$response = getTimeline($_initUrl, $_startDate, $_endDate, 'likes', $_network, 'posts');
	$linkedin_like = 0;
	foreach($response->data[0]->values as $data)
	{
		$linkedin_like += $data->value;
	}
	//Share
	$response = getTimeline($_initUrl, $_startDate, $_endDate, 'shares', $_network, 'posts');
	$linkedin_share = 0;
	foreach($response->data[0]->values as $data)
	{
		$linkedin_share += $data->value;
	}
	//Engagement
	$response = getTimeline($_initUrl, $_startDate, $_endDate, 'engagement', $_network, 'posts');
	$linkedin_engagement = 0;
	foreach($response->data[0]->values as $data)
	{
		$linkedin_engagement += $data->value;
	}
	//Comment
	$response = getTimeline($_initUrl, $_startDate, $_endDate, 'comments', $_network, 'posts');
	$linkedin_comment = 0;
	foreach($response->data[0]->values as $data)
	{
		$linkedin_comment += $data->value;
	}
	//Click
	$response = getTimeline($_initUrl, $_startDate, $_endDate, 'clicks', $_network, 'posts');
	$linkedin_clicks = 0;
	foreach($response->data[0]->values as $data)
	{
		$linkedin_clicks += $data->value;
	}


	//####  INSTAGRAM  ####//
	//Followers
	$_network = 'instagram';
	$response = getTimeline($_initUrl, $_startDate, $_endDate, 'Followers', $_network, 'account');
	$instagram_followers = $response->data[0]->values[0]->value;
	//Reach
	$response = getFunction('igPostsReach', $_initUrl, $_start, $_end);
	$instagram_reach = $response[0][1];
	//Saved
	$response = getTimeline($_initUrl, $_startDate, $_endDate, 'saved', $_network, 'posts');
	$instagram_saved = 0;
	foreach($response->data[0]->values as $data)
	{
		$instagram_saved += $data->value;
	}
	//Shares
	$response = getTimeline($_initUrl, $_startDate, $_endDate, 'shares', $_network, 'posts');
	$instagram_shares = 0;
	foreach($response->data[0]->values as $data)
	{
		$instagram_shares += $data->value;
	}
	//Engagement
	$response = getFunction('igEngagement', $_initUrl, $_start, $_end);
	$instagram_engagement = $response[0][1];
	//Likes
	$response = getFunction('igLikes', $_initUrl, $_start, $_end);
	$instagram_likes = $response[0][1];
	//Comments
	$response = getFunction('igComments', $_initUrl, $_start, $_end);
	$instagram_comments = $response[0][1];



	//####  FACEBOOK  ####//
	//Followers
	$_network = 'facebook';
	$response = getTimeline($_initUrl, $_startDate, $_endDate, 'pageFollows', $_network, 'account');
	$dates = count($response->data[0]->values);
	$facebook_followers = $response->data[0]->values[$dates-1]->value;
	//Reach
	$response = getTimeline($_initUrl, $_startDate, $_endDate, 'impressions', $_network, 'posts');
	$facebook_reach = 0;
	foreach($response->data[0]->values as $data)
	{
		$facebook_reach += $data->value;
	}
	//Reactions
	$response = getTimeline($_initUrl, $_startDate, $_endDate, 'reactions', $_network, 'posts');
	$facebook_reactions = 0;
	foreach($response->data[0]->values as $data)
	{
		$facebook_reactions += $data->value;
	}
	//Shares
	$response = getTimeline($_initUrl, $_startDate, $_endDate, 'shares', $_network, 'posts');
	$facebook_shares = 0;
	foreach($response->data[0]->values as $data)
	{
		$facebook_shares += $data->value;
	}
	//Engagement
	$response = getTimeline($_initUrl, $_startDate, $_endDate, 'engagement', $_network, 'posts');
	$facebook_engagement = 0;
	foreach($response->data[0]->values as $data)
	{
		$facebook_engagement += $data->value;
	}



	//####  TWITTER  ####//
	//Followers
	$_network = 'twitter';
	$response = getFollowX($_initUrl, $_start, $_end);
	$dates = count($response);
	$twitter_followers = $response[$dates-1][1];



	$summary = array(
		'timestamp'			  => $_timestamp,
		'campaign'			  => 'Social media organic',
		'collateral_name' 	  => 'Social media',
		'month'				  => $_month,
		'year'				  => $_year,
		'linkedin_followers'  => $linkedin_followers,
		'linkedin_reach'	  => $linkedin_reach,
		'linkedin_like'		  => $linkedin_like,
		'linkedin_share'      => $linkedin_share,
		'linkedin_engagement' => number_format($linkedin_engagement, 2),
		'linkedin_comment'	  => $linkedin_comment,
		'linkedin_clicks'	  => $linkedin_clicks,

		'instagram_followers' => $instagram_followers,
		'instagram_reach'	  => $instagram_reach,
		'instagram_saved'	  => $instagram_saved,
		'instagram_shares'	  => $instagram_shares,
		'instagram_engagement'=> $instagram_engagement,
		'instagram_likes'	  => $instagram_likes,
		'instagram_comments'  => $instagram_comments,

		'facebook_followers'  => $facebook_followers,
		'facebook_reach'	  => $facebook_reach,
		'facebook_reactions'  => $facebook_reactions,
		'facebook_shares'	  => $facebook_shares,
		'facebook_engagement' => number_format($facebook_engagement, 2),

		'twitter_followers'   => intval($twitter_followers),
	);


	print_r($summary);

	echo "</pre>";

	//Save File
	$fileDir = '../data/summary/';
	$fileSummary = $fileDir.'summary_'.$_end.'.json';

	$summaryString = json_encode($summary);
	file_put_contents($fileSummary, $summaryString);

	sleep(30);

};

// // POSTS
// // https://app.metricool.com/api/v2/analytics/posts/linkedin?blogId=3301043&userId=2679114&from=2024-05-05T00:00:00&to=2024-05-11T23:59:59&userToken=VUFTTUAVSIEHNTHUYAJWWQUEYVINMYBCXBMSQPEHQTHPRBMPGMFJHRXVZQTWINPR


function getTimeline($initUrl, $start, $end, $metric, $network, $type)
{
	$curl = curl_init();

	curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://app.metricool.com/api/v2/analytics/timelines?'.$initUrl.'&from='.$start.'&to='.$end.'&metric='.$metric.'&network='.$network.'&metricType='.$type,
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

function getPosts($initUrl, $start, $end, $network)
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

function getFunction($fn, $initUrl, $start, $end)
{
	$curl = curl_init();

	curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://app.metricool.com/api/stats/timeline/'.$fn.'?'.$initUrl.'&start='.$start.'&end='.$end,
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

function getFollowX($initUrl, $start, $end)
{
	$curl = curl_init();

	curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://app.metricool.com/api/stats/timeline/twitterFollowers?'.$initUrl.'&start='.$start.'&end='.$end,
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



?>