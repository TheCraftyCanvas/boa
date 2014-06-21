<?php
/** * Template Name: BOA In the Headlines Page*//** * The template for displaying Press-Release posts. * * @since admired 1.0
 */

get_header(); ?>

		<section id="primary">
			<div id="content" role="main">

			<?php if ( have_posts() ) : ?>

 				<header class="page-header">					<h1 class="page-title">          <span><a href="/">Home</a> > <a href="/news">News</a> > In the Headlines</span>          </h1> 				</header>

				<?php admired_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
        <?php        $post_limit = 5;        $args = array( 'cat' => '62', 'posts_per_page' => $post_limit, 'order' => 'desc' );        $loop = new WP_Query( $args );        $i = 0;        while ( $loop->have_posts() ) : $loop->the_post();         ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 -----------------------------------------------------------*/
						get_template_part( 'loop', get_post_format() );
					?>

				<?php endwhile; ?>

				<?php admired_pagination(); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'admired' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'admired' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

			</div><!-- #content -->
		</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
