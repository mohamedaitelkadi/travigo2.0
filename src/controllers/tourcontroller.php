<?php
// include_once 'model/display.php';
include_once 'model/tour.php';


$tour = new tour;
$rows = $tour->getTourInfo();

require ('view/tourpage.php');
