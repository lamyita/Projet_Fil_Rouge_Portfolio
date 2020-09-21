<?php
require_once "auth.inc.php";

$user = $_SESSION['auth'];
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<!--  -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

  <!-- Custom styles for this template-->
  <link href="css/dashboard/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" href="css/about.css">
  <link rel="stylesheet" href="css/style.css">


</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark static-top">

    <a class="navbar-brand mr-1" href="dashboard.php">Welcome <?=$user?></a>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="badge badge-danger">7</span>
          <i class="fas fa-envelope fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Projects</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="dashboard/pages/add/addproject.php">
              <i class="fas fa-plus"></i>
              <span>Add Project</span>
          </a>
          <a class="dropdown-item" href="register.html">
              <i class="fas fa-project-diagram" style="font-size:12px;"></i>
              <span>All Projects</span>
          </a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>
    </ul>

    <main>
        <section class="hero overrided-hero mb-4">
            <div class="container-fluid hero-container">
                <div class="row">
                    <div class="col-6 content-cont">
                        <div class="content">
                            <h1 class="ml-4 modified-title about_title">Welcome to My Portfolio</h1>
                        </div>
                    </div>
                    <div class="col-4 blue-background">
                        <!-- <img class="center-flower-image about" src="assets/images/Asset 1@2x.png" alt="center-flower" style="width:59%; top:16%"> -->
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
        </section>
        <section class="my-5 py-5">
            <div class="container">
                <div class="row text-center">
                  <p>Hello and welcome to my  Portfolio My name is Lamyaa Najahi, and I am 24 years old.
                  After studying for two years at The Specialized Institute Of Applied Technology and one year at ACT School, I decided to join YouCode   where I am learning to become a female developer. I have a strong motivation and passion for this field. I am a dynamic and autonomous girl, people who know me closely call me the Iron Lady.</p>
              
                    
                </div>
            </div>
        </section>
   </main>

    <!-- Footer -->
    <div id="content-wrapper">
      <div class="container-fluid">
      <!-- Sticky Footer -->
        <footer class="sticky-footer">
            <div class="container my-auto">
            <div class="copyright text-center my-auto">
            <p>Copyrights &copy; 2020 - Lamyaa Najahi</p>
            </div>
            </div>
        </footer>
       </div>
    </div>


 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  



 



</body>

</html>
