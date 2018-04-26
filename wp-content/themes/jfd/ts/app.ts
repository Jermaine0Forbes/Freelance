
jQuery( document ).ready(function( $ ) {
// Code that uses jQuery's $ can follow here.
   
      enum Talk {
    yes = 1,
    no = 0,
    maybe = 2,
}

function action( message:Talk):void{
    switch(message){
        case 0:
        console.log("you said no");
        break;
        case 1:
        console.log("you said yes");
        break;
        case 2:
        console.log("you said maybe");
        break;
    }
}
          
          
  function StickMenu(obj){
         obj = empty(obj)? {}:obj;
        const
        menuBar =  $(obj.menu) || $('.sticky-menu'),
        menuClass = obj.class || "on",
        _up     = obj.whenUp || false,
        _down     = obj.whenDown || false,
        _window = $(window);

        let
        properties ,
        adminBar = obj.bar || $('#wpadminbar').height(),
        menuHeight ,
        menuOffset ,
        previousPosition,
        scrollPosition,
        sticking;

        function whenUp(){
            if(_up){
                _up();
            }else{
                //console.log("it is scrolling up")
            }

        }
        function whenDown(){
            if(_down){
                _down();
            }else{
                //console.log("it is scrolling down")
            }
        }

        function whenSticking(){

            if( !menuBar.hasClass(menuClass) ){
                menuBar.addClass(menuClass).css(properties);
                (function(){
                     let
                     stat = $(".static-logo"),
                     fix = $(".fixed-logo");
                     stat.hide();
                     fix.addClass("appear").removeClass("hide");

                })();
            }else{
                let activate = (previousPosition <= scrollPosition)?whenDown:whenUp;
                activate();
            }
        }

        function empty(value){
            if(value == null || value == "" || value == false || value == undefined ){
                return true;
            }
            return false;
        }

        function onScroll(){
            properties = (empty(adminBar))?{position:"fixed", width:"100%"}:{position:"fixed", width:"100%", top:adminBar};
            scrollPosition = _window.scrollTop();
            sticking = (menuOffset <= scrollPosition)?true:false;
            if(sticking){
                whenSticking();
                previousPosition = scrollPosition;
            }else{
                 menuBar.removeClass(menuClass).removeAttr("style");
                 $(".static-logo").show();
                 $(".fixed-logo").addClass("hide").removeClass("appear");
                 previousPosition = scrollPosition;
            }

        }

        function onResize(){
            let mobile = _window.width();
            adminBar  = $('#wpadminbar').height();
            adminBar = (empty(adminBar))? 0 : adminBar;
            properties =(mobile <= 600)? {position:"fixed", width:"100%", top:0} : {position:"fixed", width:"100%", top:adminBar} ;
            // (menuBar.hasClass("on"))? menuBar.css(properties): onScroll();
            menuBar.hasClass("on") && menuBar.css(properties);
        }

        function scroll(){
            menuHeight =  menuBar.height();
            menuOffset = (empty(adminBar))? menuHeight :menuBar.offset().top;

            onResize();
            _window.on("scroll", onScroll)//scroll

            _window.on("resize", onResize)
        }

        return {
            start:scroll,
            whenUp : whenUp,
            whenDown: whenDown
        };
    }
          

const header = StickMenu({
    menu:"header#masthead",
    whenUp : function(){
        $("header#masthead").css({
            "transform":"translateY(0)"
        })
    },
    whenDown:function(){
        $("header#masthead").css({
            "transform":"translateY(-163px)"
        })
    }
    
});
    
header.start();
         
    
 
    
    
});//end JQuery


 