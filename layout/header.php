<!-- This header include top of the web pages  -->
<!DOCTYPE php>
<php lang="en">
<head>
    <script src="https://www.googleoptimize.com/optimize.js?id=OPT-MNR6NSR"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1 , maximum-scale=1 " />
    <!-- <meta name="description" content="Extern Labs Inc is the Best Software Development Company in the USA that is helping Businesses and Organizations in building their Software Solutions."> -->
    <meta name="description" content="<?php echo $description; ?>">
    <link rel="canonical" href="https://externlabs.com/ "/>
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <title><?php echo $title; ?></title>
    <link rel="shortcut icon" type="image/png" href="./images/favicon.png"/>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/helper.css" />
    <link rel="stylesheet" href="free-quote.css" />
    <link rel="stylesheet" href="style.css" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-162813045-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-162813045-1');
    </script>

    <script type="application/ld+json">
        {
        "@context" : "http://schema.org",
        "@type" : "LocalBusiness",
        "name" : "<?php echo $script_name; ?>",
        "image" : "<?php echo $script_image; ?>",
        "telephone" : "+1-760-478-9698",
        "email" : "info@externlabs.com",
        "address" : {
            "@type" : "PostalAddress",
            "streetAddress" : "1309 Coffeen Avenue Ste 1300",
            "addressLocality" : "Sheridan",
            "addressRegion" : "Wyoming",
            "postalCode" : "82801"
        },
        "url" : "<?php echo $script_url; ?>"
        }
</script>

</head>
<!-- <body class="royal_preloader" id="body"> -->
<body id="body" class="show-popup">
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat" attribution=setup_tool page_id="778961378956345" theme_color="#3498DB" logged_in_greeting="Hi! How can we help you today?" logged_out_greeting="Hi! How can we help you today?">
    </div>
    <script> 
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v9.0'
            });
        };
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <div id="page" class="site">

        <header id="site-header" class="site-header header-style-2 header-fullwidth sticky-header header-static">
            <!-- <div class="header-topbar">
                <div class="octf-area-wrap">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="topbar-info">
                                    <li><i class="fas fa-envelope"></i><a href="mailto:info@externlabs.com">
                                            info@externlabs.com</a></li>
                                    <li><i class="fas fa-clock"></i> Mon - Fri: 9.00 am - 6.30 pm</li>
                                </ul>
                            </div>
                            <div class="col-md-6 text-right">
                                <div class="topbar-right">
                                    <ul class="extra-text">
                                        <li>We are creative, ambitious and ready for challenges! <a href="contact.php">Get in Touch</a></li>
                                    </ul>
                                    <ul class="social-list">
                                        <li><a href="https://twitter.com/externlabs" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://www.facebook.com/externlabs/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://www.linkedin.com/company/extern-labs" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="main-header"> 
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex align-items-center header-bar">
                            <div class="logo-part">
                                <a href="index.php">
                                    <img src="./images/externlogo.svg" alt="logo-img">
                                </a>
                            </div>  

                            <ul class="menu">
                                <li class="menu-item-has-children">
                                    <a href="javascript:vod(0)"> Company </a> 
                                    <ul class="sub-menu">
                                        <li><a href="about-us.php">About us</a></li>
                                        <li><a href="why-choose-us.php">Why Choose Us</a></li>
                                        <li><a href="career.php">Career</a></li>
                                        <!-- <li><a href="https://externlabs.com/blogs/career/"> Career </a></li> -->
                                    </ul> 
                                </li>                                        
                                <li class="menu-item-has-children mega-menu"><a href="javascript:void(0)">Services</a>
                                    <ul class="sub-menu mega-sub-menu">
                                        <li> <a href="mobile-development.php"> Mobile development </a>
                                            <ul>
                                                <li><a href="android-app-development.php">Android App Development</a></li>
                                                <li><a href="iphone-app-development.php">iPhone App Development</a></li>
                                                <li><a href="hybrid-app-development.php">Hybrid App Development</a></li>
                                                <li><a href="progressive-app-development.php">Progressive Web Apps Development</a></li>
                                                <li><a href="react-native-development.php">React Native Development</a></li>
                                                <li><a href="wearable-app-development.php">Wearable App Development</a></li>
                                                <li><a href="application-maintainance-support.php">Application Maintenance and Support</a></li>
                                                <li><a href="iot-application-development.php">Iot application Development</a></li>
                                                <li><a href="enterprise-mobility-solution.php">Enterprise Mobility Solution</a></li>
                                                <li><a href="ipad-app-development.php">iPad App Development</a></li>
                                            </ul> 
                                        </li>
                                      <li> <a href="software-product-development.php"> Software Product Development </a>
                                        <ul>
                                            <li><a href="custom-software-development.php">Custom Software Development</a></li>
                                            <li><a href="saas-application-development.php">SAAS application Development</a></li>
                                            <li><a href="pos-development-solution.php">POS Development Solution</a></li>
                                            <li><a href="enterprise-product-development.php">Enterprise Product Development</a></li>
                                            <li> <a href="product-customization.php">Product Customization/builder</a></li>
                                            <li><a href="crm-development.php">CRM Development Solution</a></li>
                                            <li><a href="cms-development.php">CMS Development</a></li>
                                            <li><a href="chatbot-development.php">Chatbot Development</a></li>
                                        </ul> 
                                      </li>
                                      <li> <a href="full-stack-development.php"> Full Stack Development </a>
                                        <ul>
                                            <li><a href="custom-web-development.php">Custom Web Development</a></li>
                                            <li><a href="web-portal-development.php">Web Portal Development</a></li>
                                            <li><a href="meanstack-development.php">Meanstack Development</a></li>
                                            <li><a href="python-development.php">Python Development</a></li>
                                            <li><a href="php-development.php">PHP Development</a></li>
                                            <li><a href="laravel-development.php">Laravel Development</a></li>
                                            <li><a href="cakephp-development.php">CakePHP Development</a></li>
                                            <li><a href="codeigniter-development.php">Codeigniter Development</a></li>
                                            <li><a href="nodejs-development.php">NodeJS Development</a></li>
                                            <li><a href="angular-js-development.php">AngularJS Development</a></li>
                                            <li><a href="magento-development.php">Magento Development</a></li>
                                        </ul> 
                                      </li>
                                      <li><a href="digital-marketing-services.php"> Digital Marketing Services </a>
                                        <ul>
                                            <li><a href="paid-advertising.php">Paid Advertising</a> </li>
                                            <li><a href="search-engine-optimization.php">Search Engine Optimization</a></li>
                                            <li><a href="local-seo-services.php">Local SEO Services</a></li>
                                            <li><a href="social-media-marketing.php">Social Media Marketing</a></li>
                                            <li><a href="video-advertising.php">Video Advertising</a></li>
                                            <li> <a href="content-creation-and-Marketing.php">Content Creation and Advertising</a></li>
                                            <li><a href="branding-promotions.php">Branding and Promotions</a></li>
                                        </ul>
                                      </li>
                                    </ul>
                                </li> 
                                <li><a href="industries.php"> Industries </a></li>
                                <li><a href="portfolio.php"> Portfolio </a></li>
                                <li><a href="https://externlabs.com/blogs/"> Blog </a></li>
                                <li><a href="contact.php"> Contact </a></li>
                            </ul>

                            <ul class="hd-info">
                                <li>
                                    <i class="fas fa-phone"></i>
                                    <div class=""> 
                                        <span> Have Any Questions? </span>
                                        <a href="tel:+1-760-478-9698"> +1-760-478-9698 </a>
                                    </div>
                                </li>
                                <li><a href="hire-developer.php" class="btn"> Hire developer </a></li>
                            </ul>

                        </div>
                    </div>
            </div>
            
            <div class="header_mobile">
                <div class="container">
                    <div class="mlogo_wrapper clearfix">
                        <div class="mobile_logo"> 
                            <a href="index.php">
                                <img src="./images/externlogo.svg" alt="Externlabs" class="">
                            </a>
                        </div>
                        <div id="mmenu_toggle">
                            <button></button>
                        </div>
                        <ul class="hd-info">
                                <li><a href="hire-developers.php" class="btn"> Hire developer </a></li>
                            </ul>
                    </div>
                    <div class="mmenu_wrapper">
                        <div class="mobile_nav collapse">
                            <ul id="menu-main-menu" class="mobile_mainmenu">
                                <!-- <li><a href="services.php">Solutions</a></li> -->
                                <li class="menu-item-has-children"><a href="javascript:void(0)">Company</a>
                                    <ul class="sub-menu">
                                        <li><a href="about-us.php">About us</a></li>
                                        <li><a href="why-choose-us.php">Why Choose Us</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="javascript:void(0)">Services</a>
                                    <ul class="sub-menu">
                                        <li><a href="mobile-development.php">Mobile Development</a>
                                            <ul class="sub-menu">
                                                <li><a href="android-app-development.php">Android App Development</a></li>
                                                <li><a href="iphone-app-development.php">iPhone App Development</a></li>
                                                <li><a href="hybrid-app-development.php">Hybrid App Development</a></li>
                                                <li><a href="progressive-app-development.php">Progressive Web Apps Development</a></li>
                                                <li><a href="react-native-development.php">React Native Development</a></li>
                                                <li><a href="wearable-app-development.php">Wearable App Development</a></li>
                                                <li><a href="application-maintainance-support.php">Application Maintenance and Support</a></li>
                                                <li><a href="iot-application-development.php">Iot application Development</a></li>
                                                <li><a href="enterprise-mobility-solution.php">Enterprise Mobility Solution</a></li>
                                                <li><a href="ipad-app-development.php">iPad App Development</a></li>                   </ul>
                                        </li>
                                        <li><a href="software-product-development.php">Software Product Development</a>
                                            <ul class="sub-menu">
                                                <li><a href="custom-software-development.php">Custom Software Development</a></li>
                                                <li><a href="saas-application-development.php">SAAS application Development</a></li>
                                                <li><a href="pos-development-solution.php">POS Development Solution</a></li>
                                                <li><a href="enterprise-product-development.php">Enterprise Product Development</a></li>
                                                <li><a href="product-customization.php">Product Customization/builder</a></li>
                                                <li><a href="crm-development.php">CRM Development Solution</a></li>
                                                <li><a href="cms-development.php">CMS Development</a></li>
                                                <li><a href="chatbot-development.php">Chatbot Development</a></li>                    
                                            </ul>
                                        </li>
                                        <li><a href="full-stack-development.php">Full Stack Development</a>
                                            <ul class="sub-menu">
                                                <li><a href="custom-web-development.php">Custom Web Development</a></li>
                                                <li><a href="web-portal-development.php">Web Portal Development</a></li>
                                                <li><a href="meanstack-development.php">Meanstack Development</a></li>
                                                <li><a href="python-development.php">Python Development</a></li>
                                                <li><a href="php-development.php">PHP Development</a></li>
                                                <li><a href="laravel-development.php">Laravel Development</a></li>
                                                <li><a href="cakephp-development.php">CakePHP Development</a></li>
                                                <li><a href="codeigniter-development.php">Codeigniter Development</a></li>
                                                <li><a href="nodejs-development.php">NodeJS Development</a></li>
                                                <li><a href="angular-js-development.php">AngularJS Development</a></li>
                                                <li><a href="magento-development.php">Magento Development</a></li>                                                           </ul>
                                        </li>
                                        <li><a href="digital-marketing-services.php">Digital Marketing Services</a>
                                            <ul class="sub-menu">
                                                <li><a href="paid-advertising.php">Paid Advertising</a></li>
                                                <li><a href="search-engine-optimization.php">Search Engine Optimization</a></li>
                                                <li><a href="local-seo-services.php">Local SEO Services</a></li>
                                                <li><a href="social-media-marketing.php">Social Media Marketing</a></li>
                                                <li><a href="video-advertising.php">Video Advertising</a></li>
                                                <li><a href="content-creation-and-Marketing.php">Content Creation and Advertising</a></li>
                                                <li><a href="branding-promotions.php">Branding and Promotions</a></li>
                                            </ul>
                                      </li> 
                                    </ul>
                                </li>                                 
                                <!-- <li><a href="services.php">Services</a></li> -->
                                <li><a href="industries.php">Industries</a></li>
                                <li><a href="portfolio.php">Portfolio</a></li>
                                <li><a href="https://externlabs.com/blogs/">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </header>

        