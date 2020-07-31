<?php
define('template_url', get_template_directory_uri());

define('phone1', get_field('phone1', 4));
define('phone2', get_field('phone2', 4));
define('phone3', get_field('phone3', 4));

define('address1', get_field('address1', 10));
define('address2', get_field('address2', 10));
define('address3', get_field('address3', 10));

define('email1', get_field('email1', 11));
define('email2', get_field('email2', 11));
define('email3', get_field('email3', 11));

define('copyright', get_field('copyright', 14));

define('facebook', get_field('facebook', 12));
define('google_plus', get_field('google_plus', 12));
define('twitter', get_field('twitter', 12));
define('youtube', get_field('youtube', 12));

define('logo1', get_field('logo1', 13));
define('logo2', get_field('logo2', 13));

define('num_of_description', get_field('num_of_description', 40));

define('category_width_thumb', get_field('width', 47));
define('category_height_thumb', get_field('height', 47));

define('show_author', get_field('show_author', 52));
define('show_date', get_field('show_date', 52));

define('ads_header_image', get_field('ads_header', 160));
define('ads_header_url', get_field('ads_header_url', 160));

function get_excerpt($post_id, $limit = num_of_description){
	return limit_words(get_the_excerpt($post_id), $limit) . '...';
}

function limit_words($string, $word_limit) {
	$words = explode(' ', $string);
	return implode(' ', array_slice($words, 0, $word_limit));

}

