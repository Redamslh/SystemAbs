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
    Seance
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
        <link rel="stylesheet" type="text/css" href="css/head.css">
        <script src="script\professeur.js" type="text/javascript">

        </script>
</head>

<body class="">
  <div class="wrapper ">
<?php include 'sidebar.php';?>
            <div class="main-panel">
                <!-- Navbar -->
          
      <!-- End Navbar -->
      <div class="content">
            <div class="table-wrapper">
                <div class="table-title1">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Gestion <b>Seance</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajout Seance</span></a>

                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="selectAll">
                                    <label for="selectAll"></label>
                                </span>
                            </th>
                            <th>Prof</th>

                            <th>Matiere</th>
<th>Filiere</th>
<th>type</th>
                            <th>Heure de debut</th>
                            <th>Heure de fin</th>
                            <th>Jour</th>
                                                        <th>Action</th>

                            
                    </thead>
                    <tbody id="tableauxx">


<?php
$servername = "sql7.freemysqlhosting.net";
$username = "sql7348907";
$password = "2fBgRCQekb";
$dbname = "sql7348907";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select emploiprof.id,type,professeur.nom,matiere.libelle,H_debut,H_fin,jour,filiere.abreveation from emploiprof,professeur,matiere,filiere where emploiprof.idProf=professeur.id and emploiprof.idMat=matiere.idMatiere and emploiprof.idFil=filiere.idFillere ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td><span class=custom-checkbox><input type=checkbox id=checkbox1 name=options[] value=1>
                    <label for=checkbox1></label></span></td><td>". $row["nom"]."</td><td>"
            . $row["libelle"]. "</td><td>". $row["abreveation"]."</td><td>". $row["type"]."</td><td>". $row["H_debut"]."</td><td>". $row["H_fin"]."</td><td>". $row["jour"].
                "</td><td hidden>" . $row["id"]. "</td><td><a href=#editEmployeeModal class=edit data-toggle=modal><i class=material-icons data-toggle=tooltip title=Edit>  &#xE254;  </i></a>
                    <a href=#deleteEmployeeModal class=delete  id=dlt data-toggle=modal><i class=material-icons data-toggle=tooltip title=Delete>  &#xE872;  </i></a> 
                    </td></tr>"
            ;
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
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
        <!-- Edit Modal HTML -->
        <div id="addEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">						
                            <h4 class="modal-title">ajouter une seance </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">	
                            <div class="form-group">
                                <label>Prof</label><br>
                                <select id="pro" class="form-control" >

                                </select>


                            </div>
                         
                            <div >
  <table>
    <tbody>
      <tr>
        <td>choisi le type de la seance </td>
     </tr>
     <tr>
        <td><input type="radio" name="addServer" id="cours" value="cours"> Cours</td>

        <td><input type="radio" name="addServer" id="tp" value="tp"></td>
        <td>Tp</td>
      </tr>
    </tbody>
  </table>
</div>
                            <div class="form-group" id='cgr'>
  


                            </div>
                            <div class="form-group">
                                <label>Heure debut</label>
                                <input type="time" class="form-control" id="hd" required>
                            </div>
                            <div class="form-group">
                                <label>Heure fin</label>
                                <input type="time" class="form-control" id="hf" required>
                            </div>*
                            <div class="form-group">
                                <label>Jour</label>
                                <select type="text" class="form-control" id="jr" required>
                                       <option value="">Choisir le Jour</option>
    <option value="Lundi">Lundi</option>
    <option value="Mardi">Mardi</option>
                       <option value="Mercredi">Mercredi</option>
    <option value="Jeudi">Jeudi</option>
                       <option value="Vendredi">Vendredi</option>
    <option value="Samedi">Samedi</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <button type="submit" class="btn btn-success ajouterr" value="Add">Ajouter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Edit Modal HTML -->
        <div id="editEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                       <div class="modal-content">
                    <form>
                        <div class="modal-header">						
                            <h4 class="modal-title">modifier une seance </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">	
                            <div class="form-group">
                                <label>Prof</label><br>
                                <select id="pro1" class="form-control" >

                                </select>


                            </div>
                         
                            <div >
  <table>
    <tbody>
      <tr>
        <td>choisi le type de la seance </td>
     </tr>
     <tr>
        <td><input type="radio" name="addServer" id="cours" value="cours"> Cours</td>

        <td><input type="radio" name="addServer" id="tp" value="tp"></td>
        <td>Tp</td>
      </tr>
    </tbody>
  </table>
</div>
                            <div class="form-group" id='cgr'>
  


                            </div>
                            <div class="form-group">
                                <label>Heure debut</label>
                                <input type="time" class="form-control" id="hd" required>
                            </div>
                            <div class="form-group">
                                <label>Heure fin</label>
                                <input type="time" class="form-control" id="hf" required>
                            </div>*
                            <div class="form-group">
                                <label>Jour</label>
                                <select type="text" class="form-control" id="jr" required>
                                       <option value="">Choisir le Jour</option>
    <option value="Lundi">Lundi</option>
    <option value="Mardi">Mardi</option>
                       <option value="Mercredi">Mercredi</option>
    <option value="Jeudi">Jeudi</option>
                       <option value="Vendredi">Vendredi</option>
    <option value="Samedi">Samedi</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <button type="submit" class="btn btn-success ajouterr" value="Add">Ajouter</button>
                        </div>
                    </form>
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
    $(document).ready(function() {
       var type;
       var gr;
       var groupe;
         $('#cours').click(function() {
             $("#cgr").html("<label>"+"Filiere"+"</label>"+"<br>"+
      "<select id=fl class=form-control></select>"+"<div class=form-group>"+
                                "<label>"+"Matiere"+"</label><br>"+
                                "<select id=ma class=form-control></select></div>");
                                      employe=$("#fl");
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
                                     gr="NULL";
                                     $('#fl').change(function() {
                                         mat = $("#ma");
                                         var id=$("#fl").val();
                                    $.ajax({
                                        url: '.././controller/gestionFiliere.php',
                                        data: {op: 'mat',us:id},
                                        type: 'POST',
                                        success: function (data, textStatus, jqXHR) {
                                            console.log(data[0].idFillere);
                                            console.log(data[0].abreveation);
                                            var option = '<option selected>Choisi une matiere</option>';
                                            for (var i = 0; i < data.length; i++) {
                                                option += '<option value="' + data[i].idMatiere+ '">' + data[i].libelle+ '</option>';
                                                console.log(option);
                                            }
                                            mat.html(option);
                                        },
                                        error: function (jqXHR, textStatus, errorThrown) {
                                            console.log(textStatus);

                                        }
                                    });
                                     })
                                                                          type=$("#cours").val()

                                     
         });
         $('#tp').click(function() {
             $("#cgr").html("<label>"+"Filiere"+"</label>"+"<br>"+
      "<select id=fl class=form-control></select>"+"<label>"+"Groupe"+"</label>"+"<br>"+
      "<select id=gr class=form-control></select>"
      +"<div class=form-group>"+
                                "<label>"+"Matiere"+"</label><br>"+
                                "<select id=ma class=form-control></select></div>");
   
             console.log('yoyo')

       
    console.log("yoo"+"fil")
                                    
                                     employe=$("#fl");
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
      
       $('#fl').on('change', function() {
                                                                                     grp = $("#gr");
          
            var fil=$("#fl").val();
            console.log(fil);
  $.ajax({
                                        url: '.././controller/gestionFiliere.php',
                                        data: {op: 'Gr',gr:fil},
                                        type: 'POST',
                                        success: function (data, textStatus, jqXHR) {
                                            var option = '<option selected>Choisi un groupe</option>';
                                            for (var i = 0; i < data.length; i++) {
                                                option += '<option value="' + data[i].id + '">' + data[i].num+ '</option>';
                                                console.log(option);
                                            }
                                            grp.html(option);
                                        },
                                        error: function (jqXHR, textStatus, errorThrown) {
                                            console.log(textStatus);

                                        }
                                    });
                                     type=$("#tp").val();
                                         mat = $("#ma");
                                         var id=$("#fl").val();
                                    $.ajax({
                                        url: '.././controller/gestionFiliere.php',
                                        data: {op: 'mat',us:fil},
                                        type: 'POST',
                                        success: function (data, textStatus, jqXHR) {
                                            console.log(data[0].idFillere);
                                            console.log(data[0].abreveation);
                                            var option = '<option selected>Choisi une matiere</option>';
                                            for (var i = 0; i < data.length; i++) {
                                                option += '<option value="' + data[i].idMatiere+ '">' + data[i].libelle+ '</option>';
                                                console.log(option);
                                            }
                                            mat.html(option);
                                        },
                                        error: function (jqXHR, textStatus, errorThrown) {
                                            console.log(textStatus);

                                        }
                                    });
                                 });
                                     
         });
         
         var groupe= 
   $('.ajouterr').click(function() {
      
     
                                     
       console.log("gg");
var name = $('#pro').val();
		var ma = $('#ma').val();
                if (type=="cours"){
                    var gr =5 ;
                }
                else{
                    var gr =$('#gr').val();
                }
                var hd = $('#hd').val();
                var hf = $('#hf').val();
                var jr = $('#jr').val();
                var fl = $('#fl').val();
                console.log(hd+hf+name+ma+gr+type+fl)
		if(name!="" && ma!=""){
			$.ajax({
				url: "Cepr.php",
				type: "POST",
				data: {
                                      et:"add",
                                
					name: name,
					ma: ma,		
                                        gr: gr,	
                                        hd: hd,	
                                        hf: hf,	
                                        jr: jr,	
                                        fl:fl,
                                        type:type,
                                        
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#butsave").removeAttr("disabled");
						$('#fupForm').find('input:text').val('');
						$("#success").show();
						$('#success').html('Data added successfully !'); 						
					}
					else if(dataResult.statusCode==201){
					   alert("Error occured !");
					}
					
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
                });
                 $(document).on('click', '.delete', function() {
                             var id = $(this).closest('tr').find('td').eq(8).text();

        var confirmer = window.confirm("etes-vous sur(e) de vouloir supprimer le champ");


        if (confirmer == true) {
                console.log(id)
		if(id!=""){
			$.ajax({
				url: "Cepr.php",
				type: "POST",
				data: {
                                        et:"dl",
					id: id,		
				},
				cache: false,
				success: function(dataResult){
					if(dataResult.statusCode==200){
						
					}
					else if(dataResult.statusCode==201){
					   alert("Error occured !");
					}
					
				}
			});
        }
                location.reload(true);

    };
                 });
                 profe = $("#pro");
                 prof = $("#pro1");
                                    $.ajax({
                                        url: '.././controller/gestionFiliere.php',
                                        data: {op: 'prof'},
                                        type: 'POST',
                                        success: function (data, textStatus, jqXHR) {
                                            console.log(data[0].idFillere);
                                            console.log(data[0].abreveation);
                                            var option = '<option selected>Choisi un prof</option>';
                                            for (var i = 0; i < data.length; i++) {
                                                option += '<option value="' + data[i].id + '">' + data[i].nom+data[i].prenom + '</option>';
                                                console.log(option);
                                            }
                                            profe.html(option);
                                             prof.html(option);
                                        },
                                        error: function (jqXHR, textStatus, errorThrown) {
                                            console.log(textStatus);

                                        }
                                    });
                                     
                                     
                
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
  </script>
</body>

</html>