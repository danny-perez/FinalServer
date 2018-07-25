<HTML>
<head>
    <title>Get videostream IP-camers</title>
</head>
<body>
    <div style="color: RED; font-size: 18px; text-align: center;">
        Дамы и господа, леди и джентельмены! Релиз данного модуля v1.10.29 является окончательным. <br>Перед использованием, настоятельно рекомендую прочесть инструкцию
    </div><br>

    <div style="color: BLUE; font-size: 18px; text-align: left;">
        <ul>
            <li>Для визуального просмотра камеры необходимо смотреть адрес <a href="http://1--1.pro/image_streem.php" target="_blank">http://1--1.pro/image_streem.php</a></li>
            <li>Для просмотра json-кода (в формате base64) необходимо смотреть адрес <a href="http://1--1.pro/speed_test.php" target="_blank">http://1--1.pro/speed_test.php</a></li>
            <li>Для тестирования скорости запросов/ответов кадров (2000 запросов/ответов) необходимо смотреть адрес <a href="http://1--1.pro/test.php" target="_blank">http://1--1.pro/test.php</a></li>
            <li>Для получения кадра с камеры (она единственная и кадры никак не нумеруются, в формате json-ответа {data: картинка; camera: номерт камеры})
            необходимо отправить GET-запрос вида <a href="http://1--1.pro/index2.php" target="_blank">http://1--1.pro/index2.php</a> и принять сформированный JSON-ответ
            (в формате BASE64 его объем от 300Кб до 500Кб).</li>
            <li>Для изменения адреса IP-камеры существует config.php где содержится константа URL_MAIN. Адрес вводить необходимо полностью, по тому образцу который введен в данный момент.</li>
            <li>Полную документацию можно скачать в формате WORD по <a href="http://1--1.pro/PhpDoc.docx">этой</a> ссылке</li>
        </ul>
    </div>
</body>
</HTML>