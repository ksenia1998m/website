<?php
require_once ('sql_connect.php');
require_once ('header.php');
?>
<br><br><br>
<div class= "authorization">
    <br> <h3>Вход в административную панель</h3>
    <form action='b.php' method='POST'>
        <table>
            <tr>
                <img src = "images/support.png" class = "images/user.png" style="width: 60px; height: 60px; margin-left: 94px; ">
            </tr><br><br>
            <tr>
                <input type="login" size="20" name="login" placeholder="Логин" />
            </tr><br><br>
            <tr>
                <input  placeholder="Пароль"  name='password' type='password'/>
            </tr><br><br>
            <tr>
                <input type="submit" value="Отправить" name="submit" />
            </tr>
        </table>
    </form>
</div><br><br>
