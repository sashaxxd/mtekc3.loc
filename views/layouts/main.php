<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>" xmlns="http://www.w3.org/1999/html">
<head>
        
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <?php $this->head() ?>

</head>
<body>
<?php $this->beginBody() ?>
<!-- Шапка -->
<div id="mtex_LayoutGrid1">
    <div id="LayoutGrid1">
        <div class="row">
            <div class="col-1">
                <div id="mtex_Image1">
                    <a href="<?= \yii\helpers\Url::home()?>"><?= Html::img("@web/images/bg1.jpg", ['alt' => 'Магазин Мтекс', 'id' => 'Image1'])  ?></a>
                </div>
            </div>
            <div class="col-2">
                <div id="mtex_LayoutGrid3">
                    <div id="LayoutGrid3">
                        <div class="row">
                            <div class="col-1">
                                <div id="mtex_Text2">
                                    <span id="mtex_uid0"><strong>ТКАНИ наполнители в Волгограде</strong>, Мтекс.РФ, улица Германа Титова, 20, Волгоград, Россия </span><span id="mtex_uid1"><br></span><span id="mtex_uid2"><strong>Viber +79375542095&nbsp;&nbsp; WhatsApp +79054333533</strong></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="mtex_LayoutGrid2">
                    <div id="LayoutGrid2">
                        <div class="row">
                            <div class="col-1">
                            </div>
                            <div class="col-2">
                                <div id="mtex_FontAwesomeIcon2">
                                    <a href="https://www.instagram.com/mtekc/"><div id="FontAwesomeIcon2"><i class="fa fa-instagram">&nbsp;</i></div></a>
                                </div>
                                <div id="mtex_FontAwesomeIcon1">
                                    <a href="https://vk.com/mtekc"><div id="FontAwesomeIcon1"><i class="fa fa-vk">&nbsp;</i></div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="mtex_LayoutGrid6">
    <div id="LayoutGrid6">
        <div class="row">
            <div class="col-1">
            </div>
        </div>
    </div>
</div>

<!-- Поиск и регистрация -->
<div id="mtex_LayoutGrid4">
    <div id="LayoutGrid4">
        <div class="row">

            <form method="get" action="<?= \yii\helpers\Url::to(['search/index'])?>" >
            <div class="col-1">
                <input type="text" id="Editbox1" name="s" value="" placeholder="ПОИСК ПО САЙТУ">
            </div>
            <div class="col-2">
                <input type="submit" id="Button1" name="" value="Найти">
            </div>
            </form>

            <div class="col-3">
                <div id="mtex_ResponsiveMenu1">
                    <ul class="ResponsiveMenu1" id="ResponsiveMenu1">
                        <?php if(Yii::$app->user->isGuest): ?>
                        <li><a href="<?= \yii\helpers\Url::to(['auth/login'])?>"><i class="fa fa-user fa-2x">&nbsp;</i><br>
                                Вход
                                </a></li>
                        <?php endif; ?>
                        <?php if(!Yii::$app->user->isGuest): ?>
                            <li><a href="<?= \yii\helpers\Url::to(['auth/logout'])?>"><i class="fa fa-user fa-2x">&nbsp;</i><br>
                                    Выход <?= Yii::$app->user->identity->email ?>
                                </a></li>
                        <?php endif; ?>
                        <li><a href="<?= \yii\helpers\Url::to(['auth/signup'])?>"><i class="fa fa-lock fa-2x">&nbsp;</i><br>Регистрация</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['cart/add'])?>" class="her" data-id="cart"><i class="fa fa-shopping-basket fa-2x">&nbsp;</i><br>Корзина</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="mtex_LayoutGrid7">
    <div id="LayoutGrid7">
        <div class="row">
            <div class="col-1">
            </div>
        </div>
    </div>
</div>
<!-- Меню сайта -->
<div id="mtex_LayoutGrid5">
    <div id="LayoutGrid5">
        <div class="row">
            <div class="col-1">
                <div id="mtex_ResponsiveMenu2">
                    <label class="toggle" for="ResponsiveMenu2-submenu" id="ResponsiveMenu2-title">МЕНЮ<span id="ResponsiveMenu2-icon"><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span></span></label>
                    <input type="checkbox" id="ResponsiveMenu2-submenu">
                    <ul class="ResponsiveMenu2" id="ResponsiveMenu2">
                        <li><a href="<?= \yii\helpers\Url::home()?>">ГЛАВНАЯ</a></li>
                        <li><a href="#">О МАГАЗИНЕ</a></li>
                        <li><a href="#">КОНТАКТ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Контент -->
<?= $content ?>
<!-- /Контент -->


<!-- Футер -->
<div id="mtex_LayoutGrid12">
    <div id="LayoutGrid12">

        <div class="row">
            <div class="col-1">
            </div>
            <div class="col-2">
                <div id="mtex_Text14">
                    <span id="mtex_uid23">Категории товаров</span>
                </div>
                <div id="mtex_BulletedList1">
                    <div>
                        <div class="bullet" id="mtex_uid24">&#9632;</div>
                        <div class="item item0"><span id="mtex_uid25">Хлопок</span></div>
                    </div>
                    <div id="mtex_uid26">
                        <div class="bullet" id="mtex_uid27">&#9632;</div>
                        <div class="item item1"><span id="mtex_uid28">Шерсть</span></div>
                    </div>
                    <div id="mtex_uid29">
                        <div class="bullet" id="mtex_uid30">&#9632;</div>
                        <div class="item item2"><span id="mtex_uid31">Лень</span></div>
                    </div>
                    <div id="mtex_uid32">
                        <div class="bullet" id="mtex_uid33">&#9632;</div>
                        <div class="item item3"><span id="mtex_uid34">Другие ткани</span></div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div id="mtex_Text24">
                    <span id="mtex_uid35">Контакты</span>
                </div>
                <div id="mtex_Text25">
                    <span id="mtex_uid36">Волгоград Ул. Титова, д 20 Отправка пo всему миру! Заказы в Директ, Viber / W-p +79054333533</span>
                </div>
            </div>
            <div class="col-4">
            </div>
        </div>
    </div>
</div>
<div id="mtex_LayoutGrid13">
    <div id="LayoutGrid13">
        <div class="row">
            <div class="col-1">
                <div id="mtex_Text15">
                    <span id="mtex_uid37"><strong>Copyright © 2017. Все права защищены. </strong><br></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Футер -->

<!-- Модальное окно -->
<?php
\yii\bootstrap\Modal::begin([
    'header' => '<div class="cartmod"><h2>Корзина</h2></div>',
    'id' => 'cart',
    'size' => 'modal-lg',
    'footer' => '<button type="button" id="Button_cart" class="btn" data-dismiss="modal">Продолжить покупки</button>
        <a href="' . \yii\helpers\Url::to(['cart/view']) . '" id="Button_cart" class="btn">Оформить заказ</a>
        <button type="button" id="Button_cart" class="btn" onclick="clearCart()">Очистить корзину</button>'
]);

\yii\bootstrap\Modal::end();
?>
<!-- /Модальное окно -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>