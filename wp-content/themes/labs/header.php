/**
* The main template file
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package WordPress
* @subpackage LABS
* @since 1.0
* @version 1.0
*/

<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= get_bloginfo('name'); ?></title>
    <meta charset="UTF-8">
    <meta name="description" content="Labs - Design Studio">
    <meta name="keywords" content="lab, onepage, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

    <!-- Stylesheets -->
    <?php wp_head(); ?>


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
            <h2>Loading.....</h2>
        </div>
    </div>

    <!-- Header section -->
    <header class="header-section">
        <div class="logo">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/logo.png" alt=""><!-- Logo -->
        </div>

        <!-- Navigation -->
        <div class="responsive"><i class="fa fa-bars"></i></div>
        <nav>
            <!-- <ul class="menu-list">
                <li class="active"><a href="home.html">Home</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="elements.html">Elements</a></li>
            </ul> -->
            <?php
            wp_nav_menu([
                // 'menu' => 'main-menu',
                'menu_class' => 'menu-list',
                'theme_location' => 'main-menu',
                'container' => ''
            ]);
            ?>
        </nav>
    </header>
    <!-- Header section end -->

    <!-- FIN HEADER
        ============================================ -->