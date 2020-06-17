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
<?php
session_start();
?>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="../assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
            Absence
        </title>
        <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <!-- CSS Files -->
        <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="../assets/demo/demo.css" rel="stylesheet" />
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script>
<script src="http//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="css/head.css" rel="stylesheet" />
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
        
    </style>

    <body class="">
        <div class="wrapper ">
            <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
                <!--
                  Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
          
                  Tip 2: you can also add an image using data-image tag
                -->
                <div class="logo">
    
              <i class="material-icons" style="color:green" id="ic">brightness_1</i>
              <span id="pr">Acces <?php echo($_SESSION['$ro']);?></span> 
              </br>
              <span id="pr1">MR.<?php echo($_SESSION['$nam']);?></span> 
        </div>
                <div class="sidebar-wrapper">
                   <ul class="nav">
         <li class="nav-item  ">
                            <a class="nav-link" href="./EmploiPr.php">
                                <i class="material-icons">content_paste</i>
                                <p>Emploi du Temps</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="./Profile1.php">
                                <i class="material-icons">person</i>
                                <p>Compte</p>
                            </a>
                        </li>
                   
                       <li class="nav-item active">
                            <a class="nav-link" href="./tablesPr.php">
                                <i class="material-icons">bubble_chart</i>
                                <p>Liste Des Etudiants</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="main-panel">
                <!-- Navbar -->
                                <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                    <div class="container-fluid">

                        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end">
                            <form class="navbar-form">
                                <div class="input-group no-border">
                                    <input type="text" value="" class="form-control" placeholder="Search...">
                                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                        <i class="material-icons">search</i>
                                        <div class="ripple-container"></div>
                                    </button>
                                </div>
                            </form>
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">person</i>
                                        <p class="d-lg-none d-md-block">
                                            Account
                                        </p>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                        <a class="dropdown-item" href="./Profile1.php">Profile</a>
                                        <a class="dropdown-item" href="./login.php">Se déconnecter</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
                <div class="content">
                    <div class="container">
                        
                    
                        <select id="nv" class="inp1"></select>
                        <select type="text" class="inp1" id="et" required >
   <option value="">Choisir l'Etat</option>
    <option value="justifie">Justifié</option>
    <option value="non justifie">Non Justifié</option></select>
<input type="button" value="Chercher" id="bnt" class="btn1">
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
                                        <h4 class="card-title ">Absence</h4>
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
                                $(document).ready(function () {
                                    var prof="<?php echo($_SESSION['$nam']);?>";
                                    employe = $("#nv");
                                    $.ajax({
                                        url: '.././controller/gestionFiliere.php',
                                        data: {op: 'Fpr',nom:prof},
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
                                                console.log(data)
                                               
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
                                            }
                                            else if(data[i].nbreAbs>=7 )
                                            {
                                                 ligne += '<tr><th id="md" scope="row" data-toggle="modal" data-target="#myModal">' + data[i].nom + '</th>';
                                                ligne += '<td>' + data[i].prenom + '</td>';
                                                ligne += '<td>' + data[i].nbreAbs + '</td>';
                                                ligne += '<td>' + "<i style=color:red class=material-icons>error_outline</i>"+"Sanctionné" + '</td>';
                                            }else{
                                            ligne += '<tr><th id="md" scope="row" data-toggle="modal" data-target="#myModal">' + data[i].nom + '</th>';
                                                ligne += '<td>' + data[i].prenom + '</td>';
                                                ligne += '<td>' + data[i].nbreAbs + '</td>';
                                                ligne += '<td>' + "-" + '</td>';
                                             
                                        }
                                    }
                                    else{
                                        ligne += '<tr><th id="md" scope="row" data-toggle="modal" data-target="#myModal">' + data[i].nom + '</th>';
                                                ligne += '<td>' + data[i].prenom + '</td>';
                                                ligne += '<td>' + data[i].nbreAbs + '</td>';
                                                ligne += '<td>' + "-" + '</td>';
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
                                            var mg="img.jpg"
                                            for (i = 0; i < data.length; i++) {
                                                
                                                $("#im").html("<img src='" + data.img + "' width=150 height=200 class=img-rounded img-responsive />");
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
                                                ligne += '<tr><th scope="row">' + data[i].nom + '</th>';
                                                ligne += '<td>' + data[i].prenom + '</td>';
                                                ligne += '<td>' + data[i].nbreAbs + '</td>';
                                                ligne += '<td>' +"<i style=color:yellow class=material-icons>error_outline</i>"+ "Avertissement" + '</td>';
                                            }
                                            else if(data[i].nbreAbs>=7 )
                                            {
                                                 ligne += '<tr><th scope="row">' + data[i].nom + '</th>';
                                                ligne += '<td>' + data[i].prenom + '</td>';
                                                ligne += '<td>' + data[i].nbreAbs + '</td>';
                                                ligne += '<td>' + "<i style=color:red class=material-icons>error_outline</i>"+"Sanctionné" + '</td>';
                                            }else{
                                            ligne += '<tr><th scope="row">' + data[i].nom + '</th>';
                                                ligne += '<td>' + data[i].prenom + '</td>';
                                                ligne += '<td>' + data[i].nbreAbs + '</td>';
                                                ligne += '<td>' + "-" + '</td>';
                                             
                                        }
                                    }
                                    else{
                                        ligne += '<tr><th scope="row">' + data[i].nom + '</th>';
                                                ligne += '<td>' + data[i].prenom + '</td>';
                                                ligne += '<td>' + data[i].nbreAbs + '</td>';
                                                ligne += '<td>' + "-" + '</td>';
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
                                });

        </script>
    </body>

</html>