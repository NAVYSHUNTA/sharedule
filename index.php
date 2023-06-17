<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

$action = 'sys_login'; //ホームページ (eps_home)をデフォルト機能とする
$_SESSION['now_page'] = ""; //ページ名

if ($_SESSION['uid']) {
  $action = 'timeTable'; //セッションが存在すれば初期ページをtimeTable.phpとする
}

if (isset($_GET['do'])) {//index.php?do=に続くパラメータで実行する機能を指定
  $action = $_GET['do'];
  switch ($action) {
    case "friendList":
      $_SESSION['now_page'] = "フレンドリスト";
      break;

    case "setting":
      $_SESSION['now_page'] = "設定ページ";
      break;

    case "theme":
      $_SESSION['now_page'] = "課題一覧";
      break;

    case "timeTable":
      $_SESSION['now_page'] = "時間割";
      break;
  }
}

if ($action != "sys_logout" && $action != "sys_login" && $action != "goodbye"){
  include('src/pg_header.php'); //ヘッダー部分を読み込む
}
include('src/' . $action . '.php'); //指定されたファイルを読み込む  
?>
