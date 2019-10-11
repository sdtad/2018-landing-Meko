<?php
if(isset($_POST['submit'])) 
{
	$nameclient = $_POST['nameclient'];
	$telclient = $_POST['telclient'];
	$messageclient = $_POST['messageclient'];
	
	$emailTo = 'info-polissya@meko.kiev.ua';
	$body = "Заказ сайта meko.kiev.ua:\n Ф.И.О.: $nameclient\n Номер телефона: $telclient\n Вопрос клиента: $messageclient\n";
	$headtitle = "Заказ с сайта МЕКО";
	$headers = 'From: МЕКО <'.$emailTo.'>' . "\r\n";
	$headers .= "Content-Type: text/plain; charset=utf-8";
	mail($emailTo, $headtitle, $body, $headers);
	echo '<script>window.location.href = "done.php";</script>'; 
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="http://meko.kiev.ua/favicon.ico" type="image/x-icon">	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="index, follow">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Заказать продукцию/звонок - MEKO</title>
	<meta name="keywords" content="">
	<meta name="description" content="Заказать продукцию/звонок. Качественно ✓ Долговечно ✓ В срок. ☎ (098)040-15-67. Обращайтесь!">
	<link rel="stylesheet" href="http://meko.kiev.ua/css/reset.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="http://meko.kiev.ua/css/fonts.css">
	<link rel="stylesheet" href="http://meko.kiev.ua/css/slick.css"/>
	<link rel="stylesheet" href="http://meko.kiev.ua/css/style.css">
	<link rel="stylesheet" href="http://meko.kiev.ua/css/media.css">	
</head>
<body>

<?php include 'z_header.php'; ?>
<?php include 'z_slider.php'; ?>

<section class="about">
	<div class="container">
		<div class="about-title">
			<h1>Заказать продукцию/звонок</h1>
		</div>
		<div class="about-content">
			<div class="zakaz-form">
				<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
					<input type="text" name="nameclient" placeholder="* Ваше имя" required>
					<input type="tel" minlength="12" maxlength="12" name="telclient" placeholder="* 380999999999" pattern="38\d{3}\d{3}\d{2}\d{2}" required>
					<textarea name="messageclient" placeholder="Ваше сообщение"></textarea>
					<p>Отправляя  данную форму, Вы соглашаетесь с <br><a href="politika-konfidencialnosti.php">Политикой конфиденциальности</a></p>
					<input type="submit" name="submit" value="Отправить">
				</form>
			</div>
		</div>		
	</div>
</section>

<?php include 'z_advantages.php'; ?> 
<?php include 'z_contacts.php'; ?>
<?php include 'z_footer.php'; ?>
</body>
</html>