<?php
session_start();
include "include/dbconfig.php";
date_default_timezone_set("Asia/Kolkata");
?>
<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <script>
        var BASE_URL = 'thailand/index.html';
        var require = {
            "baseUrl": "https://magento2.flytheme.net/themes/sm_market2/pub/static/frontend/Sm/market/en_US"
        };</script>
    <meta charset="utf-8"/>
    <meta name="title" content="Home - SM Market Layout 14"/>
    <meta name="description" content="Default Description"/>
    <meta name="keywords" content="Magento, Varien, E-commerce"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title><?php echo $date_start ?></title>
    <link rel="stylesheet" type="text/css" media="all"
          href="pub/static/_cache/merged/e32df1d376e8ecca8b389ff2dfc7cbb6.min.css"/>
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 768px)"
          href="pub/static/frontend/Sm/market/en_US/css/styles-l.min.css"/>
    <link rel="stylesheet" type="text/css" media="print" href="pub/static/frontend/Sm/market/en_US/css/print.min.css"/>
    <link rel="icon" type="image/x-icon" href="pub/static/frontend/Sm/market/en_US/Magento_Theme/favicon.ico"/>
    <link rel="shortcut icon" type="image/x-icon" href="pub/static/frontend/Sm/market/en_US/Magento_Theme/favicon.ico"/>


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="pub/static/_cache/merged/b61bde98527dced3d3c464c991eb8c6d.min.js"></script>
    <!--link  rel="stylesheet" type="text/css"  media="all" href="{{MEDIA_URL}}styles.css" /-->
    <!-- BEGIN GOOGLE VERIFICATION TAG --> <!-- END GOOGLE VERIFICATION TAG --> <!-- BEGIN GTAG GLOBAL TAG -->
    <!-- END GTAG GLOBAL TAG -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700"/>
    <link rel="stylesheet" href="pub/static/frontend/Sm/market/en_US/css/config_thailand.css"/><!--CUSTOM CSS-->
    <style></style>
    <script>
        require([
            'jquery',
            'jquerypopper',
            'jquerybootstrap',
            'jqueryunveil',
            'yttheme',
            'domReady!'
        ], function ($, Popper) {
            function _runLazyLoad() {
                $("img.lazyload").unveil(0, function () {
                    $(this).load(function () {
                        this.classList.remove("lazyload");
                    });
                });
            }

            _runLazyLoad();
            $(document).on("afterAjaxLazyLoad", function (event) {
                //_runLazyLoad();
            });

        });</script><!--CUSTOM JS-->
    <script type="text/javascript">
        require([
            'jquery',
            'domReady!'
        ], function ($) {
            if ($('.breadcrumbs').length == 0) {
                $('body').addClass("no-breadcrumbs");
            }
        });


    </script><!--LISTING CONFIG-->
    <style> {
            font-family: Aclonica
        ;
        }
        @media (min-width: 1200px) {
            .container {
                width: 1170px;
                max-width: 1170px;
            }

            /*==1 COLUMN==*/
            .col1-layout .category-product.products-grid .item {
                width: 25%;
            }

            .col1-layout .category-product.products-grid .item:nth-child(4n+1) {
                clear: both;
            }

            /*==2 COLUMNS==*/
            .col2-layout .category-product.products-grid .item {
                width: 33.333333333333%;
            }

            .col2-layout .category-product.products-grid .item:nth-child(3n+1) {
                clear: both;
            }

            /*==3 COLUMNS==*/
            .col3-layout .category-product.products-grid .item {
                width: 50%;
            }

            .col3-layout .category-product.products-grid .item:nth-child(2n+1) {
                clear: both;
            }
        }

        @media (min-width: 992px) and (max-width: 1199px) {
            /*==1 COLUMN==*/
            .col1-layout .category-product.products-grid .item {
                width: 25%;
            }

            .col1-layout .category-product.products-grid .item:nth-child(4n+1) {
                clear: both;
            }

            /*==2 COLUMNS==*/
            .col2-layout .category-product.products-grid .item {
                width: 33.333333333333%;
            }

            .col2-layout .category-product.products-grid .item:nth-child(3n+1) {
                clear: both;
            }

            /*==3 COLUMNS==*/
            .col3-layout .category-product.products-grid .item {
                width: 100%;
            }

            .col3-layout .category-product.products-grid .item:nth-child(1n+1) {
                clear: both;
            }
        }

        @media (min-width: 768px) and (max-width: 991px) {
            /*==1 COLUMN==*/
            .col1-layout .category-product.products-grid .item {
                width: 33.333333333333%;
            }

            .col1-layout .category-product.products-grid .item:nth-child(3n+1) {
                clear: both;
            }

            /*==2 COLUMNS==*/
            .col2-layout .category-product.products-grid .item {
                width: 33.333333333333%;
            }

            .col2-layout .category-product.products-grid .item:nth-child(3n+1) {
                clear: both;
            }

            /*==3 COLUMNS==*/
            .col3-layout .category-product.products-grid .item {
                width: 100%;
            }

            .col3-layout .category-product.products-grid .item:nth-child(1n+1) {
                clear: both;
            }
        }

        @media (min-width: 481px) and (max-width: 767px) {
            /*==1 COLUMN==*/
            .col1-layout .category-product.products-grid .item {
                width: 50%;
            }

            .col1-layout .category-product.products-grid .item:nth-child(2n+1) {
                clear: both;
            }

            /*==2 COLUMNS==*/
            .col2-layout .category-product.products-grid .item {
                width: 50%;
            }

            .col2-layout .category-product.products-grid .item:nth-child(2n+1) {
                clear: both;
            }

            /*==3 COLUMNS==*/
            .col3-layout .category-product.products-grid .item {
                width: 100%;
            }

            .col3-layout .category-product.products-grid .item:nth-child(1n+1) {
                clear: both;
            }
        }

        @media (max-width: 480px) {
            /*==1 COLUMN==*/
            .col1-layout .category-product.products-grid .item {
                width: 100%;
            }

            .col1-layout .category-product.products-grid .item:nth-child(1n+1) {
                clear: both;
            }

            /*==2 COLUMNS==*/
            .col2-layout .category-product.products-grid .item {
                width: 100%;
            }

            .col2-layout .category-product.products-grid .item:nth-child(1n+1) {
                clear: both;
            }

            /*==3 COLUMNS==*/
            .col3-layout .category-product.products-grid .item {
                width: 100%;
            }

            .col3-layout .category-product.products-grid .item:nth-child(1n+1) {
                clear: both;
            }
        }
        a#sm_megamenu_288:after {
             display: none;
        }
        ul.page-list {
            display: none;
        }
        .sm_megamenu_wrapper_horizontal_menu .sm_megamenu_menu .sm_megamenu_dropdown_3columns {
            width: 48.4339122772218%;
            border: none;
            z-index: -1;
        }
        
        /*.header-style-14 .header-bottom .sm_megamenu_wrapper_horizontal_menu .sm_megamenu_menu > li > .sm_megamenu_head {*/
        /*    display:none;*/
        /*}*/
        </style>
</head>
<body data-container="body"
      data-mage-init='{"loaderAjax": {}, "loader": { "icon": "http://magento2.flytheme.net/themes/sm_market2/pub/static/frontend/Sm/market/en_US/images/loader-2.gif"}}'
      class="header-14-style home-14-style footer-7-style product-1-style layout-full_width  cms-home-demo-14 cms-index-index page-layout-1column">

<script>
    require.config({
        map: {
            '*': {
                wysiwygAdapter: 'mage/adminhtml/wysiwyg/tiny_mce/tinymce4Adapter'
            }
        }
    });</script>   <!-- BEGIN GTAG CART SCRIPT --> <!-- END GTAG CART SCRIPT -->
<div class="page-wrapper">


    <div class="header-container header-style-14">
        <div class="header-14-content">
            <div class="header-top">
                <div class="container">
                    <div class="row row-topheader">
                        <div class="col-lg-4 col-md-4 col-sm-4 language-currency-header">
                            <div class="language-wrapper">
                                <div class="switcher language switcher-language" data-ui-id="language-switcher"
                                     id="switcher-language-nav"><strong
                                            class="label switcher-label"><span>Language</span></strong>
                                    <div class="actions dropdown options switcher-options">
                                        <div class="action toggle switcher-trigger" id="switcher-language-trigger-nav">


                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 header-top-links">
                            <div class="toplinks-wrapper">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
                        <div class="col-xl-10 col-lg-9 main-megamenu">
                            <nav class="sm_megamenu_wrapper_horizontal_menu sambar" id="sm_megamenu_menu5e36fd12337f6"
                                 data-sam="10754738181580662034">
                                <div class="sambar-inner"><span class="btn-sambar" data-sapi="collapse"
                                                                data-href="#sm_megamenu_menu5e36fd12337f6"><span
                                                class="icon-bar"></span> <span class="icon-bar"></span> <span
                                                class="icon-bar"></span></span>
                                   
                            </nav>
                            <script type="text/javascript">
                                require(["jquery", "mage/template"], function ($) {
                                    var menu_width = $('.sm_megamenu_wrapper_horizontal_menu').width();
                                    $('.sm_megamenu_wrapper_horizontal_menu .sm_megamenu_menu > li > div').each(function () {
                                        $this = $(this);
                                        var lv2w = $this.width();
                                        var lv2ps = $this.position();
                                        var lv2psl = $this.position().left;
                                        var sw = lv2w + lv2psl;
                                        if (sw > menu_width) {
                                            $this.css({'right': '0'});
                                        }
                                    });
                                    var _item_active = $('div.sm_megamenu_actived');
                                    if (_item_active.length) {
                                        _item_active.each(function () {
                                            var _self = $(this), _parent_active = _self.parents('.sm_megamenu_title'),
                                                _level1 = _self.parents('.sm_megamenu_lv1');
                                            if (_parent_active.length) {
                                                _parent_active.each(function () {
                                                    if (!$(this).hasClass('sm_megamenu_actived'))
                                                        $(this).addClass('sm_megamenu_actived');
                                                });
                                            }

                                            if (_level1.length && !_level1.hasClass('sm_megamenu_actived')) {
                                                _level1.addClass('sm_megamenu_actived');
                                            }
                                        });
                                    }

                                });</script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>