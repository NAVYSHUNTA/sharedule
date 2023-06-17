<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-TYPE" content="text/html; charset=UTF-8">
  <link rel="stylesheet" TYPE="text/css" href="css/style.css">
  <title>sharedule</title>
</head>

<body>
  <div class="wrapper">
    <div id="navbar">
      <a href="?do=timeTable" style="width: 80px; height: 30px;"><img src="./images/logo.png" alt="メニュー1" /></a>
      <a href="?do=theme" class="btn btn-flat"><span>課題</span></a>
      <a href="?do=friendList" class="btn btn-flat"><span>フレンドリスト</span></a>
      <a href="?do=setting" class="btn btn-flat"><span>設定</span></a>
      <?php
        echo "<a class=\"btn btn-flat\"><span>{$_SESSION['uname']}</span></a>";
      ?>
      <a href="?do=sys_logout" class="btn btn-flat">ログアウト</a>
    </div>
    <?php
      echo "<h1>{$_SESSION['now_page']}</h1>";
    ?>