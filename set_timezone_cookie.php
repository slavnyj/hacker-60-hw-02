<?php
// Устанавливаем временную зону по UTC
date_default_timezone_set('UTC');

// Получаем текущее время в формате UTC
$current_time_utc = gmdate('Y-m-d H:i:s');

// Отправляем текущее время в формате UTC обратно на страницу
echo $current_time_utc;
?>