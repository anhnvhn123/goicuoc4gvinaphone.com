<?php get_header(); ?>
<div class="mh-wrapper clearfix">
    <div id="main-content" class="mh-loop mh-content" role="main">
        <?php
        global $post;
        $myposts = get_last_post( 10);
        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
            <article class="mh-loop-item clearfix post-117 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-tuc">
                <figure class="mh-loop-thumb">
                    <a href="<?php echo get_permalink(); ?>"><img width="326" height="245" src="<?= the_post_thumbnail_url('home-medium-thumb');?>" class="attachment-mh-magazine-lite-medium size-mh-magazine-lite-medium wp-post-image" alt="" sizes="(max-width: 326px) 100vw, 326px"> </a>
                </figure>
                <div class="mh-loop-content clearfix">
                    <header class="mh-loop-header">
                        <h3 class="entry-title mh-loop-title">
                            <a href="<?php echo get_permalink(); ?>" rel="bookmark">
                                <?php echo get_the_title(); ?></a>
                        </h3>
                        <div class="mh-meta mh-loop-meta">
                            <span class="mh-meta-date updated"><i class="fa fa-clock-o"></i><?php echo get_the_date('d/m/Y');  ?></span>
                            <span class="mh-meta-author author vcard"><i class="fa fa-user"></i><a class="fn" ><?php echo get_the_author(); ?></a></span>
                             </div>
                    </header>
                    <div class="mh-loop-excerpt">
                        <div class="mh-excerpt">
                            <p><?php echo get_excerpt(get_the_ID(), 20); ?> </p>
                        </div>
                    </div>
                </div>
            </article>
        <?php endforeach;
        wp_reset_postdata();
        ?>
        <?php page_nav(); ?>
    </div>
<?php get_footer(); ?>