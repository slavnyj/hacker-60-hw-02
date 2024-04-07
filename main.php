<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HW-02, <?php echo $stream, ', ', $name, ' ', $surname; ?></title>
	<link rel="stylesheet" href="style.css" />
</head>

<body>
	<script>
		// Получаем часовой пояс пользователя
		var userTimezone = Intl.DateTimeFormat().resolvedOptions().timeZone;

		// Отправляем часовой пояс на сервер в формате AJAX
		var xhr = new XMLHttpRequest();
		xhr.open("GET", "set_timezone_cookie.php?timezone=" + encodeURIComponent(userTimezone), true);
		xhr.onreadystatechange = function () {
			if (xhr.readyState == 4 && xhr.status == 200) {
				// Получаем текущее время в формате UTC и добавляем часовой пояс пользователя
				var timeInUserTimezone = new Date(xhr.responseText + ' UTC');

				// Отображаем время на странице
				document.getElementById("time").innerHTML = "Текущее время по вашему часовому поясу (" + userTimezone + "): " + timeInUserTimezone.toLocaleString();
			}
		};
		xhr.send();
	</script>

	<div class="flex-container">

		<div class="header">
			<?php include 'logo.inc.php' ?>
			<?php include 'menu.inc.php' ?>
		</div>

		<div class="about_me">

			<h1>
				<?php echo $p ?>
			</h1>

			<div class="data">
				<div class="myImg">
					<?php echo '<img src="/img/photo.png">'; ?>
				</div>

				<div class="fullname">
					<p> Меня зовут
						<?php echo $name, ' ', $surname . '<p>';
						echo $country, ', ', 'город', ' ', $city; ?>
					</p>

					<p> Мне
						<?php echo $age; ?>
						года
					</p>
					<p> Я научилися создавать переменные </p>
					<p> Изучил простые операции с ними </p>
				</div>
			</div>

			<div class="knowledge">

				<?php include 'knowledge.inc.php'; ?>

			</div>
			<div class="time-container">
				<div class="pre-time">
					<p style="text-align: center;">Также на страницу добавлен AJAX для отображения часового пояса пользователя</p>
				</div>
				<div id="time" style="text-align: center;">
				</div>
			</div>


			<?php include 'footer.inc.php' ?>

		</div>


</body>

</html>