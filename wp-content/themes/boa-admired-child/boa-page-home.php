<?php


/**
 * Template Name: BOA Homepage
*/

/**
 * Description: BandOfArtists custom homepage
 * @since admired 1.0
 */




get_header(); ?>




		<div id="primary">


			<div id="content" role="main">


       <div id="ts_wrapper" style="width:100%;max-height:464px;">
        <div id="tourette_syndrome_widget" class="tic-on"><img src="/wp-content/uploads/featured-image.jpg" style="width:100%;" alt="Band of Artists"/></div>
        <div id="tourette_syndrome_widget" class="tic-off" style="display:none;"><img src="/wp-content/uploads/featured-image.jpg" style="width:100%;" alt="Band of Artists"/></div>
        <div id="tourette_syndrome_stop_button">Moving photo driving you nuts?<br/><a id="stop" href="#stop-the-tics" rel="prettyPhoto" >CLICK TO STOP THE TIC!</a></div>

        <div id="stop-the-tics" style="visibility:hidden;display:none;">
        <?php include('wp-content/themes/admired-child/boa-overlay-content.php'); ?>
        </div>
        </div>
        <div style="clear:both;"></div>
        <div id="sub-content">

        <div id="featured-post">
          <?php
          $post_limit = 1;
          $args = array( 'post_type' => 'projects', 'posts_per_page' => $post_limit );
          $loop = new WP_Query( $args );
          if( $loop->have_posts() ) : $loop->the_post();
          ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="border-top:1px solid #999999;">
              <header class="entry-header">
                <h3 class="entry-title">Band of Artists Presents:</h3>
                <a href="<?php the_permalink();?>"><h2 class="entry-title"><?php the_title(); ?></h2></a>
              </header><!-- .entry-header -->

              <div class="entry-content">
                <?php the_content() ?>

                <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'admired' ) . '</span>', 'after' => '</div>' ) ); ?>
              </div><!-- .entry-content -->
            </article><!-- #post-<?php the_ID(); ?> -->
          <?php endif; // end of the loop. ?>
        </div><!-- /#featured-post-->

        </div><!-- /#sub-content-->


			</div><!-- #content -->


		</div><!-- #primary -->



<div id="secondary" class="widget-area" role="complementary">
<?php
$loop = new WP_Query( 'page_id=2' );
if ( $loop->have_posts() ) : $loop->the_post();
?>

<?php get_template_part( 'loop', 'page' ); ?>

<?php endif; // end of the loop. ?>
<?php include('boa-sidebar-widget-rssnews-scroller.php'); ?>
<?php include('boa-sidebar-widget-tourettes-eduspeak.php'); ?>
</div>




<?php get_footer(); ?>