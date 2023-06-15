<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">

    <style>
         /* ラジオボックスのラベルの文字の大きさと位置を変える */
         label {
            font-size: 30px;
            display: block;
            margin-top: 20px;
        }

        input[type="radio"] {
            vertical-align: middle;
            margin-top: 25px;
        }
    </style>

    <title>sharedule</title>
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
    <input type="radio" name="setting" value="a"/>
    <label for="a-radio">ここに設定を追加－1</label>

    
  </div>
</body>
</html>
