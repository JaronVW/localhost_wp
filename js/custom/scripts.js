$( document ).ready(function() {
    const nav_scroll_color = "#2C545C";
    const nav = $('#navbar').get(0);
    window.onscroll = function(){
        if(window.pageYOffset >100){
            // nav.style.position = "sticky"
            nav.style.background = nav_scroll_color;
        }
        else{
            nav.style.background = "transparent"
            
        }
    }
});