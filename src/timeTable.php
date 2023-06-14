<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>sharedule</title>
</head>
<body>
  
  <!-- メニューバーの表示 -->
  <div class="navbar">
    <!--#にリンクを挿入-->
    <!--画像が挿入されているところは、ホームに遷移するためのボタンです-->
    <a href="timeTable.php" style="width: 80px; height: 30px;"><img src="images/logo.png" alt="メニュー1" /></a>
    <a href="theme.php" class="btn btn-flat"><span>課題</span></a>
    <a href="friendList.php" class="btn btn-flat"><span>フレンドリスト</span></a>
    <a href="setting.php" class="btn btn-flat"><span>設定</span></a>
<<<<<<< HEAD
=======
    <a class="btn btn-flat"><span>福岡　太郎</span></a>
    <a href="sys_login.php" class="btn btn-flat"><span>ログアウト</span></a>
    <h1>時間割（初期画面）</h1>
>>>>>>> a5ba5751d6d4a1aa1bc8a5b3a3570ef2b2437451
  </div>
  <table id="myTable">
    <tr>
      <td>   </td>
      <td>Mon</td>
      <td>Tue</td>
      <td>Wen</td>
      <td>Thu</td>
      <td>Fri</td>
      <td>Sat</td>
    </tr>
    <tr>
      <td>一限</td>
      <td>Mon-1</td>
      <td>Tue-1</td>
      <td>Wen-1</td>
      <td>Thu-1</td>
      <td>Fri-1</td>
      <td>Sat-1</td>
    </tr>
    <tr>
      <td>二限</td>
      <td>Mon-2</td>
      <td>Tue-2</td>
      <td>Wen-2</td>
      <td>Thu-2</td>
      <td>Fri-2</td>
      <td>Sat-2</td>
    </tr>
    <tr>
      <td>三限</td>
      <td>Mon-3</td>
      <td>Tue-3</td>
      <td>Wen-3</td>
      <td>Thu-3</td>
      <td>Fri-3</td>
      <td>Sat-3</td>
    </tr>
    <tr>
      <td>四限</td>
      <td>Mon-4</td>
      <td>Tue-4</td>
      <td>Wen-4</td>
      <td>Thu-4</td>
      <td>Fri-4</td>
      <td>Sat-4</td>
    </tr>
    <tr>
      <td>五限</td>
      <td>Mon-5</td>
      <td>Tue-5</td>
      <td>Wen-5</td>
      <td>Thu-5</td>
      <td>Fri-5</td>
      <td>Sat-5</td>
    </tr>
  </table>

  <div id="listContainer" class="list"></div>

  <script>
    var table = document.getElementById("myTable");
    var cells = table.getElementsByTagName("td");
    var listContainer = document.getElementById("listContainer");

    for (var i = 0; i < cells.length; i++) {
      cells[i].addEventListener("mouseover", function() {
        var cell = this;
        var listItems = getListItems(cell.textContent);
        var listHTML = "";

        for (var j = 0; j < listItems.length; j++) {
          listHTML += '<label><input type="radio" name="listItem" value="' + listItems[j] + '">' + listItems[j] + '</label><br>';
        }

        listContainer.innerHTML = listHTML;
        listContainer.style.display = "block";
        listContainer.style.left = (event.clientX +1) + "px";
        listContainer.style.top = (event.clientY -10) + "px";

        var radioInputs = listContainer.querySelectorAll('input[type="radio"]');
        for (var k = 0; k < radioInputs.length; k++) {
          radioInputs[k].addEventListener("change", function() {
            cell.textContent = this.value;
            listContainer.style.display = "none";
          });
        }
      });

      cells[i].addEventListener("mouseout", function(event) {
        var rect = table.getBoundingClientRect();
        var mouseX = event.clientX;
        var mouseY = event.clientY;

        if (mouseX < rect.left -10 || mouseX > rect.right -10 || mouseY < rect.top -10 || mouseY > rect.bottom -10) {
          listContainer.style.display = "none";
        }
      });

      cells[i].addEventListener("mouseout", function(event) {
        var rect = table.getBoundingClientRect();
        var mouseX = event.clientX;
        var mouseY = event.clientY;

        if (mouseX < rect.left -10 || mouseX > rect.right -10 || mouseY < rect.top -10 || mouseY > rect.bottom -10) {
          listContainer.style.display = "none";
        }
      });
    }

    function getListItems(cellText) {
      var listItems = [];

      if (cellText === "Mon-1") {
        listItems = ["項目1", "項目2", "項目3"];
      } else if (cellText === "セル2") {
        listItems = ["項目A", "項目B", "項目C"];
      } else if (cellText === "セル3") {
        listItems = ["項目X", "項目Y", "項目Z"];
      } else {
        listItems = ["その他の項目"];
      }

      return listItems;
    }

    
  </script>
</body>
</html>
