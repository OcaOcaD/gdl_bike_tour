
<div id="carousel" class="carousel-wrapper">
    <div class="carousel">
        <?php
        for ( $i = 0; $i < sizeof($tl); $i++ ){
            $initial = ( $i == 0 ) ? " initial" : null;
            ?>
            <div class="carousel__item<?php echo $initial ?>">
                <div class="carousel__shadow"></div>
                <div class="carousel__info">
                    <button id="<?php echo $tl[$i]->get_id_tour() ?>" onclick="handleTourDetail(event, this)">VER DETALLES</button>    
                    <button id="<?php echo $tl[$i]->get_id_tour() ?>" onclick="handleTourOrder(event, this)">AGENDA UN TOUR</button>
                </div>
                <div class="carousel__photo__container">
                    <img class="carousel__photo" src="img/tours/<?php echo $tl[$i]->get_cover()?>" alt="Portada del tour no encontrada">
                </div>
                <div class="carousel__ptitle">
                    <h1 class="tour__name"><?php echo strtoupper( utf8_decode($tl[$i]->get_name() ) ) ?></h1>
                </div>
            </div>
            <?php
            // echo "<img class='carousel__photo".$initial."' src='diseño/img/".$tl[$i]->get_image()."'>";
        }
        ?>   
        <div class="carousel__button--next"></div>
        <div class="carousel__button--prev"></div>
    </div>
</div>
<script src="components/carousel/carousel.js"></script>
<script>
    handleTourDetail = (event, element) => {
        tour = element.id;        
        if ( event.ctrlKey || event.metaKey ){
            window.open( "tourDetails.php?tour="+tour )
        }else{
            window.location = "tourDetails.php?tour="+tour
        }
    }
</script>