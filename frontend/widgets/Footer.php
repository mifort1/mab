<?php
/**
 * Created by PhpStorm.
 * User: mifort
 * Date: 19.09.16
 * Time: 14:15
 */

namespace frontend\widgets;


class Footer  extends \common\components\widgets\Widget{


    public function init()
    {

    }
    public function run(){

        return $this->render('footer');
    }
}