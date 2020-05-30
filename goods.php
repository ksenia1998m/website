<?php
require_once ('sql_connect.php');
require_once ('admin/header_admin.php');
?>
<?php
$del = $_GET['del_id'];
if (isset($del)){
    $sql = mysqli_query($link, "DELETE FROM goods WHERE ID_good = '$del'");
    }
?>
<br><br><br>
<div class="goods">
<table class="goods_table" cellspacing='0'>
    <caption>Товары</caption>
        <span class="goods1">
                <a href="add_product.php">  <input type="submit" value="Добавить товар" name="submit" ></a>
        </span>
    <tr>
        <th>№</th>
        <th>Название товара</th>
        <th>Категория</th>
        <th>Цвет</th>
        <th>Размер</th>
        <th>Категория цены</th>
        <th>Цена(Руб.)</th>
        <th>Название картинки</th>
        <th>Удаление</th>
        <th>Ред.</th>
    </tr>
            <?php
            $sql = mysqli_query($link,"SELECT `ID_good`, `Name`, `ID_categories`, `ID_range`, `ID_price`, `ID_brand`, `Price`, `Images`   FROM `goods`");
                       while ($result = mysqli_fetch_array($sql)){
                echo '<tr>
                            <td style="font-weight:bold;  background:#ffffff;">'.$result['ID_good'].'</td>
                            <td>'.$result['Name'].'</td>
                            <td>'.$result['ID_categories'].'</td>
                            <td>'.$result['ID_range'].'</td>
                            <td>'.$result['ID_brand'].'</td>
                            <td>'.$result['ID_price'].'</td>
                            <td>'.$result['Price'].'</td>
                            <td>'.$result['Images']. '</td> 
                           <td style="background: white"><a href="?del_id='.$result['ID_good'].'"><img src = "images/delete.png"  style=" width: 25px; height: 25px"></a></td>
                           <td style="background:#ffffff"><a href="add_product.php?red_id='.$result['ID_good'].'"><img src = "images/edit.png"  style=" width: 20px; height: 20px"></a></td>
                    </tr>';
            }
            ?>
</table></div><br><br><br>