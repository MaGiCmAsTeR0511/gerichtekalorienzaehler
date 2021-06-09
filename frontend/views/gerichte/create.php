<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Gerichte */

$this->title = Yii::t('app', 'Create Gerichte');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Gerichtes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gerichte-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
