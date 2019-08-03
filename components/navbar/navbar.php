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
<div class="navbar__container">
    <div id="shadow" class="<?php echo $nav__bg__class?>"></div>
    <nav class="navbar">
        <div class="drawertogglebutton__container">
            <button class="toggle-button" onclick="drawerToggleClickHandler()" style="cursor: pointer">
                <div class="toggle-button__line"></div>
                <div class="toggle-button__line"></div>
                <div class="toggle-button__line"></div>
            </button>
        </div>
        <div class="navbar__logo">
            <img src="img/basic/logotipo.png" alt="" class="">
        </div>
        <ul class="navbar__options">
            <li onclick="<?php echo $welcome__link      ?>" class="navbar__item">BIENVENIDO</li>
            <li onclick="<?php echo $tours__link        ?>" class="navbar__item">TOURS</li>
            <li onclick="<?php echo $us__link           ?>" class="navbar__item">NOSOTROS</li>
            <li onclick="<?php echo $reservations__link ?>" class="navbar__item">RESERVACIONES</li>
            <li onclick="<?php echo $contact__link      ?>" class="navbar__item">CONTACTO</li>
        </ul>
        <?php
        include("components/selectLanguage/selectLanguage.php");
        ?>
    </nav>

</div>
<script>
handleNavLink = (event, link) => {
    console.log(link);
    ( event.metaKey || event.ctrlKey ) ? window.open(link, "__blank") : window.location = link;
}
</script>