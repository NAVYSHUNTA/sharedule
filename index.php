<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
</style>
</head>
<body>
<form action="wp06check.php" method="post">
    <table>
        <tr><td>ユーザ名：</td><td><input type="text" name="uid"></td></tr>
        <tr><td>パスワード：</td><td><input type="password" name="pass"></td></tr>
    </table>
    <input type="submit" value="送信"><input type="reset" value="取消">
</form>
</body>
</html>