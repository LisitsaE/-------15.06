<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first site</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <header class="cool-sm-12 col-md-12 col-lg-12">

            </header>
        </div>
        <div class="row">
            <nav class="cool-sm-12 col-md-12 col-lg-12">
                <?php
                    include_once "pages/menu.php";
                    include_once "pages/functions.php";

                ?>

            </nav>
        </div>
        <div class="row">
            <section class="cool-sm-12 col-md-12 col-lg-12">
                <?php
                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                        if ($page == 1) include_once "page/home.php";
                        if ($page == 2) include_once "page/upload.php";
                        if ($page == 3) include_once "page/gallery.php";
                        if ($page == 4) include_once "page/registration.php";
                    }
                ?>
            </section>
        </div>
    </div>
    <script src="https://ajax.googleleapis.com/ajax/libs/jqery/1.12.4/jqery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
</body>
</html>