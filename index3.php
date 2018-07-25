<?php
require ('index.php');
require ('index2.php');
header('Content-Type: image/jpeg');

    $img = parse_stream();
    file_put_contents('001.jpg', $img);
    LoadJpeg('001.jpg');
