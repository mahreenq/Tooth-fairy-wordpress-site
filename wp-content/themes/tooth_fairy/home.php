<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div>
			<?php while(have_posts()):the_post(); ?>
		    	<div>
		                <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
		            <div class="height-50 width-100 d-width-75 flex direction-column justify-between" style="background: url('<?php echo $backgroundImg[0]; ?>'); background-size:cover;">
		                <div class="med-blue-bkg flex justify-start white-font width-75 padding-med" >
		                    <h2 class="white-font"> <?php the_title() ?> </h2>
		                </div>
		                <div class="med-blue-bkg white-font flex justify-end align-self-end padding-med">
		                   <p> <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / BY <?php the_author(); ?> </p>
		                </div>
		            </div>
		            <div class="padding-lg">
		                <?php the_excerpt(); ?>
		            </div>
		            <div class="padding-lg">
		                <?php echo '<a href="' . get_permalink() . '"> '?>
		                <h6 class="padding-bottom-lg" >READ MORE -> </h6>
		                <?php echo '</a>'; ?>
		            </div>
		        </div>
		    <?php endwhile; ?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
