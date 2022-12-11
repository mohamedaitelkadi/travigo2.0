<?php
if(isset($_GET['action'])){
    switch ($_GET['action']) {
        case 'home':
            require 'src/controllers/homecontroller.php';
            break;
        case 'tour':
            require 'src/controllers/tourcontroller.php';
            break;
        case 'about':
                require 'src/controllers/aboutcontroller.php';
                break;
        case 'contact':
            require 'src/controllers/contactcontroller.php';
            break;
        case 'add':
            require 'src/controllers/addcontroller.php';
            break;
        case 'edit':
            require 'src/controllers/editcontroller.php';
            break;
        case 'board':
            require 'src/controllers/boardcontroller.php';
            break;
        case 'login':
            require 'src/controllers/logincontroller.php';
            break;
        case 'delete':
            if(isset($_GET['id'])){
                $element = $_GET['id'];
                require 'src/controllers/deletecontroller.php';
            }
            break;
    
    }
    
}
else{
    require 'src/controllers/homecontroller.php';
}

