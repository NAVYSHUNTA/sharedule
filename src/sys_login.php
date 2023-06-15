<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 60vh;
        flex-direction: column;
    }

    .input-container {
        text-align: center;
    }

    .button-container {
        text-align: center;
    }
</style>
</head>
<body>
<form action="wp06check.php" method="post">
    <table>
        <tr>
            <td colspan="2">
                <div class="image-container">
                    <img src="../images/logo.png">
                </div>
            </td>
        </tr>
        <tr>
            <td class="input-container">ユーザ名：</td>
            <td><input type="text" name="uid"></td>
        </tr>
        <tr>
            <td class="input-container">パスワード：</td>
            <td><input type="password" name="pass"></td>
        </tr>
    </table>
    <div class="button-container">
        <input type="submit" value="登録">
        <input type="submit" value="ログイン">
        <!--ボタンの機能はまだ触ってないです-->
    </div>
</form>
</body>
</html>
