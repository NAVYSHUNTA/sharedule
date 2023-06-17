<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS -->
  <link rel="stylesheet" href="./css/style.css">
  <style>
    body {
      background-color: #b0c4de;
    }

    th {
      font-size: 16px;
      width: 100px;
      color: #f0ffff;
    }

    #myTable th {
      width: 100px;
      height: 50px;
      background-color: black;
      border: 1px solid white;
    }

    #myTable td {
      position: relative;
      height: 75px;
      width: 150px;
      border: 1px solid black;
      top: 0px;
      background: linear-gradient(to bottom right, #f0ffff, #FFFFFF);
    }

    .form-container {
      position: absolute;
      top: 20px;
      right: 20px;
      width: 300px;
      padding: 20px;
      background-color: white;
      border: 1px solid #ccc;
    }

    .subject-list-container {
      position: absolute;
      top: 20px;
      left: 20px;
      width: 200px;
      padding: 20px;
      background-color: white;
      border: 1px solid #ccc;
      height: 175px;
      overflow-y: scroll;
    }
  </style>

  <title>sharedule</title>
</head>

<body>
  <table id="myTable">
    <tr>
      <th> </th>
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

  <div id="subjectListContainer" class="subject-list-container"></div>

  <script>
    window.onload = function () {
      var table = document.getElementById("myTable");
      var cells = table.getElementsByTagName("td");
      var subjectListContainer = document.getElementById("subjectListContainer");

      for (var i = 0; i < cells.length; i++) {
        cells[i].addEventListener("mouseover", function () {
          var cell = this;
          var listItems = getListItems(cell.textContent);
          var listHTML = "";

          for (var j = 0; j < listItems.length; j++) {
            listHTML += '<label><input type="checkbox" name="subjectItem" value="' + listItems[j] + '">' + listItems[j] + '</label><br>';
          }

          subjectListContainer.innerHTML = listHTML;
          subjectListContainer.style.display = "block";
          subjectListContainer.style.left = (event.clientX + 1) + "px";
          subjectListContainer.style.top = (event.clientY - 10) + "px";

          var checkboxInputs = subjectListContainer.querySelectorAll('input[type="checkbox"]');
          for (var k = 0; k < checkboxInputs.length; k++) {
            checkboxInputs[k].addEventListener("change", function () {
              var subjectName = this.value;
              var isChecked = this.checked;

              if (isChecked) {
                cell.innerHTML += '<div class="subject-check">' + subjectName + ' &#x2713;</div>';
              } else {
                var subjectChecks = cell.getElementsByClassName("subject-check");
                for (var l = 0; l < subjectChecks.length; l++) {
                  if (subjectChecks[l].textContent === subjectName + ' \u2713') {
                    subjectChecks[l].parentNode.removeChild(subjectChecks[l]);
                  }
                }
              }
            });
          }
        });

        cells[i].addEventListener("mouseout", function (event) {
          var rect = table.getBoundingClientRect();
          var mouseX = event.clientX;
          var mouseY = event.clientY;

          if (mouseX < rect.left - 10 || mouseX > rect.right - 10 || mouseY < rect.top - 10 || mouseY > rect.bottom - 10) {
            subjectListContainer.style.display = "none";
          }
        });
      }
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

  <style>
    .subject-check {
      display: inline-block;
      margin-top: 5px;
      padding: 3px 6px;
      background-color: #e0ffff;
      border-radius: 4px;
    }
  </style>

  <div id="friendContainer" class="friend-container"></div>
  <div class="form-container">
    <h2>授業科目登録フォーム</h2>
    <form method="post" action="?do=regist_subject">
      <label for="subject">科目名:</label>
      <input type="text" name="subject" id="subject" required><br><br>

      <label for="day">曜日:</label>
      <input type="text" name="day" id="day" maxlength="1" required><br><br>

      <label for="period">時限:</label>
      <input type="number" name="period" id="period" required><br><br>

      <label for="classroom_number">教室番号:</label>
      <input type="number" name="classroom_number" id="classroom_number" required><br><br>

      <input type="submit" value="登録">
    </form>
  </div>

  <div id="themeListContainer" class="theme-list-container"></div>
</body>

</html>
