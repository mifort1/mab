<?php
use frontend\web\themes\rightChoice\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;


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
        <div class="breadcrumb clearfix">
            <a href="products-grid.html">Right Choice</a><span>Party Dresses</span>
        </div>

        <!--Start Left Column-->
        <div class="left-column span3 ml-0 fl">
            <h4 class="block-title">Categories</h4>
            <div class="ruler">
            </div>
            <ul class="categories">
                <li><i class="icon-angle-right"></i><a href="products-grid.html">Men</a></li>
                <li>
                    <i class="icon-angle-right"></i><a href="products-grid.html" class="active">Women</a>
                    <ul class="categories-submenu">
                        <li>
                            <i class="icon-angle-right"></i><a href="products-grid.html">Dresses</a>
                            <ul class="categories-submenu">
                                <li><i class="icon-angle-right"></i><a href="products-grid.html">Evening Dresses</a></li>
                                <li><i class="icon-angle-right"></i><a href="products-grid.html">Casual Dresses</a></li>
                                <li><i class="icon-angle-right"></i><a href="products-grid.html">Party Dresses</a></li>
                                <li><i class="icon-angle-right"></i><a href="products-grid.html">Maxi Dresses</a></li>
                                <li><i class="icon-angle-right"></i><a href="products-grid.html">Midi Dresses</a></li>
                                <li><i class="icon-angle-right"></i><a href="products-grid.html">Strapless Dresses</a></li>
                            </ul>
                        </li>
                        <li><i class="icon-angle-right"></i><a href="products-grid.html">Accessories</a></li>
                        <li><i class="icon-angle-right"></i><a href="products-grid.html">Top</a></li>
                    </ul>
                </li>
                <li><i class="icon-angle-right"></i><a href="products-grid.html">Accessories</a></li>
                <li><i class="icon-angle-right"></i><a href="products-grid.html">Others</a></li>
            </ul>
            <h4 class="block-title">Price Range</h4>
            <div class="ruler">
            </div>
            <div class="price-range clearfix">
                <label for="price-from">Price range:</label>
                <div class="input-prepend">
                    <span class="add-on">$</span>
                    <input id="price-from" type="text">
                </div>
                <div class="input-prepend">
                    <span class="add-on">$</span>
                    <input id="price-to" type="text">
                </div>
            </div>
            <div>
                <div id="price-range">
                </div>
            </div>
            <h4 class="block-title">Color</h4>
            <div class="ruler">
            </div>
            <ul class="colors clearfix">
                <li><a href="products-grid.html" rel="003d71"></a></li>
                <li><a href="products-grid.html" rel="c42c39"></a></li>
                <li><a href="products-grid.html" rel="f4bc08"></a></li>
                <li><a href="products-grid.html" rel="02882c"></a></li>
                <li><a href="products-grid.html" rel="000000"></a></li>
                <li><a href="products-grid.html" rel="caccce"></a></li>
                <li><a href="products-grid.html" rel="ffffff"></a></li>
                <li><a href="products-grid.html" rel="f9e7b6"></a></li>
                <li><a href="products-grid.html" rel="ef8a07"></a></li>
                <li><a href="products-grid.html" rel="5a433f"></a></li>
                <li><a href="products-grid.html" rel="ff9bb5"></a></li>
                <li><a href="products-grid.html" rel="8c56a9"></a></li>
                <li><a href="products-grid.html" rel="aae7fc"></a></li>
            </ul>
            <h4 class="block-title">Manufacturers</h4>
            <div class="ruler">
            </div>
            <div class="manufacturers">
                <label><input type="checkbox"/> ARMANI</label>
                <label><input type="checkbox"/> GUCCI</label>
                <label><input type="checkbox"/> Dolce & Gabbana</label>
                <label><input type="checkbox"/> Adidas</label>
            </div>
        </div>
        <!--End Left Column-->
        <!--Start Right Content Block-->
        <div class="span9 mt-10">
            <div class="fl products-viewmode">
                <a href="products-grid.html" class="active fl"><i class="icon-th-large"></i> Grid</a>
                <a href="products-list.html" class="fl"><i class="icon-th-list"></i> List</a>
            </div>
            <div class="fr products-sort">
                <label class="fl">Sort by</label>
                <div id="sort-type">
                    <select name="sort-type" class="selectbox">
                        <option value="position:asc" selected="selected">--</option>
                        <option value="price:asc">Price: Lowest first</option>
                        <option value="price:desc">Price: Highest first</option>
                        <option value="name:asc">Product Name: A to Z</option>
                        <option value="name:desc">Product Name: Z to A</option>
                        <option value="quantity:desc">In stock</option>
                    </select>
                </div>
                <div id="products-per-page">
                    <select name="products-per-page" class="selectbox">
                        <option value="10" selected="selected">10</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                        <option value="100">100</option>
                        <option value="all">All</option>
                    </select>
                </div>
            </div>
            <div class="ruler">
            </div>
        </div>
        <div class="span9 fr">
            <div class="clearfix">
                <p class="product-item-number fl">
                    9 items of 15 total
                </p>
                <ul class="products-pagination fr">
                    <li><i class="icon-caret-left"></i></li>
                    <li class="active">1</li>
                    <li><a href="products-grid.html">2</a></li>
                    <li><a href="products-grid.html">3</a></li>
                    <li><a href="products-grid.html">...</a></li>
                    <li><a href="products-grid.html">99</a></li>
                    <li><a href="products-grid.html"><i class="icon-caret-right"></i></a></li>
                </ul>
            </div>
            <div class="products-grid clearfix row-fluid">
                <div class="product fl">
                    <div class="product-new">
                    </div>
                    <div class="product-preview">
                        <img src="<?php echo $this->theme->baseUrl;?>/assets/img/products/1.jpg" alt="product">
                    </div>
                    <div class="product-info">
                        <h5><a href="product-details.html">Satin Ankle Dress</a></h5>
                        <h4 class="fl"><span></span> $149.99</h4>
                        <div class="button-box fr">
                            <div>
                                <i class="icon-shopping-cart"></i>
                                <span>Add to cart</span>
                            </div>
                            <div>
                                <i class="icon-refresh"></i>
                            </div>
                            <div>
                                <i class="icon-heart"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product-rating">
                        <div class="stars">
                            <span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
                        </div>
                    </div>
                </div>
                <div class="product fl">
                    <div class="product-new">
                    </div>
                    <div class="product-sale">
                    </div>
                    <div class="product-preview">
                        <img src="<?php echo $this->theme->baseUrl;?>/assets/img/products/2.jpg" alt="product">
                    </div>
                    <div class="product-info">
                        <h5><a href="product-details.html">Chiffon V-Neckline Dress</a></h5>
                        <h4 class="fl"><span>$39.99</span> $35.99</h4>
                        <div class="button-box fr">
                            <div>
                                <i class="icon-shopping-cart"></i>
                                <span>Add to cart</span>
                            </div>
                            <div>
                                <i class="icon-refresh"></i>
                            </div>
                            <div>
                                <i class="icon-heart"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product-rating">
                        <div class="stars">
                            <span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
                        </div>
                    </div>
                </div>
                <div class="product fl">
                    <div class="product-sale">
                    </div>
                    <div class="product-preview">
                        <img src="<?php echo $this->theme->baseUrl;?>/assets/img/products/5.jpg" alt="product">
                    </div>
                    <div class="product-info">
                        <h5><a href="product-details.html">Cocktail Seremony Dress</a></h5>
                        <h4 class="fl"><span>$139.99</span> $129.99</h4>
                        <div class="button-box fr">
                            <div>
                                <i class="icon-shopping-cart"></i>
                                <span>Add to cart</span>
                            </div>
                            <div>
                                <i class="icon-refresh"></i>
                            </div>
                            <div>
                                <i class="icon-heart"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product-rating">
                        <div class="stars">
                            <span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
                        </div>
                    </div>
                </div>
                <div class="product fl">
                    <div class="product-preview">
                        <img src="<?php echo $this->theme->baseUrl;?>/assets/img/products/4.jpg" alt="product">
                    </div>
                    <div class="product-info">
                        <h5><a href="product-details.html">Chiffon Bodice Dress</a></h5>
                        <h4 class="fl"><span></span> $149.99</h4>
                        <div class="button-box fr">
                            <div>
                                <i class="icon-shopping-cart"></i>
                                <span>Add to cart</span>
                            </div>
                            <div>
                                <i class="icon-refresh"></i>
                            </div>
                            <div>
                                <i class="icon-heart"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product-rating">
                        <div class="stars">
                            <span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
                        </div>
                    </div>
                </div>
                <div class="product fl">
                    <div class="product-new">
                    </div>
                    <div class="product-preview">
                        <img src="<?php echo $this->theme->baseUrl;?>/assets/img/products/3.jpg" alt="product">
                    </div>
                    <div class="product-info">
                        <h5><a href="product-details.html">Silk-like Satin Dress</a></h5>
                        <h4 class="fl"><span>$60.00</span> $49.50</h4>
                        <div class="button-box fr">
                            <div>
                                <i class="icon-shopping-cart"></i>
                                <span>Add to cart</span>
                            </div>
                            <div>
                                <i class="icon-refresh"></i>
                            </div>
                            <div>
                                <i class="icon-heart"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product-rating">
                        <div class="stars">
                            <span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
                        </div>
                    </div>
                </div>
                <div class="product fl">
                    <div class="product-preview">
                        <img src="<?php echo $this->theme->baseUrl;?>/assets/img/products/1.jpg" alt="product">
                    </div>
                    <div class="product-info">
                        <h5><a href="product-details.html">Satin Ankle Dress</a></h5>
                        <h4 class="fl"><span></span> $149.99</h4>
                        <div class="button-box fr">
                            <div>
                                <i class="icon-shopping-cart"></i>
                                <span>Add to cart</span>
                            </div>
                            <div>
                                <i class="icon-refresh"></i>
                            </div>
                            <div>
                                <i class="icon-heart"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product-rating">
                        <div class="stars">
                            <span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
                        </div>
                    </div>
                </div>
                <div class="product fl">
                    <div class="product-new">
                    </div>
                    <div class="product-sale">
                    </div>
                    <div class="product-preview">
                        <img src="<?php echo $this->theme->baseUrl;?>/assets/img/products/2.jpg" alt="product">
                    </div>
                    <div class="product-info">
                        <h5><a href="product-details.html">Chiffon V-Neckline Dress</a></h5>
                        <h4 class="fl"><span>$39.99</span> $35.99</h4>
                        <div class="button-box fr">
                            <div>
                                <i class="icon-shopping-cart"></i>
                                <span>Add to cart</span>
                            </div>
                            <div>
                                <i class="icon-refresh"></i>
                            </div>
                            <div>
                                <i class="icon-heart"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product-rating">
                        <div class="stars">
                            <span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
                        </div>
                    </div>
                </div>
                <div class="product fl">
                    <div class="product-preview">
                        <img src="<?php echo $this->theme->baseUrl;?>/assets/img/products/5.jpg" alt="product">
                    </div>
                    <div class="product-info">
                        <h5><a href="product-details.html">Cocktail Seremony Dress</a></h5>
                        <h4 class="fl"><span>$139.99</span> $129.99</h4>
                        <div class="button-box fr">
                            <div>
                                <i class="icon-shopping-cart"></i>
                                <span>Add to cart</span>
                            </div>
                            <div>
                                <i class="icon-refresh"></i>
                            </div>
                            <div>
                                <i class="icon-heart"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product-rating">
                        <div class="stars">
                            <span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
                        </div>
                    </div>
                </div>
                <div class="product fl">
                    <div class="product-new">
                    </div>
                    <div class="product-preview">
                        <img src="<?php echo $this->theme->baseUrl;?>/assets/img/products/4.jpg" alt="product">
                    </div>
                    <div class="product-info">
                        <h5><a href="product-details.html">Chiffon Bodice Dress</a></h5>
                        <h4 class="fl"><span></span> $149.99</h4>
                        <div class="button-box fr">
                            <div>
                                <i class="icon-shopping-cart"></i>
                                <span>Add to cart</span>
                            </div>
                            <div>
                                <i class="icon-refresh"></i>
                            </div>
                            <div>
                                <i class="icon-heart"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product-rating">
                        <div class="stars">
                            <span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
                        </div>
                    </div>
                </div>
                <div class="product fl">
                    <div class="product-sale">
                    </div>
                    <div class="product-preview">
                        <img src="<?php echo $this->theme->baseUrl;?>/assets/img/products/3.jpg" alt="product">
                    </div>
                    <div class="product-info">
                        <h5><a href="product-details.html">Silk-like Satin Dress</a></h5>
                        <h4 class="fl"><span>$60.00</span> $49.50</h4>
                        <div class="button-box fr">
                            <div>
                                <i class="icon-shopping-cart"></i>
                                <span>Add to cart</span>
                            </div>
                            <div>
                                <i class="icon-refresh"></i>
                            </div>
                            <div>
                                <i class="icon-heart"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product-rating">
                        <div class="stars">
                            <span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix">
                <ul class="products-pagination fr">
                    <li><i class="icon-caret-left"></i></li>
                    <li class="active">1</li>
                    <li><a href="products-grid.html">2</a></li>
                    <li><a href="products-grid.html">3</a></li>
                    <li>...</li>
                    <li><a href="products-grid.html">99</a></li>
                    <li><a href="products-grid.html"><i class="icon-caret-right"></i></a></li>
                </ul>
            </div>
        </div>
        <!--End Right Content Block-->






    </div>
    <?= \frontend\widgets\Footer::widget() ?>
</div>



<?php $this->endBody(); ?>
</body>

</html>

<?php $this->endPage(); ?>
