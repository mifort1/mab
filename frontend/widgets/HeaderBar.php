<?php
/**
 * Created by PhpStorm.
 * User: mifort
 * Date: 19.09.16
 * Time: 13:14
 */
namespace frontend\widgets;

class HeaderBar extends \common\components\widgets\Widget{


    public function init()
    {

    }
    public function run(){

        return $this->render('headerBar');
    }
}