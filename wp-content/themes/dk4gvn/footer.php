<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<footer id="footer">
    <div class="container">
        <div class="form-group textlinkfo">
        </div>
        <div class="container">
            <div class="form-group">
                <div class="row menu-footer">
                    <?php wp_nav_menu( array( 'theme_location'=> 'main-menu', 'menu_id' => 'menu-main-menu', 'menu_class'=> 'nav navbar-nav menu') ); ?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <hr class="divider" />
                <div class="col-sm-8 col-md-offset-4">
                    <div class="copyright">
                        Copyright © 2017 Trang đăng ký dịch vụ 3G và 4G của VinaPhone
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="social">
                        <a href="#"><i class="icon-twitter3"></i></a>
                        <a href="#"><i class="icon-facebook3"></i></a>
                        <a href="#"><i class="icon-google-plus3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </footer>
</div>
 
<nav id="my-menu">
    <div class="menu-mb" id="main_menu_mb">
        <?php if ( has_nav_menu( 'footer-menu' )  ) : ?>
        <?php
                    wp_nav_menu(array('theme_location' => 'footer-menu', 'menu_id' => 'menu-main-menu', 'menu_class' => 'nav navbar-nav menu menu-footer'));
                    ?>
            </nav><!-- .main-navigation -->
        <?php endif; ?>
    </div>
</nav>



<script>
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=1783279778625906";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

</script>
<script>
    window.___gcfg = {
        lang: 'vi'
    };
    (function () {
        var po = document.createElement('script');
        po.type = 'text/javascript';
        po.async = true;
        po.src = 'https://apis.google.com/js/platform.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(po, s);
    })();

</script>
</body>

</html>
