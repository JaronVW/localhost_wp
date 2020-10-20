$( document ).ready(function() {

    const nav_scroll_color = "#2C545C";
    const nav = $('#navbar').get(0);

    window.onscroll = function(){
        if(window.pageYOffset >100){
            // nav.style.position = "sticky"
            nav.style.background = nav_scroll_color;
            nav.style.padding = "0";          
        }
        else{
            nav.style.background = "transparent"
            nav.style.padding = ".9rem 1rem";           
        }
    }
});