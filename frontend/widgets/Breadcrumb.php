<?php
/**
 * Created by PhpStorm.
 * User: mifort
 * Date: 20.09.16
 * Time: 14:35
 */

namespace frontend\widgets;


class Breadcrumb extends \common\components\widgets\Widget{


    public function init()
    {

    }
    public function run(){

        return $this->render('breadcrumb');
    }
}