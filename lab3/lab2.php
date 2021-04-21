<!DOCTYPE HTML>
<html lang="ru">
<html>

<head>
    <title>LAB2</title>
    <link rel="stylesheet" href="menu.css">
</head>

<body>
    <div class="arrayForm">
        <form method="post">
            <h3>Введите путь к каталогу</h3>
            <div class="form-row">
            <input type="text" id="path" name="your_path" required><label for="path">Ваш путь</label><br>
            </div><br>
            <input type="submit">
            <h2>Ответ:</h2>
        </form>
    </div>

    <div class="otvet">
        <?php
            if (isset($_POST['your_path'])) {
                $my_path = $_POST['your_path'];

                echo "<br> Размер директории " . getDirSize($my_path) . " байт.<br>";
                $array = getDirContents($my_path);

                echo "<table>";
                echo "<tr><td>Пути файлов</td><td>|</td><td>Размеры</td></tr>";

                if (is_array($array)) {
                    foreach ($array as $el) {
                        echo "<tr><td>$el</td><td>|</td><td>" . filesize($el) . "</td></tr>"; //путь заглушка размер
                    }
                    echo "</table>";
                } else {
                    echo "Такого пути не существует";
                }
            }

            function getDirSize($path)
            {
                $totalBytes = 0;
                $path = realpath($path);
                if ($path !== false && $path != '' && file_exists($path)) {
                    //пропуск точечных файлов
                    foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path, FilesystemIterator::SKIP_DOTS)) as $object) {
                        $totalBytes += $object->getSize();
                    }
                }
                return $totalBytes;
            }


            function getDirContents($path)
            {
                if ($path != false && $path != '' && file_exists($path)) {
                    $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path));
                    $files = array();
                    foreach ($rii as $file)
                        if (!$file->isDir()) {
                            $files[] = $file->getPathname();
                        }
                } else {
                    return 0;
                }
                return $files;
            }
        ?>
    </div>

</body>
</html>