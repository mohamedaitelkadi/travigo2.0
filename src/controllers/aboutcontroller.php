<?php


class AboutController{
public function about(){
    require ('view/about.php');
}
    
}



$home = new AboutController();
$home->about();
