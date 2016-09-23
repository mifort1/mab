<?php

/**
 * Created by PhpStorm.
 * User: mifort
 * Date: 07.09.16
 * Time: 11:52
 */

namespace console\controllers;

use Yii;

class ExampleController extends \yii\console\Controller
{
    public function actionCreate() {
       // echo password_hash('123456', PASSWORD_DEFAULT);
        /*function numShow($i, $k){
            if($k < 1){
                echo "\n";
                return;
            }
            echo $i;
            $k--;
            numShow($i, $k);

        }

        function it($i = 1){
            if($i > 9){
                return;
            }
            numShow($i, $i);
            $i++;
            it($i);


        }
        it();*/

        $fileName = Yii::$app->basePath . "/../downloads/0.xls";
        $data = \moonland\phpexcel\Excel::import($fileName, [
            'setFirstRecordAsKeys' => true, // if you want to set the keys of record column with first record, if it not set, the header with use the alphabet column on excel.
            'setIndexSheetByName' => true, // set this if your excel data with multiple worksheet, the index of array will be set with the sheet name. If this not set, the index will use numeric.
           // 'getOnlySheet' => 'sheet1', // you can set this property if you want to get the specified sheet from the excel data with multiple worksheet.
        ]);
        var_dump($data);
    }

}