<?php
    session_start();
    $number_1 = rand(1, 30);
    $number_2 = rand(1, 30);
    $_SESSION['rand_code'] = $number_1 + $number_2;
    $image = imagecreatetruecolor(200, 60);
    header("Content-type: image/png");
    $color = imagecolorallocate($image, 0, 0, 0 );
    $bcolor = imagecolorallocate($image, 234, 33, 11);
    imagefilledrectangle($image, 0, 0, 400, 100, $bcolor);
    $font=__DIR__.'./12.ttf';
    imagettftext ($image, 30, 0, 100, 100, $color, $font, "$number_1$number_2");   
    imagepng($image);
