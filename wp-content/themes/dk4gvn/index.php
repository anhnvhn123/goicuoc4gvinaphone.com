<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage dk4gvn
 * @since Twenty Fifteen 1.0
 */


get_header(); ?>
<div class="container">

    <?php include('inc/box_3g.php');?>
    <?php include('inc/box_4g.php');?>
    <?php include('inc/box_tich_hop.php');?>
    <?php include('inc/box_special.php');?>
    <div class="col-md-12 service">
<div class="row">
<div class="col-md-12">
                <h2 class="home-title" style="display: inline-block;">Các gói cước DATA VinaPhone</h2>
</div>
            <div class="col-md-6">
                <?php
                $tax_terms = get_post_types();
                $categories = get_categories();


                //Second Query for term2


                $pages = get_pages();

                foreach ($pages as $key => $page) {
                    if ($page->menu_order == 999) {

                        $image = wp_get_attachment_image_src(get_post_thumbnail_id($page->ID), 'single-post-thumbnail');

                        ?>
                        <div class="block-left">
                            <a href="<?php echo get_permalink($page->ID) ?>">
                                <img src="<?php echo $image[0] ?>">
                                <div class="content-left">
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                }

                ?>

            </div>
            <div class="col-md-6">
                <div class="block-right">
                    <div class="row">
                        <?php
                        $args_taxonomy = array(
                            'post_type' => $tax_terms['nhom_goi_cuoc'],
                            'tax_query' => array(
                                'taxonomy' => 'myposttype_categories',
                                'terms' => array('foo'),
                                'field' => 'slug',

                            ),
                            'posts_per_page' => 100,
                        );
                        $posts_array_taxonomy = get_posts($args_taxonomy);
                        $stt_3g = 0;
                        foreach ($posts_array_taxonomy as $key => $post) {
                            $categories = get_the_category($post->ID);
                            if (isset($categories[0]->slug)) {
                                if ($categories[0]->slug == 'tieu-bieu') {
                                    if ($stt_3g == 0) {
                                        $image1 = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
                                        ?>
                                        <div class="col-md-12">

                                            <a href="<?php echo get_permalink($post->ID) ?>">
                                                <div class="block-right-content">
                                                    <img src="<?php echo $image1[0] ?>">
                                                </div>
                                            </a>
                                        </div>
                                        <?php
                                    }
                                    $stt_3g++;
                                }
                            }
                        }
                        ?>
                        <?php
                        $args_taxonomy = array(
                            'post_type' => $tax_terms['nhom_goi_cuoc'],
                            'tax_query' => array(
                                'taxonomy' => 'myposttype_categories',
                                'terms' => array('foo'),
                                'field' => 'slug',

                            ),
                            'posts_per_page' => 100,
                        );
                        $posts_array_4g = get_posts($args_taxonomy);
                        $stt_4g = 0;
                        foreach ($posts_array_4g as $key => $post) {
                            $categories = get_the_category($post->ID);
                            if (isset($categories[0]->slug)) {
                                if ($categories[0]->slug == 'list-tieu-bieu') {
                                    if ($stt_4g <= 1) {
                                        $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
                                        ?>
                                        <div class="col-md-6 col-xs-6">
                                            <a href="<?php echo get_permalink($post->ID) ?>">
                                                <div class="block-right-content">
                                                    <img src="<?php echo $image[0] ?>">
                                                </div>
                                            </a>
                                        </div>
                                        <?php
                                    }
                                    $stt_4g++;
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
</div>
    </div>
    <div class="col-md-12 news">
        <div class="row">
            <div class="col-md-6 clearfix">

                <h5 class="home-title"><?php echo get_cat_name(3) ?></h5>
                <?php $args = array(
                    'posts_per_page' => 6,
                    'offset' => 0,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'tin-khuyen-mai'
                );
                $posts_array = get_posts($args);

                $categories = get_categories();
                $check_post_award = FALSE;
                ?>
                <?php
                foreach ($posts_array as $key => $post) : setup_postdata($post); ?>
                    <?php if ($key == 0) {
                        $check_post_award = TRUE;
                        ?>

                        <a href="<?php echo get_the_permalink(); ?>" title="<?php get_the_title() ?>"
                           class="post-image post-image-left">
                            <div class="featured-thumbnail-3g-post">
                                <img src="<?php the_post_thumbnail_url('home-thumb') ?>" data-lazy-src="" width="565"
                                     height="170" class="attachment-xs-thumb-index size-xs-thumb-index wp-post-image"
                                     alt="<?php echo get_the_title(); ?>">
                            </div>
                        </a>
                        <div class="content-3g-post">
                            <div class="title-3g-post">
                                <a href="<?php echo get_the_permalink(); ?>"
                                   title="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></a>
                            </div>
                        </div>
                    <?php } ?>

                    <?php if ($key == 1) { ?>
                        <ul>
                        <li>
                            <a href="<?php echo get_the_permalink(); ?>"
                               title="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></a>
                        </li>
                    <?php } ?>

                    <?php if ($key == 2 || $key == 3 || $key == 4) { ?>
                        <li>
                            <a href="<?php echo get_the_permalink(); ?>"
                               title="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></a>
                        </li>
                    <?php } ?>
                    <?php if ($key == 5) { ?>
                        <li>
                            <a href="<?php echo get_the_permalink(); ?>"
                               title="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></a>
                        </li>
                        </ul>
                    <?php } ?>

                <?php endforeach;
                wp_reset_postdata();
                ?>
                <?php if ($check_post_award) { ?>
                    <a class="btn btn-primary xemthem"
                       href="<?php echo get_home_url() ?>/<?php echo get_term(3)->slug; ?>">Xem
                        thêm</a>
                <?php } ?>
            </div>
            <div class="col-md-6 clearfix">
                <h5 class="home-title"><?php echo get_cat_name(5) ?></h5>
                <?php $args = array(
                    'posts_per_page' => 6,
                    'offset' => 0,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'tin-tuc-vinaphone'
                );
                $check_post_news = FALSE;
                $posts_array = get_posts($args);

                ?>
                <?php
                foreach ($posts_array as $key => $post) : setup_postdata($post); ?>
                    <?php if ($key == 0) {
                        $check_post_news = TRUE;
                        ?>

                        <a href="<?php echo get_the_permalink(); ?>" title="<?php get_the_title() ?>"
                           class="post-image post-image-left">
                            <div class="featured-thumbnail-3g-post">
                                <img src="<?php the_post_thumbnail_url('home-thumb') ?>" data-lazy-src="" width="565"
                                     height="170" class="attachment-xs-thumb-index size-xs-thumb-index wp-post-image"
                                     alt="<?php echo get_the_title(); ?>">
                            </div>
                        </a>
                        <div class="content-3g-post">
                            <div class="title-3g-post">
                                <a href="<?php echo get_the_permalink(); ?>"
                                   title="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></a>
                            </div>
                        </div>
                    <?php } ?>

                    <?php if ($key == 1) { ?>
                        <ul>
                        <li>
                            <a href="<?php echo get_the_permalink(); ?>"
                               title="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></a>
                        </li>
                    <?php } ?>

                    <?php if ($key == 2 || $key == 3 || $key == 4) { ?>
                        <li>
                            <a href="<?php echo get_the_permalink(); ?>"
                               title="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></a>
                        </li>
                    <?php } ?>
                    <?php if ($key == 5) { ?>
                        <li>
                            <a href="<?php echo get_the_permalink(); ?>"
                               title="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></a>
                        </li>
                        </ul>
                    <?php } ?>

                <?php endforeach;
                wp_reset_postdata();
                ?>
                <?php if ($check_post_news) { ?>
                    <a class="btn btn-primary xemthem"
                       href="<?php echo get_home_url() ?>/<?php echo get_term(5)->slug; ?>">Xem thêm</a>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="col-md-12 vas">
        <div class="row">

            <?php
            $categories = get_categories();
            $args = array(
                'posts_per_page' => 6,
                'offset' => 0,
                'orderby' => 'date',
                'order' => 'DESC',
                'post_type' => 'post',
                'post_status' => 'publish',
                'category-sug' => 'ho-tro-dich-vu'
            );
            $posts_array = get_posts($args);
            foreach ($posts_array as $key => $post) {
                if ($key <= 2) {
                    ?>
                    <div class="col-md-4 form-group">
                        <h5 class="home-title"><?php echo get_the_title($post->ID) ?></h5>
                        <a href="<?php echo get_the_permalink($post->ID); ?>">
                            <div class="img-support-post"><img
                                        src="<?php echo get_the_post_thumbnail_url($post->ID); ?> ">
                            </div>
                        </a>
                    </div>

                    <?php
                }
            }
            ?>


        </div>
    </div>
</div>
<?php get_footer(); ?>
