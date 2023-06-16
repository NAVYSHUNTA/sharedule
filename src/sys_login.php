<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; /* 画面全体の高さに設定 */
        flex-direction: column;
    }

    .input-container {
        text-align: center;
    }

    .button-container {
        text-align: center;
        margin-top: 40px; /* ボタンの上部マージンを追加 */
    }

    .custom-button {
        background-color:#000a09 ;
        color: #ffffff;
        font-size: 24px; /* ボタンの文字サイズを変更 */
        padding: 10px 20px; /* ボタンのパディングを調整 */
        border-radius: 7px; /* ボタンの角丸を設定 */
    }
    .custom-button2{
        background-color: #000a09;
        color: #ffffff;
        font-size: 24px; /* ボタンの文字サイズを変更 */
        padding: 10px 8px; /* ボタンのパディングを調整 */
        border-radius: 7px; /* ボタンの角丸を設定 */  

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
            <td><input type="text" name="username" placeholder="ユーザ名" style="width: 200px; height: 25px;"></td>
        </tr>
        <tr>
            <td class="input-container">パスワード：</td>
            <td><input type="password" name="password"  placeholder="パスワード" style="width:200px; height: 30px;"></td>
        </tr>
    </table>
    <div class="button-container">
        <input type="submit" value="登録" class="custom-button">
        <input type="submit" value="ログイン"class="custom-button2">
        <!--ボタンの機能はまだ触ってないです-->
    </div>
</form>
</body>
</html>
