<?php


function REST_API($method, array $params)
{
	$queryUrl = 'https://b24-efglx4.bitrix24.ru/rest/1/w3bdo3i6kmtww5rv/'.$method.'.json';
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

	 echo '<br/><br/>'.$queryUrl.'?'.$queryData;
	$result = curl_exec($curl);

	 echo 'rest result: ';var_dump($result);
	curl_close($curl);

	return json_decode($result, true);
}


    $name = $_POST['name'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subj = $_POST['subj'];

    //$queryUrl = 'https://b24-nsad9o.bitrix24.ru/rest/1/r3unctg0vam7omey/user.current.json';
  

  
    $queryData = array(
        'fields' => array(
    'TITLE' => $company,
    'NAME' => $name,
    'EMAIL' => Array(
           "n0" => Array(
               "VALUE" => "{$email}",
               "VALUE_TYPE" => "WORK",
           ),
       ),
       'PHONE' => Array(
           "n0" => Array(
               "VALUE" => "{$phone}",
               "VALUE_TYPE" => "WORK",
           ),
       ),
       'COMMENTS' => Array(
           "n0" => Array(
               "VALUE" => "{$subj}",
           ),
       ),
  ),
        'params' => array("REGISTER_SONET_EVENT" => "Y")
    );
    
  
 REST_API('crm.deal.add', $queryData);
    // обращаемся к Битрикс24 curl_exec
  /*  $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_POST => 1,
        CURLOPT_HEADER => 0,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $queryUrl,
        CURLOPT_POSTFIELDS => $queryData,
    ));
    $result = curl_exec($curl);
    curl_close($curl);
    $result = json_decode($result, 1);
    if (array_key_exists('error', $result)) echo "Ошибка при сохранении лида: ".$result['error_description'].
    "<br/>";*/



?>