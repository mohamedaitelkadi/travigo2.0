<?php


class AddController{
public function add(){
    require ('view/addform.php');
}
    
}



$home = new AddController();
$home->add();
