<?php /* Template Name: Page Default #2 */ ?>

<?php get_header(); ?>

<div id="page-2" class="container">	

	<section>

		<div class="row">

			<div class="col-md-12 col-xs-12">

				<h2>Wordpress Example</h2>

			</div>

		</div>

	</section>

	<section>

		<div class="row">

			<div class="col-md-12 col-xs-12">

				<div class="isotope-grid">

					<div class="grid">

						<!-- Category Filter - set to show posts from categoty-default-1, 10 posts per page and desc order -->
						<?php query_posts( 'category_name=category-default-1
											&posts_per_page=10
											&order=DESC'						); ?>

						 <!-- Start the Loop. -->
						 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

							<!-- Display the Title as a link to the Post's permalink. -->
							<!-- post_class( 'class-name' ) ~ Use to get category as class -->
							<div class="post" <?php post_class( 'class-name' ); ?>>

								<h2>
									<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
										<?php the_title();?>
									</a>
								</h2>

								<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
								<small>
									<?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?>
								</small>

								<!-- Display the Post's content in a div box. -->
								<div class="entry">
									<?php the_content(); ?>
								</div>

								<!-- Display a comma separated list of the Post's Categories. -->
								<p class="postmetadata">
									<?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?>
								</p>

								<!-- Display comments -->
								<div class="post-comments">
									<?php comments_popup_link( 'No Comments »', '1 Comment »', '% Comments »' ); ?>
								</div>

							</div> <!-- closes the first div box -->

							<!-- Stop The Loop (but note the "else:" - see next line). -->

						<?php endwhile; else : ?>

							<!-- The very first "if" tested to see if there were any Posts to -->
							<!-- display.  This "else" part tells what do if there weren't any. -->
							<p><?php _e( 'Sorry, strange things happen.' ); ?></p>

							<!-- REALLY stop The Loop. -->
						<?php endif; ?>

						<!-- <div class="col-md-3 col-xs-12 isotope-grid-item"></div> -->

					</div>

				</div>

			</div>

		</div>

	</section>

</div>

<?php get_footer(); ?>