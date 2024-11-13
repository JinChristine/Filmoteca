<?php

class Routeur {
    public function __construct(){
    }
    private $url; 
    public function route(){
        $temp = trim($_SERVER['REQUEST_URI'], "/");
        echo var_dump($temp);
        return $temp;
    }
}
?>