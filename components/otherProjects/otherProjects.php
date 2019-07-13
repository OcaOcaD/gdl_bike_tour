<?php 
        include("utilities/db.php");
        $tour_query = "SELECT * FROM gbtweb_tour WHERE 1";
        $tour = mysqli_query($connection, $tour_query);
        if ( $tour ){
            $tour_rows = mysqli_num_rows($tour);
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
?>
<div class="projectRelated">
    <?php 
    $w = 100 / sizeof($tl);
    for ($i=0; $i < sizeof($tl); $i++) { 
        ?>
        <div class="related" style="width: <?php echo $w ?>%;">
            <div class="related__img">
                <img class="related__img__img" src="img/tours/<?php echo $tl[$i]->get_cover()?>.jpg" alt="Tour cover">
            </div>
            <button class="related__buttton">VER DETALLES</button>
            <div class="related__shadow"></div>
        </div>
        <?php 
    }
    ?>
</div>