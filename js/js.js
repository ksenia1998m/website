window.onload = function(){

    //-----------Корзина-----------------------------------------

    var oldGoodsId = [];
    if (localStorage.getItem('bascket')) {
        //Берем данные из локасторедж
        oldGoodsId = JSON.parse(localStorage.getItem('bascket'));
        //высвечиваем количество товаров в шапке
        oldGoodsId.length > 0 ? jQuery('.goods-in-basket').html(oldGoodsId.length) : '';
        //определение если есть на странице форма оформления заказа
        if(jQuery('.js--sell-form').length){
            //Запрашиваем в базе инфу о товарах
            jQuery.ajax({
                type: 'POST',
                url: 'controller/filter.php',
                data: {ID_good: localStorage.getItem('bascket')},
                success:function(response){
                    //Орисовываем товары
                    jQuery('#filter-result').html(response);
                },
                error:function(response){
                    //Выводим ошибку
                    alert('error, response - ' + response);
                }
            });
            //Нажатие кнопки оформить заказ
            jQuery('.js--sell-form').submit(function() {
                //Берем данные из локасторедж
                jQuery(this).find('input[name="id_in_order"]').val(JSON.parse(localStorage.getItem('bascket')));
                //Отправляет заказ в базу
                jQuery.ajax({
                    type: 'POST',
                    url: 'controller/order.php',
                    data: $(this).serialize(),
                    success: function (response) {
                        //Получив ответ от базы удаляем товары со страницы и из локалсторедж
                        jQuery('#filter-result').html(response);
                        localStorage.setItem('bascket', JSON.stringify([]));
                        //Очишаем количество в шапке
                        jQuery('.goods-in-basket').html(' ');
                    },
                    error: function (response) {
                        //Выводим ошибку
                        alert('Ошибка - ' + response);
                    }
                });
                return false;
            });
        }
    }

    //Добавление товара в корзину
    jQuery('body').on( "click", ".add-to-cart", function() {

        var newGoodId = jQuery(this).data('info');

        if (!localStorage.getItem('bascket')) {
            localStorage.setItem('bascket', JSON.stringify([newGoodId]));
        } else {
            oldGoodsId.push(newGoodId);
            var oldGoodsIdUp = [];
            jQuery.each(oldGoodsId, function(i, el){
                if($.inArray(el, oldGoodsIdUp) === -1) oldGoodsIdUp.push(el);
            });
            localStorage.setItem('bascket', JSON.stringify(oldGoodsIdUp));
            jQuery('.goods-in-basket').html(oldGoodsIdUp.length);
            alert('Товар добавлен в корзину!');
        }
    });

    //Удаляем товар из корзины
    jQuery('body').on( "click", ".remove-out-cart", function() {

        var removeGoodId = jQuery(this).data('info');
        var parentOfGood = jQuery(this).parents('.catalogue2');

        if (!localStorage.getItem('bascket')) {
            alert('Что-то пошло не так, попробуйте позже');
        } else {
            oldGoodsId = JSON.parse(localStorage.getItem('bascket'));
            var oldGoodsIdUp = [];
            jQuery.each(oldGoodsId, function(i, el){
                if(el !== removeGoodId ) oldGoodsIdUp.push(el);
            });
            localStorage.setItem('bascket', JSON.stringify(oldGoodsIdUp));
            jQuery('.goods-in-basket').html(oldGoodsIdUp.length);
            parentOfGood.remove();
            alert('Товар удалён из корзины!');
        }
    });

    //-----------End Корзина-----------------------------------------

    //-----------Фильтры---------------------------------------------

    jQuery('#filter-form').submit(function() {
        jQuery.ajax({
            type:'POST',
            url:'controller/filter.php',
            data: $(this).serialize(),
            success:function(response){
                jQuery('#filter-result').html(response);
            },
            error:function(response){
                alert('error, response - ' + response);
            }
        });
        return false;
    });

    //-----------Добавление и редактирование товара-------------------------

    jQuery('.js--goods-form').submit(function() {
        jQuery.ajax({
            type:'POST',
            url:'controller/goods-edit.php',
            data: $(this).serialize(),
            success:function(response){
                location.href='goods.php';
            },
            error:function(response){
                alert('error, response - ' + response);
            }
        });
        return false;
    });

    //-----------Обратная связь---------------------------------------------

    jQuery('.js--call-form').submit(function() {
        jQuery.ajax({
            type:'POST',
            url:'controller/call.php',
            data: $(this).serialize(),
            success:function(response){
                alert('Спасибо за обращение! Мы скоро вам перезвоним.');
                window.location.href = 'index.php';
            },
            error:function(response){
                alert('error, response - ' + response);
            }
        });
        return false;
    });

    //-----------меню---------------------------------------------

    document.querySelector('.menu_img').onclick = click_menu;
    function click_menu(){
        if (document.querySelector('#menu').style.left == '-300px')
        {
            document.querySelector('#menu').style.left = 0;
        }
        else
            document.querySelector('#menu').style.left = '-300px';
        return false;
    }

    //-----------Корзина---------------------------------------------

    document.querySelector('.basket_img').onclick = click_basket;
    function click_basket(){
        if (document.querySelector('#basket').style.right == '-500px')
        {
            document.querySelector('#basket').style.right = 0;
        }
        else
            document.querySelector('#basket').style.right = '-500px';
        return false;
    }

    //-----------Слайдер---------------------------------------------

    jQuery('#slick').slick({
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        speed: 1600
    })

    //-----------Слайдер категории---------------------------------------------

    jQuery('#slickDouble').slick({
        centerPadding: '5px',
        slidesToShow: 3,
        centerMode: true,
        autoplay: true,
        autoplaySpeed: 2000,
        speed: 1500

    });








}





