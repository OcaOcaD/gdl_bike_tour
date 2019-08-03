<?php 
    if( $pestaña == "index" ){
        //LINKS
        $welcome__link      = "goToByScroll('#video')";
        $tours__link        = "goToByScroll('#tours')";
        $us__link           = "goToByScroll('#us')";
        $reservations__link = "window.location = 'http://www.gdlbiketours.mx/tipoReservacion.html'";
        $contact__link      = "goToByScroll('#contact')";
        //CLASSES
        $nav__bg__class = "sBasic shadow";
    }else{
        //LINKS
        $welcome__link      = "handleNavLink(event, 'index.php#video')";
        $tours__link        = "handleNavLink(event, 'index.php#tours')";
        $us__link           = "handleNavLink(event, 'index.php#us')";
        $reservations__link = "handleNavLink(event, 'http://www.gdlbiketours.mx/tipoReservacion.html')";
        $contact__link      = "handleNavLink(event, 'index.php#contact')";       
        //CLASSES
        $nav__bg__class = "sBasic shadowFull";
    }
?>

<nav id="sideDrawer" class="side-drawer">
    <ul>
        <li onclick="<?php echo $welcome__link      ?>" class="">BIENVENIDO</li>
        <li onclick="<?php echo $tours__link        ?>" class="">TOURS</li>
        <li onclick="<?php echo $us__link           ?>" class="">NOSOTROS</li>
        <li onclick="<?php echo $reservations__link ?>" class="">RESERVACIONES</li>
        <li onclick="<?php echo $contact__link      ?>" class="">CONTACTO</li>
        
    </ul>
</nav>