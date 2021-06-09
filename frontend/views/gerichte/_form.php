<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Gerichte */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gerichte-form">

    <?php $form = ActiveForm::begin(); ?> 

    <?= $form->field($model, 'g_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'g_beschreibung')->textarea(['maxlength' => true]) ?>

    <?= $form->field($model, 'g_fett')->input('number') ?>

    <?= $form->field($model, 'g_eiweiß')->input('number') ?>

    <?= $form->field($model, 'g_kohlenhydrate')->input('number') ?>

    <?= $form->field($model, 'g_kalorien')->input('number') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
