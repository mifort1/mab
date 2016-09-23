<?php

/**
 * Created by PhpStorm.
 * User: mifort
 * Date: 22.09.16
 * Time: 13:45
 */
namespace common\components\shop;

use Yii;

class TwoOpt
{
    const TWOOPTURL = 'http://2opt.com.ua/prajsy/';

    static public function getFiles()
    {
       // берем страницу с ссылками на xls-файлы
        $arrayXls = [];
        $html = file_get_contents(self::TWOOPTURL);
        $nokogiri = new Nokogiri();
        $nokogiri->loadHtml($html);
        $a = $nokogiri->get('strong a')->toArray();
        foreach($a as $val){
            if(isset($val['href']) && strpos($val['href'], 'download')){
                $arrayXls[] = $val['href'];
            }
        }
        //end берем страницу с ссылками на xls-файлы

        // скачиваем xls-файлы согласно массиву $arrayXls
        foreach($arrayXls as $key=>$val){
            file_put_contents(Yii::$app->basePath . "/../downloads/".$key.".xls", file_get_contents($val));
        }
        // скачиваем xls-файлы согласно массиву $arrayXls
        \yii\helpers\VarDumper::dump($arrayXls); die;
    }
}