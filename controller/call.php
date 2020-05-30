<?php
    include("../sql_connect.php");

    if($_POST['receiver_name'] && $_POST['phone'] ){

        $query = mysqli_query($link, "INSERT INTO feedback(receiver_name, phone) VALUES('" .$_POST['receiver_name'] . "','" .$_POST['phone'] . "')");

        mail('test@gmail.com', 'Обратная связь', $_POST['receiver_name'] . ":" .$_POST['phone']);

        if($query){
            echo "Ожидайте звонок";

        } else {
            echo "Неудачно";
        }
    } else {
        echo "Запрос отсутствует";
    }

    mysqli_close($link);
?>


