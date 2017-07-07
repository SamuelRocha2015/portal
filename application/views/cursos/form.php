
<!DOCTYPE html lang= "en">
<html>
<head>
    <? include(__DIR__.'../../template/header.php');?>
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="#" class="site_title"></i> <span>CodesHouse Portal</span></a>
                </div>
                <!-- menu -->
                <?  include(__DIR__.'../../template/menu.php'); ?>
                <br/>
            </div>
        </div>

        <!-- top navigation -->
        <?  include(__DIR__.'../../template/top.php'); ?>


        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Form Validation</h3>
                    </div>

                </div>
                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Form validation <small>sub title</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a>
                                            </li>
                                            <li><a href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <form class="form-horizontal form-label-left" novalidate method="post" action="novo">
                                    <span class="section">Cadastro de Curso</span>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="codigo">Código <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="codigo" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"
                                                   name="codigo" required="true" type="text">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Nome <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="nome" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nome" required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="horas">Horas <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="number" id="horas" name="horas" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="preco">Preço <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="preco" name="preco" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Detalhes</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea id="detalhes"  name="detalhes" class="form-control col-md-7 col-xs-12"></textarea>
                                        </div>
                                    </div>

                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <button type="submit" class="btn btn-primary">Cancelar</button>
                                            <input type="submit" value="Enviar" class="btn btn-success">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?  include(__DIR__.'../../template/footer-info.php'); ?>
        <!-- /footer content -->

    </div>
</div>

<?  include(__DIR__.'../../template/script-footer.php'); ?>

</body>
</html>
