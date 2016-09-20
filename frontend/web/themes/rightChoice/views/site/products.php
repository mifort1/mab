<?php
$this->title = 'Товары';
?>
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