<?php

ob_start();
session_start();





if(!isset($_SESSION["login_user"])){
     header("Location:./login");
    exit();
}else{

 header("Location:./home"); 
	exit();
}


?>