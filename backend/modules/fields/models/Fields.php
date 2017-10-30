<?php
/**
 * Created by PhpStorm.
 * User: king
 * Date: 30.10.17
 * Time: 17:40
 */

namespace backend\modules\fields\models;

use common\models\db\AdsFields;

class Fields extends AdsFields
{
    public function behaviors()
    {
        return [
            'name' => [
                'class' => 'common\behaviors\Slug',
                'in_attribute' => 'label',
                'out_attribute' => 'name',
                'translit' => true
            ],
        ];
    }
}