<?php 
    ob_start();
?>
    [vc_row full_width="stretch_row_content"]   
        [vc_column]
            <div class="dc-page-header" data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid">
                <div class="container">
                    <h1><?php echo get_the_title(); ?></h1>
                </div>
            </div>
        [/vc_column]
    [/vc_row]
<?php 
    $content = ob_get_clean();
    echo do_shortcode( $content );
?>