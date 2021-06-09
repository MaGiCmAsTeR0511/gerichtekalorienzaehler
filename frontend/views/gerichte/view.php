<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Gerichte */

$this->title = $model->g_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Gerichtes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="gerichte-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->g_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->g_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'g_id',
            'g_name',
            'g_beschreibung',
            'g_fett',
            'g_eiweiß',
            'g_kohlenhydrate',
            'g_kalorien',
            'g_sig_datum',
            'g_sig_id',
        ],
    ]) ?>

</div>
