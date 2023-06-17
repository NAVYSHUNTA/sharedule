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
            margin-top: 40px;
            /* ボタンの上部マージンを追加 */
        }

        .custom-button {
            background-color: #000a09;
            color: #ffffff;
            font-size: 24px;
            /* ボタンの文字サイズを変更 */
            padding: 10px 20px;
            /* ボタンのパディングを調整 */
            border-radius: 7px;
            /* ボタンの角丸を設定 */
        }

        .custom-button2 {
            background-color: #000a09;
            color: #ffffff;
            font-size: 24px;
            /* ボタンの文字サイズを変更 */
            padding: 10px 8px;
            /* ボタンのパディングを調整 */
            border-radius: 7px;
            /* ボタンの角丸を設定 */

        }
    </style>
</head>

<body>
    <form action="?do=goodbye" method="post">
        <table>
            <tr>
                <td colspan="2">
                    <div class="image-container">
                        <img src="./images/logo.png">
                    </div>
                </td>
            </tr>
        </table>

        <?php
        if (isset($_POST['logout'])) {
            header("Location: ?do=goodbye");
        }
        ?>

        <p>ログアウトしますか？</p>
        <div class="button-container">
            <button type="submit" name="logout">はい</button>
        </div>
    </form>
</body>

</html>