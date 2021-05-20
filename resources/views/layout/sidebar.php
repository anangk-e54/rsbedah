<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $data['judul']; ?> | PorosKolektif-ERP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?= BASEURL; ?>/assets/images/icon/poros.png">
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/metisMenu.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/slicknav.min.css">
    <!-- amcharts css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
        media="all" />
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/typography.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/default-css.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/styles.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="<?= BASEURL; ?>/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="<?= BASEURL; ?>/dashboard"><img src="<?= BASEURL; ?>/assets/images/icon/logogreen.png"
                            alt="logo">erp.poroskolektif.com</a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i
                                        class="ti-dashboard"></i><span>dashboard</span></a>
                                <ul class="collapse">
                                    <li><a href="<?= BASEURL; ?>/dashboard"><i
                                                class="fa fa-exclamation-triangle"></i>Summary</a></li>
                                    <li><a href="<?= BASEURL; ?>/dashboard/salesreport"><i
                                                class="fa fa-exclamation-triangle"></i>Sales Report</a></li>
                                    <li><a href="<?= BASEURL; ?>/dashboard/stockreport"><i
                                                class="fa fa-exclamation-triangle"></i>Stock Report</a></li>
                                    <li><a href="<?= BASEURL; ?>/dashboard/financereport">Finance Report</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i
                                        class="ti-announcement"></i><span>Sales
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="<?= BASEURL; ?>/salescustomer">Customers</a></li>
                                    <li><a href="<?= BASEURL; ?>/salesquotation">Quottions</a></li>
                                    <li><a href="<?= BASEURL; ?>/salesinvoice">Invoice</a></li>
                                    <li><a href="<?= BASEURL; ?>/salesproduct">Product List</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i
                                        class="ti-shopping-cart-full"></i><span>Purchase</span></a>
                                <ul class="collapse">
                                    <li><a href="<?= BASEURL; ?>/purchaseorder">Purchase Orders</a></li>
                                    <li><a href="<?= BASEURL; ?>/vendor">Vendors</a></li>
                                    <li><a href="<?= BASEURL; ?>/bussinessfield">Bussiness Field</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i
                                        class="ti-wallet"></i><span>Finance</span></a>
                                <ul class="collapse">
                                    <li><a href="<?= BASEURL; ?>/fncjournal">financial journal</a></li>
                                    <li><a href="<?= BASEURL; ?>/fncprofitandlost">Profit and Lost</a></li>
                                    <li><a href="<?= BASEURL; ?>/fncbalancesheet">Balance Sheet</a></li>
                                    <li><a href="#"><i class="fa fa-exclamation-triangle"></i>Cost of goods sold</a>
                                    </li>
                                    <li><a href="<?= BASEURL; ?>/fnccapitalaccount">Capital Account</a></li>
                                    <li><a href="<?= BASEURL; ?>/fncfinancialaccount">Financial Account</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a href="#" aria-expanded="true">Payment In</a>
                                        <ul class="collapse">
                                            <li><a href="<?= BASEURL; ?>/fncpaymentin/history">History List</a></li>
                                            <li><a href="<?= BASEURL; ?>/fncpaymentin">In Process</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" aria-expanded="true">Payment Out</a>
                                        <ul class="collapse">
                                            <li><a href="<?= BASEURL; ?>/fncpaymentout/history">History List</a></li>
                                            <li><a href="<?= BASEURL; ?>/fncpaymentout">In Process</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?= BASEURL; ?>/fnctaxcategory">Tax Category</a></li>
                                    <li><a href="<?= BASEURL; ?>/fncpaymentmethod">Payment Method</a></li>
                                    <li><a href="<?= BASEURL; ?>/fncstock">Stock List</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i
                                        class="fa fa-exclamation-triangle"></i>
                                    <span>Payroll</span></a>
                                <ul class="collapse">
                                    <li><a href="#">Operator List</a></li>
                                    <li><a href="#">Fixed Salary Sheet</a></li>
                                    <li><a href="#">Fixed Salary Payment</a></li>
                                    <li><a href="#">Incentive Salariest</a></li>
                                    <li><a href="#">Pension Fund</a></li>
                                </ul>
                            </li>
                            <li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-package"></i> <span>
                                        WareHouse</span></a>
                                <ul class="collapse">
                                    <li><a href="#" aria-expanded="true">Raw Material</a>
                                        <ul class="collapse">
                                            <li><a href="<?= BASEURL; ?>/whrawmaterial/stockin">Stock In</a></li>
                                            <li><a href="<?= BASEURL; ?>/whrawmaterial/wasted">Wasted Stock</a></li>
                                            <li><a href="<?= BASEURL; ?>/whrawmaterial/stockout">Stock Out</a></li>
                                            <li><a href="<?= BASEURL; ?>/whrawmaterial/opname">Stock Opname</a></li>
                                            <li><a href="<?= BASEURL; ?>/whrawmaterial">Product Inventory</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" aria-expanded="true">Goods in Process</a>
                                        <ul class="collapse">
                                            <li><a href="<?= BASEURL; ?>/whgoodsinprocess/stockin">Stock In</a></li>
                                            <li><a href="<?= BASEURL; ?>/whgoodsinprocess/wasted">Wasted Stock</a></li>
                                            <li><a href="<?= BASEURL; ?>/whgoodsinprocess/stockout">Stock Out</a></li>
                                            <li><a href="<?= BASEURL; ?>/whgoodsinprocess/opname">Stock Opname</a></li>
                                            <li><a href="<?= BASEURL; ?>/whgoodsinprocess">Product Inventory</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" aria-expanded="true">Product</a>
                                        <ul class="collapse">
                                            <li><a href="<?= BASEURL; ?>/whproduct/stockin">Stock In</a></li>
                                            <li><a href="<?= BASEURL; ?>/whproduct/wasted">Wasted Stock</a></li>
                                            <li><a href="<?= BASEURL; ?>/whproduct/stockout">Stock Out</a></li>
                                            <li><a href="<?= BASEURL; ?>/whproduct/opname">Stock Opname</a></li>
                                            <li><a href="<?= BASEURL; ?>/whproduct">Product Inventory</a></li>
                                        </ul>
                                    </li>
                            </li>
                            <li><a href="#" aria-expanded="true">inventory</a>
                                <ul class="collapse">
                                    <li><a href="<?= BASEURL; ?>/whinventory/stockin">Stock In</a></li>
                                    <li><a href="<?= BASEURL; ?>/whinventory/wasted">Wasted Stock</a></li>
                                    <li><a href="<?= BASEURL; ?>/whinventory/stockout">Stock Out</a></li>
                                    <li><a href="<?= BASEURL; ?>/whinventory/opname">Stock Opname</a></li>
                                    <li><a href="<?= BASEURL; ?>/whinventory">Product Inventory</a></li>
                                </ul>
                            </li>
                            <li><a href="#" aria-expanded="true">Delivery Orders</a>
                                <ul class="collapse">
                                    <li><a href="<?= BASEURL; ?>/whdelivery/request">Delivery Request</a></li>
                                    <li><a href="<?= BASEURL; ?>/whdelivery/">Shipping List</a></li>
                                </ul>
                            </li>
                            <div class="dropdown-divider"></div>
                            <li><a href="#"><i class="fa fa-exclamation-triangle"></i>List of Items</a></li>
                            <li><a href="#"><i class="fa fa-exclamation-triangle"></i>Formula</a></li>
                            <li><a href="<?= BASEURL; ?>/whproductcategory">Product Category</a></li>
                        </ul>
                        </li>
                        <li class="">
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-settings"></i>
                                <span>Store Management</span></a>
                            <ul class="collapse">
                                <li><a href="<?= BASEURL; ?>/smoperator">Operators</a></li>
                                <li><a href="#"><i class="fa fa-exclamation-triangle"></i>Authority</a></li>
                                <li><a href="#"><i class="fa fa-exclamation-triangle"></i>Branch</a></li>
                                <li><a href="#"><i class="fa fa-exclamation-triangle"></i>Service</a></li>
                            </ul>
                        </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-4 col-sm-6 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left"><?= $data['titlepage0']; ?></h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html"><?= $data['titlepage1']; ?></a></li>
                                <li><span><?= $data['titlepage2']; ?></span></li>
                            </ul>
                        </div>
                    </div>

                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                            <li class="dropdown">
                                <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                                    <span>2</span>
                                </i>
                                <div class="dropdown-menu bell-notify-box notify-box">
                                    <span class="notify-title">You have 3 new notifications <a href="#">view
                                            all</a></span>
                                    <div class="nofity-list">
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                            <div class="notify-text">
                                                <p>New Commetns On Post</p>
                                                <span>30 Seconds ago</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                            <div class="notify-text">
                                                <p>Some special like you</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                            <div class="notify-text">
                                                <p>New Commetns On Post</p>
                                                <span>30 Seconds ago</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                            <div class="notify-text">
                                                <p>Some special like you</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown">
                                <i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span>3</span></i>
                                <div class="dropdown-menu notify-box nt-enveloper-box">
                                    <span class="notify-title">You have 3 new notifications <a href="#">view
                                            all</a></span>
                                    <div class="nofity-list">
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="<?= BASEURL; ?>/assets/images/author/author-img1.jpg"
                                                    alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="<?= BASEURL; ?>/assets/images/author/author-img2.jpg"
                                                    alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">When you can connect with me...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="<?= BASEURL; ?>/assets/images/author/author-img3.jpg"
                                                    alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">I missed you so much...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="<?= BASEURL; ?>/assets/images/author/author-img4.jpg"
                                                    alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Your product is completely Ready...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="<?= BASEURL; ?>/assets/images/author/author-img2.jpg"
                                                    alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="<?= BASEURL; ?>/assets/images/author/author-img1.jpg"
                                                    alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="<?= BASEURL; ?>/assets/images/author/author-img3.jpg"
                                                    alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="settings-btn">
                                <i class="ti-settings"></i>
                            </li>
                            <!-- <div class="clearfix d-md-inline-block d-block">
                                <div class="user-profile ">
                                <img class="avatar user-thumb" src="<?= BASEURL; ?>/assets/images/author/avatar.png" alt="avatar">
                                <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Kumkum Rai <i class="fa fa-angle-down"></i></h4>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Message</a>
                                    <a class="dropdown-item" href="#">Settings</a>
                                    <a class="dropdown-item" href="#">Log Out</a>
                                </div> 
                                </div>
                            </div> -->
                        </ul>

                    </div>

                    <div class="col-md-2 col-sm-2 clearfix">
                        <div class="clearfix d-md-inline-block d-block">
                            <div class="user-profile ">
                                <img class="avatar user-thumb" src="<?= BASEURL; ?>/assets/images/author/anang.jpg"
                                    alt="avatar">
                                <h4 class="user-name dropdown-toggle" data-toggle="dropdown">AnangK Trial<i
                                        class="fa fa-angle-down"></i></h4>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="<?= BASEURL; ?>/smprofile">Profile</a>
                                    <a class="dropdown-item" href="#">Settings</a>
                                    <a class="dropdown-item" href="<?= BASEURL; ?>/home/login">Log Out</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- header area end -->