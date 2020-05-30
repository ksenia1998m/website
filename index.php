<?php
require_once ('header.php');
?>
<!-----------------Обратная связь--------------------->
<div class="call">
    <a href="back_call.php"><img src = "images/img5.png" class="call"></a>
</div>

<!-----------------Слайдер--------------------->
<div id='slick'>
    <div><img src = "images/slider/img01.jpg" style="max-width:100%" /></div>
    <div><img src = "images/slider/img10.jpg" style="max-width:100%" /></div>
    <div><img src = "images/slider/img11.jpg" style="max-width:100%" /></div>
</div>
<br><br><br>

<!-----------------Слайдер с категориями--------------------->

<div class="slider">
    <h2>Ассортимент</h2><br><br>
    <div id='slickDouble'>
        <a href="katalog.php"><div class="example2"><img src = "images/categories/img1.jpg" style="max-width:80%"><span>Собаки</span></div></a>
        <a href="katalog.php"><div class="example2"><img src = "images/categories/img2.jpg" style="max-width:80%"><span>Кошки</span></div></a>
            <a href="katalog.php"><div class="example2"><img src = "images/categories/img3.jpg" style="max-width:80%"><span>Грызуны</span></div></a>
                <a href="katalog.php"><div class="example2"><img src = "images/categories/img4.jpg" style="max-width:80%"><span>Рыбки</span></div></a>
                    <a href="katalog.php"><div class="example2"><img src = "images/categories/img5.jpg" style="max-width:80%"><span>Птицы</span></div></a>
                        <a href="katalog.php"><div class="example2"><img src = "images/categories/img6.jpg" style="max-width:80%"><span>Ветаптека</span></div></a>
    </div>
</div>
<br>

<!-----------------Информация о нас--------------------->
<div class = "Company_info">
    <h2>О нас</h2>
    <div id = "logo" >
        <img src = "images/5.jpg" >
    </div>
    <div class = "info">
        <p style="margin-top: -52px;">Более 5 лет мы заботимся о полноценной жизни питомцев, чтобы их жизнь была здоровой, долгой, радостной и гармоничной. Наш долг - создавать лучшее предложение, поддерживая вас и ваших домашних любимцев.

            Команда ЗооМир любит животных, практически у каждого из нас есть свои собаки, кошки, хомяки, кролики, морские свинки, шиншилы, хорьки, попугаи, рыбки...

        </p>
        <p style="margin-top: 1px;"> Мы ценим дружескую обстановку и отношения, основанные на взаимном уважении. </p>

        <p style="margin-top: 1px;">  Мы стремимся к тому, чтобы наш сайт позволил удобно совершать покупки и предоставлял массу полезной информации. </p>

        <p style="margin-top: 1px;"> Мы готовы делиться опытом и интересными новостями. </p>

        <p style="margin-top: 1px;"> Мы всегда выполняем свои обязательства и рады сотрудничать с новыми партнерами!
        </p>
    </div>
</div>	<br><br>
<div class= "line">
    <br> <h3>Есть вопросы? <br> Мы перезвоним через 10 минут!</h3>
    <form class="js--call-form" action="controller/call.php" method="POST" name="">
        <table>
            <tr>
                <input type="text" size="20" name="receiver_name" placeholder="Ваше Имя" required/>
            </tr>
            <tr>
                <input type="tel" name="phone" list="tel-list" placeholder="Телефон" required/>
            </tr>
            <tr>
             <input type="submit" value="Заказать обратный звонок" name="submit" />
            </tr>
        </table>
    </form>
</div><br><br>
<!-----------------Информация о доставке--------------------->
<div class = "Company_info">
    <h2>Доставка</h2><br>
    <div class = "info1">
        <p>Мы осуществляем круглосуточную доставку по г. Москве в течение 2-х часов с момента заказа без дополнительной платы.
            Также имеется услуга «Бесконтактная доставка», в рамках которой получатель не контактирует с курьером. Доставляемые товары остаются перед входной дверью.
        </p>
    </div>
    <div class="delivery_img">
        <img src = "images/dos.jpg"/>
    </div>
</div>	<br>
<!-----------------Информация о компании--------------------->
<div class="wrap">
<div class="wrap1">
    <h2>Наши преимущества</h2><br>
    <div class="bblock">
        <div class="bblock1"><img src = "images/Our_advantage/img1.png" /></div>
        <p>Работаем  24 часа</p>
    </div>



    <div class="bblock">
        <div class="bblock1"><img src = "images/Our_advantage/img3.png" /></div>
        <p>Всегда проверенные <br> товары</p>
    </div>

    <div class="bblock">
        <div class="bblock1"><img src = "images/Our_advantage/img4.png" /></div>
        <p>Оплата наличными <br> или картой</p>
    </div>

    <div class="bblock">
        <div class="bblock1"><img src = "images/Our_advantage/img5.png" /></div>
        <p>Доставляем <br> к точному времени</p>
    </div>

    <div class="bblock">
        <div class="bblock1"><img src = "images/Our_advantage/img6.png" /></div>
        <p>Бесплатная доставка</p>
    </div>
</div>
<!----------------Корзина--------------------->
<div>
    <img src = "images/close.png" class="close_img" />
</div>
</div>


<?php
require_once("footer.php");
?>
