<?php
    $dbhandle= new mysqli('localhost','root','','ssip');
    $query = " SELECT disease,year1 FROM chartdata";
    $res = $dbhandle->query($query);
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="jquery.js"></script> 
    <script> 
    $(function(){
      $("#includedContent").load("patient_header.php"); 
    });
    </script>
     <script> 
    $(function(){
      $("#includedFooter").load("patient_footer.html"); 
    });
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data=google.visualization.arrayToDataTable([
          ['student','marks'],
          <?php 
            while($row=$res->fetch_assoc())
            {
                echo "['".$row['disease']."',".$row['year1']." ],";
            }
            ?>      
        ]);

        var options = {
          title: 'All City Disease '
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
  <div id="includedContent"></div>
    <div id="piechart" style="width: 900px; height: 500px; margin-top: 100px;"></div>
    <div id="includedFooter"></div>
  </body>
</html>
