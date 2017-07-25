<?php
  use yii\widgets\ActiveForm;
  use yii\helpers\Html;
?>
<div class="container" style="padding: 50px 20px 50px 20px;">
    <h1>Регистрация</h1>
    <?php $form = ActiveForm::begin()?>
    <?= $form->field($model, 'name')?>
    <?= $form->field($model, 'email')?>
    <?= $form->field($model, 'phone')?>
    <?= $form->field($model, 'address')?>
    <?= $form->field($model, 'password')->passwordInput()?>
    <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn', 'id' => 'Button_cart'])?>
    <?php ActiveForm::end()?>
</div>
