<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= get_the_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <?= get_custom_logo(); ?>
                </div>
                <div class="col-8">
                    <?php wp_nav_menu( [
                        'theme_location'  => 'primary_header',
                        'container'       => 'div',
                        'menu_class'      => 'nav navbar-nav navbar-header',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    ] ); ?>
                    <div class="mobile-menu">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
