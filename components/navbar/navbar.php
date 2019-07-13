<?php 
if( $pestaña == "index" ){
    //
    $welcome__link      = "goToByScroll('#video')";
    $tours__link        = "goToByScroll('#tours')";
    $us__link           = "goToByScroll('#us')";
    $reservations__link = "window.location = 'http://www.gdlbiketours.mx/tipoReservacion.html'";
    $contact__link      = "goToByScroll('#contact')";
}
if( $pestaña == "gallery" ){
    //
    $welcome__link      = "window.location = 'index.php#video'";
    $tours__link        = "window.location = 'index.php#tours'";
    $us__link           = "window.location = 'index.php#us'";
    $reservations__link = "window.location = 'http://www.gdlbiketours.mx/tipoReservacion.html'";
    $contact__link      = "window.location = 'index.php#contact'";        
}
?>
<div class="navbar__container">
    <div id="shadow" class="shadow"></div>
    <nav class="navbar">
        <div class="navbar__logo">
            <img src="img/basic/logotipo.png" alt="" class="navbar__container">
        </div>
        <ul class="navbar__options">
            <li onclick="window.location = 'index.php'" class="navbar__item">BIENVENIDO</li>
            <li onclick="window.location = 'index.php#tours'" class="navbar__item">TOURS</li>
            <li onclick="window.location = 'projects.php'" class="navbar__item">NOSOTROS</li>
            <li onclick="window.location = 'projects.php'" class="navbar__item">RESERVACIONES</li>
            <li onclick="window.location = 'projects.php'" class="navbar__item">CONTACTO</li>
        </ul>
        <?php
        include("components/selectLanguage/selectLanguage.php");
        ?>
    </nav>

</div>
    