<!DOCTYPE html>
<html>
<meta charset="utf-8">
<!-- <link rel="stylesheet" type="text/css" href="../CSS/BodyCSS.css"> -->
<link rel="stylesheet" type="text/css" href="../CSS/adsCSS.css">
<link rel="stylesheet" type="text/css" href="../CSS/FooterCSS.css">
<link rel="stylesheet" type="text/css" href="../CSS/HeaderCSS.css">
<head>
	<title> </title>
</head>

<body>
	<div class="auth">
	
<p style = "color: black;"> Авторизован, <?php var_dump($_SESSION['email']);?></p>
<!-- <?php if (isset($_SESSION['logged_user']) ) : ?> <?php echo $_SESSION['logged_user']->login;?> <?php endif; ?> --> 

</div>
<div class="width">
	<header>

	<ul class="menu">
		<li class="menu-item drop decoration-item li-style auth__btn"><a href="servises.php">Автомобили</a></li>
		<li class="menu-item decoration-item li-style auth__btn"><a href="advertisement.php">Подать объявление</a></li>
		<li class="menu-item decoration-item li-style auth__btn"><a href="session-index.php">Свежие объявления</a></li>
		<li class="menu-item decoration-item li-style auth__btn">Мои объявления</li>	
		<li class="menu-item decoration-item li-style auth__btn">Обратая связь</li>

	</ul>
	
</header>
</div>
<div class="wrapper">
	<div class="wrapper-head">
		<img src="/images/s1.jpg" class="img"> 
		<div class="wrapper-list">
			<strong class="front-ads">ВАЗ 2110</strong>
			<br>
		<ul>
			 <li class="description-ads">Год выпуска: 2009</li>
			 <li class="description-ads">Состояние: срееднее</li>
			 <li class="description-ads">Пробег: 141 000км</li>
			 <li class="description-ads">Владельцев по ПТС: 2</li>
			 <li class="description-ads">Цена: 67 000 рубей</li>
			 <li class="description-ads">Двигатель: 1,6 81л.с.</li>
		</ul>
		</div>
	</div>
	
	<p class="text">	
		Продажа автомобилей с пробегом, прием на комиссию на выгодных условиях, срочный выкуп автомобилей по договорной цене, обмен с доплатой в любую сторону, официальное оформление договоров купли-продажи с вписыванием в ПТС, оформление автомобилей в кредит (без ограничений года выпуска автомобиля) через банк-партнер ( РОССЕЛЬХОЗ БАНК,ПЛЮС БАНК ,ВТВ,СОВКОМ БАНК, ВОСТОЧНЫЙ БАНК ,ПОЧТА БАНК,РЕНЕССАНС БАНК,И.Т.Д.), рассмотрение заявки в течении 10 минут. Возможен торг.
		<br>
		Петр. 	+7 902 479-99-99. Звонить с 11 утра до 6 вечера.
	</p>
</div>
<footer>
	<div class="footer__menu">
		<p> © 2019 Доска объявлений "Купи-продай" | Баринов Антон 15ИТ18  </p>
	
	<img src="/images/vkicon.png" class="footer__icon">
	<img src="/images/okicon.png" class="footer__icon">
	<img src="/images/twittericon.png" class="footer__icon">
	<img src="/images/facebookicon.png" class="footer__icon">
</div>
</footer>
</body>

</html>