<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">

    <title>sharedule</title>
  <style>
    h2{
          font-size: 25px;
        }

        input[type="radio"] {
            margin-right: 20px; /* ラジオボタンとテキストの間のマージンを追加 */
            transform: scale(1.5); /* ラジオボタンの大きさを変更 */
        }
    p{
      font-size: 13px;
    }

  </style>
</head>
<body>
  <!-- メニューバーの表示 -->
  <div class="navbar">
    <!--#にリンクを挿入-->
    <!--画像が挿入されているところは、ホームに遷移するためのボタンです-->
    <!--表題に試作としてわかりやすいように何のページか表しております（不必要であれば排除お願いします！）-->
    <a href="timeTable.php" style="width: 80px; height: 30px;"><img src="../images/logo.png" alt="メニュー1" /></a>
    <a href="theme.php" class="btn btn-flat"><span>課題</span></a>
    <a href="friendList.php" class="btn btn-flat"><span>フレンドリスト</span></a>
    <a href="setting.php" class="btn btn-flat"><span>設定</span></a>
    <a class="btn btn-flat"><span>福岡　太郎</span></a>
    <a href="sys_login.php" class="btn btn-flat"><span>ログアウト</span></a><br>
  </div>

    <div class="container">
        <div class="left-column">
            <h2>ダークモード</h2>
            <p>
                &emsp;
                <input type="radio" name="screen_mode" value="はい">ON&emsp;&emsp;
                <input type="radio" name="screen_mode" value="いいえ" checked>OFF
            </p>
            <h2>何日前に警告を出すか？</h2>
            <p>
                &emsp;
                <input type="radio" name="alert_days_before" value="1">1&emsp;&emsp;
                <input type="radio" name="alert_days_before" value="2">2&emsp;&emsp;
                <input type="radio" name="alert_days_before" value="2" checked>3&emsp;&emsp;
                <input type="radio" name="alert_days_before" value="2">4&emsp;&emsp;
                <input type="radio" name="alert_days_before" value="2">5&emsp;&emsp;
            </p>
            <h2>ここに設定項目を追加</h2>
            <p>
                &emsp;
            </p>
            <h2>ここに設定項目を追加</h2>
            <p>
                &emsp;
            </p>
            <h2>ここに設定項目を追加</h2>
            <p>
                &emsp;
            </p>
        </div>
        <div class="right-column">
            <h2>ここに設定項目を追加</h2>
            <p>
                &emsp;
            </p>
            <h2>ここに設定項目を追加</h2>
            <p>
                &emsp;
            </p>
            <h2>ここに設定項目を追加</h2>
            <p>
                &emsp;
            </p>
            </p>
            <h2>ここに設定項目を追加</h2>
            <p>
                &emsp;
            </p>
            <h2>ここに設定項目を追加</h2>
            <p>
                &emsp;
            </p>
        </div>
    </div>
</html>