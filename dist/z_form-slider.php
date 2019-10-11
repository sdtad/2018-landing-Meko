<?php
if(isset($_POST['submit3'])) 
{
	$nameclient = $_POST['nameclient'];
	$telclient = $_POST['telclient'];
	$emailclient = $_POST['emailclient'];	
	
	$emailTo = 'info-polissya@meko.kiev.ua';
	$body = "Заказ сайта meko.kiev.ua:\n Ф.И.О.: $nameclient\n Номер телефона: $telclient\n E-mail: $emailclient\n";
	$headtitle = "Заказ с сайта МЕКО";
	$headers = 'From: МЕКО <'.$emailTo.'>' . "\r\n";
	$headers .= "Content-Type: text/plain; charset=utf-8";
	mail($emailTo, $headtitle, $body, $headers);
	echo '<script>window.location.href = "done.php";</script>'; 
}
?>
<form  method="post" action="<?=$_SERVER['PHP_SELF']?>">
	<input type="text" name="nameclient" placeholder="* Имя" required>
	<input type="text" name="emailclient" placeholder="* E-mail" required>
	<input type="tel" minlength="12" maxlength="12" name="telclient" placeholder="* 380999999999" pattern="38\d{3}\d{3}\d{2}\d{2}" required>
	<input type="submit" name="submit3" value="Узнать цену">
</form>
