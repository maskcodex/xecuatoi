<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <link rel='stylesheet' id='vc_google_fonts_lato100100italic300300italicregularitalic700700italic900900italic-css'  href='//fonts.googleapis.com/css?family=Lato%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&#038;ver=4.3.1' type='text/css' media='all' />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
    <script src="<?php echo get_template_directory_uri(); ?>/js/functions.js"></script>
	<?php wp_head(); ?>
</head>

<body>
    <div id='header'>
        <div id='top-head'>
            <div id='logo-header'><img src="<?php echo get_template_directory_uri(); ?>/images/logoxecuatoi.png"/></div>
            <div id='info-header'>
                <p>Tiếng Việt | English</p>
            </div>
        </div>
        <div id='header-menu'>
            <ul class='root-menu'>
                <li class='active'><a href="<?php bloginfo('home'); ?>">Đặt Xe</a></li>
                <li>Tuyến Đường
                        <?php 
                            $terms = get_terms( 'tuyen-duong' );

                            echo '<ul class="sub-menu">';

                            foreach ( $terms as $term ) {
                                $term_link = get_term_link( $term );
                                if ( is_wp_error( $term_link ) ) {
                                    continue;
                                }
                                echo '<li><a href="' . esc_url( $term_link ) . '">' . $term->name . '</a></li>';
                            }

                            echo '</ul>';
                        ?>
                        <li><a href="<?php echo esc_url( get_permalink(25) ); ?>">Tin Tức</a></li>
                        <li><a href="<?php echo esc_url( get_permalink(27) ); ?>">Chúng Tôi</a></li>
                    
                </li>
                <li><a href="<?php echo esc_url( get_permalink(25) ); ?>">Tin Tức</a></li>
                <li><a href="<?php echo esc_url( get_permalink(27) ); ?>">Chúng Tôi</a></li>
                <li>Đăng Nhập</li>
            </ul>
        </div>
    </div>

    <div id='wrapper'>
