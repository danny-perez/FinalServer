<?php
/**
 * Created by PhpStorm.
 * User: 2feed
 * Date: 24.07.2018
 * Time: 18:33
 */
function parse_stream($url='http://83.241.139.197:80/mjpg/video.mjpg')
{
    $full_jpg = '';
    $camurl = $url;
    $boundary = "\n--";
    $f = fopen($camurl, "r");
    $flag = 0;
    do {
        $r = fread($f, 10000);
        $full_jpg .= $r;
        $rr = strpos($full_jpg, '--myboundary');
        if ($rr !== false) {
            $flag++;
            $full_jpg = str_replace('--myboundary', 'BREAK', $full_jpg);
        }
        if ($flag == 2) break;
    } while (true);
    //echo $full_jpg;
    fclose($f);
    //******************************************************************************************************************************************************************
    $pos_break = strrpos($full_jpg, 'BREAK');
    $file_data = substr($full_jpg, 59, $pos_break - 60);
    $f_d = trim($file_data);
    //file_put_contents('asasa.jpg', $file_data);
    //******************************************************************************************************************************************************************
    return $f_d;
}
function LoadJpeg($imgname)
{
    /* Пытаемся открыть */
    $im = @imagecreatefromjpeg($imgname);
    /* Если не удалось */
    if (!$im) {
        /* Создаем пустое изображение */
        $im = imagecreatetruecolor(150, 30);
        $bgc = imagecolorallocate($im, 255, 255, 255);
        $tc = imagecolorallocate($im, 0, 0, 0);

        imagefilledrectangle($im, 0, 0, 150, 30, $bgc);

        /* Выводим сообщение об ошибке */
        imagestring($im, 1, 5, 5, 'Ошибка загрузки ' . $imgname, $tc);
    }

// Создаём пустое изображение и добавляем текст
    imagejpeg($imgname);
    imagedestroy($imgname);
}