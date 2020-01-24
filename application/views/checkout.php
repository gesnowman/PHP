<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>James Site &amp; Marketplace</title><link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&amp;subset=latin-ext" rel="stylesheet">
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
              <!-- <li><a href="#">Store Location</a></li>
              <li><a href="#">Track Your Order</a></li>
              <li>
                <div class="ps-dropdown"><a href="#">US Dollar</a>
                  <ul class="ps-dropdown-menu">
                    <li><a href="#">Us Dollar</a></li>
                    <li><a href="#">Euro</a></li>
                  </ul>
                </div>
              </li> -->
              <li>
                <div class="ps-block--user-header">
                  <div class="ps-block__left"><i class="icon-user"></i></div>
                  <div class="ps-block__right"><a href="<?php echo base_url().'index.php/login';?>">Login</a><a href="<?php echo base_url().'index.php/register';?>">Register</a></div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="header__content">
        <div class="container">
          <div class="header__content-left"><a class="ps-logo" href="<?php echo base_url();?>"><img src="<?php echo base_url().'assets/frontend/img/logo-autopart1.png';?>" alt=""></a>
            <div class="menu--product-categories">
              <div class="menu__toggle"><i class="icon-menu"></i><span>Shop by Department</span></div>
              <div class="menu__content">
                <ul class="menu--dropdown">
                  <li><a href="<?php echo base_url();?>">Home</a>
                  </li>
                  <li><a href="<?php echo base_url().'index.php/home/list';?>">Product List</a>
                  </li>
                  <li><a href="<?php echo base_url().'index.php/home/detail';?>">Product Details</a>
                  </li>
                  <li><a href="<?php echo base_url().'index.php/home/cart';?>">Shopping Cart</a>
                  </li>
                  <li><a href="<?php echo base_url().'index.php/home/checkout';?>">Checkout</a>
                  </li>
                  <li><a href="<?php echo base_url().'index.php/home/vendor';?>">Go Vendor</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="header__content-center">
            <form class="ps-form--quick-search" action="<?php echo base_url().'index.php/home/search';?>" method="get">
              <div class="form-group--icon"><i class="icon-chevron-down"></i>
                <select class="form-control">
                  <option value="1">All</option>
                  <option value="1">Bags</option>
                  <option value="1">Shoes</option>
                  <option value="1">Men</option>
                  <option value="1">Women</option>
                  <option value="1">Sunglasses</option>
                </select>
              </div>
              <input class="form-control" type="text" placeholder="I'm shopping for...">
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
                      <div class="ps-product__thumbnail"><a href="#"><img src="<?php echo base_url().'assets/frontend/img/products/clothing/7.jpg';?>" alt=""></a></div>
                      <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                        <p><strong>Sold by:</strong>  YOUNG SHOP</p><small>1 x $59.99</small>
                      </div>
                    </div>
                    <div class="ps-product--cart-mobile">
                      <div class="ps-product__thumbnail"><a href="#"><img src="<?php echo base_url().'assets/frontend/img/products/clothing/5.jpg';?>" alt=""></a></div>
                      <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                        <p><strong>Sold by:</strong>  YOUNG SHOP</p><small>1 x $59.99</small>
                      </div>
                    </div>
                  </div>
                  <div class="ps-cart__footer">
                    <h3>Sub Total:<strong>$59.99</strong></h3>
                    <figure><a class="ps-btn" href="<?php echo base_url().'index.php/home/cart';?>">View Cart</a><a class="ps-btn" href="checkout.html">Checkout</a></figure>
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
          <li><a href="<?php echo base_url()?>">Home</a>
            </li>
            <li><a href="<?php echo base_url().'index.php/home/list';?>">Product List</a>
            </li>
            <li><a href="<?php echo base_url().'index.php/home/detail';?>">Product Details</a>
            </li>
            <li><a href="<?php echo base_url().'index.php/home/cart';?>">Shopping Cart</a>
            </li>
            <li><a href="<?php echo base_url().'index.php/home/checkout';?>">Checkout</a>
            </li>
            <li ><a href="<?php echo base_url().'index.php/home/vendor';?>">Go Vendor</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <header class="header header--mobile autopart" data-sticky="true">
      <div class="header__top">
        <div class="header__left">
          <p>Welcome to James Online Shopping Store !</p>
        </div>
        <div class="header__right">
          <ul class="navigation__extra">
            <li><a href="#">Sell on James</a></li>
            <li><a href="#">Tract your order</a></li>
            <!-- <li>
              <div class="ps-dropdown"><a href="#">US Dollar</a>
                <ul class="ps-dropdown-menu">
                  <li><a href="#">Us Dollar</a></li>
                  <li><a href="#">Euro</a></li>
                </ul>
              </div>
            </li> -->
            <!-- <li>
              <div class="ps-dropdown language"><a href="#"><img src="<?php echo base_url().'assets/frontend/img/flag/en.png';?>" alt="">English</a>
                <ul class="ps-dropdown-menu">
                  <li><a href="#"><img src="<?php echo base_url().'assets/frontend/img/flag/germany.png';?>" alt=""> Germany</a></li>
                  <li><a href="#"><img src="<?php echo base_url().'assets/frontend/img/flag/fr.png';?>" alt=""> France</a></li>
                </ul>
              </div>
            </li> -->
          </ul>
        </div>
      </div>
      <div class="navigation--mobile">
        <div class="navigation__left"><a class="ps-logo" href="index.html"><img src="<?php echo base_url().'assets/frontend/img/logo-autopart1.png';?>" alt=""></a></div>
        <div class="navigation__right">
          <div class="header__actions">
            <div class="ps-cart--mini"><a class="header__extra" href="#"><i class="icon-bag2"></i><span><i>0</i></span></a>
              <div class="ps-cart__content">
                <div class="ps-cart__items">
                  <div class="ps-product--cart-mobile">
                    <div class="ps-product__thumbnail"><a href="#"><img src="<?php echo base_url().'assets/frontend/img/products/clothing/7.jpg';?>" alt=""></a></div>
                    <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                      <p><strong>Sold by:</strong>  YOUNG SHOP</p><small>1 x $59.99</small>
                    </div>
                  </div>
                  <div class="ps-product--cart-mobile">
                    <div class="ps-product__thumbnail"><a href="#"><img src="<?php echo base_url().'assets/frontend/img/products/clothing/5.jpg';?>" alt=""></a></div>
                    <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                      <p><strong>Sold by:</strong>  YOUNG SHOP</p><small>1 x $59.99</small>
                    </div>
                  </div>
                </div>
                <div class="ps-cart__footer">
                  <h3>Sub Total:<strong>$59.99</strong></h3>
                  <figure><a class="ps-btn" href="<?php echo base_url().'index.php/home/cart';?>">View Cart</a><a class="ps-btn" href="<?php echo base_url().'index.php/home/checkout';?>">Checkout</a></figure>
                </div>
              </div>
            </div>
            <div class="ps-block--user-header">
              <div class="ps-block__left"><i class="icon-user"></i></div>
              <div class="ps-block__right"><a href="<?php echo base_url().'index.php/login';?>">Login</a><a href="<?php echo base_url().'index.php/home/register';?>">Register</a></div>
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
              <div class="ps-product__thumbnail"><a href="#"><img src="<?php echo base_url().'assets/frontend/img/products/clothing/7.jpg';?>" alt=""></a></div>
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
          <li><a href="#">Hot Promotions</a>
          </li>
          <li class="menu-item-has-children has-mega-menu"><a href="#">Consumer Electronic</a><span class="sub-toggle"></span>
            <div class="mega-menu">
              <div class="mega-menu__column">
                <h4>Electronic<span class="sub-toggle"></span></h4>
                <ul class="mega-menu__list">
                  <li><a href="#">Home Audio &amp; Theathers</a>
                  </li>
                  <li><a href="#">TV &amp; Videos</a>
                  </li>
                  <li><a href="#">Camera, Photos &amp; Videos</a>
                  </li>
                  <li><a href="#">Cellphones &amp; Accessories</a>
                  </li>
                  <li><a href="#">Headphones</a>
                  </li>
                  <li><a href="#">Videosgames</a>
                  </li>
                  <li><a href="#">Wireless Speakers</a>
                  </li>
                  <li><a href="#">Office Electronic</a>
                  </li>
                </ul>
              </div>
              <div class="mega-menu__column">
                <h4>Accessories &amp; Parts<span class="sub-toggle"></span></h4>
                <ul class="mega-menu__list">
                  <li><a href="#">Digital Cables</a>
                  </li>
                  <li><a href="#">Audio &amp; Video Cables</a>
                  </li>
                  <li><a href="#">Batteries</a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li><a href="#">Clothing &amp; Apparel</a>
          </li>
          <li><a href="#">Home, Garden &amp; Kitchen</a>
          </li>
          <li><a href="#">Health &amp; Beauty</a>
          </li>
          <li><a href="#">Yewelry &amp; Watches</a>
          </li>
          <li class="menu-item-has-children has-mega-menu"><a href="#">Computer &amp; Technology</a><span class="sub-toggle"></span>
            <div class="mega-menu">
              <div class="mega-menu__column">
                <h4>Computer &amp; Technologies<span class="sub-toggle"></span></h4>
                <ul class="mega-menu__list">
                  <li><a href="#">Computer &amp; Tablets</a>
                  </li>
                  <li><a href="#">Laptop</a>
                  </li>
                  <li><a href="#">Monitors</a>
                  </li>
                  <li><a href="#">Networking</a>
                  </li>
                  <li><a href="#">Drive &amp; Storages</a>
                  </li>
                  <li><a href="#">Computer Components</a>
                  </li>
                  <li><a href="#">Security &amp; Protection</a>
                  </li>
                  <li><a href="#">Gaming Laptop</a>
                  </li>
                  <li><a href="#">Accessories</a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li><a href="#">Babies &amp; Moms</a>
          </li>
          <li><a href="#">Sport &amp; Outdoor</a>
          </li>
          <li><a href="#">Phones &amp; Accessories</a>
          </li>
          <li><a href="#">Books &amp; Office</a>
          </li>
          <li><a href="#">Cars &amp; Motocycles</a>
          </li>
          <li><a href="#">Home Improments</a>
          </li>
          <li><a href="#">Vouchers &amp; Services</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="navigation--list">
      <div class="navigation__content"><a class="navigation__item ps-toggle--sidebar" href="#menu-mobile"><i class="icon-menu"></i><span> Menu</span></a><a class="navigation__item ps-toggle--sidebar" href="#navigation-mobile"><i class="icon-list4"></i><span> Categories</span></a><a class="navigation__item ps-toggle--sidebar" href="#search-sidebar"><i class="icon-magnifier"></i><span> Search</span></a><a class="navigation__item ps-toggle--sidebar" href="#cart-mobile"><i class="icon-bag2"></i><span> Cart</span></a></div>
    </div>
    <div class="ps-panel--sidebar" id="search-sidebar">
      <div class="ps-panel__header">
        <form class="ps-form--search-mobile" action="index.html" method="get">
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
          <li class="current-menu-item menu-item-has-children"><a href="index.html">Home</a><span class="sub-toggle"></span>
            <ul class="sub-menu">
              <li><a href="index.html">Marketplace Full Width</a>
              </li>
              <li><a href="homepage-2.html">Home Auto Parts</a>
              </li>
              <li><a href="homepage-10.html">Home Technology</a>
              </li>
              <li><a href="homepage-9.html">Home Organic</a>
              </li>
              <li><a href="homepage-3.html">Home Marketplace V1</a>
              </li>
              <li><a href="homepage-4.html">Home Marketplace V2</a>
              </li>
              <li><a href="homepage-5.html">Home Marketplace V3</a>
              </li>
              <li><a href="homepage-6.html">Home Marketplace V4</a>
              </li>
              <li><a href="homepage-7.html">Home Electronic</a>
              </li>
              <li><a href="homepage-8.html">Home Furniture</a>
              </li>
            </ul>
          </li>
          <li class="menu-item-has-children has-mega-menu"><a href="shop-default.html">Shop</a><span class="sub-toggle"></span>
            <div class="mega-menu">
              <div class="mega-menu__column">
                <h4>Catalog Pages<span class="sub-toggle"></span></h4>
                <ul class="mega-menu__list">
                  <li><a href="shop-default.html">Shop Default</a>
                  </li>
                  <li><a href="shop-default.html">Shop Fullwidth</a>
                  </li>
                  <li><a href="shop-categories.html">Shop Categories</a>
                  </li>
                  <li><a href="shop-sidebar.html">Shop Sidebar</a>
                  </li>
                  <li><a href="shop-sidebar-without-banner.html">Shop Without Banner</a>
                  </li>
                  <li><a href="shop-carousel.html">Shop Carousel</a>
                  </li>
                </ul>
              </div>
              <div class="mega-menu__column">
                <h4>Product Layout<span class="sub-toggle"></span></h4>
                <ul class="mega-menu__list">
                  <li><a href="product-default.html">Default</a>
                  </li>
                  <li><a href="product-extend.html">Extended</a>
                  </li>
                  <li><a href="product-full-content.html">Full Content</a>
                  </li>
                  <li><a href="product-box.html">Boxed</a>
                  </li>
                  <li><a href="product-sidebar.html">Sidebar</a>
                  </li>
                  <li><a href="product-default.html">Fullwidth</a>
                  </li>
                </ul>
              </div>
              <div class="mega-menu__column">
                <h4>Product Types<span class="sub-toggle"></span></h4>
                <ul class="mega-menu__list">
                  <li><a href="product-default.html">Simple</a>
                  </li>
                  <li><a href="product-default.html">Color Swatches</a>
                  </li>
                  <li><a href="product-countdown.html">Countdown</a>
                  </li>
                  <li><a href="product-multi-vendor.html">Multi-Vendor</a>
                  </li>
                  <li><a href="product-instagram.html">Instagram</a>
                  </li>
                  <li><a href="product-affiliate.html">Affiliate</a>
                  </li>
                  <li><a href="product-on-sale.html">On sale</a>
                  </li>
                  <li><a href="product-video.html">Video Featured</a>
                  </li>
                  <li><a href="product-groupped.html">Grouped</a>
                  </li>
                  <li><a href="product-out-stock.html">Out Of Stock</a>
                  </li>
                </ul>
              </div>
              <div class="mega-menu__column">
                <h4>Woo Pages<span class="sub-toggle"></span></h4>
                <ul class="mega-menu__list">
                  <li><a href="shopping-cart.html">Shopping Cart</a>
                  </li>
                  <li><a href="checkout.html">Checkout</a>
                  </li>
                  <li><a href="whishlist.html">Whishlist</a>
                  </li>
                  <li><a href="compare.html">Compare</a>
                  </li>
                  <li><a href="order-tracking.html">Order Tracking</a>
                  </li>
                  <li><a href="my-account.html">My Account</a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li class="menu-item-has-children has-mega-menu"><a href="#">Pages</a><span class="sub-toggle"></span>
            <div class="mega-menu">
              <div class="mega-menu__column">
                <h4>Basic Page<span class="sub-toggle"></span></h4>
                <ul class="mega-menu__list">
                  <li><a href="about-us.html">About Us</a>
                  </li>
                  <li><a href="contact-us.html">Contact</a>
                  </li>
                  <li><a href="faqs.html">Faqs</a>
                  </li>
                  <li><a href="comming-soon.html">Comming Soon</a>
                  </li>
                  <li><a href="404-page.html">404 Page</a>
                  </li>
                </ul>
              </div>
              <div class="mega-menu__column">
                <h4>Vendor Pages<span class="sub-toggle"></span></h4>
                <ul class="mega-menu__list">
                  <li><a href="become-a-vendor.html">Become a Vendor</a>
                  </li>
                  <li><a href="vendor-store.html">Vendor Store</a>
                  </li>
                  <li><a href="vendor-dashboard-free.html">Vendor Dashboard Free</a>
                  </li>
                  <li><a href="vendor-dashboard-pro.html">Vendor Dashboard Pro</a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li class="menu-item-has-children has-mega-menu"><a href="#">Blogs</a><span class="sub-toggle"></span>
            <div class="mega-menu">
              <div class="mega-menu__column">
                <h4>Blog Layout<span class="sub-toggle"></span></h4>
                <ul class="mega-menu__list">
                  <li><a href="blog-grid.html">Grid</a>
                  </li>
                  <li><a href="blog-list.html">Listing</a>
                  </li>
                  <li><a href="blog-small-thumb.html">Small Thumb</a>
                  </li>
                  <li><a href="blog-left-sidebar.html">Left Sidebar</a>
                  </li>
                  <li><a href="blog-right-sidebar.html">Right Sidebar</a>
                  </li>
                </ul>
              </div>
              <div class="mega-menu__column">
                <h4>Single Blog<span class="sub-toggle"></span></h4>
                <ul class="mega-menu__list">
                  <li><a href="blog-detail.html">Single 1</a>
                  </li>
                  <li><a href="blog-detail-2.html">Single 2</a>
                  </li>
                  <li><a href="blog-detail-3.html">Single 3</a>
                  </li>
                  <li><a href="blog-detail-4.html">Single 4</a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="ps-page--simple">
      <div class="ps-breadcrumb">
        <div class="container">
          <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="shop-default.html">Shop</a></li>
            <li>Checkout</li>
          </ul>
        </div>
      </div>
      <div class="ps-checkout ps-section--shopping">
        <div class="container">
          <div class="ps-section__header">
            <h1>Compare Product</h1>
          </div>
          <div class="ps-section__content">
            <form class="ps-form--checkout" action="do_action" method="post">
              <div class="row">
                <div class="col-xl-7 col-lg-8 col-md-12 col-sm-12  ">
                  <div class="ps-form__billing-info">
                    <h3 class="ps-form__heading">Billing Details</h3>
                          <div class="form-group">
                            <label>First Name<sup>*</sup>
                            </label>
                            <div class="form-group__content">
                              <input class="form-control" type="text">
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Last Name<sup>*</sup>
                            </label>
                            <div class="form-group__content">
                              <input class="form-control" type="text">
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Company Name<sup>*</sup>
                            </label>
                            <div class="form-group__content">
                              <input class="form-control" type="text">
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Email Address<sup>*</sup>
                            </label>
                            <div class="form-group__content">
                              <input class="form-control" type="email">
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Country<sup>*</sup>
                            </label>
                            <div class="form-group__content">
                              <input class="form-control" type="text">
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Phone<sup>*</sup>
                            </label>
                            <div class="form-group__content">
                              <input class="form-control" type="text">
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Address<sup>*</sup>
                            </label>
                            <div class="form-group__content">
                              <input class="form-control" type="text">
                            </div>
                          </div>
                    <div class="form-group">
                      <div class="ps-checkbox">
                        <input class="form-control" type="checkbox" id="create-account">
                        <label for="create-account">Create an account?</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="ps-checkbox">
                        <input class="form-control" type="checkbox" id="cb01">
                        <label for="cb01">Ship to a different address?</label>
                      </div>
                    </div>
                    <h3 class="mt-40"> Addition information</h3>
                    <div class="form-group">
                      <label>Order Notes</label>
                      <div class="form-group__content">
                        <textarea class="form-control" rows="7" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-5 col-lg-4 col-md-12 col-sm-12  ">
                  <div class="ps-form__total">
                    <h3 class="ps-form__heading">Your Order</h3>
                    <div class="content">
                      <div class="ps-block--checkout-total">
                        <div class="ps-block__header">
                          <p>Product</p>
                          <p>Total</p>
                        </div>
                        <div class="ps-block__content">
                          <table class="table ps-block__products">
                            <tbody>
                              <tr>
                                <td><a href="#"> MVMTH Classical Leather Watch In Black ×1</a>
                                  <p>Sold By:<strong>YOUNG SHOP</strong></p>
                                </td>
                                <td>$57.99</td>
                              </tr>
                              <tr>
                                <td><a href="#"> Apple Macbook Retina Display 12” 	× 1</a>
                                  <p>Sold By:<strong>ROBERT’S STORE</strong></p>
                                </td>
                                <td>$625.50</td>
                              </tr>
                            </tbody>
                          </table>
                          <h4 class="ps-block__title">Subtotal <span>$863.49</span></h4>
                          <div class="ps-block__shippings">
                            <figure>
                              <h4>YOUNG SHOP Shipping</h4>
                              <p>Free shipping</p><a href="#"> MVMTH Classical Leather Watch In Black ×1</a>
                            </figure>
                            <figure>
                              <h4>ROBERT’S STORE Shipping</h4>
                              <p>Free shipping</p><a href="#">Apple Macbook Retina Display 12” ×1</a>
                            </figure>
                          </div>
                          <h3>Total <span>$683.49</span></h3>
                        </div>
                      </div><a class="ps-btn ps-btn--fullwidth" href="checkout.html">Proceed to checkout</a>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--include ../../partials/sections/newsletter-->
    <!--include ../../shared/footers/footer-->
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