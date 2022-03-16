<?php
    $rootUrl = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';

    $files = glob('output-cvs/'."*");
    $now   = time();

    foreach ($files as $file) {
        if (is_file($file)) {
            if ($now - filemtime($file) >= 60 * 60 * 24 * 10) {
                unlink($file);
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Maker</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="style.css">

    <style>
        img {
            margin-top: 50px;
        }
        p {
            margin: 40px 0 100px 0;
            font-size: 30px;
        }
        .btn-dl {
            border: rgb(12, 172, 222) 1px solid;
            background: rgb(12, 172, 222);
            padding: 12px 25px;
            font-size: 20px;
            font-weight: 300;
        }
    </style>

</head>

<body>

    <div class="container">
        <div class="card">
            <div class="card-header bg-primary">
                <h1 class="cv-title">Gratis CV-Maker</h1>
            </div>
            <div class="card-body text-center">
                <?php 
                    $file = $_GET['file'];

                    if (file_exists('output-cvs/'.$file.'.pdf')) {
                        echo '<img src="img/ok-check.png" class="img-fluid" alt="check">';
                        echo '<p>Bedankt voor het gebruik maken van TipTop CV-Maker.</p>';
                        echo '<a href="output-cvs/'.$file.'.pdf" download><button class="btn btn-primary btn-dl"><i class="fas fa-arrow-to-bottom"></i> &nbsp; Download jouw CV</button></a>';
                    }
                    else {
                        echo '<img src="img/expired.png" class="img-fluid" alt="expired">';
                        echo '<p>Sorry, het bestand is verlopen.</p>';
                    }
                ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>