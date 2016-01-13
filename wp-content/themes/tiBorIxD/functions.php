<?php
add_action( 'after_setup_theme', 'tiBorIxD_setup' );
function tiBorIxD_setup()
{
load_theme_textdomain( 'tiBorIxD', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'tiBorIxD' ) )
);
}

add_action( 'init', 'create_post_type' );
// Register Custom Post Type
function custom_post_type() {
 
    $labels = array(
        'name'                => _x( 'portfolio', 'Post Type General Name', 'text_domain' ),
        'singular_name'       => _x( 'Portfolio', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'           => __( 'Portfolio', 'text_domain' ),
        'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
        'all_items'           => __( 'All Items', 'text_domain' ),
        'view_item'           => __( 'View Item', 'text_domain' ),
        'add_new_item'        => __( 'Add New Item', 'text_domain' ),
        'add_new'             => __( 'Add New', 'text_domain' ),
        'edit_item'           => __( 'Edit Item', 'text_domain' ),
        'update_item'         => __( 'Update Item', 'text_domain' ),
        'search_items'        => __( 'Search Item', 'text_domain' ),
        'not_found'           => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
    );
    $args = array(
        'label'               => __( 'Portfolio', 'text_domain' ),
        'description'         => __( 'Post Type Description', 'text_domain' ),
        'labels'              => $labels,
        'supports'            => array(
                                'title',
                                'editor',
                                'excerpt',
                                'trackbacks',
                                'custom-fields',
                                'revisions',
                                'thumbnail',
                                'author',
                                'page-attributes', 
                              ),
        'taxonomies'          => array( 'category', 'post_tag' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-format-gallery',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'Portfolio', $args );
}

// Truncate Post Content
function truncate_post($limit, $html, $break=".", $pad="...") {

	$string = get_the_content();
	$string = apply_filters('the_content', $string);

if($html == 0) {	
	$string = preg_replace('@<script[^>]*?>.*?</script>@si', '', $string);
	$string = preg_replace('@<style[^>]*?>.*?</style>@si', '', $string);
	$tags = "<p>,<ol>,<ul>,<li>,<h1>,<h2>,<h3>,<h3>,<a>,<href>,<span>";
	$string = strip_tags($string); } 
		else 
	{	
		$string = preg_replace('@<script[^>]*?>.*?</script>@si', '', $string);
		$string = preg_replace('@<style[^>]*?>.*?</style>@si', '', $string);
		$tags = "";
		$string = strip_tags($string, $tags); }
	if(strlen($string) <= $limit) { echo $string;  }
	if(strlen($string) >= $limit) {  
		$string = substr($string, 0, $limit);
	   	   echo $string . $pad; 
	}
}


// Hook into the 'init' action
add_action( 'init', 'custom_post_type', 0 );

//Page Slug Body Class
function add_slug_body_class( $classes ) {
    global $post;
        if ( isset( $post ) ) {
            $classes[] = $post->post_type . '-' . $post->post_name;
        }
    return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );


add_action( 'wp_enqueue_scripts', 'tiBorIxD_load_scripts' );
function tiBorIxD_load_scripts()
{
wp_enqueue_script( 'jquery' );
}

add_action( 'comment_form_before', 'tiBorIxD_enqueue_comment_reply_script' );
function tiBorIxD_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}

add_filter( 'the_title', 'tiBorIxD_title' );
function tiBorIxD_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}

add_filter( 'wp_title', 'tiBorIxD_filter_wp_title' );
function tiBorIxD_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}

add_action( 'widgets_init', 'tiBorIxD_widgets_init' );
function tiBorIxD_widgets_init()
{
register_sidebar( array (
'name' => __( 'Sidebar Widget Area', 'tiBorIxD' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
function tiBorIxD_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}

add_filter( 'get_comments_number', 'tiBorIxD_comments_number' );
function tiBorIxD_comments_number( $count )
{
if ( !is_admin() ) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}