
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
          <li class="nav-item  ">
              <a class="nav-link" href="./stats.php">
              <i class="material-icons">dashboard</i>
              <p>Statistique</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./profile.php">
              <i class="material-icons">person</i>
              <p>Compte</p>
            </a>
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
                                <p>Gestion d'Absence</p>
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
              <a class="nav-link" href="./Professeur.php">
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
                                        <a class="dropdown-item" href="./profile.php">Profile</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="./login.php">Log out</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>