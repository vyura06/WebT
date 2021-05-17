
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $langconst['titleNews'];?></title>
    <link rel="stylesheet" href="menu.css">
</head>
<body>
    <div class="arrayForm">
        <h1>
            <div class="colorLang">
                <?php
                    $langconst = "";
                    include('setLanguage.php');
                ?>
            </div>
            <?php echo $langconst['textForHomePage'];?>
        </h1>
        <div class="textInPage">
                <?php echo $langconst['textInPage'];?>
        </div>
        <div class="wrapper">
            <div class="ruLang">
                <a href="home.php?lang=ru"><?php echo $langconst['ruLanguage'];?></a>
            </div>
            <div class="engLang">
                <a href="home.php?lang=en"><?php echo $langconst['enLanguage'];?></a>
            </div>
            <div class="news">
                <a href="news.php"><?php echo $langconst['titleNews'];?></a>
            </div>
        </div>
    </div>
</body>
</html>
