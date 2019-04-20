<?php

$dbcon =new mysqli('localhost','root' , 'Unejammaria123', 'myLibrary');
echo $dbcon->connect_error;
session_start();
$book = $_SESSION["bookid"];
$query ="SELECT  Genre, count(Title) FROM BookShelves  Inner join Details_LogIn ON details_login.userid = BookShelves.ID  where BookShelves.ID = $book   Group by Genre ";
$result=$dbcon->query($query);
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Genre', 'Title'],
          <?php
            while($row = $result->fetch_assoc())
            {
                echo "['".$row['Genre']."', '".$row['count(Title)']."'],";        
            }
          
          ?>
        ]);

        var options = {
          title: 'Books Genres',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html>
