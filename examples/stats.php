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
                                    Gestion D'Absence

        </title>
        <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <!-- CSS Files -->
        <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="../assets/demo/demo.css" rel="stylesheet" />
        <link href="css/head.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="table.css">
        <link rel="stylesheet" type="text/css" href="css/head.css">
        <script src= 
                "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js">
        </script> 
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>

    <body class="">
        <div id="CounterVisitor">
          <span class="counter-item">0</span>
          <span class="counter-item">0</span>
          <span class="counter-item">1</span>
          <span class="counter-item">1</span>
          <span class="counter-item">8</span>
          <span class="counter-item">4</span>
</div>
        <style>
            #er{
                color:red;
            }
        </style>
        <div class="wrapper ">
            <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
                <!--
                  Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
          
                  Tip 2: you can also add an image using data-image tag
                -->
                <div class="logo">
    
              <i class="material-icons" style="color:green" id="ic">brightness_1</i>
              <span id="pr">Acces <?php echo($_SESSION['$rol']);?></span> 
              </br>
              <span id="pr1">Mr.<?php echo($_SESSION['$name']);?></span> 
        </div>
                <div class="sidebar-wrapper">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="./stats.php">
                                <i class="material-icons">dashboard</i>
                                <p>Statistique</p>
                            </a>
                        </li>
                        <li class="nav-item " id="j2">
                         
                        </li>
                        <li class="nav-item ">
                            
                            <a class="nav-link" href="./tables.php">
                                <i class="material-icons">content_paste</i>
                                <p>Absence par filiere</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="./absence.php">
                                <i class="material-icons">library_books</i>
                                <p>Historique d'Absence</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="./departemente.php">
                                <i class="material-icons">bubble_chart</i>
                                <p>Departement</p>
                            </a>
                        </li>
                        <li class="nav-item ">
              <a class="nav-link " href="./filiere.php">
              <i class="material-icons">apps</i>
              <p>Filiere</p>
            </a>
          </li>
          <li class="nav-item ">
              <a class="nav-link" href="./Etudiant.php">
              <i class="material-icons">assignment_ind
</i>
              <p>Etudiant</p>
            </a>
          </li>
          <li class="nav-item  ">
              <a class="nav-link" href="./groupe.php">
              <i class="material-icons">device_hub</i>
              <p>Groupe</p>
            </a>
          </li>
           <li class="nav-item  ">
              <a class="nav-link" href="./module.php">
              <i class="material-icons">pie_chart</i>
              <p>Module</p>
            </a>
          </li>
          <li class="nav-item  ">
              <a class="nav-link" href="./matiere.php">
              <i class="material-icons">pie_chart_outlined</i>
              <p>Matiere</p>
            </a>
          </li>
          <li class="nav-item  ">
              <a class="nav-link" href="./professeur.php">
              <i class="material-icons">people</i>
              <p>Professeur</p>
            </a>
          </li>
          <li class="nav-item  ">
              <a class="nav-link" href="./Gepr.php">
              <i class="material-icons">chrome_reader_mode
</i>
              <p>Seances</p>
            </a>
          </li>
          
          <li class="nav-item ">
              <a class="nav-link" href="./user.php">
              <i class="material-icons">language</i>
              <p>Utilisateur</p>
            </a>
          </li>
                    </ul>
                </div>
            </div>
            <div class="main-panel">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                    <div class="container-fluid">
                        <div class="navbar-wrapper">
                            <a class="navbar-brand" href="javascript:;">Dashboard</a>
                        </div>
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
                                        <a class="dropdown-item" href="./profile.php">Profile</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="./login.php">Log out</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="card card-stats">
                                    <div class="card-header card-header-warning card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons">content_copy</i>
                                        </div>
                                        <p class="card-category">Nombre Etudiant</p>
                                        <div id='et'>
                                        </div>
                                    </div>
 
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="card card-stats">
                                    <div class="card-header card-header-success card-header-icon">
                                        <div class="card-icon">
                                            <i class="fa fa-search-plus"></i>
                                        </div>
                                        <p class="card-category">Nombre D'absence justifié</p>
                                        <div id='j'>
                                        </div>
                                    </div>
 
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="card card-stats">
                                    <div class="card-header card-header-danger card-header-icon">
                                        <div class="card-icon">
                                           <i class="fa fa-search-minus"></i>
                                        </div>
                                        <p class="card-category">Nombre D'absence non justifié</p>
                                        <div id='nj'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="card card-stats">
                                    <div class="card-header card-header-info card-header-icon">
                                        <div class="card-icon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <p class="card-category">Nombre De Professeur</p>
                                        <div id='npr'>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card card-chart">
                                    <div class="card-header card-header-danger">
                                        <canvas id="myChart1" width="400" height="400"></canvas>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Nombre d'Etudiant par filiere</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-chart">
                                    <div class="card-header card-header-warning">
                                        <canvas id="myChart" width="400" height="400"></canvas>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Nombre d'Absence par filiere</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-chart">
                                    <div class="card-header card-header-success">
                                        <canvas id="myChart2" width="400" height="400"></canvas>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Nombre d'Absence par Mois</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-tabs card-header-primary">
           <h4 class="card-title">Les etudiants les plus absentés</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="Ms tab-content">
                                           <div class="card-body table-responsive">
                                        <table class="table table-hover">
                                            <thead class="text-sucess">
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Nombre d'Absence</th>
                                            </thead >
                                            <tbody id="tabP1">
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>
                                </div>
                            </div>
                                  </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-warning">
                                        <h4 class="card-title">Professeurs</h4>
                                
                                    </div>
                                    <div class="card-body table-responsive">
                                        <table class="table table-hover">
                                            <thead class="text-warning">
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Departement</th>
                                            </thead >
                                            <tbody id="tabP">
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
                                $(document).ready(function () {
                                     var n = localStorage.getItem('on_load_counter');
    if (n === null) {
        n = 0;
    }

    n++;

    localStorage.setItem("on_load_counter", n);

    document.getElementById('CounterVisitor').innerHTML = n;
    console.log("n°"+ n)
    if (n==1){
        $("#j2").html("<a class=nav-link href=./profile.php>"+
                                            "<i id=er class=material-icons>"+"error_outline"+"</i>"+
                                "<i class=material-icons>"+"person"+"</i>"+
                                "<p>"+"Compte"+"</p>"+
                            "</a>");
    }
    else{
        $("#j2").html("<a class=nav-link href=./profile.php>"+
                   
                                "<i class=material-icons>"+"person"+"</i>"+
                                "<p>"+"Compte"+"</p>"+
                            "</a>");
    }
    
                                    $().ready(function () {
                                        $.ajax({
                                            url: '.././controller/gestionFiliere.php',
                                            data: {op:'Pr'},
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
                                            var contenu = $("#tabP");
                                            var ligne = "";
                                            for (i = 0; i < data.length; i++) {
                                                ligne += '<tr><th scope="row">' + data[i].nom + '</th>';
                                                ligne += '<td>' + data[i].Prenom + '</td>';
                                                ligne += '<td>' + data[i].nomDepartement + '</td>';
                                                console.log(ligne);
                                            }
                                            contenu.html(ligne);
                                        }
                                   
                                        $.ajax({
                                            url: '.././controller/gestionFiliere.php',
                                            data: {op:'Ms'},
                                            type: 'POST',
                                            success: function (data, textStatus, jqXHR) {
                                                remplir1(data);
                                            },
                                            error: function (jqXHR, textStatus, errorThrown) {
                                                console.log(textStatus);
                                            }
                                        });
                                        function remplir1(data) {
                                            console.log("gg");
                                            var contenu = $("#tabP1");
                                            var ligne = "";
                                            for (i = 0; i < data.length; i++) {
                                                ligne += '<tr><th scope="row">' + data[i].nom + '</th>';
                                                ligne += '<td>' + data[i].prenom + '</td>';
                                                ligne += '<td>' + data[i].nb + '</td>';
                                                console.log(ligne);
                                            }
                                            contenu.html(ligne);
                                        }
                                        $.ajax({
                                            url: '.././controller/gestionFiliere.php',
                                            data: {op: 'nb'},
                                            type: 'POST',
                                            success: function (data, textStatus, jqXHR) {
                                                label = [];
                                                datas = [];
                                                for (i = 0; i < data.length; i++) {
                                                    label.push(data[i].abv);
                                                    datas.push(data[i].nb);
                                                }
                                                var ctx = document.getElementById('myChart').getContext('2d');
                                                var myChart = new Chart(ctx, {
                                                    type: 'bar',
                                                    data: {
                                                        labels: label,
                                                        datasets: [{
                                                                label: "nbre D'absenece",
                                                                data: datas,
                                                                backgroundColor: [
                                                                    'rgb(179, 179, 179)',
 
                                               
                                                                    
                                                                ],
                                                                borderColor: [
                                                                    'rgba(255, 99, 132, 1)',
                                                                    'rgba(54, 162, 235, 1)',
                                                                    'rgba(255, 206, 86, 1)',
                                                                    'rgba(75, 192, 192, 1)',
                                                                    'rgba(153, 102, 255, 1)',
                                                                    'rgba(255, 159, 64, 1)'
                                                                ],
                                                                borderWidth: 1
                                                            }]
                                                    },
                                                    options: {
                                                        scales: {
                                                            yAxes: [{
                                                                    ticks: {
                                                                        fontColor: "black",
                                                                        beginAtZero: true
                                                                    }
                                                                }],
                                                             xAxes: [{
                                                                    ticks: {
                                                                        fontColor: "black",
                                                                    }
                                                                }]
                                                        },
                                                         legend: {
            labels: {
                // This more specific font property overrides the global property
                fontColor: 'black'
            }
        }
    
                                                    }
                                                });
                                            }

                                        });
                                        $.ajax({
                                            url: '.././controller/gestionFiliere.php',
                                            data: {op: 'nbe'},
                                            type: 'POST',
                                            success: function (data, textStatus, jqXHR) {
                                                label = [];
                                                datas = [];
                                                for (i = 0; i < data.length; i++) {
                                                    label.push(data[i].abv);
                                                    datas.push(data[i].nb);
                                                }
                                                var ctx = document.getElementById('myChart1').getContext('2d');
                                                var myChart = new Chart(ctx, {
                                                    type: 'bar',
                                                    data: {
                                                        labels: label,
                                                        datasets: [{
                                                                label: "nbre D'etudiant",
                                                                data: datas,
                                                                backgroundColor: 
                                                                    'rgb(179, 179, 179)'
                                                                ,
                                                                borderColor: 
                                                                    'rgb(255, 51, 153)'
                                                                ,
                                                                borderWidth: 1
                                                            }]
                                                    },
                                                    options: {
                                                        scales: {
                                                            yAxes: [{
                                                                    ticks: {
                                                                        fontColor: "black",
                                                                        beginAtZero: true
                                                                    }
                                                                }],
                                                             xAxes: [{
                                                                    ticks: {
                                                                        fontColor: "black",
                                                                    }
                                                                }]
                                                        },
                                                         legend: {
            labels: {
                // This more specific font property overrides the global property
                fontColor: 'black'
            }
        }
    
                                                    }
                                                });
                                            }

                                        });
                                        $.ajax({
                                            url: '.././controller/gestionFiliere.php',
                                            data: {op: 'nbm'},
                                            type: 'POST',
                                            success: function (data, textStatus, jqXHR) {
                                                label = [];
                                                datas = [];
                                                for (i = 0; i < data.length; i++) {
                                                    datas.push(data[i].nb);
                                                }
                                                var ctx = document.getElementById('myChart2').getContext('2d');
                                                var myChart = new Chart(ctx, {
                                                    type: 'bar',
                                                    data: {
                                                        labels: ["Jan", "Fev", "Mar", "Avr", "Mai", "Jui", "Juil", "Aou", "Sep", "Oct", "Nov", "Dec"],
                                                        datasets: [{
                                                                label: "nbre D'Absence",
                                                                data: datas,
                                                                backgroundColor:'rgb(179, 179, 179)',
                                                                borderColor: [
                                                                    'rgba(255, 99, 132, 1)',
                                                                    'rgba(54, 162, 235, 1)',
                                                                    'rgba(255, 206, 86, 1)',
                                                                    'rgba(75, 192, 192, 1)',
                                                                    'rgba(153, 102, 255, 1)',
                                                                    'rgba(255, 159, 64, 1)'
                                                                ],
                                                                borderWidth: 1
                                                            }]
                                                    },
                                                    options: {
                                                        scales: {
                                                            yAxes: [{
                                                                    ticks: {
                                                                        fontColor: "black",
                                                                        beginAtZero: true
                                                                    }
                                                                }],
                                                             xAxes: [{
                                                                    ticks: {
                                                                        fontColor: "black",
                                                                    }
                                                                }]
                                                        },
                                                         legend: {
            labels: {
                // This more specific font property overrides the global property
                fontColor: 'black'
            }
        }
    
                                                    }
                                                });
                                            }

                                        });
                                        $.ajax({
                                            url: '.././controller/gestionFiliere.php',
                                            data: {op: 'nbt'},
                                            type: 'POST',
                                            success: function (data, textStatus, jqXHR) {
                                                $("#et").html("<h3  class=card-title >" + data[0].nb + "</h3>");
                                            }
                                        });
                                        $.ajax({
                                            url: '.././controller/gestionFiliere.php',
                                            data: {op: 'Npr'},
                                            type: 'POST',
                                            success: function (data, textStatus, jqXHR) {
                                                $("#npr").html("<h3  class=card-title >" + data[0].nb + "</h3>");
                                            }
                                        });
                                        $.ajax({
                                            url: '.././controller/gestionFiliere.php',
                                            data: {op: 'nbj'},
                                            type: 'POST',
                                            success: function (data, textStatus, jqXHR) {
                                                $("#j").html("<h3  class=card-title >" + data[0].nb + "</h3>");
                                            }
                                        });
                                        $.ajax({
                                            url: '.././controller/gestionFiliere.php',
                                            data: {op: 'nbnj'},
                                            type: 'POST',
                                            success: function (data, textStatus, jqXHR) {
                                                $("#nj").html("<h3  class=card-title >" + data[0].nb + "</h3>");
                                            }
                                        });
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
                                })
        </script>
        <script>
            $(document).ready(function () {
                // Javascript method's body can be found in assets/js/demos.js
                md.initDashboardPageCharts();

            });
        </script>
    </body>

</html>