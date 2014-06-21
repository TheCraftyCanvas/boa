<?php


/* Admired child theme starter


 *


 * When using a child theme (see http://codex.wordpress.org/Theme_Development and


 * http://codex.wordpress.org/Child_Themes), you can override certain functions


 * (those wrapped in a function_exists() call) by defining them first in your child theme's


 * functions.php file. The child theme's functions.php file is included before the parent


 * theme's file, so the child theme functions would be used.


 *


 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached


 * to a filter or action hook. The hook can be removed by using remove_action() or


 * remove_filter() and you can attach your own function to the hook.


 *


 * We can remove the parent theme's hook only after it is attached, which means we need to


 * wait until setting up the child theme:


 *


 * <code>


 * add_action( 'after_setup_theme', 'my_child_theme_setup' );


 * function my_child_theme_setup() {


 *     // We are providing our own filter for excerpt_length (or using the unfiltered value)


 *     remove_filter( 'excerpt_length', 'sonar_excerpt_length' );


 *     ...


 * }


 * </code>


 *


 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.


 *


 *  ###########################-- Start editing Below --###############################


 */




/* Example below, you can deleate it. lets make the pagination show 5 pages instead of 4.


 * The child themes function.php is loaded first and sence the admired theme uses if(!function_exists(admired_pagination)):


 * Calling the function here will over ride Admired function.


 */


function admired_pagination($pages = '', $range = 4) {   /* handle pagination for post pages*/


	$showitems = ($range * 2)+1;




	global $paged;


	if(empty($paged)) $paged = 1;




		if($pages == '')


		{


			global $wp_query;


			$pages = $wp_query->max_num_pages;


			if(!$pages)


			{


			$pages = 1;


			}


		}




		if(1 != $pages)


		{


			echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";


			if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";


			if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";




			for ($i=1; $i <= $pages; $i++)


			{


				if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))


				{


					 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";


				}


			}




			if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";


			if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";


			echo "</div>\n";


		}


} //  admired_pagination


add_action( 'init', 'create_my_post_types' );

// register custom post types
function create_my_post_types() {
  register_post_type('Notable People with TS', array(	'label' => 'Famous Person','description' => '','public' => true,'show_ui' => true,'show_in_menu' => true,'capability_type' => 'post','hierarchical' => false,'rewrite' => array('slug' => 'famous-people-with-neurological-disorders'),'query_var' => true,'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes',),'taxonomies' => array('post_tag',),'labels' => array (
    'name' => 'Famous Person',
    'singular_name' => 'notablepeoplewithts',
    'menu_name' => 'Famous Person',
    'add_new' => 'Add notablepeoplewithts',
    'add_new_item' => 'Add New notablepeoplewithts',
    'edit' => 'Edit',
    'edit_item' => 'Edit notablepeoplewithts',
    'new_item' => 'New notablepeoplewithts',
    'view' => 'View notablepeoplewithts',
    'view_item' => 'View notablepeoplewithts',
    'search_items' => 'Search Famous Person',
    'not_found' => 'No Famous Person Found',
    'not_found_in_trash' => 'No Famous Person Found in Trash',
    'parent' => 'Parent notablepeoplewithts',
  ),) );


  register_post_type('Projects', array(	'label' => 'Projects','description' => '','public' => true,'show_ui' => true,'show_in_menu' => true,'capability_type' => 'post','hierarchical' => false,'rewrite' => array('slug' => 'projects'),'query_var' => true,'supports' => array('title','editor','excerpt','trackbacks','comments','revisions',),'taxonomies' => array('category','post_tag',),'labels' => array (
    'name' => 'Projects',
    'singular_name' => 'projects',
    'menu_name' => 'Projects',
    'add_new' => 'Add projects',
    'add_new_item' => 'Add New projects',
    'edit' => 'Edit',
    'edit_item' => 'Edit projects',
    'new_item' => 'New projects',
    'view' => 'View projects',
    'view_item' => 'View projects',
    'search_items' => 'Search Projects',
    'not_found' => 'No Projects Found',
    'not_found_in_trash' => 'No Projects Found in Trash',
    'parent' => 'Parent projects',
  ),) );


  register_post_type('Team Member', array(	'label' => 'Team Member','description' => '','public' => true,'show_ui' => true,'show_in_menu' => true,'capability_type' => 'post','hierarchical' => false,'rewrite' => array('slug' => 'about-us/our-team'),'query_var' => true,'supports' => array('title','editor','excerpt','trackbacks','revisions','page-attributes',),'labels' => array (
    'name' => 'Team Member',
    'singular_name' => 'Team Member',
    'menu_name' => 'Team Member',
    'add_new' => 'Add Team Member',
    'add_new_item' => 'Add New Team Member',
    'edit' => 'Edit',
    'edit_item' => 'Edit Team Member',
    'new_item' => 'New Team Member',
    'view' => 'View Team Member',
    'view_item' => 'View Team Member',
    'search_items' => 'Search Team Member',
    'not_found' => 'No Team Member Found',
    'not_found_in_trash' => 'No Team Member Found in Trash',
    'parent' => 'Parent Team Member',
  ),) );


  register_post_type('TS Resource', array(	'label' => 'TS Resource','description' => '','public' => true,'show_ui' => true,'show_in_menu' => true,'capability_type' => 'post','hierarchical' => false,'rewrite' => array('slug' => 'about-tourette-syndrome/resources-for-ts'),'query_var' => true,'supports' => array('title','editor','excerpt','comments','revisions','thumbnail',),'labels' => array (
    'name' => 'TS Resource',
    'singular_name' => 'tsresource',
    'menu_name' => 'TS Resource',
    'add_new' => 'Add tsresource',
    'add_new_item' => 'Add New tsresource',
    'edit' => 'Edit',
    'edit_item' => 'Edit tsresource',
    'new_item' => 'New tsresource',
    'view' => 'View tsresource',
    'view_item' => 'View tsresource',
    'search_items' => 'Search TS Resource',
    'not_found' => 'No TS Resource Found',
    'not_found_in_trash' => 'No TS Resource Found in Trash',
    'parent' => 'Parent tsresource',
  ),) );
  //end project post type
}


?>