<?php
    //$consulta...;
    include("utilities/db.php");
    include("utilities/tour.php");
    $tour_query = "SELECT * FROM gbtweb_tour WHERE 1";
    $tour = mysqli_query($connection, $tour_query);
    if ( $tour ){
        $tour_rows = mysqli_num_rows($tour);
        if ( $tour_rows > 0 ){
            $tl = new SplDoublyLinkedList;
            for ($i=0; $i < $tour_rows; $i++) { 
                $t = mysqli_fetch_array($tour, MYSQLI_ASSOC);
                $tInfo =  new Tour;
                $tInfo->set_id_tour( $t['id_tour'] );
                $tInfo->set_name( $t['name'] );
                $tInfo->set_description( $t['description'] );
                $tInfo->set_cover( $t['cover'] );
                $tInfo->set_price( $t['price'] );
                $tInfo->set_schedule( $t['schedule'] );
                $tl->push( $tInfo );
            }

        }
    }else{
    }
    mysqli_close($connection);
?>
<div class="gallery">
    <div class="gallery__title">
        <h1>ÚNETE A ALGUNO DE NUESTROS TOURS</h1>
    </div>
    <div class="gallery__gallery">
        <?php 
            include("components/carousel/carousel.php");
        ?>
    </div>
</div>