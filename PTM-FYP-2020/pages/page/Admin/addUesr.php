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

<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<header>

</header>

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

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
