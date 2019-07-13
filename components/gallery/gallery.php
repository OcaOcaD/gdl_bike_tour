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
?>
<div class="gallery">
    <div class="gallery__title">
        <h1>Únete a alguno de nuestros tours</h1>
    </div>
    <div class="gallery__gallery">
        <?php
        $k = 0;
        while( isset($tl[$k]) && $tl[$k] != null ){
            ?>
            <div class="gallery__tour__container">
                <?php
                for ( $j = 0; $j < 5 && ( isset($tl[$k]) && $tl[$k] != null ) ; $j++ ){
                ?>
                    <div id="<?php echo $k;?>" class="tours__tour" >
                        <div class="tours__tour__img">
                            <div class="tours__buttons">
                                <button class="tours_tour__img__button" >AGENDA UN TOUR</button>
                                <button onclick="" class="tours_tour__img__button" name="<php echo 'the id'?>" >VER MÁS</button>
                            </div> 
                            <img src="img/tours/<?php echo $tl[$k]->get_cover()?>.jpg" alt="Tour image">
                            <div class="tours__tour__img__shadow"></div>
                        </div>
                        <div class="tours__tour__desc">
                            <h2><?php echo strtoupper($tl[$k]->get_name())?></h2>
                            <h3><?php echo strtoupper($tl[$k]->get_schedule())?></h3>
                        </div>
                    </div>
                    <?php $k++;
                } ?>
            </div>
        <?php } ?>
    </div>
</div>