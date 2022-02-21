<?php
/**
 * zitalyfood functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package zitalyfood
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'zitalyfood_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function zitalyfood_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on zitalyfood, use a find and replace
		 * to change 'zitalyfood' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'zitalyfood' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
                add_theme_support( 'menus' );
                add_theme_support( 'widgets' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary_menu' => 'Primary Menu',
                                 
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'zitalyfood_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'zitalyfood_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function zitalyfood_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'zitalyfood_content_width', 640 );
}
add_action( 'after_setup_theme', 'zitalyfood_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
//function zitalyfood_widgets_init() {
//	register_sidebar(
//		array(
//			'name'          => esc_html__( 'Sidebar', 'zitalyfood' ),
//			'id'            => 'sidebar-1',
//			'description'   => esc_html__( 'Add widgets here.', 'zitalyfood' ),
//			'before_widget' => '<section id="%1$s" class="widget %2$s">',
//			'after_widget'  => '</section>',
//			'before_title'  => '<h2 class="widget-title">',
//			'after_title'   => '</h2>',
//		)
//	);
//}
//add_action( 'widgets_init', 'zitalyfood_widgets_init' );

function zfood_sidebar(){
    register_sidebar(            
       array(
        'id'            => 'rs1',
        'name'          => 'Right Sidebar One',
        'before_widget' => '<div class="widget wid-about">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="wid-header"><h5>',
        'after_title'   => '</h5></div>',
      ),  

    );
    register_sidebar(
      array(
        'id'            => 'rs2',
        'name'          => 'Right Sidebar Two',
        'before_widget' => '<div class="widget wid-post">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="wid-header"><h5>',
        'after_title'   => '</h5></div>',
      ),      
    );
    register_sidebar(
      array(
        'id'            => 'rs3',
        'name'          => 'Right Sidebar Three',
        'before_widget' => '<div class="widget wid-tag">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="wid-header"><h5>',
        'after_title'   => '</h5></div>',
      ),      
     );
    
    register_sidebar(
      array(
        'id'            => 'rs4',
        'name'          => 'Right Sidebar Four',
        'before_widget' => '<div class="widget wid-gallery">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="wid-header"><h5>',
        'after_title'   => '</h5></div>',
      ),      
     );
    
    register_widget( 'latest_food' );
    
}


      
      

add_action( 'widgets_init', 'zfood_sidebar');

class latest_food extends WP_Widget{
    public function __construct(){
    parent::__construct( 'latest_food', 'Latest Food',array(
        'description'  => 'This Is Zitaly Latest Food Widget',
       ));
    }
   public function widget($one,$two){
       
      ?>


     <div class="widget wid-post">
                    <div class="wid-header">
                            <h5>Latest Posts</h5>
                    </div>
                    <div class="wid-content">
                        <?php
                        $latest_food_query = new WP_Query(array(
                            'post_type'  => 'latest_food',
                        ));
                        
                         while ( $latest_food_query->have_posts() ) : $latest_food_query->the_post(); 
                        
                        ?>
                            <div class="post">
                                    <a href="#"><img src="<?php 
                                    
                                    $img_src = get_field('food_image');
                                    echo $img_src['url'];
                                    
                                    ?>"/></a>
                                    <div class="wrapper">
                                      <h5><a href="#"><?php the_title() ?></a></h5>
                                       <span><?php the_field('food_price') ?></span>
                                    </div>
                            </div>
                           
                           <?php endwhile; ?>
                    </div>
            </div>


     <?php
   }
   public function form($two){
       
   }
}



/**
 * Enqueue scripts and styles.
 */
function zitalyfood_scripts() {
wp_enqueue_style( 'zerogrid',  get_theme_file_uri().'/css/zerogrid.css', null, true,'all' );
wp_enqueue_style( 'style',  get_theme_file_uri().'/css/style.css', null, true,'all' );
wp_enqueue_style( 'slide',  get_theme_file_uri().'/css/slide.css', null, true,'all' );
wp_enqueue_style( 'menu',  get_theme_file_uri().'/css/menu.css', null, true,'all' );
wp_enqueue_style( 'font-awesome',  get_theme_file_uri().'/font-awesome/css/font-awesome.min.css', null, true,'all' );
wp_enqueue_style( 'main', get_stylesheet_uri()  );

wp_enqueue_script( 'classie', get_theme_file_uri().'/js/classie.js',null, true,  true );
wp_enqueue_script( 'demo', get_theme_file_uri().'/js/demo.js',null, true,  true );
wp_enqueue_script( 'theme-jquery', get_theme_file_uri().'/js/jquery-1.11.3.min.js',null, true,  true );
wp_enqueue_script( 'responsiveslides', get_theme_file_uri().'/js/responsiveslides.min.js',array('theme-jquery'), true,  true );
wp_enqueue_script( 'custom', get_theme_file_uri().'/js/custom.js',array('theme-jquery'), true,  true );

            
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'zitalyfood_scripts' );


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Shortcode Connection

include_once 'shortcode/stuff_shortcode.php';
include_once 'shortcode/contact_box_shortcode.php';
include_once 'shortcode/reservation_form_shortcode.php';
include_once 'shortcode/menu_shortcode.php';

//Reservation Form

if( isset( $_POST['submit'] ) ){
              $name     =     $_POST['name'];
              $email    =     $_POST['email'];
              $subject  =    $_POST['subject'];
              $date     =   $_POST['date'];
              $time     =   $_POST['time'];
              $message  =  $_POST['message'];   
              
              $full_massege = $name.'<br />'.$date.'<br />'.$time.'<br />'.$message;
              
                 $email = mail( 'alalhossain1000@gmail.com',$subject,$full_massege);
                 
                      
                              
                             
                            
    
}


