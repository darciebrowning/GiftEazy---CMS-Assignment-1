<?php get_header(); ?>

 <?php if(of_get_option('sksdev_activate_slider') == 1){?> 
 
  <div class="site-slider">
                <div class="slider">
                    <div class="flexslider">
                        <ul class="slides">
                          
                          <?php 
                          
                          // Slide show
	                        for( $i=1; $i<=5; $i++) {?>
                            
                            <?php if(of_get_option('sksdev_slider_image'.$i)){?>
                            <li>
                                <div class="overlay"></div>
                                <img src="<?php echo of_get_option('sksdev_slider_image'.$i);?>" alt="">
                                <div class="slider-caption visible-md visible-lg">
                                    <h2><?php echo of_get_option('sksdev_slider_title'.$i);?></h2>
                                    <p><?php echo of_get_option('sksdev_slider_text'.$i);?></p>
                                    <a href="<?php echo of_get_option('sksdev_slider_url'.$i);?>" class="slider-btn"><?php echo of_get_option('sksdev_button_title'.$i);?></a>
                                </div>
                            </li>
                          <?php 
                                        }
                                } 
                          // end slide
                          ?>
                          
                           
                        </ul>
                    </div> <!-- /.flexslider -->
                </div> <!-- /.slider -->
            </div> <!-- /.site-slider -->
        </div> <!-- /.site-main -->
 <?php }
 else 
 {
  echo '<div class="slideremove"></div>';   
 } ?> 
 <?php if(of_get_option('sksdev_activate_services') == 1){?> 
        <div class="content-section" id="services">
            <div class="container">
                <div class="row">
                    <div class="heading-section col-md-12 text-center">
                        <h2><?php echo of_get_option('sksdev_services_title');?></h2>
                        <p><?php echo of_get_option('sksdev_services_text');?></p>
                    </div> <!-- /.heading-section -->
                </div> <!-- /.row -->
                <div class="row">
                
                <?php 
                          
                          // Slide show
	                        for( $i=1; $i<=4; $i++) {?>
                            
                            
                    <div class="col-md-3 col-sm-6">
                        <div class="service-item" id="service-<?php echo $i;?>">
                        
                       <?php  $string = of_get_option('sksdev_services_icon'.$i); if($string) {?>
                       <style>.ic<?php echo $i;?>:before{ <?php echo 'content:"\\'.$string.'"'; ?>}</style>
                       <?php } ?>
                            <div class="service-icon">
                                <i class="fa fa-file-code-o ic<?php echo $i;?>"  ></i>
                            </div> <!-- /.service-icon -->
                            <div class="service-content">
                                <div class="inner-service">
                                   <h3><?php echo of_get_option('sksdev_services_title'.$i);?></h3>
                                   <p><?php echo of_get_option('sksdev_services_text'.$i);?></p> 
                                </div>
                            </div> <!-- /.service-content -->
                        </div> <!-- /#service-1 -->
                    </div> <!-- /.col-md-3 -->
                    
                    <?php }?>
                   
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /#services -->

 <?php } if(of_get_option('sksdev_activate_portfolio') == 1){?> 

        <div class="content-section" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="heading-section col-md-12 text-center">
                        <h2><?php echo of_get_option('sksdev_portfolio_title');?></h2>
                        <p><?php echo of_get_option('sksdev_portfolio_text');?></p>
                    </div> <!-- /.heading-section -->
                </div> <!-- /.row -->
                <div class="row">
                
                
                
                         <?php
                          query_posts( array( 'post_type' => 'portfolio', 'posts_per_page' => -1 ));
                          if ( have_posts() ) : while ( have_posts() ) : the_post();
                          $post_thumbnail_id = get_post_thumbnail_id();
                          $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
                        ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="portfolio-item col-md-3 col-sm-6">
                        <div class="portfolio-thumb">
                            <img src="<?php echo $post_thumbnail_url;?>" alt="">
                            <div class="portfolio-overlay">
                                <h3><?php echo get_the_title();?></h3>
                                <p><?php $excerpt = get_the_excerpt();
                                     echo string_limit_words($excerpt,20);?></p>
                                <a href="<?php echo $post_thumbnail_url;?>" data-rel="lightbox" class="expand">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div> <!-- /.portfolio-overlay -->
                        </div> <!-- /.portfolio-thumb -->
                    </div> <!-- /.portfolio-item -->
                    </div>
                     <?php endwhile; endif; wp_reset_query(); ?>
                    
               
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /#portfolio -->

 <?php } ?> 


        <div class="content-section" id="our-team">
            <div class="container">
            
            
             <?php if(of_get_option('sksdev_activate_team') == 1){?> 
                <div class="row">
                    <div class="heading-section col-md-12 text-center">
                        <h2><?php echo of_get_option('sksdev_team_title');?></h2>
                        <p><?php echo of_get_option('sksdev_team_text');?></p>
                    </div> <!-- /.heading-section -->
                </div> <!-- /.row -->
                <div class="row">
                    
                      <?php
                          query_posts( array( 'post_type' => 'team', 'posts_per_page' => -1 ));
                          if ( have_posts() ) : while ( have_posts() ) : the_post();
                          
                          $designation = get_post_meta( get_the_ID(), 'designation', true );
                          $facebook = get_post_meta( get_the_ID(), 'facebook', true );
                          $twitter = get_post_meta( get_the_ID(), 'twitter', true );
                          $linkedin = get_post_meta( get_the_ID(), 'linkedin', true );
                        ?>
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="team-member col-md-3 col-sm-6">
                        <div class="member-thumb">
                    <?php if ( has_post_thumbnail() ) {  the_post_thumbnail('full'); } ?>
                            <div class="team-overlay">
                                <h3><?php echo get_the_title();?></h3>
                                <span><?php echo $designation;?></span>
                                <ul class="social">
                                   <?php if($facebook){ ?> <li><a href="<?php echo $facebook;?>" class="fa fa-facebook"></a></li> <?php } ?>
                                   <?php if($twitter) { ?><li><a href="<?php echo $twitter;?>" class="fa fa-twitter"></a></li> <?php } ?>
                                   <?php if($linkedin){ ?> <li><a href="<?php echo $linkedin;?>" class="fa fa-linkedin"></a></li> <?php } ?>
                                </ul>
                            </div> <!-- /.team-overlay -->
                        </div> <!-- /.member-thumb -->
                    </div> <!-- /.team-member -->
                      </div>
                        <?php endwhile; endif; wp_reset_query(); ?>
                    
                </div> <!-- /.row -->
                
                 <?php } if(of_get_option('sksdev_activate_skills') == 1){?> 
                
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="skills-heading">
                            <h3 class="skills-title"><?php echo of_get_option('sksdev_skills_title');?></h3>
                            <p class="small-text"><?php echo of_get_option('sksdev_skills_text');?></p>
                        </div>
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
                <div class="row">
                    <div class="col-md-8 col-sm-6">
                        <p><?php echo nl2br(of_get_option('sksdev_skills_content'));?>.<!-- spacing for mobile viewing --><br><br></p>
						
                    </div> <!-- /.col-md-8 -->
                    <div class="col-md-4 col-sm-6">
                        <ul class="progess-bars">
                      <?php
                      
                                $num =  of_get_option('sksdev_skills_bar');
                          query_posts( array( 'post_type' => 'skills', 'posts_per_page' => $num ));
                          if ( have_posts() ) : while ( have_posts() ) : the_post();
                          
                          $digit_number = get_post_meta( get_the_ID(), 'digit_number', true );
                        ?>
                        
                          <li>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $digit_number;?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $digit_number;?>%;"><?php echo get_the_title();?> <?php echo $digit_number;?>%</div>
                                </div>
                            </li>
                        
                        <?php endwhile; endif; wp_reset_query(); ?>

                            
                        </ul>
                    </div> <!-- /.col-md-4 -->
                </div> <!-- /.row -->
                
                 <?php }?> 
            </div> <!-- /.container -->
        </div> <!-- /#our-team -->

 <?php if(of_get_option('sksdev_activate_contact') == 1){?> 


        <div class="content-section" id="contact">
            <div class="container">
                <div class="row">
                    <div class="heading-section col-md-12 text-center">
                        <h2><?php echo of_get_option('sksdev_contact_title');?></h2>
                        <p><?php echo of_get_option('sksdev_contact_text');?></p>
                    </div> <!-- /.heading-section -->
                </div> <!-- /.row -->
                
                <?php if(of_get_option('sksdev_contact_latitude') && of_get_option('sksdev_contact_longitude')) {?>
                <div class="row">
                    <div class="col-md-12">
                       <div class="googlemap-wrapper">
                            <div id="map_canvas" class="map-canvas"></div>
                        </div> <!-- /.googlemap-wrapper -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-7 col-sm-6">
                        <p><?php echo nl2br(of_get_option('sksdev_contact_content'));?></p>
                        <ul class="contact-info">
                        <?php if(of_get_option('sksdev_contact_phone')){ ?>
                            <li>Phone: <?php echo of_get_option('sksdev_contact_phone');?></li>
                             <?php } if(of_get_option('sksdev_contact_email')){ ?>
                            <li>Email: <a href="mailto:<?php echo of_get_option('sksdev_contact_email');?>"><?php echo of_get_option('sksdev_contact_email');?></a></li>
                             <?php } if(of_get_option('sksdev_contact_address')){ ?>
                            <li>Address: <?php echo of_get_option('sksdev_contact_address');?></li>
                             <?php } ?>
                        </ul>
                        <!-- spacing for mobile viewing --><br><br>
                    </div> <!-- /.col-md-7 -->
                    <div class="col-md-5 col-sm-6">
                        <div class="contact-form">
                        <?php echo do_shortcode(stripslashes(of_get_option('sksdev_contact_shortcode')));?>
                     </div> <!-- /.contact-form -->
                        
                      
                        
                        
                    </div> <!-- /.col-md-5 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /#contact -->
         <?php } ?> 
 <?php get_footer(); ?>           