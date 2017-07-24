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
                                    <span id="mtex_uid3"><strong>ПОПУЛЯРНАЯ ТКАНЬ</strong></span>
                                </div>
                                <hr id="Line10">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="mtex_LayoutGrid11">
                    <div id="LayoutGrid11">
                        <div class="row">
                            <?php if(!empty($hits)): ?>
                                <?php foreach ($hits as $hit):  ?>
                            <div class="col-1" style="padding-bottom: 30px;">
                                <div class="crop">

                                    <?php if($hit->new):  ?>
                                        <div class="podnew" style="position: absolute; width: 197px; height: 24px;">
                                            <?= Html::img("@web/images/new.png", ['alt' => 'Новинка', 'class'=>'new'])  ?></div>
                                    <?php endif;  ?>

                                    <?php if($hit->sale):  ?>
                                        <div class="podnew" style="position: absolute; width: 197px; height: 24px;">
                                            <?= Html::img("@web/images/sale.png", ['alt' => 'Новинка', 'class'=>'new'])  ?></div>
                                    <?php endif;  ?>

                                    <a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit->id])?>"><?= Html::img("@web/images/products/{$hit->img}", ['alt' => $hit->name, 'class'=>'Image5'])  ?></a>

                                </div>
                                <hr id="Line4">
                                <div id="mtex_Text8">
                                    <span id="mtex_uid4"><strong><?= $hit->price;  ?> РУБ.</strong></span>
                                </div>
                                <div id="mtex_Text11">
                                    <span id="mtex_uid5"><a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit->id])?>"> <?= $hit->name;  ?></a></span>
                                </div>
                                <div id="mtex_FontAwesomeIcon6">
                                    <a href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $hit->id])?>" id="FontAwesomeIcon6" data-id="<?= $hit->id?>" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a>

                                </div>
                            </div>

                                <?php  endforeach;  ?>
                            <?php endif; ?>


                        </div>
                    </div>
                </div>
                <div id="mtex_LayoutGrid15">
                    <div id="LayoutGrid15">
                        <div class="row">
                            <div class="col-1">
                                <div id="mtex_Text17">
                                    <span id="mtex_uid16"><strong>АКЦИЯ</strong></span>
                                </div>
                                <hr id="Line11">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="mtex_LayoutGrid16">
                    <div id="LayoutGrid16">
                        <div class="row">

                            <?php if(!empty($sale)): ?>
                                <?php foreach ($sale as $sale):  ?>
                                    <div class="col-1" style="padding-bottom: 30px;">
                                        <div class="crop">


<!--                                            --><?php //if($sale->sale):  ?>
                                                <div class="podnew" style="position: absolute; width: 197px; height: 24px;">
                                                    <?= Html::img("@web/images/sale.png", ['alt' => 'Акция', 'class'=>'new'])  ?></div>
<!--                                            --><?php //endif;  ?>

                                            <a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $sale->id])?>"><?= Html::img("@web/images/products/{$sale->img}", ['alt' => $sale->name, 'class'=>'Image5'])  ?></a>

                                        </div>
                                        <hr id="Line4">
                                        <div id="mtex_Text8">
                                            <span id="mtex_uid4"><strong><?= $sale->price;  ?> РУБ.</strong></span>
                                        </div>
                                        <div id="mtex_Text11">
                                            <span id="mtex_uid5"><?= $sale->name;  ?></span>
                                        </div>
                                        <div id="mtex_FontAwesomeIcon6">
                                            <a href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $sale->id])?>" data-id="<?= $sale->id?>" id="FontAwesomeIcon6" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>

                                <?php  endforeach;  ?>
                            <?php endif; ?>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
