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

}(document));
