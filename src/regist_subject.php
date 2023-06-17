<?php
  require_once('db_inc.php'); //データベースが必要なので読み込ませる
  // POSTデータの取得
  $subject = $_POST['subject'];
  $day = $_POST['day'];
  $period = $_POST['period'];
  $classroom_number = $_POST['classroom_number'];

  // 最大の主キー値を取得
  $sql = "SELECT MAX(subject_id) AS max_id FROM timetable";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $subject_id = $row['max_id'] + 1;

  $sql = "INSERT INTO timetable (subject_id, subject, day, period, classroom_number)
        VALUES ($subject_id, '$subject', '$day', $period, $classroom_number)";

  // SQL文の実行
  if ($conn->query($sql) === TRUE) {
    echo "データが正常に登録されました。";
  } else {
    echo "データの登録中にエラーが発生しました: " . $conn->error;
  }
?>