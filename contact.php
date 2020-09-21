<?php 
// require "../portfolio/admin/database.php";
include "../portfolio/langcontact.php";
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
    <title>Portfolio | Contact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/portfolio.css">
    <link rel="stylesheet" href="css/contact.css">
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
                            <h1 class="ml-4 modified-title"<?=$default_lang?>"><?= $lang[$default_lang]['titlecont'][0] ?></h1>
                        </div>
                    </div>
                    <div class="col-4 blue-background">
                        <img class="center-flower-image contact" src="assets/images/sqdq@2x.png" alt="center-flower" style="width:59%; top:16%">
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
        </section>
        	<?php 
		if(isset($_POST['sendmail'])) {
			if(mail($_POST['email'], $_POST['subject'], $_POST['message'])){
				echo "Mail send";
			} else{
				echo"Failed";
			}
		}
	 ?>
        <section class="my-5 py-5">
        <form role="form" method="post" enctype="multipart/form-data">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-3">
                        <label class="d-block" for="email"<?=$default_lang?>"><?= $lang[$default_lang]['contact'][0] ?></label>
                        <input type="email" class="w-100" id="email" name="email" placeholder=<?= $lang[$default_lang]['contact'][0] ?>
                    </div>
                    <div class="col-12 mb-3">
                        <label class="d-block" for="objet"<?=$default_lang?>"><?= $lang[$default_lang]['contact'][1] ?></label>
                        <input type="text" class="w-100" name="subject" id="objet" placeholder=<?= $lang[$default_lang]['contact'][1] ?>
                    </div>
                    <div class="col-12 mb-3">
                        <label class="d-block" for="content"<?=$default_lang?>"><?= $lang[$default_lang]['contact'][2] ?></label>
                        <textarea  type="textarea" class="w-100" id="content" name="message" placeholder="<?= $lang[$default_lang]['contact'][2] ?>"></textarea>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2 ml-auto">
                        <button type="submit" name="sendmail"<?=$default_lang?>"><?= $lang[$default_lang]['contact'][3] ?></button>
                    </div>
                </div>
            </div>
            </form>
        </section>
        </div>
            <div class="btn-group dropleft shadow-none" data-sal="slide-left" data-sal-delay="150" data-sal-easing="ease-out-bounce" data-sal-duration="800">
            <button class="btn btn-secondary dropdown-toggle shadow-none" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Lang
            </button>
            <div class="dropdown-menu shadow-none" aria-labelledby="dropdownMenuButton">
                <form action="" method="GET">
                    <a class="dropdown-item" href="contact.php?lang=eng">ENGLISH</a>
                    <a class="dropdown-item text-uppercase" href="contact.php?lang=ar">عربية</a>
                </form>
            </div>
        </div>
   </main>
<?php include("includes/footer.php") ?>

<script src="js/script.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


</body>
</html>