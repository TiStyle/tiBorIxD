$(document).ready(function(){
    
    var tl = new TimelineMax({repeat:0});
    
    var animations = function(){
        // ANIMATIONS
        
        $('#main-menu li.current-menu-item').css('opacity:0;');
        
        tl.staggerFrom(".page-portfolio #rect1, .page-portfolio #rect2, .page-portfolio #rect3, .page-portfolio #rect4, .page-portfolio #rect5, .page-portfolio #rect6", 5, {
            cycle:{
                scale: function(){
                    return Math.random() * (1.2 - 0.8) + 0.8;
                }
            }, 
            opacity: 0,
            ease: Sine.easeOut
        }, 0.5);
        tl.staggerFrom(".page-portfolio .logo img", 1, {
            position: 'relative',
            bottom: '-2px',
            opacity: 0,
            scale: 0.98,
            ease: Sine.easeOut
        }, 0.1);
        tl.staggerFrom(".page-portfolio .wrapper .entry-content, .page-portfolio .portfolio:before", 1, {
            opacity: 0,
            ease: Sine.easeOut
        }, 0.2);
        tl.staggerFrom(".page-portfolio section.item", .5, {
            opacity: 0,
            ease: Sine.easeOut
        }, 0.2);
        tl.staggerFrom(".page-portfolio #main-menu li, .page-portfolio #social-menu li", 1, {
            position: 'relative',
            top: '-5px',
            opacity: 0,
            ease: Sine.easeOut
        }, 0.2);
    };
    
    tl.staggerFrom(".tiSlide img", 1, {
        opacity: 0,
        scale: 0.98,
        ease: Sine.easeOut
    }, 0.3);
    
    tl.staggerFrom(".single-portfolio .content, .single-portfolio .slide-control, .single-portfolio .cycle-pager", 1, {
        delay: .5,
        scale: 1.2,
        opacity: 0,
        ease: Sine.easeOut
    }, 0.3);
    
    tl.staggerFrom(".single-portfolio aside.aside", 2, {
        delay: .2,
        scale: 1.05,
        opacity: 0,
        ease: Sine.easeOut
    }, 0.3);
    
    // tl.staggerFrom("#rect1, #rect2, #rect3, #rect4, #rect5, #rect6", 1, {
    //     cycle:{
    //         opacity:function(){
    //             return .40;
    //         }
    //     },
    //     ease: Sine.easeOut,
    //     repeat: -1,
    //     yoyo: true,
    // }, Math.random());
    
    
    // Homepage animation once per session
    function trexCallback391(trex){document.getElementById("trex-widget391").innerHTML=trex.html;}
    
    if(!sessionStorage.seenPopup) {
        animations();
        sessionStorage.seenPopup = "yes";
    }


    // Portfolio Slider
    $('.tiSlide').cycle({
    		timeout: 7500,
    		slides: "img",
    		autoHeight:"164:69",
    		overlay: " > .slide-content",
    		prev: ".slide-control > .slide-prev",
    		next: ".slide-control > .slide-next",
            log: false
		});     

});
    