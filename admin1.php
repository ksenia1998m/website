<?php
require_once ('sql_connect.php');
require_once ('admin/header_admin.php');
?>

<br><br><br><br>
<h4 style="margin-left: 205px; margin-top: 5px";>Личный кабинет менеджера</h4>
<p style="margin-left: 205px; margin-top: 5px";>Добро пожаловать, Анна Валерьевна!</p>
    <div class = "admin">
        <div id="admin_img"><img src = "images/1img.png">  <a href="add_product.php" ><span>Добавить товар</span></a></div>
        <div id="admin_img"><img src = "images/2img.png" >     <a href="goods.php" ><span>Все товары</span></a></div>
        <div id="admin_img"><img src = "images/3img.png" >     <a href="orders.php" ><span>Заказы</span></a></div>
        <div id="admin_img"><img src = "images/4img.png" >     <a href="feedback.php" ><span>Обратная связь</span></a></div>
    </div>

