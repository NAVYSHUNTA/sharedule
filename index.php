<?php
session_start();

$action = '/src/sys_login'; //ホームページ (eps_home)をデフォルト機能とする
if (isset($_GET['do'])) {//index.php?do=に続くパラメータで実行する機能を指定
  $action = '/src/'.$_GET['do'];
}
include(dirname(__FILE__) . $action . '.php'); //指定されたファイルを読み込む
?>
