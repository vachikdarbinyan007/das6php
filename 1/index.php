<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
     body{
            margin:0;
            padding:0;
            height:100vh;
            background-image:url('https://th.bing.com/th/id/OIP.YjkbIQMxvcw7IJLnc_-M0gHaEo?pid=ImgDet&rs=1');
            background-size:cover;
    }
    #imgdiv{
        width:33%;
        height:30rem;
        background-color:rgb(123,34,98,0.4);
        backdrop-filter:blur(5px);
        /* padding:25px; */
        border:10px solid;
        border-radius:35px;
    }
    #infodiv{
        width:33%;
        height:30rem;
        background-color:rgb(123,34,98,0.4);
        backdrop-filter:blur(5px);
        border:10px solid;
        border-radius:35px;
    }
    #bigdiv{
        width:100%;
        height:100%;
        display:flex;
        justify-content:space-around;
        align-items:center;
        font-size:4vw;
    }
</style>
<body>
<?php
    if(isset($_POST['login']) and isset($_POST['pass'])){
        $log=$_POST['login'];
        $pass=$_POST['pass'];
        if($log=='semulik77' and $pass=='A394840a'){
           $img='<img src="https://cdn-icons-png.flaticon.com/512/5610/5610944.png" width="100%"/>';
            $info='HAJOGH MUTQ <br/> DUQ MUTQ GORCECIQ VORPES'.' '.'<b>'.$log.'</b>';
        }else{
            $img='<img src="https://cdn-icons-png.flaticon.com/512/463/463612.png" width="100%"/>';
            $info='MUTQ GORCEL CHEGHAV <a href="log.php">Krkin Porcel</a>';
        };
    }else{
        echo 'NO LOGIN!!!';
    };
?>
<div id='bigdiv'>
<div id='imgdiv'>
    <?=$img?>
</div>
<div id='infodiv'>
    <?=$info?>
</div>
</div>
</body>
</html>