<?php

/* @var $this \yii\web\View */
/* @var $content string */

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
                <div id="wb_LayoutGrid14">
                    <div id="LayoutGrid14">
                        <div class="row">
                            <div class="col-1">
                                <div id="wb_Text16">
                                    <span id="wb_uid3"><strong><?= $product->name ?></strong></span>
                                </div>
                                <hr id="Line10">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="wb_LayoutGridforeach" class="form-row number-range-combi show-activevaluetooltip">
                    <form name="form" method="post" action="send.php" accept-charset="UTF-8" id="LayoutGridforeach" class="form-row number-range-combi show-activevaluetooltip">
                        <div class="row">
                            <div class="col-1">
                                <hr id="Line7">
                                <div id="wb_PhotoGallery1">
                                    <div id="PhotoGallery1">
                                        <div class="thumbnails">
                                            <div class="thumbnail">
                                                <?php if($product->new):  ?>
                                                    <div class="podnew" style="position: absolute; width: 79px; height: 24px;;">
                                                        <?= Html::img("@web/images/new.png", ['alt' => 'Новинка', 'class'=>'new'])  ?></div>
                                                <?php endif;  ?>

                                                <?php if($product->sale):  ?>
                                                    <div class="podnew" style="position: absolute; width: 79px; height: 24px;">
                                                        <?= Html::img("@web/images/sale.png", ['alt' => 'Новинка', 'class'=>'new'])  ?></div>
                                                <?php endif;  ?>
                                                <a href="/images/products/<?=$product->img?>" data-rel="">
                                                <?= Html::img("@web/images/products/{$product->img}", ['alt' => $product->name]) ?>
                                                </a>
                                            </div>
                                            <div class="clearfix visible-col1"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <hr id="Line8">
                                <div id="wb_Text21">
                                    <span id="wb_uid4"><strong><?= $product->name ?></strong></span>
                                </div>
                                <div id="wb_Text5">
                                    <span id="wb_uid5">Артикул: <?= $product->article ?></span>
                                </div>
                                <div id="wb_Text1">
                                    <span id="wb_uid6">Категория: <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $product->category->id])?>" style="color: #465296;"><?= $product->category->name ?></a></span>
                                </div>
                                <div id="wb_Text18">
                                    <span id="wb_uid7"><strong><?= $product->price ?> РУБ. ЗА 1 МХ</strong></span>
                                </div>
                                <div id="wb_Text3">
                                    <span id="wb_uid8">Количество Мx:</span>
                                </div>
                                <input type="range" id="Editbox2" name="Editbox2" value="0.5" step="0.5" max="100" min="0.5">
                                <input type="number" id="Editbox3" class="qty" name="Editbox2" value="0.5" maxlength="1" step="0.5" max="100" min="0.5">
                                <div id="wb_Text4">
                                    <span id="wb_uid9">(хлопок 100%) <br>в наличии 250р/м<br>при покупке от 3х м 230р/м </span>
                                </div>
                                <input type="submit" data-id="<?= $product->id ?>" class="add-to-cart" id="Button2" name="" value="В корзину">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>