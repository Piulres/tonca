<?php get_header(); ?>

<div id="page-2" class="container">

	<section>

		<div class="row">

			<div class="col-md-12 col-xs-12">

				<!-- Start the Loop. -->
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<!-- Display the Title as a link to the Post's permalink. -->
					<div class="content">

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

			</div>

		</div>

	</section>

</div>

<?php get_footer(); ?>