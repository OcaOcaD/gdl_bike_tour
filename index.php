<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("src/headers.html"); ?>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="components/navbar/navbar.css">
    <link rel="stylesheet" href="components/video/video.css">
    <link rel="stylesheet" href="components/bienvenido/bienvenido.css">
    <link rel="stylesheet" href="components/selectLanguage/selectLanguage.css">
    <link rel="stylesheet" href="components/tours/tours.css">

    <link rel="stylesheet" href="components/footer/footer.css">
    <title>Bike</title>
</head>
<body>
    <?php
        include("components/navbar/navbar.php");
        include("components/video/video.html");
        include("components/bienvenido/bienvenido.html");
        include("components/selectLanguage/selectLanguage.php");
        include("components/tours/tours.php");

        include("components/footer/footer.html");
    ?>
</body>
</html>