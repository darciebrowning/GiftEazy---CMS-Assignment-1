<?php
/**
 * The template for displaying all pages
 */

get_header(); ?>

	 <div class="container">
		<div id="content" role="main" class="mainwrapper">
             <div class="row">
             
             <div class="col-sm-8">
             
             <header class="entry-header">
             
				<h1 class="entry-title">
					<?php
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							printf( __( 'Author: %s', 'sksdev' ), '<span class="vcard">' . get_the_author() . '</span>' );

						elseif ( is_day() ) :
							printf( __( 'Day: %s', 'sksdev' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'sksdev' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'sksdev' ) ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'sksdev' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'sksdev' ) ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'sksdev' );

						elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
							_e( 'Galleries', 'sksdev');

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'sksdev');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'sksdev' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'sksdev' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'sksdev' );

						elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
							_e( 'Statuses', 'sksdev' );

						elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
							_e( 'Audios', 'sksdev' );

						elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
							_e( 'Chats', 'sksdev' );

						else :
							_e( 'Archives', 'sksdev' );

						endif;
					?>
				</h1>
				
			</header><!-- .entry-header -->
       
             	<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        
                        <header class="entry-header">
                            
                            <?php the_post_thumbnail(); ?>
                            
                            <h1 class="entry-title"><?php the_title(); ?></h1>
                        </header>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'sksdev' ), 'after' => '</div>' ) ); ?>
                    </div><!-- .entry-content -->
                    <footer class="entry-meta">
                        <?php 
                        
                        the_tags();
                        edit_post_link( __( 'Edit', 'sksdev' ), '<span class="edit-link">', '</span>' ); ?>
                    </footer><!-- .entry-meta -->
	            </article><!-- #post -->
    
                    <?php comments_template( '', true ); ?>
                
                
			<?php endwhile; // end of the loop.
            
                      posts_nav_link(); ?>
                </div>
                 <div class="col-sm-4">
                        <?php get_sidebar(); ?>
                        </div>
            </div> <!--- row -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>