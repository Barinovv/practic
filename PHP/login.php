<?php
    require "../includs/db.php";

    $data = $_POST;

    if(isset($data['do_login'])){
        $errors = array();
        $user = R::findOne('users', 'email = ?', array($data['email']));
        if($user)
        {
            //логин существует, проверяем пароль
            if (password_verify($data['password'], $user->password)) {
                //все хорошо, логин пользователя
                $_SESSION['logged_user'] = $user;
                echo '<div id="error"> sucssesful </br>
                Welcome to <a href = "http://diplom/PHP/session-index.php">main page</a> </div>';
            }else{
                $errors[] = "False password!";
            }
        }else
        {
            $errors[] = "User with this email dont found!";
        }

        if ( ! empty($errors))
        {      
               echo '<div id="error">'.array_shift($errors).'</div>';
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Вход</title>
</head>

<form action="email.php" method="POST">

<p>
            <p><strong>Email</strong></p>
            <input type="text" name="email" id="" value="<?php echo @$data['email']; ?>" >
        </p>
        
        <p>
            <p><strong>Пароль</strong></p>
            <input type="password" name="password" id="" value="<?php echo @$data['password']; ?>" >
        </p>

        <p>
            <button type="submit" name="do_login"> Войти </button>
        </p>

</form>