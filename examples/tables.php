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
<?php session_start(); ?>

<html lang="en">

    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="../assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
            Absence Recent
        </title>
        <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <!-- CSS Files -->
        <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="../assets/demo/demo.css" rel="stylesheet" />
         <link href="css/head.css" rel="stylesheet" />
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

        <script src="https://smtpjs.com/v3/smtp.js"></script>
<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/jszip.min.js"></script>
<script src="http//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    </head>
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
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-0lax{text-align:left;vertical-align:top}

        .loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}
    </style>
    <div id="loader"></div>

    <div class="modal fade" id="ignismyModal" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
                     </div>
					
                    <div class="modal-body">
                       
						<div class="thank-you-pop">
                                                    <center><img src="http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png" alt="">
							<p>Votre message a éte envoyer avec succès</p>
							</center>
 						</div>
                         
                    </div>
					
                </div>
            </div>
        </div>
<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Contacter l'etudiant</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="form34" class="form-control validate" id="name">
          <label data-error="wrong" data-success="right" for="form34" >De</label>
        </div>

        <div class="md-form mb-5">
          <i class="	fas fa-at prefix grey-text"></i>
          <input type="email" id="form29" class="form-control validate" >
          <label data-error="wrong" data-success="right" for="form29" >Destinataire</label>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-tag prefix grey-text"></i>
          <input type="text" id="form32" class="form-control validate" >
          <label data-error="wrong" data-success="right" for="form32" >Objet</label>
        </div>

        <div class="md-form">
          <i class="fas fa-envelope prefix grey-text"></i>
          <textarea type="text" id="form8" class="md-textarea form-control" rows="4" ></textarea>
          <label data-error="wrong" data-success="right" for="form8">Message</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center" style="color:green">
          
          <button class="btn btn-success Send" href="#ignismyModal" >Envoyer   <i class="	fas fa-arrow-alt-circle-right"></i></button>
      </div>
    </div>
  </div>
</div>

    <body class="">
        <div id="limprimable" hidden="">
               <header class="clearfix">

    </header>
               <div id="rw1" style="margine-left:100px">

               </div>

      <div id="rw2"></div>   
      
        <table border="1" style="width:1000px;margin:auto;margin-top:120px" >
        <thead>
            <tr>
        <td>CIN</td>
        <td>Nom</td>
        <td>Prenom</td>
       <td>Presence</td>
            </tr>
    </thead>
    <tbody id="content12">

    </tbody>
</table>
                                    

    </div>
                <div id="imprimerabsence" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">						
                            <h4 class="modal-title">Imprimer la Fiche d'Avertissement</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            
                        </div>
                        <div class="modal-body">					
                            <div class="form-group">
                                <label>filiere</label><br>
                                <select  class="filieress1 form-control" >

                                </select>
                            </div>
                            <div class="form-group">
                                <label>date</label>
                                <input type="date" class="form-control" id="date2" required>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select type="text" class="form-control" id="lib" required >
                            <option value="" >Choisir le status</option>
    <option value="3-7">Avertissement</option>
    <option value="7-14">Rattrapée:matiere la plus absenté</option>
    <option value="14-100000 ">Rattrapge :Session Normal</option></select>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <a  type="submit" class="btn btn-success imprimers" value="Add">Imprimer</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="wrapper ">
             <div id="lebody1" hidden="">
        
    </div>
            <?php include 'sidebar.php';?>
            <div class="main-panel">
                <!-- End Navbar -->
                <div class="content">
                    <div class="container">
                        
                        
                        <select id="nv" class="inp1"></select>
                       
                        <select type="text" class="inp1" id="et" required >
                            <option value="" >Choisir l'Etat</option>
    <option value="justifie">Justifié</option>
    <option value="non justifie">Non Justifié</option></select>
<input type="button" value="chercher" id="bnt" class="btn btn-success btn1">
  <input type="text" class="inp1" id="ip"  placeholder="Entrer le Minimum nombre d'Absence">

                    </div>
                    
                    <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Info!</strong> Cliquez sur le nom des etudiants pour avoir plus d'info
</div>
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-primary">
              <div class="row">
                        <div class="col-sm-6">
                            <h2><b>Absence</b></h2>
                        </div>
                        <div class="col-sm-6">
                           <a href="#imprimerabsence" class="btn btn-success" data-toggle="modal"><i class="material-icons">local_printshop</i> <span>imprimer fiche d'Avertissement</span></a>						
                        </div>

                    </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class=" text-primary">
                                                <th>
                                                    Nom   
                                                </th>
                                                <th>
                                                    Prenom
                                                </th>
                                                <th>
                                                    Nbre d'Absence
                                                </th>
                                                    <th>
                                                    Status
                                                </th>
                                                <th>
                                                    Contact
                                                </th>
                                                </thead>
                                                <tbody id="table2">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                   
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

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
<div class="well well-sm">
                <div class="row" >
                    <div class="col-sm-6 col-md-4" id="im">
                        
                    </div>
                    <div class="col-sm-6 col-md-8" id="dv">
                      
                        
                        <!-- Split button -->
                    </div>
                </div>
            </div>
      
    </div>

<!------ Include the above in your HEAD tag ---------->

<!--Model Popup starts-->

        

 
   
<table id="exportTable" hidden>
<tr>
    <td>
       
        
<table  class="table table-hover" hidden>

        <thead>
              
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody id="gg">
            
        </tbody>
    </table>

    </td>
</tr>
</table>
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
        <script>
                                $(document).ready(function () {
                                    employe = $("#nv");
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
                                            employe.html(option);
                                        },
                                        error: function (jqXHR, textStatus, errorThrown) {
                                            console.log(textStatus);

                                        }
                                    });
  
                                    $("#bnt").on('click', function () {
                                        var id = $("#nv").val();
                                        var et= $("#et").val();
                                        console.log(et);
                                        $.ajax({
                                            url: '.././controller/etdController.php',
                                            data: {et : et,id: id},
                                            type: 'POST',
                                            success: function (data, textStatus, jqXHR) {
                                                remplir(data);
                                               
                                            },
                                            error: function (jqXHR, textStatus, errorThrown) {
                                                console.log(textStatus);
                                            }
                                        });
                                        function remplir(data) {
                                            console.log("gg");
                                            var contenu = $("#table2");
                                            var ligne = "";
                                            var vl = $("#ip").val();
                                            for (i = 0; i < data.length; i++) {
                                               if (data[i].nbreAbs>=vl){
                                                   if(et=="non justifie"){
                                                   if(data[i].nbreAbs>=3 && data[i].nbreAbs<=6){
                                                ligne += '<tr><th id="md" scope="row" data-toggle="modal" data-target="#myModal">' + data[i].nom + '</th>';
                                                ligne += '<td>' + data[i].prenom + '</td>';
                                                ligne += '<td>' + data[i].nbreAbs + '</td>';
                                                
                                                ligne += '<td>' + "<i style=color:yellow class=material-icons>error_outline</i>"+ "Avertissement" + '</td>';
                                                ligne += '<td class="no" style="display:none;">'  + data[i].email + '</td>';
                                                ligne += '<td>' + '<a href="#modalContactForm" class="edit" data-toggle="modal" value="' + data[i].email + '">' + '<i class="material-icons" data-toggle="tooltip" title="Edit">' + 'contact_mail' + '</i></a>' 
                     
                    +'</td></tr>';
                                            }
                                            else if(data[i].nbreAbs>=7 )
                                            {
                                                 ligne += '<tr><th id="md" scope="row" data-toggle="modal" data-target="#myModal">' + data[i].nom + '</th>';
                                                ligne += '<td>' + data[i].prenom + '</td>';
                                                ligne += '<td>' + data[i].nbreAbs + '</td>';
                                                ligne += '<td>' + "<i style=color:red class=material-icons>error_outline</i>"+"Sanctionné" + '</td>';
                                                 ligne += '<td class="no" style="display:none;">'  + data[i].email + '</td>';
                                                ligne += '<td>' + '<a href="#modalContactForm" class="edit" data-toggle="modal"value="' + data[i].email + '">' + '<i class="material-icons" data-toggle="tooltip" title="Edit">' + 'contact_mail' + '</i></a>' 
                     
                    +'</td></tr>';
                                            }else{
                                            ligne += '<tr><th id="md" scope="row" data-toggle="modal" data-target="#myModal">' + data[i].nom + '</th>';
                                                ligne += '<td>' + data[i].prenom + '</td>';
                                                ligne += '<td>' + data[i].nbreAbs + '</td>';
                                                ligne += '<td>' + "-" + '</td>';
                                                 ligne += '<td class="no" style="display:none;">'  + data[i].email + '</td>';
                                                ligne += '<td>' + '<a href="#modalContactForm" class="edit" data-toggle="modal" value="' + data[i].email + '">' + '<i class="material-icons" data-toggle="tooltip" title="Edit">' + 'contact_mail' + '</i></a>' 
                     
                    +'</td></tr>';
                                             
                                        }
                                    }
                                    else{
                                        ligne += '<tr><th id="md" scope="row" data-toggle="modal" data-target="#myModal">' + data[i].nom + '</th>';
                                                ligne += '<td>' + data[i].prenom + '</td>';
                                                ligne += '<td>' + data[i].nbreAbs + '</td>';
                                                ligne += '<td>' + "-" + '</td>';
                                                 ligne += '<td class="no" style="display:none;">'  + data[i].email + '</td>';
                                                                                                 ligne += '<td>' + '<a href="#modalContactForm" class="edit" data-toggle="modal" value="' + data[i].email + '">' + '<i class="material-icons" data-toggle="tooltip" title="Edit">' + 'contact_mail' + '</i></a>' 

                                                var test = $('th').attr('id');
                                                console.log(test)
        
                                    }
                                        }
                                       
  
                                            }
                                            contenu.html(ligne);
                                        }

                                    });
                                     $("#myModal").on('show.bs.modal', function (e) {
                                         var $modal = $(this),
                esseyId = e.relatedTarget.id;
                var el= e.relatedTarget.innerHTML;
                console.log(el)
                 $.ajax({
                                            url: '.././controller/gestionFiliere.php',
                                            data: {op: 'inf',nm: el},
                                            type: 'POST',
                                            success: function (data, textStatus, jqXHR) {
                                                console.log(data)
                                                modal(data);
                                            },
                                            error: function (jqXHR, textStatus, errorThrown) {
                                                console.log(textStatus);
                                            }
                                        });
                                        function modal(data){
                                            for (i = 0; i < data.length; i++) {
                                                $("#im").html("<img src='" + data[i].img + "' width=150 height=200 class=img-rounded img-responsive />");
                                                $("#dv").html("<h4>" + data[i].nom  + "  " +data[i].prenom + "</h4>"
                        +"<p>"+
                        "<i class=glyphicon glyphicon-envelope></i>" + "CNE :"+ data[i].idetudiant
                            +"<br />"
                            +"<i class=glyphicon glyphicon-envelope></i>"+"date de naissance :"+data[i].datedenaissance+
                            "<br />"+
                            "<i class=glyphicon glyphicon-globe></i>"+"<a href=http://www.jquery2dotnet.com>"+"Email :" +data[i].email+"</a>"
                            +"<br />"
                            +"<i class=glyphicon glyphicon-gift></i>"+"Numero du parent :"+ data[i].telP
                            +"</p>");
                                              
                                        }
                                    }
                                    });
                                    
                                $("#ip").on('change', function () {
                
                                                  var fl = $("#nv").val();
                                        var et= $("#et").val();
                                        $.ajax({
                                            url: '.././controller/etdController.php',
                                            data: {et : et,id: fl},
                                            type: 'POST',
                                            success: function (data, textStatus, jqXHR) {
                                                console.log(data)
                                                remplir2(data);
                                            },
                                            error: function (jqXHR, textStatus, errorThrown) {
                                                console.log(textStatus);
                                            }
                                        });
                                        function remplir2(data) {
                                            console.log("gg");
                                            var contenu = $("#table2");
                                            var ligne = "";
                                            var vl = $("#ip").val();
                                                  for (i = 0; i < data.length; i++) {
                                               if (data[i].nbreAbs>=vl){
                                                   if(et=="non justifie"){
                                                   if(data[i].nbreAbs>=3 && data[i].nbreAbs<=6){
                                                ligne += '<tr><th id="md" scope="row" data-toggle="modal" data-target="#myModal">' + data[i].nom + '</th>';
                                                ligne += '<td>' + data[i].prenom + '</td>';
                                                ligne += '<td>' + data[i].nbreAbs + '</td>';
                                                
                                                ligne += '<td>' + "<i style=color:yellow class=material-icons>error_outline</i>"+ "Avertissement" + '</td>';
                                                ligne += '<td class="no" style="display:none;">'  + data[i].email + '</td>';
                                                ligne += '<td>' + '<a href="#modalContactForm" class="edit" data-toggle="modal" value="' + data[i].email + '">' + '<i class="material-icons" data-toggle="tooltip" title="Edit">' + 'contact_mail' + '</i></a>' 
                     
                    +'</td></tr>';
                                            }
                                            else if(data[i].nbreAbs>=7 )
                                            {
                                                 ligne += '<tr><th id="md" scope="row" data-toggle="modal" data-target="#myModal">' + data[i].nom + '</th>';
                                                ligne += '<td>' + data[i].prenom + '</td>';
                                                ligne += '<td>' + data[i].nbreAbs + '</td>';
                                                ligne += '<td>' + "<i style=color:red class=material-icons>error_outline</i>"+"Sanctionné" + '</td>';
                                                 ligne += '<td class="no" style="display:none;">'  + data[i].email + '</td>';
                                                ligne += '<td>' + '<a href="#modalContactForm" class="edit" data-toggle="modal"value="' + data[i].email + '">' + '<i class="material-icons" data-toggle="tooltip" title="Edit">' + 'contact_mail' + '</i></a>' 
                     
                    +'</td></tr>';
                                            }else{
                                            ligne += '<tr><th id="md" scope="row" data-toggle="modal" data-target="#myModal">' + data[i].nom + '</th>';
                                                ligne += '<td>' + data[i].prenom + '</td>';
                                                ligne += '<td>' + data[i].nbreAbs + '</td>';
                                                ligne += '<td>' + "-" + '</td>';
                                                 ligne += '<td class="no" style="display:none;">'  + data[i].email + '</td>';
                                                ligne += '<td>' + '<a href="#modalContactForm" class="edit" data-toggle="modal" value="' + data[i].email + '">' + '<i class="material-icons" data-toggle="tooltip" title="Edit">' + 'contact_mail' + '</i></a>' 
                     
                    +'</td></tr>';
                                             
                                        }
                                    }
                                    else{
                                        ligne += '<tr><th id="md" scope="row" data-toggle="modal" data-target="#myModal">' + data[i].nom + '</th>';
                                                ligne += '<td>' + data[i].prenom + '</td>';
                                                ligne += '<td>' + data[i].nbreAbs + '</td>';
                                                ligne += '<td>' + "-" + '</td>';
                                                 ligne += '<td class="no" style="display:none;">'  + data[i].email + '</td>';
                                                                                                 ligne += '<td>' + '<a href="#modalContactForm" class="edit" data-toggle="modal" value="' + data[i].email + '">' + '<i class="material-icons" data-toggle="tooltip" title="Edit">' + 'contact_mail' + '</i></a>' 

                                                var test = $('th').attr('id');
                                                console.log(test)
        
                                    }
                                        }
                                       
  
                                            }
                                            contenu.html(ligne);
                                        }
                                      

                                    });
                                    
                                $().ready(function () {
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

                                    $('.fixed-plugin a').click(function (event) {
                                        // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                                        if ($(this).hasClass('switch-trigger')) {
                                            if (event.stopPropagation) {
                                                event.stopPropagation();
                                            } else if (window.event) {
                                                window.event.cancelBubble = true;
                                            }
                                        }
                                    });

                                    $('.fixed-plugin .active-color span').click(function () {
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

                                    $('.fixed-plugin .background-color .badge').click(function () {
                                        $(this).siblings().removeClass('active');
                                        $(this).addClass('active');

                                        var new_color = $(this).data('background-color');

                                        if ($sidebar.length != 0) {
                                            $sidebar.attr('data-background-color', new_color);
                                        }
                                    });

                                    $('.fixed-plugin .img-holder').click(function () {
                                        $full_page_background = $('.full-page-background');

                                        $(this).parent('li').siblings().removeClass('active');
                                        $(this).parent('li').addClass('active');


                                        var new_image = $(this).find("img").attr('src');

                                        if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                                            $sidebar_img_container.fadeOut('fast', function () {
                                                $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                                                $sidebar_img_container.fadeIn('fast');
                                            });
                                        }

                                        if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                                            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                                            $full_page_background.fadeOut('fast', function () {
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

                                    $('.switch-sidebar-image input').change(function () {
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

                                    $('.switch-sidebar-mini input').change(function () {
                                        $body = $('body');

                                        $input = $(this);

                                        if (md.misc.sidebar_mini_active == true) {
                                            $('body').removeClass('sidebar-mini');
                                            md.misc.sidebar_mini_active = false;

                                            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                                        } else {

                                            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                                            setTimeout(function () {
                                                $('body').addClass('sidebar-mini');

                                                md.misc.sidebar_mini_active = true;
                                            }, 300);
                                        }

                                        // we simulate the window Resize so the charts will get updated in realtime.
                                        var simulateWindowResize = setInterval(function () {
                                            window.dispatchEvent(new Event('resize'));
                                        }, 180);

                                        // we stop the simulation of Window Resize after the animations are completed
                                        setTimeout(function () {
                                            clearInterval(simulateWindowResize);
                                        }, 1000);

                                    });
                                });
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
                                                option += '<option value="' + data[i].idFillere +"-"+data[i].abreveation+ '">' + data[i].abreveation + '</option>';
                                                console.log(option);
                                            }
                                            employ.html(option);
                                        },
                                        error: function (jqXHR, textStatus, errorThrown) {
                                            console.log(textStatus);

                                        }
                                    });
                                   
$('.imprimers').on('click', function() {

 var str =$('#lib').val();
             var str1 =$('.filieress1').val();
                        console.log(str)
var array = str.split("-");
var array1 = str1.split("-");
var lt=array[0];
var lt1=array[1];
var id=array1[0];
var lt11=array1[1];
console.log(lt)
 function sendEmail(mail,sub,msg) {
          
	Email.send({
	Host: "smtp.gmail.com",
	Username : "absencesystem@gmail.com",
	Password : "wydadalouma77",
	To : mail,
	From : "absencesystem@gmail.com",
	Subject : sub,
	Body :"Vous avez arrivé à " + msg + " Absence sans Justifiaction",
	});
}
                                    var etat;
                                    if($('#lib').val()=="3-7"){
                                        etat="Avertissment"
                                    }
                                    else if($('#lib').val()=="7-14")
                                    {
                                        etat="Rattrapage au matiere plus absenté"
                                    }
                                    else if($('#lib').val()=="14-100000")
                                    {
                                        etat="Session Rattrapage directement"
                                    }
                                    console.log('fili'+$('.filieress1').val())
                                    
        $.ajax({
                                          
        url: '.././controller/gestionFiliere.php',
        data: {op: 'lb',us:id,us1:lt,us2:lt1},
        type: 'POST',
        type: 'POST',
            success: function(data, textStatus, jqXHR) {
                console.log(JSON.stringify(data));
                var contenu = $("#gg");
                                            var ligne = "";
                                            var vl = $("#ip").val();
                                                  for (i = 0; i < data.length; i++) {
                                                ligne += '<tr><th id="md" scope="row" data-toggle="modal" data-target="#myModal">' + data[i].nom + '</th>';
                                                ligne += '<td>' + data[i].prenom + '</td>';
                                                ligne += '<td>' + data[i].nbre + '</td>';
                     
                    +'</tr>';
                                            }
                                             
                                            contenu.html(ligne);
                var contenaire = $("#lebody1");
                var ligne = '';
 ligne += '<form class="form" style="width: 1005px;margin-left:15%;">';

                ligne += '<h2 style="color: #0094ff;margin-left:300px">Fiche d\'Avertissement</h2> ';
                ligne += '<h3 class=text-left-right>Filiere: ' + lt11 + '</h3>';
                ligne += '<h4  > Date: ' + $("#date2").val() + '</h4>';

 
                ligne += ' <table class="table table-hover" style="font-size: 10px;widht:50000px"> ';
                ligne += '<tbody>  ';
                ligne += '<tr>';
                ligne += '<th class="tg-0lax">CIN</th>';
                ligne += '<th class="tg-0lax">NOM </th>';
                ligne += '<th class="tg-0lax">PRENOM</th>';
                ligne += '<th class="tg-0lax">Nombre d Absence</th>';
                ligne += '</tr>';

                for (var i = 0; i < data.length; i++) {
                    ligne += '<tr>';
                    ligne += '<td>' + data[i].idetudiant + '</td>';
                    ligne += '<td>' + data[i].nom + '</td>';
                    ligne += '<td>' + data[i].prenom + '</td>';
                    ligne += '<td>' + data[i].nbre + '</td>';
                    
                    ligne += '</tr>';
sendEmail(data[i].email,etat,data[i].nbre)
                }
                ligne += '</tbody>';
                ligne += '</table>';
                ligne += '</form> ';
                ligne += '<style>';
                ligne += '   .table {  font-family: Arial;width:5550%; margin-left:100000000px} ';
                ligne += '        td, th {   border: 1px solid #dddddd;   text-align: left;   padding: 8px;    }  ';
                ligne += '</style>';

console.log(ligne)
                contenaire.html(ligne);
                console.log("cont"+ contenaire.html(ligne))
                convert();

            },
            error: function(jqXHR, textStatus, errorThrown) {

                console.log(textStatus);
            }});
            // parse the HTML table element having an id=exportTable
       });
     function convert() {
        var doc = new jsPDF();
        var elementHTML = $("#lebody1").html();
        doc.fromHTML(elementHTML,25, 10, {
        'width': 150,
    });
        doc.save('Fiche d\'Avertissement');
    }
     function downoldFile(file) {
        $.fileDownload(file)
                .done(function() {
                    alert('File download a success!');
                })
                .fail(function() {
                    alert('File download failed!');
                });
    }
  $(document).on('click', '.edit', function() {
                 var telp =$(this).closest('tr').find('td').eq(3).text();
   
                 console.log(telp)
                 $("#form29").val(telp)
                 $("#form34").val("Administration")
               
 $(".Send").on('click', function() {
      var sub=$("#form32").val()
                 var msg=$("#form8").val()
                 var telp=$("#form29").val()
      function sendEmail(mail,msg,sub) {
          
                     console.log("gg"+ telp+msg+sub)
	Email.send({
	Host: "smtp.gmail.com",
	Username : "absencesystem@gmail.com",
	Password : "wydadalouma77",
	To : mail,
	From : "absencesystem@gmail.com",
	Subject : sub,
	Body :msg,
	});
}
     console.log(telp)
     sendEmail(telp,msg,sub)
       $('.Send').html('<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Envoi en cours...').addClass('disabled');

 setTimeout(function(){  $('#modalContactForm').modal('hide');
 $('#ignismyModal').modal('show');
 out()
}, 3000);


 })
 
return;

            });
$('#ignismyModal').on('hidden.bs.modal', function () {
  location.reload();
})
$('#imprimerabsence').on('hidden.bs.modal', function () {
  location.reload();
})


                                });

        </script>
    </body>

</html>