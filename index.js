function redirect(reservation) {
    switch (reservation) {
    case "history_tour":{
        location.replace("http://www.gdlbiketours.mx/calendario/es/index_hi.php");
        break;
    }
    case "food_tour":{
        location.replace("http://www.gdlbiketours.mx/calendario/es/index_food.php");
        break;
    }
    case "extreme_tour":{
        location.replace("http://www.gdlbiketours.mx/calendario/es/index_food.php");
        break;
    }
    case "gallery":{
        location.replace("tourGallery.php");
        break;
    }
    default:
        location.replace("http://www.gdlbiketours.mx/tipoReservacion.html");
        break;
    }
}
!(function(d){
    
    function changeNavBG(type){
        nb = d.getElementsByClassName("shadow");
        switch( type ){
            case 0:{
                $(nb).css({
                    transition : 'background\-image 3s ease-out',
                    "background-image" : "linear-gradient(to top, transparent, #1D1D1B,#1D1D1B,#1D1D1B)",
                    "opacity" : "0.5",
                    "height" : "115px"
                });
                break;
            }
            case 1:{
                $(nb).css({
                    transition : 'background\-image 3s ease-out',
                    "background-image" : "linear-gradient(to top, #1D1D1B ,#1D1D1B)",
                    "opacity" : "1",
                    "height" : "100px"
                });
                break;
            }
        }
    }
    $(document).scroll(function() { 
        if( $(window).scrollTop() > 100  ) {   
          changeNavBG(1);
        }else{
            changeNavBG(0);
        }
    });
    $(window).scroll(function() {
        if($(window).scrollTop() + $(window).height() == $(document).height()) {
            changeNavBG(0);
        }
     });
}(document));
