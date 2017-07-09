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
                        <h3>Cursos</h3>
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
                                        <th>Código</th>
                                        <th>Curso</th>
                                        <th>Horas</th>
                                        <th>Preço</th>
                                        <th>Ações</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($cursos as $curso) : ?>
                                        <tr>
                                            <td><?= $curso["codigo"]?></td>
                                            <td><?= $curso["nome"]?></td>
                                            <td><?= $curso["horas"]?></td>
                                            <td><?= numeroEmReais($curso["preco"])?></td>
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
