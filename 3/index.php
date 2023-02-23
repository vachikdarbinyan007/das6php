<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <title>Document</title>
</head>
<style>
    #reg,#log{
        width:40%;
        height:10rem;
        border:solid;
    }
</style>
<body>
    <div id='reg'>
        <h2>Registration</h2>
            <input type="text" name='login' placeholder='LOGIN' id='reg1'/>
            <input type="text" name='pasword' placeholder='PASSWORD' id='reg2'/>
            <input type="submit" value="Click" id='regbtn'>
    </div>
    <div id='log'>
        <h2>Login</h2>
            <input type="text" name='login' placeholder='LOGIN' id='log1'/>
            <input type="text" name='pasword' placeholder='PASSWORD' id='log2'/>
            <input type="submit" value="Click" id='logbtn'>
    </div>
    <script>
          // function(){
            //     let reglogin=$('#reg1').val()
            //     let regpassword=$('#reg2').val()
            //     $.post('reg.php' {reglog:reglogin,regpassword:regpass},
            //     function(ard){

            //     })
            // }
        let user={
            login:'',
            password:''
        }
            $('#regbtn').click(
                function(){
                    user.login=$('#reg1').val()
                user.password=$('#reg2').val()
                }
             )
             $('#logbtn').click(
             function(){
                let reglogin=user.login
                let regpassword= user.password
                let mylogin=$('#log1').val()
                let mypassword= $('#log2').val()
                $.post('reg.php',{reglog:reglogin,regpass:regpassword,mylog:mylogin,mypass:mypassword},
                function(ard){
                    alert(ard)
                })
            })
    </script>    
</body>
</html>