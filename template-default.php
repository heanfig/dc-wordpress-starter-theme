<?php
/**
* Template Name: DC Default Theme 
*
* @package WordPress
* @subpackage dc
* @since dc
*/

get_header();
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;
get_footer();