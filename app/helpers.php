<?php
  
function customErrorLog($string){
	if(ENABLE_CUSTOM_ERROR_LOG === TRUE){
		error_log('Log at : ' . date('Y-m-d H:i:s') .' ==> ' . $string . PHP_EOL, 3, CUSTOM_ERROR_LOG_FILE);
		error_log('-----------------------------------------------' . PHP_EOL, 3, CUSTOM_ERROR_LOG_FILE);
	}
}

function isJSON($string){
   return is_string($string) && is_array(json_decode($string, true)) && (json_last_error() == JSON_ERROR_NONE) ? true : false;
}

function customEscape($mysqli, $string){
	return mysqli_real_escape_string($mysqli, $string);
}

function curlInstagramUserData($username = 'erakhil08'){
	if($username){
		$handle = curl_init();
		$url = "https://www.instagram.com/" . $username . "/?__a=1";
		$url  = 'https://i.instagram.com/api/v1/users/198945880/info/';
		curl_setopt($handle, CURLOPT_URL, $url);
		$agents = array(
			'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:7.0.1) Gecko/20100101 Firefox/7.0.1',
			'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1.9) Gecko/20100508 SeaMonkey/2.0.4',
			'Mozilla/5.0 (Windows; U; MSIE 7.0; Windows NT 6.0; en-US)',
			'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_7; da-dk) AppleWebKit/533.21.1 (KHTML, like Gecko) Version/5.0.5 Safari/533.21.1'
		);
		curl_setopt($handle,CURLOPT_USERAGENT,$agents[array_rand($agents)]);
		curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
		$output = curl_exec($handle);
		curl_close($handle);
		customErrorLog('Calling : curlInstagramUserData + '.$username);
		customErrorLog('$url : '.$url);
		customErrorLog($output);
		if(isJSON($output)) return $output; //json_decode()
		else return false;
	}else{
		return false;
	}
}

function curlInstagramTagData($tag = 'india'){
	if($tag){
		$handle = curl_init();
		$url = "https://www.instagram.com/explore/tags/".$tag."/?__a=1";
		curl_setopt($handle, CURLOPT_URL, $url);
		curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
		$output = curl_exec($handle);
		if($output === false)
		{
		    echo 'Curl error: ' . curl_error($handle);
		    die;
		}
		curl_close($handle);
		if(isJSON($output)) return json_decode($output);
		else return false;
	}else{
		return false;
	}
}

function curlInstagramMediaData($media = ''){
	if($media){
		$handle = curl_init();
		$url = "https://www.instagram.com/p/".$media."/?__a=1";
		curl_setopt($handle, CURLOPT_URL, $url);
		curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
		$output = curl_exec($handle);
		if($output === false)
		{
		    echo 'Curl error: ' . curl_error($handle);
		    die;
		}
		curl_close($handle);
		if(isJSON($output)) return json_decode($output);
		else return false;
	}else{
		return false;
	}
}