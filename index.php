
<?php 


// require "../portfolio/admin/database.php";
include "../portfolio/langhome.php";

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
    <title>Protfolio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/hero.css">
</head>

<body>
   <?php include("includes/header.php") ?>
    <main>
        <section class="hero">
            <img class="flower-background" src="assets/images/Asset 3@2x.png" alt="background-flower">
            <div class="container-fluid hero-container">
                <div class="row">
                    <div class="col-6 content-cont">
                        <div class="content">
                            <h1><?= $lang[$default_lang]['homeh1'][0] ?>
                        </h1>
                            <p><?= $lang[$default_lang]['paragra'][0] ?></p>
                        </div>
                    </div>
                    <div class="col-4 blue-background">
                        <img class="center-flower-image" src="assets/images/Asset 2.svg" alt="center-flower">
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
        </section>
        <section class="competences my-5">
            <img src="assets/images/qss@2x.png" alt="right-background-image">
            <div class="container">
                <div class="row my-3">
                    <h3 class="title col-12 text-center"><?= $lang[$default_lang]['tech'][0] ?></h3>
                    <div class="col-6"></div>
                    <div class="col-6 right-comp-content">
                        <p>- HTML5<br>
- SCSS/CSS3<br>
- JAVASCRIPT<br>
- BOOTSTRAP
                        </p>
                    </div>
                </div>
                <div class="row my-3">
                    <h3 class="title col-12 text-center"><?= $lang[$default_lang]['tech'][1] ?></h3>
                    <div class="col-6 left-comp-content"> 
                        <p>my skills in the backend side Conception:<br>
                        Unified Modeling Language (UML) and in 

                    PROGRAMING LANGUAGES/<br>
                    TECHNOLOGIES:<br>
                    PHP 5,7 -<br>
                    SQL -<br>
                    mongoDB -
                    
                    <!-- NodeJs -  -->
                        </p>
                    </div>
                    <div class="col-6"></div>
                </div>
                <div class="row my-3">
                    <h3 class="title col-12 text-center"><?= $lang[$default_lang]['tech'][2] ?></h3>
                    <div class="col-6"></div>
                    <div class="col-6 right-comp-content">
                        <p> <p>-Photoshop<br>
- Illustrator<br>
- JAVASCRIPT<br>
- BOOTSTRAP
                        </p>
                    </div>
                </div>
                <div class="row my-3">
                    <h3 class="title col-12 text-center"><?= $lang[$default_lang]['tech'][3] ?></h3>
                    <div class="col-6 left-comp-content">
                        <p> For My skills in the other technologies  I master You find the sass<br>

                         GIT(GITHUB) -<br>
                        GULP -<br>
                        WordPress - <br>

                        </p>
                    </div>
                    <div class="col-6"></div>
                </div>
            </div>
            <div class="btn-group dropleft shadow-none" data-sal="slide-left" data-sal-delay="150" data-sal-easing="ease-out-bounce" data-sal-duration="800">
            <button class="btn btn-secondary dropdown-toggle shadow-none" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Lang
            </button>
            <div class="dropdown-menu shadow-none" aria-labelledby="dropdownMenuButton">
                <form action="" method="GET">
                    <a class="dropdown-item" href="index.php?lang=eng">ENGLISH</a>
                    <a class="dropdown-item text-uppercase" href="index.php?lang=ar">عربية</a>
                </form>
            </div>
        </div>
        </section>
        <section class="what-i-can-do">
            <div class="container what-i-can-do-cont py-5">
                <h3 class="text-uppercase text-center py-3 w-title"><?= $lang[$default_lang]['tech'][4] ?></h3>
                <p class="parag"><?= $lang[$default_lang]['doing'][0] ?>
                                </p>
                <div class="row">
                    <button class="mx-auto contact-btn" type="button"><a href="contact.php"><?= $lang[$default_lang]['contact'][0] ?></a></button>
                </div>
            </div>
        </section>
    </main>

    <?php include("includes/footer.php") ?>

    <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>

</html>