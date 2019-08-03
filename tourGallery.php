<?php 
    $pestaña = "gallery";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("src/headers.html"); ?>
    <link rel="stylesheet" href="tourGallery.css">
    <link rel="stylesheet" href="components/backdrop/backdrop.css">
    <link rel="stylesheet" href="components/sideDrawer/sideDrawer.css">
    <link rel="stylesheet" href="components/navbar/navbar.css">
    <link rel="stylesheet" href="components/navbar/navbar-sm.css">
    <link rel="stylesheet" href="components/selectLanguage/selectLanguage.css">
    <link rel="stylesheet" href="components/selectLanguage/selectLanguage-sm.css">    <link rel="stylesheet" href="components/gallery/gallery.css">
    <link rel="stylesheet" href="components/carousel/carousel.css">
    <link rel="stylesheet" href="components/carousel/carousel-sm.css">

    <link rel="stylesheet" href="components/footer/footer.css">
    <title>GDL BIKE TOUR</title>
</head>
<body>
    <div class="tourGallery_bg">

    </div>
    <?php
    include("components/backdrop/backdrop.html");
    include("components/sideDrawer/sideDrawer.php");
    
    include("components/navbar/navbar.php");

    include("components/gallery/gallery.php");

    include("components/footer/footer.html");   
    ?>
    <!--Adding some javascript for components here-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="tourGallery.js"></script>
</body>
</html>