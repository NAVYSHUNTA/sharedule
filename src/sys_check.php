<?php
  require_once('db_inc.php'); //データベースが必要なので読み込ませる
  $type = $_POST['btn']; //'register' or 'login'
  $u = $_POST['uid'] ;  //ユーザID
  $p = $_POST['pass'];  //パスワード
  if ($type == 'login'){
    $sql = "SELECT * FROM user WHERE user_id= '{$u}'  AND user_password='{$p}'";
    $rs = $conn->query($sql);
    if (!$rs) die('エラー: ' . $conn->error);
    $row= $rs->fetch_assoc();
    if ($row){ //Login succeeded
      $_SESSION['uid']   = $u;
      $_SESSION['uname'] = $row['user_name'];
      $_SESSION['max_notification'] = $row['max_notification'];
      $_SESSION['alert_days_before'] = $row['alert_days_before'];
      header('Location:index.php');   
      /*各項目について
      uid ユーザ名
      uname 生徒名
      max_notification 最大通知数
      alert_days_before 締切日
    */
    }else{
      $_SESSION['login_error'] = 'ユーザー名もしくはパスワードが異なります。';
      header('Location:?do=sys_login');   
    }
  }
?>