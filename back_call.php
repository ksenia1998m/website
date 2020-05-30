<?php
require_once ('sql_connect.php');
require_once ('header.php');
?>
<br><br><br>
<div class= "line1">
    <br> <h3>Есть вопросы? <br> Мы перезвоним через 10 минут!</h3>
    <form class="js--call-form" action="controller/call.php" method="POST">
        <table>
            <tr>
                <img src = "images/support.png" class = "menu_img" style="width: 60px; height: 60px; margin-left: 94px; ">
            </tr><br><br>
            <tr>
                <input type="text" size="20" name="receiver_name" placeholder="Ваше Имя" />
            </tr><br><br>
            <tr>
                <input type="tel" name="phone" list="tel-list" placeholder="Телефон" />
            </tr><br><br>
            <tr>
                <input type="submit" value="Заказать обратный звонок" name="submit" />
            </tr>
        </table>
    </form>
</div><br><br>
