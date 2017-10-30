<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\field_default\models\FieldDefault */
/* @var $fields \backend\modules\fields\models\Fields */

$this->title = 'Добавить';
$this->params['breadcrumbs'][] = ['label' => 'Значения по умолчанию', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="field-default-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'fields' => $fields
    ]) ?>

</div>
