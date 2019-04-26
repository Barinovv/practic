
<?php
require "../includs/db.php";
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

<?php
			if( isset($_SESSION['logged_user'])) : ?>
			<p style = "color: black;">	Авторизован, <?php echo $_SESSION['logged_user']->email;?></p>
			<a href="logout.php"> Выйти </a>
			<?php else : ?>
			<li><a href="login.php">Вход</a></li>
			<li><a href="signup.php">Регистрация</a></li>
		<?php endif ; ?>

</div>
<div class="width">
<header>

	<ul class="menu">

		<li class="menu-item decoration-item li-style auth__btn"><a href="advertisement.php" style="color: black">Подать объявление</a></li>
		<li class="menu-item decoration-item li-style auth__btn"><a href="session-index.php" style="color: black">Свежие объявления</a></li>
		<?php
			if( isset($_SESSION['logged_user'])) : ?>
		<li class="menu-item decoration-item li-style auth__btn" style="color: black">Мои объявления</li>	
			<?php else : ?>
		<li class="menu-item drop decoration-item li-style auth__btn"><a href="automobile.php" style="color: black">Категории</a></li>
		<?php endif ; ?>
		<li class="menu-item decoration-item li-style auth__btn" style="color: black">Обратая связь</li>

	</ul>
	
</header>
</div>
<section id="maina">
	<div class="blocks">
		
				<?php
				$host="localhost";
				$user="root";
				$pass=""; 
				$db_name="UsersAndBackboard";
				$link=mysql_connect($host,$user,$pass);
				mysql_select_db($db_name,$link);
				$sql ="SELECT * FROM blackboard WHERE id = 1";
				$result = mysql_query($sql) or trigger_error(mysql_error()." in ". $sql);
				$row = mysql_fetch_array($result);
        		echo $row['title']."<br>".$row['description']."<br>".$row['characteristics'];
			?>
		</div>
	</section>
	<section id="maina">
	<div class="blocks">
		
				<?php
				$host="localhost";
				$user="root";
				$pass=""; 
				$db_name="UsersAndBackboard";
				$link=mysql_connect($host,$user,$pass);
				mysql_select_db($db_name,$link);
				$sql ="SELECT * FROM blackboard WHERE id = 2";
				$result = mysql_query($sql) or trigger_error(mysql_error()." in ". $sql);
				$row = mysql_fetch_array($result);
        		echo $row['title']."<br>".$row['description']."<br>".$row['characteristics'];
			?>
		</div>
	</section>
	<section id="maina">
	<div class="blocks">
		
				<?php
				$host="localhost";
				$user="root";
				$pass=""; 
				$db_name="UsersAndBackboard";
				$link=mysql_connect($host,$user,$pass);
				mysql_select_db($db_name,$link);
				$sql ="SELECT * FROM blackboard WHERE id = 3";
				$result = mysql_query($sql) or trigger_error(mysql_error()." in ". $sql);
				$row = mysql_fetch_array($result);
        		echo $row['title']."<br>".$row['description']."<br>".$row['characteristics'];
			?>
		</div>
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