<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

        function optionsframework_option_name() {
            // This gets the theme name from the stylesheet (lowercase and without spaces)
            $themename = get_option( 'stylesheet' );
            $themename = preg_replace("/\W/", "_", strtolower($themename) );
        
            $optionsframework_settings = get_option('optionsframework');
            $optionsframework_settings['id'] = $themename;
            update_option('optionsframework', $optionsframework_settings);
        }

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

        function optionsframework_options() {
                
        $header_logo_title = array(
                        'one' => __('Default', 'sksdev'),
                        'two' => __('Logo', 'sksdev'),
                        'three' => __('Title', 'sksdev')
                );
                
             
             $skill_title = array(
                        '1' => __('1 Line', 'sksdev'),
                        '2' => __('2 Line', 'sksdev'),
                        '3' => __('3 Line', 'sksdev'),
                        '4' => __('4 Line', 'sksdev'),
                        '5' => __('5 Line', 'sksdev'),
                        '6' => __('6 Line', 'sksdev'),
                        '7' => __('7 Line', 'sksdev'),
                        '8' => __('8 Line', 'sksdev'),
                        '9' => __('9 Line', 'sksdev'),
                       '10' => __('10 Line', 'sksdev')
                );
        
        
            $options = array();
        
            // Header Options Area
            $options[] = array(
                'name' => __( 'Header', 'sksdev' ),
                'type' => 'heading'
            );
        
        
            // Favicon activate option
            $options[] = array(
                'name' 	=> __( 'Activate favicon', 'sksdev' ),
                'desc' 	=> __( 'Check to activate favicon. Upload fav icon from below option', 'sksdev' ),
                'id' 	  => 'sksdev_activate_favicon',
                'std' 	 =>  __( '0', 'sksdev' ),
                'type' 	=> 'checkbox'
            );
        
            // Fav icon upload option
            $options[] = array(
                'name' 	=> __( 'Upload favicon', 'sksdev' ),
                'desc' 	=> __( 'Upload favicon for your site.', 'sksdev' ),
                'id' 	  => 'sksdev_favicon',
                'type' 	=> 'upload'
            );
        
        
            // Header Title Option
            $options[] = array(
                    'name' =>  __( 'Header Title', 'sksdev' ),
                    'desc' => __( 'Header Title', 'sksdev' ),
                    'id'   => 'sksdev_header_title',
                    'std'  => __( '', 'sksdev' ),
                    'type' => 'text'
                );
        
        
            // Header Logo upload option
            $options[] = array(
                'name' 	=> __( 'Header Logo', 'sksdev' ),
                'desc' 	=> __( 'Upload logo for your header.', 'sksdev' ),
                'id' 	  =>__( 'sksdev_header_logo_image', 'sksdev' ),
                'type' 	=> 'upload'
            );
                
        
        
            $options[] = array( 
                            'name' =>  __( 'Choose Any One', 'sksdev' ),
                            'desc' => __( 'Display in header Logo or Title.', 'sksdev' ),
                            'id' => 'sksdev_header_logo_title',
                            'std' => __( 'Default', 'sksdev' ),
                            'type' => 'select',
                            'options' => $header_logo_title
                            );
          
          
          
          
          
            // Site primary color option
            $options[] = array(
                'name' 		=> __( 'Theme color option', 'sksdev' ),
                'desc' 		=> __( 'This will reflect in links, buttons and many others. Choose a color to match your site.', 'sksdev' ),
                'id' 			=> 'sksdev_primary_color',
                'std' 		=>  __( '#ec523f', 'sksdev' ),
                'type' 		=> 'color' 
            );
          
        
            /*************************************************************************/
            
            // Header Options Area
            $options[] = array(
                'name' => __( 'Social Settings', 'sksdev' ),
                'type' => 'heading'
            );
            
                // Slider activate option
            $options[] = array(
                'name' 		=> __( 'Activate social', 'sksdev' ),
                'desc' 		=> __( 'Check to activate social.', 'sksdev' ),
                'id' 			=> 'sksdev_activate_social',
                'std' 		=>  __( '1', 'sksdev' ),
                'type' 		=> 'checkbox'
            );
            
            
            $options[] = array(
                    'name' =>  __( 'Facebook Link', 'sksdev' ),
                    'desc' 	=> __( 'Facebook Link', 'sksdev' ),
                    'id' 		=> 'sksdev_facebook_title',
                    'std' 	=>  __( '#', 'sksdev' ),
                    'type' 	=> 'text'
                );
            
            $options[] = array(
                    'name' =>  __( 'Twitter Link', 'sksdev' ),
                    'desc' 	=> __( 'Twitter Link', 'sksdev' ),
                    'id' 		=> 'sksdev_twitter_title',
                    'std' 	=>  __( '#', 'sksdev' ),
                    'type' 	=> 'text'
                );
                
            
            $options[] = array(
                    'name' => __( 'Dribble Link', 'sksdev' ),
                    'desc' 	=> __( 'Dribble Link', 'sksdev' ),
                    'id' 		=> 'sksdev_dribble_title',
                    'std' 	=> __( '#', 'sksdev' ),
                    'type' 	=> 'text'
                );
                
            
            $options[] = array(
                    'name' => __( 'Linkedin Link', 'sksdev' ),
                    'desc' 	=> __( 'Linkedin Link', 'sksdev' ),
                    'id' 		=> 'sksdev_linkedin_title',
                    'std' 	=> __( '#', 'sksdev' ),
                    'type' 	=> 'text'
                );
            
            
            /*************************************************************************/
        
            $options[] = array(
                'name' => __( 'Slider', 'sksdev' ),
                'type' => 'heading'
            );
        
            // Slider activate option
            $options[] = array(
                'name' 		=> __( 'Activate slider', 'sksdev' ),
                'desc' 		=> __( 'Check to activate slider.', 'sksdev' ),
                'id' 			=> 'sksdev_activate_slider',
                'std' 		=> __( '1', 'sksdev' ),
                'type' 		=> 'checkbox'
            );
        
            // Slide options
            for( $i=1; $i<=5; $i++) {
                $options[] = array(
                    'name' 	=>	sprintf( __( 'Slider #%s', 'sksdev' ), $i ),
                    'desc' 	=> __( 'Upload slider image.', 'sksdev' ),
                    'id' 		=> 'sksdev_slider_image'.$i,
					'std' => sprintf( __( get_template_directory_uri() . '/images/slide%s.jpg', 'sksdev' ), $i ),
                    'type' 	=> 'upload'
                );
                $options[] = array(
                    'desc' 	=> __( 'Enter title for your slider.', 'sksdev' ),
                    'id' 		=> 'sksdev_slider_title'.$i,
                    'std' 	=> __( 'YOUR WEBSITE', 'sksdev' ),
                    'type' 	=> 'text'
                );
                $options[] = array(
                    'desc' 	=> __( 'Enter your slider description.', 'sksdev' ),
                    'id' 		=> 'sksdev_slider_text'.$i,
                    'std' 	=> __( 'LET US DESIGN YOUR WEBSITE', 'sksdev' ),
                    'type' 	=> 'textarea'
                );
                
                $options[] = array(
                    'desc' 	=> __( 'Enter Button Title', 'sksdev' ),
                    'id' 		=> 'sksdev_button_title'.$i,
                    'std' 	=> __( 'Read More', 'sksdev' ),
                    'type' 	=> 'text'
                );
                $options[] = array(
                    'desc' 	=> __( 'Enter link to redirect slider when clicked', 'sksdev' ),
                    'id' 		=> 'sksdev_slider_url'.$i,
                    'std' 	=> __( '#', 'sksdev' ),
                    'type' 	=> 'text'
                );
            }
           
             /*************************************************************************/
        
            $options[] = array(
                'name' => __( 'Services', 'sksdev' ),
                'type' => 'heading'
            );
        
            // Slider activate option
            $options[] = array(
                'name' 		=> __( 'Activate services', 'sksdev' ),
                'desc' 		=> __( 'Check to activate services.', 'sksdev' ),
                'id' 			=> 'sksdev_activate_services',
                'std' 		=> __( '1', 'sksdev' ),
                'type' 		=> 'checkbox'
            );
        
            $options[] = array(
                    'name' => __( 'Services Title & Description', 'sksdev' ),
                    'desc' 	=> __( 'Enter Title', 'sksdev' ),
                    'id' 		=> 'sksdev_services_title',
                    'std' 	=> __( 'OUR SERVICES', 'sksdev' ),
                    'type' 	=> 'text'
                );
        
                
                $options[] = array(
                    'desc' 	=> __( 'Enter Description.', 'sksdev' ),
                    'id' 		=> 'sksdev_services_text',
                    'std' 	=> __( 'LET US HELP YOU TO CREATE PROFESSIONAL WEBSITES', 'sksdev' ),
                    'type' 	=> 'textarea'
                );
        
            // Slide options
            for( $i=1; $i<=4; $i++) {
            
                $options[] = array(
                
                    'name' 	=>	sprintf( __( 'Services #%1$s', 'sksdev' ), $i ),
                    'desc' 	=> __( 'Enter content like "f109" select any font awesome icon from here. http://fortawesome.github.io/Font-Awesome/icons/', 'sksdev' ),
                    'id' 		=> 'sksdev_services_icon'.$i,
                    'std' 	=> __( 'f109', 'sksdev' ),
                    'type' 	=> 'text'
                );
                
                $options[] = array(
                
                   'desc' 	=> __( 'Enter title for your service.', 'sksdev' ),
                    'id' 		=> 'sksdev_services_title'.$i,
                    'std' 	=> __( 'HTML5 CSS3', 'sksdev' ),
                    'type' 	=> 'text'
                );
                
                $options[] = array(
                    'desc' 	=> __( 'Enter your service description.', 'sksdev' ),
                    'id' 		=> 'sksdev_services_text'.$i,
                    'std' 	=> __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, assumenda, eveniet, consectetur, ex doloribus veniam asperiores incidunt mollitia placeat aniet adipscing.', 'sksdev' ),
                    'type' 	=> 'textarea'
                );
            }	
            
            
               /*************************************************************************/
            
            // Header Options Area
            $options[] = array(
                'name' => __( 'Portfolio', 'sksdev' ),
                'type' => 'heading'
            );
            
                // Slider activate option
            $options[] = array(
                'name' 		=> __( 'Activate portfolio', 'sksdev' ),
                'desc' 		=> __( 'Check to activate portfolio.', 'sksdev' ),
                'id' 			=> 'sksdev_activate_portfolio',
                'std' 		=> __( '1', 'sksdev' ),
                'type' 		=> 'checkbox'
            );
            
            
            $options[] = array(
                    'name' => __( 'Portfolio Title & Description', 'sksdev' ),
                    'desc' 	=> __( 'Enter Title', 'sksdev' ),
                    'id' 		=> 'sksdev_portfolio_title',
                    'std' 	=> __( 'OUR PORTFOLIO', 'sksdev' ),
                    'type' 	=> 'text'
                );
        
                
                $options[] = array(
                    'desc' 	=> __( 'Enter Description.', 'sksdev' ),
                    'id' 		=> 'sksdev_portfolio_text',
                    'std' 	=> __( 'WHAT WE HAVE DONE SO FAR', 'sksdev' ),
                    'type' 	=> 'textarea'
                );
        
            
            
             /*************************************************************************/
            
            // Header Options Area
            $options[] = array(
                'name' => __( 'Team', 'sksdev' ),
                'type' => 'heading'
            );
            
                // Slider activate option
            $options[] = array(
                'name' 		=> __( 'Activate Team', 'sksdev' ),
                'desc' 		=> __( 'Check to activate team.', 'sksdev' ),
                'id' 			=> 'sksdev_activate_team',
                'std' 		=> __( '1', 'sksdev' ),
                'type' 		=> 'checkbox'
            );
            
            
            $options[] = array(
                    'name' => __( 'Team Title & Description', 'sksdev' ),
                    'desc' 	=> __( 'Enter Title', 'sksdev' ),
                    'id' 		=> 'sksdev_team_title',
                    'std' 	=> __( 'OUR TEAM', 'sksdev' ),
                    'type' 	=> 'text'
                );
        
                
                $options[] = array(
                    'desc' 	=> __( 'Enter Description.', 'sksdev' ),
                    'id' 		=> 'sksdev_team_text',
                    'std' 	=> __( 'MEET OUR PEOPLE AND ABOUT OUR COMPANY', 'sksdev' ),
                    'type' 	=> 'textarea'
                );
        
            
            
                 /*************************************************************************/
            
            // Header Options Area
            $options[] = array(
                'name' => __( 'Skills', 'sksdev' ),
                'type' => 'heading'
            );
            
                // Slider activate option
            $options[] = array(
                'name' 		=> __( 'Activate skills', 'sksdev' ),
                'desc' 		=> __( 'Check to activate skills.', 'sksdev' ),
                'id' 			=> 'sksdev_activate_skills',
                'std' 		=> __( '1', 'sksdev' ),
                'type' 		=> 'checkbox'
            );
            
            
            $options[] = array(
                    'name' => __( 'Skills Title & Description', 'sksdev' ),
                    'desc' 	=> __( 'Enter Title', 'sksdev' ),
                    'id' 		=> 'sksdev_skills_title',
                    'std' 	=> __( 'OUR SKILLS ON WEB DESIGN', 'sksdev' ),
                    'type' 	=> 'text'
                );
        
                
                $options[] = array(
                    'desc' 	=> __( 'Enter Description.', 'sksdev' ),
                    'id' 		=> 'sksdev_skills_text',
                    'std' 	=> __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'sksdev' ),
                    'type' 	=> 'textarea'
                );
        
              
               $options[] = array(
                    'desc' 	=> __( 'Enter Content.', 'sksdev' ),
                    'id' 		=> 'sksdev_skills_content',
                    'std' 	=> __( 'Etiam tincidunt, magna eu elementum tristique, sapien nisl venenatis lacus, nec sagittis lectus dui eget lorem. Donec in tempus mi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin laoreet ac quam et volutpat. Aenean egestas interdum dolor, et mollis lectus consequat a', 'sksdev' ),
                    'type' 	=> 'textarea'
                );
        
        
               $options[] = array( 
                            "name" => __( 'Choose skills progress bar show', 'sksdev' ),
                            "desc" => __( 'Display in header Logo or Title.', 'sksdev' ),
                            "id" => "sksdev_skills_bar",
                            "std" => __( '1', 'sksdev' ),
                            "type" => "select",
                            "options" => $skill_title);  
        
        
              /*************************************************************************/
            
            // Header Options Area
            $options[] = array(
                'name' => __( 'Contact', 'sksdev' ),
                'type' => 'heading'
            );
            
                // Slider activate option
            $options[] = array(
                'name' 		=> __( 'Activate contact', 'sksdev' ),
                'desc' 		=> __( 'Check to activate contact.', 'sksdev' ),
                'id' 			=> 'sksdev_activate_contact',
                'std' 		=> __( '1', 'sksdev' ),
                'type' 		=> 'checkbox'
            );
            
            
            $options[] = array(
                    'name' => __( 'Short-code Contact Form 7', 'sksdev' ),
                    'desc'  => __( 'Copy Short-code from Contact Form 7 and paste in blank field!', 'sksdev' ),
                    'id'        => 'sksdev_contact_shortcode',
                    'std'   =>__( ' ', 'sksdev' ),
                    'type'  => 'text'
                );

            $options[] = array(
                    'name' => __( 'Contact Title & Description', 'sksdev' ),
                    'desc' 	=> __( 'Enter Title', 'sksdev' ),
                    'id' 		=> 'sksdev_contact_title',
                    'std' 	=>__( 'CONTACT US', 'sksdev' ),
                    'type' 	=> 'text'
                );
        
                
                $options[] = array(
                    'desc' 	=> __( 'Enter Description.', 'sksdev' ),
                    'id' 		=> 'sksdev_contact_text',
                    'std' 	=> __( 'FEEL FREE TO SEND A MESSAGE', 'sksdev' ),
                    'type' 	=> 'textarea'
                );
        
            
              $options[] = array(
                    'name' => __( 'Gooogle Map Address Latitude and Longitude', 'sksdev' ),
                    'desc' 	=> __( 'Enter Latitude', 'sksdev' ),
                    'id' 		=> 'sksdev_contact_latitude',
                    'std' 	=> __( '40.7141667', 'sksdev' ),
                    'type' 	=> 'text'
                );
        
        
                 $options[] = array(
                    'desc' 	=> __( 'Enter Longitude', 'sksdev' ),
                    'id' 		=> 'sksdev_contact_longitude',
                    'std' 	=> __( '-74.0063889', 'sksdev' ),
                    'type' 	=> 'text'
                );
                
                $options[] = array(
                    'name' =>  __( 'Enter Contact Description', 'sksdev' ),
                    'desc' 	=> __( 'Enter Description', 'sksdev' ),
                    'id' 		=> 'sksdev_contact_content',
                    'std' 	=>  __( 'This is free responsive template by templatemo that can be used for any commercial or personal website. Slider images and portfolio images are from Unsplash website. Duis ullamcorper tortor tellus. Ut diam libero, ultricies non augue a, mollis congue risus.', 'sksdev' ),
                    'type' 	=> 'textarea'
                );
            
                  $options[] = array(
                    'name' =>  __( 'Phone', 'sksdev' ),
                    'desc' 	=> __( 'Enter Phone Number', 'sksdev' ),
                    'id' 		=> 'sksdev_contact_phone',
                    'std' 	=>  __( '0000-123-123-1234', 'sksdev' ),
                    'type' 	=> 'text'
                );
                
                  $options[] = array(
                    'name' =>  __( 'Email', 'sksdev' ),
                    'desc' 	=> __( 'Enter Email Address', 'sksdev' ),
                    'id' 		=> 'sksdev_contact_email',
                    'std' 	=>  __( 'info@domaninname.com', 'sksdev' ),
                    'type' 	=> 'text'
                );
                
                  $options[] = array(
                    'name' =>  __( 'Address', 'sksdev' ),
                    'desc' 	=> __( 'Enter Home/Office Address', 'sksdev' ),
                    'id' 		=> 'sksdev_contact_address',
                    'std' 	=>  __( 'NewYork NY 71210 Demo', 'sksdev' ),
                    'type' 	=> 'textarea'
                );
            
        
            return $options;
        }