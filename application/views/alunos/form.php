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
                        <h3>Alunos</h3>
                    </div>

                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_content">

                                <form class="form-horizontal form-label-left" data-parsley-validate method="post" action="novo">
                                    <span class="section">Dados do Aluno</span>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Nome <span
                                                    class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="nome" class="form-control col-md-7 col-xs-12"
                                                   data-validate-length-range="6" data-validate-words="2" name="nome"
                                                   required="required" type="text">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cpf">CPF<span
                                                    class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="cpf" class="form-control col-md-7 col-xs-12"
                                                   data-validate-length-range="6" data-validate-words="2" name="cpf"
                                                   required="required" type="text">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email<span
                                                    class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="email" class="form-control col-md-7 col-xs-12"
                                                   data-validate-length-range="6" data-validate-words="2" name="email"
                                                   required="required" type="text">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fone">Telefone<span
                                                    class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="fone" class="form-control col-md-7 col-xs-12"
                                                   data-validate-length-range="6" data-validate-words="2" name="fone"
                                                   required="required" type="text">
                                        </div>
                                    </div>


                                    <span class="section">Dados da Matrícula</span>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fone">Formação<span
                                                    class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">

                                            <table>
                                                <?php foreach ($universidades as $univ) :?>
                                                    <tr>
                                                        <td> <label> <input type="radio" id="universidade" name="universidade" value="<?php echo $univ['id']; ?>" class="flat"> <?php echo $univ['nome']; ?> </label></td>
                                                    </tr>
                                                <?php endforeach ?>

                                            </table>
                                        </div>
                                    </div>

                                    <hr />

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fone">Cursos<span
                                                    class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">

                                            <table>
                                                <?php foreach ($cursos as $curso) :?>
                                                    <tr>
                                                        <td> <label> <input type="checkbox" id="curso" name="curso" value="<?php echo $curso['id'];?> " class="flat"> <?php echo $curso['codigo'] . ' | ' . $curso['nome']; ?> </label></td>
                                                    </tr>
                                                <?php endforeach ?>

                                            </table>
                                        </div>
                                    </div>



                                    <span class="section">Outras informações</span>


                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fone">Forma de Pagamento<span
                                                    class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <table>
                                                <tr><td> <label> <input type="radio" id="pgto" name="pgto" value="1" class="flat"> Cartão  </label></td></tr>
                                                <tr><td> <label> <input type="radio" id="pgto" name="pgto" value="2" class="flat"> Boleto </label></td></tr>
                                                <tr><td> <label> <input type="radio" id="pgto" name="pgto" value="3" class="flat"> À Vista </label></td></tr>
                                                <tr><td> <label> <input type="radio" id="pgto" name="pgto" value="4" class="flat"> Negociação </label></td></tr>
                                            </table>
                                        </div>
                                    </div>



                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fone">Como nos conheceu?<span
                                                    class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <table>
                                                <tr><td> <label> <input type="radio" id="con" name="con" value="1" class="flat"> Facebook  </label></td></tr>
                                                <tr><td> <label> <input type="radio" id="con" name="con" value="2" class="flat"> Google </label></td></tr>
                                                <tr><td> <label> <input type="radio" id="con" name="con" value="3" class="flat"> Linkedin </label></td></tr>
                                                <tr><td> <label> <input type="radio" id="con" name="con" value="4" class="flat"> Indicação de Amigos </label></td>
                                                <tr><td> <label> <input type="radio" id="con" name="con" value="4" class="flat"> Panfletos e cartazes  </label></td>
                                                <tr><td> <label> <input type="radio" id="con" name="con" value="4" class="flat"> Newsletter (e-mail)  </label></td>
                                                </tr>
                                            </table>
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
