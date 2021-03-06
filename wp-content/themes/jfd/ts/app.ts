
jQuery( document ).ready(function( $ ) {
// Code that uses jQuery's $ can follow here.
   

          
          
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
        sticking,
        topPosition = 0;

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
            properties = (empty(adminBar))?{position:"fixed", width:"100%", top: topPosition}:{position:"fixed", width:"100%", top:topPosition};
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
            topPosition = (mobile <= 600)? 0 : adminBar;
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
          

const header =  StickMenu({
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
    
    
class ScrollTo{
    
    selector: string;
    target: string;
    offsetTop: number;
    animationTime: number;
    
    constructor(selector, target:string ="body", offsetTop:number = 200, animationTime:number = 300){
        this.selector = selector;
        this.target = target;
        this.offsetTop = offsetTop;
        this.animationTime = animationTime;
        
        this.scroll= this.scroll.bind(this);
        this.to = this.to.bind(this);
    }
    
    scroll(){
       const selector = $(this.selector);
        
        selector.on("click", this.to);
    }
    
    to(){
        const target = $(this.target).position();
        $("html,body").animate({
            scrollTop:(target.top - this.offsetTop)
        },this.animationTime);
        
        console.log("It is working");
        
        return false; 
    }
    start(){
        this.scroll();
    }
} 
    
    
const service = new ScrollTo("#menu-item-42","#services");
    
service.start();
    

class ScrollVisible extends ScrollTo {
    
     id:string;
     threshold:number;
     height:number;
    
    constructor(selector, target:string ="body", id:string , threshold:number = 50 ){
        super(selector,target);
        
        this.threshold = threshold;
        this.id = id;
        this.height = $("body").height();
        
        
        this.checkThreshold = this.checkThreshold.bind(this);
        this.onScroll = this.onScroll.bind(this);
        this.onClick = this.onClick.bind(this);
        
    }
    
    checkThreshold(){
        let threshold = (this.height/100)*this.threshold,
            scrollPosition = $(window).scrollTop(),
            selector = $(this.selector);
//         console.log(`selector is  ${selector}`);
        
        if( threshold <= scrollPosition){
            selector.addClass(this.id).removeClass("fade-out");
           
        }else{
            selector.removeClass(this.id).addClass("fade-out");
        }
        
        
    }
    
    onScroll(){
        const $window = $(window);
        
        $window.on("scroll", this.checkThreshold);
        
    }
    
    onClick(){
        const selector = $(this.selector);
        selector.on("click", this.to);
    }
    
    start(){
        this.onClick();
        this.onScroll();
    }
} 
    

const bottomArrow = new ScrollVisible(".fixed-bottom-block","body","appear");
    
bottomArrow.start();
    

    
    $(".faq-list-item").on("click" ,function(){
    
      const  result = $(this).find("span").hasClass("fa-angle-right");
        console.log(result);
    if(result){
        $(this).find("span").addClass("fa-angle-down").removeClass("fa-angle-right");
        $(this).addClass("active");
       }else{
        $(this).find("span").addClass("fa-angle-right").removeClass("fa-angle-down");
           $(this).removeClass("active");
       }
     
    
})  
    
//$("#menu-item-42").on("click", function(){
//     const element = $("#services").position();
//    $("html,body").animate({
//        scrollTop:(element.top-200)
//    },300);
//    return false;
//});
         
    
 
    
    
});//end JQuery


 