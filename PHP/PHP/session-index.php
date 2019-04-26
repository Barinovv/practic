<?php
session_start();
    require "../includs/db.php";


$email = $_POST['email'];
if (isset($_SESSION['email'])) {
$email = $_SESSION['email'];
echo "<div class='signin-text'>Добро пожаловать " .$email. "! </div>";
echo "<a href='logout.php'> Выйти </a> <br>";
}
?>
<meta charset = "UTF-8">
<!DOCTYPE html>
<html>

<link rel="stylesheet" type="text/css" href="../CSS/HeaderCSS.css">
<link rel="stylesheet" type="text/css" href="../CSS/BodyCSS.css">
<link rel="stylesheet" type="text/css" href="../CSS/FooterCSS.css">
<head>
<meta charset = "UTF-8">
	<title>Главная страница</title>
</head>
<body>

<div class="auth">
	
<p style = "color: black;"> Авторизован, <?php var_dump($_SESSION['email']);?></p>
<!-- <?php if (isset($_SESSION['logged_user']) ) : ?> <?php echo $_SESSION['logged_user']->login;?> <?php endif; ?> --> 

</div>
<div class="width">
<header >

	<ul class="menu">
		<li class="menu-item drop decoration-item li-style auth__btn"><a href="automobile.php" style="color: black">Автомобили</a></li>
		<li class="menu-item decoration-item li-style auth__btn"><a href="advertisement.php" style="color: black">Подать объявление</a></li>
		<li class="menu-item decoration-item li-style auth__btn"><a href="session-index.php" style="color: black">Свежие объявления</a></li>
		<li class="menu-item decoration-item li-style auth__btn" style="color: black">Мои объявления</li>	
		<li class="menu-item decoration-item li-style auth__btn" style="color: black">Обратая связь</li>

	</ul>
	
</header>
</div>
<section id="maina">
	<div class="blocks">
		
	
		<img src="/images/s1.jpg" width="250" height="150">
		
		<div class="update__text">
			<h3><a href="vaz.php" >ВАЗ 2110</a></h3>
				<p><ul>
<li>Год выпуска: 2009</li>
<li>Состояние срееднее</li>
<li>Сломана передняя стойка</li>
<br/>
<a href="#">Подробнее</a>
</div>
</div>

</ul></p>
	<hr>

	<div class="blocks">
		
			
		<img src="/images/s2.jpg" width="250" height="150">
		
		<div class="update__text">
			<h3><a href="#" >Клининг фирма</a></h3>
				<p><ul>
<li>Наша команда выполнит спектр любых услуг для вашего дома!</li>
<li>Работаем с 2014 года!</li>
<li>Адекватные цены, скидки!</li>
<br/>
<a href="#">Подробнее</a>
</div>
</div>

</ul></p>
	</div>
<hr>

	<div class="blocks">
		
			
		<img src="/images/s3.jpg" width="250" height="150">
		
		<div class="update__text">
			<h3><a href="#" >MERCEDES S Class</a></h3>
				<p><ul>
<li>Год выпуска: 2018</li>
<li>Состояние идеальное!</li>
<li>Пробег меньше 100КМ!</li>
<br/>
<a href="#">Подробнее</a>

</ul></p>
</div>
</div>
	</div>
	<hr>
</section>

<footer>
	<div class="footer__menu">
		<p> © 2018 Услуги городской поликлиники | Баринов Антон 15ИТ18  </p>
	
	<img src="/images/vkicon.png" class="footer__icon">
	<img src="/images/okicon.png" class="footer__icon">
	<img src="/images/twittericon.png" class="footer__icon">
	<img src="/images/facebookicon.png" class="footer__icon">
</div>
</footer>
</body>
</html>