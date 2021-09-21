$(window).scroll(function(){
    // sticky navbar on scroll script
    if(this.scrollY >20){
        $('.footer-btm').addClass("sticky");
     
    }
    else{
        $('.footer-btm').removeClass("sticky");
    }
    
  
});