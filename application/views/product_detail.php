<!DOCTYPE html>
<html lang="en">
  <head>
    <title>tenderd Site</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url().'assets/frontend/plugins/font-awesome/css/font-awesome.min.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/frontend/fonts/Linearicons/Linearicons/Font/demo-files/demo.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/frontend/plugins/bootstrap4/css/bootstrap.min.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/frontend/plugins/owl-carousel/assets/owl.carousel.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/frontend/plugins/slick/slick/slick.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/frontend/plugins/lightGallery-master/dist/css/lightgallery.min.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/frontend/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/frontend/plugins/jquery-ui/jquery-ui.min.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/frontend/plugins/YTPlayer/dist/css/jquery.mb.YTPlayer.min.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/frontend/plugins/select2/dist/css/select2.min.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/frontend/css/style.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/frontend/css/autopart1.css';?>">
</head>
<body class="layout-2">
    <header class="header header--standard header--autopart" data-sticky="true">
      <div class="header__top">
        <div class="container">
          <div class="header__left">
            <p><strong>FREE SHIPPING</strong> for all orders over $100,000</p>
          </div>
          <div class="header__right">
            <ul class="header__top-links">
			  <li><a href="<?php echo base_url().'index.php/home/vendor'?>">Go to Vendor</a></li>
			  <li><a href="<?php echo base_url().'index.php/home/asearch'?>"><i class="icon-file-search"></i>&nbsp;&nbsp;Advacned Search</a></li>
              <li>
                <div class="ps-block--user-header">
                  <div class="ps-block__left"><i class="icon-user"></i></div>
                  <div class="ps-block__right"><a href="<?php echo base_url().'index.php/login'?>">Login</a><a href="<?php echo base_url().'index.php/register'?>">Register</a></div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="header__content">
        <div class="container">
          <div class="header__content-left">
			  <a  href="<?php echo base_url()?>" style="font-size:18px;font-weight:bolder;padding-right:8px"><img style="width:60px"src="<?php echo base_url().'assets/img/Artwork.png'?>" alt="">&nbsp;EXCESS <span style="color:#5fa30f">YARD</span></a>
            <div class="menu--product-categories">
              <div class="menu__toggle"><i class="icon-menu"></i></div>
              <div class="menu__content">
                <ul class="menu--dropdown">
					<!-- <?php $index = 0; foreach($category_list as $category){ ?>
                 	 <li>
						  <a href="#"><?=$category->categoryName?></a>
                 	 </li>
				  <?php } ?> -->
                    <li><a href="<?php echo base_url().'index.php/home/shop'?>">Shop</a></li>
                    <li><a href="<?php echo base_url().'index.php/home/vendor'?>">Vendor</a></li>
                    <li><a href="<?php echo base_url().'index.php/home/cart'?>">Cart</a></li>
                    <li><a href="<?php echo base_url().'index.php/home/about'?>">AboutUs</a></li>
                    <li><a href="<?php echo base_url().'index.php/home/contact'?>">ContactUs</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="header__content-center">
            <form class="ps-form--quick-search" action="index.html" method="get">
              <div class="form-group--icon"><i class="icon-chevron-down"></i>
                <select class="form-control">
                  <option value="all">All</option>
				   <?php foreach($subcategory_list as $subcategory){?>
						<option value="<?=$subcategory->subcategoryName?>"><?=$subcategory->subcategoryName?></option>
				   <?php } ?>
                </select>
              </div>
              <input class="form-control" type="text" placeholder="I'm looking for...">
              <button>Search</button>
            </form>
          </div>
          <div class="header__content-right">
            <div class="header__actions">
              <div class="ps-block--header-hotline">
                <div class="ps-block__left"><i class="icon-telephone"></i></div>
                <div class="ps-block__right">
                  <p>Hotline<strong>1-800-234-5678</strong></p>
                </div>
              </div>
              <div class="ps-cart--mini"><a class="header__extra" href="#"><i class="icon-bag2"></i><span><i>0</i></span></a>
                <div class="ps-cart__content">
                  <div class="ps-cart__items">
                    <div class="ps-product--cart-mobile">
                      <div class="ps-product__thumbnail"><a href="#"><img src="<?php echo base_url().'assets/frontend/img/products/clothing/7.jpg'?>" alt=""></a></div>
                      <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                        <p><strong>Sold by:</strong>  YOUNG SHOP</p><small>1 x $59.99</small>
                      </div>
                    </div>
                    <div class="ps-product--cart-mobile">
                      <div class="ps-product__thumbnail"><a href="#"><img src="<?php echo base_url().'assets/frontend/img/products/clothing/5.jpg'?>" alt=""></a></div>
                      <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                        <p><strong>Sold by:</strong>  YOUNG SHOP</p><small>1 x $59.99</small>
                      </div>
                    </div>
                  </div>
                  <div class="ps-cart__footer">
                    <h3>Sub Total:<strong>$59.99</strong></h3>
                    <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a><a class="ps-btn" href="checkout.html">Checkout</a></figure>
                  </div>
                </div>
			  </div>
            </div>
          </div>
        </div>
      </div>
      <nav class="navigation">
        <div class="container">
          <ul class="menu menu--technology">
                <li><a href="<?php echo base_url()?>">Home</a></li>
                <li><a href="<?php echo base_url().'index.php/home/shop'?>">Shop</a></li>
                <li><a href="<?php echo base_url().'index.php/home/vendor'?>">Vendor</a></li>
                <li><a href="<?php echo base_url().'index.php/home/cart'?>">Cart</a></li>
                <li><a href="<?php echo base_url().'index.php/home/aboutus'?>">AboutUs</a></li>
                <li><a href="<?php echo base_url().'index.php/home/contactus'?>">ContactUs</a></li>
           </ul>
        </div>
      </nav>
    </header>
    <header class="header header--mobile autopart" data-sticky="true">
      <div class="header__top">
        <div class="header__left">
          <p>Welcome to Martfury Online Shopping Store !</p>
        </div>
        <div class="header__right">
          <ul class="navigation__extra">
			  <li><a href="<?php echo base_url().'index.php/home/vendor'?>">Go to Vendor</a></li>
			  <li><a href="<?php echo base_url().'index.php/home/asearch'?>"><i class="icon-file-search"></i>&nbsp;&nbsp;Advacned Search</a></li>
          </ul>
        </div>
      </div>
      <div class="navigation--mobile">
        <div class="navigation__left">
			<a class="ps-logo" href="<?php echo base_url()?>"><img style="width:60px"src="<?php echo base_url().'assets/img/Artwork.png'?>" alt="">&nbsp;EXCESS <span style="color:#5fa30f">YARD</span></a></div>
        <div class="navigation__right">
          <div class="header__actions">
            <div class="ps-cart--mini"><a class="header__extra" href="#"><i class="icon-bag2"></i><span><i>0</i></span></a>
              <div class="ps-cart__content">
                <div class="ps-cart__items">
                  <div class="ps-product--cart-mobile">
                    <div class="ps-product__thumbnail"><a href="#"><img src="<?php echo base_url().'assets/frontend/img/products/clothing/7.jpg'?>" alt=""></a></div>
                    <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                      <p><strong>Sold by:</strong>  YOUNG SHOP</p><small>1 x $59.99</small>
                    </div>
                  </div>
                  <div class="ps-product--cart-mobile">
                    <div class="ps-product__thumbnail"><a href="#"><img src="<?php echo base_url().'assets/frontend/img/products/clothing/5.jpg'?>" alt=""></a></div>
                    <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                      <p><strong>Sold by:</strong>  YOUNG SHOP</p><small>1 x $59.99</small>
                    </div>
                  </div>
                </div>
                <div class="ps-cart__footer">
                  <h3>Sub Total:<strong>$59.99</strong></h3>
                  <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a><a class="ps-btn" href="checkout.html">Checkout</a></figure>
                </div>
              </div>
            </div>
            <div class="ps-block--user-header">
			  <div class="ps-block__left"><i class="icon-user"></i></div>
			  
              <div class="ps-block__right"><a href="my-account.html">Login</a><a href="my-account.html">Register</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="ps-search--mobile">
        <form class="ps-form--search-mobile" action="index.html" method="get">
          <div class="form-group--nest">
            <input class="form-control" type="text" placeholder="Search something...">
            <button><i class="icon-magnifier"></i></button>
          </div>
        </form>
      </div>
    </header>
    <div class="ps-panel--sidebar" id="cart-mobile">
      <div class="ps-panel__header">
        <h3>Shopping Cart</h3>
      </div>
      <div class="navigation__content">
        <div class="ps-cart--mobile">
          <div class="ps-cart__content">
            <div class="ps-product--cart-mobile">
              <div class="ps-product__thumbnail"><a href="#"><img src="<?php echo base_url().'assets/frontend/img/products/clothing/7.jpg'?>" alt=""></a></div>
              <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                <p><strong>Sold by:</strong>  YOUNG SHOP</p><small>1 x $59.99</small>
              </div>
            </div>
          </div>
          <div class="ps-cart__footer">
            <h3>Sub Total:<strong>$59.99</strong></h3>
            <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a><a class="ps-btn" href="checkout.html">Checkout</a></figure>
          </div>
        </div>
      </div>
    </div>
    <div class="ps-panel--sidebar" id="navigation-mobile">
      <div class="ps-panel__header">
        <h3>Categories</h3>
      </div>
      <div class="ps-panel__content">
        <ul class="menu--mobile">
          <?php foreach($category_list as $category){ ?>
            <li><a href="<?php echo base_url().'index.php/home/shop/'.$category->categoryId?>"><?=$category->categoryName?></a>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
    <div class="navigation--list">
      <div class="navigation__content"><a class="navigation__item ps-toggle--sidebar" href="#menu-mobile"><i class="icon-menu"></i><span> Menu</span></a><a class="navigation__item ps-toggle--sidebar" href="#navigation-mobile"><i class="icon-list4"></i><span> Categories</span></a><a class="navigation__item ps-toggle--sidebar" href="#search-sidebar"><i class="icon-magnifier"></i><span> Search</span></a><a class="navigation__item ps-toggle--sidebar" href="<?php echo base_url().'index.php/home/cart'?>"><i class="icon-bag2"></i><span> Cart</span></a></div>
    </div>
    <div class="ps-panel--sidebar" id="search-sidebar">
      <div class="ps-panel__header">
        <form class="ps-form--search-mobile" action="<?php echo base_url().'home/search'?>" method="get">
          <div class="form-group--nest">
            <input class="form-control" type="text" placeholder="Search something...">
            <button><i class="icon-magnifier"></i></button>
          </div>
        </form>
      </div>
      <div class="navigation__content"></div>
    </div>
    <div class="ps-panel--sidebar" id="menu-mobile">
      <div class="ps-panel__header">
        <h3>Menu</h3>
      </div>
      <div class="ps-panel__content">
        <ul class="menu--mobile">
           <li class="current-menu-item "><a href="<?php echo base_url()?>">Home</a><span class="sub-toggle"></span></li>
          <li class="current-menu-item "><a href="<?php echo base_url().'index.php/home/shop'?>">Shop</a><span class="sub-toggle"></span></li>
          <li class="current-menu-item "><a href="<?php echo base_url().'index.php/home/vendor'?>">Vendor</a><span class="sub-toggle"></span></li>
          <li class="current-menu-item "><a href="<?php echo base_url().'index.php/home/cart'?>">Cart</a><span class="sub-toggle"></span></li>
          <li class="current-menu-item "><a href="<?php echo base_url().'index.php/home/aboutus'?>">AboutUs</a><span class="sub-toggle"></span></li>
          <li class="current-menu-item "><a href="<?php echo base_url().'index.php/home/contactus'?>">ContactUs</a><span class="sub-toggle"></span></li>
         
        </ul>
      </div>
    </div>
    <div class="ps-breadcrumb">
      <div class="ps-container">
        <ul class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li><a href="shop-default.html">Consumer Electrics</a></li>
          <li><a href="shop-default.html">Refrigerators</a></li>
          <li>Marshall Kilburn Portable Wireless Speaker</li>
        </ul>
      </div>
    </div>
    <div class="ps-page--product">
      <div class="ps-container">
        <div class="ps-page__container">
          <div class="ps-page__left">
            <div class="ps-product--detail ps-product--fullwidth">
              <div class="ps-product__header">
                <div class="ps-product__thumbnail" data-vertical="true">
                  <figure>
                    <div class="ps-wrapper">
                      <div class="ps-product__gallery" data-arrow="true">
                        <div class="item"><a href="img/products/detail/fullwidth/1.jpg"><img src="img/products/detail/fullwidth/1.jpg" alt=""></a></div>
                        <div class="item"><a href="img/products/detail/fullwidth/2.jpg"><img src="img/products/detail/fullwidth/2.jpg" alt=""></a></div>
                        <div class="item"><a href="img/products/detail/fullwidth/3.jpg"><img src="img/products/detail/fullwidth/3.jpg" alt=""></a></div>
                      </div>
                    </div>
                  </figure>
                  <div class="ps-product__variants" data-item="4" data-md="4" data-sm="4" data-arrow="false">
                    <div class="item"><img src="img/products/detail/fullwidth/1.jpg" alt=""></div>
                    <div class="item"><img src="img/products/detail/fullwidth/2.jpg" alt=""></div>
                    <div class="item"><img src="img/products/detail/fullwidth/3.jpg" alt=""></div>
                  </div>
                </div>
                <div class="ps-product__info">
                  <h1>Marshall Kilburn Portable Wireless Speaker</h1>
                  <div class="ps-product__meta">
                    <p>Brand:<a href="shop-default.html">Sony</a></p>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>(1 review)</span>
                    </div>
                  </div>
                  <h4 class="ps-product__price">$36.78 – $56.99</h4>
                  <div class="ps-product__desc">
                    <p>Sold By:<a href="shop-default.html"><strong> Go Pro</strong></a></p>
                    <ul class="ps-list--dot">
                      <li> Unrestrained and portable active stereo speaker</li>
                      <li> Free from the confines of wires and chords</li>
                      <li> 20 hours of portable capabilities</li>
                      <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                      <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                    </ul>
                  </div>
                  <div class="ps-product__variations">
                    <figure>
                      <figcaption>Color</figcaption>
                      <div class="ps-variant ps-variant--color color--1"><span class="ps-variant__tooltip">Black</span></div>
                      <div class="ps-variant ps-variant--color color--2"><span class="ps-variant__tooltip"> Gray</span></div>
                    </figure>
                  </div>
                  <div class="ps-product__shopping">
                    <figure>
                      <figcaption>Quantity</figcaption>
                      <div class="form-group--number">
                        <button class="up"><i class="fa fa-plus"></i></button>
                        <button class="down"><i class="fa fa-minus"></i></button>
                        <input class="form-control" type="text" placeholder="1">
                      </div>
                    </figure><a class="ps-btn ps-btn--gray" href="#">Add to cart</a><a class="ps-btn" href="#">Buy Now</a>
                    <div class="ps-product__actions"><a href="#"><i class="icon-heart"></i></a><a href="#"><i class="icon-chart-bars"></i></a></div>
                  </div>
                  <div class="ps-product__specification"><a class="report" href="#">Report Abuse</a>
                    <p><strong>SKU:</strong> SF1133569600-1</p>
                    <p class="categories"><strong> Categories:</strong><a href="#">Consumer Electronics</a>,<a href="#"> Refrigerator</a>,<a href="#">Babies & Moms</a></p>
                    <p class="tags"><strong> Tags</strong><a href="#">sofa</a>,<a href="#">technologies</a>,<a href="#">wireless</a></p>
                  </div>
                  <div class="ps-product__sharing"><a class="facebook" href="#"><i class="fa fa-facebook"></i></a><a class="twitter" href="#"><i class="fa fa-twitter"></i></a><a class="google" href="#"><i class="fa fa-google-plus"></i></a><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></div>
                </div>
              </div>
              <div class="ps-product__content ps-tab-root">
                <ul class="ps-tab-list">
                  <li class="active"><a href="#tab-1">Description</a></li>
                  <li><a href="#tab-2">Specification</a></li>
                  <li><a href="#tab-3">Vendor</a></li>
                  <li><a href="#tab-4">Reviews (1)</a></li>
                  <li><a href="#tab-5">Questions and Answers</a></li>
                  <li><a href="#tab-6">More Offers</a></li>
                </ul>
                <div class="ps-tabs">
                  <div class="ps-tab active" id="tab-1">
                    <div class="ps-document">
                      <h5>Embodying the Raw, Wayward Spirit of Rock 'N' Roll</h5>
                      <p>Embodying the raw, wayward spirit of rock ‘n’ roll, the Kilburn portable active stereo speaker takes the unmistakable look and sound of Marshall, unplugs the chords, and takes the show on the road.</p>
                      <p>Weighing in under 7 pounds, the Kilburn is a lightweight piece of vintage styled engineering. Setting the bar as one of the loudest speakers in its class, the Kilburn is a compact, stout-hearted hero with a well-balanced audio which boasts a clear midrange and extended highs for a sound that is both articulate and pronounced. The analogue knobs allow you to fine tune the controls to your personal preferences while the guitar-influenced leather strap enables easy and stylish travel.</p><img class="mb-30" src="img/products/detail/content/description.jpg" alt="">
                      <h5>What do you get</h5>
                      <p>Sound of Marshall, unplugs the chords, and takes the show on the road.</p>
                      <p>Weighing in under 7 pounds, the Kilburn is a lightweight piece of vintage styled engineering. Setting the bar as one of the loudest speakers in its class, the Kilburn is a compact, stout-hearted hero with a well-balanced audio which boasts a clear midrange and extended highs for a sound that is both articulate and pronounced. The analogue knobs allow you to fine tune the controls to your personal preferences while the guitar-influenced leather strap enables easy and stylish travel.</p>
                      <p>The FM radio is perhaps gone for good, the assumption apparently being that the jury has ruled in favor of streaming over the internet. The IR blaster is another feature due for retirement – the S6 had it, then the Note5 didn’t, and now with the S7 the trend is clear.</p>
                      <h5>Perfectly Done</h5>
                      <p>Meanwhile, the IP68 water resistance has improved from the S5, allowing submersion of up to five feet for 30 minutes, plus there’s no annoying flap covering the charging port</p>
                      <ul class="pl-0">
                        <li>No FM radio (except for T-Mobile units in the US, so far)</li>
                        <li>No IR blaster</li>
                        <li>No stereo speakers</li>
                      </ul>
                      <p>If you’ve taken the phone for a plunge in the bath, you’ll need to dry the charging port before plugging in. Samsung hasn’t reinvented the wheel with the design of the Galaxy S7, but it didn’t need to. The Gala S6 was an excellently styled device, and the S7 has managed to improve on that.</p>
                    </div>
                  </div>
                  <div class="ps-tab" id="tab-2">
                    <div class="table-responsive">
                      <table class="table table-bordered ps-table ps-table--specification">
                        <tbody>
                          <tr>
                            <td>Color</td>
                            <td>Black, Gray</td>
                          </tr>
                          <tr>
                            <td>Style</td>
                            <td>Ear Hook</td>
                          </tr>
                          <tr>
                            <td>Wireless</td>
                            <td>Yes</td>
                          </tr>
                          <tr>
                            <td>Dimensions</td>
                            <td>5.5 x 5.5 x 9.5 inches</td>
                          </tr>
                          <tr>
                            <td>Weight</td>
                            <td>6.61 pounds</td>
                          </tr>
                          <tr>
                            <td>Battery Life</td>
                            <td>20 hours</td>
                          </tr>
                          <tr>
                            <td>Bluetooth</td>
                            <td>Yes</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="ps-tab" id="tab-3">
                    <h4>GoPro</h4>
                    <p>Digiworld US, New York’s no.1 online retailer was established in May 2012 with the aim and vision to become the one-stop shop for retail in New York with implementation of best practices both online</p><a href="#">More Products from gopro</a>
                  </div>
                  <div class="ps-tab" id="tab-4">
                    <div class="row">
                      <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 ">
                        <div class="ps-block--average-rating">
                          <div class="ps-block__header">
                            <h3>4.00</h3>
                            <select class="ps-rating" data-read-only="true">
                              <option value="1">1</option>
                              <option value="1">2</option>
                              <option value="1">3</option>
                              <option value="1">4</option>
                              <option value="2">5</option>
                            </select><span>1 Review</span>
                          </div>
                          <div class="ps-block__star"><span>5 Star</span>
                            <div class="ps-progress" data-value="100"><span></span></div><span>100%</span>
                          </div>
                          <div class="ps-block__star"><span>4 Star</span>
                            <div class="ps-progress" data-value="0"><span></span></div><span>0</span>
                          </div>
                          <div class="ps-block__star"><span>3 Star</span>
                            <div class="ps-progress" data-value="0"><span></span></div><span>0</span>
                          </div>
                          <div class="ps-block__star"><span>2 Star</span>
                            <div class="ps-progress" data-value="0"><span></span></div><span>0</span>
                          </div>
                          <div class="ps-block__star"><span>1 Star</span>
                            <div class="ps-progress" data-value="0"><span></span></div><span>0</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 ">
                        <form class="ps-form--review" action="index.html" method="get">
                          <h4>Submit Your Review</h4>
                          <p>Your email address will not be published. Required fields are marked<sup>*</sup></p>
                          <div class="form-group form-group__rating">
                            <label>Your rating of this product</label>
                            <select class="ps-rating" data-read-only="false">
                              <option value="0">0</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <textarea class="form-control" rows="6" placeholder="Write your review here"></textarea>
                          </div>
                          <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12  ">
                              <div class="form-group">
                                <input class="form-control" type="text" placeholder="Your Name">
                              </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12  ">
                              <div class="form-group">
                                <input class="form-control" type="email" placeholder="Your Email">
                              </div>
                            </div>
                          </div>
                          <div class="form-group submit">
                            <button class="ps-btn">Submit Review</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="ps-tab" id="tab-5">
                    <div class="ps-block--questions-answers">
                      <h3>Questions and Answers</h3>
                      <div class="form-group">
                        <input class="form-control" type="text" placeholder="Have a question? Search for answer?">
                      </div>
                    </div>
                  </div>
                  <div class="ps-tab active" id="tab-6">
                    <p>Sorry no more offers available</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="ps-page__right">
            <aside class="widget widget_product widget_features">
              <p><i class="icon-network"></i> Shipping worldwide</p>
              <p><i class="icon-3d-rotate"></i> Free 7-day return if eligible, so easy</p>
              <p><i class="icon-receipt"></i> Supplier give bills for this product.</p>
              <p><i class="icon-credit-card"></i> Pay online or when receiving goods</p>
            </aside>
            <aside class="widget widget_sell-on-site">
              <p><i class="icon-store"></i> Sell on Martfury?<a href="#"> Register Now !</a></p>
            </aside>
            <aside class="widget widget_ads"><a href="#"><img src="img/ads/product-ads.png" alt=""></a></aside>
            <aside class="widget widget_same-brand">
              <h3>Same Brand</h3>
              <div class="widget__content">
                <div class="ps-product">
                  <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/5.jpg" alt=""/></a>
                    <div class="ps-product__badge">-37%</div>
                    <ul class="ps-product__actions">
                      <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                      <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                      <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                      <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                    </ul>
                  </div>
                  <div class="ps-product__container"><a class="ps-product__vendor" href="#">Robert's Store</a>
                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Grand Slam Indoor Of Show Jumping Novel</a>
                      <div class="ps-product__rating">
                        <select class="ps-rating" data-read-only="true">
                          <option value="1">1</option>
                          <option value="1">2</option>
                          <option value="1">3</option>
                          <option value="1">4</option>
                          <option value="2">5</option>
                        </select><span>01</span>
                      </div>
                      <p class="ps-product__price sale">$32.99 <del>$41.00 </del></p>
                    </div>
                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Grand Slam Indoor Of Show Jumping Novel</a>
                      <p class="ps-product__price sale">$32.99 <del>$41.00 </del></p>
                    </div>
                  </div>
                </div>
                <div class="ps-product">
                  <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/6.jpg" alt=""/></a>
                    <div class="ps-product__badge">-5%</div>
                    <ul class="ps-product__actions">
                      <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                      <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                      <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                      <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                    </ul>
                  </div>
                  <div class="ps-product__container"><a class="ps-product__vendor" href="#">Youngshop</a>
                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                      <div class="ps-product__rating">
                        <select class="ps-rating" data-read-only="true">
                          <option value="1">1</option>
                          <option value="1">2</option>
                          <option value="1">3</option>
                          <option value="1">4</option>
                          <option value="2">5</option>
                        </select><span>01</span>
                      </div>
                      <p class="ps-product__price sale">$100.99 <del>$106.00 </del></p>
                    </div>
                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                      <p class="ps-product__price sale">$100.99 <del>$106.00 </del></p>
                    </div>
                  </div>
                </div>
              </div>
            </aside>
          </div>
        </div>
        <div class="ps-section--default ps-customer-bought">
          <div class="ps-section__header">
            <h3>Customers who bought this item also bought</h3>
          </div>
          <div class="ps-section__content">
            <div class="row">
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
                <div class="ps-product">
                  <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/4.jpg" alt=""/></a>
                    <div class="ps-product__badge hot">hot</div>
                    <ul class="ps-product__actions">
                      <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                      <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                      <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                      <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                    </ul>
                  </div>
                  <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Xbox One Wireless Controller Black Color</a>
                      <div class="ps-product__rating">
                        <select class="ps-rating" data-read-only="true">
                          <option value="1">1</option>
                          <option value="1">2</option>
                          <option value="1">3</option>
                          <option value="1">4</option>
                          <option value="2">5</option>
                        </select><span>01</span>
                      </div>
                      <p class="ps-product__price">$55.99</p>
                    </div>
                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Xbox One Wireless Controller Black Color</a>
                      <p class="ps-product__price">$55.99</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
                <div class="ps-product">
                  <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/5.jpg" alt=""/></a>
                    <div class="ps-product__badge">-37%</div>
                    <ul class="ps-product__actions">
                      <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                      <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                      <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                      <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                    </ul>
                  </div>
                  <div class="ps-product__container"><a class="ps-product__vendor" href="#">Robert's Store</a>
                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Grand Slam Indoor Of Show Jumping Novel</a>
                      <div class="ps-product__rating">
                        <select class="ps-rating" data-read-only="true">
                          <option value="1">1</option>
                          <option value="1">2</option>
                          <option value="1">3</option>
                          <option value="1">4</option>
                          <option value="2">5</option>
                        </select><span>01</span>
                      </div>
                      <p class="ps-product__price sale">$32.99 <del>$41.00 </del></p>
                    </div>
                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Grand Slam Indoor Of Show Jumping Novel</a>
                      <p class="ps-product__price sale">$32.99 <del>$41.00 </del></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
                <div class="ps-product">
                  <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/6.jpg" alt=""/></a>
                    <div class="ps-product__badge">-5%</div>
                    <ul class="ps-product__actions">
                      <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                      <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                      <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                      <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                    </ul>
                  </div>
                  <div class="ps-product__container"><a class="ps-product__vendor" href="#">Youngshop</a>
                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                      <div class="ps-product__rating">
                        <select class="ps-rating" data-read-only="true">
                          <option value="1">1</option>
                          <option value="1">2</option>
                          <option value="1">3</option>
                          <option value="1">4</option>
                          <option value="2">5</option>
                        </select><span>01</span>
                      </div>
                      <p class="ps-product__price sale">$100.99 <del>$106.00 </del></p>
                    </div>
                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                      <p class="ps-product__price sale">$100.99 <del>$106.00 </del></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
                <div class="ps-product">
                  <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/7.jpg" alt=""/></a>
                    <div class="ps-product__badge">-16%</div>
                    <ul class="ps-product__actions">
                      <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                      <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                      <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                      <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                    </ul>
                  </div>
                  <div class="ps-product__container"><a class="ps-product__vendor" href="#">Youngshop</a>
                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Korea Long Sofa Fabric In Blue Navy Color</a>
                      <div class="ps-product__rating">
                        <select class="ps-rating" data-read-only="true">
                          <option value="1">1</option>
                          <option value="1">2</option>
                          <option value="1">3</option>
                          <option value="1">4</option>
                          <option value="2">5</option>
                        </select><span>01</span>
                      </div>
                      <p class="ps-product__price sale">$567.89 <del>$670.20 </del></p>
                    </div>
                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Korea Long Sofa Fabric In Blue Navy Color</a>
                      <p class="ps-product__price sale">$567.89 <del>$670.20 </del></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
                <div class="ps-product">
                  <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/8.jpg" alt=""/></a>
                    <div class="ps-product__badge">-16%</div>
                    <ul class="ps-product__actions">
                      <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                      <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                      <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                      <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                    </ul>
                  </div>
                  <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young shop</a>
                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Unero Military Classical Backpack</a>
                      <div class="ps-product__rating">
                        <select class="ps-rating" data-read-only="true">
                          <option value="1">1</option>
                          <option value="1">2</option>
                          <option value="1">3</option>
                          <option value="1">4</option>
                          <option value="2">5</option>
                        </select><span>02</span>
                      </div>
                      <p class="ps-product__price sale">$35.89 <del>$42.20 </del></p>
                    </div>
                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Unero Military Classical Backpack</a>
                      <p class="ps-product__price sale">$35.89 <del>$42.20 </del></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
                <div class="ps-product">
                  <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/9.jpg" alt=""/></a>
                    <ul class="ps-product__actions">
                      <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                      <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                      <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                      <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                    </ul>
                  </div>
                  <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young shop</a>
                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Rayban Rounded Sunglass Brown Color</a>
                      <div class="ps-product__rating">
                        <select class="ps-rating" data-read-only="true">
                          <option value="1">1</option>
                          <option value="1">2</option>
                          <option value="1">3</option>
                          <option value="1">4</option>
                          <option value="2">5</option>
                        </select><span>02</span>
                      </div>
                      <p class="ps-product__price">$35.89</p>
                    </div>
                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Rayban Rounded Sunglass Brown Color</a>
                      <p class="ps-product__price">$35.89</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="ps-section--default">
          <div class="ps-section__header">
            <h3>Related products</h3>
          </div>
          <div class="ps-section__content">
            <div class="ps-carousel--nav owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-item="6" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
              <div class="ps-product">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/11.jpg" alt=""/></a>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Robert's Store</a>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Men’s Sports Runnning Swim Board Shorts</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>01</span>
                    </div>
                    <p class="ps-product__price">$13.43</p>
                  </div>
                  <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Men’s Sports Runnning Swim Board Shorts</a>
                    <p class="ps-product__price">$13.43</p>
                  </div>
                </div>
              </div>
              <div class="ps-product">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/12.jpg" alt=""/></a>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Paul’s Smith Sneaker InWhite Color</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>01</span>
                    </div>
                    <p class="ps-product__price">$75.44</p>
                  </div>
                  <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Paul’s Smith Sneaker InWhite Color</a>
                    <p class="ps-product__price">$75.44</p>
                  </div>
                </div>
              </div>
              <div class="ps-product">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/13.jpg" alt=""/></a>
                  <div class="ps-product__badge">-7%</div>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>01</span>
                    </div>
                    <p class="ps-product__price sale">$57.99 <del>$62.99 </del></p>
                  </div>
                  <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                    <p class="ps-product__price sale">$57.99 <del>$62.99 </del></p>
                  </div>
                </div>
              </div>
              <div class="ps-product">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/14.jpg" alt=""/></a>
                  <div class="ps-product__badge">-7%</div>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Beat Spill 2.0 Wireless Speaker – White</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>01</span>
                    </div>
                    <p class="ps-product__price sale">$57.99 <del>$62.99 </del></p>
                  </div>
                  <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Beat Spill 2.0 Wireless Speaker – White</a>
                    <p class="ps-product__price sale">$57.99 <del>$62.99 </del></p>
                  </div>
                </div>
              </div>
              <div class="ps-product">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/15.jpg" alt=""/></a>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">ASUS Chromebook Flip – 10.2 Inch</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>01</span>
                    </div>
                    <p class="ps-product__price sale">$332.38</p>
                  </div>
                  <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">ASUS Chromebook Flip – 10.2 Inch</a>
                    <p class="ps-product__price sale">$332.38</p>
                  </div>
                </div>
              </div>
              <div class="ps-product">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/16.jpg" alt=""/></a>
                  <div class="ps-product__badge">-7%</div>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple Macbook Retina Display 12&quot;</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>01</span>
                    </div>
                    <p class="ps-product__price sale">$1200.00 <del>$1362.99 </del></p>
                  </div>
                  <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Apple Macbook Retina Display 12&quot;</a>
                    <p class="ps-product__price sale">$1200.00 <del>$1362.99 </del></p>
                  </div>
                </div>
              </div>
              <div class="ps-product">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/17.jpg" alt=""/></a>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Robert's Store</a>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Samsung UHD TV 24inch</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>01</span>
                    </div>
                    <p class="ps-product__price">$599.00</p>
                  </div>
                  <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Samsung UHD TV 24inch</a>
                    <p class="ps-product__price">$599.00</p>
                  </div>
                </div>
              </div>
              <div class="ps-product">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/18.jpg" alt=""/></a>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Robert's Store</a>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">EPSION Plaster Printer</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>01</span>
                    </div>
                    <p class="ps-product__price">$233.28</p>
                  </div>
                  <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">EPSION Plaster Printer</a>
                    <p class="ps-product__price">$233.28</p>
                  </div>
                </div>
              </div>
              <div class="ps-product">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/19.jpg" alt=""/></a>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Robert's Store</a>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">EPSION Plaster Printer</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>01</span>
                    </div>
                    <p class="ps-product__price">$233.28</p>
                  </div>
                  <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">EPSION Plaster Printer</a>
                    <p class="ps-product__price">$233.28</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="ps-footer ps-footer--2">
      <div class="container">
        <div class="ps-footer__content">
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
              <aside class="widget widget_footer">
                <h4 class="widget-title">Quick links</h4>
                <ul class="ps-list--link">
                  <li><a href="policy.html">Policy</a></li>
                  <li><a href="term-condition.html">Term & Condition</a></li>
                  <li><a href="shipping.html">Shipping</a></li>
                  <li><a href="return.html">Return</a></li>
                  <li><a href="faqs.html">FAQs</a></li>
                </ul>
              </aside>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
              <aside class="widget widget_footer">
                <h4 class="widget-title">Company</h4>
                <ul class="ps-list--link">
                  <li><a href="about-us.html">About Us</a></li>
                  <li><a href="affilate.html">Affilate</a></li>
                  <li><a href="shipping.html">Career</a></li>
                  <li><a href="contact.html">Contact</a></li>
                </ul>
              </aside>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
              <aside class="widget widget_footer">
                <h4 class="widget-title">Bussiness</h4>
                <ul class="ps-list--link">
                  <li><a href="our-press.html">Our Press</a></li>
                  <li><a href="checkout.html">Checkout</a></li>
                  <li><a href="my-account.html">My account</a></li>
                  <li><a href="shop.html">Shop</a></li>
                </ul>
              </aside>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 ">
              <aside class="widget widget_newletters">
                <h4 class="widget-title">Newsletter</h4>
                <form class="ps-form--newletter" action="#" method="get">
                  <div class="form-group--nest">
                    <input class="form-control" type="text" placeholder="Email Address">
                    <button class="ps-btn">Subscribe</button>
                  </div>
                  <ul class="ps-list--social">
                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                  </ul>
                </form>
              </aside>
            </div>
          </div>
        </div>
        <div class="ps-footer__copyright">
          <p>© 2018 Martfury. All Rights Reserved</p>
          <p><span>We Using Safe Payment For:</span><a href="#"><img src="<?php echo base_url().'assets/frontend/img/payment-method/1.jpg'?>" alt=""></a><a href="#"><img src="<?php echo base_url().'assets/frontend/img/payment-method/2.jpg'?>" alt=""></a><a href="#"><img src="<?php echo base_url().'assets/frontend/img/payment-method/3.jpg'?>" alt=""></a><a href="#"><img src="<?php echo base_url().'assets/frontend/img/payment-method/4.jpg'?>" alt=""></a><a href="#"><img src="<?php echo base_url().'assets/frontend/img/payment-method/5.jpg'?>" alt=""></a></p>
        </div>
      </div>
    </footer>
    <div id="back2top"><i class="pe-7s-angle-up"></i></div>
    <div class="ps-site-overlay"></div>
    <div id="loader-wrapper">
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <div class="ps-search" id="site-search"><a class="ps-btn--close" href="#"></a>
      <div class="ps-search__content">
        <form class="ps-form--primary-search" action="do_action" method="post">
          <input class="form-control" type="text" placeholder="Search for...">
          <button><i class="aroma-magnifying-glass"></i></button>
        </form>
      </div>
    </div>
    <!--include shared/cart-sidebar-->
    <!-- Plugins-->
    <script src="<?php echo base_url().'assets/frontend/plugins/jquery-1.12.4.min.js';?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="<?php echo base_url().'assets/frontend/plugins/owl-carousel/owl.carousel.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/frontend/plugins/bootstrap4/js/bootstrap.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/frontend/plugins/imagesloaded.pkgd.js';?>"></script>
    <script src="<?php echo base_url().'assets/frontend/plugins/masonry.pkgd.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/frontend/plugins/isotope.pkgd.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/frontend/plugins/jquery.matchHeight-min.js';?>"></script>
    <script src="<?php echo base_url().'assets/frontend/plugins/slick/slick/slick.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/frontend/plugins/jquery-bar-rating/dist/jquery.barrating.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/frontend/plugins/slick-animation.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/frontend/plugins/lightGallery-master/dist/js/lightgallery-all.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/frontend/plugins/jquery-ui/jquery-ui.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/frontend/plugins/sticky-sidebar/dist/sticky-sidebar.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/frontend/plugins/YTPlayer/dist/jquery.mb.YTPlayer.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/frontend/plugins/jquery.slimscroll.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/frontend/plugins/select2/dist/js/select2.full.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/frontend/plugins/gmap3.min.js';?>"></script>
    <!-- Custom scripts-->
    <script src="<?php echo base_url().'assets/frontend/js/main.js';?>"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxflHHc5FlDVI-J71pO7hM1QJNW1dRp4U&amp;region=GB"></script>
  </body>
</html>