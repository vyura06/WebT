
<?php
$langconst = "";
include('setLanguage.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $langconst['titleIndex'];?></title>
</head>
<body>
<h1><?php echo $langconst['textForNewsPage'];?></h1>
<a href="news.php?lang=ru"><?php echo $langconst['ruLanguage'];?></a>
<a href="news.php?lang=en"><?php echo $langconst['enLanguage'];?></a>
<br>
<a href="home.php"><?php echo $langconst['titleIndex'];?></a>

</body>
</html>

