
<?php
require "../admin/database.php";


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
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/portfolio.css">
    <link rel="stylesheet" href="../css/hero.css">
    
</head>
<body>
<?php include("../includes/header.php") ?>

   <main>

   
        <section class="hero overrided-hero mb-4">
            <div class="container-fluid hero-container">
                <div class="row">
                    <div class="col-6 content-cont">
                        <div class="content">
                            <h1 class="ml-4 modified-title">PORTFOLIO</h1>
                        </div>
                    </div>
                    <div class="col-4 blue-background">
                        <img class="center-flower-image" src="../assets/images/Asset 3@2x.png" alt="center-flower" style="width:59%; top:16%">
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
        </section>
      
        <section class="my-5 py-5">
            <div class="container">
                <div class="row">
                <?php
                $db =Database::connect();
                $sql = "SELECT * FROM projects WHERE categorie='mobileapp'";
                $stmt = $db->query($sql);
                $stmt->execute();
                $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                Database::disconnect();
                ?>
                    <div class="col-12 col-md-6 col-lg-4 project-card mx-auto">
                        <div class="project-image"></div>
                        <h3>title</h3>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 project-card mx-auto">
                        <div class="project-image"></div>
                        <h3>title</h3>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 project-card mx-auto">
                        <div class="project-image"></div>
                        <h3>title</h3>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 project-card mx-auto">
                        <div class="project-image"></div>
                        <h3>title</h3>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 project-card mx-auto">
                        <div class="project-image"></div>
                        <h3>title</h3>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 project-card mx-auto">
                        <div class="project-image"></div>
                        <h3>title</h3>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row mt-5">
                    <button class="view-more mx-auto" type="button" >View more</button>
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
                            <h5><?= ['modal'][0] ?></h5>
                            <h6 id="mtech"></h6>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" data-dismiss="modal"><? ['modal'][1] ?></button>
                            <a href="" id="mlink">
                                <button type="button" class="btn"><? ['modal'][2] ?><i class="fab fa-github-square" style="padding-left: .6rem;"></i></button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            </section>

   </main>
<?php include("../includes/footer.php") ?>

<script src="../js/script.js"></script>
<script src="js/main.js"></script>

<script src="pages/js/portfolio.js"></script>

</body>
</html>