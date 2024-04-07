<!DOCTYPE html>
<html>

<head>
	<title>Мои скиллы</title>
	<link rel="stylesheet" type="text/css" href="skills.css">
</head>

<body>
	<div class="container">
		<h1>Мои знания</h1>

		<?php
		// Различные типы переменных
		$skill_programming = array(
			"name" => "Программирование",
			"description" => "Я занимаюсь программированием уже более 14 лет."
		);

		$skill_design = array(
			"name" => "Дизайн",
			"description" => "У меня есть талант к дизайну, и я всегда стремлюсь к созданию привлекательных и функциональных интерфейсов."
		);

		$skill_communication = array(
			"name" => "Коммуникация",
			"description" => "Я отлично взаимодействую с коллегами и клиентами, обладаю хорошими навыками коммуникации и всегда готов помочь в решении проблем."
		);

		$skill_team_player = true;

		$skill_problem_solver = true;

		$experience_years = 14;

		$projects_completed = 40;

		// Вывод скиллов на страницу с использованием условий
		?>
		<div class="skill">
			<h2>
				<?php echo $skill_programming['name']; ?>
			</h2>
			<p>
				<?php echo $skill_programming['description']; ?>
			</p>
		</div>

		<div class="skill">
			<h2>
				<?php echo $skill_design['name']; ?>
			</h2>
			<p>
				<?php echo $skill_design['description']; ?>
			</p>
		</div>

		<div class="skill">
			<h2>
				<?php echo $skill_communication['name']; ?>
			</h2>
			<p>
				<?php echo $skill_communication['description']; ?>
			</p>
		</div>

		<?php if ($skill_team_player): ?>
			<div class="skill">
				<h2>Тимплейер</h2>
				<p>Я являюсь настоящим тимплейером и всегда готов поддержать команду в достижении общих целей.</p>
			</div>
		<?php endif; ?>

		<?php if ($skill_problem_solver): ?>
			<div class="skill">
				<h2>Решение проблем</h2>
				<p>Я люблю решать сложные задачи и находить креативные способы достижения целей. Всякий раз, когда появляется
					препятствие, я готов к нему преодолеть.</p>
			</div>
		<?php endif; ?>

		<div class="skill">
			<h2>Опыт</h2>
			<p>Мой опыт разработки составляет
				<?php echo $experience_years; ?> лет.
			</p>
		</div>

		<div class="skill">
			<h2>Завершенные проекты</h2>
			<p>За время работы я завершил более
				<?php echo $projects_completed; ?> проектов.
			</p>
		</div>
	</div>
</body>

</html>