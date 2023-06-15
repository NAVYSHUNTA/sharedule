<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">

    <style>
        /*1行目のラジオボタンの位置、フォントサイズの設定 */
        label {
            font-size: 30px;
            display: flex;
            align-items: center;
            margin-top: 40px; /* ラベルの上側のマージンを追加 */
        }
        /*2行目のラジオボタンの位置、フォントサイズの設定 */
        label2 {
          font-size: 30px;
            display: flex;
            align-items: center;
            margin-top: -60px; /* ラベルの上側のマージンを追加 */
        }
        /*3行目のラジオボタンの位置、フォントサイズの設定 */
        label3 {
          font-size: 30px;
            display: flex;
            align-items: center;
            margin-top: -40px; /* ラベルの上側のマージンを追加 */
        }

        input[type="radio"] {
            margin-right: 20px; /* ラジオボタンとテキストの間のマージンを追加 */
            transform: scale(1.5); /* ラジオボタンの大きさを変更 */
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

    <!--1行目-->
    <label>
      <input type="radio" name="setting" value="a" style="vertical-align: middle;">
      <h3>ここに設定を追加－1</h3>
      <input type="radio" name="setting" value="a" style="vertical-align: middle;">
      <h3>ここに設定を追加－2</h3>
    </label><br>
    <!--2行目-->
    <label2>
      <input type="radio" name="setting" value="a" style="vertical-align: middle;">
      <h3>ここに設定を追加－3</h3>
      <input type="radio" name="setting" value="a" style="vertical-align: middle;">
      <h3>ここに設定を追加－4</h3>
    </label2>

    <!--3行目-->
    <label3>
      <input type="radio" name="setting" value="a" style="vertical-align: middle;">
      <h3>ここに設定を追加－5</h3>
      <input type="radio" name="setting" value="a" style="vertical-align: middle;">
      <h3>ここに設定を追加－6</h3>
    </label3>

  </div>
</body>
</html>