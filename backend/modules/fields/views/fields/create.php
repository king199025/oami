<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\fields\models\Fields */
/* @var $fieldType \common\models\db\AdsFieldsType*/

$this->title = 'Create Fields';
$this->params['breadcrumbs'][] = ['label' => 'Fields', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fields-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'fieldType' => $fieldType,
    ]) ?>

</div>
