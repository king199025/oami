<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\fields\models\Fields */
/* @var $fieldType \common\models\db\AdsFieldsType*/
/* @var $category \backend\modules\category\models\Category */

$this->title = 'Добавление поля';
$this->params['breadcrumbs'][] = ['label' => 'Поля', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fields-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'fieldType' => $fieldType,
        'category' => $category,
    ]) ?>

</div>
