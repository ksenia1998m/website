<?php
include("../sql_connect.php");

if($_POST['receiver_name'] && $_POST['phone'] && $_POST['id_in_order']){

    $query = mysqli_query($link, "INSERT INTO ordering(receiver_name, phone, id_in_order, address, date, time) VALUES('" .$_POST['receiver_name'] . "','" .$_POST['phone'] . "'  ,'" .$_POST['id_in_order'] . "','" .$_POST['address'] . "' ,'" .$_POST['date'] . "','" .$_POST['time'] . "' )");

    /*mail('test@gmail.com', 'Новый заказ', $_POST['receiver_name'] . ":" .$_POST['phone']);*/

    if($query){
        echo "<h3 style='text-align: center'>Заказ принят!</h3>";
    } else {
        echo "Неудачно";
    }
} else {
    echo "Запрос отсутствует";
}

mysqli_close($link);
?>