<?php
echo json_encode(sendDataToBitrix('profile', []), JSON_UNESCAPED_UNICODE);

 function sendDataToBitrix($method, $data) {
    $queryUrl = 'https://b24-efglx4.bitrix24.ru/rest/1/w3bdo3i6kmtww5rv/' . $method ;
    $queryData = http_build_query($data);

    $curl = curl_init();
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
    return json_decode($result, 1);
  }
  
?>