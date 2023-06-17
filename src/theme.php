<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">

    <title>sharedule</title>
</head>

<body>
  
  <style>
    body{
      background-color: #b0c4de;
    }
    /* 枠線のスタイル */
    table {
      position: relative;
      top: 200px;
      left:28%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th, td {
      width: 100px;
      height: 100px;
      border: 1px solid black;
      padding: 10px;
      text-align: center;
    }

    .button-container {
      margin-bottom: 20px;
    }

    .button-container button {
      position: relative;
      left:40%;
      top: 380px;
      margin-right: 10px;
      color:lightstellblue;
    }

    .table th{
      background-color:lightslategray;
      color:white;
}
    .table tr{
  background: linear-gradient(to bottom right, #ecece6, #FFFFFF);
}
  </style>
</head>
<body>

  <table id="table1" class="table">
    <tbody>
      <tr>
        <th>6/12</th>
        <th>6/13</th>
        <th>6/14</th>
        <th>6/15</th>
        <th>6/16</th>
        <th>6/17</th>
        <th>6/18</th>
      </tr>
      <tr>
        <td>課題:オブジェクト指向レポート</td>
        <td>課題:</td>
        <td>課題:</td>
        <td>課題:</td>
        <td>課題:</td>
        <td>課題:</td>
        <td>課題:</td>
      </tr>
    </tbody>
  </table>

  <table id="table2" class="table" style="display: none;">
  <tbody>
      <tr>
        <th>6/19</th>
        <th>6/20</th>
        <th>6/21</th>
        <th>6/22</th>
        <th>6/23</th>
        <th>6/24</th>
        <th>6/25</th>
      </tr>
      <tr>
        <td>課題</td>
        <td>課題</td>
        <td>課題</td>
        <td>課題</td>
        <td>課題</td>
        <td>課題</td>
        <td>課題</td>
      </tr>
    </tbody>
  </table>

  <table id="table3" class="table" style="display: none;">
  <tbody>
      <tr>
        <th>6/26</th>
        <th>6/27</th>
        <th>6/28/th>
        <th>6/29/th>
        <th>6/30</th>
        <th>7/1</th>
        <th>7/2</th>
      </tr>
      <tr>
        <td>課題</td>
        <td>課題</td>
        <td>課題</td>
        <td>課題</td>
        <td>課題</td>
        <td>課題</td>
        <td>課題</td>
      </tr>
    </tbody>
  </table>

  <table id="table4" class="table" style="display: none;">
  <tbody>
      <tr>
        <th>7/3</th>
        <th>7/4</th>
        <th>7/5</th>
        <th>7/6</th>
        <th>7/7</th>
        <th>7/8</th>
        <th>7/9</th>
      </tr>
      <tr>
        <td>課題</td>
        <td>課題</td>
        <td>課題</td>
        <td>課題</td>
        <td>課題</td>
        <td>課題</td>
        <td>課題</td>
      </tr>
    </tbody>
  </table>
<div class="button-container">
    <button onclick="toggleTable(1)">先週</button>
    <button onclick="toggleTable(2)">今週</button>
    <button onclick="toggleTable(3)">来週</button>
    <button onclick="toggleTable(4)">再来週</button>
  </div>
  <script>
    // JavaScriptコード
    var tables = document.querySelectorAll(".table");
    var currentTable = 1;

    function toggleTable(tableNumber) {
      if (tableNumber >= 1 && tableNumber <= 4 && tableNumber !== currentTable) {
        tables[currentTable - 1].style.display = "none";
        tables[tableNumber - 1].style.display = "table";
        currentTable = tableNumber;
      }
    }
  </script>
</body>
</html>
