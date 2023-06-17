<?php
  require_once('db_inc.php'); //データベースが必要なので読み込ませる
  // POSTデータの取得
  $subject = $_POST['subject'];
  $day = $_POST['day'];
  $period = $_POST['period'];
  $classroom_number = $_POST['classroom_number'];
  $sql = "SELECT * FROM user WHERE user_id= '{$u}'  AND user_password='{$p}'";
  $rs = $conn->query($sql);
  if (!$rs) die('エラー: ' . $conn->error);
  $row= $rs->fetch_assoc();
  $sql = "INSERT INTO timetable (subject_id, subject, day, period, classroom_number)
        VALUES (NULL, '$subject', '$day', $period, $classroom_number)";

  // SQL文の実行
  if ($conn->query($sql) === TRUE) {
    echo "データが正常に登録されました。";
  } else {
    echo "データの登録中にエラーが発生しました: " . $conn->error;
  }
?>