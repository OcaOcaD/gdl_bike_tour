<?php
    //$consulta...;
    $tour_info = array(
        "title" =>"Some title",
        "description" => "Lorem ipsum dolor sit amet desptaone",
        "image" => "foodtour.jpg",
        "price" => 80,
        "schedule" => "Lunes a jueves" 
    );
    $tour_info2 = array(
        "title" =>"Probando ando",
        "description" => "Lorem ipsum dolor sit amet desptaone",
        "image" => "extremetour.jpg",
        "price" => 80,
        "schedule" => "Lunes a jueves" 
    ); 
    $tour_info3 = array(
        "title" =>"Some title",
        "description" => "Lorem ipsum dolor sit amet desptaone",
        "image" => "citytour.jpg",
        "price" => 80,
        "schedule" => "Lunes a jueves" 
    ); 
    $tour_info4 = array(
        "title" =>"Some title",
        "description" => "Lorem ipsum dolor sit amet desptaone",
        "image" => "Project1",
        "price" => 80,
        "schedule" => "Lunes a jueves" 
    ); 
    $tour_info5 = array(
        "title" =>"Some title",
        "description" => "Lorem ipsum dolor sit amet desptaone",
        "image" => "extremetour.jpg",
        "price" => 80,
        "schedule" => "Lunes a jueves" 
    );
    $tour = array(
        $tour_info,
        $tour_info2,
        $tour_info3,
        $tour_info4,
        $tour_info5
    );
?>
<div class="gallery">
    <div class="gallery__title">
        <h1>Únete a alguno de nuestros tours</h1>
    </div>
    <div class="gallery__gallery">
        <?php
        $i = 0;
        $k = 0;
        while( $tour[$i] != null ){
            ?>
            <div class="gallery__tour__container">
                <?php 
                for ( $j = 0; $j <= 3; $j++ ){ ?>
                <div class="tours__tour" >
                    <div class="tours__tour__img">
                        <button class="tours_tour__img__button" >AGENDA UN TOUR</button>
                        <img src="img/tours/<?php echo strtolower($tour[$k]["image"])?>" alt="Tour image">
                        <div class="tours__tour__img__shadow"></div>
                    </div>
                    <div class="tours__tour__desc">
                        <h2><?php echo strtoupper($tour[$k]["title"])?></h2>
                        <h3><?php echo strtoupper($tour[$k]["description"])?></h3>
                    </div>
                </div>
                <?php 
                $k++;
                }?>              
            </div><!-- Placing max of 3 elements per row -->
            <?php 
            $i++;
        }?>
    </div>
</div>