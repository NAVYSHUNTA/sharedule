<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS -->
  <style>
    body{
      background-color: #b0c4de;
    }
    .table-container th{
      background: linear-gradient(to bottom right,#E6F1FF, #FFFFFF);
}
    .table-container tr{
  background: linear-gradient(to bottom right, #ecece6, #FFFFFF);
}
    .list-container th{
      background: linear-gradient(to bottom left,#E6F1FF, #FFFFFF);
}
    .list-container tr{
  background: linear-gradient(to bottom right, #ecece6, #FFFFFF);
}

  </style>

  <link rel="stylesheet" href="../css/style.css">
  <title>sharedule</title>
  <script>
    window.onload = function() {
      var tableContainer = document.getElementById("table-container");
      var table = document.createElement("table");
      var thead = document.createElement("thead");
      var tbody = document.createElement("tbody");

      // ヘッダー行の作成
      var headerRow = document.createElement("tr");
      var headerCell1 = document.createElement("th");
      headerCell1.textContent = "　　フレンドリクエスト　　";
      headerCell1.style.fontSize = "30px"; // 文字のサイズを変更
      headerRow.appendChild(headerCell1);
      thead.appendChild(headerRow);

      var friend_request_array = ['九産 太郎', '九産 花子', '田中 太郎','小林 森田',''];

      // データ行の作成
      for (var i = 0; i < 20; i++) {
        var dataRow = document.createElement("tr");
        var dataCell1 = document.createElement("td");
        var dataCell1text = document.createElement("span");
        var dataCell2text = document.createElement("span");
        dataCell1text.textContent = friend_request_array[Math.min(i, friend_request_array.length - 1)]; 
        dataCell1text.style.fontSize = "23px"; // 文字のサイズを変更
        dataCell1.appendChild(dataCell1text);
        var dataCell1button1 = document.createElement("span");
        var dataCell1button2 = document.createElement("span");
        dataCell1button1.textContent = "許可"; 
        dataCell1button1.style.fontSize = "23px"; // 文字のサイズを変更
        dataCell1button1.style.border= "1px solid"
        dataCell1button1.style.marginLeft = "10px";
        dataCell1button1.style.padding = "3px";
        dataCell1button2.textContent = "拒否"; 
        dataCell1button2.style.fontSize = "23px"; // 文字のサイズを変更
        dataCell1button2.style.border= "1px solid"
        dataCell1button2.style.marginLeft = "10px";
        dataCell1button2.style.padding = "3px";

        dataCell1.appendChild(dataCell1button1);
        dataCell1.appendChild(dataCell1button2);
        dataRow.appendChild(dataCell1);
        tbody.appendChild(dataRow);
      }

      table.appendChild(thead);
      table.appendChild(tbody);

      tableContainer.appendChild(table);


    

      var listContainer = document.getElementById("list-container");
      var listTable = document.createElement("table");
      var listThead = document.createElement("thead");
      var listTbody = document.createElement("tbody");

      // ヘッダー行の作成
      var listHeaderRow = document.createElement("tr");
      var listHeaderCell1 = document.createElement("th");
      listHeaderCell1.textContent = "　　フレンドリスト　　";
      listHeaderCell1.style.fontSize = "30px"; // 文字のサイズを変更
      listHeaderRow.appendChild(listHeaderCell1);
      listThead.appendChild(listHeaderRow);

      var friend_list_array = ['博多 太郎', '博多 花子', ''];

      // データ行の作成
      for (var i = 0; i < 15; i++) {
        var listDataRow = document.createElement("tr");
        var listDataCell1 = document.createElement("td");
        listDataCell1.textContent = friend_list_array[Math.min(i, friend_list_array.length - 1)];

        listDataCell1.style.fontSize = "23px"; // 文字のサイズを変更
        listDataRow.appendChild(listDataCell1);
        listTbody.appendChild(listDataRow);
      }

      listTable.appendChild(listThead);
      listTable.appendChild(listTbody);

      listContainer.appendChild(listTable);
      listContainer.style.height = '655px'; // 表示する行数に応じて調整
      listContainer.style.overflowY = 'scroll';
    };
  </script>
</head>
<body>
  
  
  <div id="table-container" class="table-container"></div>
  <div id="textbox-container">
    <input type="text" id="my-textbox">
  </div>
  <div id="list-container" class="list-container"></div>
  
</body>
</html>
