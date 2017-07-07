<!DOCTYPE html>
<html>
<head>
    <? include 'template/header.php' ?>
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
                <? include 'template/menu.php'?>
                <br/>
            </div>
        </div>

        <!-- top navigation -->
        <? include 'template/top.php' ?>

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Fixed Sidebar <small> Just add class <strong>menu_fixed</strong></small></h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->


        <!-- footer content -->
        <? include 'template/footer-info.php'?>
        <!-- /footer content -->

    </div>
</div>



    <? include 'template/script-footer.php'?>
</body>
</html>
