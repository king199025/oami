<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "ads_fields".
 *
 * @property integer $id
 * @property integer $type_id
 * @property string $label
 * @property string $template
 * @property string $name
 * @property integer $interval
 *
 * @property AdsFieldsType $type
 * @property AdsFieldsDefaultValue[] $adsFieldsDefaultValues
 */
class AdsFields extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ads_fields';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type_id', 'label', 'template'], 'required'],
            [['type_id', 'interval'], 'integer'],
            [['label', 'template', 'name'], 'string', 'max' => 255],
            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => AdsFieldsType::className(), 'targetAttribute' => ['type_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type_id' => 'Тип',
            'label' => 'Label',
            'template' => 'Шаблон',
            'name' => 'Name',
            'interval' => 'Включить интервал',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(AdsFieldsType::className(), ['id' => 'type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdsFieldsDefaultValues()
    {
        return $this->hasMany(AdsFieldsDefaultValue::className(), ['ads_field_id' => 'id']);
    }
}
