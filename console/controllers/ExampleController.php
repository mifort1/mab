<?php

/**
 * Created by PhpStorm.
 * User: mifort
 * Date: 07.09.16
 * Time: 11:52
 */

namespace console\controllers;

class ExampleController extends \yii\console\Controller
{
    public function actionCreate() {
        echo password_hash('123456', PASSWORD_DEFAULT);
    }

}