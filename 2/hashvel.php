<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tiv1=$_POST['num1'];
    $tiv2=$_POST['num2'];
    $select=$_POST['s'];   
    if($select=='+'){
        echo $tiv1.'+'.$tiv2.'='.$tiv1+$tiv2;
    }else if($select=='-'){
        echo $tiv1.'-'.$tiv2.'='.$tiv1-$tiv2;
    }else if($select=='*'){
        echo $tiv1.'*'.$tiv2.'='.$tiv1*$tiv2;
    }else if($select=='/'){
        echo $tiv1.':'.$tiv2.'='.$tiv1/$tiv2;
    }else if($select=='%'){
        echo $tiv1.'%'.$tiv2.'='.$tiv1%$tiv2;
    }else{
        echo 'ERROR';
    };
    ?>
</body>
</html>