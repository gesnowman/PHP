<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>SubCategory</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/app-assets/vendors/css/vendors.min.css';?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css';?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/app-assets/vendors/css/forms/icheck/icheck.css';?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/app-assets/vendors/css/forms/icheck/custom.css';?>">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/app-assets/css/bootstrap.css';?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/app-assets/css/bootstrap-extended.css';?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/app-assets/css/colors.css';?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/app-assets/css/components.css';?>">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/app-assets/css/core/menu/menu-types/vertical-menu-modern.css';?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/app-assets/css/core/colors/palette-gradient.css';?>">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/style.css';?>">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body ng-app="myFrontend" ng-controller = 'homeController'  ng-init="flag=false"  class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-lg-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="<?php echo base_url().'index.php/admin';?>">
                        <!-- <img class="brand-logo" alt="modern admin logo" src="<?php echo base_url().'assets/app-assets/images/logo/logo.png';?>"> -->
                            <h3 class="brand-text">Admin Panel</h3>
                        </a></li>
                    <li class="nav-item d-none d-lg-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i></a></li>
                    <li class="nav-item d-lg-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                        <!-- <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
                            <div class="search-input">
                                <input class="input" type="text" placeholder="Explore Modern...">
                            </div>
                        </li> -->
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="mr-1 user-name text-bold-700">Admin</span><span class="avatar avatar-online"><img src="<?php echo base_url().'assets/app-assets/images/portrait/small/download.jpg';?>" alt="avatar"><i></i></span></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="<?=base_url()?>index.php/admin/edit" class="dropdown-item"><i class="ft-user"></i> Edit Profile</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="<?php echo base_url().'index.php/admin/signout';?>"><i class="ft-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->

    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                
                <li class=" navigation-header"><span data-i18n="nav.category.ecommerce">Ecommerce</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="Ecommerce"></i>
                </li>
                <li class="nav-item has-sub open"><a href="#"><i class="la la-clipboard"></i><span class="menu-title" data-i18n="nav.invoice.main">Category</span></a>
                    <ul class="menu-content">
                        <li ><a class=" menu-item" href="<?php echo base_url().'index.php/admin/category';?>"><i></i><span data-i18n="nav.invoice.invoice_summary">Categories</span></a>
                        </li>
                        <li class="active"><a class="menu-item" href="<?php echo base_url().'index.php/admin/subcategory';?>"><i></i><span data-i18n="nav.invoice.invoice_template">Sub Category</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="<?php echo base_url().'index.php/admin/register';?>"><i class="la la-th-large"></i><span class="menu-title" data-i18n="">Register</span></a>
                </li>
                <li class=" nav-item"><a href="<?php echo base_url().'index.php/admin/product';?>"><i class="la la-shopping-cart"></i><span class="menu-title" data-i18n="">Product</span></a>
                </li>
                <!-- <li class=" nav-item"><a href="<?php echo base_url().'index.php/admin/pending';?>"><i class="la la-credit-card"></i><span class="menu-title" data-i18n="">Pending</span></a>
                </li> -->
                <!--<li class=" nav-item"><a href="<?php echo base_url().'index.php/admin/order';?>"><i class="la la-check-circle-o"></i><span class="menu-title" data-i18n="">Order</span></a>
                </li>-->
                <li class=" navigation-header"><span data-i18n="nav.category.ui">User Manage</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="User Interface"></i>
                </li>
                <!-- <li class="nav-item"><a href="<?php echo base_url().'index.php/admin/user';?>"><i class="la la-th-large"></i><span class="menu-title" data-i18n="">User</span></a>
                </li> -->
                <li class="nav-item"><a href="<?php echo base_url().'index.php/admin/customer';?>"><i class="la la-user"></i><span class="menu-title" data-i18n="">Customer </span></a>
                </li>
                <!-- <li class="nav-item">
                        <a href="<?php echo base_url().'index.php/admin/chat';?>"><i class="ft-message-square"></i> Chats</a>
                        </li> -->
            </ul>
        </div>
    </div>

    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row mb-1">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">SubCategory</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url().'index.php/admin';?>">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Create SubCategory
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- <div class="content-header-right col-md-6 col-12">
                    <div class="btn-group float-md-right">
                        <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                        <div class="dropdown-menu arrow"><a class="dropdown-item" href="#"><i class="fa fa-calendar-check mr-1"></i> Calender</a><a class="dropdown-item" href="#"><i class="fa fa-cart-plus mr-1"></i> Cart</a><a class="dropdown-item" href="#"><i class="fa fa-life-ring mr-1"></i> Support</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fa fa-cog mr-1"></i> Settings</a>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="content-body">
                <section class="row">
                    <div class="col-12">
                    <div class="card" style="height: 961.5px;">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form">Add SubCategory</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <p>You can add category information!</p>
                                        </div>
                                        <form method="post" action="<?php echo base_url().'index.php/admin/subcategory/save';?>">
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-briefcase"></i> SubCategory Info</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">New SubCategory</label>
                                                            <input type="text" id="projectinput1" class="form-control" placeholder="SubCategory Name" name="fname" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput5">Category</label>
                                                            <select id="projectinput5" name="category" required class="form-control">
                                                                <option value="" selected="" disabled="">Category</option>
                                                                <?php 
                                                                    foreach($category_list as $category){
                                                                        echo '<option value="'.$category->categoryId.'">'.$category->categoryName.'</option>';
                                                                    }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                <!-- <div class="form-group">
                                                    <label for="projectinput8">About Summary</label>
                                                    <textarea id="projectinput8" rows="5" class="form-control" name="comment" placeholder="About Project"></textarea>
                                                </div> -->
                                            </div>

                                            <div class="form-actions">
                                                <a href="<?php echo base_url().'index.php/admin/user';?>" class="btn btn-warning mr-1">
                                                    <i class="ft-x"></i> Cancel
                                                </a>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> Save
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2019 </span></p>
 </footer>
    <!-- END: Footer-->
    <script>
        base_url = "<?php echo base_url(); ?>";
    </script>   
    <script src="<?php echo base_url().'assets/js/angular.js';?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery-3.4.1.min.js';?>"></script>


    <!-- BEGIN: Vendor JS-->
    <script src="<?php echo base_url().'assets/app-assets/vendors/js/vendors.min.js';?>"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo base_url().'assets/app-assets/vendors/js/tables/jquery.dataTables.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/app-assets/vendors/js/forms/icheck/icheck.min.js';?>"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?php echo base_url().'assets/app-assets/js/core/app-menu.js';?>"></script>
    <script src="<?php echo base_url().'assets/app-assets/js/core/app.js';?>"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url().'assets/app-assets/js/scripts/pages/invoices-list3.js';?>"></script>
    <!-- END: Page JS-->
    <script>
    var App = angular.module('myFrontend',[]);
    App.controller('homeController', function($scope, $http){
        $scope.editBtn = function(){
            var eArr = [];
            $.each($("input[name='checkName']:checked"), function(){            
                eArr.push($(this).val());
            });
            // alert(eArr);
            if(!eArr[0] || eArr[1]){
                $scope.flag = true;
                $scope.ngAlert = "you must check to edit category info";
            }else{
                $scope.flag = false;
                location.assign(base_url + 'index.php/admin/category/edit/' + eArr[0]);
            }
        }
        $scope.deleteBtn = function(){
            var dArr = [];
            $.each($("input[name='checkName']:checked"), function(){            
                dArr.push($(this).val());
            });
           if(!dArr[0]){
            $scope.flag = true;
            $scope.ngAlert = "you must check to delete category info";   
           }else{
               $scope.flag = false;
               data= {
                   arr : JSON.stringify(dArr)
               }
               $http.post(base_url + 'index.php/admin/category/del',JSON.stringify(data)).then(function (response){
                    location.assign(base_url + 'index.php/admin/category');
                });

           }
        }
    });
</script>

</body>
<!-- END: Body-->

</html>