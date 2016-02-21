<?php
	/* IMPORTANT! This code retrieves the option to disable the sidebar */
	global $wpdb;
	$style = $wpdb->get_results("SELECT display_sidebar FROM ".$wpdb->prefix."photocrati_styles WHERE option_set = 1");
	foreach ($style as $style) {
		$display_sidebar = $style->display_sidebar;
	}
?>

<?php get_header(); ?>
	
	<div id="container">	
		<div id="content-sm"><!-- Important!! If you remove the sidebar change the ID of this DIV to content -->
			
			<?php if ( have_posts() ) : ?>
				
			<h1 class="page-title"><?php _e( 'Search Results for: ', 'photocrati-framework' ); ?><span><?php the_search_query(); ?></span></h1>
				
			<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
				<div id="nav-above" class="navigation">
					<div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'photocrati-framework' )) ?></div>
					<div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'photocrati-framework' )) ?></div>
				</div><!-- #nav-above -->
			<?php } ?>							

			<?php while ( have_posts() ) : the_post() ?>

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'photocrati-framework'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

			<?php if ( $post->post_type == 'post' ) { ?>									
				<div class="entry-meta">
					<span class="meta-prep meta-prep-author"><?php _e('By ', 'photocrati-framework'); ?></span>
					<span class="author vcard"><a class="url fn n" href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( __( 'View all posts by %s', 'photocrati-framework' ), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
					<span class="meta-sep"> | </span>
					<span class="meta-prep meta-prep-entry-date"><?php _e('Published ', 'photocrati-framework'); ?></span>
					<span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
					<?php edit_post_link( __( 'Edit', 'photocrati-framework' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?>
				</div><!-- .entry-meta -->
			<?php } ?>
					
			<div class="entry-summary">	
				<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'photocrati-framework' )  ); ?>
				<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'photocrati-framework' ) . '&after=</div>') ?>
			</div><!-- .entry-summary -->

			<?php if ( $post->post_type == 'post' ) { ?>									
				<div class="entry-utility">
					<span class="cat-links"><span class="entry-utility-prep entry-utility-prep-cat-links"><?php _e( 'Posted in ', 'photocrati-framework' ); ?></span><?php echo get_the_category_list(', '); ?></span>
					<span class="meta-sep"> | </span>
					<?php the_tags( '<span class="tag-links"><span class="entry-utility-prep entry-utility-prep-tag-links">' . __('Tagged ', 'photocrati-framework' ) . '</span>', ", ", "</span>\n\t\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
					<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'photocrati-framework' ), __( '1 Comment', 'photocrati-framework' ), __( '% Comments', 'photocrati-framework' ) ) ?></span>
					<?php edit_post_link( __( 'Edit', 'photocrati-framework' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t\n" ) ?>
				</div><!-- #entry-utility -->	
			<?php } ?>					
			</div><!-- #post-<?php the_ID(); ?> -->

			<?php endwhile; ?>

			<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
				<div id="nav-below" class="navigation">
					<div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'photocrati-framework' )) ?></div>
					<div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'photocrati-framework' )) ?></div>
				</div><!-- #nav-below -->
			<?php } ?>			

			<?php else : ?>

			<div id="post-0" class="post no-results not-found">
				<h2 class="entry-title"><?php _e( 'Nothing Found', 'photocrati-framework' ) ?></h2>
				<div class="entry-content">
				<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'photocrati-framework' ); ?></p>
				<?php get_search_form(); ?>						
				</div><!-- .entry-content -->
			</div>

			<?php endif; ?>			

		</div><!-- #content -->
        
    <?php if($display_sidebar == 'YES') { get_sidebar(); } ?>
			
<?php get_footer(); ?>