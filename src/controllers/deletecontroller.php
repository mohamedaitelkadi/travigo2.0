<?php
require_once 'model/tour.php';



class DeleteController{
public function remove(){
    $remove = new tour();
    $result = $remove->deleted($element);
    require ('view/dashboard.php');
}
    
}


$objet = new tour();
$objet->deleted($element);
$home = new DeleteController();
$home->remove();