<?php 


// require "../portfolio/admin/database.php";
include "../portfolio/langabout.php";

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
    <title>Portfolio | About</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/portfolio.css">
    <link rel="stylesheet" href="css/about.css">
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
                            <h1 class="ml-4 modified-title about_title"><?= $lang[$default_lang]['h1'][0] ?></h1>
                        </div>
                    </div>
                    <div class="col-4 blue-background">
                        <img class="center-flower-image about" src="assets/images/sqdq@2x.png" alt="center-flower" style="width:59%; top:16%">
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
        </section>
        <section class="my-5 py-5">
            <div class="container">
                <div class="row text-center">
                    <h1 class="text-center w-100 mt-3 mb-5"><?= $lang[$default_lang]['h1'][1] ?></h1>
                    <!-- <?= $lang[$default_lang]['h1'] ?> -->
                   <h1> </h1>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque id expedita inventore, veritatis officiis repudiandae ea doloribus velit vel perferendis ducimus natus, culpa, asperiores rem excepturi numquam beatae. Veritatis, iusto?
                    Modi, incidunt unde laudantium voluptatum voluptate corporis dignissimos ipsam, deleniti aspernatur expedita consectetur ducimus quidem reiciendis repellat, eveniet odit qui? Ex sequi non animi placeat eveniet adipisci repudiandae dolorum rerum.
                    Delectus laboriosam aspernatur, saepe tempore omnis maiores numquam doloribus sed soluta obcaecati laborum, et, corrupti voluptatem architecto! Aliquid, esse sunt obcaecati assumenda eum accusamus, velit tempore dignissimos nihil iusto distinctio.</p>
                 -->
                 <!-- <p>Hello and welcome to my  Portfolio My name is Lamyaa Najahi, and I am 24 years old.
                  After studying for two years at The Specialized Institute Of Applied Technology and one year at ACT School, I decided to join YouCode ( school, academy, institute )  where I am learning to become a female developer. I have a strong motivation and passion for this field. I am a dynamic and autonomous girl, people who know me closely call me the Iron Lady.</p>
               -->
               <?=$lang[$default_lang]['para']?>
                </div>
            </div>
            <div class="btn-group dropleft shadow-none" data-sal="slide-left" data-sal-delay="150" data-sal-easing="ease-out-bounce" data-sal-duration="800">
            <button class="btn btn-secondary dropdown-toggle shadow-none" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Lang
            </button>
            <div class="dropdown-menu shadow-none" aria-labelledby="dropdownMenuButton">
                <form action="" method="GET">
                    <a class="dropdown-item" href="about.php?lang=eng">ENGLISH</a>
                    <a class="dropdown-item text-uppercase" href="about.php?lang=ar">عربية</a>
                </form>
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