<?php 

	$result = mail("dimakraft91@mail.ru","Поездка к шлюхам","С сайта была получены данные от клиента: \nИмя: $_POST[name] \nКонтактный телефон: $_POST[phone] \nАдрес клиента: $_POST[address] \nПроблема клиента: $_POST[text]");

	 if ($result) {
	 echo "<p>Сообщение отравленно успешно!</p>";
	 }

	 else {
	 echo "<p>Сообщение не отправленно!</p>";
	 }

	 


 ?>