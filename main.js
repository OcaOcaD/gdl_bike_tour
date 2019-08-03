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
function goToByScroll(id) {
    // Remove "link" from the ID
    // Scroll
    console.log(id);
    var element = $(id);
    console.log($("#video"));
    console.log(element);
    var offset = element.offset();
    var topDistnce = offset.top;
    /*console.log('offset top: '+offset.top);*/
    topDistnce = topDistnce-100;
    /*console.log('offset top: '+offset.top);*/
    $('html, body').animate({scrollTop: topDistnce}, 800);    
}
!(function(d){
    renderBackdropAndSideDrawer = (state) => {
        if (state == true){
            //Display the side drawer
            $("#sideDrawer").addClass("open")
            $("#backdrop").show()
        }else{
            //Hide the backdrop and sidedrawer
            $("#sideDrawer").removeClass("open")
            $("#backdrop").hide()
        }
    }
    let sideDrawerOpen = false
    console.log( "sidedrawer is: "+sideDrawerOpen );
    renderBackdropAndSideDrawer( sideDrawerOpen );
    backdropClickHandler = () => {
        console.log("bd handler triggered");
        sideDrawerOpen = false;
        renderBackdropAndSideDrawer( sideDrawerOpen );
    };
    drawerToggleClickHandler = () => {
        console.log("drawerToggleClickHandler triggered");
        console.log("sd: "+ sideDrawerOpen + "gonna change to: "+!sideDrawerOpen);
        sideDrawerOpen = !sideDrawerOpen
        renderBackdropAndSideDrawer( sideDrawerOpen );
    };
    handleSideLink = ( destino ) => {
        goToByScroll( destino );
        sideDrawerOpen = !sideDrawerOpen
        renderBackdropAndSideDrawer( sideDrawerOpen );
    }

    function changeNavBG(type){
        if ( $(window).width() > 768 ){
            nb = d.getElementsByClassName("shadow");
            switch( type ){
                case 0:{
                    $(nb).css({
                        transition : 'background\-image 3s ease-out',
                        "background-image" : "linear-gradient(to top, transparent, #1D1D1B,#1D1D1B,#1D1D1B)",
                        "opacity" : "0.7",
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
