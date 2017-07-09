<!DOCTYPE html>
<html>
<head>
    <?php include 'template/header.php' ?>
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
        <?php include 'template/top-body.php' ?>

        <!-- top navigation -->
        <?php include 'template/top.php' ?>

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

                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Período</th>
                                        <th>Dias</th>
                                        <th>Horarios</th>
                                        <th>Ações</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($turmas as $turma) : ?>
                                        <tr>
                                            <td><?= $turma["nome"]?></td>
                                            <td><?= formataPeriodo($turma["dt_inicio"],$turma["dt_termino"] )  ?></td>
                                            <td><?= $turma["dias"]?></td>
                                            <td><?= formataPeriodoHorario( $turma["hr_inicio"]  , $turma["hr_termino"])?></td>
                                            <td> X | V </td>
                                        </tr>
                                    <?php endforeach ?>
                                    </tbody>
                                </table>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php include 'template/footer-info.php' ?>
        <!-- /footer content -->

    </div>
</div>



<?php include 'template/script-footer.php' ?>

</body>
</html>
