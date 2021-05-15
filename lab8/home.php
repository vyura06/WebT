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
    <title><?php echo $langconst['titleNews'];?></title>
</head>
<body>
<h1><?php echo $langconst['textForHomePage'];?></h1>
<a href="home.php?lang=ru"><?php echo $langconst['ruLanguage'];?></a>
<a href="home.php?lang=en"><?php echo $langconst['enLanguage'];?></a>
<br>
<a href="news.php"><?php echo $langconst['titleNews'];?></a>

</body>
</html>
