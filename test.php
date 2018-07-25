<?php
/**
 * Created by PhpStorm.
 * User: 2feed
 * Date: 24.07.2018
 * Time: 20:13
 */
$start = microtime(true);
for($i=0;$i<2000;$i++) {
    file_get_contents('http://1--1.pro/speed_test.php');
}
echo "<br>";
echo 'Запрошенное число кадров= 2000 ',' Время выполнения скрипта: '.round((microtime(true) - $start),2).' сек.';
$finish_memory = memory_get_usage(true);
$visual_memory = (string) round($finish_memory/1000000,2) .'Mb';
echo "<br> Модулю выделено памяти - $visual_memory";