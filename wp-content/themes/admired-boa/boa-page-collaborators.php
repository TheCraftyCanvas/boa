<?php

/**
 * Template Name: BOA Collaborators Page
*/
/**
 * Description: BandOfArtists Team page
 * list the collaborator posts in ascending MENU ORDER, excerpt view

 * @since admired 1.0
 */

get_header(); ?>



		<div id="primary">

			<div id="content" role="main">

        <header class="page-header">
					<h1 class="page-title">
          <span><a href="/">Home</a> > <a href="/about-us">About Us</a> > Collaborators</span>
          </h1>
 				</header>


<div class="intro-text">
<h1 class="entry-title"><?php the_title(); ?></h1>
<div class="entry-content">
<p>When it comes to producing any of our projects, the efforts and collaboration of other professionals and organizations are key to attaining our mission of spreading awareness about neurological disorders such as Tourette Syndrome and helping those with TS embrace their strengths and turn their challenges into advantages. Below are just some of the many people and institutions Band of Artists has been fortunate to collaborate with.</p>
</div> 
</div><!--/.intro-text-->
      
<?php
/*show active collaborators, categoryID = 117 */
$args = array( 'post_type' => 'collaborators', 'order' => 'ASC', 'cat' => '117');
$loop = new WP_Query( $args );
if( $loop->have_posts() ) : 
?>
<h1 class="entry-title" style="margin-left:5px;padding-bottom:10px;margin-bottom:10px;border-bottom:3px solid #000;">Current Collaborators</h1>
<?php
endif;
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
	<footer class="entry-meta" style="clear:both;"></footer><!-- .entry-meta -->
</div><!-- .resource-content-->
<div style="clear:both;"></div>
</article><!-- #post-<?php the_ID(); ?> -->  
<?php
endwhile;

/* inactive/past collaborators, categoryID = 116 */
$args = array( 'post_type' => 'collaborators', 'order' => 'ASC', 'cat' => '116');
$loop = new WP_Query( $args );
if( $loop->have_posts() ) : 
?>
<h1 class="entry-title" style="margin-left:5px;padding-bottom:10px;margin-bottom:10px;border-bottom:3px solid #000;"">Past Collaborators</h1>
<?php
endif;
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
	<footer class="entry-meta" style="clear:both;"></footer><!-- .entry-meta -->
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