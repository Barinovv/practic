<meta charset = "UTF-8">
<?php

    require "../includs/db.php";

    $data = $_POST;

    if(isset($data['do_email'])){
        $errors = array();
        $user = R::findOne('users', 'email = ?', array($data['email']));
        if($user)
        {
            //логин существует, проверяем пароль
            if (password_verify($data['password'], $user->password)) {
                //все хорошо, логин пользователя
                $_SESSION['logged_user'] = $user;
                echo '<div id="error"> Успешно </br>
                Добро пожаловать <a href = "session-index.php">на главную страницу!</a> </div>';
            }else{
                $errors[] = "Неверно введён пароль !";
            }
        }else
        {
            $errors[] = "Пользователь с таким email не найден!";
        }

        if ( ! empty($errors))
        {      
               echo '<div id="error">'.array_shift($errors).'</div>';
    }
}
?>
<link rel="stylesheet" type="text/css" href="../CSS/RegandLogCSS.css">
<form action="login.php" method="POST">
<p>
            <p style ="text-align:center" id="string-reg"><strong>Укажитe ваш email</strong></p>
            <p align="center"><input type="text" name="email" id="inputs" value="<?php echo @$data['email']; ?>" ></p>
        </p>
        
        <p>
            <p style ="text-align:center" id="string-reg"><strong>Укажитe ваш пароль</strong></p>
            <p align="center"><input type="password" name="password" id="inputs" value="<?php echo @$data['password']; ?>" ></p>
        </p>

        <p>
            <button id="submit-enter" type="submit" name="do_email"> Вход </button>
        </p>

</form>
<!-- <?php
if (isset($_SESSION['email'])) {
$email = $_SESSION['email'];
echo "<div class='signin-text'>Добро пожаловать " .$email. "! </div>";
echo "<br><div class='signin-text'>Вы вошли!</div>";
echo "<a href='session-index.php' class='btn btn-lg btn-primary'>На главную страницу</a>";
}
?> -->