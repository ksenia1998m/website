<?php
require_once ('sql_connect.php');
require_once ('admin/header_admin.php');
?>
<br><br><br>
<div class="goods">
    <table class="goods_table" cellspacing='0'>
        <caption>Заказы</caption>
        <tr>
            <th>№ заказа</th>
            <th>Имя получателя</th>
            <th>Телефон</th>
            <th>Адрес доставки</th>
            <th>Дата доставки</th>
            <th>Время доставки</th>
            <th>Товары</th>
            <th>Статус заказа</th>
        </tr>

        <?php
        $sql = mysqli_query($link,"SELECT `ID_ordering`, `receiver_name`, `phone`, `address`, `date`, `time`, `id_in_order`   FROM `ordering`");
        while ($result = mysqli_fetch_array($sql)){

            echo '<tr>
                            <td style="font-weight:bold;  background:#ffffff;">'.$result['ID_ordering'].'</td>
                            <td>'.$result['receiver_name'].'</td>
                            <td>'.$result['phone'].'</td>
                            <td>'.$result['address'].'</td>
                            <td>'.$result['date'].'</td>
                            <td>'.$result['time'].'</td>
                            <td>'.$result['id_in_order'].'</td>
                  <td ><select style="font-size: 18px;"><option>...</option><option>Принят</option><option>Обработан</option><option>Собран</option><option>В пути</option><option>Доставлен</option></select></td>    
                    </tr>';

        }


        ?>
    </table></div>


