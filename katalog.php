<?php
require_once ('header.php');
?>
    <div class="wrapper"><div class="content">
<div class = "banner"></div>
    <br>

	<form id="filter-form" name="form" method="post">
        &nbsp;<label>Категория</label>
        <select name="ID_categories">
            <?php
            include("sql_connect.php");
            $queryСategories = "SELECT * FROM сategories";
            if ($resultСategories = mysqli_query($link, $queryСategories)) {
                mysqli_set_charset($link, "utf8");
                foreach($resultСategories as $item) {
                    echo '<option value="'.$item["ID_categories"].'">'.$item["Naimenovanie"].'</option>';
                };
                /* удаление выборки */
                mysqli_free_result($resultСategories);
            } else {
                echo '<option value="1">Любой</option>';

            }
            /* закрытие соединения */
            mysqli_close($link);
            ?>
        </select>&nbsp;

        <div class="filter-line-for-mobile"></div>

        &nbsp; <label>Ассортимент</label>
        <select name="ID_range">
            <?php
            include("sql_connect.php");
                $queryRange = "SELECT * FROM range";
                if ($resultRange = mysqli_query($link, $queryRange)) {
                    mysqli_set_charset($link, "utf8");
                    foreach($resultRange as $item) {
                        echo '<option value="'.$item["ID_range"].'">'.$item["Naimenovanie"].'</option>';
                    };
                    /* удаление выборки */
                    mysqli_free_result($resultRange);
                } else {
                    echo '<option value="1">Любой</option>';
                }
                /* закрытие соединения */
                mysqli_close($link);
            ?>
        </select>&nbsp;

        <div class="filter-line-for-mobile"></div>

        &nbsp; <label>Бренд</label>
        <select name="ID_brand">
            <?php
            include("sql_connect.php");
            $queryBrand = "SELECT * FROM brand";
            if ($resultBrand = mysqli_query($link, $queryBrand)) {
                mysqli_set_charset($link, "utf8");
                foreach($resultBrand as $item) {
                    echo '<option value="'.$item["ID_brand"].'">'.$item["Naimenovanie"].'</option>';
                };
                /* удаление выборки */
                mysqli_free_result($resultRange);
            } else {
                echo '<option value="1">Любой</option>';
            }
            /* закрытие соединения */
            mysqli_close($link);
            ?>
        </select>

        <div class="filter-line-for-mobile"></div>

        &nbsp; <label>Цены</label>
        <select name="ID_Price">
            <?php
            include("sql_connect.php");
            $queryPrice = "SELECT * FROM Price";
            if ($resultPrice = mysqli_query($link, $queryPrice)) {
                mysqli_set_charset($link, "utf8");
                foreach($resultPrice as $item) {
                    echo '<option value="'.$item["ID_price"].'">'.$item["Naimenovanie"].'</option>';
                };
                /* удаление выборки */
                mysqli_free_result($resultPrice);
            } else {
                echo '<option value="1">Любой</option>';
            }
            /* закрытие соединения */
            mysqli_close($link);
            ?>
        </select>&nbsp;

        <div class="filter-line-for-mobile"></div>

        <input type="submit" value="Найти" >

    </form>
<div class="catalogue">
   <div id="filter-result">

        <?php

            include("sql_connect.php");

            $queryGoods = "SELECT * FROM goods";

            if ($result = mysqli_query($link, $queryGoods)) {
                foreach($result as $item) {
                    echo '<div class="catalogue2">';
                        echo '<img src="images/goods/'.$item["Images"].'.jpeg" width="300px" height="350px"/>';
                        echo '<p>'.$item["Name"].'</p>';
                        echo '<p>'.$item["Price"].'</p>';
                        echo '<div class="catalogue3">';
                            echo '<input data-info="'.$item["ID_good"].'" class="add-to-cart" type="submit" value="В корзину" />';
                        echo '</div>';
                    echo '</div>';
                };
                /* удаление выборки */
                mysqli_free_result($result);
            }

            /* закрытие соединения */
            mysqli_close($link)

        ?>

    </div></div></div></div>

<?php
require_once ('footer.php');
?>