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

    if (!empty($_GET['user'])) {
        $username = mysqli_real_escape_string($conn, $_GET['user']);
        $check = mysqli_query($conn, "SELECT * FROM utilisateur WHERE  Email='$username'");
        $nb_rows = mysqli_num_rows($check);
     while($row=mysqli_fetch_array($check)){
        if ($nb_rows==1) { //session starts here
            $passw=$row['password'];
            $_GET['user']="gg";
            
        }
    
           
    }
   if ($nb_rows==0){
            
            $error = "cet Email n'existe pas";
        }
}

}
if (isset($_GET['retour'])) {
header('location:login.php');
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
        <script src="https://smtpjs.com/v3/smtp.js"></script>

        <!--===============================================================================================-->
    </head>
    <body>
             <div class="limiter">
            <div class="container-login100" style="background-image: url('images/ENSA-JADIDA-compus.jpg');">
                <div class="wrap-login100 p-t-30 p-b-50">
                    <span class="login100-form-title p-b-41">
                            Mot de Passe Oublie
                    </span>
                    <form class="login100-form validate-form p-b-33 p-t-5">
                        <?php
if(isset($passw)){
     ?>
                       
	
                   
                        <div id="pass">
                            <div class="wrap-input100 validate-input" data-validate = "Entrer Votre email">
                            <input class="input100" type="text" id="code" placeholder="Entrer le code reçu">
                            <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                            
                            
        </div>
                        <center><button id="ps" type="button" >Recuperer Mot de Passe</button></center>
                        <div id="pss"></div>
                        </div>

<?php
}
else {
    ?>
   

                        <div class="wrap-input100 validate-input" data-validate = "Entrer Votre email">
                            <input class="input100" type="text" name="user" id="ml" placeholder="Entrer Votre email">
                            <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                        </div>
                                   <?php
                        if(isset($error)){
                            $_POST['user']="gg";
                        ?>
                        <center>
<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo($error);?></div>
                        </center>
 <?php
                        }
                ?>
                        <div class="container-login100-form-btn m-t-32">
                            <button  name="submit">
                              Envoyer le Code
                            </button>
                        </div>
                        <?php
                        } 
?>


                    </form>
                    
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
        <script>
         
            <?php
if(isset($passw)){
     ?>
        
          var prof="<?php echo($passw);?>";
var prof1="<?php echo($username);?>";
            function randomNumber(min, max) {  
    min = Math.ceil(min); 
    max = Math.floor(max); 
    return Math.floor(Math.random() * (max - min + 1)) + min; 
}  
     var rand=randomNumber(500000, 100000000);
 
// Function call 

            function sendEmail(rand,mail) {
	Email.send({
	Host: "smtp.gmail.com",
	Username : "absencesystem@gmail.com",
	Password : "wydadalouma77",
	To : mail,
	From : "absencesystem@gmail.com",
	Subject : "Code",
	Body :"Voici le  Code pour recuperer votre mot de passe :\n"+rand,
	})
}
 sendEmail(rand,prof1);
console.log( rand );  
$("#ps").on("click",function(){
    console.log(rand)
    if($("#code").val()==rand){
        $("#pass").html('<div class=wrap-input100 validate-input error><center>Votre Mot de Passe est :' + prof +'</center></div><br />'+ '<div class=container-login100-form-btn m-t-32><button name="retour">'
                                +"Login"+'</button></div>')
    }
    else{
        $("#pss").html("<div style='font-size:11px;color:red; margin-top:10px'><center>"+"Ce code est incorrect"+"</center></div>")
    }
})
                    <?php
}
     ?>
                                    </script>
    </body>
</html>