<html>
<head>
<title>Форма заявки с сайта</title>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
<form action="send.php" method="post">
<input placeholder="Ваше имя" type="text" name="fio" required>
<input placeholder="Ваш e-mail" type="email" name="email">
<textarea name="message" cols="50" rows="10" placeholder="Напишите ваше сообщение сюда..."></textarea>
<div class="g-recaptcha" data-sitekey="ключ сайта"></div>
<input type="submit" value="Отправить">
</form> 
</body>
</html>
