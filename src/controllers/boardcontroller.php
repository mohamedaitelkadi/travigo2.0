<?php

// include_once 'model/display.php';
// include 'model/delete.php';
include_once 'model/tour.php';



class BoardController{
public function board(){
    $dashboardtour = new tour;
    $rows = $dashboardtour->getTourInfo();
    require ('view/dashboard.php');
}
    
}



$home = new BoardController();
$home->board();
