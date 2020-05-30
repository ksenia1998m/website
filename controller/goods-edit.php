<?php

include("../sql_connect.php");

if ($_POST['is-edit'] == 1) { //Проверяем, передана ли переменная на редактирования

    $ipdate_string = '`Name` = "'.$_POST['Name'].'",'
        .'`ID_categories` = "'.$_POST['ID_categories'].'",'
        .'`ID_color` = "'.$_POST['ID_color'].'",'
        .'`ID_size` = "'.$_POST['ID_size'].'",'
        .'`ID_price` = "'.$_POST['ID_price'].'",'
        .'`Price` = "'.$_POST['Price'].'",'
        .'`Images` = "'.$_POST['Images'].'"'
        .' WHERE `ID_good` = "'.$_POST['ID_good'].'"';

    $sql = mysqli_query($link,'UPDATE goods SET'.$ipdate_string);

    if ($sql){
        echo 'Товар обновлён';
    } else {
        echo 'ошибка';
    }

} else {

    $add_string = "(`ID_good`, `Name`, `ID_categories`, `ID_color`, `ID_price`, `ID_size`, `Price`, `Images`) VALUES('"
        .$_POST['ID_good']."','"
        .$_POST['Name']."','"
        .$_POST['ID_categories']."','"
        .$_POST['ID_color']."','"
        .$_POST['ID_price']."','"
        .$_POST['ID_size']."','"
        .$_POST['Price']."','"
        .$_POST['Images']."')";

    $sql = mysqli_query($link,"INSERT INTO `goods`".$add_string);

    if ($sql){
        echo 'Товар добавлен';
    } else {
        echo 'ошибка';
    }
}

/* закрытие соединения */
mysqli_close($link);

?>