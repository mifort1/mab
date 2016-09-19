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

        <div class="container clearfix">
            <!--HEADER CONTENT-->
            <div class="header-content">
                <!--LOGO-->
                <a href="index.html" class="logo"></a>
                <!--LOGO TITLE-->
                <div class="header-title">
                    <h1>Right Choice</h1>
                    <p>
                        e-commerce premium template
                    </p>
                </div>
                <!--/LOGO TITLE-->
                <!-- START OF MOBILE MENU-->
                <div class="rc fr clearfix">
                    <div id="dl-menu" class="dl-menuwrapper">
                        <button>Open Menu</button>
                        <ul class="dl-menu">
                            <li class="dl-back"><a href="index.html#">back</a></li>
                            <li>
                                <a href="index.html#" title="Home">Home</a>
                                <ul class="dl-submenu">
                                    <li class="dl-back"><a href="index.html#">back</a></li>
                                    <li><a href="index.html" title="Home">Home (CarouFredSel)</a></li>
                                    <li><a href="index2.html" title="Home">Home (Elastic Slider)</a></li>
                                    <li><a href="index-boxed.html" title="Home Boxed">Home (boxed version)</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="index.html#">Men</a>
                                <ul class="dl-submenu">
                                    <li class="dl-back"><a href="index.html#">back</a></li>
                                    <li>
                                        <a href="index.html#">Shirts</a>
                                        <ul class="dl-submenu">
                                            <li class="dl-back"><a href="index.html#">back</a></li>
                                            <li><a href="products-grid.html">Oxford Shirts</a></li>
                                            <li><a href="products-grid.html">Check Shirts</a></li>
                                            <li><a href="products-grid.html">Denim Shirts</a></li>
                                            <li><a href="products-grid.html">Striped Shirts</a></li>
                                            <li><a href="products-grid.html">Printed Shirts</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="index.html#">Shoes</a>
                                        <ul class="dl-submenu">
                                            <li class="dl-back"><a href="index.html#">back</a></li>
                                            <li><a href="products-grid.html">Boots</a></li>
                                            <li><a href="products-grid.html">Desert Boots</a></li>
                                            <li><a href="products-grid.html">Boat Shoes</a></li>
                                            <li><a href="products-grid.html">Format Shoes</a></li>
                                            <li><a href="products-grid.html">Trainers</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="index.html#">Jackets</a>
                                        <ul class="dl-submenu">
                                            <li class="dl-back"><a href="index.html#">back</a></li>
                                            <li><a href="products-grid.html">Blazers</a></li>
                                            <li><a href="products-grid.html">Leather Jackets</a></li>
                                            <li><a href="products-grid.html">Denim Jackets</a></li>
                                            <li><a href="products-grid.html">Gilets</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="products-grid.html">Jeans</a></li>
                                    <li><a href="products-grid.html">T-Shirts</a></li>
                                    <li><a href="products-grid.html">Underwear</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="index.html#">Women</a>
                                <ul class="dl-submenu">
                                    <li class="dl-back"><a href="index.html#">back</a></li>
                                    <li>
                                        <a href="index.html#">Dresses</a>
                                        <ul class="dl-submenu">
                                            <li class="dl-back"><a href="index.html#">back</a></li>
                                            <li><a href="products-grid.html">Evening Dresses</a></li>
                                            <li><a href="products-grid.html">Casual Dresses</a></li>
                                            <li><a href="products-grid.html">Party Dresses</a></li>
                                            <li><a href="products-grid.html">Maxi Dresses</a></li>
                                            <li><a href="products-grid.html">Midi Dresses</a></li>
                                            <li><a href="products-grid.html">Strapless Dresses</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="index.html#">Tops</a>
                                        <ul class="dl-submenu">
                                            <li class="dl-back"><a href="index.html#">back</a></li>
                                            <li><a href="products-grid.html">Blouses</a></li>
                                            <li><a href="products-grid.html">Bodies</a></li>
                                            <li><a href="products-grid.html">Evening Tops</a></li>
                                            <li><a href="products-grid.html">Shirts</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="index.html#">Accessories</a>
                                        <ul class="dl-submenu">
                                            <li class="dl-back"><a href="index.html#">back</a></li>
                                            <li><a href="products-grid.html">Bags & Purses</a></li>
                                            <li><a href="products-grid.html">Belts</a></li>
                                            <li><a href="products-grid.html">Collars</a></li>
                                            <li><a href="products-grid.html">Gloves</a></li>
                                            <li><a href="products-grid.html">Hats & Caps</a></li>
                                            <li><a href="products-grid.html">Sunglasses</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="products-grid.html">Others</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="index.html#">Accessories</a>
                                <ul class="dl-submenu">
                                    <li class="dl-back"><a href="index.html#">back</a></li>
                                    <li>
                                        <a href="index.html#">Bags & Purses</a>
                                        <ul class="dl-submenu">
                                            <li class="dl-back"><a href="index.html#">back</a></li>
                                            <li><a href="products-grid.html">Clutches</a></li>
                                            <li><a href="products-grid.html">Backpacks</a></li>
                                            <li><a href="products-grid.html">Perses</a></li>
                                            <li><a href="products-grid.html">Satches</a></li>
                                            <li><a href="products-grid.html">Shoulder Bags</a></li>
                                            <li><a href="products-grid.html">Desinger Bags</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="index.html#">Watches</a>
                                        <ul class="dl-submenu">
                                            <li class="dl-back"><a href="index.html#">back</a></li>
                                            <li><a href="products-grid.html">Digital Watches</a></li>
                                            <li><a href="products-grid.html">Sports Watches</a></li>
                                            <li><a href="products-grid.html">Chronograph Watches</a></li>
                                            <li><a href="products-grid.html">Designer Watches</a></li>
                                            <li><a href="products-grid.html">Casio Watches</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="index.html#">Pages</a>
                                <ul class="dl-submenu">
                                    <li class="dl-back"><a href="index.html#">back</a></li>
                                    <li><a href="products-grid.html">Products Grid-view</a></li>
                                    <li><a href="products-list.html">Products List-view</a></li>
                                    <li><a href="product-details.html">Product Details</a></li>
                                    <li><a href="login.html">Account Login</a></li>
                                    <li><a href="registration.html">Account Registration</a></li>
                                    <li><a href="checkout.html">Chechout</a></li>
                                    <li><a href="shortcodes.html">Shortcodes</a></li>
                                    <li><a href="advanced-search.html">Advanced Search</a></li>
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                </ul>
                            </li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /END OF MOBILE MENU-->
                <!--START OF SHOPING CART-->
                <div class="header-shopping-cart fr">
                    <i class="icon-shopping-cart icon-2x fl"></i>
                    <div class="fl">
                        <a href="index.html" class="toggle-items fr">
                            <i class="icon-angle-right icon-2x fr"></i>
                            <h5>Shopping Cart</h5>
                            <p>
                                <span id="items-amount">3</span> item(s)
                            </p>
                        </a>
                    </div>
                    <!--SHOPING CART ITEMS-->
                    <div class="header-shopping-cart-items">
                        <div class="item fl">
                            <img src="<?php echo $this->theme->baseUrl;?>/assets/img/products/1-thumb.jpg" class="fl"/>
                            <div class="fl">
                                <h5>Satin Ankle Dress</h5>
                                <p>
                                    $149.99
                                </p>
                            </div>
                            <a href="index.html" class="fr"><i class="icon-remove fl"></i></a>
                        </div>
                        <div class="item fl">
                            <img src="<?php echo $this->theme->baseUrl;?>/assets/img/products/1-thumb.jpg" class="fl"/>
                            <div class="fl">
                                <h5>Satin Ankle Dress</h5>
                                <p>
                                    $149.99
                                </p>
                            </div>
                            <a href="index.html" class="fr"><i class="icon-remove fl"></i></a>
                        </div>
                        <div class="item fl">
                            <img src="<?php echo $this->theme->baseUrl;?>/assets/img/products/1-thumb.jpg" class="fl"/>
                            <div class="fl">
                                <h5>Satin Ankle Dress</h5>
                                <p>
                                    $149.99
                                </p>
                            </div>
                            <a href="index.html" class="fr"><i class="icon-remove fl"></i></a>
                        </div>
                        <div class="total fl">
                            <p class="fl">
                                Total: <span>$449.97</span>
                            </p>
                            <a href="checkout.html" class="fr">Checkout</a>
                        </div>
                    </div>
                    <!--/SHOPING CART ITEMS-->
                </div>
                <!--/END OF SHOPING CART-->
                <!--SEARCH BLOCK-->
                <div class="header-search-block fr">
                    <a href="advanced-search.html">Advanced search</a>
                    <form>
                        <input type="text" name="q" class="fl"/>
                        <input type="submit" value="" class="fl"/>
                    </form>
                </div>
                <!--/SEARCH BLOCK-->
            </div>
            <!--HEADER CONTENT-->
        </div>
    </div>
    <!-- /HEADER  -->
    <div class="container clearfix">
        <!-- MENU -->
        <div id="menu">
            <!--LISTS-->
            <ul class="menu clearfix">
                <li>
                    <a href="index.html" title="Home">Home</a>
                    <div class="dropdown span3">
                        <div class="span2">
                            <ul>
                                <li><a href="index.html">Home (CarouFredSel)</a></li>
                                <li><a href="index2.html">Home (Elastic Slider)</a></li>
                                <li><a href="index-boxed.html">Home (boxed version)</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <a>Men</a>
                    <div class="dropdown span9">
                        <div class="span2">
                            <h4>Shirts</h4>
                            <ul>
                                <li><a href="products-grid.html">Oxford Shirts</a></li>
                                <li><a href="products-grid.html">Check Shirts</a></li>
                                <li><a href="products-grid.html">Denim Shirts</a></li>
                                <li><a href="products-grid.html">Striped Shirts</a></li>
                                <li><a href="products-grid.html">Printed Shirts</a></li>
                            </ul>
                        </div>
                        <div class="span2">
                            <h4>Shoes</h4>
                            <ul>
                                <li><a href="products-grid.html">Boots</a></li>
                                <li><a href="products-grid.html">Desert Boots</a></li>
                                <li><a href="products-grid.html">Boat Shoes</a></li>
                                <li><a href="products-grid.html">Format Shoes</a></li>
                                <li><a href="products-grid.html">Trainers</a></li>
                            </ul>
                        </div>
                        <div class="span2">
                            <h4>Jackets</h4>
                            <ul>
                                <li><a href="products-grid.html">Blazers</a></li>
                                <li><a href="products-grid.html">Leather Jackets</a></li>
                                <li><a href="products-grid.html">Denim Jackets</a></li>
                                <li><a href="products-grid.html">Gilets</a></li>
                            </ul>
                        </div>
                        <div class="menu-portrait fr">
                            <img src="<?php echo $this->theme->baseUrl;?>/assets/img/guy.jpg"/>
                        </div>
                    </div>
                </li>
                <li>
                    <a>Women</a>
                    <div class="dropdown span9">
                        <div class="span2">
                            <h4>Dresses</h4>
                            <ul>
                                <li><a href="products-grid.html">Evening Dresses</a></li>
                                <li><a href="products-grid.html">Casual Dresses</a></li>
                                <li><a href="products-grid.html">Party Dresses</a></li>
                                <li><a href="products-grid.html">Maxi Dresses</a></li>
                                <li><a href="products-grid.html">Midi Dresses</a></li>
                                <li><a href="products-grid.html">Strapless Dresses</a></li>
                            </ul>
                        </div>
                        <div class="span2">
                            <h4>Accessories</h4>
                            <ul>
                                <li><a href="products-grid.html">Bags & Purses</a></li>
                                <li><a href="products-grid.html">Belts</a></li>
                                <li><a href="products-grid.html">Collars</a></li>
                                <li><a href="products-grid.html">Gloves</a></li>
                                <li><a href="products-grid.html">Hats & Caps</a></li>
                                <li><a href="products-grid.html">Sunglasses</a></li>
                            </ul>
                        </div>
                        <div class="span2">
                            <h4>Tops</h4>
                            <ul>
                                <li><a href="products-grid.html">Blouses</a></li>
                                <li><a href="products-grid.html">Bodies</a></li>
                                <li><a href="products-grid.html">Evening Tops</a></li>
                                <li><a href="products-grid.html">Shirts</a></li>
                            </ul>
                        </div>
                        <div class="menu-portrait fr">
                            <img src="<?php echo $this->theme->baseUrl;?>/assets/img/girl.jpg"/>
                        </div>
                    </div>
                </li>
                <li>
                    <a>Accessories</a>
                    <div class="dropdown span7">
                        <div class="span2">
                            <h4>Bags & Purses</h4>
                            <ul>
                                <li><a href="products-grid.html">Clutches</a></li>
                                <li><a href="products-grid.html">Backpacks</a></li>
                                <li><a href="products-grid.html">Perses</a></li>
                                <li><a href="products-grid.html">Satches</a></li>
                                <li><a href="products-grid.html">Shoulder Bags</a></li>
                                <li><a href="products-grid.html">Desinger Bags</a></li>
                            </ul>
                        </div>
                        <div class="span2">
                            <h4>Watches</h4>
                            <ul>
                                <li><a href="products-grid.html">Digital Watches</a></li>
                                <li><a href="products-grid.html">Sports Watches</a></li>
                                <li><a href="products-grid.html">Chronograph Watches</a></li>
                                <li><a href="products-grid.html">Designer Watches</a></li>
                                <li><a href="products-grid.html">Casio Watches</a></li>
                            </ul>
                        </div>
                        <div class="menu-portrait fr">
                            <img src="<?php echo $this->theme->baseUrl;?>/assets/img/watch.jpg"/>
                        </div>
                    </div>
                </li>
                <li>
                    <a>Pages</a>
                    <div class="dropdown span3">
                        <div class="span2">
                            <ul>
                                <li><a href="products-grid.html">Products Grid-view</a></li>
                                <li><a href="products-list.html">Products List-view</a></li>
                                <li><a href="product-details.html">Product Details</a></li>
                                <li><a href="login.html">Account Login</a></li>
                                <li><a href="registration.html">Account Registration</a></li>
                                <li><a href="checkout.html">Chechout</a></li>
                                <li><a href="shortcodes.html">Shortcodes</a></li>
                                <li><a href="advanced-search.html">Advanced Search</a></li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="contact-us.html">Contact Us</a></li>
            </ul>
            <!--/LISTS-->
        </div>
        <!-- /MENU -->
        <!--SLIDER-->
        <div class="slider-block row clearfix">
            <div class="span7 ml-0 fl clearfix">
                <!--SLIDER WRAPPER-->
                <div class="list_carousel responsive clearfix" id="slider">
                    <!-- SLIDER LISTS-->
                    <ul id="carouFredSel-big">
                        <li>
                            <!--SLIDER IMAGE-->
                            <img src="<?php echo $this->theme->baseUrl;?>/assets/img/slider/slide33.jpg"/>
                            <!--SLIDER TITLE AND TEXT-->
                            <div>
                                <h4>Modern Red Dress</h4>
                                <p>
                                    Beautiful and modern red dress with low price. Summer fashion collection.
                                </p>
                            </div>
                            <!--/SLIDER TITLE AND TEXT-->
                        </li>
                        <li>
                            <!--SLIDER IMAGE-->
                            <img src="<?php echo $this->theme->baseUrl;?>/assets/img/slider/slide22.jpg"/>
                            <!--SLIDER TITLE AND TEXT-->
                            <div>
                                <h4>Silver Dress</h4>
                                <p>
                                    Only for you the best fashion dress. Summer fashion collection.
                                </p>
                            </div>
                            <!--/SLIDER TITLE AND TEXT-->
                        </li>
                        <li>
                            <!--SLIDER IMAGE-->
                            <img src="<?php echo $this->theme->baseUrl;?>/assets/img/slider/slide11.jpg"/>
                            <!--SLIDER TITLE AND TEXT-->
                            <div>
                                <h4>Dress</h4>
                                <p>
                                    Dress and other things
                                </p>
                            </div>
                            <!--/SLIDER TITLE AND TEXT-->
                        </li>
                        <li>
                            <!--SLIDER IMAGE-->
                            <img src="<?php echo $this->theme->baseUrl;?>/assets/img/slider/slide44.jpg"/>
                            <!--SLIDER TITLE AND TEXT-->
                            <div>
                                <h4>Dress</h4>
                                <p>
                                    Dress and other things
                                </p>
                            </div>
                            <!--/SLIDER TITLE AND TEXT-->
                        </li>
                    </ul>
                    <!-- /SLIDER LISTS-->
                    <div class="clearfix">
                    </div>
                    <!--SLIDER NAVIGATION-->
                    <div class="carousel_nav">
                        <a id="prev_big" class="prev" href="index.html#">&lt;</a>
                        <a id="next_big" class="next" href="index.html#">&gt;</a>
                    </div>
                    <!--/SLIDER NAVIGATION-->
                </div>
                <!-- /SLIDER WRAPPER-->
            </div>
            <!--SPECIAL OFFERS-->
            <div class="span5 fr">
                <div class="special-offers-vertical fr">
                    <a href="index.html" class="read-more">Click to read more</a>
                    <img src="<?php echo $this->theme->baseUrl;?>/assets/img/special-offer-vertical-5.jpg"/>
                </div>
                <div class="special-offers-vertical fr">
                    <a href="index.html" class="read-more">Click to read more</a>
                    <img src="<?php echo $this->theme->baseUrl;?>/assets/img/special-offer-vertical-4.jpg"/>
                </div>
            </div>
            <!--/SPECIAL OFFERS-->
        </div>
        <!-- /SLIDER-->
        <!--RULER LINE-->
        <div class="ruler">
        </div>
        <!--BLOCK TITLE-->
        <h3 class="block-title">Bestsellers</h3>
        <!--PRODUCTS BLOCK-->
        <div class="products list_carousel responsive">
            <ul id="productBestSale">
                <li>
                    <div class="product fl">
                        <div class="product-new">
                        </div>
                        <div class="product-preview">
                            <img src="<?php echo $this->theme->baseUrl;?>/assets/img/products/1.jpg" alt="product">
                        </div>
                        <div class="product-info">
                            <h5><a href="product-details.html">Satin Ankle Dress</a></h5>
                            <h4><span></span> $149.99</h4>
                            <div class="button-box">
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
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product fl">
                        <div class="product-sale">
                        </div>
                        <div class="product-preview">
                            <img src="<?php echo $this->theme->baseUrl;?>/assets/img/products/2.jpg" alt="product">
                        </div>
                        <div class="product-info">
                            <h5><a href="product-details.html">Chiffon V-Neckline Dress</a></h5>
                            <h4><span>$39.99</span> $35.99</h4>
                            <div class="button-box">
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
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product fl">
                        <div class="product-new">
                        </div>
                        <div class="product-sale">
                        </div>
                        <div class="product-preview">
                            <img src="<?php echo $this->theme->baseUrl;?>/assets/img/products/5.jpg" alt="product">
                        </div>
                        <div class="product-info">
                            <h5><a href="product-details.html">Cocktail Seremony Dress</a></h5>
                            <h4><span>$139.99</span> $129.99</h4>
                            <div class="button-box">
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
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product fl">
                        <div class="product-preview">
                            <img src="<?php echo $this->theme->baseUrl;?>/assets/img/products/4.jpg" alt="product">
                        </div>
                        <div class="product-info">
                            <h5><a href="product-details.html">Chiffon Bodice Dress</a></h5>
                            <h4><span></span> $149.99</h4>
                            <div class="button-box">
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
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product fl">
                        <div class="product-new">
                        </div>
                        <div class="product-sale">
                        </div>
                        <div class="product-preview">
                            <img src="<?php echo $this->theme->baseUrl;?>/assets/img/products/3.jpg" alt="product">
                        </div>
                        <div class="product-info">
                            <h5><a href="product-details.html">Silk-like Satin Dress</a></h5>
                            <h4><span>$60.00</span> $49.50</h4>
                            <div class="button-box">
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
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="clearfix">
            </div>
            <div class="carousel_nav">
                <a id="prev_productBestSale" class="prev" href="index.html#">&lt;</a>
                <a id="next_productBestSale" class="next" href="index.html#">&gt;</a>
            </div>
        </div>
        <!--/PRODUCTS BLOCK-->
        <div class="clearfix">
        </div>
        <!--BANNER-->
        <div class="banner">
            <img src="<?php echo $this->theme->baseUrl;?>/assets/img/banner2.jpg"/>
        </div>
        <!--/BANNER-->
        <div class="clearfix">
        </div>
        <div class="span8 ml-0 fl">
            <!--BLOCK TITLE-->
            <h3 class="block-title">New Products</h3>
            <!--PRODUCTS BLOCK-->
            <div class="products list_carousel responsive">
                <ul id="productNew">
                    <li>
                        <div class="product fl">
                            <div class="product-new">
                            </div>
                            <div class="product-preview">
                                <img src="<?php echo $this->theme->baseUrl;?>/assets/img/products/1.jpg" alt="product">
                            </div>
                            <div class="product-info">
                                <h5><a href="product-details.html">Satin Ankle Dress</a></h5>
                                <h4><span></span> $149.99</h4>
                                <div class="button-box">
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
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="product fl">
                            <div class="product-sale">
                            </div>
                            <div class="product-preview">
                                <img src="<?php echo $this->theme->baseUrl;?>/assets/img/products/2.jpg" alt="product">
                            </div>
                            <div class="product-info">
                                <h5><a href="product-details.html">Chiffon V-Neckline Dress</a></h5>
                                <h4><span>$39.99</span> $35.99</h4>
                                <div class="button-box">
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
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="product fl">
                            <div class="product-new">
                            </div>
                            <div class="product-sale">
                            </div>
                            <div class="product-preview">
                                <img src="<?php echo $this->theme->baseUrl;?>/assets/img/products/5.jpg" alt="product">
                            </div>
                            <div class="product-info">
                                <h5><a href="product-details.html">Cocktail Seremony Dress</a></h5>
                                <h4><span>$139.99</span> $129.99</h4>
                                <div class="button-box">
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
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="product fl">
                            <div class="product-preview">
                                <img src="<?php echo $this->theme->baseUrl;?>/assets/img/products/4.jpg" alt="product">
                            </div>
                            <div class="product-info">
                                <h5><a href="product-details.html">Chiffon Bodice Dress</a></h5>
                                <h4><span></span> $149.99</h4>
                                <div class="button-box">
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
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="product fl">
                            <div class="product-new">
                            </div>
                            <div class="product-sale">
                            </div>
                            <div class="product-preview">
                                <img src="<?php echo $this->theme->baseUrl;?>/assets/img/products/3.jpg" alt="product">
                            </div>
                            <div class="product-info">
                                <h5><a href="product-details.html">Silk-like Satin Dress</a></h5>
                                <h4><span>$60.00</span> $49.50</h4>
                                <div class="button-box">
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
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

                <div class="clearfix">
                </div>
                <div class="carousel_nav">
                    <a id="prev_productNew" class="prev" href="index.html#">&lt;</a>
                    <a id="next_productNew" class="next" href="index.html#">&gt;</a>
                </div>
            </div>
            <!--/PRODUCTS BLOCK-->
            <!--RULER LINE-->
            <div class="ruler">
            </div>
            <!--BLOCK TITLE-->
            <h3 class="block-title">Featured Products</h3>
            <!--PRODUCTS BLOCK-->
            <div class="products list_carousel responsive">
                <ul id="productFeatured">
                    <li>
                        <div class="product fl">
                            <div class="product-new">
                            </div>
                            <div class="product-preview">
                                <img src="<?php echo $this->theme->baseUrl;?>/assets/img/products/1.jpg" alt="product">
                            </div>
                            <div class="product-info">
                                <h5><a href="product-details.html">Satin Ankle Dress</a></h5>
                                <h4><span></span> $149.99</h4>
                                <div class="button-box">
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
                    </li>
                    <li>
                        <div class="product fl">
                            <div class="product-sale">
                            </div>
                            <div class="product-preview">
                                <img src="<?php echo $this->theme->baseUrl;?>/assets/img/products/2.jpg" alt="product">
                            </div>
                            <div class="product-info">
                                <h5><a href="product-details.html">Chiffon V-Neckline Dress</a></h5>
                                <h4><span>$39.99</span> $35.99</h4>
                                <div class="button-box">
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
                    </li>
                    <li>
                        <div class="product fl">
                            <div class="product-new">
                            </div>
                            <div class="product-sale">
                            </div>
                            <div class="product-preview">
                                <img src="<?php echo $this->theme->baseUrl;?>/assets/img/products/5.jpg" alt="product">
                            </div>
                            <div class="product-info">
                                <h5><a href="product-details.html">Cocktail Seremony Dress</a></h5>
                                <h4><span>$139.99</span> $129.99</h4>
                                <div class="button-box">
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
                    </li>
                    <li>
                        <div class="product fl">
                            <div class="product-preview">
                                <img src="<?php echo $this->theme->baseUrl;?>/assets/img/products/4.jpg" alt="product">
                            </div>
                            <div class="product-info">
                                <h5><a href="product-details.html">Chiffon Bodice Dress</a></h5>
                                <h4><span></span> $149.99</h4>
                                <div class="button-box">
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
                    </li>
                    <li>
                        <div class="product fl">
                            <div class="product-new">
                            </div>
                            <div class="product-sale">
                            </div>
                            <div class="product-preview">
                                <img src="<?php echo $this->theme->baseUrl;?>/assets/img/products/3.jpg" alt="product">
                            </div>
                            <div class="product-info">
                                <h5><a href="product-details.html">Silk-like Satin Dress</a></h5>
                                <h4><span>$60.00</span> $49.50</h4>
                                <div class="button-box">
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
                    </li>
                </ul>
                <div class="carousel_nav">
                    <a id="prev_productFeatured" class="prev" href="index.html#">&lt;</a>
                    <a id="next_productFeatured" class="next" href="index.html#">&gt;</a>
                </div>
                <div class="clearfix">
                </div>
            </div>
            <!--/PRODUCTS BLOCK-->
        </div>
        <div class="vertical span4 ml-0 fr">
            <!--BLOCK TITLE-->
            <h3 class="block-title">Popular News</h3>
            <!--POPULAR BLOCK-->
            <ul class="popular">
                <li class="clearfix">
                    <div class="popular-img fl">
                        <img src="<?php echo $this->theme->baseUrl;?>/assets/img/popular3.jpg">
                    </div>
                    <a href="index.html">Announced new summer collection for family</a><br>
                    <strong>25 May, 2013.</strong></li>
                <li class="clearfix">
                    <div class="popular-img fl">
                        <img src="<?php echo $this->theme->baseUrl;?>/assets/img/popular2.jpg">
                    </div>
                    <a href="index.html">Announced top 20 brends and popular fashion collection</a><br>
                    <strong>25 May, 2013.</strong></li>
                <li class="clearfix">
                    <div class="popular-img fl">
                        <img src="<?php echo $this->theme->baseUrl;?>/assets/img/popular3.jpg">
                    </div>
                    <a href="index.html">Announced new summer collection for family</a><br>
                    <strong>25 May, 2013.</strong></li>
            </ul>
            <!--/POPULAR BLOCK-->
            <div class="clearfix">
            </div>
            <!--BLOCK TITLE-->
            <h3 class="block-title">Daily Deal</h3>
            <!--Daily Deal-->
            <div class="daily-deal fl">
                <div class="product-deal">79% off</div>
                <div class="product-preview">
                    <img src="<?php echo $this->theme->baseUrl;?>/assets/img/products/1.jpg" alt="product">
                </div>
                <div class="product-info">
                    <h5><a href="product-details.html">Satin Ankle Dress</a></h5>
                    <h4><span>was $149.99</span> $31.49</h4>
                </div>
                <div class="countdown">
                    <p id="time" class="time"></p>
                </div>
            </div>
            <!--/Daily Deal-->
            <div class="clearfix">
            </div>
            <!--BLOCK TITLE-->
            <h3 class="block-title">Newsletter</h3>
            <!--NEWSLETTER FORM-->
            <form action="index.html" method="post" class="fl">
                <input type="email" id="email" name="email"/>
                <button></button>
            </form>
            <!--/NEWSLETTER FORM-->
            <div class="clearfix">
            </div>
            <!--BLOCK TITLE-->
            <h3 class="block-title">Information</h3>
            <!--INFORMATION LIST-->
            <ul class="icons">
                <li><i class="icon-angle-right"></i><a href="index.html">Delivery</a></li>
                <li><i class="icon-angle-right"></i><a href="index.html">Legal Notice</a></li>
                <li><i class="icon-angle-right"></i><a href="index.html">Condition of use</a></li>
                <li><i class="icon-angle-right"></i><a href="index.html">About us</a></li>
                <li><i class="icon-angle-right"></i><a href="index.html">Secure payment</a></li>
                <li><i class="icon-angle-right"></i><a href="index.html">Our stores</a></li>
            </ul>
            <!--/INFORMATION LIST-->
        </div>
        <div class="clearfix">
        </div>
        <!--RULER LINE-->
        <div class="ruler">
        </div>
        <!--PARTNERS-->
        <div class="partners list_carousel responsive">
            <ul id="partner">
                <li><img src="http://placehold.it/200x100"></li>
                <li><img src="http://placehold.it/200x100"></li>
                <li><img src="http://placehold.it/200x100"></li>
                <li><img src="http://placehold.it/200x100"></li>
                <li><img src="http://placehold.it/200x100"></li>
                <li><img src="http://placehold.it/200x100"></li>
                <li><img src="http://placehold.it/200x100"></li>
                <li><img src="http://placehold.it/200x100"></li>
            </ul>
            <div class="clearfix">
            </div>
        </div>
        <!--/PARTNERS-->
    </div>
    <!--FOOTER-->
    <div class="footer">
        <div class="footer-information-block clearfix ">
            <!--FOOTER SERVICES-->
            <div class="footer-payment-service ">
                <div class="container row center">
                    <a href="index.html#">
                        <div class="span2">
                            <i class="icon-ok icon-3x"></i><span>Money Back Guarantee</span>
                        </div>
                    </a>
                    <a href="index.html#">
                        <div class="span2">
                            <i class="icon-refresh icon-3x"></i><span>In-Store Exchance</span>
                        </div>
                    </a>
                    <a href="index.html#">
                        <div class="span2">
                            <i class="icon-money icon-3x"></i><span>Payment Upon Shipment</span>
                        </div>
                    </a>
                    <a href="index.html#">
                        <div class="span2">
                            <i class="icon-cogs icon-3x"></i><span>Easy customize</span>
                        </div>
                    </a>
                    <a href="index.html#">
                        <div class="span2">
                            <i class="icon-truck icon-3x"></i><span>Free Shipping</span>
                        </div>
                    </a>
                    <a href="index.html#">
                        <div class="span2">
                            <i class="icon-lock icon-3x"></i><span>100% Secure Payment</span>
                        </div>
                    </a>
                </div>
            </div>
            <!--/FOOTER SERVICES-->
            <div class="container">
                <div class="footer-information-block row-fluid">
                    <div class="span3 pl-10">
                        <h5>Right Choice</h5>
                        <hr>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                        <p>
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
                        </p>
                        <a href="index.html" class="read-more">Click to read more</a>
                    </div>
                    <div class="span3 pl-10">
                        <h5>My Account</h5>
                        <hr>
                        <ul class="icons">
                            <li><i class="icon-angle-right"></i><a href="index.html">My orders</a></li>
                            <li><i class="icon-angle-right"></i><a href="index.html">My credits</a></li>
                            <li><i class="icon-angle-right"></i><a href="index.html">My addresses</a></li>
                            <li><i class="icon-angle-right"></i><a href="index.html">My personal information</a></li>
                            <li><i class="icon-angle-right"></i><a href="index.html">My vouchers</a></li>
                            <li><i class="icon-angle-right"></i><a href="index.html">My favorites</a></li>
                        </ul>
                    </div>
                    <div class="span3 pl-10">
                        <h5>About Us</h5>
                        <hr>
                        <ul class="icons">
                            <li><i class="icon-angle-right"></i><a href="index.html">Our Privacy Policy</a></li>
                            <li><i class="icon-angle-right"></i><a href="index.html">Sales Terms & Conditions</a></li>
                            <li><i class="icon-angle-right"></i><a href="index.html">Cooperation</a></li>
                            <li><i class="icon-angle-right"></i><a href="index.html">Meet Our Best Partners</a></li>
                            <li><i class="icon-angle-right"></i><a href="index.html">One Click to Join Us</a></li>
                        </ul>
                    </div>
                    <div class="span3 pl-10">
                        <div class="quick-contacts">
                            <div>
                                <i class="icon-phone icon-2x"></i><span>Tel:</span>
                                <p>
                                    +001 000 000<br>
                                    + 001 222 222 (fax)
                                </p>
                            </div>
                            <div>
                                <i class="icon-mobile-phone icon-2x"></i><span>Fax:</span>
                                <p>
                                    +77 999 9999<br>
                                    +41 111 2222
                                </p>
                            </div>
                            <div>
                                <i class="icon-envelope-alt icon-2x"></i><span>Email:</span>
                                <p>
                                    info@rightchoice.com<br>
                                    me@rightchoice.com
                                </p>
                            </div>
                            <div class="footer-socials">
                                <a href="index.html" class="fl"><i class="icon-facebook icon-2x"></i></a>
                                <a href="index.html" class="fl"><i class="icon-twitter icon-2x"></i></a>
                                <a href="index.html" class="fl"><i class="icon-linkedin icon-2x"></i></a>
                                <a href="index.html" class="fl"><i class="icon-rss icon-2x"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copy clearfix">
            <div class="container">
                <div class="footer-copy">
                    <div class="footer-copy-icon fl">
                        &copy;
                    </div>
                    <div class="footer-copy-text fl">
                        2013 Powered by Mosaic design.<br>
                        All Rights Reserved.
                    </div>
                    <ul class="footer-payments fr">
                        <li><img src="<?php echo $this->theme->baseUrl;?>/assets/img/payment-maestro.jpg"/></li>
                        <li><img src="<?php echo $this->theme->baseUrl;?>/assets/img/payment-discover.jpg"/></li>
                        <li><img src="<?php echo $this->theme->baseUrl;?>/assets/img/payment-visa.jpg"/></li>
                        <li><img src="<?php echo $this->theme->baseUrl;?>/assets/img/payment-american-express.jpg"/></li>
                        <li><img src="<?php echo $this->theme->baseUrl;?>/assets/img/payment-paypal.jpg"/></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--/FOOTER-->
</div>



<?php $this->endBody(); ?>
</body>

</html>

<?php $this->endPage(); ?>
