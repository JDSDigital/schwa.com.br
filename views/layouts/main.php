<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\assets\AppAsset;

$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'href' => Yii::getAlias('@web') . '/images/GeknologyWhite.png']);
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!-- Preloader -->
<!--<div id="preloader">
    <div id="status">
        <?/*= Html::img(Yii::getAlias('@web') . '/images/theme-pics/loader.gif'); */?>
        loading
    </div>
</div>-->
<!-- Preloader -->

<div class="wrap">
    <?php /*
    NavBar::begin([
        'brandLabel' => Html::img(Yii::getAlias('@web') . '/images/GeknologyText.png', ['class' => 'img-responsive']),
        'brandOptions' => ['class' => 'p5'],
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => '#index'],
        ['label' => 'About', 'url' => '#about'],
        ['label' => 'Contact', 'url' => '#contactSlice'],
    ];
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right list-inline'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    */?>

    <header class="navbar-fixed-top">
    <!-- pre header -->
        <div id="preHeader" class="hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <ul class="quickMenu">
                            <li><a href="template-site-map.html" class="linkLeft">Site map</a></li>
                            <li><a href="template-about.html">About us</a></li>
                            <li><a href="template-contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-6">
                        <div id="contactBloc">
                            <!-- social icons -->
                            <ul class="socialNetwork">
                                <li>
                                    <a href="#" class="tips" title="follow me on Facebook">
                                        <i class="icon-facebook-1 iconRounded"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="tips" title="follow me on Twitter">
                                        <i class="icon-twitter-bird iconRounded"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="tips" title="follow me on Google+">
                                        <i class="icon-gplus-1 iconRounded"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="tips" title="follow me on Linkedin">
                                        <i class="icon-linkedin-1 iconRounded"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="tips" title="follow me on Dribble">
                                        <i class="icon-dribbble iconRounded"></i>
                                    </a>
                                </li>
                                <!-- social icons -->
                            </ul>
                            <!-- phone -->
                            <span class="contactPhone"><i class="icon-mobile"></i>615.987.1234</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- pre header -->

            <!-- header -->
        <div id="mainHeader" role="banner">
            <div class="container">

                <nav class="navbar navbar-default scrollMenu" role="navigation">

                    <div class="navbar-header">
                        <!-- responsive navigation -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainMenu">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Logo -->
                        <a class="navbar-brand" href="index.html"><img src="images/main-logo.png" alt="FAT CATZ website template"/></a>
                    </div>

                    <div class="collapse navbar-collapse" id="mainMenu">


                        <!-- Main navigation -->
                        <ul class="nav navbar-nav pull-right">

                            <li class="primary">
                                <a href="index.html" class="firstLevel active hasSubMenu" >Home</a>
                                <ul class="subMenu">
                                    <li><a href="home1.html">Custom Slider</a></li>
                                    <li><a href="home2.html">Layer Slider</a></li>
                                    <li><a href="home3.html">Camera Slider</a></li>
                                    <li><a href="home8.html">Fullscreen Slider</a></li>
                                    <li><a href="home4.html">Blog style</a></li>
                                    <li><a href="home5.html">No Slider Video</a></li>
                                    <li><a href="home6.html">No Slider Portfolio</a></li>
                                    <li><a href="home7.html">No Slider</a></li>
                                    <li class="last"><a href="index-one-page.html">One page</a></li>
                                </ul>
                            </li>

                            <li class="sep"></li>

                            <li class="primary">
                                <a href="features-neko-shortcodes.html" class="firstLevel hasSubMenu" >Features</a>
                                <ul class="subMenu">
                                    <li><a href="features-neko-shortcodes.html">Neko shortcodes</a></li>
                                    <li><a href="features-columns.html">Columns</a></li>
                                    <li><a href="features-typography.html">Typography</a></li>
                                    <li><a href="features-tables.html">Tables</a></li>
                                    <li><a href="features-buttons.html">Buttons</a></li>
                                    <li><a href="features-icons.html">Icons</a></li>
                                    <li><a href="features-tabs.html">Tabs and accordions</a></li>
                                    <li><a href="features-pagination.html">Pagination</a></li>
                                    <li><a href="features-labels.html">Labels and badges</a></li>
                                    <li><a href="features-alerts.html">Alerts</a></li>
                                    <li><a href="features-progress.html">Progress bar</a></li>
                                    <li ><a href="features-pricing.html">Pricing tables</a></li>

                                    <li class="dropdownSubmenu last">
                                        <a href="#" class="hasSubMenu">Sub menu</a>
                                        <ul class="subMenu">
                                            <li><a href="#" class="">Third level 1</a></li>
                                            <li><a href="#" class="">Third level 2</a></li>
                                            <li class="last"><a href="#" class="">Third level 3</a></li>
                                        </ul>

                                    </li>
                                </ul>
                            </li>
                            <li class="sep"></li>

                            <li class="primary">
                                <a href="template-menu-left.html" class="firstLevel hasSubMenu">Templates</a>
                                <ul class="subMenu">
                                    <li class="dropdownSubmenu">
                                        <a href="template-menu-left.html" class="hasSubMenu">Sidebars</a>
                                        <ul class="subMenu">
                                            <li><a href="template-menu-left.html">Menu left</a></li>
                                            <li><a href="template-sidebar-right.html">Sidebar right</a></li>
                                            <li class="last"><a href="template-2-sidebars.html">2 sidebars</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="template-contact.html">Contact</a></li>
                                    <li><a href="template-full-width.html">Full width</a></li>
                                    <li><a href="template-big-header.html">Big page header</a></li>
                                    <li><a href="template-plans.html">Our plans</a></li>
                                    <li><a href="template-about.html">About us</a></li>
                                    <li><a href="template-services.html">Services</a></li>
                                    <li><a href="template-faq.html">FAQ</a></li>
                                    <li><a href="template-404.html">404 error</a></li>
                                    <li class="last"><a href="template-site-map.html">Site map</a></li>
                                </ul>
                            </li>

                            <li class="sep"></li>

                            <li class="primary">
                                <a href="portfolio-masonery.html" class="firstLevel hasSubMenu">Portfolio</a>
                                <ul class="subMenu">
                                    <li><a href="portfolio-masonery.html" >Masonry</a></li>
                                    <li class="dropdownSubmenu">
                                        <a href="portfolio-2columns.html" class="hasSubMenu">Filterable</a>
                                        <ul class="subMenu">
                                            <li><a href="portfolio-2columns.html">2 columns</a></li>
                                            <li><a href="portfolio-3columns.html">3 columns</a></li>
                                            <li class="last"><a href="portfolio-4columns.html">4 columns</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdownSubmenu">
                                        <a href="portfolio-project-image.html" class="hasSubMenu">Single project</a>
                                        <ul class="subMenu">
                                            <li><a href="portfolio-project-image.html">Image</a></li>
                                            <li><a href="portfolio-project-carousel.html">Carousel</a></li>
                                            <li class="last"><a href="portfolio-project-video.html">Video</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdownSubmenu last">
                                        <a href="portfolio-project-fullwidth-image.html" class="hasSubMenu last">Single project full width</a>
                                        <ul class="subMenu">
                                            <li><a href="portfolio-project-fullwidth-image.html">Image</a></li>
                                            <li><a href="portfolio-project-fullwidth-carousel.html">Carousel</a></li>
                                            <li class="last"><a href="portfolio-project-fullwidth-video.html">Video</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="sep"></li>
                            <li class="primary">
                                <a href="blog-home-sidebar-right.html" class="firstLevel hasSubMenu">Blog</a>
                                <ul class="subMenu">
                                    <li><a href="blog-home-sidebar-right.html">Blog sidebar right</a></li>
                                    <li class="last"><a href="blog-post.html" class="last">Post</a></li>
                                </ul>
                            </li>
                            <li class="sep"></li>
                            <li id="lastMenu" class="last"><a href="template-contact.html" class="firstLevel last">Contact</a></li>
                        </ul>
                        <!-- End main navigation -->

                    </div>
                </nav>


            </div>
        </div>
    </header>
    <?= $content ?>
</div>



<footer>
    <section id="mainFooter">
        <div class="container" id="footer">
            <div class="row">
                <div class="col-sm-4">
                    <div class="footerWidget">
                        <img src="images/neko-logo.png" alt="latest Little Neko news" id="footerLogo">
                        <p><a href="http://www.little-neko.com/" title="Little Neko, website template creation">Little Neko</a> is a web design and development studio. We build responsive HTML5 and CSS3 templates, integrating best web design practises and up-to-date web technologies to create great user experiences. We love what we do and we hope you too ! </p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="footerWidget">

                    <h3>Little NEKO</h3>
                    <address>
                        <p> <i class="icon-location"></i>&nbsp;77 Mass. Ave., E14/E15<br>
                            Cambridge, MA 02139-4307 USA <br>
                            <i class="icon-phone"></i>&nbsp;615.987.1234 <br>
                            <i class="icon-mail-alt"></i>&nbsp;<a href="mailto:little@little-neko.com">little@little-neko.com</a> </p>
                        </address>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="footerWidget">
                        <h3>Follow us, we are social</h3>
                        <ul class="socialNetwork">
                            <li><a href="#" class="tips" title="" data-original-title="follow me on Facebook"><i class="icon-facebook-1 iconRounded"></i></a></li>
                            <li><a href="#" class="tips" title="" data-original-title="follow me on Twitter"><i class="icon-twitter-bird iconRounded"></i></a></li>
                            <li><a href="#" class="tips" title="" data-original-title="follow me on Google+"><i class="icon-gplus-1 iconRounded"></i></a></li>
                            <li><a href="#" class="tips" title="" data-original-title="follow me on Linkedin"><i class="icon-linkedin-1 iconRounded"></i></a></li>
                            <li><a href="#" class="tips" title="" data-original-title="follow me on Dribble"><i class="icon-dribbble iconRounded"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section  id="footerRights">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright © 2012 <a href="http://www.little-neko.com/" target="blank">Little NEKO</a> / All rights reserved.</p>
                </div>

            </div>
        </div>
    </section>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
