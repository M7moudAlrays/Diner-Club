<?php

class User{


    public $name,$email,$password;

    public $IsAdmin=false;


}

$kareem=new user();
$kareem->name="karemm";
$kareem->email="k@gmail.com";
$kareem->password=1234;
$kareem->IsAdmin=true;
print_r($kareem);


?>
