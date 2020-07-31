<?php
/*
	Template Name: Chuyển đổi đầu số
*/

ini_set('max_execution_time', 1200);
$args = array(
    'posts_per_page'   => 1000,
    'offset'           => 0,
    'orderby'          => 'date',
    'order'            => 'DESC',
    'post_type'        => 'post',
    'post_status'      => 'publish',
    'suppress_filters' => true
);
$posts_array = get_posts( $args );
foreach ($posts_array as $item){
    $tmp['ID'] = $item->ID;
    $tmp['post_title'] = $item->post_title;
    $tmp['post_content'] = str_replace('1544','1543',$item->post_content);
    wp_update_post($tmp,true);
}
echo "Done";
?>