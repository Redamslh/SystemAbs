<?php 
	include "inc/header.php"; 
	include "classes/Student.php"; 
	$stu = new Student();
?>
<?php 
	error_reporting(0);
	$cur_date = date('Y-m-d');
        $id=$_GET['id'];
        $idg=$_GET['idgr'];
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$attend = $_POST['attend'];
		$insertattend = $stu->insertAttendance($attend,$id,$jr);
                
	}
?>
	<div class="container">
<?php 
	if (isset($insertattend)) {
		echo $insertattend;
	}
        
?>
<div class='alert alert-danger' style="display: none;"><strong>Error !</strong> Student Roll Missing !</div>
		<div class="card">

			<div class="card-body">
				<div class="card bg-light text-center mb-3" >
                                    <h4 class="m-0 py-3" ><strong >Date</strong>: <?php echo $cur_date; ?></h4>
				</div>
				<form action="" method="post">
					<table class="table table-striped">
						<tr>
							<th width="25%">CNE</th>
							<th width="25%">Nom</th>
							<th width="25%">Prenom</th>
							<th width="25%">Attendance</th>
						</tr>
<?php 

        $getstudent = $stu->getStudents($id);
	if ($getstudent) {
		$i = 0;
		while ($value = $getstudent->fetch_assoc()) {
			$i++;
                        if($value['type']=="cours"){
                       
?>
						<tr>
							<td><?php echo $value['idetudiant'];; ?></td>
							<td><?php echo $value['nom']; ?></td>
							<td><?php echo $value['prenom']; ?></td>
							<td>
								<input type="radio" name="attend[<?php echo $value['idetudiant']; ?>]" value="present">P
								<input type="radio" name="attend[<?php echo $value['idetudiant']; ?>]" value="absent">A
							</td>
						</tr>
                <?php } 
                
 elseif ($value['type']=="tp") {
     if($value['idgrp']==$idg){
         ?>
                                                <tr>
							<td><?php echo $value['idetudiant'];; ?></td>
							<td><?php echo $value['nom']; ?></td>
							<td><?php echo $value['prenom']; ?></td>
							<td>
								<input type="radio" name="attend[<?php echo $value['idetudiant']; ?>]" value="present">P
								<input type="radio" name="attend[<?php echo $value['idetudiant']; ?>]" value="absent">A
							</td>
						</tr>
    <?php      
     }
     
     
 }
                
                
                
                
           
                
                
                        }} ?>

						<tr>
							<td colspan="4" class="text-center">
								<input style="background-color: #ab47bc" type="submit" name="submit" class="btn btn-primary px-5" value="Submit">
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>