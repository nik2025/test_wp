<div class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-lg-6">
                <div class="footer-navs">
                    <div class="footer-menu">
                        <?php wp_nav_menu( [
                            'theme_location'  => 'primary_footer',
                            'container'       => 'div',
                            'menu_class'      => 'nav navbar-nav navbar-footer',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        ] ); ?>
                    </div>
                    <div class="footer-social-links">
                        <ul class="social-links">
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-lg-6">
                <div class="copyright">
                    <p>Copyright © ABB AG</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>
