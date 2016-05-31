<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <?php echo $this->Html->css(array('style')); ?>
    <?php echo $this->Html->script(array('jquery', 'highcharts','exporting')); ?>
    <style type="text/css">
      ${demo.css}
		</style>
    <div class="content-wrapper">
    			<div class="container-fluid">

    				<div class="row">
    					<div class="col-md-12">
                <div class="page-title">
                    <marquee loop="1" SCROLLAMOUNT="25" behavior = "slide" direction="left">

                          <Titulo>
                              <h3>Sistema Control de Pagos Inversiones Emmanuel 1108 C.A</h3><hr>
                          </Titulo>
              				</marquee>
                </div>
    						<div class="row">
    							<div class="col-md-12">
    								<div class="row">
    									<div class="col-md-3">
    										<div class="panel panel-default">
    											<div class="panel-body bk-primary text-light">
    												<div class="stat-panel text-center">
    													<div class="stat-panel-number h1 ">24</div>
    													<div class="stat-panel-title text-uppercase">Nuevo Personal</div>
    												</div>
    											</div>
    											<a href="#" class="block-anchor panel-footer">Full Detail <i class="fa fa-arrow-right"></i></a>
    										</div>
    									</div>
    									<div class="col-md-3">
    										<div class="panel panel-default">
    											<div class="panel-body bk-success text-light">
    												<div class="stat-panel text-center">
    													<div class="stat-panel-number h1 ">8</div>
    													<div class="stat-panel-title text-uppercase">Support Tickets</div>
    												</div>
    											</div>
    											<a href="#" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
    										</div>
    									</div>
    									<div class="col-md-3">
    										<div class="panel panel-default">
    											<div class="panel-body bk-info text-light">
    												<div class="stat-panel text-center">
    													<div class="stat-panel-number h1 ">58</div>
    													<div class="stat-panel-title text-uppercase">New Orders</div>
    												</div>
    											</div>
    											<a href="#" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
    										</div>
    									</div>
    									<div class="col-md-3">
    										<div class="panel panel-default">
    											<div class="panel-body bk-warning text-light">
    												<div class="stat-panel text-center">
    													<div class="stat-panel-number h1 ">18</div>
    													<div class="stat-panel-title text-uppercase">New Comments</div>
    												</div>
    											</div>
    											<a href="#" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
    										</div>
    									</div>
    								</div>
    							</div>
    						</div>

    						

	</head>
  <script type="text/javascript">
            $(function () {

                $('#container').highcharts({
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: 1,//null,
                        plotShadow: false
                    },
                    title: {
                        text: 'Personal Registrado'
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                                style: {
                                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                                }
                            }
                        }
                    },
                    series: [{
                        type: 'pie',
                        name: 'Usuario',
                        data: [
                            //['Ricardo Perez',   12.0],
                     <?php
                        // Conectando, seleccionando la base de datos
                        $link = mysql_connect('localhost', 'root', 'ema18787')
                            or die('No se pudo conectar: ' . mysql_error());
                        //echo 'Connected successfully';
                        mysql_select_db('arte_cristal') or die('No se pudo seleccionar la base de datos');
                        // Realizar una consulta MySQL
                        $query = 'SELECT * FROM personals';
                        $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

                            for ($i=0; $i<mysql_num_rows($result);$i++){
                                $dato=mysql_fetch_array($result);
                            ?>
                            ['<?=$dato["name"]." ".$dato["last_name"]."<br>"?>', 1000],
                            <?php
                    }
                    ?>

                        ]
                    }]
                });
            });


  </script>
	<body>

<div id="container" style="min-width: 310px; height: 500px; max-width: 600px; margin: 0 auto"></div>
