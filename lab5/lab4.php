<!DOCTYPE HTML>
<html>
<head>
    <title>LAB4</title>
    <link rel="stylesheet" href="menu.css">
</head>          
<body>

<div class="arrayForm">
        <form method="post">
            <h3>Введите количество записей для извлечения:</h3>
            <div class="form-row">
                <input type="text" id="ziph" name="count" required><label for="ziph">Введите число</label><br>
            </div><br>
            <input type="submit">
            <h2>Ответ:</h2>
        </form>
    </div>


    <div class="otvet">
        <?php
            if (isset($_POST['count'])) {
                if (intval($_POST['count']) > 0) {
                    $MySQL =  mysqli_connect("localhost", "root", "1234", "world");

                    if (!$MySQL) {
                        echo "Error: Unable to connect to MySQL." . PHP_EOL;
                        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
                        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
                        exit;
                    }
                    $SQL = "SELECT DISTINCT `name`, `population` FROM `city` ORDER BY RAND() LIMIT ".intval($_POST['count']);
                    $request = mysqli_query($MySQL, $SQL);
                    while($data = mysqli_fetch_assoc($request)){
                        echo $data['name']."\t|\t".$data['population']."<br>";
                    }
                    mysqli_close($MySQL);
                } else {
                    echo "You need > 0 nums";
                }
            }
        ?>
    </div>



</body>
</html>
