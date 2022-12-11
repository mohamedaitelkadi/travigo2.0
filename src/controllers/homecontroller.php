<?php


class HomeController{
public function fun(){
    require ('view/homepage.php');
}
    
}

$home = new HomeController();
$home->fun();
