<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

$action = '/sys_login'; //ホームページ (eps_home)をデフォルト機能とする
if (isset($_GET['do'])) {//index.php?do=に続くパラメータで実行する機能を指定
  $action = $_GET['do'];
}

if ($_SESSION['uid']) {
  $action = 'timeTable';
}

include('src/' . $action . '.php'); //指定されたファイルを読み込む
?>
