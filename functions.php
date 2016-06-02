<?php

function stringToMinutes($string){
    
    $str = split(":", $string);
    
    return $str[0]*60 + $str[1] + $str[2]/60;
  
}

?>


