<?php

namespace app\modules\main\controllers;

use Yii;
use yii\web\Controller;

class DefaultController extends Controller
{
    
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }


}
