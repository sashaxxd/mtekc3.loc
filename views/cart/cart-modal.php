<?php if(!empty($session['cart'])): ?>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>Фото</th>
                <th>Наименование</th>
                <th>Артикул</th>
                <th>Кол-во Мx</th>
                <th>Цена</th>
                <th><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($session['cart'] as $id => $item):?>
                <tr>
                    <td><?= \yii\helpers\Html::img("@web/images/products/{$item['img']}", ['alt' => $item['name'], 'height' => 60, 'width'
                        => 60] ) ?></td>
                    <td><?= $item['name']?></td>
                    <td><?= $item['article']?></td>
                    <td><?= $item['qty']?></td>
                    <td><?= $item['price']?></td>
                    <td><span data-id="<?= $id?>" class="glyphicon glyphicon-remove text-danger del-item" aria-hidden="true"></span></td>
                </tr>
            <?php endforeach?>
            <tr>
                <td colspan="4">Итого Мx: </td>
                <td><?= $session['cart.qty']?></td>
            </tr>
            <tr>
                <td colspan="4">На сумму: </td>
                <td><?= $session['cart.sum']?></td>
            </tr>
            </tbody>
        </table>
    </div>
<?php else: ?>
    <div class="cartmod"><h3>Корзина пуста</h3></div>
<?php endif;?>