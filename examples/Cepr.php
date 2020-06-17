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
	$ma=$_POST['ma'];
        $gr=$_POST['gr'];
        $hd=$_POST['hd'];
        $hf=$_POST['hf'];
        $jr=$_POST['jr'];
        $fl=$_POST['fl'];
        $tp=$_POST['type'];
         if ($_POST['type']=="cours"){
	$sql = "INSERT INTO emploiprof( `idProf`, `idMat`,H_debut,H_fin,jour,idGroupe,idFil,type) 
	VALUES ('$name','$ma','$hd','$hf','$jr',null,'$fl','$tp')";
         }
         else{
             $sql = "INSERT INTO emploiprof( `idProf`, `idMat`,H_debut,H_fin,jour,idGroupe,idFil,type) 
	VALUES ('$name','$ma','$hd','$hf','$jr','$gr','$fl','$tp')";
         }
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
        }
   elseif($_POST['et'] = "dl")
   {
       $id=$_POST['id'];
       $sql = "delete from emploiprof where id=$id";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
   }
?>
 