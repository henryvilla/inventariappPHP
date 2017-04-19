<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>InventariAPP | Principal</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!--estilos propios -->
        <link rel="stylesheet" href="../../dist/css/styles_1.css"> <!-- cambio el color de navbar -->
        <!-- daterange picker -->
        <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
        <!-- bootstrap datepicker -->
        <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">
        <!-- iCheck for checkboxes and radio inputs -->
        <link rel="stylesheet" href="../../plugins/iCheck/all.css">
        <!-- Bootstrap Color Picker -->
        <link rel="stylesheet" href="../../plugins/colorpicker/bootstrap-colorpicker.min.css">
        <!-- Bootstrap time Picker -->
        <link rel="stylesheet" href="../../plugins/timepicker/bootstrap-timepicker.min.css">
        <!-- Select2 -->
        <link rel="stylesheet" href="../../plugins/select2/select2.min.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="../../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
        <script src="../../plugins/chartjs/Chart.min.js"></script>
    </head>


    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper"> 

            <header class="main-header">

                <!-- Logo -->
                <a href="P.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><IMG SRC="../../imagenes/icon.png" WIDTH=50 HEIGHT=50></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><IMG SRC="../../imagenes/logo.png" WIDTH=180 HEIGHT=50></span>
                </a>

                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top"> <!-- navbar se buca en stiles 1 y en all_skin.min.css (palabra a buscar : corregido) para cambiar colores -->
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->
                            <li class="dropdown messages-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="label label-success">2</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">Tienes 2 mensajes</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li><!-- start message -->
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="../../dist/img/henry.png" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Equipo de Soporte
                                                        <small><i class="fa fa-clock-o"></i> 1 hora</small>
                                                    </h4>
                                                    <p>Hacemos el despliegue?</p>
                                                </a>
                                            </li>
                                            <!-- end message -->
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="../../dist/img/henry.PNG" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Equipo de Soporte
                                                        <small><i class="fa fa-clock-o"></i> 2 horas</small>
                                                    </h4>
                                                    <p>Realizamos el Re-cambio?</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">Ver todos los mensajes</a></li>
                                </ul>
                            </li>
                            <!-- Notifications: style can be found in dropdown.less -->
                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="label label-warning">1</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">Tienes 1 recordatorios</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-users text-aqua"></i> Hoy Cambiar el ATM
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">Ver Todos</a></li>
                                </ul>
                            </li>

                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="../../dist/img/henry.png" class="user-image" alt="User Image">
                                    <span class="hidden-xs">Henry Villanueva</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="../../dist/img/henry.png" class="img-circle" alt="User Image">

                                        <p>
                                            Henry Villanueva - SCRUM MASTER
                                            <small>Area de Tecnologia</small>
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Perfil</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="#" class="btn btn-default btn-flat">Cerrar Sesión</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <!-- Left side column. contains the logo and sidebar -->
         <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="../../dist/img/henry.png " class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>Henry Villanueva</p>
                            <a href="#"><i class="fa fa-circle text-success"></i>Conectado</a>
                        </div>
                    </div>

                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MENU PRINCIPAL</li>

                        <li class=" treeview"> <!-- si quiero que se active tengo que colocar la clase active class="active treeview" -->
                            <a href="#">
                                <i class="fa fa-newspaper-o"></i> <span>Requerimientos</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="consulta_requerimientos.html"><i class="fa fa-circle-o"></i>Consulta</a></li>
                                <li class="active"><a href="nuevo_requerimiento.html"><i class="fa fa-circle-o"></i>Nuevo Req.</a></li>
                                <li class="active"><a href="reportes_requerimiento.html"><i class="fa fa-bar-chart"></i>Estadisticos</a></li>
                            </ul>
                        </li>

                        <li class=" treeview"> <!-- si quiero que se active tengo que colocar la clase active class="active treeview" -->
                            <a href="#">
                                <i class="fa fa-archive"></i> <span>Inventario</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="consulta_inventario.html"><i class="fa fa-circle-o"></i>Consulta</a></li>
                                <li><a href="nuevo_requerimiento.html"><i class="fa fa-circle-o"></i>Nuevo ingreso</a></li>
                                <li class="active"><a href="reportes_inventario.html"><i class="fa fa-bar-chart"></i>Estadisticos</a></li>
                            </ul>
                        </li>
                      
                    </ul>

                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- ******   CUERPO DEL PROGRAMAAAAAA *******************************************-->

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1 class="box-title"><i class='fa fa-edit'><u> Reportes Requerimientos</u></i></h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i> Inicio</a></li>
                        <li class="active">Reportes</li>
                    </ol>
                </section>

                <section class="content-header">

                    <div class="row">

                        <div class="col-md-3">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" value="01/01/2017 - 01/12/2017" id="range" readonly="">
                            </div><!-- /input-group -->
                        </div>

                        <div class="col-md-3">
                            <select class="form-control select2" style="width: 100%;">
                                <option value="">Seleccionar Filtro</option>
                                <option value="1">Tipo Producto</option>	
                                <option value="2">Proyecto</option>	
                                <option value="3">Tipo Requerimiento</option>	
                                <option value="4">Departamento</option>	
                                <option value="5">Estado</option>
                            </select>	
                        </div>  

                        <div class="col-md-3">
                            <select class="form-control select2" style="width: 100%;">
                                <option value="">Seleccionar Filtro</option>
                                <option value="1">Nueva Instalación</option>	
                                <option value="2">Recambio</option>	
                                <option value="3">Retiro Temporal</option>	
                                <option value="4">Retiro Definitivo</option>	
                                <option value="5">Reubicación</option>	
                                 <option value="6">Migración</option>
                            </select>	
                        </div> 

                         <div class="col-md-3">                  
                            <span class="input-group-btn">
                                <button class="btn btn-block btn-primary" type="button" onclick="load(1);">Consultar <i class="fa fa-search"></i></button>
                            </span>
                        </div>

                    </div><!--fin 3ra fila -->
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box" >
                                <div class="box-header with-border">
                                    <center> <font face="Arial" size="5" >  <b>Reporte de Recambio </b></font> </center>
                                </div>
                                <div class="box-body">

                                    <div class="chart">
                                        <canvas id="barChart" style="height: 200px; width: 500px;" width="618" height="250"></canvas>

                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                    <br>
                     <div class="row">

                        <div class="col-md-3">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" value="01/01/2017 - 01/12/2017" id="range" readonly="">
                            </div><!-- /input-group -->
                        </div>

                        <div class="col-md-3">
                            <select class="form-control select2" style="width: 100%;">
                               <option value="">Seleccionar Filtro</option>
                                <option value="1">Tipo Producto</option>	
                                <option value="2">Proyecto</option>	
                                <option value="3">Tipo Requerimiento</option>	
                                <option value="4">Departamento</option>	
                                <option value="5">Estado</option>
                            </select>	
                        </div>  


                           <div class="col-md-3">                  
                            <span class="input-group-btn">
                                <button class="btn btn-block btn-primary" type="button" onclick="load(1);">Consultar <i class="fa fa-search"></i></button>
                            </span>
                        </div>

                    </div>
                    <br>

                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box" >
                                <div class="box-header with-border">
                                    <center> <font face="Arial" size="5" >  <b>Reporte de Requerimiento </b></font> </center>
                                </div>
                                <div class="box-body">
                                     <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                   



                    <!--fin de la 1era seccion -->
                </section>
                <!-- Main content -->
                <!--tabla producots-->
            </div>
            <!-- FIN CONTENIDO -->

            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 1.0
                </div>
                <strong>Copyright &copy; 2017-2018 <a href="https://gs4y.tk">GreatSolutions</a>.</strong> Todos los Derechos Reservados.
            </footer>

        </div>



        <!-- ./wrapper -->



        <script type="text/javascript" src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
        <script type="text/javascript">
                                    window.onload = function() {
                                        var chart = new CanvasJS.Chart("chartContainer",
                                                {
                                                    title: {
                                                      
                                                        fontSize: 30,
                                                        fontFamily: "Arial"
                                                    },
                                                    animationEnabled: true,
                                                    legend: {
                                                        verticalAlign: "center",
                                                        horizontalAlign: "left",
                                                        fontSize: 20,
                                                        fontFamily: "Helvetica"
                                                    },
                                                    theme: "theme2",
                                                    data: [
                                                        {
                                                            type: "pie",
                                                            indexLabelFontFamily: "Garamond",
                                                            indexLabelFontSize: 20,
                                                            indexLabel: "{label} {y}%",
                                                            startAngle: -20,
                                                            showInLegend: true,
                                                            toolTipContent: "{legendText} {y}%",
                                                            dataPoints: [
                                                                {y: 80.0, legendText: "Nueva Instalación", label: "Nueva Instalación"},
                                                                {y: 8.16, legendText: "Recambio", label: "Recambio"},
                                                                {y: 4.67, legendText: "Retiro Temporal", label: "Retiro Temporal"},
                                                                {y: 1.67, legendText: "Retiro Definitivo", label: "Retiro Definitivo"},
                                                                {y: 0.98, legendText: "Reubicación", label: "Reubicación"},
                                                                {y: 3.24, legendText: "Migración", label: "Migración"}
                                                            ]
                                                        }
                                                    ]
                                                });
                                        chart.render();

                                    }
        </script>
        <script src="../../plugins/chartjs/Chart.min.js"></script>
        <!-- jQuery 2.2.3 -->
        <script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="../../bootstrap/js/bootstrap.min.js"></script>
        <!-- Select2 -->
        <script src="../../plugins/select2/select2.full.min.js"></script>
        <!-- InputMask -->
        <script src="../../plugins/input-mask/jquery.inputmask.js"></script>
        <script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
        <script src="../../plugins/input-mask/jquery.inputmask.extensions.js"></script>
        <!-- date-range-picker -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
        <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
        <!-- bootstrap datepicker -->
        <script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
        <!-- bootstrap color picker -->
        <script src="../../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
        <!-- bootstrap time picker -->
        <script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
        <!-- SlimScroll 1.3.0 -->
        <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- iCheck 1.0.1 -->
        <script src="../../plugins/iCheck/icheck.min.js"></script>
        <!-- FastClick -->
        <script src="../../plugins/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="../../dist/js/app.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../../dist/js/demo.js"></script>
        <!-- Page script -->
        <script>
                                    $(function() {
                                        //Initialize Select2 Elements
                                        $(".select2").select2();

                                        //Datemask dd/mm/yyyy
                                        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
                                        //Datemask2 mm/dd/yyyy
                                        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
                                        //Money Euro
                                        $("[data-mask]").inputmask();

                                        //Date range picker
                                        $('#reservation').daterangepicker();
                                        //Date range picker with time picker
                                        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
                                        //Date range as a button
                                        $('#daterange-btn').daterangepicker(
                                                {
                                                    ranges: {
                                                        'Today': [moment(), moment()],
                                                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                                                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                                                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                                                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                                                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                                                    },
                                                    startDate: moment().subtract(29, 'days'),
                                                    endDate: moment()
                                                },
                                        function(start, end) {
                                            $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                                        }
                                        );

                                        //Date picker
                                        $('#datepicker').datepicker({
                                            autoclose: true
                                        });

                                        //iCheck for checkbox and radio inputs
                                        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                                            checkboxClass: 'icheckbox_minimal-blue',
                                            radioClass: 'iradio_minimal-blue'
                                        });
                                        //Red color scheme for iCheck
                                        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                                            checkboxClass: 'icheckbox_minimal-red',
                                            radioClass: 'iradio_minimal-red'
                                        });
                                        //Flat red color scheme for iCheck
                                        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                                            checkboxClass: 'icheckbox_flat-green',
                                            radioClass: 'iradio_flat-green'
                                        });

                                        //Colorpicker
                                        $(".my-colorpicker1").colorpicker();
                                        //color picker with addon
                                        $(".my-colorpicker2").colorpicker();

                                        //Timepicker
                                        $(".timepicker").timepicker({
                                            showInputs: false
                                        });
                                    });
        </script>


        <script>
            $(function() {
                /* ChartJS
                 * -------
                 * Here we will create a few charts using ChartJS
                 */

                //--------------
                //- AREA CHART -
                //--------------
                var areaChartData = {
                    labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
                    datasets: [
                        {
                            label: "Produccion",
                            fillColor: "rgba(210, 214, 222, 1)",
                            strokeColor: "rgba(210, 214, 222, 1)",
                            pointColor: "rgba(210, 214, 222, 1)",
                            pointStrokeColor: "#c1c7d1",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(220,220,220,1)",
                            data: [1342, 982, 950, 732, 1132, 1532, 332, 632, 832, 232, 532, 1332]
                        }
                    ]
                };
                //-------------
                //- BAR CHART -
                //-------------
                var barChartCanvas = $("#barChart").get(0).getContext("2d");
                var barChart = new Chart(barChartCanvas);
                var barChartData = areaChartData;
                barChartData.datasets[0].fillColor = "#00a65a";
                barChartData.datasets[0].strokeColor = "#00a65a";
                barChartData.datasets[0].pointColor = "#00a65a";
                var barChartOptions = {
                    //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
                    scaleBeginAtZero: true,
                    //Boolean - Whether grid lines are shown across the chart
                    scaleShowGridLines: true,
                    //String - Colour of the grid lines
                    scaleGridLineColor: "rgba(0,0,0,.05)",
                    //Number - Width of the grid lines
                    scaleGridLineWidth: 1,
                    //Boolean - Whether to show horizontal lines (except X axis)
                    scaleShowHorizontalLines: true,
                    //Boolean - Whether to show vertical lines (except Y axis)
                    scaleShowVerticalLines: true,
                    //Boolean - If there is a stroke on each bar
                    barShowStroke: true,
                    //Number - Pixel width of the bar stroke
                    barStrokeWidth: 2,
                    //Number - Spacing between each of the X value sets
                    barValueSpacing: 20,
                    //Number - Spacing between data sets within X values
                    barDatasetSpacing: 2,
                    //String - A legend template
                    legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
                    //Boolean - whether to make the chart responsive
                    responsive: true,
                    maintainAspectRatio: true
                };

                barChartOptions.datasetFill = false;
                barChart.Bar(barChartData, barChartOptions);
            });
        </script>

    </body>
</html>
