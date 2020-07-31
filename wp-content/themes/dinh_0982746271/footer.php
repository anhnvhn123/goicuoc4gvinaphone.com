<?php setPostViews(get_the_ID()); ?>
<aside class="mh-widget-col-1 mh-sidebar" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">
    <div id="recent-posts-2" class="mh-widget widget_recent_entries">
        <h4 class="mh-widget-title"><span class="mh-widget-title-inner">Recent Posts</span></h4>
        <ul>
<!--            --><?php
//            global $post;
//            $myposts = get_last_post(5);
//            foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
<!--                <li>-->
<!--                    <a href="--><?php //echo get_permalink();?><!--">--><?php //echo get_the_title(); ?><!--</a>-->
<!--                </li>-->
<!--            --><?php //endforeach;
//            wp_reset_postdata();
//            ?>
            <?php
            query_posts('meta_key=post_views_count&posts_per_page=5&orderby=meta_value_num&
      order=DESC');
            if (have_posts()) : while (have_posts()) : the_post();
                ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title();
                        ?></a>
                </li>
                <?php
            endwhile; endif;
            wp_reset_query();
            ?>
        </ul>
    </div>
    <div id="text-3" class="mh-widget widget_text">
        <div class="textwidget"><img style="display: inline;"  src="<?php echo get_template_directory_uri() ?>/dangky3g.jpg" alt="cach-dat-ten-o-nha-cho-be">
        </div>
    </div>
<!--    <div id="text-2" class="mh-widget widget_text">-->
<!--        <div class="textwidget">-->
<!--            <a target="_blank" href="#">-->
<!--                <img src="--><?php //echo get_template_directory_uri() ?><!--/dangky3g.jpg" alt="" style="display: inline;">-->
<!--            </a>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div id="text-4" class="mh-widget widget_text">-->
<!--        <div class="textwidget">-->
<!--            <a target="_blank" href="#">-->
<!--                <img src="--><?php //echo get_template_directory_uri() ?><!--/image2/lop-hoc-tien-sam-379x197-1.jpg" alt="" style="display: inline;">-->
<!--            </a>-->
<!--        </div>-->
<!--    </div>-->
</aside>
</div>
<div class="mh-copyright-wrap">
    <div class="mh-container mh-container-inner clearfix">
        <p class="mh-copyright" align="center">Copyright © 2017 | goicuoc4gvinaphone.com </p>
    </div>
</div>
</div>
<!-- .mh-container-outer -->
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/image2/wp-embed.min.js.download"></script>
<!--GA code -->
<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-20404819-12', 'auto');
    ga('send', 'pageview');
</script>
<!--end GA code -->

</body>

</html>