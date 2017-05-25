<?php
  require_once 'listar_perguntas.php';
  require_once 'Despesas.class.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Gráfico das Perguntas</title>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
	   <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	 
</head>
<body>



<script type="text/javascript">
	google.charts.load('visualization', '1', {packages:['corechart'],'language':'pt-BR'});
	google.charts.setOnLoadCallback(desenhaGraficoPerguntas);

		function desenhaGraficoPerguntas(){

   			var jsonData = $.ajax({
    		url:"getAllDespesas.php",
	        dataType: "json",
	        async:false
          }).responseText;


        var dados = new google.visualization.DataTable(jsonData);
        
      


        var option = {
           width:960,
           height:500,
           title: 'Gráficos de Perguntas'
          // colors: ['#e0440e', '#e6693e', '#ec8f6e']
        }

       // var chart = new google.visualization.PieChart(document.getElementById('div-chart'));
	   // chart.draw(dados, option);


	     var chart2 = new google.visualization.ColumnChart(document.getElementById('column-chart'));
         chart2.draw(dados, option);

       //  var chart3 = new google.visualization.ComboChart(document.getElementById('ComboChart'));
      //   chart3.draw(dados, option); 

        
     //    var chart3 = new google.visualization.AreaChart(document.getElementById('AreaChart'));
      //   chart3.draw(dados, option);
         
      //   var chart4 = new google.visualization.CandlestickChart(document.getElementById('CandlestickChart'));
     //    chart4.draw(dados, option);

}

</script>

<div>
    <form action="Despesas.class.php" class="center campo_opcoes" method="post">
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <select class="mdl-textfield__input" id="frase" name="frase">
          
             <?php 
                 foreach($dados as $pergunta):?>
                    <option value="<?=$pergunta['id'];?>"><?=$pergunta['texto'];?></option>
                        <?php  endforeach;?> 
          <select>
        <label class="mdl-textfield__label" for="professsion">Escolha o curso</label>
      </div>
    </form>
</div>

<h3>Gráfico Colunas</h3>
<div id="column-chart" class="div-chart"></div>
<hr>

<!--
<h3>Gráfico Colunas 2</h3>
<div id="ComboChart" class="div-chart"></div>
<hr>
<h3>Gráfico AreaChart</h3>
<div id="AreaChart" class="div-chart"></div>
<hr>
<h3>Gráfico CandlestickChart</h3>
<div id="CandlestickChart" class="div-chart"></div>
<h3>Gráfico Pizza</h3>
<div id="div-chart" class="div-chart"></div>
<hr>-->

</body>
</html>