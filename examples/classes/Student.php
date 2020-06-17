<?php session_start(); ?>

<?php 
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/Database.php');
	include_once ($filepath.'/../helpers/Format.php');
?>
<?php
/**
 * Student Class
 */
class Student{
	private $db;
	private $fm;
	
	public function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}

	public function getStudents($id){
            $Pnom=$_SESSION['$nam'];
		$query = "select type,emploiprof.idMat,emploiprof.H_debut,emploiprof.H_fin,etudiant.idetudiant,etudiant.nom,etudiant.prenom,etudiant.email,emploiprof.idFil,etudiant.idgrp from groupe,etudiant,emploiprof,professeur,matiere,filiere where emploiprof.id=$id and emploiprof.idFil=etudiant.idFillere GROUP by etudiant.idetudiant";
		$result = $this->db->select($query);
		return $result;
	}

	public function insertStudent($name, $roll){
		$name = $this->fm->validation($name);
		$roll = $this->fm->validation($roll);

		$name = mysqli_real_escape_string($this->db->link, $name);
		$roll = mysqli_real_escape_string($this->db->link, $roll);

		if (empty($name) || empty($roll)) {
			$msg = "<div class='alert alert-danger'><strong>Error !</strong> Field must not be empty !</div>";
			return $msg;
		} else {
			$stu_query = "INSERT INTO tbl_student(name, roll) VALUES('$name', '$roll')";
			$stu_insert = $this->db->insert($stu_query);

			$att_query = "INSERT INTO tbl_attendance(roll) VALUES('$roll')";
			$stu_insert = $this->db->insert($att_query);

			if ($stu_insert) {
				$msg = "<div class='alert alert-success'><strong>Merci!</strong> Tous les etudiant sont inserés</div>";
				return $msg;
			} else {
				$msg = "<div class='alert alert-danger'><strong>Erreur!</strong> Quelque etudiant ne sont pas inseré reverifiez S'il vous plait!</div>";
				return $msg;
			}
		}
	}

	public function insertAttendance($attend = array(),$id){
             $Pnom=$_SESSION['$nam'];
	       $query ="select type,emploiprof.idMat,emploiprof.H_debut,emploiprof.H_fin,etudiant.idetudiant,etudiant.nom,etudiant.prenom,etudiant.email,emploiprof.idFil,etudiant.idgrp from groupe,etudiant,emploiprof,professeur,matiere,filiere where emploiprof.id='$id' and emploiprof.idFil=etudiant.idFillere GROUP by etudiant.idetudiant";
		$getdata = $this->db->select($query);
		while ($result = $getdata->fetch_assoc()) {
                    $hd=$result['H_debut'];
                        $hf=$result['H_fin'];
                        $id=$result['idMat'];
			$db_date = $result['Date'];
			$cur_date = date('Y-m-d');
			
                }

		foreach ($attend as $atn_key => $atn_value) {
			if ($atn_value == "present") {
                            continue;
			} elseif ($atn_value == "absent") {
                            ?>
                            <script src="https://www.gstatic.com/firebasejs/7.1.0/firebase-app.js"></script>                                    
<script src="https://www.gstatic.com/firebasejs/7.1.0/firebase-analytics.js"></script><script src="https://www.gstatic.com/firebasejs/3.1.0/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.1.0/firebase-database.js"></script>
                                                <script>
                                                    var arr="<?php echo $attend; ?>"
                                                    console.log()
                                                      var firebaseConfig = {
                  apiKey: "AIzaSyCq8RaBg-WAz3rMSFU-fo-HJDVsxRu8qFg",
    authDomain: "etudiant-1b4bd.firebaseapp.com",
    databaseURL: "https://etudiant-1b4bd.firebaseio.com",
    projectId: "etudiant-1b4bd",
    storageBucket: "etudiant-1b4bd.appspot.com",
    messagingSenderId: "311095019211",
    appId: "1:311095019211:web:c4607cfad3aef519643d4e"
 
              };
                            firebase.initializeApp(firebaseConfig);
                                                    var id="<?php echo $atn_key; ?>"
                                                    var nom="<?php echo $result['nom'];; ?>"
                                                    var pren="<?php echo $result['prenom'];; ?>"
                                                    var date ="<?php echo $cur_date; ?>"
                                                      var ref=firebase.database().ref();
var usersRef1 = ref.child("etudiant");
        var usersRef = usersRef1.child(id);
        var usersRef2 = usersRef.child(date);
        usersRef2.set({
          nom:nom,
          prenom:pren,
        })
        
                                                </script>
                <?php
				$stu_query = "INSERT INTO absence(CNE, Etat, Date,H_debut,H_fin,id_matiere) VALUES('$atn_key','non justifie',now(),'$hd','$hf',$id)";
				$data_insert = $this->db->insert($stu_query);
			}
		}
                

		if ($data_insert) {
			$msg = "<div class='alert alert-success'><strong>Merci!</strong> Tous les etudiants sont inserés</div>";
			return $msg;
		} else {
			$msg = "<div class='alert alert-success'><strong></strong> Tous est là !Trés Bien</div>";
			return $msg;
		}
	}

	public function getDateList(){
		$query = "SELECT DISTINCT att_time FROM tbl_attendance";
		$result = $this->db->select($query);
		return $result;
	}

	public function getAllData($dt){
		$date = $this->fm->validation($dt);
		$date = mysqli_real_escape_string($this->db->link, $date);

		$query = "SELECT tbl_student.name, tbl_attendance.*
				FROM tbl_student
				INNER JOIN tbl_attendance
				ON tbl_student.roll = tbl_attendance.roll
				WHERE att_time = '$date'";
		$result = $this->db->select($query);
		return $result;
	}

	public function updateAttendance($dt, $attend){
		foreach ($attend as $atn_key => $atn_value) {
			if ($atn_value == "present") {
				$query = "UPDATE tbl_attendance
						SET attend = 'present'
						WHERE roll = '".$atn_key."' AND att_time = '".$dt."'";
				$data_update = $this->db->update($query);
			} elseif ($atn_value == "absent") {
				$query = "UPDATE tbl_attendance
						SET attend = 'absent'
						WHERE roll = '".$atn_key."' AND att_time = '".$dt."'";
				$data_update = $this->db->update($query);
			}
		}

		if ($data_update) {
			$msg = "<div class='alert alert-success'><strong>Success !</strong> Attendance data updated successfully !</div>";
			return $msg;
		} else {
			$msg = "<div class='alert alert-danger'><strong>Error !</strong> Attendance data not updated !</div>";
			return $msg;
		}
	}

}