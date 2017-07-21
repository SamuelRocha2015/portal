<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
    <!-- bootstrap-daterangepicker -->
    <link rel="stylesheet" href="<?= base_url("vendors/bootstrap-daterangepicker/daterangepicker.css") ?>" >
    <!-- bootstrap-datetimepicker -->
    <link rel="stylesheet" href="<?= base_url("vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css") ?>" >
    <!-- Bootstrap Colorpicker -->
    <link rel="stylesheet" href="<?= base_url("vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css") ?>" >

    <?php $this->load->view('template/header.php'); ?>
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
                        <h3>Turmas</h3>
                    </div>

                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_content">

                                <form class="form-horizontal form-label-left" novalidate method="post" action="novo">
                                    <div class="form-group">
                                    <span class="section">Cadastro de Turmas</span>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Nome <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="nome" class="form-control col-md-7 col-xs-12"
                                                   data-validate-length-range="6" data-validate-words="2" name="nome"
                                                   required="required" type="text">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dias">Dias <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="checkbox">
                                                <table>
                                                    <tr>
                                                        <td><label> <input type="checkbox" id="dias" name="dias" value="seg" class="flat"> segunda </label></td>
                                                        <td> <label> <input type="checkbox" id="dias" name="dias" value="ter" class="flat"> terça </label></td>
                                                        <td><label> <input type="checkbox" id="dias" name="dias" value="qua" class="flat"> quarta </label> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>  <label> <input type="checkbox" id="dias" name="dias" value="qui" class="flat">   quinta </label></td>
                                                        <td>  <label> <input type="checkbox" id="dias" name="dias" value="sex" class="flat"> sexta </label></td>
                                                        <td><label> <input type="checkbox" id="dias" name="dias" value="sab" class="flat"> sábado </label></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Inicio <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class='input-group date' id='myDatepicker2'>
                                                <input type='text' class="form-control" />
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Término <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class='input-group date' id='myDatepicker2'>
                                                <input type='text' class="form-control" />
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Das <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class='input-group date' id='myDatepicker3'>
                                                <input type='text' class="form-control" />
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Às <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class='input-group date' id='myDatepicker3'>
                                                <input type='text' class="form-control" />
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Curso <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select class="form-control">
                                                <?php foreach ($cursos as $curso) : ?>
                                                    <option value="<?= $curso["id"]?>"><?= $curso["codigo"] . ' | ' . $curso["nome"]?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <button type="reset" class="btn btn-primary">Cancelar</button>
                                            <input type="submit" value="Enviar" class="btn btn-success">
                                        </div>
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

<!-- jQuery -->
<script src="<?= base_url("vendors/jquery/dist/jquery.min.js")?>"></script>
<!-- bootstrap-daterangepicker -->
<script src="<?= base_url("vendors/moment/min/moment.min.js")?>"></script>
<script src="<?= base_url("vendors/bootstrap-daterangepicker/daterangepicker.js")?>"></script>
<!-- bootstrap-datetimepicker -->
<script src="<?= base_url("vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js")?>"></script>
<!-- Bootstrap Colorpicker -->
<script src="<?= base_url("vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js")?>"></script>

<?php $this->load->view('template/script-footer'); ?>

<script>

    $('#myDatepicker2').datetimepicker({
        format: 'DD.MM.YYYY'
    });

    $('#myDatepicker3').datetimepicker({
        format: 'hh:mm A'
    });

</script>
</body>
</html>
