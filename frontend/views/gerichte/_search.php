<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\GerichteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gerichte-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'g_id') ?>

    <?= $form->field($model, 'g_name') ?>

    <?= $form->field($model, 'g_beschreibung') ?>

    <?= $form->field($model, 'g_fett') ?>

    <?= $form->field($model, 'g_eiweiß') ?>

    <?php // echo $form->field($model, 'g_kohlenhydrate') ?>

    <?php // echo $form->field($model, 'g_kalorien') ?>

    <?php // echo $form->field($model, 'g_sig_datum') ?>

    <?php // echo $form->field($model, 'g_sig_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
