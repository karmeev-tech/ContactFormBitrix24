<?php
function REST_API($method, array $params)
{
	$queryUrl = 'https://xxxx.bitrix24.ru/rest/xxxxxx/'.$method.'.json';
	$queryData = http_build_query(
		array_merge($params)
	);

	$curl = curl_init($queryUrl);
	curl_setopt_array($curl, array(
		// CURLOPT_SSL_VERIFYPEER => 0,
		CURLOPT_POST => 1,
		//CURLOPT_HEADER => 0,
		CURLOPT_RETURNTRANSFER => 1,
		//CURLOPT_URL => $queryUrl,
		CURLOPT_POSTFIELDS => $queryData,


	)); 
    

	 //echo '<br/><br/>'.$queryUrl.'?'.$queryData;
	$result = curl_exec($curl);

	 //echo 'rest result: ';
     //var_dump($result);
	curl_close($curl);

	return $result;
}

function executeREST($method, array $params, $domain, $accessToken){
    $queryUrl = 'https://'.$domain.'/rest/'.$method.'.json';
    $queryData = http_build_query(
        array_merge($params, array("auth" => $accessToken))
    );
    $curl = curl_init($queryUrl);
    curl_setopt_array($curl, array(		
        CURLOPT_POST => 1,		
        CURLOPT_RETURNTRANSFER => 1,		
        CURLOPT_POSTFIELDS => $queryData,
    ));	
    $result = curl_exec($curl);
    curl_close($curl);
    return json_decode($result, true);
}

function console_log($data){ // сама функция
    if(is_array($data) || is_object($data)){
		echo("<script>console.log('php_array: ".json_encode($data)."');</script>");
	} else {
		echo("<script>console.log('php_string: ".$data."');</script>");
	}
}

function im($user_id,$msg){	// функция вызова уведомления в б24 
	$msgbox = REST_API('im.notify', array('to' =>$user_id,'message'=>$msg));
}



?>
