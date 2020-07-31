<?php get_header() ?>

<div class="container">
<div class="form-group row">
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="<?php echo get_home_url() ?>" itemprop="url"><i class="glyphicon glyphicon-home"></i> <span itemprop="title">Home</span></a>
            </li>
            <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="<?php echo get_home_url() ?>/<?php echo get_the_category()[0]->slug; ?>" itemprop="url"><span itemprop="title"><?php echo get_the_category()[0]->name; ?></span></a>
            </li>
        </ol>
    </div>
</div>
<div class="row main-site">
<div class='col-md-8 col-content' style="background-color: #fff;padding: 10px;margin-bottom: 30px;">
<article class='innerContent'>
<header class='post-heading'>
    <h2 class="post_title"><?php echo get_the_category()[0]->name; ?></h2>
    <div class="category-des" style="font-size: 14px;line-height: 20px;margin-bottom: 20px;">
            <?php echo $category[0]->description; ?>
    </div>
</header>
<div class="">
<?php
while (have_posts()) : the_post(); ?>
    <div class="post_cat col-sm-12">
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <div class="wrap_img">
                    <a href="<?php the_permalink(); ?>"><img src="<?= the_post_thumbnail_url('home-thumb') ?>" data-lazy-src="<?= the_post_thumbnail_url('home-thumb') ?>" width="300" height="231" class="media-object wp-post-image" alt srcset="" >
                    </a>
                </div>
            </div>
            <div class="col-sm-8 col-xs-12">
                <h4 class="media-heading"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="entry-title" rel="nofollow"><?php the_title(); ?></a></h4>
                <div class="box-meta"><i class="glyphicon glyphicon-user"></i> Post by: <span class="post-meta-author author vcard"><a href="http://dichvumobifone.com/author/tuoitang" class="fn"> <?php echo get_the_author(); ?></a></span> <i class="glyphicon glyphicon-time"></i> at
                    <time datetime="2017-10-25T15:54:44+00:00" class="updated published"><?php echo get_the_date('d-m-Y'); ?></time>
                </div>
                <div class="news_excerpt entry-summary"><?php echo get_the_excerpt(); ?></div>
            </div>
        </div>
    </div>
<?php endwhile;
wp_reset_postdata();
?>
<div class='form-group text-center'>
    <ul class='pagination'>
<!--        <li class='active'><a href=''>1</a>-->
<!--        </li>-->
<!--        <li><a href='--><?php //echo get_home_url() ?><!--/khuyen-mai/page/2'>2</a>-->
<!--        </li>-->
<!--        <li><a href='--><?php //echo get_home_url() ?><!--/khuyen-mai/page/3'>3</a>-->
<!--        </li>-->
<!--        <li><a href='--><?php //echo get_home_url() ?><!--/khuyen-mai/page/2'>&raquo;</a>-->
<!--        </li>-->
<!--        <li><a href='--><?php //echo get_home_url() ?><!--khuyen-mai/page/22'>&raquo;&raquo;</a>-->
<!--        </li>-->
    </ul>
    <div class='clearfix'></div>
</div>
</div>
</article>
</div>
<div class="col-md-4">
    <div id="secondary">
        <aside id="st_blog_posts_widget-4" class="widget widget_st_blog_posts_widget">
            <h3 class="widget-title">KHUYẾN MÃI LỚN</h3>
            <div class="latest-posts hot_discount">
                <?php $args = array(
                    'posts_per_page'   => 5,
                    'offset'           => 0,
                    'orderby'          => 'date',
                    'order'            => 'DESC',
                    'post_type'        => 'post',
                    'post_status'      => 'publish',
                    'category-name'	=> 'tin-khuyen-mai'
                );
                $posts_array = get_posts( $args );
                ?>
                <?php
                foreach ( $posts_array as $key=>$post ) : setup_postdata( $post ); ?>
                    <div class="media-widget">
                        <div class="pull-left"><span class="date"><?php echo get_the_date('d-m');?></span>
                        </div>
                        <div class="media-body">
                            <h3 class="entry-title"><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title() ?></a></h3>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                <?php endforeach;
                wp_reset_postdata();
                ?>
            </div>
        </aside>
        <aside id="st_blog_posts_widget-3" class="widget widget_st_blog_posts_widget">
            <h3 class="widget-title">XEM NHIỀU NHẤT</h3>
            <div class="latest-posts see_more">
                <?php
                $xem = get_posts(array(

                    'post_type' => 'post',
                    'post_status'   => 'publish',
                    'posts_per_page'   => 5,
                    'offset'           => 0,
                    'orderby'      => 'meta_value_num',
                    'order'        => 'DESC',
                    'meta_key'     => 'wpb_post_views_count',
                ));
                ?>
                <?php
                foreach ( $xem as $key=>$post ) : setup_postdata( $post ); ?>
                    <div class="media-widget">
                        <div class="pull-left">
                            <span class="date"><?php echo wpb_get_post_views(get_the_ID());?></span>
                        </div>
                        <div class="media-body">
                            <h3 class="entry-title"><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title() ?></a></h3>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                <?php endforeach;
                wp_reset_postdata();
                ?>
            </div>
        </aside>
    </div>
</div>
</div>
</div>
<?php get_footer() ?>