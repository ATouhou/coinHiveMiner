<?php
/* Broken don´t use it
include "../api/dbConnect.php";

$stmt = $con->prepare("SELECT username from user");
$stmt->execute();
$stmt->bind_result($username);

while ($stmt->fetch()) {
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://api.coin-hive.com/user/balance?secret='.$coinHiveSecret.'&name='.$username
  ));
  $result = curl_exec($curl);
  $json = json_decode($result);
  $stmt2 = $con->prepare("UPDATE user SET balance = ? WHERE username=?");
  $stmt2->bind_param("is", $json['balance'], $username);
  $stmt2->execute();
  $stmt2->close();

  //var_dump($result);
}
$stmt->close();
*/
