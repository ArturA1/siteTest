<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Libro
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <nav id="colorlib-main-nav" role="navigation">
        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
        <div class="js-fullheight colorlib-table">
            <div class="colorlib-table-cell js-fullheight">
                <div class="row d-flex justify-content-end">
                    <!--<div class="col-md-12 px-5">
                        <ul class="mb-5">
                            <li class="active"><a href="index.php"><span>Home</span></a></li>
                            <li><a href="fashion.html"><span>Fashion</span></a></li>
                            <li><a href="model.html"><span>Model</span></a></li>
                            <li><a href="travel.html"><span>Travel</span></a></li>
                            <li><a href="about.html"><span>About us</span></a></li>
                            <li><a href="contact.html"><span>Contact</span></a></li>
                        </ul>
                    </div>-->
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'headermenu',
                            'menu_id'        => 'header-menu',
                            'menu_class'     => 'mb-5',
                            'container_class'=> 'col-md-12 px-5',
                        )
                    );
                    ?>
                    <div class="col px-5 copyright">
                        <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <br> | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div id="colorlib-page">
        <header>
            <div class="container-fluid">
                <div class="row no-gutters">
                    <div class="col-md-12">
                        <div class="colorlib-navbar-brand">
                            <a class="colorlib-logo" href="index.php">sheBlogs</a>
                        </div>
                        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
                    </div>
                </div>
            </div>
        </header>

        <section class="ftco-fixed clearfix">
            <div class="image js-fullheight float-left">
                <div class="home-slider owl-carousel js-fullheight">
                    <div class="slider-item js-fullheight" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/bg_1.jpg');">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row slider-text align-items-end" data-scrollax-parent="true">
                                <div class="col-md-10 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                                    <p class="cat"><span>Fashion</span></p>
                                    <h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Popular Lifestyle with Fashion &amp; Modeling</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="slider-item js-fullheight" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/bg_2.jpg');">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row slider-text align-items-end" data-scrollax-parent="true">
                                <div class="col-md-10 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                                    <p class="cat"><span>Model</span></p>
                                    <h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Canadian Girl make your world go round</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
