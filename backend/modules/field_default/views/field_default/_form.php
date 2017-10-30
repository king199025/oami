<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\field_default\models\FieldDefault */
/* @var $form yii\widgets\ActiveForm */
/* @var $fields \backend\modules\fields\models\Fields */
?>

<div class="field-default-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'value')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ads_field_id')->widget(\kartik\select2\Select2::className(),
        [
            'data' => \yii\helpers\ArrayHelper::map($fields, 'id', 'label'),
            'options' => ['placeholder' => 'Начните вводить ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Сохранить' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
