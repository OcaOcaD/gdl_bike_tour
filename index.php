<?php 
    $pestaña = "index";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("src/headers.html"); ?>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="components/backdrop/backdrop.css">
    <link rel="stylesheet" href="components/sideDrawer/sideDrawer.css">
    <link rel="stylesheet" href="components/navbar/navbar.css">
    <link rel="stylesheet" href="components/navbar/navbar-sm.css">
    <link rel="stylesheet" href="components/video/video.css">
    <link rel="stylesheet" href="components/bienvenido/bienvenido.css">
    <link rel="stylesheet" href="components/selectLanguage/selectLanguage.css">
    <link rel="stylesheet" href="components/selectLanguage/selectLanguage-sm.css">
    <link rel="stylesheet" href="components/tours/tours.css">
    <link rel="stylesheet" href="components/us/us.css">
    <link rel="stylesheet" href="components/proceso/proceso.css">
    <link rel="stylesheet" href="components/contact/contact.css">

    <link rel="stylesheet" href="components/footer/footer.css">
    <title>GDL BIKE TOUR</title>
</head>
<body>
    <?php
    include("components/backdrop/backdrop.html");
    include("components/sideDrawer/sideDrawer.php");
    include("components/navbar/navbar.php");
    include("components/video/video.html");
    include("components/bienvenido/bienvenido.html");
    
    include("components/tours/tours.php");
    include("components/us/us.html");
    include("components/proceso/proceso.html");
    include("components/contact/contact.php");

    include("components/footer/footer.html");

    
    ?>
    <!--Adding some javascript for components here-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="main.js"></script>
</body>
</html>