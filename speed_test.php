<?php
/**
 * Created by PhpStorm.
 * User: 2feed
 * Date: 24.07.2018
 * Time: 18:35
 */
    require_once ("function.php");
        //***************************************************************************************************************************************************
        $data_img = parse_stream();
        $res['data'] = base64_encode($data_img);
        $res['camera'] = 1;
    $ex = json_encode($res);
    $modify_time = filemtime('speed_test.php');
    header("Last-Modified: " . gmdate("Fri, 20 Jul 2018 07:08:00", $modify_time) . " GMT");
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Method: Get');
    header('Content-Type:application/json;');
    echo $ex;

        //***************************************************************************************************************************************************