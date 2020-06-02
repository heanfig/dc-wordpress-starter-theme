<?php 
/**
 * The Single Character Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dc
 */
 
get_header();

$taxonomy_term = get_query_var('term');

?>
    <?php 
        echo do_shortcode("[dc_character_filter character_title='Characters' character_subtitle='$taxonomy_term' character_count='10' character_type='$taxonomy_term' ]");
    ?>
<?php 
    get_footer();

