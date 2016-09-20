<?php
/**
 * Created by PhpStorm.
 * User: mifort
 * Date: 19.09.16
 * Time: 14:26
 */

namespace frontend\widgets;


class Menu extends \common\components\widgets\Widget{


    public function init()
    {

    }
    public function run(){

        return $this->render('menu');
    }
}