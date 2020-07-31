<?php  
	function get_post_by_category($catid, $num_of_post = 5){
		global $list_post;
		$args = array(
			'posts_per_page'   => $num_of_post,
			'offset'           => 0,
			'category'         => $catid,
			'orderby'          => 'date',
			'order'            => 'DESC',
			'post_type'        => 'post',
			'post_mime_type'   => '',
			'post__not_in'	   =>	$list_post,	
			'post_status'      => 'publish'
		);
		$posts_array = get_posts( $args );
		foreach ($posts_array as $key => $value) {
			array_push($list_post, $value->ID);
		}
		return $posts_array;
	}

	function get_last_post($num_of_post = 5){
		global $list_post;
		$args = array(
			'posts_per_page'   => $num_of_post,
			'offset'           => 0,
			'orderby'          => 'date',
			'order'            => 'DESC',
			'post_type'        => 'post',
			'post_mime_type'   => '',
			'post__not_in'	   =>	$list_post,	
			'post_status'      => 'publish'
		);
		$posts_array = get_posts( $args );
		foreach ($posts_array as $key => $value) {
			array_push($list_post, $value->ID);
		}
		return $posts_array;
	}
?>