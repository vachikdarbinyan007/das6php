<?php
$reglogin=$_POST['reglog'];
$mylogin=$_POST['mylog'];
$regpassword=$_POST['regpass'];
$mypassword=$_POST['mypass'];

if($reglogin==$mylogin and $regpassword==$mypassword){
    echo 'HAJOGH MUTQ';
}else{
    echo 'XYXYXY'; 
};


?>