<?php 
  $conn = new mysqli("localhost","root","example_pass", "HACKATHON");//MySQLサーバへ接続
  if ($conn->connect_errno) die($conn->connect_error);
  $conn->set_charset('utf8'); //文字コードをutf8に設定（文字化け対策）
?>