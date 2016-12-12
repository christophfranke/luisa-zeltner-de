<?php get_header(); ?>
	
		<div id="container">	
			<div id="content"> <!-- To use the sidebar on pages change the id to content-sm and uncomment the get_sidebar() below -->   
			
				<?php the_post(); ?>
				
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                	<?php if(!is_front_page()) { ?>
					<h1 class="entry-title"><?php the_title(); ?></h1>
                    <?php } ?>
                    
                        <div class="entry-content">
                            <?php the_content(); ?>
                            <?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'photocrati-framework' ) . '&after=</div>') ?>					
                            <?php edit_post_link( __( 'Edit', 'photocrati-framework' ), '<span class="edit-link">', '</span>' ) ?>
                        </div><!-- .entry-content -->
                        
				</div><!-- #post-<?php the_ID(); ?> -->			
			
				<?php if ( get_post_custom_values('comments') ) comments_template() // Add a custom field with Name and Value of "comments" to enable comments on this page ?>			
			
			</div><!-- #content -->	
            
        <?php //get_sidebar(); ?> <!-- Uncomment this (remove the //) to add the sidebar to pages -->
		
<?php get_footer(); ?>