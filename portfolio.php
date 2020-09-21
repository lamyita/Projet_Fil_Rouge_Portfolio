<?php 
// require("..")
require "../portfolio/admin/database.php";
include "../portfolio/langportfo.php";
$default_lang = 'eng';

if(isset($_GET['lang'])){
    $default_lang = $_GET['lang'];
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Projects</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/portfolio.css">
    <link rel="stylesheet" href="css/hero.css">
    
</head>
<body>
<?php include("includes/header.php") ?>

   <main>
        <section class="hero overrided-hero mb-4">
            <div class="container-fluid hero-container">
                <div class="row">
                    <div class="col-6 content-cont">
                        <div class="content">
                            <h1 class="ml-4 modified-title"<?=$default_lang?>"><?= $lang[$default_lang]['titleport'][0] ?></h1>
                        </div>
                    </div>
                    <div class="col-4 blue-background">
                        <img class="center-flower-image port" src="assets/images/Asset 3@2x.png" alt="center-flower" style="width:59%; top:16%">
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
        </section>

        <!-- <div class="categories">
            <ul class="navs-list d-flex flex-row flex-wrap justify-content-center text-uppercase align-items-center">
                <li class="navs-item cat mr-5 mt-5 active" data-target="all"><?=['cat'][0] ?></li>
                <li class="navs-item cat mr-5 mt-5" data-target="website"><?=['cat'][1] ?></li>
                <li class="navs-item cat mr-5 mt-5" data-target="mobileapp"><?=['cat'][2] ?></li>
                <li class="navs-item cat mr-5 mt-5" data-target="webapp"><?=['cat'][3] ?></li>
                <li class="navs-item cat mr-5 mt-5" data-target="game"><?=['cat'][4] ?></li>
                <li class="navs-item cat mr-5 mt-5" data-target="others"><?=['cat'][5] ?></li>
            </ul>
        </div>





        <section class="my-5 py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 project-card mx-auto">
                        <div class="project-image"></div>
                        <h3>title</h3>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 project-card mx-auto">
                        <div class="project-image">
                        <img src="assets/projects-imgs/port.png" alt="">
                        </div>
                        <h3>title</h3>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 project-card mx-auto">
                        <div class="project-image"></div>
                        <h3>title</h3>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 project-card mx-auto">
                        <div class="project-image">
                        <img src="assets/projects-imgs/horlogeproject.jpg" alt="">

                        </div>
                        <h3>title</h3>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 project-card mx-auto">
                        <div class="project-image"></div>
                        <h3>title</h3>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 project-card mx-auto">
                        <div class="project-image">
                            <img src="assets/projects-imgs/horlogeproject.jpg" alt="">
                        </div>
                        <h3>title</h3>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row mt-5">
                    <button class="view-more mx-auto" type="button" >View more</button>
                </div>
            </div>
        </section> -->
        <!-- <main class="portfolio-main"> -->
        

        <section class="projects-section mt-5 pt-5">
          
            <div id="website" class="non-active">
                <?php
                $db = Database::connect();
                $sql = "SELECT * FROM projects";
                $stmt = $db->query($sql);
                $stmt->execute();
                $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                Database::disconnect();
                ?>
                <div class="project-container d-flex flex-column flex-sm-column flex-md-row flex-lg-row flex-xl-row flex-wrap justify-content-center  align-items-center align-items-sm-center align-items-md-start align-items-lg-start align-items-xl-start">
                    <?php foreach ($rows as $row) : ?>
                        <div class="card mr-sm-0 mr-md-5 mr-lg-5 mr-xl-5 mb-5 position-relative" style="width: 20rem;" data-sal="slide-up" data-sal-delay="150" data-sal-easing="ease-out-bounce" data-sal-duration="800">
                            <img class="card-img-top"  src="assets/projects-imgs/<?= $row['image'] ?>" data-toggle="modal" data-target="#exampleModal" onclick="getrow('<?= $row['name'] ?>','<?= $row['image'] ?>','<?= $row['description'] ?>','<?= $row['github'] ?>')">
                            <p class="m-0 name text-center" data-toggle="modal" data-target="#exampleModal" onclick="getrow('<?= $row['name'] ?>','<?= $row['image'] ?>','<?= $row['description'] ?>','<?= $row['github'] ?>')"><?= $row['name'] ?></p>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
           


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="body">
                            <h3 class="text-center mb-5" id="mtitle"></h3>
                            <img class="mb-5" src="#" id="mimg">
                            <p class="mb-5" id="mdesc"></p>
                            <h6 id="mtech"></h6>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" data-dismiss="modal">fermer</button>
                            <a href="" id="mlink">
                                <button type="button" class="btn">github <i class="fa fa-github-square" style="padding-left: .6rem;"></i></button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
       <div class="btn-group dropleft shadow-none" data-sal="slide-left" data-sal-delay="150" data-sal-easing="ease-out-bounce" data-sal-duration="800">
            <button class="btn btn-secondary dropdown-toggle shadow-none" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Lang
            </button>
            <div class="dropdown-menu shadow-none" aria-labelledby="dropdownMenuButton">
                <form action="" method="GET">
                    <a class="dropdown-item" href="portfolio.php?lang=eng">ENGLISH</a>
                    <a class="dropdown-item text-uppercase" href="portfolio.php?lang=ar">عربية</a>
                </form>
            </div>
        </div>

        
   </main>
<?php include("includes/footer.php") ?>

<script src="js/script.js"></script>


<script src="lib/jQuery-3-4-1/jquery-3.4.1.min.js"></script>
<script src="lib/popper/popper.min.js"></script>
<script src="lib/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<script src="node_modules/sal.js/dist/sal.js"></script>
<script src="js/main.js"></script>
<script src="pages/js/portfolio.js"></script>




</body>
</html>