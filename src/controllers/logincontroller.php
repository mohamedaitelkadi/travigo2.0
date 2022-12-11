<?php


class LoginController{
public function login(){
    require ('view/login.php');
}
    
}



$home = new LoginController();
$home->login();
