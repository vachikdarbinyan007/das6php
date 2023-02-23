<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <title>Document</title>
    <style>
        body{
            margin:0;
            padding:0;
            background-image:url('https://th.bing.com/th/id/OIP.YjkbIQMxvcw7IJLnc_-M0gHaEo?pid=ImgDet&rs=1');
            background-size:cover;
        }
        #formdiv{
            width:100%;
            height:30rem;
            background-color:rgb(123,34,98,0.4);
            backdrop-filter:blur(5px);
            display:flex;
            justify-content:center;
            align-items:center;
        }
        #cookiediv{
            width:100%;
            height:30rem;
            margin-top:5vh;
            background-color:rgb(123,34,98,0.4);
            backdrop-filter:blur(5px);
            display:flex;
            justify-content:center;
        }
        .inp{
            width:40%;
            height:30px;
            outline:none;
            border-radius:35px;
        }
        #form{
            width:100%;
            height:25%;
            display:flex;
            flex-direction:column;
            justify-content:space-between;
            align-items:center;
        }
        #btn{
            width:25%;
            outline:none;
            border-radius:35px;
        }
        #txt{
            resize:none;
        }
        .textdiv{
            width:50%;
            height:100%;
            border:solid;
        }
    </style>
</head>
<body>

    <?php
     if(isset($_POST['s1'])){
        header("Refresh:0");
        $setcolor=$_POST['s1'];
        $cookie_NAME='guyn';
        $cookie_VALUE=$setcolor;
        setcookie($cookie_NAME,$cookie_VALUE,time()+(86400*30));
    }else{
        echo 'NO I SET'; 
    };

    if(isset($_POST['s2'])){
        header("Refresh:0");
        $setcolor2=$_POST['s2'];
        $cookie_NAME2='guyn2';
        $cookie_VALUE2=$setcolor2;
        setcookie($cookie_NAME2,$cookie_VALUE2,time()+(86400*30));
    }else{
        echo 'NO II SET';
    };
    ?>
    <div id='formdiv'>
    <form action="index.php" method='post' id='form'>
        <div style='width:100%;display:flex; justify-content:center;'>
        <input type="text" name='login' class='inp' placeholder='Login'/>
        <input type="password" name='pass' class='inp' placeholder='Password'/>
        </div>
        <input type="submit" value="Click" id='btn'/>
    </form>
    </div>

    <div id='cookiediv'>
        <form action="log.php" method='post' id='selectform'>
            <select name="s1" id="s1">
                <option value=""></option>
                <option value="red">red</option>
                <option value="blue">blue</option>
                <option value="yellow">yellow</option>
                <input type="submit" value="SEND"/>
            </select>
        </form>
        <section>
            <form action="log.php" method='post'>
            <textarea name="txt" id="txt" cols="30" rows="10"><?php
          if(isset($_COOKIE['txt'])){
            echo $_COOKIE['txt'];
          }else{
            echo 'TEXT TEXT';
          };
            ?></textarea>  
        </form>
            <section style='width:100%; height:50%;display:flex;'>
            <div class='textdiv' id='normal'style='background-color:<?=$_COOKIE['guyn']?>;'>
            <?php
            if(isset($_COOKIE['txt'])){
                echo $_COOKIE['txt'];
              }else{
                echo 'TEXT TEXT';
              };           
            ?>
            </div>
            <div class='textdiv' id='shuffle' style='background-color:<?=$_COOKIE['guyn2']?>;'>

            </div>
            </section>
        </section>
        <form action="log.php" method='post'>
        <select name="s2" id="s2">
                <option value=""></option>
                <option value="red">red</option>
                <option value="blue">blue</option>
                <option value="yellow">yellow</option>
            </select>
            <input type="submit" value="SEND"/>
        </form>
        <script>
            function refresh(){
                normal.textContent=txt.value;                
            }
            setInterval(() => {
                refresh()
            }, 10);
    $('#txt').on('input', function() {
            text = $('#txt').val();
            $.post('check.php',{infotext: text},function(ard){
                shuffle.innerHTML=ard 
                       });
        });
        </script>
</body>
</html>