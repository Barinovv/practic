<?php
    require "../includs/db.php";

    $data = $_POST;
    if( isset($data['do_signup']) )
    {

        $errors = array();
        if(trim($data['email']) == '')
        {
            $errors[] = 'Enter email';
        }
        if($data['password'] == '')
        {
            $errors[] = 'Enter password';
        }
        if(trim($data['password2']) != $data['password'])
        {

            $errors[] = 'You enter false second password';
        }

        if( R::count("users", "email = ? ", array($data['email'] )) > 0 )
        {

            $errors[] = 'User with this email already registered!';
        }


        if (empty($errors))
        {
            $user = R::dispense('users');
            $user->email = $data['email'];
            $user->password = password_hash($data['password'], PASSWORD_DEFAULT); 
            R::store($user);
            echo '<div id="error"> sucssesful </br>
                Welcome to <a href = "http://diplom/PHP/session-index.php">main page</a> </div>';
        }else{ 
            echo '<div id="error">'.array_shift($errors).'</div>';
        } 

    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
</head>
<body>
    <form action="/signup.php" method="POST">
    
        <p>
            <p><strong>Email</strong></p>
            <input type="text" name="email" id="" value="<?php echo @$data['email']; ?>" >
        </p>
        <p>
            <p><strong>Пароль</strong></p>
            <input type="password" name="password" id="">
        </p>
        <p>
            <p><strong>Повторите пароль</strong></p>
            <input type="password" name="password2" id="">
        </p>

        <p>
            <button type="submit" name="do_signup"> Зарегестрироваться </button>
        </p>

    </form>
</body>
</html>