<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('template/header.php'); ?>
</head>
<body class="nav-md">

<script>
    $(document).ready(function() {
        $('#datatable').DataTable({
            "paging": true,
            pageLength: 10,
            searching: true
        });
    } );
</script>

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

                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Matricula</th>
                                        <th>Nome</th>
                                        <th>CPF</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($alunos as $aluno) : ?>
                                        <tr>
                                            <td><?= $aluno["matricula"]?></td>
                                            <td><?= $aluno["nome"]?></td>
                                            <td><?= mascaraCPF( $aluno["cpf"])?></td>
                                            <td><?= $aluno["status"]?></td>
                                        </tr>
                                    <?php endforeach ?>
                                    </tbody>
                                </table>
                                <button type="button" class="btn btn-default" href="<?= base_url('categorias/form') ?>">Cadastrar Novo</button>

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
