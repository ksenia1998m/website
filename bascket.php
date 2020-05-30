<?php
require_once ('header.php');
?>
<br><br><br><h2>Корзина</h2><br>
    <div class="catalogue">
        <div id="filter-result">
        </div>
    </div>
<div class= "checkout">

    <form class="js--sell-form" action="" method="POST" name="">
        <input type="hidden" name="id_in_order" value="" />
        <table>
            <label>Ваше Имя</label><br>
            <tr>
                <input type="text" size="20" name="receiver_name"  required/>
            </tr><br><br>
            <label>Номер телефона</label><br>
            <tr>
                <input type="text" name="phone" list="tel-list"  required/>
            </tr><br><br>
            <label>Адрес</label><br>
            <tr>
                <input type="text" size="20" name="address"  required/>
            </tr><br><br>
            <label>Дата доставки</label><br>
            <tr>
                <input type="date"  size="20" name="date"  required/>
            </tr><br><br>
            <label>Время доставки</label><br>
            <tr>
                <input type="time" size="20" name="time"  required/>
            </tr><br><br>
            <tr>
                <input type="submit" value="Оформление заказа" name="submit" />
            </tr><br>
        </table>
    </form>

</div>


<?php
require_once ('footer.php');
?>