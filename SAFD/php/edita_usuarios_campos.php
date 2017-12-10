<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SAFD | Modif. User. </title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    </head>
    <!--<body class="hold-transition skin-green fixed sidebar-mini">-->
    <!-- <body class="hold-transition skin-green layout-fixed sidebar-mini"> -->
    <body class="hold-transition skin-green fixed sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
            <header class="main-header" >
                <?php
                    include 'header_admin.php';
                ?>
            </header>

            <aside class="main-sidebar">
                <?php
                    include 'menulat_admin.php';
                ?>
            </aside>

            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="dataTables_length" id="example1_length">
                        <label>
                            <select name="example1_length"
                            aria-controls="example1" class="form-control input-sm">
                                <option value="2"
                                  selected="todos()"> Listando Todos Usuários </option>
                                <option value="1"
                                  selected="ativos()"> Listando apenas Usuários Ativos
                                </option>
                                <option value="0"> Listando apenas Usuários Desativados </option>
                            </select>
                        </label>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href=""><i class="fa fa-dashboard"></i> Inicio> Alterando usuários do sistema </a></li>
                    </ol>
                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <!--<div class="box-header">
                                  <h3 class="box-title">Alterando usuarios</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                        <div class="row">
                                            <div class="col-sm-6"></div>
                                            <div class="col-sm-3"></div>
                                        </div><div class="row">
                                            
                                        </div>
                                    </div>
                                    </section>
                                </div><!-- /.content-wrapper -->

                                <footer class="main-footer">
                                    <?php
                                        include 'footer.php';
                                    ?>
                                </footer>

                                <!-- Stats tab content -->
                                </form>
                            </div><!-- /.tab-pane -->
                        </div>
                        </aside><!-- /.control-sidebar -->

                    </div><!-- ./wrapper -->

                    <!-- jQuery 2.1.4 -->
                    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
                    <!-- Bootstrap 3.3.5 -->
                    <script src="../bootstrap/js/bootstrap.min.js"></script>
                    <!-- SlimScroll -->
                    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
                    <!-- FastClick -->
                    <script src="../plugins/fastclick/fastclick.min.js"></script>
                    <!-- AdminLTE App -->
                    <script src="../dist/js/app.min.js"></script>
                    <!-- AdminLTE for demo purposes -->
                    <script src="../dist/js/demo.js"></script>
                    </body>
                    </html>

<!-- Criando funcoes javascript -->
<script language="javascript">
  // mostrando todos usuarios
  function todos()
  {
    alert("teste");
    // document.getElementById("Todos").select();
  }

  // mostrando usuarios ativos
  function ativos()
  {
    document.getElementById("Ativos").select();
  }

  // mostrando usuarios desativados
  function desativados()
  {
    document.getElementById("Desativados").select();
  }
</script>