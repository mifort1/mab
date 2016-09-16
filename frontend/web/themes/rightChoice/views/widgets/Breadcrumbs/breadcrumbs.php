<?php
/**
 * Created by PhpStorm.
 * User: orfey
 * Date: 04.02.15
 * Time: 16:25
 */
?>
<ol class="breadcrumb">
    <?php foreach($links as $item):?>
        <?=$item?>
    <?php endforeach;?>
</ol>
<h1><?= \yii\helpers\Html::encode($this->title) ?></h1>