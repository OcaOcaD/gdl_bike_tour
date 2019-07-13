!(function(d){
function changeNavBG(type){
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
$(document).scroll(function() { 
    if( $(window).scrollTop() > 100  ) {   
      changeNavBG(1);
    }else{
        changeNavBG(0);
    }
});
}(document));
