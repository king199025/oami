<?php
/**
 * Created by PhpStorm.
 * User: king
 * Date: 30.10.17
 * Time: 11:10
 */

namespace backend\modules\category\models;

class Category extends \common\models\db\Category
{
    public function behaviors()
    {
        return [
            'slug' => [
                'class' => 'common\behaviors\Slug',
                'in_attribute' => 'name',
                'out_attribute' => 'slug',
                'translit' => true
            ],
        ];
    }
}