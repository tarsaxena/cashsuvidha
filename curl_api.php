<?php

//print_r($_POST);
//exit;


if ($_SERVER['HTTP_HOST'] == "localhost") {
//    echo "in if";
//    print_r($_SERVER['HTTP_HOST']);exit;
  $basrURL = 'https://localhost/cash_suvidha/';
//echo $basrURL;exit;
} else {
//    echo "in else";
//     print_r($_SERVER['HTTP_HOST']);exit;
  $basrURL = 'https://' . $_SERVER['HTTP_HOST'] . '/';
}
?>
<?php

//echo $_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'];exit;
//print_r($basrURL.$_POST['url']);exit;
//echo "here";
//print_r($_POST);exit;
if ($_POST['url'] != '') {

  if ($_POST['url'] == 'register_member.php' || $_POST['url'] == 'login_json.php') {
    $address = $_POST['city'] ? $_POST['city'] : 'India+New Delhi';
    $address = preg_replace('/\s+/', '%20', $address);
    //print_r($address);
    $location = "http://maps.google.com/maps/api/geocode/json?address=$address&sensor=false&region=India";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $location);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $response = curl_exec($ch);
    curl_close($ch);
    $response_a = json_decode($response);
    $_POST['lat'] = $response_a->results[0]->geometry->location->lat;
    $_POST['longi'] = $response_a->results[0]->geometry->location->lng;
//     print_r($_POST);exit;
  }

  $data_json = json_encode($_POST);
  //print_r($data_json);exit;
//  print_r($data_json);exit;
//$data_json = $_POST;
  $url = $basrURL . $_POST['url'];
  $ch = curl_init();

  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Access-Control-Allow-Origin: *'));
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);
  curl_close($ch);
  echo $response;
  if (curl_errno($ch)) {
    echo curl_error($ch);
    curl_close($ch);
    exit();
  }
} else {
  $response = 'Parameter Missing';
  echo $response;
}
//return $response;
