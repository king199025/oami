<?php

namespace backend\modules\field_default\controllers;

use yii\web\Controller;

/**
 * Default controller for the `field_default` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
