<?php get_header(); ?>
<?php
while (have_posts()) : the_post(); ?>
    <div class="mh-wrapper clearfix">
        <div id="main-content" class="mh-content" role="main" itemprop="mainContentOfPage">
            <article id="post-141" class="post-141 post type-post status-publish format-standard has-post-thumbnail hentry category-dat-ten-theo-tuoi">
                <header class="entry-header clearfix">
                    <h1 class="entry-title"><?php echo get_the_title(); ?></h1>
                    <p class="mh-meta entry-meta">
                        <span class="entry-meta-date updated"><i class="fa fa-clock-o"></i><a ><?php echo get_the_date('d/m/Y');  ?></a></span>
                        <span class="entry-meta-author author vcard"><i class="fa fa-user"></i><a class="fn" ><?php echo get_the_author(); ?></a></span>
                    </p>
                </header>
                <div class="entry-content clearfix">
                    <?php the_content(); ?>
                </div>
            </article>

            <div class="screen-width">
                <div class="fb-comments" data-href="<?php echo get_permalink(); ?>" data-numposts="5" data-width="100%"></div>
            </div>
            <!-- #respond -->
        </div>
<?php endwhile;
wp_reset_postdata();
?>
<?php get_footer(); ?>