<form name="form_login" method="post" action="?p=enter">
    <fieldset>
        <legend>Вход</legend>
        <?php
        if ($_GET["l"] != "admin")
            echo '<label> Логин <input type="text" name="login" id="login" placeholder="Логин"> </label>';
        else {
            echo "<p>Пароль администратора</p> <br>";
        }
        ?>

        <label> Пароль <input type="password" name="password" id="password" placeholder="Пароль"> </label>
        <?php
        echo '<input type="hidden" name="type" value="' . $_GET["l"] . '">';
        ?>
        <input type="submit" name="button" value="Вход">
    </fieldset>
</form>

