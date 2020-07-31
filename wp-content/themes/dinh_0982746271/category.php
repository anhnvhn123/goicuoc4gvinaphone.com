<?php get_header(); ?>
<?php $category= get_the_category(); ?>
    <div class="mh-wrapper clearfix">
        <div id="main-content" class="mh-loop mh-content" role="main">
            <header class="page-header">
                <h1 class="page-title"><?php echo $category[0]->name; ?></h1> </header>
            <?php while (have_posts()) : the_post(); ?>
                <article class="mh-loop-item clearfix post-47 post type-post status-publish format-standard has-post-thumbnail hentry category-dat-ten-theo-tuoi">
                    <figure class="mh-loop-thumb">
                        <a href="<?php echo get_permalink(); ?>"><img width="326" height="245" src="<?= the_post_thumbnail_url('category-thumb'); ?>" class="attachment-mh-magazine-lite-medium size-mh-magazine-lite-medium wp-post-image" sizes="(max-width: 326px) 100vw, 326px"> </a>
                    </figure>
                    <div class="mh-loop-content clearfix">
                        <header class="mh-loop-header">
                            <h3 class="entry-title mh-loop-title">
                                <a href="<?php echo get_permalink(); ?>" rel="bookmark">
                                    <?php echo get_the_title(); ?></a>
                            </h3>
                            <div class="mh-meta mh-loop-meta">
                                <span class="mh-meta-date updated"><i class="fa fa-clock-o"></i><?php echo get_the_date('d/m/Y');  ?></span>
                                <span class="mh-meta-author author vcard"><i class="fa fa-user"></i><a class="fn" href=""><?php echo get_the_author(); ?></a></span>                            </div>
                        </header>
                        <div class="mh-loop-excerpt">
                            <div class="mh-excerpt">
                                <p><?php echo get_excerpt(get_the_ID(), 20); ?></p>
                            </div>
                        </div>
                    </div>
                </article>
                <!-- #post-## -->
            <?php endwhile; wp_reset_postdata(); ?>

        </div>

<?php get_footer(); ?>