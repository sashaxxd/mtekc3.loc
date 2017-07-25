<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<div class="container" style="padding: 50px 20px 50px 20px;">
    <?php if (Yii::$app->session->hasFlash('success')): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
            <?php echo Yii::$app->session->getFlash('success'); ?>
        </div>
    <?php endif; ?>

    <?php if (Yii::$app->session->hasFlash('error')): ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
            <?php echo Yii::$app->session->getFlash('error'); ?>
        </div>
    <?php endif; ?>
    <h1>Вход</h1>
    <?php $form = ActiveForm::begin()?>
    <?= $form->field($model, 'email')?>
    <?= $form->field($model, 'password')->passwordInput()?>
    <?= Html::submitButton('Войти', ['class' => 'btn', 'id' => 'Button_cart'])?>
    <?php ActiveForm::end()?>
</div>
