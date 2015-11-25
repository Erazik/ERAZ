<!DOCTYPE html>
<html>
<head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset="<?php bloginfo('charset'); ?>" />
    <title><?php wp_title(''); ?>&nbsp;|&nbsp;<? bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/style.css" type="text/css" media="screen" />
<!--    <link rel="stylesheet" href="--><?php //bloginfo('template_url') ?><!--/css/responsive.css" type="text/css" media="screen" />-->
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/transitions.css" type="text/css" media="screen" />
    <link rel="shortcut icon" href="<?php  bloginfo('template_url') ?>/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>

    <div class="header">
        <div class="headerImg">
            <p>Vagarshak Ohanyan</p>
<!--            --><?php //echo get_the_post_thumbnail(5); ?>
    </div>
        <div class="headerMenu">
            <?php wp_nav_menu( array( 'menu' => 'header_menu' ) ); ?>

        </div>
    </div>

</header>
