<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-lg-5">

        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'email') ?>

        <?= $form->field($model, 'subject') ?>

        <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
            'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
        ]) ?>

        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>