<?php
/**
 * The Single Character Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dc
 */
 
 get_header();

 $featured_img_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
?>
    <?php get_template_part( 'template-parts/content-title' ); ?>

    <div class="single-character_container">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9 col-lg-push-3 col-md-8 col-md-push-4 text-page">
                    <div class="dc-character_gallery">
                        <figure>
                            <div class="woocommerce-product-gallery__wrapper">
                                <img src="<?php echo $featured_img_url[0]; ?>">
                            </div>
                        </figure>
                    </div>
                    <div class="dc-character_summary">
                        <h1 class="dc-character_title entry-title">
                            <?php echo get_the_title(); ?>
                        </h1>
                        <div class="dc-character_details">
                            <?php echo get_the_excerpt(); ?>
                        </div>
                        <div class="product_meta"> 
                            <span class="posted_in">
                                <?php 
                                    the_category();
                                ?>
                            </span> 
                            <span class="tagged_as">
                                <?php 
                                    the_tags();
                                ?>
                            </span>
                        </div>
                    </div>
                    <div class="dc-character_tabs">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                                    BIO
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                                    Profile
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                                    Contact
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <?php 
                                    while ( have_posts() ) :
                                        the_post();
                                        the_content();
                                    endwhile;
                                ?>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                ...
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                ...
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dc-character col-lg-3 col-md-4 col-lg-pull-9 col-md-pull-8">
                    <?php 
                        get_sidebar();
                    ?>
                </div>
            </div>
        </div>
    </div>

<?php 
    get_footer();
