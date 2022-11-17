<?php 
function slider_display1(){
    return "<div id='post-slider' class='flexslider'>
    <ul class='slides'>
        <li>";
}

function slider_display2(){
   return "</li>
   <li>";
}

function slider_display3(){
    return "</li>
    </ul>
</div>";
 }

add_shortcode('display_design1','slider_display1');
add_shortcode('display_design2','slider_display2');
add_shortcode('display_design3','slider_display3');

?>