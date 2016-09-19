<?php

/**
 * Created by PhpStorm.
 * User: mifort
 * Date: 19.09.16
 * Time: 11:59
 */

namespace common\components\widgets;

use yii\helpers\FileHelper;

class Widget extends \yii\base\Widget
{

    public function getViewPath()
    {
        $class = new \ReflectionClass($this);

        $viewPath=dirname($class->getFileName()) . DIRECTORY_SEPARATOR . 'views';

        $themePath=$this->view->theme->getBasePath();

        $searchDir=$themePath.'/views/widgets/'.$class->getShortName();

        if(is_dir($searchDir)){
            $list=FileHelper::findFiles($searchDir);
            if(!empty($list))
                $viewPath=$searchDir;
        }

        return $viewPath;
    }

}