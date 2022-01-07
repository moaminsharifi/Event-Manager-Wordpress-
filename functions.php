<?php
/**
 * Event Manager functions and definitions
 *
 * @link https: //www.elancer-team.de/
 *
 * @package Event Manager
 * @subpackage Event_manager
 * @since Event Manager 0.1
 */

function event_manager_scripts(){
    wp_enqueue_style( 'eventmanager-style', get_theme_file_uri( '/assets/css/style.css' ), array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_script( 'jquery-scripts', get_theme_file_uri( '/assets/js/jquery.min.js' ), array(), "1.9.1", true );
	wp_enqueue_script( 'eventmanager-scripts', get_theme_file_uri( '/assets/js/scripts.js' ), array(), wp_get_theme()->get( 'Version' ), true );
	
	

}
add_action( 'wp_enqueue_scripts', 'event_manager_scripts' );
/*
 * Let WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded <title> tag in the document head, and expect WordPress to
 * provide it for us.
 */
add_theme_support( 'title-tag' );
// Custom Menu support
function custom_new_menu() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'custom_new_menu' );

function add_menu_link_class( $atts, $item, $args ) {
  if (property_exists($args, 'link_class')) {
    $atts['class'] = $args->link_class;
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );
// Register Custom Post Type
function custom_post_type_event() {
    $labels = array(
    'name' => _x( 'Events', 'Post Type General Name', 'event_text' ),
    'singular_name' => _x( 'Event', 'Post Type Singular Name', 'event_text' ),
    'menu_name' => __( 'Events', 'event_text' ),
    'name_admin_bar' => __( 'Event', 'event_text' ),
    'archives' => __( 'Event Archives', 'event_text' ),
    'attributes' => __( 'Event Attributes', 'event_text' ),
    'parent_item_colon' => __( 'Parent Event:', 'event_text' ),
    'all_items' => __( 'All Events', 'event_text' ),
    'add_new_item' => __( 'Add New Event', 'event_text' ),
    'add_new' => __( 'Add New', 'event_text' ),
    'new_item' => __( 'New Event', 'event_text' ),
    'edit_item' => __( 'Edit Event', 'event_text' ),
    'update_item' => __( 'Update Event', 'event_text' ),
    'view_item' => __( 'View Event', 'event_text' ),
    'view_items' => __( 'View Events', 'event_text' ),
    'search_items' => __( 'Search Event', 'event_text' ),
    'not_found' => __( 'Not found', 'event_text' ),
    'not_found_in_trash' => __( 'Not found in Trash', 'event_text' ),
    'featured_image' => __( 'Featured Image', 'event_text' ),
    'set_featured_image' => __( 'Set featured image', 'event_text' ),
    'remove_featured_image' => __( 'Remove featured image', 'event_text' ),
    'use_featured_image' => __( 'Use as featured image', 'event_text' ),
    'insert_into_item' => __( 'Insert into event', 'event_text' ),
    'uploaded_to_this_item' => __( 'Uploaded to this event', 'event_text' ),
    'items_list' => __( 'Items list', 'event_text' ),
    'items_list_navigation' => __( 'Events list navigation', 'event_text' ),
    'filter_items_list' => __( 'Filter events list', 'event_text' ),
    );
    $args = array(
    'label' => __( 'Event', 'event_text' ),
    'description' => __( 'Event Description', 'event_text' ),
    'labels' => $labels,
    'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes' ),
    'hierarchical' => true,
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-location-alt',
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'publicly_queryable' => true,
    'capability_type' => 'page',
    'show_in_rest' => true,
    'rest_base' => 'event',
    );
    register_post_type( 'event', $args );

}
add_action( 'init', 'custom_post_type_event', 0 );

// Register Custom Taxonomy
function custom_taxonomy_theme() {

	$labels = array(
		'name'                       => _x( 'Themes', 'Taxonomy General Name', 'theme_taxonomy' ),
		'singular_name'              => _x( 'theme', 'Taxonomy Singular Name', 'theme_taxonomy' ),
		'menu_name'                  => __( 'Event Themes', 'theme_taxonomy' ),
		'all_items'                  => __( 'All Themes', 'theme_taxonomy' ),
		'parent_item'                => __( 'Parent Theme', 'theme_taxonomy' ),
		'parent_item_colon'          => __( 'Parent Theme:', 'theme_taxonomy' ),
		'new_item_name'              => __( 'New Theme Name', 'theme_taxonomy' ),
		'add_new_item'               => __( 'Add New Theme', 'theme_taxonomy' ),
		'edit_item'                  => __( 'Edit Theme', 'theme_taxonomy' ),
		'update_item'                => __( 'Update Theme', 'theme_taxonomy' ),
		'view_item'                  => __( 'View Theme', 'theme_taxonomy' ),
		'separate_items_with_commas' => __( 'Separate themes with commas', 'theme_taxonomy' ),
		'add_or_remove_items'        => __( 'Add or remove themes', 'theme_taxonomy' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'theme_taxonomy' ),
		'popular_items'              => __( 'Popular themes', 'theme_taxonomy' ),
		'search_items'               => __( 'Search themes', 'theme_taxonomy' ),
		'not_found'                  => __( 'Not Found', 'theme_taxonomy' ),
		'no_terms'                   => __( 'No themes', 'theme_taxonomy' ),
		'items_list'                 => __( 'Theme list', 'theme_taxonomy' ),
		'items_list_navigation'      => __( 'Themes list navigation', 'theme_taxonomy' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'theme', array( 'event' ), $args );

}
add_action( 'init', 'custom_taxonomy_theme', 0 );
// Register Custom Taxonomy
function custom_taxonomy_target_group() {

	$labels = array(
		'name'                       => _x( 'Target Groups', 'Taxonomy General Name', 'target_group_taxonomy' ),
		'singular_name'              => _x( 'Target Group', 'Taxonomy Singular Name', 'target_group_taxonomy' ),
		'menu_name'                  => __( 'Event Target Group', 'target_group_taxonomy' ),
		'all_items'                  => __( 'All Target Groups', 'target_group_taxonomy' ),
		'parent_item'                => __( 'Parent Target Group', 'target_group_taxonomy' ),
		'parent_item_colon'          => __( 'Parent Target Group:', 'target_group_taxonomy' ),
		'new_item_name'              => __( 'New Target Group Name', 'target_group_taxonomy' ),
		'add_new_item'               => __( 'Add New Target Group', 'target_group_taxonomy' ),
		'edit_item'                  => __( 'Edit Target Group', 'target_group_taxonomy' ),
		'update_item'                => __( 'Update Target Group', 'target_group_taxonomy' ),
		'view_item'                  => __( 'View Target Group', 'target_group_taxonomy' ),
		'separate_items_with_commas' => __( 'Separate Target Groups with commas', 'target_group_taxonomy' ),
		'add_or_remove_items'        => __( 'Add or remove target group', 'target_group_taxonomy' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'target_group_taxonomy' ),
		'popular_items'              => __( 'Popular target group', 'target_group_taxonomy' ),
		'search_items'               => __( 'Search target group', 'target_group_taxonomy' ),
		'not_found'                  => __( 'Not Found', 'target_group_taxonomy' ),
		'no_terms'                   => __( 'No target group', 'target_group_taxonomy' ),
		'items_list'                 => __( 'Target Group list', 'target_group_taxonomy' ),
		'items_list_navigation'      => __( 'Target Groups list navigation', 'target_group_taxonomy' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'target_group', array( 'event' ), $args );

}
add_action( 'init', 'custom_taxonomy_target_group', 0 );

// Register Custom Taxonomy
function custom_taxonomy_execution() {

	$labels = array(
		'name'                       => _x( 'Executions', 'Taxonomy General Name', 'execution_taxonomy' ),
		'singular_name'              => _x( 'Execution', 'Taxonomy Singular Name', 'execution_taxonomy' ),
		'menu_name'                  => __( 'Event Executions', 'execution_taxonomy' ),
		'all_items'                  => __( 'All Executions', 'execution_taxonomy' ),
		'parent_item'                => __( 'Parent Execution', 'execution_taxonomy' ),
		'parent_item_colon'          => __( 'Parent Execution:', 'execution_taxonomy' ),
		'new_item_name'              => __( 'New Execution Name', 'execution_taxonomy' ),
		'add_new_item'               => __( 'Add New Execution', 'execution_taxonomy' ),
		'edit_item'                  => __( 'Edit Execution', 'execution_taxonomy' ),
		'update_item'                => __( 'Update Execution', 'execution_taxonomy' ),
		'view_item'                  => __( 'View Execution', 'execution_taxonomy' ),
		'separate_items_with_commas' => __( 'Separate Execution with commas', 'execution_taxonomy' ),
		'add_or_remove_items'        => __( 'Add or remove execution', 'execution_taxonomy' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'execution_taxonomy' ),
		'popular_items'              => __( 'Popular executions', 'execution_taxonomy' ),
		'search_items'               => __( 'Search execution', 'execution_taxonomy' ),
		'not_found'                  => __( 'Not Found', 'execution_taxonomy' ),
		'no_terms'                   => __( 'No execution', 'execution_taxonomy' ),
		'items_list'                 => __( 'Execution list', 'execution_taxonomy' ),
		'items_list_navigation'      => __( 'Execution list navigation', 'execution_taxonomy' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'execution', array( 'event' ), $args );

}
add_action( 'init', 'custom_taxonomy_execution', 0 );

// Filter events by query
function filter_events() {
	$theme = is_null($_POST['theme']) ? '' : $_POST['theme'];
	$targetGroup = is_null($_POST['targetGroup']) ? '' : $_POST['targetGroup'];
	$execution = is_null($_POST['execution']) ? '' : $_POST['execution'];
	$keyword = is_null($_POST['keyword']) ? '' : $_POST['keyword'];
	
	// theme'=>$theme,
    // 'target-group' => $targetGroup,
	// 'execution' => $execution,
	$args = [
		'post_type' => 'event',
		'posts_per_page' => 20,
		's' => $keyword,
		'orderby' => 'name', 
		'order' => 'desc',
		'post_status'=>'publish',
		'tax_query' => []
	];
	if($theme !== ''){
		$args['tax_query'][] = array(
				'taxonomy' => 'theme',
				'terms' => $theme,
				'field' => 'slug',
				'include_children' => true,
				'operator' => 'IN'
		);
	}
	if($targetGroup !== ''){
		$args['tax_query'][] = array(
				'taxonomy' => 'target_group',
				'terms' => $targetGroup,
				'field' => 'slug',
				'include_children' => true,
				'operator' => 'IN'
		);

	}
	if ($execution !== ''){
		$args['tax_query'][] = array(
				'taxonomy' => 'execution',
				'terms' => $execution,
				'field' => 'slug',
				'operator' => 'IN'
		);

	}
	
  $events = new WP_Query($args);
  $response = '';


  if($events->have_posts()) {

    while($events->have_posts()) : $events->the_post();

      $response .=  get_template_part( 'templates/content-event-summary', 'content-event-summary' );
    endwhile;
  } else {
    $response = get_template_part( 'templates/event-not-found', 'event-not-found' );
	
  }

  echo $response;
  exit;
}
add_action('wp_ajax_filter_events', 'filter_events');
add_action('wp_ajax_nopriv_filter_events', 'filter_events');
function the_breadcrumb()
{
    $showOnHome = 1; // 1 - show breadcrumbs on the homepage, 0 - don't show
    $delimiter = ' / '; // delimiter between crumbs
    $home = 'Home'; // text for the 'Home' link
    $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
    $before = '<span class="current">'; // tag before the current crumb
    $after = '</span>'; // tag after the current crumb

    global $post;
    $homeLink = get_bloginfo('url');
    if (is_home() || is_front_page()) {
        if ($showOnHome == 1) {
            echo '<nav class="felx text-md md:text-2xl lg:text-xl xl:text-base 2xl:text-xs items-left basis-8/12 mx-auto pt-3 pb-2 mb:pb-3 md:pt-4 lg:pt-3"><a class="text-elancer-blue-400" href="' . $homeLink . '">' . $home . '</a></nav>';
        }
    } else {
        echo '<nav class="felx text-md md:text-2xl lg:text-xl xl:text-base 2xl:text-xs items-left basis-8/12 mx-auto pt-3 pb-2 mb:pb-3 md:pt-4 lg:pt-3"><a  class="text-elancer-blue-400" href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
        if (is_category()) {
            $thisCat = get_category(get_query_var('cat'), false);
            if ($thisCat->parent != 0) {
                echo get_category_parents($thisCat->parent, true, ' ' . $delimiter . ' ');
            }
            echo $before . 'Archive by category "' . single_cat_title('', false) . '"' . $after;
        } elseif (is_search()) {
            echo $before . 'Search results for "' . get_search_query() . '"' . $after;
        } elseif (is_day()) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo '<a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
            echo $before . get_the_time('d') . $after;
        } elseif (is_month()) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo $before . get_the_time('F') . $after;
        } elseif (is_year()) {
            echo $before . get_the_time('Y') . $after;
        } elseif (is_single() && !is_attachment()) {
            if (get_post_type() != 'post') {
				// if find post type just ignore it
                // $post_type = get_post_type_object(get_post_type());
                // $slug = $post_type->rewrite;
                // echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
                if ($showCurrent == 1) {
                    echo ' ' . $before . get_the_title() . $after;
                }
            } else {
                $cat = get_the_category();
                $cat = $cat[0];
                $cats = get_category_parents($cat, true, ' ' . $delimiter . ' ');
                if ($showCurrent == 0) {
                    $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
                }
                echo $cats;
                if ($showCurrent == 1) {
                    echo $before . get_the_title() . $after;
                }
            }
        } elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
            $post_type = get_post_type_object(get_post_type());
            echo $before . $post_type->labels->singular_name . $after;
        } elseif (is_attachment()) {
            $parent = get_post($post->post_parent);
            $cat = get_the_category($parent->ID);
            $cat = $cat[0];
            echo get_category_parents($cat, true, ' ' . $delimiter . ' ');
            echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';
            if ($showCurrent == 1) {
                echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
            }
        } elseif (is_page() && !$post->post_parent) {
            if ($showCurrent == 1) {
                echo $before . get_the_title() . $after;
            }
        } elseif (is_page() && $post->post_parent) {
            $parent_id  = $post->post_parent;
            $breadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
                $parent_id  = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            for ($i = 0; $i < count($breadcrumbs); $i++) {
                echo $breadcrumbs[$i];
                if ($i != count($breadcrumbs)-1) {
                    echo ' ' . $delimiter . ' ';
                }
            }
            if ($showCurrent == 1) {
                echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
            }
        } elseif (is_tag()) {
            echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;
        } elseif (is_author()) {
            global $author;
            $userdata = get_userdata($author);
            echo $before . 'Articles posted by ' . $userdata->display_name . $after;
        } elseif (is_404()) {
            echo $before . 'Error 404' . $after;
        }
        if (get_query_var('paged')) {
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) {
                echo ' (';
            }
            echo __('Page') . ' ' . get_query_var('paged');
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) {
                echo ')';
            }
        }
        echo '</nav>';
    }
}