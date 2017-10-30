<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\fields\models\Fields */
/* @var $form yii\widgets\ActiveForm */
/* @var $fieldType \common\models\db\AdsFieldsType*/
/* @var $category \backend\modules\category\models\Category */
?>

<div class="fields-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'type_id')->dropDownList(\yii\helpers\ArrayHelper::map($fieldType, 'id', 'type')) ?>

    <?= $form->field($model, 'label')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'template')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'interval')->checkbox(); ?>

    <label for="">Выберите для каких категорий использовать это поле</label>

    <?= \kartik\select2\Select2::widget(
        [
            'name' => 'category[]',
            'data' => \yii\helpers\ArrayHelper::map($category, 'id', 'name'),
            'options' => ['placeholder' => 'Начните вводить ...', 'multiple' => true],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ])
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Сохрпнить' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
