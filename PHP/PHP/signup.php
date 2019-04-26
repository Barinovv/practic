<?php
session_start();
    require "../includs/db.php";

    $data = $_POST;
    if( isset($data['do_signup']) )
    {

        $errors = array();
        if(trim($data['email']) == '')
        {
            $errors[] = 'Ввeдитe email!';
        }
        if($data['password'] == '')
        {
            $errors[] = 'Ввeдитe пароль!';
        }
        if(trim($data['password2']) != $data['password'])
        {

            $errors[] = 'Повторный пароль введен неверно!';
        }

        if( R::count("users", "email = ? ", array($data['email'] )) > 0 )
        {

            $errors[] = 'Пользователь с таким email уже зарегистрирован!';
        }


        if (empty($errors))
        {
            $user = R::dispense('users');
            $user->email = $data['email'];
            $user->password = password_hash($data['password'], PASSWORD_DEFAULT); 
            R::store($user);
            echo '<div id="error"> Успeшно! </br>
               Добро пожаловать <a href = "http://secondpractice/PHP/session-index.php">на главную страницу!</a> </div>';
        }else{ 
            echo '<div id="error">'.array_shift($errors).'</div>';
        } 

    }
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../CSS/RegandLogCSS.css">
    
    <title>Document</title>
</head>
<body>
    <form action="signup.php" method="POST">
    
        <p>
            <p id="string-reg" style ="text-align:center" ><strong>Ввeдитe email</strong></p>
            <p style ="align:center">
            <p align="center"><input type="text" name="email" id="inputs" value="<?php echo @$data['email']; ?>" ></p>
</p>
        </p>
        <p>
        <p id="string-reg" style ="text-align:center"><strong >Ввeдитe пароль</strong></p>
        <p style ="align:center"> 
        <p align="center"><input type="password" name="password" id="inputs"></p>
        </p>
        <p>
        <p id="string-reg" style ="text-align:center"><strong>Повторите пароль</strong></p>
        <p style ="align:center">    
        <p align="center"><input type="password" name="password2" id="inputs"></p>
</p>
        </p>

        <p align="center">
            <button id="submit-reg" type="submit" name="do_signup"> Зарегистрироваться </button>
        </p>

    </form>
</body>
</html>