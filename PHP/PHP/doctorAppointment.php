
<?php
require "../includs/db.php";
$doctor = $_POST;
    if( isset($doctor['do_record']) )
    {

        $errors = array();
        if(trim($doctor['doctor']) == ''){
            $error[] = 'Вы не выбрали доктора.';
        }
        if(trim($doctor['time']) == ''){
            $error[] = 'Вы не указали время.';
        }
        if(trim($doctor['fio']) == ''){
            $error[] = 'Укажите ваше Ф.И.О.';
        }
        if(trim($doctor['snils']) == ''){
            $error[] = 'Введи ваш снилс';
        }
        if( R::count("recordDoctor", "time = ? ", array($doctor['time'] )) > 0 )
        {

            $errors[] = 'Занято';
        }
        if (empty($error)){
            $record = R::dispense('record'); //создать таблицу
            $record->doctor = $doctor['doctor'];
            $record->snils = $doctor['snils']; 
            $record->time = $doctor['time'];
            $record->fio = $doctor['fio'];
            R::store($record);
            echo '<div class="window"></div>';
            echo '<div class="finish">Вы успешно записались</div>';
        }else{ 
            echo '<div id="error">'.array_shift($error).'</div>';
        }
}

?>

<!DOCTYPE html>
<html>

<head>
<meta charset = "UTF-8">
	<title>Записаться к врачу</title>
	<link rel="shortcut icon" href="/images/logo.png" type="image/x-icon">
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
		<li class="menu-item drop decoration-item li-style auth__btn"><a href="servises.php">Услуги</a></li>
		<li class="menu-item decoration-item li-style auth__btn"><a href="doctorAppointment.php">Записаться к врачу</a></li>
		<li class="menu-item decoration-item li-style auth__btn"><a href="Main.php">Главная</a></li>
		<li class="menu-item decoration-item li-style auth__btn">Деятельность</li>	
		<li class="menu-item decoration-item li-style auth__btn">Обратая связь</li>

	</ul>
	
</header>
</div>
<section id="write_to_doctor">
<form action="doctorAppointment.php" method="POST" id="doctorRecord" >
<ul id="doctor-recorder">
<li>
    <select name="doctor" class="doctor">
        <option disable>Выберите врача и услугу</option></li>
        <option сlass="label-form-record" value="Терапевт - наблюдение">Терапевт - наблюдение</option>
        <option сlass="label-form-record" value="Терапевт - диагностика">Терапевт - диагностика</option>
        <option сlass="label-form-record" value="Терапевт - лечение">Терапевт - лечение</option>

        <option сlass="label-form-record" value="Лор - лор заболевания">Лор - лор заболевания</option>
        <option сlass="label-form-record" value="Лор - сурдалогия">Лор - сурдалогия</option>
        <option сlass="label-form-record" value="Лор - слухопротезирование">Лор - слухопротезирование</option>

        <option сlass="label-form-record" value="Хирург">Хирург - консультативное лечение</option>
        <option сlass="label-form-record" value="Хирург">Хирург -  оперативное лечение</option>
        <option сlass="label-form-record" value="Стационар">Запись на обслeдованиe для приeма в стационар</option>


    </select>

<li>
    <select name="time" id=""></li>
        <option disable>Выбирете время записи</option>
        <option value="10:00">10:00 </option>
        <option value="11:00">11:00 </option>
        <option value="11:30">11:30 </option>
        <option value="12:00">12:00 </option>
        <option value="14:00">14:00 </option>
        <option value="14:15">14:15 </option>
        <option value="14:50">14:50 </option>
        <option value="15:40">15:40 </option>
        <option value="16:30">16:30 </option>

    </select>


<li><input type="text" name="fio" value="" placeholder="Введите Ф.И.О."></li>

<li><input type="text" name="snils" value="" placeholder="Введите СНИЛС"></li>

<button name="do_record"  id="button-form-record" >Записаться</button>
</ul>

<!-- onclick="alert(\'Благодарим за запись в нашу поликлинику! Вы записались на прием к <?php $doctor['doctor'] ?> на <?php $doctor['time']?> \')" -->
</form>
</section>


</body>
<footer>
	<div class="footer__menu">
		<p> © 2018 Услуги городской поликлиники | Баринов Антон 15ИТ18  </p>
	
	<img src="../images/vkicon.png" class="footer__icon">
	<img src="../images/okicon.png" class="footer__icon">
	<img src="../images/twittericon.png" class="footer__icon">
	<img src="../images/facebookicon.png" class="footer__icon">
</div>
</footer>

</html>