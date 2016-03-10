<?php
/**
 * The template for displaying 404 pages (Not Found).
 */

get_header(); ?>

	 <div class="container">
		<div id="content" role="main" class="mainwrapper">
             <div class="row">
             
             <div class="col-sm-8">
			
				
                <article class="error-404 not-found" >
                        
                        <header class="entry-header">
                            
                            
                            
                            <h1 class="entry-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'sksdev' ); ?></h1>
                        </header>

                    <div class="entry-content">
                  <p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'sksdev' ); ?></p>

					<?php get_search_form(); ?>
                    </div><!-- .entry-content -->
                    <footer class="entry-meta">
                        <?php edit_post_link( __( 'Edit', 'sksdev' ), '<span class="edit-link">', '</span>' ); ?>
                    </footer><!-- .entry-meta -->
	            </article><!-- #post -->
    
                
                </div>
                 <div class="col-sm-4">
                        <?php get_sidebar(); ?>
                        </div>
            </div> <!--- row -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>