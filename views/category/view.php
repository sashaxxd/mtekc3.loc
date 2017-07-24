<?php

use yii\helpers\Html;


?>
<div id="mtex_LayoutGrid8">
    <div id="LayoutGrid8">
        <div class="row">
            <!-- Меню категорий -->
            <div class="col-1">
                <div id="mtex_PanelMenu1">
                    <a href="#PanelMenu1_markup" id="PanelMenu1">КАТАЛОГ</a>
                    <div id="PanelMenu1_markup">
                        <!-- Вызов виджета меню -->
                        <ul class="catalog">
                            <?= \app\components\MenuWidget::widget(['tpl' => 'menu'])?>
                        </ul>

                    </div>
                </div>
            </div>
            <!-- Конец меню категорий -->
            <div class="col-2">
                <div id="mtex_LayoutGrid14">
                    <div id="LayoutGrid14">
                        <div class="row">
                            <div class="col-1">
                                <div id="mtex_Text16">
                                    <span id="mtex_uid3"><strong><?= $category->name ?></strong></span>
                                </div>
                                <hr id="Line10">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="mtex_LayoutGrid11">
                    <div id="LayoutGrid11">
                        <div class="row">
                            <?php if(!empty($products)): ?>
                                <?php foreach ($products as $product):  ?>
                                    <div class="col-1" style="padding-bottom: 30px;">
                                        <div class="crop">

                                            <?php if($product->new):  ?>
                                                <div class="podnew" style="position: absolute; width: 197px; height: 24px;;">
                                                    <?= Html::img("@web/images/new.png", ['alt' => 'Новинка', 'class'=>'new'])  ?></div>
                                            <?php endif;  ?>

                                            <?php if($product->sale):  ?>
                                                <div class="podnew" style="position: absolute; width: 197px; height: 24px;">
                                                    <?= Html::img("@web/images/sale.png", ['alt' => 'Новинка', 'class'=>'new'])  ?></div>
                                            <?php endif;  ?>

                                            <a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $product->id])?>">
                                                <?= Html::img("@web/images/products/{$product->img}", ['alt' => $product->name, 'class'=>'Image5']) ?></a>

                                        </div>
                                        <hr id="Line4">
                                        <div id="mtex_Text8">
                                            <span id="mtex_uid4"><strong><?= $product->price;  ?> РУБ.</strong></span>
                                        </div>
                                        <div id="mtex_Text11">
                                            <span id="mtex_uid5"><?= $product->name;  ?></span>
                                        </div>
                                        <div id="mtex_FontAwesomeIcon6">
                                            <a href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $product->id])?>" id="FontAwesomeIcon6" data-id="<?= $product->id?>" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a>
                                        </div>

                                        <!--       Кол-во просмотров                                 -->
                                        <!--                                        <div id="mtex_FontAwesomeIcon6">-->
                                        <!--                                            <div id="FontAwesomeIcon6"><i class="fa fa-eye">-->
                                        <? //= $product->views; ?><!--</i></div>-->
                                        <!--                                        </div>-->

                                    </div>
                                <?php endforeach; ?>
                        </div>
                        <div class="appendics" style="width: 100%; height: 1px;"></div>
                        <!-- Пагинация-->
                        <?php
                        echo \yii\widgets\LinkPager::widget([
                                'pagination' => $pages,
                            ]
                        );
                        ?>
                        <!-- /Пагинация-->
                        <?php else: ?>
                            <h2>
                                <div class="no_products">Товаров в этой категории пока нет...</div>
                            </h2>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
