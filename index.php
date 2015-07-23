<?php

require_once ('./header.php');
require_once ('./config/config.php');

$selectedLink="";
if(isset($_GET['link']))
    $selectedLink=$_GET['link'];
$folder="";

switch ($selectedLink){

    case "register":
                $linkInclude='register.php';
                break;

    case "updateuser":
                $linkInclude='updateuser.php';
                break;                

    case "registeruser":
                $folder .= "phpfiles/";
                $linkInclude='register.php';
                break;

    case "updateuserpro":
                $folder .= "phpfiles/";
                $linkInclude='updateuser.php';
                break;            
    

    default : 
                $linkInclude='home.php';
                break;
}

$linkInclude=$folder . $linkInclude;

require($linkInclude);

require_once ('./footer.php');