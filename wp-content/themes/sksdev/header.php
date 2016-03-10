<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
          <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> >
        
        <div class="site-main" id="sTop">
            <div class="site-header">
            
            <?php if(of_get_option('sksdev_activate_social') == 1){?> 
            
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <ul class="social-icons">
                              <?php if(of_get_option('sksdev_facebook_title')){?> 
                               <li><a href="<?php echo of_get_option('sksdev_facebook_title');?>" class="fa fa-facebook"></a></li>
                               <?php } if(of_get_option('sksdev_twitter_title')){?>
                                <li><a href="<?php echo of_get_option('sksdev_twitter_title');?>" class="fa fa-twitter"></a></li>
                                <?php } if(of_get_option('sksdev_dribble_title')){?>
                                <li><a href="<?php echo of_get_option('sksdev_dribble_title');?>" class="fa fa-dribbble"></a></li>
                                <?php } if(of_get_option('sksdev_linkedin_title')){?>
                                <li><a href="<?php echo of_get_option('sksdev_linkedin_title');?>" class="fa fa-linkedin"></a></li>
                                <?php } ?>
                            </ul>
                        </div> <!-- /.col-md-12 -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
                <?php }?> 
                <div class="main-header">
                    <div class="container">
                        <div id="menu-wrapper">
                            <div class="row">
                            
                          <?php 
                          
                            if(of_get_option('sksdev_header_logo_title') == "one") {?>
                          
                             <div class="logo-wrapper col-md-4 col-sm-2 col-xs-8" style="background: url('<?php if(of_get_option('sksdev_header_logo_image')) { echo of_get_option('sksdev_header_logo_image');} else { echo get_template_directory_uri().'/images/logo.png';}?>') no-repeat; background-position: 15px; height: 100px;">
                                    <h1>
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php if(of_get_option('sksdev_header_title')) { echo of_get_option('sksdev_header_title');} else { bloginfo('name');}?></a>
                                    </h1>
                                </div> <!-- /.logo-wrapper -->
                                
                            <?php }
                            
                          else if(of_get_option('sksdev_header_logo_title') == "two") {?>
                          
                             <div class="logo-wrapper col-md-4 col-sm-2 col-xs-8" style="background: url('<?php if(of_get_option('sksdev_header_logo_image')) { echo of_get_option('sksdev_header_logo_image');} else { echo get_template_directory_uri().'/images/logo.png';}?>') no-repeat; background-position: 15px; height: 100px;">
                                    <h1>
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"> </a>
                                    </h1>
                                </div> <!-- /.logo-wrapper -->
                                
                            <?php }
                            
                            else if(of_get_option('sksdev_header_logo_title') == "three") {?>
                          
                             <div class="logo-wrapper col-md-4 col-sm-2 col-xs-8" style="background: none;') no-repeat;">
                                    <h1>
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="padding-left: 30px;"><?php if(of_get_option('sksdev_header_title')) { echo of_get_option('sksdev_header_title');} else { bloginfo('name');}?></a>
                                    </h1>
                                </div> <!-- /.logo-wrapper -->
                                
                            <?php }
                            
                            else { ?>
                            
                             <div class="logo-wrapper col-md-4 col-sm-2 col-xs-8">
                                    <h1>
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php if(of_get_option('sksdev_header_title')) { echo of_get_option('sksdev_header_title');} else { bloginfo('name');}?></a>
                                    </h1>
                                </div> <!-- /.logo-wrapper -->
                                
                                
                            <?php } ?>
                            
                               
                                <div class="col-md-8 col-sm-10 col-xs-4 main-menu text-right">
                               
                                    
                                    <?php
								if ( has_nav_menu( 'primary' ) ) {									
									wp_nav_menu( array( 'theme_location' => 'primary' ) );
								}
								
							?>
                                    <a href="#" class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></a>
                                </div> <!-- /.main-menu -->
                            </div> <!-- /.row -->
                        </div> <!-- /#menu-wrapper -->
                        <div class="menu-responsive hidden-md hidden-lg">
                           <?php
								if ( has_nav_menu( 'primary' ) ) {									
									wp_nav_menu( array( 'theme_location' => 'primary' ) );
								}
								
							?>
                        </div> <!-- /.menu-responsive -->
                    </div> <!-- /.container -->
                </div> <!-- /.main-header -->
            </div> <!-- /.site-header -->