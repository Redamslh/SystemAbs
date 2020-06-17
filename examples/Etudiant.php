<?php session_start(); ?>

<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Etudiant
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <link href="css/table.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
        <link rel="stylesheet" type="text/css" href="table.css">
        <link rel="stylesheet" type="text/css" href="css/label.css">
        <link rel="stylesheet" type="text/css" href="css/head.css">
        <script src="script\newjavascript" type="text/javascript">

        </script>
              <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>
<script src="https://www.gstatic.com/firebasejs/6.2.3/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.9.1/firebase-app.js"></script>
      <!-- Add additional services that you want to use -->
      <script src="https://www.gstatic.com/firebasejs/5.9.1/firebase-auth.js"></script>
      <script src="https://www.gstatic.com/firebasejs/5.9.1/firebase-database.js"></script>
      <script src="https://www.gstatic.com/firebasejs/5.9.1/firebase-firestore.js"></script>
      <script src="https://www.gstatic.com/firebasejs/5.9.1/firebase-messaging.js"></script>
      <script src="https://www.gstatic.com/firebasejs/5.9.1/firebase-functions.js"></script>
      <script src="https://www.gstatic.com/firebasejs/5.9.1/firebase-app.js"></script>
      <script src="jquery-3.5.1.min.js"></script>
      <script src="https://www.gstatic.com/firebasejs/7.1.0/firebase-app.js"></script>                                    
<script src="https://www.gstatic.com/firebasejs/7.1.0/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.9.1/firebase-storage.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.1/jspdf.plugin.autotable.min.js"></script>
        <style>
        .alert {
  padding: 20px;
  background-color: green;
  color: white;
  width:500px;
  margin-left: 75px;
  margin-top: 15px;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
        body{padding-top:30px;}

.glyphicon {  margin-bottom: 10px;margin-right: 10px;}

small {
display: block;
line-height: 1.428571429;
color: #999;
}
.well-sm {
    padding: 9px;
    border-radius: 3px;
}
.img-responsive {
    display: block;
    height: auto;
    max-width: 100%;
    text-shadow: 0 0 black;
}
.well {
    min-height: 20px;
    padding: 19px;
    margin-bottom: 20px;
    background-color: #f5f5f5;
    border: 1px solid #e3e3e3;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.05);
    box-shadow: inset 0 1px 1px rgba(0,0,0,0.05);
}
        .btn1{

  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 20px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  
}
.inp1
    {
 width: 100%;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 10px 12px 20px;
  width:300px;
  border-color: #ab47bc;
}

        
    </style>
</head>

<body class="">
  <div class="wrapper ">
      <?php include 'sidebar.php';?>
                  <div class="main-panel">

      <!-- End Navbar -->
      <div class="content">

           <form method="post" enctype="multipart/form-data">
                                  <select name="fil" id="nv" class="inp1"></select>
                                  <select name="grp" id="gr" class="inp1">
                                      <option>choisir un groupe</option>
                                  </select>

                          <?php
$connect = mysqli_connect("sql7.freemysqlhosting.net", "sql7348907","2fBgRCQekb", "sql7348907");
$output = '';
if(isset($_POST["fil"]))
{
 $idfil=$_POST["fil"];
};
if( isset($_POST["grp"]))
{
  $idgrp=$_POST["grp"];
};
if(isset($_POST["import"]))
{
      

    $tmp = explode(".", $_FILES["excel"]["name"]);
$extension = end($tmp);// For getting Extension of selected file
 $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension
 if(in_array($extension, $allowed_extension)) //check selected file extension is present in allowed extension array
 {
  $file = $_FILES["excel"]["tmp_name"]; // getting temporary source of excel file
  include("PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
  $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file

  $output .= "<label class='text-success'>Data Inserted</label><br /><table class='table table-bordered'>";
  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
  {
   $highestRow = $worksheet->getHighestRow();
   for($row=2; $row<=$highestRow; $row++)
   {
    $output .= "<tr>";
    $name = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
    $email = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
    $num = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
    $real = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(4, $row)->getValue());
        $naiss = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
    $query = "INSERT INTO etudiant (idFillere,idetudiant,nom,prenom,datedenaissance,email,idgrp) VALUES ('".$idfil."','".$num."','".$name."','".$email."','".$naiss."','".$real."','".$idgrp."')";
    mysqli_query($connect, $query);
    $output .= '<td>'.$name.'</td>';
        $output .= '<td>'.$num.'</td>';

    $output .= '<td>'.$email.'</td>';
    $output .= '<td>'.$idfil.'</td>';
    $output .= '</tr>';
   }
  } 
  $output .= '</table>';

 }
 else
 {
  $output = '<label class="text-danger">Invalid File</label>'; //if non excel file then
 }
}
?>   <br />
                <br />    <label class="lb11" >Selectionner un fichier Excel </label>

                      <div>                   
    <input type="file" name="excel" class="inp1 btn-success"/>
      </div>
    <input type="submit" name="import" class="btn btn-success" value="Importer" />
        <input type="button" id="bnt" class="btn btn-success" value="Chercher" />

   </form>
          <div id='psh' style="margin-left:800px;">
          <input type="text" name="import" id="name" class="inp1" placeholder="Entrer le nom d'etudiant"/>
        <input type="text"  class="inp1" placeholder="entrer le prenom d'etudiant" />
        </div>
            <div class="table-wrapper">
                
                <div class="table-title1">
                    
                    
                     
                    
                    <div class="row">
                        <div class="col-sm-6">
                            <h2><b> Gestion Etudiant</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addEmployeeModal" id="ajt" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter Etudiant</span></a>
                            <a href="#deleteEmployeeModal"  class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Supprimer</span></a>						
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="checkAll">
                                    <label for="selectAll"></label>
                                </span>
                            </th>
                            <th>CIN</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Filiere</th>
                            <th>Groupe</th>
                            <th>telPersonnel</th>
                            <th>telParent</th>
                            <th>Email</th>
                            <th>Date de Naissance</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="tableau">



                    </tbody>
                </table>
                <div class="clearfix">
                    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#">Previous</a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item active"><a href="#" class="page-link1">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
            <?php include 'Footer.php';?>

      <div id="deleteEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">						
                            <h4 class="modal-title">Supprimer Etudiant</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">					
                            <p>Vous êtes  sûr que vous voulez le supprimer</p>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
                            <input type="button" class="btn btn-danger" data-dismiss="modal" value="Supprimer" id="btn_delete"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Edit Modal HTML -->
        <div id="addEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">						
                            <h4 class="modal-title">Ajouter Etudiant</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">					
                            <div class="form-group">
                                <label>CIN</label>
                                <input id="cenn" type="text" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>NOM</label>
                                <input id="nomm" type="text" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Prenomm</label>
                                <input id="prenomm" type="text" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Telephone</label>
                                <input id="tel12" type="text" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Telephone Parent</label>
                                <input id="tel13" type="text" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input id="mail" type="email" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Date de Naissnace</label>
                                <input id="date" type="Date" class="form-control" >
                            </div>
                            
                            <div class="form-group">

                                <select class="filieresss form-control">
                                </select>
                            </div>
<div class="form-group">

                                <select id="groupe" class="form-control" >
                                </select>
                            </div>
<div class="form-group">
                                <label>Image D'etudiant</label>
        <input type="file" id="image" accept="image/*" class="btn-success">
        <br/>
             <br/>
        <input type="button" id="up" value="upload" class=" btn-success" />
        <p id="uploading"></p>
<progress value="0" max="100" id="progres1" class="form-control"></progress>
</div>
                            

                        </div>				
                <div class="modal-footer">
                    <input type="button" class="btn-default" data-dismiss="modal" value="Cancel">
                    <button type="submit" class="ajouter btn-success"  value="Add">Ajouter</button>
                </div>
                          </form>
                                        </div>

              
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="editEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">						
                        <h4 class="modal-title">Modifier Etudiant</h4>
                        <button type="button" class="close" data-dismiss="modal" id="abtn" aria-hidden="true" value="edit">&times;</button>
                    </div>
                    <div class="modal-body">					
                        <div class="form-group">
                            <label>CIN</label>
                            <input id="cen1" type="text" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>NOM</label>
                            <input id="nom1" type="text" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Prenomm</label>
                            <input id="prenom1" type="text" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Telephone</label>
                            <input id="tel15" type="text" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Telephone Parent</label>
                            <input id="tel16" type="text" class="form-control" >
                        </div>
                                                    <div class="form-group">
                                <label>Email</label>
                                <input id="mail1" type="email" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Date de Naissnace</label>
                                <input id="date1" type="Date" class="form-control" >
                            </div>
                        <div class="form-group">

                            <select class="filieress1 form-control">
                            </select>
                        </div>
                        <div class="form-group">

                                <select id="groupe1" class="form-control" >
                                </select>
                            </div>
<div class="form-group">
                                <label>Image D'etudiant</label>
        <input type="file" id="image1" accept="image/*" class="btn-success">
        <br/>
             <br/>
        <input type="button" id="up1" value="upload" class=" btn-success" />
        <p id="uploading"></p>
<progress value="0" max="100" id="progres" class="form-control"></progress>
</div>
                            </div>


                   	
                     <div class="modal-footer">
                            <input type="button" class=" btn-default" data-dismiss="modal" value="Cancel">
                            <button type="submit" class="modifier btn-success" value="Add">Modifier</button>
                        </div>

                </form>
            </div>
        </div>
    </div>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
              <span class="badge filter badge-rose active" data-color="rose"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Images</li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-1.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-2.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-3.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-4.jpg" alt="">
          </a>
        </li>
        <li class="button-container">
          <a href="https://www.creative-tim.com/product/material-dashboard" target="_blank" class="btn btn-primary btn-block">Free Download</a>
        </li>
        <!-- <li class="header-title">Want more components?</li>
            <li class="button-container">
                <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">
                  Get the pro version
                </a>
            </li> -->
        <li class="button-container">
          <a href="https://demos.creative-tim.com/material-dashboard/docs/2.1/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block">
            View Documentation
          </a>
        </li>
        <li class="button-container github-star">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
        </li>
        <li class="header-title">Thank you for 95 shares!</li>
        <li class="button-container text-center">
          <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>
          <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>
          <br>
          <br>
        </li>
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.1.0/firebase-app.js"></script>                                    
<script src="https://www.gstatic.com/firebasejs/7.1.0/firebase-analytics.js"></script><script src="https://www.gstatic.com/firebasejs/3.1.0/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.1.0/firebase-database.js"></script>
        <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>
<script src="https://www.gstatic.com/firebasejs/6.2.3/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.9.1/firebase-app.js"></script>
      <!-- Add additional services that you want to use -->
      <script src="https://www.gstatic.com/firebasejs/5.9.1/firebase-auth.js"></script>
      <script src="https://www.gstatic.com/firebasejs/5.9.1/firebase-database.js"></script>
      <script src="https://www.gstatic.com/firebasejs/5.9.1/firebase-firestore.js"></script>
      <script src="https://www.gstatic.com/firebasejs/5.9.1/firebase-messaging.js"></script>
      <script src="https://www.gstatic.com/firebasejs/5.9.1/firebase-functions.js"></script>
      <script src="https://www.gstatic.com/firebasejs/5.9.1/firebase-app.js"></script>
  <script>
    $(document).ready(function() {
         var firebaseConfig = {
    apiKey: "AIzaSyCky3K0eZBqdUcn754HaXy1PFzwoEu6UlU",
    authDomain: "image-82912.firebaseapp.com",
    databaseURL: "https://image-82912.firebaseio.com",
    projectId: "image-82912",
    storageBucket: "image-82912.appspot.com",
    messagingSenderId: "993292003555",
    appId: "1:993292003555:web:06861502608f819f72bdd6",
    measurementId: "G-F15K0HRB43"
  };

  firebase.initializeApp(firebaseConfig);
        console.log("gg")
        employ = $(".filieress1");
                                    $.ajax({
                                        url: '.././controller/gestionFiliere.php',
                                        data: {op: ''},
                                        type: 'POST',
                                        success: function (data, textStatus, jqXHR) {
                                            console.log(data[0].idFillere);
                                            console.log(data[0].abreveation);
                                            var option = '<option selected>Choisi un niveau</option>';
                                            for (var i = 0; i < data.length; i++) {
                                                option += '<option value="' + data[i].idFillere + '">' + data[i].abreveation + '</option>';
                                                console.log(option);
                                            }
                                            employ.html(option);
                                        },
                                        error: function (jqXHR, textStatus, errorThrown) {
                                            console.log(textStatus);

                                        }
                                    });
                                     $(".filieress1").on('change', function () {
                                    var fil=$('.filieress1').val();
                                    grou=$("#groupe1");
                                          $.ajax({
                                        url: '.././controller/gestionFiliere.php',
                                        data: {op: 'Gr',gr:fil},
                                        type: 'POST',
                                        success: function (data, textStatus, jqXHR) {

                                            var option = '<option selected>Choisi un groupe</option>';
                                            for (var i = 0; i < data.length; i++) {
                                                option += '<option value="' + data[i].id + '">' + data[i].num + '</option>';
                                                console.log(option);
                                            }
                                            grou.html(option);
                                        },
                                        error: function (jqXHR, textStatus, errorThrown) {
                                            console.log(textStatus);

                                        }
                                    });
                                     })
          employe = $("#nv");
                                    $.ajax({
                                        url: '.././controller/gestionFiliere.php',
                                        data: {op: ''},
                                        type: 'POST',
                                        success: function (data, textStatus, jqXHR) {
                                            console.log(data[0].idFillere);
                                            console.log(data[0].abreveation);
                                            var option = '<option selected>Choisi une filiere </option>';
                                            for (var i = 0; i < data.length; i++) {
                                                option += '<option value="' + data[i].idFillere + '">' + data[i].abreveation + '</option>';
                                                console.log(option);
                                            }
                                            employe.html(option);
                                        },
                                        error: function (jqXHR, textStatus, errorThrown) {
                                            console.log(textStatus);

                                        }
                                    });
                                     $(".filieresss").on('change', function () {
                                    var fil=$('.filieresss').val();
                                    group=$("#groupe");
                                          $.ajax({
                                        url: '.././controller/gestionFiliere.php',
                                        data: {op: 'Gr',gr:fil},
                                        type: 'POST',
                                        success: function (data, textStatus, jqXHR) {

                                            var option = '<option selected>Choisi un groupe </option>';
                                            for (var i = 0; i < data.length; i++) {
                                                option += '<option value="' + data[i].id + '">' + data[i].num + '</option>';
                                                console.log(option);
                                            }
                                            group.html(option);
                                        },
                                        error: function (jqXHR, textStatus, errorThrown) {
                                            console.log(textStatus);

                                        }
                                    });
                                     })
                                     $("#nv").on('change', function () {
                                            var id = $("#nv").val();
                                           
                                            grp=$("#gr");
                                          $.ajax({
                                        url: '.././controller/gestionFiliere.php',
                                        data: {op: 'Gr',gr:id},
                                        type: 'POST',
                                        success: function (data, textStatus, jqXHR) {

                                            var option = '<option selected>Choisi un groupe </option>';
                                            for (var i = 0; i < data.length; i++) {
                                                option += '<option value="' + data[i].id + '">' + data[i].num + '</option>';
                                                console.log(option);
                                            }
                                            grp.html(option);
                                        },
                                        error: function (jqXHR, textStatus, errorThrown) {
                                            console.log(textStatus);

                                        }
                                    });
                                    
                                                                        $("#bnt").on('click', function () {
var id1 = $("#gr").val();
                                     $.ajax({
                                          
        url: '.././controller/gestionFiliere.php',
        data: {op: 'Etf',et:id,gr:id1},
        type: 'POST',
        success: function(data, textStatus, jqXHR) {
remplir(data)

        },
        error: function(jqXHR, textStatus, errorThrown) {
        }});
    $("#name").on('change', function () {
    var id2 = $("#name").val();
    console.log(id2+id+id1)
                                     $.ajax({
                                          
        url: '.././controller/gestionFiliere.php',
        data: {op: 'nm',et:id,gr:id1,nm:id2},
        type: 'POST',
        success: function(data, textStatus, jqXHR) {

  remplir(data)

        },
        error: function(jqXHR, textStatus, errorThrown) {
        }});
    
        });
         });
         function remplir(data) {
        var contenu = $('#tableau');
        var ligne = "";
        for (i = 0; i < data.length; i++) {
            ligne += '<tr id="'+ data[i].idetudiant + '"><td><span class="custom-checkbox">' + '<input type="checkbox" id="checkbox1" name="options[]" value="'+ data[i].idetudiant + '">' +
                    '<label for="checkbox1"></label>' + '</span></td>';
         ligne += '<td class="ce">' + data[i].idetudiant + '</td>';

            ligne += '<td class="no">' + data[i].nom + '</td>';
            ligne += '<td>' + data[i].prenom + '</td>';
            ligne += '<td>' + data[i].abreveation + '</td>';
            ligne += '<td>' + data[i].num + '</td>';
            ligne += '<td>' + data[i].tel + '</td>';
            ligne += '<td>' + data[i].telP + '</td>';
ligne += '<td class="no" style="display:none;">' + data[i].idFillere + '</td>'
ligne += '<td class="no" style="display:none;">' + data[i].idgrp + '</td>'
ligne += '<td>' + data[i].email + '</td>';
ligne += '<td>' + data[i].datedenaissance + '</td>';
             ligne += '<td>' + '<a href="#editEmployeeModal" class="edit" data-toggle="modal">' + '<i class="material-icons" data-toggle="tooltip" title="Edit">' + '&#xE254' + '</i></a>' 
                     
                    +'</td></tr>';
        }
        contenu.html(ligne);

    }
         });
         
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
    
  </script>
  <script>
$(document).ready(function(){
 
 $('#btn_delete').click(function(){
  

   var id = [];
   
   $(':checkbox:checked').each(function(i){
    id[i] = $(this).val();
    console.log(id[i])
   });
   
   if(id.length === 0) //tell you if the array is empty
   {
    alert("Please Select atleast one checkbox");
   }
   else
   {
    $.ajax({
     url:'Etudiant.php',
     method:'POST',
     data:{id:id},
     success:function()
     {
      for(var i=0; i<id.length; i++)
      {
       $('tr#'+id[i]+'').css('background-color', '#ccc');
       $('tr#'+id[i]+'').fadeOut('slow');
      }
     }
     
    });
   }
   
  

 });
 
});
 $("#checkAll").click(function () {
     $('input:checkbox').not(this).prop('checked', this.checked);
 });
 
</script>
<?php
//delete.php
$connect = mysqli_connect("sql7.freemysqlhosting.net", "sql7348907", "2fBgRCQekb", "sql7348907");
if(isset($_POST["id"]))
{
 foreach($_POST["id"] as $id)
 {
  $query = "DELETE FROM etudiant WHERE idetudiant = '".$id."'";
  mysqli_query($connect, $query);
 }
}
?>
</body>

</html>