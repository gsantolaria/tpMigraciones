<?php

namespace app\modules\apiv1\controllers;

use yii\rest\ActiveController;
use yii\filters\Cors;


/**
 * Default controller for the `apiv1` module
 */
class UsuarioController extends ActiveController
{
    public $modelClass = 'app\modules\apiv1\models\Usuario';

}
