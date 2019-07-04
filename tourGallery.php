<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("src/headers.html"); ?>
    <link rel="stylesheet" href="tourGallery.css">
    <link rel="stylesheet" href="components/navbar/navbar.css">
    <link rel="stylesheet" href="components/gallery/gallery.css">

    <link rel="stylesheet" href="components/footer/footer.css">
    <title>GDL BIKE TOUR</title>
</head>
<body>
    <?php
    include("components/navbar/navbar.php");

    include("components/gallery/gallery.php");

    include("components/footer/footer.html");   
    ?>
    <!--Adding some javascript for components here-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="index.js"></script>
</body>
</html>