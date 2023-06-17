<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->

    <link rel="stylesheet" href="../css/style.css">
    <style>
  th {
    font-size: 16px; /* フォントサイズを変更 */
    width 100px;
    color:#f0ffff;
  }
  #myTable th {
    width: 100px; /* セルの幅を100ピクセルに設定 */
    height: 50px; /* セルの高さを50ピクセルに設定 */
    background-color:black;
    border: 1px solid white;
  }
  #myTable td {/*GG*/
    position: relative;
    height: 75px;
    width :150px;
    border: 1px solid black;
    top:0px;
    background: linear-gradient(to bottom right, #f0ffff, #FFFFFF);
  }
</style>

    <title>sharedule</title>
</head>
<body>
  
  <!-- メニューバーの表示 -->
  <div class="navbar">
    <!--#にリンクを挿入-->
    <!--画像が挿入されているところは、ホームに遷移するためのボタンです-->
    <a href="timeTable.php" style="width: 80px; height: 30px;"><img src="../images/logo.png" alt="メニュー1" /></a>
    <a href="theme.php" class="btn btn-flat"><span>課題</span></a>
    <a href="friendList.php" class="btn btn-flat"><span>フレンドリスト</span></a>
    <a href="setting.php" class="btn btn-flat"><span>設定</span></a>
    <?php
      echo "<a class=\"btn btn-flat\"><span>{$_SESSION['uname']}</span></a>";
    ?>
    <a href="sys_login.php" class="btn btn-flat"><span>ログアウト</span></a>
    <h1>時間割</h1>
  </div>
  <table id="myTable">
    <tr>
      <th>   </th>
      <th>Mon</th>
      <th>Tue</th>
      <th>Wen</th>
      <th>Thu</th>
      <th>Fri</th>
      <th>Sat</th>
    </tr>
    <tr>
      <th>一限</th>
      <td>Mon-1</td>
      <td>Tue-1</td>
      <td>Wen-1</td>
      <td>Thu-1</td>
      <td>Fri-1</td>
      <td>Sat-1</td>
    </tr>
    <tr>
      <th>二限</th>
      <td>Mon-2</td>
      <td>Tue-2</td>
      <td>Wen-2</td>
      <td>Thu-2</td>
      <td>Fri-2</td>
      <td>Sat-2</td>
    </tr>
    <tr>
      <th>三限</th>
      <td>Mon-3</td>
      <td>Tue-3</td>
      <td>Wen-3</td>
      <td>Thu-3</td>
      <td>Fri-3</td>
      <td>Sat-3</td>
    </tr>
    <tr>
      <th>四限</th>
      <td>Mon-4</td>
      <td>Tue-4</td>
      <td>Wen-4</td>
      <td>Thu-4</td>
      <td>Fri-4</td>
      <td>Sat-4</td>
    </tr>
    <tr>
      <th>五限</th>
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

window.onload = function() {
      var tableContainer = document.getElementById("friend-container");
      var table = document.createElement("table");

      var thead = document.createElement("thead");
      var tbody = document.createElement("tbody");

      // ヘッダー行の作成
      var headerRow = document.createElement("tr");
      var headerCell1 = document.createElement("th");
      headerCell1.textContent = "　　友達一覧　　";
      headerRow.appendChild(headerCell1);
      thead.appendChild(headerRow);

      // データ行の作成
      for (var i = 1; i <= 20; i++) {
        var dataRow = document.createElement("tr");
        var dataCell1 = document.createElement("td");
        dataCell1.textContent = "データ00" + i;
        dataRow.appendChild(dataCell1);
        tbody.appendChild(dataRow);
      }

      table.appendChild(thead);
      table.appendChild(tbody);

      tableContainer.appendChild(table);


      var listContainer = document.getElementById("themelist-container");
      var listTable = document.createElement("table");

      var listTbody = document.createElement("tbody");

      // データ行の作成
      for (var i = 1; i <= 20; i++) {
        var listDataRow = document.createElement("tr");
        var listDataCell1 = document.createElement("td");
        listDataCell1.textContent = "リストデータ00" + i;
        listDataRow.appendChild(listDataCell1);
        listTbody.appendChild(listDataRow);
      }

      listTable.appendChild(listTbody);

      listContainer.appendChild(listTable);
      listContainer.style.height = '175px'; // 表示する行数に応じて調整
      listContainer.style.width = '54%';
      listContainer.style.overflowY = 'scroll';
    };
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
  <div id="friend-container" class="friend-container"></div>
  <div id="themelist-container" class="themelist-container"></div>
</body>
</html>
