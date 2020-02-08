<!DOCTYPE html>
<html>
<head>
	<title>YourHelper: Blender 2.8</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
</head>
<body>

	<header>
	<div id="header">
		<div id="logo_section">
			<a href="" id="logo_link">
				<img id="logo_img" src="images/Blender_logo.png" id="logo_image" alt="logo">
				<p id="logo_text">Blender 2.8</p>
			</a>
		</div>
		<a href="" id="log_in_section">Вход для участников</a>
	</div>
	</header>

	<div id="content">
		<form id="search_form">
			<input type="search" id="SearchField" name="SearchField" placeholder="Введите ваш вопрос..." size="10">
			<!--<input type="submit" value="Search">-->
		</form>
		<div id="help_section">
			<p id="help_title">Может быть вы знаете...</p>
			<div id="QuestionsBlock">
				<a href="" class="help_item">Как повторить последнее действие?</a>
				<a href="" class="help_item">Как скопировать объект?</a>
				<a href="" class="help_item">Как выбрать другой mesh для объекта?</a>
				<a href="" class="help_item">Как добавить Fake User к mesh?</a>
				<a href="" class="help_item">Как добавить новый объект на рабочее пространство?</a>
			</div>
		</div>
	</div>

	<footer>
		<div id="footer">
			<div id="footer_section">
				<p id="copyright">&copy;YourHelper, <?=date('Y')?></p>
				<a href="">О платформе</a>
				<a href="">Условия использования</a>
				<a href="">Политика приватности</a>
			</div>
		</div>
	</footer>
</body>
</html>
