<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['faturamento', 'Gastos'],
          
          <?php 
          include 'php/conexao.php';

          $sql = "SELECT sum(valorCorte), sum(valorCompra) from cortes";
          $buscar = mysqli_query($conn, $sql);

          while ($dados = mysqli_fetch_array($buscar)){
            $faturamento = $dados['sum(valorCorte)'];
            $gastos = $dados['sum(valorCompra)'];
          ?>
          ['faturamento', <?php echo $faturamento ?>],
          ['Gastos',   <?php echo $gastos ?>],
          <?php } ?>
        ]);

        var options = {
          title: 'Controle Financeiro'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
