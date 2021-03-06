<?php
require "../../../../backend/login.php";
$Us=new login('root',"");
$depart=$Us->getDepa();
$role=$Us->getrole();

if(isset($_POST['sub'])){
    $email=strip_tags($_POST['email']);
    $pass=strip_tags($_POST['pass']);
    $name=strip_tags($_POST['name']);
    $role_=$_POST['role'];
    $depa=$_POST['depa'];
    $phone=strip_tags($_POST['phone']);
    $pas2=sha1($pass);
    $Us->newUser($email,$pas2,$name,$phone,$depa,$role_);
}
?>

<!-- -- -- --- -- -- -- -- -- -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PTM| Projects</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../../dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index.php" class="nav-link">Home</a>
            </li>

        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>





        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">

        </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index.html" class="brand-link">

            <span class="brand-text font-weight-light">PTM</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                <div class="info">
                    <a href="#" class="d-block">Manager</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Quick links
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Home</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="pages/examples/logout.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Logout</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Projects</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="addNewProject.php">Add New Project</a></li>
                            <li class="breadcrumb-item active">Projects</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section>
            <div class="container">
                <div class="row">

                    <div class="col-8">
                        <form method="POST">
                            <div class="col-8 ">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="E-mail">
                                </div>
                            </div>

                            <div class="col-8 ">
                                <div class="form-group">
                                    <input type="password" name="pass" class="form-control" placeholder="Password">
                                </div>
                            </div>

                            <div class="col-8 ">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                </div>
                            </div>

                            <div class="col-8 ">
                                <div class="form-group">
                                    <select name="role" class="form-control">
                                        <?php
                                        foreach ($role as $r){
                                            echo '
                             <option value="'.$r['id'].'">'.$r['role_name'].'</option>
                             ';
                                        }
                                        ?>
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-8 ">
                                <div class="form-group">
                                    <select name="depa" class="form-control">
                                        <?php
                                        foreach ($depart as $r){
                                            echo '
                             <option value="'.$r['id'].'">'.$r['depart_name'].'</option>
                             ';
                                        }
                                        ?>
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-8 ">
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" placeholder="Phoen">
                                </div>
                            </div>
                            <div class="col-8 ">
                                <div class="form-group">
                                    <input type="submit" name="sub" class="btn btn-success" value="Save">
                                </div>
                            </div>

                        </form>
                    </div>


                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">

        </div>
        <strong>Copyright &copy; 2020 PTM</a>.</strong>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../dist/js/demo.js"></script>
</body>
</html>


