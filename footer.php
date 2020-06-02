<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dc
 */

?>
		</div><!-- #page -->
	</div><!-- .container -->

	<footer id="colophon" class="text-muted site-footer dc-footer">
		<div class="container">
			<div class="dc-footer_boxes">
				<div class="dc-footer_box">
					<h5> <?php echo __( 'Last Characters', 'dc'); ?> </h5>
					<?php 
						$args = array(
							'post_type' => 'character',
							'post_status' => 'publish',
							'posts_per_page' => 5
						);
						$query = new WP_Query( $args );
					?>
					<?php if ( $query->have_posts() ) { ?>
						<?php while ( $query->have_posts() ) { ?>
							<?php $query->the_post(); ?>
							<ul>
								<li>
									<a href="<?php echo get_the_permalink(); ?>">
										<?php echo get_the_title(); ?>
									</a>
								</li>
							</ul>
						<?php } ?>
					<?php } ?>
				</div>
				<div class="dc-footer_box">
					<h5> <?php echo __( 'About the Autor', 'dc'); ?> </h5>
					<ul>
						<li>
							<i class="fab fa-github"></i>
							<a target="__blank" href="https://github.com/heanfig">@heanfig</a>
						</li>
						<li>
							<i class="fab fa-facebook"></i>
							<a target="__blank" href="https://www.facebook.com/uyguhbgyi8">@uyguhbgyi8</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="dc-footer_copy">
				<p>
					<?php echo __('All Site Content and © 2020 DC Entertainment', 'dc'); ?> 
				</p>
			</div>
		</div>
	</footer><!-- #colophon -->
		
<?php wp_footer(); ?>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
