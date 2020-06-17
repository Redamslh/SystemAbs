/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

<?php
$servername = "sql7.freemysqlhosting.net";
	$username = "sql7348907";
	$password = "2fBgRCQekb";
	$db="sql7348907";
	$conn = mysqli_connect($servername, $username, $password,$db);

if($_POST['et']=="add")
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$sql = "INSERT INTO matiere( `libelle`, `idmodule`) 
	VALUES ('$name','$email')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
        }
   elseif($_POST['et'] == "dl")
   {
       $id=$_POST['id'];
       $sql = "delete from matiere where idMatiere=$id";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
   }
   elseif($_POST['et'] == "add1")
   {
              $id=$_POST['employ'];

      $name=$_POST['name'];
       $sql = "INSERT INTO module(`libelle`,filiere) 
	VALUES ('$name','$id')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
   }
   elseif($_POST['et'] =="dl1")
   {
       $id=$_POST['id'];
       $sql = "delete from module where idMod=$id";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
   }
?>
 