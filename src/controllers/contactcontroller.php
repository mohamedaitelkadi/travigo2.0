<?php


class ContactController{
public function contact(){
    require ('view/homepage.php');
}
    
}


$home = new ContactController();
$home->contact();
