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

        <link rel="icon" href="../../imagenes/icon.png">
        <link rel="shortcut icon" href="../../imagenes/icon.png">

        <!-- Marcador en escritorio de Iphone-->
        <link rel="apple-touch-icon" href="../../imagenes/icon.png">

        <?php 
        require '../../scritp_requerimiento/conexion.php';
        
        ?>
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
                    <h1><i class='fa fa-edit'></i> Agregar nuevo producto</h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">


                        <div class="col-md-12">
                            <form action="../../scritp_requerimiento/ingresar_requerimiento.php" name="update_register" id="update_register" class="form-horizontal" method="post" > <?php //enctype="multipart/form-data"?>

                                <div class="nav-tabs-custom">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#details" data-toggle="tab" aria-expanded="false">Requerimiento General</a></li>
                                        <li class=""><a href="#address" data-toggle="tab" aria-expanded="false">Datos del Requerimiento</a></li>

                                    </ul>
                                    <div class="tab-content">
                                        <div id="resultados_ajax"></div>



                                        <div class="tab-pane active" id="details">

                                            <h5><font color="red"><u>SOBRE EL REQUERIMIENTO</u></font></h5>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label><font color="red">Id_Requerimiento :</font></label>
                                                    <input class="form-control" type="text" placeholder="Automatico" name="id_requerimiento">
                                                </div>
                                                <div class="col-md-4">
                                                    <label><font color="red">Tipo Producto :</font></label>
                                                    <select class="form-control select2"  data-placeholder="Seleccione" style="width: 100%;" name="tip_producto">
                                                        <option>ATM</option>
                                                        <option>KIO</option>
                                                        <option>MON</option>
                                                        <option>PLUS</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label><font color="red">Tipo de Requerimiento :</font></label>
                                                    <select class="form-control select2"  style="width: 100%;" name="tip_requerimiento">
                                                        <option value="" disabled selected>Seleccione el Requerimiento</option>
                                                        <option>Nueva Instalación</option>
                                                        <option>Recambio</option>
                                                        <option>Retiro temporal</option>
                                                        <option>Retiro definitivo</option>
                                                        <option>Reubicacion</option>
                                                        <option>Migración</option>
                                                    </select>
                                                </div>

                                            </div>

                                            <br>
                                            <h5><font color="blue"><u>RESPONSABILIDAD DEL REQUERIMIENTO</u></font></h5>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label><font color="blue">ID_del ATM :  </font></label>
                                                    <input class="form-control" type="text" placeholder="Automatico" name="id_atm">
                                                </div>
                                                <div class="col-md-3">
                                                    <label><font color="blue">Status del Requerimiento :</font></label>
                                                    <select class="form-control select2"  style="width: 100%;" name="status">
                                                        <option value="" disabled selected>Seleccione el Estado</option>
                                                        <option>No Iniciado</option>
                                                        <option>No Aplica</option>
                                                        <option>En Proceso</option>
                                                        <option>Finalizado</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <label><font color="blue">Responsable :</font></label>
                                                    <input class="form-control" type="text" placeholder="Automatico" name="responsable">
                                                </div>
                                                <div class="col-md-3">
                                                    <label><font color="blue">Fecha :</font></label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                        <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask name="fecha">
                                                    </div>
                                                </div>
                                            </div>

                                            <br>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label><font color="blue">Proyecto :</font></label>
                                                    <input class="form-control" type="text" placeholder="Automatico"  name="proyecto">
                                                </div>
                                                <div class="col-md-3">
                                                    <label><font color="blue">Grupo :</font></label>
                                                    <input class="form-control" type="text" placeholder="Automatico" name="grupo">
                                                </div>
                                                <div class="col-md-3">
                                                    <label><font color="blue">Periodo Programado :</font></label>
                                                    <input class="form-control" type="text" placeholder="Automatico" name="per_prog">
                                                </div>
                                                <div class="col-md-3">
                                                    <label><font color="blue">Proveedor :</font></label>
                                                    <input class="form-control" type="text" placeholder="Automatico" name="proveedor">
                                                </div>
                                            </div>
                                            <br>
                                            <h5><font color="DarkOliveGreen"><u>SOBRE EL CONTACTO Y EL LUGAR</u></font></h5>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <label><font color="DarkOliveGreen">Departamento :</font></label>
                                                    <input class="form-control" type="text" placeholder="Automatico" name="departamento">
                                                </div>
                                                <div class="col-md-2">
                                                    <label><font color="DarkOliveGreen">Provincia :</font></label>
                                                    <input class="form-control" type="text" placeholder="Automatico" name="provincia">
                                                </div>
                                                <div class="col-md-2">
                                                    <label><font color="DarkOliveGreen">Distrito :</font></label>
                                                    <input class="form-control" type="text" placeholder="Automatico" name="distrito">
                                                </div>
                                                <div class="col-md-6">
                                                    <label><font color="DarkOliveGreen">Dirección :</font></label>
                                                    <input class="form-control" type="text" placeholder="Automatico" name="direccion">
                                                </div>
                                            </div>
                                            <br>

                                            <div class="row">
                                                <div class="col-md-2">
                                                    <label><font color="DarkOliveGreen">Locación :</font></label>
                                                    <input class="form-control" type="text" placeholder="Automatico" name="locacion">
                                                </div>
                                                <div class="col-md-2">
                                                    <label><font color="DarkOliveGreen">Zona :</font></label>
                                                    <input class="form-control" type="text" placeholder="Automatico" name="zona">
                                                </div>
                                                <div class="col-md-3">
                                                    <label><font color="DarkOliveGreen">Contacto :</font></label>
                                                    <input class="form-control" type="text" placeholder="Automatico" name="contacto">
                                                </div>
                                                <div class="col-md-2">
                                                    <label><font color="DarkOliveGreen">Telf_Contacto :</font></label>
                                                    <input class="form-control" type="text" placeholder="Automatico" name="tel_contacto">
                                                </div>
                                                <div class="col-md-3">
                                                    <label><font color="DarkOliveGreen">Email_ Contacto :</font></label>
                                                    <input class="form-control" type="text" placeholder="Automatico" name="email_contacto">
                                                </div>
                                            </div>

                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="address">

                                            <h5><font color="DarkSlateGrey"><u>DATOS PARA EL REQUERIMIENTO</u></font></h5>

                                            <div class="row">
                                                <div class="col-md-2">
                                                    <label><font color="DarkSlateGrey">Marca Antigua :</font></label>
                                                    <input class="form-control" type="text" placeholder="Automatico" name="mark_old">
                                                </div>
                                                <div class="col-md-2">
                                                    <label><font color="DarkSlateGrey">Modelo Antiguo :</font></label>
                                                    <input class="form-control" type="text" placeholder="Automatico" name="model_old">
                                                </div>
                                                <div class="col-md-2">
                                                    <label><font color="DarkSlateGrey">Serie Antiguo :</font></label>
                                                    <input class="form-control" type="text" placeholder="Automatico" name="serie_old">
                                                </div>
                                                <div class="col-md-2">
                                                    <label><font color="DarkSlateGrey">Marca Nueva :</font></label>
                                                    <input class="form-control" type="text" placeholder="Automatico" name="mark_new">
                                                </div>
                                                <div class="col-md-2">
                                                    <label><font color="DarkSlateGrey">Modelo Nuevo :</font></label>
                                                    <input class="form-control" type="text" placeholder="Automatico" name="model_new">
                                                </div>
                                                <div class="col-md-2">
                                                    <label><font color="DarkSlateGrey">Serie Nueva :</font></label>
                                                    <input class="form-control" type="text" placeholder="Automatico" name="serie_new">
                                                </div>
                                            </div>

                                            <br>

                                            <div class="row">
                                                <div class="col-md-2">
                                                    <label><font color="DarkSlateGrey">Mueble Nuevo :</font></label>
                                                    <input class="form-control" type="text" placeholder="Automatico" name="mueble_new">
                                                </div>
                                                <div class="col-md-3">
                                                    <label><font color="DarkSlateGrey">Denominaciones Nuevo :</font></label>
                                                    <input class="form-control" type="text" placeholder="Automatico" name="denom_new">
                                                </div>
                                            </div>
                                            <br>
                                            <h5><font color="Indigo"><u>DATOS DE CONFIGURACIÓN</u></font></h5>

                                            <div class="row">

                                                <div class="col-md-2">
                                                    <label><font color="Indigo">Ip Local ATM :</font></label>
                                                    <input class="form-control" type="text" placeholder="Automatico" name="ip_local_atm">
                                                </div>
                                                <div class="col-md-2">
                                                    <label><font color="Indigo">Máscara :</font></label>
                                                    <input class="form-control" type="text" placeholder="Automatico" name="mascara">
                                                </div>
                                                <div class="col-md-2">
                                                    <label><font color="Indigo">IP GW :</font></label>
                                                    <input class="form-control" type="text" placeholder="Automatico" name="ip_gw">
                                                </div>
                                                <div class="col-md-2">
                                                    <label><font color="Indigo">IP Tandem :</font></label>
                                                    <input class="form-control" type="text" placeholder="Automatico" name="ip_tandem">
                                                </div>
                                                <div class="col-md-2">
                                                    <label><font color="Indigo">Puerto :</font></label>
                                                    <input class="form-control" type="text" placeholder="Automatico" name="puerto">
                                                </div>
                                                <div class="col-md-2">
                                                    <label><font color="Indigo">IP local Alarmas :</font></label>
                                                    <input class="form-control" type="text" placeholder="Automatico" name="ip_local_alarmas">
                                                </div>
                                            </div>
                                            <br>
                                            <h5><font color="green"><u>PRECIOS</u></font></h5>

                                            <div class="row">

                                                <div class="col-md-2">
                                                    <label><font color="green">Inversion :</font></label>
                                                    <input class="form-control" type="text" placeholder="Automatico" name="inversion">
                                                </div>
                                                <div class="col-md-2">
                                                    <label><font color="green">IGV :</font></label>
                                                    <input class="form-control" type="text" placeholder="Automatico" name="igv">
                                                </div>
                                                <div class="col-md-2">
                                                </div>

                                            </div>

                                            <br>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5> <label><font color="BLACK"><u>DESCRIPCION GENERAL</u></font></label></h5>
                                                    <textarea class="form-control" rows="5" placeholder="Ingrese la Descripción aqui." name="descripcion_general"></textarea>
                                                </div>
                                            </div>
                                            
                                            <br>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-md-4">
                                                    <button type="submit" class="btn btn-primary actualizar_datos">Guardar datos</button>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- /.tab-pane -->
                                    </div>
                                    <!-- /.tab-content -->
                                </div>
                                <!-- /.nav-tabs-custom -->
                            </form>
                        </div>
                        <!-- /.col -->
                    </div>	


                </section>


            </div>
            <!-- /.row -->



            <!-- /.content -->

        </div>
        <!-- FIN CONTENIDO -->

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy; 2017-2018 <a href="https://gs4y.tk">GreatSolutions</a>.</strong> Todos los Derechos Reservados.
        </footer>


        <!-- ./wrapper -->

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
    </body>
</html>
