<?php 
    $pestaña = "tourDetails";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("src/headers.html"); ?>
    <link rel="stylesheet" href="tourGallery.css">
    <link rel="stylesheet" href="tourDetails.css">
    <link rel="stylesheet" href="components/navbar/navbar.css">
    <link rel="stylesheet" href="components/selectLanguage/selectLanguage.css">
    <link rel="stylesheet" href="components/details/details.css">
    <link rel="stylesheet" href="components/projectCarousel/projectCarousel.css">
    <link rel="stylesheet" href="components/otherProjects/otherProjects.css">

    <link rel="stylesheet" href="components/footer/footer.css">
    <title>GDL BIKE TOUR</title>
</head>
<body>
    <?php
    include("components/navbar/navbar.php");
    echo "<div class='showTourFull'>";
        echo "<div class='showTourFull__shadow'></div>";
        include("components/details/details.php");
    echo "</div>";
    include("components/footer/footer.html");?>
    <!--Adding some javascript for components here-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="tourGallery.js"></script>
</body>
</html>