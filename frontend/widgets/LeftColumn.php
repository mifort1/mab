<?php
/**
 * Created by PhpStorm.
 * User: mifort
 * Date: 20.09.16
 * Time: 14:41
 */

namespace frontend\widgets;


class LeftColumn extends \common\components\widgets\Widget{


    public function init()
    {

    }
    public function run(){

        return $this->render('leftColumn');
    }
}