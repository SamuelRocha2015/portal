
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
                        <h3>Cursos <small>Manutenção de cursos</small></h3>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Cursos</h2>
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

                                <table class="table">
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
        <?  include(__DIR__.'../../template/footer-info.php'); ?>
        <!-- /footer content -->
    </div>
</div>

<?  include(__DIR__.'../../template/script-footer.php'); ?>

</body>
</html>
