<?php
require "../includs/db.php";
$ads = $_POST;
    if( isset($ads['do_record']) )
    {

        $errors = array();

        if(($ads['title']) == ''){
            $error[] = 'Вы не указали название.';
        }
        if(($ads['characteristics']) == ''){
            $error[] = 'Характеристики';
        }
        if(($ads['description']) == ''){
            $error[] = 'Описание';
        }
       
        if (empty($error)){
            $board = R::dispense('blackboard'); //создать таблицу
            $board->title = $ads['title']; 
            $board->description = $ads['description']; 
            $board->characteristics = $ads['characteristics'];
            R::store($board);
            echo '<div class="window"></div>';
            echo '<div class="finish">Успешно! Объявление отправлено в обработку.</div>';
        }else{ 
            echo '<div id="error">'.array_shift($error).'</div>';
        }
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<title>Подать объявление</title>
<link rel="stylesheet" type="text/css" href="../CSS/HeaderCSS.css">
<link rel="stylesheet" type="text/css" href="../CSS/BodyCSS.css">
<link rel="stylesheet" type="text/css" href="../CSS/FooterCSS.css">
<link rel="stylesheet" type="text/css" href="../CSS/RecordCSS.css">
</head>
<body>

<div class="auth">
	<div class="auth__item"><a href="login.php" class="btn btn-login link-style auth__btn">Вход</a></div>
	<div class="auth__item"><a href="signup.php" class="btn btn-registration link-style auth__btn">Регистрация</a></div>
</div>
<div class="width">
<header>

	<ul class="menu">
		<li class="menu-item drop decoration-item li-style auth__btn"><a href="automobile.php">Автомобили</a></li>
		<li class="menu-item decoration-item li-style auth__btn"><a href="advertisement.php">Подать объявление</a></li>
		<li class="menu-item decoration-item li-style auth__btn"><a href="session-index.php">Свежие объявления</a></li>
		<li class="menu-item decoration-item li-style auth__btn">Мои объявления</li>	
		<li class="menu-item decoration-item li-style auth__btn">Обратая связь</li>
	</ul>
	
</header>
</div>

<section id="write_to_ads">
<form action="advertisement.php" method="POST" id="adsRecord" >
 <ul id="ads-recorder">
<li>
     <input type="text" placeholder="Укажите название объявления" name="title" class="ads">
</li>
    

<li><textarea class="text-field" type="text" name="description" value="" placeholder="Введите описание продукта"></textarea></li>
<li><textarea class="text-field" type="text" name="characteristics" value="" placeholder="Расскажите подробнее о продукте и оставьте ваши контакты "></textarea></li>

<li><input type="text" name="snils" value="" placeholder="Введите дату подачи объявления"></li>

<button name="do_record"  id="button-form-record" >Отправить объявление</button>
</ul>

</form>
</section>


</body>
<footer>
	<div class="footer__menu">
		<p> © 2019 Доска объявлений "Купи-продай" | Баринов Антон 15ИТ18  </p>
	
	<img src="../images/vkicon.png" class="footer__icon">
	<img src="../images/okicon.png" class="footer__icon">
	<img src="../images/twittericon.png" class="footer__icon">
	<img src="../images/facebookicon.png" class="footer__icon">
</div>
</footer>

</html>