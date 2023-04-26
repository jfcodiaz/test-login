<?php
session_start();

$action = $_GET['action'] ?? 'form-login';

$public= ['', 'login','form-login'];

if (
  !isset($_SESSION['user']) && !in_array($action, $public)) {
  header('Location: /?action=form-login');
  echo $action;
}

include $action.'.php';