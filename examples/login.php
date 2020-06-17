<?php
session_start();
$host_name = "sql7.freemysqlhosting.net";
$database = "sql7348907";
$db_user_name = "sql7348907";
$db_password = "2fBgRCQekb";
// connexion
$conn = mysqli_connect($host_name, $db_user_name, $db_password, $database);
/*
  if (isset($_GET['submit'])) { // if the form  submitted
  $admin_name = $_GET['user'];
  $admin_password = $_GET['pswd'];
  $admin_query = "SELECT * FROM utilisateur WHERE login='$admin_name' AND password='$admin_password' ";
  $result = mysqli_query($conn, $admin_query);
  if (mysql_num_rows($result) > 0) {
  session_start(); //session starts here
  $_SESSION['admin_name'] = $_GET['admin_name'];
  header('Location:index.php');
  } else {
  echo"Utilisateur inconnu";
  header('location:login2.php');
  }
  }
 */
// initialisation
// recuperation et insertion
if (isset($_GET['submit'])) {

    if (!empty($_GET['user']) && !empty($_GET['pswd'])) {
        $username = mysqli_real_escape_string($conn, $_GET['user']);
        $password = mysqli_real_escape_string($conn,$_GET['pswd']);
        $check = mysqli_query($conn, "SELECT * FROM utilisateur WHERE  login = '$username' and password= '$password'");
        $nb_rows = mysqli_num_rows($check);
        
     while($row=mysqli_fetch_array($check)){
        if ($nb_rows > 0 && $row['role']=='admin') { //session starts here
            $_SESSION['$username'] = $username;
            $_SESSION['$mail'] = $row['Email'];
            $_SESSION['$pswd'] = $row['password'];
            $_SESSION['$rol']="Admin";
            $_SESSION['$name']=$row['nom'];
            header('location:stats.php');
        }else if ($nb_rows > 0 && $row['role']=='prof') { //session starts here
            $_SESSION['$username'] = $username;
            $_SESSION['$ro']="Professeur";
            $_SESSION['$nam']=$row['nom'];
            $_SESSION['$psw'] = $row['password'];
           $_SESSION['$Pnam']=$row['prenom'];
$_SESSION['$mai'] = $row['Email'];
            header('location:EmploiPr.php');
        }
      
        }
       if ($nb_rows==0){
            $error = "Email ou mot de passe incorrect";
        }
    }
}

?>
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->	
        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/label.css">
        <!--===============================================================================================-->
    </head>
    <style>
        #a{
            margin-top:100px; 
        }
    </style>
    <body>

        <div class="limiter">
            <div class="container-login100" style="background-image: url('images/ENSA-JADIDA-compus.jpg');">
                <div class="wrap-login100 p-t-30 p-b-50">
                    <span class="login100-form-title p-b-41">
                        Se connecter
                    </span>
                    <form class="login100-form validate-form p-b-33 p-t-5">

                        <div class="wrap-input100 validate-input" data-validate = "Enter username">
                            <input class="input100" type="text" name="user" placeholder="Login">
                            <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <input class="input100" type="password" name="pswd" placeholder="Mot de Passe">
                            <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                        </div>
                        <?php
                        if(isset($error)){
                            $_POST['user']="gg";

                        ?>
                        <center>
<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
                        </center>
 <?php
                        }
                ?>
                        <div class="container-login100-form-btn m-t-32">
                            <button name="submit">Se connecter</button>
                        </div>
                        
                    </form>
                    <a  href="./ForgetPswd.php"  id="a" style="margin-left:150px" name="forget"> mot de passe oublié?recuperer-le</a>
                </div>
            </div>
        </div>
        <div id="dropDownSelect1"></div>

        <!--===============================================================================================-->
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/daterangepicker/moment.min.js"></script>
        <script src="vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
        <script src="js/main.js"></script>

    </body>
</html>