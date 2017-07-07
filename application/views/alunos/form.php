
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
                                    <span class="section">Cadastro de Aluno</span>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Nome <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nome" placeholder="Jon Doe" required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cpf">CPF <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="cpf" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="cpf" placeholder="000.000.000-00" required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="email" id="email" name="email" required="required" placeholder="jondoe@email.com.br"  class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telefone</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="tel" id="telephone" name="phone" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cel">Celular <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="tel" id="cel" name="cel" required="cel" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cel">Como nos conheceu <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="radio"><label><input type="radio" value="1" id="optionsRadios1" name="optionsRadios"> Facebook / Instagram</label></div>
                                            <div class="radio"><label><input type="radio" value="2" id="optionsRadios1" name="optionsRadios"> Google</label></div>
                                            <div class="radio"><label><input type="radio" value="3" id="optionsRadios1" name="optionsRadios"> Linkedin</label></div>
                                            <div class="radio"><label><input type="radio" value="4" id="optionsRadios2" name="optionsRadios"> Palestras / Eventos</label></div>
                                            <div class="radio"><label><input type="radio" value="5" id="optionsRadios3" name="optionsRadios"> Faculdade</label></div>
                                            <div class="radio"><label><input type="radio" value="6" id="optionsRadios4" name="optionsRadios"> Indicação de Amigos </label></div>
                                            <div class="radio"><label><input type="radio" value="7" id="optionsRadios5" name="optionsRadios"> Panfletos e Cartazes</label></div>
                                            <div class="radio"><label><input type="radio" value="8" id="optionsRadios5" name="optionsRadios"> Newsletter</label></div>
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
