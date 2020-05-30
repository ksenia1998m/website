<?php
    $link = mysqli_connect("localhost", "root", "", "onlineshop");

    mysqli_set_charset($link, "utf8");

    /* проверка соединения */
    if (mysqli_connect_errno()) {
        printf("Соединение не удалось: %s\n", mysqli_connect_error());
        exit();
    }
?>