<?php

if (isset($_GET['name'])) {
	setcookie($_GET['name'], null, -1);
	header("Location: lab5.php");
}

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>LAB5</title>
    <link rel="stylesheet" href="menu.css">
</head>

<body>
<div class="arrayForm">
            <form method="POST">
                <h3>Измените значение cookie</h3>
                <div class="form-row">
                    <input type="text" id="name1" name="name" required /><label for="name1">Название cookie</label><br>
                    <input type="text" id="value2" name="value" required /><label for="value2">Значение cookie</label><br><br>
                    <h2>Время действия:</h2>
                    <input type="text" id="days3" name="days" required /><label for="days3">Количество дней</label><br>
                    <input type="text" id="hours4" name="hours" required /><label for="hours4">Количество часов</label><br>
                    <input type="text" id="minutes5" name="minutes" required /><label for="minutes5">Количество минут</label><br>
                    <input type="text" id="seconds6" name="seconds" required /><label for="seconds6">Количество секунд</label><br>

                </div><br>
                <input type="submit" name="submit" value="Отправить">
                <h2>Ответ:</h2>
            </form>
</div>
</body>
    <div class="otvet">
        <?php
            if (isset($_POST['submit'])) {
                include('setcookie.php');
            }

            if (count($_COOKIE) == 0) {
                echo '<div class="fontOTVET"><br>Список cookie в настоящее время пуст!' . '</div><br><br>';
            } else {
                foreach ($_COOKIE as $key => $value) {
                    echo '<div class="fontOTVET"><a href="lab5.php?name=' . $key . '">Удалить</a>  ' . $key . " => " . $value . '</div><br>';
                }
            }
        ?>
    </div>
</html>
