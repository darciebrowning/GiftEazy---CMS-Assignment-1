<?php
/**
 * The template for displaying all pages
 */

get_header(); ?>

	 <div class="container">
		<div id="content" role="main" class="mainwrapper">
             <div class="row">
             
             <div class="col-sm-8">
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