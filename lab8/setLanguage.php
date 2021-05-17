<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu.css">
</head>
<body>
        <?php
            session_start();

            if (!isset($_SESSION['lang'])) {
                $_SESSION['lang'] = "ru";
            } else if (isset($_SESSION['lang']) && !empty($_GET['lang'])) {
                if ($_GET['lang'] == "en") {
                    $_SESSION['lang'] = "en";
                } else {
                    $_SESSION['lang'] = "ru";
                }
            }
            $lang = $_SESSION['lang'];
            $langconst = parse_ini_file("lang_$lang.ini");

            echo "Choose language: ". $_SESSION['lang'];
        ?>
</body>
</html>

