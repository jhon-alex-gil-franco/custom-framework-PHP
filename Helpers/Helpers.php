<?php


//retorna la url del proyecto
function base_url(){
    return BASE_URL;
}

//Muestra inormacion formateada
function dep($data){
    $format  = print_r('<pre>');
    $format .= print_r($data);
    $format .= print_r('</pre>');
    return $format;
}

?>