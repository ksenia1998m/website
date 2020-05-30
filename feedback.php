<?php
require_once ('sql_connect.php');
require_once ('admin/header_admin.php');
?>
<br><br><br>
<div class="goods">
    <table class="goods_table" cellspacing='0'>
        <caption>Обратная связь</caption>
        <tr>
            <th>№</th>
            <th>Имя клиента</th>
            <th>Телефон</th>
        </tr>
        <?php
        $sql = mysqli_query($link,"SELECT `ID_feedback`, `receiver_name`, `phone` FROM `feedback`");
        while ($result = mysqli_fetch_array($sql)){
            echo '<tr>
                            <td style="font-weight:bold;  background:#ffffff;">'.$result['ID_feedback'].'</td>
                            <td>'.$result['receiver_name'].'</td>
                            <td>'.$result['phone'].'</td>                 
                    </tr>';
        }
        ?>
    </table></div><br><br><br><br><br><br>
