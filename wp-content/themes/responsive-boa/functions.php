<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Theme's Functions and Definitions
 *
 *
 * @file           functions.php
 * @package        Responsive, Responsive-boa
 * @author         Emil Uzelac, Anson Han
 * @copyright      2003 - 2013 ThemeID, 2013 The Crafty Canvas
 * @license        license.txt
 * @version        Release: 1.2.1
 * @filesource     wp-content/themes/responsive-library/includes/functions.php
 * @link           http://codex.wordpress.org/Theme_Development#Functions_File
 * @since          available since Release 1.0
 */

?>
<?php
/*
if ( ! function_exists( 'theme_special_nav' ) ) {
    function theme_special_nav() {
        //  Do something.
    }
}

*/


add_action('wp_enqueue_scripts', 'embed_library_theme_scripts');
if (!function_exists('embed_library_theme_scripts')) {
  function embed_library_theme_scripts() {
    // JS at the bottom for fast page loading.
    wp_enqueue_script('carouFredSel', get_stylesheet_directory_uri() . '/plugins/carouFredSel-6.2.0/jquery.carouFredSel-6.2.0-packed.js', array('jquery'), '6.2.0', false);
  }
}


// This theme uses wp_nav_menus() in two locations.
register_nav_menus(
  array(
	        'mobile-menu'      => __('Mobile Menu', 'responsive'),
  )
);


if (!function_exists('responsive_mobile_menu')) :

function responsive_mobile_menu($menu_name, $classString)
{
  if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

    $menu_items = wp_get_nav_menu_items($menu->term_id);

    $menu_list = '<select id="menu-' . $menu_name . '"';
    if($classString) {
      $menu_list .= ' class="' . $classString . '"';
    }
    $menu_list .= '>';
    $menu_list .= '<option value=""> - Menu - </option>';
    foreach ( (array) $menu_items as $key => $menu_item ) {
      $title = $menu_item->title;
      $url = $menu_item->url;
      $menu_list .= '<option value="' . $url . '">' . $title . '</option>';
    }
    $menu_list .= '</select>';
  }
  // $menu_list now ready to output
  echo $menu_list;
}
endif;







/**
 * Adds EducationalBlogNewsfeed widget.
 */

 class EducationalBlogNewsfeed extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
	 		'EducationalBlogNewsfeed', // Base ID
			'EducationalBlogNewsfeed Slideshow', // Name
			array( 'description' => __( 'Displays slideshow of recently posted news to site', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );

		echo $before_widget;
    if ( ! empty( $title ) ) { echo '<div class="widget-title">' . $title . '</div>'; }

    $slideshowContainerHTML = "";

    $post_limit = 10;
    $args = array( 'post_type' => 'post', 'posts_per_page' => $post_limit, 'orderby' => 'date', 'order' => 'desc', 'category_name' => 'education-news');
    $loop = new WP_Query( $args );

    if ( $loop->have_posts() ) :
    $slideshowContainerHTML = '<div class="news-slider tcclibrary-carouFredSel">';

      while ( $loop->have_posts() ) : $loop->the_post();
        $slideshowContainerHTML .= '<div class="news-post">';
        $slideshowContainerHTML .= '<a href="' . get_permalink() . '"  rel="bookmark">';
        $slideshowContainerHTML .= get_the_title();
        $slideshowContainerHTML .= '</a>';
        $slideshowContainerHTML .= '</div>';
      endwhile;

    $slideshowContainerHTML .= '</div>';
    $slideshowContainerHTML .= '<script src="' . get_stylesheet_directory_uri() . '/js/library-fredcarousel.js"></script>';
    endif;

		echo $slideshowContainerHTML;
		echo $after_widget;
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = strip_tags( $new_instance['title'] );

		return $instance;
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'Educational News', 'text_domain' );
		}
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'EducationalBlogNewsfeed Custom Title:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<?php
	}

} // class EducationalBlogNewsfeed

// register EducationalBlogNewsfeed widget
add_action( 'widgets_init', create_function( '', 'register_widget( "EducationalBlogNewsFeed" );' ) );




/**
 * Adds PersonalBlogRecentPosts widget.
 */

 class PersonalBlogRecentPosts extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
	 		'PersonalBlogRecentPosts', // Base ID
			'PersonalBlogRecentPosts Slideshow', // Name
			array( 'description' => __( 'Displays slideshow of recent posts within lessons learned and shared blog', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );

		echo $before_widget;
    if ( ! empty( $title ) ) { echo '<div class="widget-title">' . $title . '</div>'; }

    $slideshowContainerHTML = "";

    $post_limit = 10;
    $args = array( 'post_type' => 'post', 'posts_per_page' => $post_limit, 'orderby' => 'date', 'order' => 'desc', 'category_name' => 'lessons-learned-shared-blog');
    $loop = new WP_Query( $args );

    if ( $loop->have_posts() ) :
    $slideshowContainerHTML = '<ul class="lessons-learned-blog-recent-posts">';

      while ( $loop->have_posts() ) : $loop->the_post();
        $slideshowContainerHTML .= '<li><a href="' . get_permalink() . '"  rel="bookmark">';
        $slideshowContainerHTML .= get_the_title();
        $slideshowContainerHTML .= '</a></li>';
      endwhile;

    $slideshowContainerHTML .= '</ul>';
    endif;

		echo $slideshowContainerHTML;
		echo $after_widget;
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = strip_tags( $new_instance['title'] );

		return $instance;
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'Lessons Recently Learned and Shared', 'text_domain' );
		}
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'PersonalBlogRecentPosts Custom Title:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<?php
	}

} // class PersonalBlogRecentPosts

// register PersonalBlogRecentPosts widget
add_action( 'widgets_init', create_function( '', 'register_widget( "PersonalBlogRecentPosts" );' ) );

?>