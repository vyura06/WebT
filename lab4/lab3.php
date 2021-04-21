<!DOCTYPE HTML>
<html lang="ru">
<html>

<head>
    <title>LAB3</title>
    <link rel="stylesheet" href="menu.css">
</head>

<body>
    <div class="arrayForm">
        <form method="post">
            <h3>Введите текст</h3>
            <div class="form-row">
                <textarea placeholder="Введите текст" name="comment" required></textarea><br>  
            </div><br>
            <input type="submit">
            <h2>Ответ:</h2>
        </form>
    </div>
 
    <div class="otvet">
        <?php
            if(isset($_POST['comment'])){
                $text = " ".$_POST['comment']." ";
                echo '<div class="fontOTVET">'.$text .'</div><br>';
                $text = preg_replace('/([^>]?[A-ZА-ЯЁ][a-zа-яё]*)/u', " <span class=\"green\">$0</span> ", $text);
                $text = preg_replace('/([0-9]+[.,][0-9]{1})\d*/u', " <span class=\"red\">$1</span> ", $text);
                $text = preg_replace('/([^A-ZА-ЯЁa-zа-яё.][0-9]+[ ])/u', " <span class=\"blue\">$0</span> ", $text);
                echo '<div class="fontOTVET">'.$text .'</div>';
            }
        ?>
    </div>

</body>
</html>