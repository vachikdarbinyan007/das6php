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
        background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1));
    }
     #formdiv{
         width:60%;
        height:20rem; 
        margin:auto;
        border:solid;
        color:white;
    } 
    form{
        width:100%;
        height:100%;
        display:flex;
        flex-direction:column;
        align-items:center;
        justify-content:center;
    }
</style>
<body>
    <div id='formdiv'>
    <form action="hashvel.php" method='post'>
        <section>
        <input type="number" name='num1' placeholder='TIV1'/>
        <input type="number" name='num2'  placeholder='TIV2'/>
        </section>
        <select name="s" id="select">
            <option value=""></option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="/">/</option>
            <option value="*">*</option>
            <option value="%">%</option>
        </select>
        <input type="submit" value="CLICK"/>
    </form>
    </div>
</body>
</html>