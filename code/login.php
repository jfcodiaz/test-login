<?php
header('Content-type:application/json');

$dbFake = [
  'usuario' => 'passW0rd1',
  'usr' => 'pass'
];

$user = $_POST['user'];
$pass = $_POST['pass'];

$success = false;
$error = 'loggin failed, check your email and pass';

if(isset($dbFake[$user]) && $pass== $dbFake[$user]){
  $success = true;
  $error = '';
  $_SESSION['user'] = $user;
}

echo json_encode([
  'success' => $success,
  'error' => $error
]);
