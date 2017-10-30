<?php
namespace backend\widgets;
use Yii;
use yii\base\Widget;
use yii\helpers\Url;

class MainMenuAdmin extends Widget
{
    public function run(){
        echo \yii\widgets\Menu::widget(
            [
                'items' => [
                    [
                        'label' => 'Пользователи',
                        'url' => Url::to(['/user/admin']),
                        'template' => '<a href="{url}"><i class="fa fa-users"></i> <span>{label}</span></a>',
                        'active' => Yii::$app->controller->module->id == 'user' || Yii::$app->controller->module->id == 'rbac',

                    ],
                    [
                        'label' => 'Категории',
                        'url' => Url::to(['/category/category']),
                        'template' => '<a href="{url}"><i class="fa fa-dashboard"></i> <span>{label}</span></a>',
                        'active' => Yii::$app->controller->module->id == 'category',
                    ],
                    [
                        'label' => 'Управление полями',
                        /*'active' => Yii::$app->controller->id == 'site',*/
                        'items' => [
                            [
                                'label' => 'Поля',
                                'url' => Url::to(['/fields/fields']),
                                'active' => Yii::$app->controller->module->id == 'fields',
                            ],
                            [
                                'label' => 'Значения по умолчанию',
                                'url' => Url::to(['/field_default/field_default']),
                                'active' => Yii::$app->controller->module->id == 'field_default',
                            ],
                        ],
                        'options' => [
                            'class' => 'treeview',
                        ],
                        'template' => '<a href="#"><i class="fa fa-leanpub"></i> <span>{label}</span> <i class="fa fa-angle-left pull-right"></i></a>',
                    ],
                    [
                        'label' => 'Доска',
                        'items' => [
                            [
                                'label' => '123',
                                'url' => '#'
                            ],
                            [
                                'label' => '345',
                                'url' => '#',
                            ],
                        ],
                        'options' => [
                            'class' => 'treeview',
                        ],
                        'template' => '<a href="#"><i class="fa fa-dashboard"></i> <span>{label}</span> <i class="fa fa-angle-left pull-right"></i></a>',
                    ],
                ],
                'activateItems' => true,
                'activateParents' => true,
                'activeCssClass'=>'active',
                'encodeLabels' => false,
                /*'dropDownCaret' => false,*/
                'submenuTemplate' => "\n<ul class='treeview-menu' role='menu'>\n{items}\n</ul>\n",
                'options' => [
                    'class' => 'sidebar-menu',
                ]
            ]
        );
    }
}