<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\field_default\models\FieldDefaultSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Значения по умолчанию';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="field-default-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'value',
            'ads_field_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
