<?php
    include("../sql_connect.php");

    $params = array();

    foreach($_POST as $key=>$val){
        if($val != 1) {
            $params[$key] = $val;
        }
    }

    $i = 0;
    $len = count($params);
    $query = "";

    foreach($params as $key=>$val){
        if ($i == $len - 1) {
            $query = $query.($key."='".$val."'");
        } else {
            $query = $query.($key."='".$val."' and ");
        }
        $i++;
    }

    /* для корзины */
    if (isset($_POST['ID_good'])) {
        $ids = $_POST['ID_good'];
        $ids = ltrim($ids,'[');
        $ids = rtrim($ids,']');
        $query = "ID_good in (" . $ids . ")";
    };

    $queryGoods = "SELECT * FROM goods where ".$query;

    if ($result = mysqli_query($link, $queryGoods)) {

        if (mysqli_num_rows($result) != 0) {

            foreach ($result as $item) {
                echo '<div class="catalogue2">';
                echo '<img src="images/goods/' . $item["Images"].'.jpeg" width="300px" height="350px" />';
                echo '<p>' . $item["Name"] . '</p>';
                echo '<p>' . $item["Price"] . '</p>';
                echo '<div class="catalogue3">';
                if (isset($_POST['ID_good'])) {
                    echo '<input data-info="'.$item["ID_good"].'" class="remove-out-cart" type="submit" value="Удалить" />';
                } else {
                    echo '<input data-info="'.$item["ID_good"].'" class="add-to-cart" type="submit" value="В корзину" />';
                }
                echo '</div>';
                echo '</div>';
            };
            /* удаление выборки */
            $result = [];

        } else {
            echo '<div class="no_products"><h3>К сожалению, таких товаров нет, попробуйте еще раз..</h3></div>';
        }
    } else {
        echo '<div class="no_products"><h3>Что-то пошло не так, попробуйте выбрать параметры поиска..</h3></div>';
    }
    /* закрытие соединения */
    mysqli_close($link);
?>