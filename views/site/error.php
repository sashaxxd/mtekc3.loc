<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error" style="padding: 40px;">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>

  <a href="<?= \yii\helpers\Url::to('/')?>" style="color: #0b0b0b">Перейти на главную</a>

    </p>


</div>
