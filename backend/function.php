<?php
function dd($d) {
    echo "<pre>";
    print_r($d);
    echo "</pre>";
    exit();
}

function redirect($url){
    header('Location: '.$url);
    die();
 }
?>