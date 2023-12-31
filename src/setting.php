<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">

    <title>sharedule</title>
    <style>
        body{
            background-color: #b0c4de;
        }
        h2 {
            font-size: 20px;
        }

        input[type="radio"] {
            /* ラジオボタンとテキストの間のマージンを追加 */
            margin-right: 20px;
            /* ラジオボタンの大きさを変更 */
            transform: scale(1.5);
        }

        p {
            font-size: 20px;
        }
    </style>
</head>

<body>
    

    <div class="container">
        <div class="left-column">
            <h2>使用言語</h2>
            <p>
                &emsp;
                <input type="radio" name="language" value="japanese" checked>日本語&emsp;&emsp;
                <input type="radio" name="language" value="english">English&emsp;&emsp;
            </p>
            <h2>テーマ</h2>
            <p>
                &emsp;
                <input type="radio" name="screen_mode" value="light_mode" checked>ライトモード&emsp;&emsp;
                <input type="radio" name="screen_mode" value="dark_mode">ダークモード&emsp;&emsp;
            </p>
            <h2>個人情報の共有</h2>
            <p>
                &emsp;
                <input type="radio" name="notice" value="on" checked>許可する&emsp;&emsp;
                <input type="radio" name="notice" value="off">許可しない&emsp;&emsp;
            </p>
            <h2>テキストサイズ</h2>
            <p>
            
                <input type="radio" name="font_size" value="15">15px&emsp;&emsp;
                <input type="radio" name="font_size" value="16" checked>16px&emsp;&emsp;
                <input type="radio" name="font_size" value="17">17px&emsp;&emsp;
                <input type="radio" name="font_size" value="18">18px&emsp;&emsp;
                <input type="radio" name="font_size" value="19">19px&emsp;&emsp;
                <input type="radio" name="font_size" value="20">20px&emsp;&emsp;
            </p>
            <h2>文字を太くする</h2>
            <p>
                &emsp;
                <input type="radio" name="font_weight" value="off" checked>無効&emsp;&emsp;
                <input type="radio" name="font_weight" value="on">有効&emsp;&emsp;
            </p>
        </div>
        <div class="right-column">
            <h2>通知</h2>
            <p>
                &emsp;
                <input type="radio" name="personal_information" value="on" checked>ON&emsp;&emsp;
                <input type="radio" name="personal_information" value="off">OFF&emsp;&emsp;
            </p>
            <h2>警告通知のタイミング(何日前)</h2>
            <p>
                &emsp;
                <input type="radio" name="alert_days_before" value="1">1&emsp;&emsp;
                <input type="radio" name="alert_days_before" value="2">2&emsp;&emsp;
                <input type="radio" name="alert_days_before" value="3" checked>3&emsp;&emsp;
                <input type="radio" name="alert_days_before" value="4">4&emsp;&emsp;
                <input type="radio" name="alert_days_before" value="5">5&emsp;&emsp;
            </p>
            <h2>表示する警告通知の最大数</h2>
            <p>
                &emsp;
                <input type="radio" name="max_notification" value="1">1&emsp;&emsp;
                <input type="radio" name="max_notification" value="2">2&emsp;&emsp;
                <input type="radio" name="max_notification" value="3" checked>3&emsp;&emsp;
                <input type="radio" name="max_notification" value="4">4&emsp;&emsp;
                <input type="radio" name="max_notification" value="5">5&emsp;&emsp;
            </p>
            <h2>省エネモード</h2>
            <p>
                &emsp;
                <input type="radio" name="energy_saving" value="off" checked>無効&emsp;&emsp;
                <input type="radio" name="energy_saving" value="on">有効&emsp;&emsp;
            </p>
            <h2>モバイル通信経由でバックアップ</h2>
            <p>
                &emsp;
                <input type="radio" name="backup" value="off" checked>無効&emsp;&emsp;
                <input type="radio" name="backup" value="on">有効&emsp;&emsp;
            </p>
        </div>
    </div>

</html>
