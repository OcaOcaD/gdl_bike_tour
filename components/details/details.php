<?php 
if ( isset($_POST['tour']) ){
    $t = $_POST['tour'];
}else{
    //Mientras
    $t = 97;
    include("utilities/db.php");
    include("utilities/tour.php");
    //Download teh project information
    $tour_query = "SELECT 
                    id_tour, 
                    name, 
                    description, 
                    cover, 
                    price, 
                    schedule
                    FROM
                        gbtweb_tour
                    WHERE
                        id_tour = {$t}  ";
    $tour = mysqli_query($connection, $tour_query);
    if ( $tour ){
        $tour_rows = mysqli_num_rows($tour);
        if ( $tour_rows > 0 ){
            for ($i=0; $i < $tour_rows; $i++) { 
                $t = mysqli_fetch_array($tour, MYSQLI_ASSOC );
                $tInfo =  new Tour;
                $tInfo->set_id_tour( $t['id_tour'] );
                $tInfo->set_name( $t['name'] );
                $tInfo->set_description( $t['description'] );
                $tInfo->set_cover( $t['cover'] );
                $tInfo->set_price( $t['price'] );
                $tInfo->set_schedule( $t['schedule'] );
                //Ahora a consultar las imagenes y extras del tour
                $image_query = " SELECT * FROM gbtweb_image WHERE tour_id = {$tInfo->get_id_tour()} ";
                $image = mysqli_query($connection, $image_query);
                if ( $image ){
                    $image_rows = mysqli_num_rows($image);
                    if ( $image_rows > 0 ){
                        for ($i = 0; $i < $image_rows; $i++) { 
                            $img = mysqli_fetch_array($image, MYSQLI_ASSOC );
                            $imgname = $img['name'];
                            $tInfo->add_image( $imgname );
                        }
                    }else{
                        echo "NO IMAGES FOR THE ".$tInfo->get_name()." TOUR<br>";
                    }
                }
                //Ahora a consultar las imagenes y extras del tour
                $tourinclude_query = " SELECT * FROM gbtweb_tourinclude WHERE tour_id = {$tInfo->get_id_tour()} ";
                $tourinclude = mysqli_query($connection, $tourinclude_query);
                if ( $tourinclude ){
                    $tourinclude_rows = mysqli_num_rows($tourinclude);
                    if ( $tourinclude_rows > 0 ){
                        for ($i = 0; $i < $tourinclude_rows; $i++) { 
                            $item = mysqli_fetch_array($tourinclude, MYSQLI_ASSOC );
                            $imgname = $item['item'];
                            $tInfo->add_tourinclude( $imgname );
                        }
                    }else{
                        echo "NO tourincludeS FOR THE ".$tInfo->get_name()." TOUR<br>";
                    }
                }else{
                    echo "NO TOURINCLUDE QUERY<br>";
                }
            }
        }else{
            echo "EMPTY QUERY<br>";
        }

    }else{
        echo "PROBLEM WITH THE QUERY<br>";
        echo $tour_query."<br>";
    }
}
?>

<div class="details">
    <!--<div class="details_bg"></div>-->
    <div class="details_container">
        <button class="back__button" onclick="window.location = 'tourGallery.php'">
            <small ><i class="far fa-hand-point-left"></i> Regresar</small>
        </button>
        <div class="tourD__project">
            <div class="tourD__media">
                <?php include("components/projectCarousel/projectCarousel.php"); ?>
            </div>
            <div class="tourD__info">
                <h1 cl class="tourD__title"><?php echo $tInfo->get_name() ?></h1>
                <div class="tourD__separator__container">
                    <hr class="tourD__separator">
    
                </div>
                <p class="tourD__description" ><?php echo $tInfo->get_description() ?></p>
            </div>
        </div>
        <div class="tourD__others">
            <!--CArousel con sugerencias-->
            <h1 class="tourD__others__title">MÁS <?php echo strtoupper("LA CATEGORIA") ?></h1>
            <?php
                include("components/otherProjects/otherProjects.php");
            ?>
        </div>

    </div>
</div>