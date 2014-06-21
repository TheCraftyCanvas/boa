<?php

/**
 * Template Name: BOA Team Page
*/
/**
 * Description: BandOfArtists Team page
 * list the team member posts in ascending MENU ORDER, excerpt view

 * @since admired 1.0
 */

get_header(); ?>



		<div id="primary">

			<div id="content" role="main">

        <header class="page-header">
					<h1 class="page-title">
          <span><a href="/">Home</a> > <a href="/about-us">About Us</a> > <?php $postid = get_the_ID(); if($postid == '186') { echo 'Our Team & Performers'; } else { echo 'Past Team Members & Performers'; }?></span>
          </h1>
 				</header>


<?php
/*test if active team member page, categoryID = 117 */
if($postid == '186') {
	$args = array( 'post_type' => 'teammember', 'order_by' => 'menu_order', 'order' => 'ASC', 'posts_per_page' => '-1', 'cat' => '117');
}
/* must be inactive team member page, categoryID = 116 */
else {
	$args = array( 'post_type' => 'teammember', 'order_by' => 'menu_order', 'order' => 'ASC', 'posts_per_page' => '-1', 'cat' => '116');
}

$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

<?php
 $field_name = 'picture';
 $field = get_field($field_name);
 if($field) :
?>
<div class="resource-img">
<img src="<?php echo $field; ?>" alt="<?php the_title(); ?>"/>
</div>
<?php endif; ?>
<div class="resource-content">
	<header class="entry-header">

		<a href="<?php the_permalink();?>"><h1 class="entry-title"><?php the_title(); ?></h1></a>

	</header><!-- .entry-header -->

	<div class="entry-content" style="padding: 1.25em 0 0;">

    <?php the_excerpt(); ?>

		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'admired' ) . '</span>', 'after' => '</div>' ) ); ?>

	</div><!-- .entry-content -->



	<footer class="entry-meta" style="clear:both;">
	</footer><!-- .entry-meta -->
</div><!-- .resource-content-->
<div style="clear:both;"></div>
</article><!-- #post-<?php the_ID(); ?> -->
<?php
 endwhile;
?>

			</div><!-- #content -->

		</div><!-- #primary -->


<?php get_sidebar(); ?>

<?php get_footer(); ?>