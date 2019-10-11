<?php
if(isset($_POST['submit2'])) 
{
	$nameclient = $_POST['nameclient'];
	$telclient = $_POST['telclient'];
	
	$emailTo = 'info-polissya@meko.kiev.ua';
	$body = "Заказ сайта meko.kiev.ua:\n Ф.И.О.: $nameclient\n Номер телефона: $telclient\n ";
	$headtitle = "Заказ с сайта МЕКО";
	$headers = 'From: МЕКО <'.$emailTo.'>' . "\r\n";
	$headers .= "Content-Type: text/plain; charset=utf-8";
	mail($emailTo, $headtitle, $body, $headers);
	echo '<script>window.location.href = "done.php";</script>'; 
}
?>
<section class="contacts">
	<div class="container">
		<div class="contacts-content">
			<div class="contacts-name">
				<div class="contacts-name-title">
					<a href="index.php">Компания МЕКО</a>
				</div>
				<div class="contacts-name-content">
					Копирование, перепечатка и использование материалов сайта разрешается только по согласию администрации сайта <a href="http://meko.kiev.ua/">www.meko.kiev.ua</a>
				</div>
			</div>

			<div class="contacts-form">
				<div class="contacts-form-title">
					<p>Обратная связь</p>
				</div>			
				<div class="contacts-form-content">
					Оставьте заявку и наши менеджеры свяжутся с Вами в течении 15 минут
					<form  method="post" action="<?=$_SERVER['PHP_SELF']?>">
						<input type="text" name="nameclient" placeholder="* Имя" required>
						<input type="tel" minlength="12" maxlength="12" name="telclient" placeholder="* 380999999999" pattern="38\d{3}\d{3}\d{2}\d{2}" required>
						<p>Отправляя  данную форму, Вы соглашаетесь с <a href="politika-konfidencialnosti.php">Политикой конфиденциальности</a></p>
						<input type="submit" name="submit2" value="Отправить">
					</form>
				</div>			
			</div>
			<div class="contacts-text">
				<div class="contacts-text-title">
					<p>Контакты</p>
				</div>	
				<div class="contacts-text-content">
					<a href="tel:380980401567" class="tel-num1">+38 (098) 040-15-67</a>
					<a href="tel:380663545532" class="tel-num2">+38 (066) 354-55-32</a>
					<a href="mailto:info@meko.kiev.ua" class="mail-ft">info@meko.kiev.ua</a>
				</div>
			</div>
		</div>
	</div>
</section>