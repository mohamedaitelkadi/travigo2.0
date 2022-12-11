<?php


class EditController{
public function edit(){
    require ('view/edit.php');
}
    
}

$home = new EditController();
$home->edit();
