<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('template/header'); ?>
</head>
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <?php $this->load->view('template/top-body'); ?>

        <!-- top navigation -->
        <?php $this->load->view('template/top'); ?>
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Cursos</h3>
                    </div>

                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_content">

                                <form class="form-horizontal form-label-left" data-parsley-validate method="post" action="novo">
                                    <span class="section">Cadastro de Curso</span>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="codigo">Código
                                            <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="first-name" class="form-control col-md-7 col-xs-12"
                                                   data-validate-length-range="6" data-validate-words="2" value="<?=$curso['codigo']?>"
                                                   name="codigo" required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Nome <span
                                                    class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="nome" class="form-control col-md-7 col-xs-12"
                                                   data-validate-length-range="6" data-validate-words="2" name="nome" value="<?=$curso['nome']?>"
                                                   required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="horas">Horas <span
                                                    class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="number" id="horas" name="horas" required="required"
                                                   data-validate-minmax="10,100" value="<?=$curso['horas']?>"
                                                   class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="preco">Preço <span
                                                    class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="preco" name="preco" required="required" value="<?=numeroEmReais($curso['preco'])?>"
                                                   class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                               for="textarea">Detalhes</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea id="detalhes" name="detalhes" value="<?=$curso['detalhe']?>"
                                                      class="form-control col-md-7 col-xs-12"></textarea>
                                        </div>
                                    </div>

                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <button type="reset" class="btn btn-primary">Cancelar</button>
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
        <?php $this->load->view('template/footer-info'); ?>
        <!-- /footer content -->

    </div>
</div>
<?php $this->load->view('template/script-footer'); ?>

</body>
</html>
