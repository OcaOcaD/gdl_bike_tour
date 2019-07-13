<?php
    //$consulta...;






    
    $tour_info = array(
        "title" =>"Recorrido al centro 1",
        "description" => "Un recorrido en bicicleta es una forma especial de descubrir y conocer la ciudad. Te invitamos a descubrir la gran ciudad de Guadalajara con nosotros. Sienta el alma de la ciudad, conduzca por las calles concurridas y aprenda sobre su increíble historia, así como sobre la cultura y el estilo de vida de los mexicanos. 14 km por Guadalajara y sus lugares más interesantes. Además, una visita obligada a una Cantina típica mexicana, así como un taco no se puede perder.",
        "image" => "foodtour.jpg",
        "price" => 400,
        "schedule" => "10:30 y 15:30 de Noviembre a Febrero y 10:30 y 17:00 y de Marzo a Octubre.",
        "includes" =>  array( 
            "Renta de bicicleta",
            "Casco y chaleco",
            "Guía",
            "Botella de agua",
            "Cerveza",
            "Taco"  
        )
    );
    $tour_info2 = array(
        "title" =>"Recorrido al centro 2",
        "description" => "Comenzamos nuestro recorrido con las bicicletas y paramos para comer un desayuno típico mexicano. Luego continuamos nuestro recorrido por los diferentes distritos de la ciudad. Así podemos conocer más sobre la historia y descubrir edificios típicos \"tapatíos\". Las próximas paradas nos lleva a comer Carne en su jugo y el plato típico de Guadalajara, la torta ahogada. Durante todo el recorrido le daremos información sobre los distritos y la comida.",
        "image" => "citytour.jpg",
        "price" => 800,
        "schedule" => "Martes a sábado, a las 11:00am.",
        "includes" =>  array( 
            "Renta de bicicleta",
            "Casco y chaleco",
            "Guía",
            "Botella de agua",
            "Cuatro plato",
            "Un postre",
            "Tres bebidas"
        )
    ); 
    $tour_info3 = array(
        "title" =>"Kite Buggy en la Laguna",
        "description" => "¡Deja que el viento te guíe! Juntos salimos de la ciudad hacia la Laguna Seca de Sayula, a un lugar increíble. Junto a la carretera se encuentra la laguna, rodeada de montañas pequeñas, y estamos en medio de un campo de polvo y arena. Tan pronto como sepas cómo manejar el kite, corres a través de la laguna. Al final, disfrutamos una puesta de sol impresionante, lejos de la gran ciudad ocupada.",
        "image" => "extremetour.jpg",
        "price" => 80,
        "schedule" => "Cada día en la tarde\nEmpieza en nuestra oficina a las 15:00pm.\nTemporada de Kite empieza febrero.",
        "includes" =>  array( 
            "Transporte",
            "Equipo (Kite, Buggy)",
            "Bebidas",
            "Snacks",
            "Guía",
        )
    ); 
    $tour_info4 = array(
        "title" => "Visita de una cervecería artesanal y lucha libre",
        "description" => "Lorem ipsum dolor sit amet desptaone",
        "image" => "extremetour.jpg",
        "price" => 80,
        "schedule" => "Lunes a jueves" 
    ); 
    $tour_info5 = array(
        "title" =>"Ciclismo de montaña en el bosque de la primavera",
        "description" => "Juntos conducimos con el coche hacia el Bosque de la Primavera. El bosque de la primavera también lo llaman el pulmón de Guadalajara. En más de 20.000 hectáreas se pueden encontrar varias rutas de senderismo y ciclismo. Dependiendo su experiencia en ciclismo de montaña, elegimos una de las diferentes rutas. La ruta nos lleva a través del bosque cuesta arriba y cuesta abajo sobre árboles y rocas. Ocasionalmente nos detenemos para disfrutar de la vista o para tomar un breve descanso. Al final disfrutamos una cerveza.",
        "image" => "extremetour.jpg",
        "price" => -1,
        "schedule" => "Cada fin de semana a las 09:00 am\nA petición durante la semana.",
        "includes" =>  array( 
            "Transporte",
            "Renta de bici de montaña",
            "Casco",
            "Guía",
            "Bebidas",
            "Snacks"
        )
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
        $k = 0;
        while( isset($tour[$k]) && $tour[$k] != null ){ ?>
            <div class="gallery__tour__container">
                <?php
                for ( $j = 0; $j <= 3 && ( isset($tour[$k]) && $tour[$k] != null ) ; $j++ ){
                ?>
                    <div id="<?php echo $k?>" class="tours__tour" >
                        <div class="tours__tour__img">
                            <div class="tours__buttons">
                                <button class="tours_tour__img__button" >AGENDA UN TOUR</button>
                                <button onclick="" class="tours_tour__img__button" name="<php echo 'the id'?>" >VER MÁS</button>
                            </div> 
                            <img src="img/tours/<?php echo strtolower($tour[$k]["image"])?>" alt="Tour image">
                            <div class="tours__tour__img__shadow"></div>
                        </div>
                        <div class="tours__tour__desc">
                            <h2><?php echo strtoupper($tour[$k]["title"])?></h2>
                            <h3><?php echo strtoupper($tour[$k]["schedule"])?></h3>
                        </div>
                    </div>
                    <?php $k++;
                } ?>
            </div>
        <?php } ?>
    </div>
</div>