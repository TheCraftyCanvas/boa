<?php/** * Template Name: Single Project Post Page*//** * Description: BandOfArtists Individual Featured Project page * list one project's content. * @since admired 1.0 */get_header(); ?>		<div id="primary">			<div id="content" role="main"> 				<header class="page-header">					<h1 class="page-title">          <span><a href="/">Home</a> > <a href="/projects/">Projects</a> > <?php the_title(); ?></span>          </h1> 				</header><?php while ( have_posts() ) : the_post(); ?><article id="post-<?php the_ID(); ?>" <?php post_class(); ?> <?php if($i>0): echo 'style="border-top:3px solid #999;margin-top:20px; padding-top:20px;"'; endif; ?>>	<header class="entry-header">		<a href="<?php the_permalink();?>"><h1 class="entry-title"><?php the_title(); ?></h1></a>	</header><!-- .entry-header -->	<div class="entry-content"><?php the_content() ?>		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'admired' ) . '</span>', 'after' => '</div>' ) ); ?>	</div><!-- .entry-content -->	<footer class="entry-meta" style="clear:both;"><?php  /* translators: used between list items, there is a space after the comma */  $categories_list = get_the_category_list( __( ', ', 'admired' ) );  /* translators: used between list items, there is a space after the comma */  $tag_list = get_the_tag_list( '', __( ', ', 'admired' ) );  if ( '' != $tag_list ) {    $utility_text = __( 'This entry was posted in %1$s and tagged %2$s by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'admired' );  } elseif ( '' != $categories_list ) {    $utility_text = __( 'This entry was posted in %1$s by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'admired' );  } else {    $utility_text = __( 'This entry was posted by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'admired' );  }  printf(    $utility_text,    $categories_list,    $tag_list,    esc_url( get_permalink() ),    the_title_attribute( 'echo=0' ),    get_the_author(),    esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) )  );?>		<?php edit_post_link( __( 'Edit', 'admired' ), '<span class="edit-link">', '</span>' ); ?>		<?php if ( get_the_author_meta( 'description' ) && is_multi_author() ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries ?>		<div id="author-info">			<div id="author-avatar">				<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'admired_author_bio_avatar_size', 68 ) ); ?>			</div><!-- #author-avatar -->			<div id="author-description">				<h2><?php printf( esc_attr__( 'About %s', 'admired' ), get_the_author() ); ?></h2>				<?php the_author_meta( 'description' ); ?>				<div id="author-link">					<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">						<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'admired' ), get_the_author() ); ?>					</a>				</div><!-- #author-link	-->			</div><!-- #author-description -->		</div><!-- #entry-author-info -->		<?php endif; ?>	</footer><!-- .entry-meta --></article><!-- #post-<?php the_ID(); ?> -->  <?  if ( comments_open()):		comments_template( '', true ); 	endif; endwhile;?>				</div><!-- #content -->		</div><!-- #primary --><?php get_sidebar(); ?>		<?php get_footer(); ?>