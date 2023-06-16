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
      <a href="timeTable.php" style="width: 80px; height: 30px;"><img src="./images/logo.png" alt="メニュー1" /></a>
      <a href="theme.php" class="btn btn-flat"><span>課題</span></a>
      <a href="friendList.php" class="btn btn-flat"><span>フレンドリスト</span></a>
      <a href="setting.php" class="btn btn-flat"><span>設定</span></a>
      <a class="btn btn-flat"><span>福岡　太郎</span></a>
      <a href="sys_login.php" class="btn btn-flat"><span>ログアウト</span></a>
      <?php
      if (isset($_SESSION['urole'])) {
        echo  $_SESSION['uname'] . '&nbsp';
        echo '[<a href="?do=eps_home">HOME</a>]&nbsp';
        $menu = array();
        if ($_SESSION['urole'] == 1) {  //学生
          $menu = array(   //学生メニュー
            '成績確認'  => 'eps_grade',
            '希望登録'  => 'eps_submit',
            '配属結果'  => 'eps_result',
          );
        }
        if ($_SESSION['urole'] == 2) { //教員
          $menu = array(   //教員メニュー
            '希望一覧・配属決定'  => 'eps_list',
            '未登録者'  => 'eps_noentry',
            '希望集計'  => 'eps_summary',
          );
        }
        if ($_SESSION['urole'] == 9) { //管理者
          $menu = array(   //教員メニュー
            'アカウント一覧'  => 'usr_list',
          );
        }
        foreach ($menu as $label => $action) {
          echo  '[<a href="?do=' . $action . '">' . $label . '</a>]&nbsp;';
        }
        echo  '[<a href="?do=sys_logout">ログアウト</a>]&nbsp;';
      } else {
        echo  '[<a href="?do=sys_login">ログイン</a>]';
      }
      ?>
    </div>
    <h2>sharedule</h2>