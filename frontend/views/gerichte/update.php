<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Gerichte */

$this->title = Yii::t('app', 'Update Gerichte: {name}', [
    'name' => $model->g_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Gerichtes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->g_id, 'url' => ['view', 'id' => $model->g_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="gerichte-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
