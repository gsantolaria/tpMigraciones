<?php

namespace app\modules\apiv1\controllers;

use yii\rest\ActiveController;


/**
 * Default controller for the `apiv1` module
 */
class UsuarioController extends ActiveController
{
    public $modelClass = 'app\modules\apiv1\models\Usuario';

    protected function verbs()
    {
        return [
            'index' => ['GET', 'HEAD'],
            'view' => ['GET', 'HEAD'],
            'create' => ['POST'],
            'update' => ['PUT', 'PATCH'],
            'delete' => ['DELETE'],
        ];
    }
}
