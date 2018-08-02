$(document).ready(function(){
   'use strict';
   
   
   $(window).scroll(function () {
        //if you hard code, then use console
        //.log to determine when you want the
        //nav bar to stick.
        'use strict';
        var windowHeight = $(window).height();

        if ($(window).scrollTop() > 0) {
            $('header').addClass('active');
        }
        if ($(window).scrollTop() === 0) {
            $('header').removeClass('active');
        }
   });
    
    // NAV Expand
    
    var navStatus = 0;
    
    $('#btn-nav-expand').click(function(){
        if(navStatus == 0){
            $('#btn-nav-expand').addClass('active');
            $('#nav-main').animate({
                left : '0'
            },500);
            
            navStatus = 1;
        }
        
        else{
            $('#btn-nav-expand').removeClass('active');
            $('#nav-main').animate({
                left : '-80%'
            },500);
            
            navStatus = 0;
        }
    });

   $("header a, .cover a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
   });
});




