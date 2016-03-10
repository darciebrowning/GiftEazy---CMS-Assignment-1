<?php
           
        /**
         * Set the content width based on the theme's design and stylesheet.
         */
        if ( ! isset( $content_width ) )
            $content_width = 700;
        
        add_action( 'after_setup_theme', 'sksdev_setup' );
        /**
         * All setup functionalities.
         *
         * @since 1.0
         */
        if( !function_exists( 'sksdev_setup' ) ) :
        
        function sksdev_setup() {
        
            $font_url = urlencode( '//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' );
            add_editor_style( $font_url );
            
            add_theme_support( 'title-tag' );
            // Add default posts and comments RSS feed links to head
            add_theme_support( 'automatic-feed-links' );
        
            // This theme uses Featured Images (also known as post thumbnails) for per-post/per-page.
            add_theme_support( 'post-thumbnails' );
         
            // Registering navigation menus.
            register_nav_menus( array(	
                'primary' 	=> 'Primary Menu',
                
            ) );
        
         
            add_theme_support( 'custom-header', apply_filters( 'sksdev_custom_header_args', array(
		'default-image'          => '',
		'width'                  => 200,
		'height'                 => 100,
		'flex-width'             => true,
		'flex-height'            => true
		
	) ) );
    
            // Setup the WordPress core custom background feature.
            add_theme_support( 'custom-background', apply_filters( 'sksdev_custom_background_args', array(
                'default-color' => 'ffffff'
            ) ) );
        
        
            // Adding excerpt option box for pages as well
            add_post_type_support( 'page', 'excerpt' );
        }
        endif;
        
        /**
         * Define Directory Location Constants 
         */
        define( 'SKSDEV_PARENT_DIR', get_template_directory() );
        define( 'SKSDEV_CHILD_DIR', get_stylesheet_directory() );
        
        define( 'SKSDEV_INCLUDES_DIR', SKSDEV_PARENT_DIR. '/inc' );	
        define( 'SKSDEV_CSS_DIR', SKSDEV_PARENT_DIR . '/css' );
        define( 'SKSDEV_JS_DIR', SKSDEV_PARENT_DIR . '/js' );
        define( 'SKSDEV_LANGUAGES_DIR', SKSDEV_PARENT_DIR . '/languages' );
        
        define( 'SKSDEV_ADMIN_DIR', SKSDEV_INCLUDES_DIR . '/admin' );
        
        define( 'SKSDEV_ADMIN_IMAGES_DIR', SKSDEV_ADMIN_DIR . '/images' );
        define( 'SKSDEV_ADMIN_CSS_DIR', SKSDEV_ADMIN_DIR . '/css' );
        
			/**
			 * Include the TGM_Plugin_Activation class.
			 */

             require_once('inc/plugins-included.php');

        /** 
         * Define URL Location Constants 
         */
        define( 'SKSDEV_PARENT_URL', get_template_directory_uri() );
        define( 'SKSDEV_CHILD_URL', get_stylesheet_directory_uri() );
        
        define( 'SKSDEV_INCLUDES_URL', SKSDEV_PARENT_URL. '/inc' );
        define( 'SKSDEV_CSS_URL', SKSDEV_PARENT_URL . '/css' );
        define( 'SKSDEV_JS_URL', SKSDEV_PARENT_URL . '/js' );
              
        define( 'SKSDEV_ADMIN_URL', SKSDEV_INCLUDES_URL . '/admin' );
        
        define( 'SKSDEV_ADMIN_IMAGES_URL', SKSDEV_ADMIN_URL . '/images' );
        define( 'SKSDEV_ADMIN_CSS_URL', SKSDEV_ADMIN_URL . '/css' );
        
        /** Load functions */
      
        /**
         * SKSDEV functions and definitions
         *
         * This file contains all the functions and it's defination that particularly can't be in other files.
         */
        
        /****************************************************************************************/
        
        add_action( 'wp_enqueue_scripts', 'sksdev_scripts_styles_method' );
        
        /**
         * Register jquery scripts
         */
        function sksdev_scripts_styles_method() {
           
            /**
             * Enqueue scripts and styles
             */
            wp_enqueue_style( 'sksdev_style', get_stylesheet_uri() );
            
            wp_enqueue_style( 'sksdev_bootmin', get_template_directory_uri().'/css/bootstrap.min.css' );
            wp_enqueue_style( 'sksdev_fontawesome', get_template_directory_uri().'/css/font-awesome.css' );
            wp_enqueue_style( 'sksdev_animate', get_template_directory_uri().'/css/animate.css' );
            wp_enqueue_style( 'sksdev_tempmisc', get_template_directory_uri().'/css/templatemo_misc.css' );
            wp_enqueue_style( 'sksdev_tempstyle', get_template_directory_uri().'/css/templatemo_style.css' );
            
            
            wp_enqueue_script( 'sksdev_bootstrap_js', get_template_directory_uri().'/js/bootstrap.js', array('jquery')); 
            wp_enqueue_script( 'sksdev_plugins_js', get_template_directory_uri().'/js/plugins.js', array('jquery')); 
            wp_enqueue_script( 'sksdev_main_js', get_template_directory_uri().'/js/main.js', array('jquery')); 
           
            wp_enqueue_script( 'sksdev_map_api', 'http://maps.google.com/maps/api/js?sensor=true', array('jquery')); 
            wp_enqueue_script( 'sksdev_gmpa3_js', get_template_directory_uri() . '/js/vendor/gmap3.js', array('jquery')); 
                
            /**
             * Adds JavaScript to pages with the comment form to support
             * sites with threaded comments (when in use).
             */
            if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
                wp_enqueue_script( 'comment-reply' );
        }
        
        add_action( 'admin_print_styles-appearance_page_options-framework', 'sksdev_admin_styles' );
        /**
         * Enqueuing some styles.
         *
         * @uses wp_enqueue_style to register stylesheets.
         * @uses wp_enqueue_style to add styles.
         */
        function sksdev_admin_styles() {
            wp_enqueue_style( 'sksdev_admin_style', SKSDEV_ADMIN_CSS_URL. '/admin.css' );
        }
        
        add_action( 'admin_head', 'sksdev_favicon' );
        add_action( 'wp_head', 'sksdev_favicon' );
        /**
         * Fav icon for the site
         */
        function sksdev_favicon() {
            if ( of_get_option( 'sksdev_activate_favicon', '0' ) == '1' ) {
                $sksdev_favicon = of_get_option( 'sksdev_favicon', '' );
                $sksdev_favicon_output = '';
                if ( !empty( $sksdev_favicon ) ) {
                    $sksdev_favicon_output .= '<link rel="shortcut icon" href="'.esc_url( $sksdev_favicon ).'" type="image/x-icon" />';
                }
                echo $sksdev_favicon_output;
            }
        }

        /************** End Functions****************************/    
        
        require_once( SKSDEV_ADMIN_DIR . '/meta-boxes.php' );		
                
        /**
         * Adds support for a theme option.
         */
        if ( !function_exists( 'optionsframework_init' ) ) {
            define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/admin/options/' );
            require_once( SKSDEV_ADMIN_DIR . '/options/options-framework.php' );
        }
        
        function sksdev_widgets_init() {
            register_sidebar( array(
                'name' => __( 'Main Sidebar', 'sksdev' ),
                'id' => 'sidebar-1',
                'description' => __( 'Appears on posts and pages except the optional Front/Home Page template', 'sksdev' ),
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget' => '</aside>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
            ) );
        
        }
        add_action( 'widgets_init', 'sksdev_widgets_init' );
        
        
        if(!function_exists('sksdev_customstyle'))
                {
                   function sksdev_customstyle() 
                   { 
                        $style_= '';
                     $sksdev_primary_color = of_get_option( 'sksdev_primary_color', '' );
                     if($sksdev_primary_color)
                        {
        $style_ = '<style> a{ color:'.$sksdev_primary_color.' !important; } .progress-bar, .contact-form .mainBtn, .portfolio-item .portfolio-thumb .portfolio-overlay, .team-member .member-thumb .team-overlay, #go-top , { background-color:'.$sksdev_primary_color.' !important;} #go-top{ color:#ffffff !important;}</style>';
                  echo  $style_;
                        }
                   }
                   
                   add_action( 'wp_head', 'sksdev_customstyle' );
             }
             
                  
                  
                         
              function sksdev_script() {
                  
                   if( wp_script_is( 'jquery', 'done' ) ) {   ?>
                                 <!-- Google Map --> <!-- Google Map Init-->
                                <script type="text/javascript">
                                var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
                                       
                                  // script dependent on jQuery
                                  
                                      jQuery(function($){
                                            $('#map_canvas').gmap3({
                                                marker:{
                                               address: ' <?php echo of_get_option('sksdev_contact_latitude'); ?> , <?php echo of_get_option('sksdev_contact_longitude');?> ' 
                                                },
                                                    map:{
                                                    options:{
                                                    zoom: 15,
                                                    scrollwheel: false,
                                                    streetViewControl : true
                                                    }
                                                }
                                            });
                                        });
                                  
                                </script>
                                <?php
                                }
                          }
                add_action( 'wp_footer', 'sksdev_script' );
      
        
        function replace_menu_div( $newel ) {
            $html4nav = array();
            $html4nav[0] = '/<div class="menu">/';
            $html4nav[1] = '/<\/div>/';
            $html5nav = array();
            $html5nav[0] = '';
            $html5nav[1] = '';
            ksort($html4nav);
            ksort($html5nav);
            return preg_replace($html4nav, $html5nav, $newel, 1);
            }
        add_filter('wp_page_menu','replace_menu_div');

        
        
        function string_limit_words($string, $word_limit)
        {
          $words = explode(' ', $string, ($word_limit + 1));
          if(count($words) > $word_limit)
          array_pop($words);
          return implode(' ', $words);
        }
