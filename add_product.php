<?php
require_once ('admin/header_admin.php');

if (isset($_GET['red_id'])) { //Если передана переменная на редактирование

    require_once ('sql_connect.php');
    //Достаем запсись из БД
    $sql = mysqli_query($link,"SELECT `ID_good`, `Name`, `ID_categories`, `ID_range`, `ID_price`, `ID_brand`, `Price`, `Images`   FROM `goods` WHERE `ID_good`=" .$_GET['red_id']); //запрос к БД
    $result = mysqli_fetch_array($sql);
    /* закрытие соединения */
    mysqli_close($link);

    $edit = true;

} else {

    $edit = false;
}
?>
<br>

<div class= "add_product">
    <br>
    <?php
    if (isset($_GET['red_id'])) {
        echo "<h3>Редактирование товара</h3>";
    } else {
        echo "<h3>Добавление товара</h3>";
    }
    ?>
    <form class="js--goods-form" action="#" method="POST">
        <input type="hidden" name="is-edit" value="<?php print $edit ?>"/>
        <table>

            <tr>
                <img src = "images/1img.png" class = "menu_img" style="width: 60px; height: 60px; margin-left: 94px; ">
            </tr><br><br>
            <tr>
                <label>Номер товара</label>
                <input type="text" size="20" name="ID_good" value="<?php $edit ? print $result['ID_good'] : '' ?>" >
            </tr><br><br>

            <tr> <label>Название товара</label>
                <input type="text" size="20" name="Name"  value="<?php $edit ? print $result['Name'] : '' ?>" >
            </tr><br><br>

            <tr><label>Категория</label>
                <input type="text" size="20" name="ID_categories"  value=" <?php $edit ? print $result['ID_categories'] : '' ?>">
            </tr><br><br>

            <tr><label>Цвет</label>
                <input type="text" size="20" name="ID_range"  value="<?php $edit ? print $result['ID_range'] : '' ?>">
            </tr><br><br>

            <tr><label>Категория цены</label>
                <input type="text" size="20" name="ID_price"  value="<?php $edit ? print $result['ID_price'] : '' ?>">
            </tr><br><br>
            <tr><label>Размер</label>
                <input type="text" size="20" name="ID_brand" value="<?php $edit ? print $result['ID_brand'] : '' ?>">
            </tr><br><br>
            <tr>

            <tr><label>Цена</label>
                <input type="text" size="20" name="Price"  value="<?php $edit ? print $result['Price'] : '' ?>">
            </tr><br><br>
            <tr>
            <tr><label>Название картинки</label>
                <input type="text" size="20" name="Images"  value="<?php $edit ? print $result['Images'] : '' ?>" />
            </tr><br><br>
            <tr>
                <input type="submit"  value="OK">
            </tr>
        </table>
    </form>
</div>