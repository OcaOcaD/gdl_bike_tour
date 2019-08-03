<div class="tourD__actualImage">
    <div class="carousel-wrapper">
    <div class="carousel">
        <?php 
        for ( $i = 0; $i < sizeof($tInfo->get_image()); $i++ ){
            $initial = ( $i == 0 ) ? " initial" : null;
            echo "<img id='' class='carousel__photo".$initial."' src='img/tours/".$tInfo->get_imageAt($i).".jpg'>";
        }
        ?>    
        <div class="carousel__button--next"></div>
        <div class="carousel__button--prev"></div>
    </div>
    </div>
</div>
<div class="tourD__projectImages">
    <?php for( $i = 0; $i < sizeof($tInfo->get_image()); $i++ ){
        $width = 100/ sizeof($tInfo->get_image());
        ?>
        <div class="small__img" style="width: <?php echo $width?>%">
            <img class="small__img__img" src="img/tours/<?php echo $tInfo->get_imageAt($i)?>.jpg" name="<?php echo $i ?>" alt="Image not available">
        </div>
    <?php } ?>
    <!-- All the images of the project in small size-->
</div>
<script src="utilities/jquery.js" ></script>
<script src="components/projectCarousel/projectCarousel.js" ></script>
<script>

</script>