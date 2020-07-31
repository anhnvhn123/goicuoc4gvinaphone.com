<?php
/*Template Name: Gói cước 4G*/
?>
<?php wpb_set_post_views(get_the_ID()); ?>
<?php get_header(); ?>

<?php
$id_4g= array('588','641','637');
$bangmau=array('#55c2af','#f49020');
?>
    <div class="container">
    <div class="row">
        <div class="col-md-8">
            <div>
                <ol class="breadcrumb">
                    <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="<?php echo get_home_url() ?>" itemprop="url"><i class="glyphicon glyphicon-home"></i> <span itemprop="title">Home</span></a>
                    </li>
                    <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="<?php echo get_home_url() ?>/<?php echo get_the_category()[0]->slug; ?>" itemprop="url"><span itemprop="title"><?php echo get_the_category()[0]->name; ?></span></a>
                    </li>
                    <li class="hidden-xs" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title"><a itemprop='url'><?php echo get_the_title()?></a></span>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <h2 class="post_title single-title entry-title"><?php echo get_the_title() ?></h2>
        </div>
    </div>
    <div class="row main-site">
        <div class='col-md-8 col-content'>
            <section class='innerContent'>
                <article class='post-heading hentry'>
                    <div class="form-group post_content entry-content">

                        <?php
                        foreach ($id_4g as $numbergoi => $post) {
                        $ghi_chu = get_field('ghi_chu', $post);
                        $idnhom = get_field('id_goi', $post);
                        $datas = get_field('goi_cuoc', $post);
                        ?>
                        <div id="<?php echo $idnhom; ?>" class="nhom-goi" style="margin-top: 40px;">
                            <div style="background: <?php echo $bangmau[$numbergoi%2];?>;height: 50px">
                                <h3 align="center" style="color: #FFFFFF;margin-bottom:0px;margin-top:0px;padding-top: 10px" class="nhom-goi-tite" title="<?php echo $idnhom ?>"><b><?php echo get_the_title(); ?></b></h3>
                            </div>

                            <div class="row">
                                <?php
                                if (!empty($datas)){
                                foreach ($datas as $key => $value) {
                                if ($key % 2 == 0){
                                ?>
                                <div class="row">
                                    <?php
                                    }
                                    ?>
                                    <div class="col-md-6x col-sm-6 category-list"
                                         style="margin-left: 15px;margin-right: 0px;margin-bottom:1%">
                                        <h3 align="center"
                                            style="border:5px double <?php echo $bangmau[$numbergoi % 2]; ?>;background-color: <?php echo $bangmau[$numbergoi % 2]; ?>;color: #FFFFFF">
                                            <b><?php echo $value['ma_goi_cuoc']; ?></b></h3>
                                        <table style="width: 100%;" class="table table-striped">
                                            <tbody>
                                            <tr>
                                                <td style="width: 32%;">Dung lượng</td>
                                                <td><?php echo $value['toc_do']; ?></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 30%;">Giá cước</td>
                                                <td><?php echo product_price($value['gia_cuoc']); ?>
                                                    đ/<?php echo $value['chu_ky']; ?></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 30%;">Cước phát sinh</td>
                                                <td><?php echo $value['cuoc_phat_sinh']; ?></td>
                                            </tr>
                                            <?php
                                            if (strlen($value['mo_ta']) > 0) {
                                                ?>
                                                <tr>
                                                    <td>Chú thích</td>
                                                    <td><?php echo $value['mo_ta']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                            <tr>
                                                <td colspan="2" style="text-align: center;">
                                                    <div class="col-md-8">
                                                            <span class="btn">
                                                                <b> <strong style="color: red;"><?php echo $value['cu_phap']; ?></strong>&nbsp;gửi&nbsp;<strong
                                                                            style="color: red"><?php echo $value['dau_so']; ?></strong>
                                                                </b>
                                                            </span>
                                                    </div>
                                                    <div class="col-md-4"><?php render_btn_dangky($value['cu_phap'], $value['dau_so']); ?></div>

                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <?php
                                    if ($key % 2 != 0 || $key == (count($datas) - 1)) {
                                        echo '<div class="clear-fix"></div></div>';

                                    }
                                    }
                                    ?>
                                    <?php
                                    }
                                    ?>
                                </div>

                                <p><b>Ghi chú :</b> <?php echo(($ghi_chu != '') ? $ghi_chu : 'Không có'); ?></p>
                            </div>

                            <?php
                            }
                            ?>
                        </div>
                </article>
                <div class='clearfix'></div>
            </section>

            <section class='innerContent'>
                <article class='post-heading hentry'>
                    <div class="form-group post_content entry-content">
                        <?php echo get_the_content() ?>
                    </div>
                </article>
                <div class='clearfix'></div>
            </section>
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
                            'category'	=> 3
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
<?php
wp_reset_postdata();
?>
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>