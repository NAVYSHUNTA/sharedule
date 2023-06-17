<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style>
        body{
            background-color: #b0c4de;
        }
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

    input[type="text"]::placeholder,
        input[type="password"]::placeholder {
            font-size: 25px;
        }


</style>
</head>

<body>
    <?php
    if (isset($_SESSION['login_error'])) {
        echo '<p style="color: red;">' . $_SESSION['login_error'] . '</p>';
        unset($_SESSION['login_error']); // エラーメッセージを表示後に削除する
    }
    ?>
    <form action="?do=sys_check" method="post">
        <table>
            
            <tr>
                <td colspan="2">
                    <div class="image-container">
                        <img src="./images/logo.png">
                </div>
            </td>
        </tr>
        <tr>
            <td class="input-container">ユーザID：</td>
            <td><input type="text" name="uid" placeholder="ユーザID" style="width: 300px; height: 30px;"></td>
        </tr>
        <tr>
            <td class="input-container">ユーザ名：</td>
            <td><input type="text" name="user_name" placeholder="ログイン時は不要" style="width: 300px; height: 30px;"></td>
        </tr>
        <tr>
            <td class="input-container">パスワード：</td>
            <td><input type="password" name="pass"  placeholder="パスワード" style="width:300px; height: 30px;"></td>
        </tr>
    </table>
    <div class="button-container">
        <button type="submit" name="btn" value="register" class="custom-button">登録</button>
        <button type="submit" name="btn" value="login"class="custom-button2">ログイン</button>
        <!--ボタンの機能はまだ触ってないです-->
    </div>
</form>
</body>

</html>