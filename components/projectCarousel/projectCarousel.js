!(function(d){
    // All code will go in here. We've renamed 'document' to 'd'.
    var itemClassName = "carousel__photo";
    var activei;
    var moving;
    var hover
    items = d.getElementsByClassName(itemClassName),
    totalItems = items.length,
    slide = 0,
    moving = true;
    initCarousel();
    // Set classes
    function setInitialClasses() {
        // Targets the previous, current, and next items
        // This assumes there are at least three items.
        //console.log(totalItems);
        items[totalItems - 1].classList.add("prev");
        items[0].classList.add("active");
        items[1].classList.add("next");
    }
    // Set event listeners
    function setEventListeners() {
        var next = d.getElementsByClassName('carousel__button--next')[0],
            prev = d.getElementsByClassName('carousel__button--prev')[0];
        next.addEventListener('click', moveNext);
        prev.addEventListener('click', movePrev);
        imageItems = d.getElementsByClassName('small__img__img');
        for( let i = 0; i < imageItems.length; i++ ){
            console.log("event listener"+i);
            imageItems[i].addEventListener('click', function(){
                moveTo(i);
            });
        }
        activei = d.getElementsByClassName('carousel__photo');
        console.log(activei);
        for ( ci of activei ){
            console.log(ci)
            $(ci).on("mouseenter", pauseCarousel);
            $(ci).on("hover", pauseCarousel);
            $(ci).on("mouseleave", continueCarousel);
        }
        
    }
    function pauseCarousel() {
        console.log("mouse hovering active item");
        moving = true;
        hover = true;
        console.log(moving)
    }
    function continueCarousel(){
        console.log("CONTINUA...")
        hover = false;
        disableInteraction();
    }
    // Next navigation handler
    function moveNext() {
        // Check if moving
        if (!moving && !hover) {
            // If it's the last slide, reset to 0, else +1
            if (slide === (totalItems - 1)) {
            slide = 0;
            } else {
            slide++;
            }
            // Move carousel to updated slide
            moveCarouselTo(slide);
        }
    }
    // Previous navigation handler
    function movePrev() {
        // Check if moving
        if (!moving && !hover) {
            // If it's the first slide, set as the last slide, else -1
            if (slide === 0) {
            slide = (totalItems - 1);
            } else {
            slide--;
            }
                
            // Move carousel to updated slide
            
            moveCarouselTo(slide);
        }
    }

    function disableInteraction() {
        // Set 'moving' to true for the same duration as our transition.
        // (0.5s = 500ms)
        
        moving = true;
        // setTimeout runs its function once after the given time
        setTimeout(function(){
        moving = false
        }, 500);
    }
    function moveTo(foo){
        moveCarouselTo(foo);
    }
    function moveCarouselTo(slide) {
        // Check if carousel is moving, if not, allow interaction
        if(!moving && !hover) {
        
        // temporarily disable interactivity
        disableInteraction();
        // Update the "old" adjacent slides with "new" ones
        var newPrevious = slide - 1,
            newNext = slide + 1,
            oldPrevious = slide - 2,
            oldNext = slide + 2;
        // Test if carousel has more than three items
        if ((totalItems - 1) >= 3) {
            // Checks and updates if the new slides are out of bounds
            if (newPrevious <= 0) {
            oldPrevious = (totalItems - 1);
            } else if (newNext >= (totalItems - 1)){
            oldNext = 0;
            }
            // Checks and updates if slide is at the beginning/end
            if (slide === 0) {
            newPrevious = (totalItems - 1);
            oldPrevious = (totalItems - 2);
            oldNext = (slide + 1);
            } else if (slide === (totalItems -1)) {
            newPrevious = (slide - 1);
            newNext = 0;
            oldNext = 1;
            }
            // console.log(
            //     "oldPrev:"+ oldPrevious 
            // );
            // console.log(
            //     "oldNext:"+ oldNext 
            //     );
            // console.log(
            //     "NewPrevius:"+ newPrevious
            // );
            // console.log(
            //     "NuNext:"+ newNext 
            // );
            // Now we've worked out where we are and where we're going, 
            // by adding/removing classes we'll trigger the transitions.
            // Reset old next/prev elements to default classes
            items[oldPrevious].className = itemClassName;
            items[oldNext].className = itemClassName;
            // Add new classes
            items[newPrevious].className = itemClassName + " prev";
            items[slide].className = itemClassName + " active";
            items[newNext].className = itemClassName + " next";
        }
        }
    }
    function setTimeSlider(){
        setInterval(moveNext, 5000);
    }
    function initCarousel() {
        setInitialClasses();
        setEventListeners();
        setTimeSlider();
        // Set moving to false so that the carousel becomes interactive
        moving = false;
    }

  }(document));