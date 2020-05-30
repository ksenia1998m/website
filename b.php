<?php
    include("sql_connect.php");
        //Если форма авторизации отправлена...
        if ( !empty($_REQUEST['password']) and !empty($_REQUEST['login']) ) {
                //Пишем логин и пароль из формы в переменные
                $login = $_REQUEST['login'];
                $password = $_REQUEST['password'];

                $query = 'SELECT*FROM authorization2 WHERE login="'.$login.'" AND password="'.$password.'"';
                $result = mysqli_query($link, $query); //ответ базы запишем в переменную $result.
                $user = mysqli_fetch_assoc($result); //преобразуем ответ из БД в нормальный массив PHP
                //Если база данных вернула не пустой ответ - значит пара логин-пароль правильная

                    if (!empty($user)) {
                            //Стартуем сессию:
                            session_start();
                            //Пишем в сессию информацию о том, что мы авторизовались:
                            $_SESSION['auth'] = true;
                            header("Location: admin2.php");
                            //Пишем в сессию логин и id пользователя (их мы берем из переменной $user!):
                            $_SESSION['ID_authorization'] = $user['ID_authorization'];
                            $_SESSION['login'] = $user['login'];
                    } else {
                        header("Location: authorization2.php");
                    }
        }
?>