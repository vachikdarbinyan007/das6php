<?php
$text=$_POST['infotext'];
$cookie_NAME='txt';
$cookie_VALUE=$text;
setcookie($cookie_NAME,$cookie_VALUE,time()+(86400*30));
if(!isset($_COOKIE['txt'])){
    echo 'TEXT TEXT';
}else{
    echo str_shuffle($_COOKIE['txt']);
};
?>