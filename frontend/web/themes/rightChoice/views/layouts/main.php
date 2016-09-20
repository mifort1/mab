<?php
use frontend\web\themes\rightChoice\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;


/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage(); ?>
<!doctype html>
<html lang="<?php echo Yii::$app->language ?>" class="no-js">
<head>
    <meta charset="<?php echo Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo Html::encode($this->title) ?></title>
    <?php echo Html::csrfMetaTags(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="shortcut icon" href="<?php echo $this->theme->baseUrl;?>/assets/img/favicon.ico">


    <?php $this->registerJsFile('@web/themes/rightChoice/assets/js/modernizr.custom.js', ['position'=>$this::POS_HEAD], 'modernizr');?>


    <?php $this->registerCssFile('@web/themes/rightChoice/assets/css/ie8.css', ['condition' => 'IE8']);?>


    <?php $this->head();?>
</head>
<body>
<?php $this->beginBody(); ?>



<!--Sign Up Modal-->
<!--<div class="modal" id="sign-up-modal" style="display:none;">-->
<!--    <img src="--><?php //echo $this->theme->baseUrl;?><!--/assets/img/sign-up.png">-->
<!--    <h3>Get the newsletter</h3>-->
<!--    <div class="ruler2"></div>-->
<!--    <div class="sign-up-content">-->
<!--        <div class="sign-up-photos"></div>-->
<!--        <p>Sign up to our Newsletter to get the latest fashion trends for men and women, exclusive campaigns, special discounts, and promotions for you, your friends and family.</p>-->
<!--        <form method="post">-->
<!--            <input type="text" placeholder="Enter your email address"><br>-->
<!--            <label><input type="radio" name="gender" value="female"> female</label><label><input type="radio" name="gender" value="male"> male</label><br>-->
<!--            <input type="submit" value="Sign up" class="btn btn-large btn-danger"/>-->
<!--        </form>-->
<!--        <p>Already a member?<br><a><i class="icon-angle-right"></i> Continue shopping</a></p>-->
<!--    </div>-->
<!--</div>-->
<!--End of Sign Up Modal-->

<div class="main">
    <!--<div class="main span12 boxed">-->
    <!--HEADER  -->
    <div class="header">

        <?= \frontend\widgets\HeaderBar::widget() ?>

        <?= \frontend\widgets\HeaderContent::widget() ?>


    </div>
    <!-- /HEADER  -->
    <div class="container clearfix">
        <?= \frontend\widgets\Menu::widget() ?>

        <!--Breadcrumb-->
        <?= \frontend\widgets\Breadcrumb::widget() ?>

        <!--Start Left Column-->
        <?= \frontend\widgets\LeftColumn::widget() ?>
        <!--End Left Column-->


        <!--Start Right Content Block-->
        <?= $content?>
        <!--End Right Content Block-->






    </div>
    <?= \frontend\widgets\Footer::widget() ?>
</div>



<?php $this->endBody(); ?>
</body>

</html>

<?php $this->endPage(); ?>
