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

 $last_action = get_post_meta(get_the_ID(), 'last_action' , true ); 
 $source_powers = get_post_meta( get_the_ID(), 'source_powers', true ); 
 $weakness = get_post_meta( get_the_ID(), 'weakness', true ); 

 $taxonomies = get_the_terms( get_the_ID(), 'character_type' );
 $taxonomy_icon = resolve_character_icon($taxonomies);

?>
    <?php get_template_part( 'template-parts/content-title' ); ?>

    <div class="single-character_container">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9 col-lg-push-3 col-md-8 col-md-push-4 text-page">
                    <div class="dc-character_gallery">
                        <figure>
                            <div class="dc-character-gallery__wrapper">
                                <img src="<?php echo $featured_img_url[0]; ?>">
                            </div>
                        </figure>
                    </div>
                    <div class="dc-character_summary">
                        <h1 class="dc-character_title entry-title">
                            <i class="fas <?php echo $taxonomy_icon; ?>"></i>
                            <?php echo get_the_title(); ?>
                        </h1>
                        <div class="dc-character_details">
                            <?php echo get_the_excerpt(); ?>
                        </div>
                        <div class="dc-character_meta"> 
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
                                <a class="nav-link active" id="dc-bio-tab-link" data-toggle="tab" href="#dc-bio-tab" role="tab" aria-controls="bio" aria-selected="true">
                                    <i class="fas fa-file-alt"></i>
                                    <?php echo __( 'BIO','dc'); ?>
                                </a>
                            </li>

                            <?php if($last_action){ ?>
                                <li class="nav-item">
                                    <a class="nav-link" id="dc-last-action-tab-link" data-toggle="tab" href="#dc-last-action-tab" role="tab" aria-controls="last-action" aria-selected="false">
                                        <?php echo __( 'Last Action','dc'); ?>
                                    </a>
                                </li>
                            <?php }?>

                            <?php if($source_powers){ ?>
                                <li class="nav-item">
                                    <a class="nav-link" id="dc-source-tab-link" data-toggle="tab" href="#dc-source-tab" role="tab" aria-controls="source" aria-selected="false">
                                        <?php echo __( 'Source of Powers','dc'); ?>
                                    </a>
                                </li>
                            <?php }?>

                            <?php if($weakness){ ?>
                                <li class="nav-item">
                                    <a class="nav-link" id="dc-weakness-tab-link" data-toggle="tab" href="#dc-weakness-tab" role="tab" aria-controls="weakness" aria-selected="false">
                                        <?php echo __( 'Weakness','dc'); ?>
                                    </a>
                                </li>
                            <?php }?>

                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="dc-tab-pane tab-pane fade show active" id="dc-bio-tab" role="tabpanel" aria-labelledby="dc-bio-tab">
                                <?php 
                                    while ( have_posts() ) :
                                        the_post();
                                        the_content();
                                    endwhile;
                                ?>
                            </div>

                            <?php if($last_action){ ?>
                                <div class="dc-tab-pane tab-pane fade" id="dc-last-action-tab" role="tabpanel" aria-labelledby="dc-last-action-tab">
                                    <?php echo $last_action; ?>
                                </div>
                            <?php }?>

                            <?php if($source_powers){ ?>
                                <div class="dc-tab-pane tab-pane fade" id="dc-source-tab" role="tabpanel" aria-labelledby="dc-source-tab">
                                    <?php echo $source_powers; ?>
                                </div>
                            <?php }?>

                            <?php if($weakness){ ?>
                                <div class="dc-tab-pane tab-pane fade" id="dc-weakness-tab" role="tabpanel" aria-labelledby="dc-weakness-tab">
                                    <?php echo $weakness; ?>
                                </div>
                            <?php }?>

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
