<?php
/**
 * The template for displaying Archive pages.
 *
 * @package Zuki
 * @since Zuki 1.0
 */

get_header(); ?>

<div id="primary" class="site-content cf" role="main">

	<?php if ( have_posts() ) : ?>

		<header class="archive-header">
			<h1 class="archive-title">
					<?php
						if ( is_category() ) :
							$cat = single_cat_title( '', false );
							if($cat == 'Rezepte'):
								echo "<span>Alle Rezepte</span>";
							endif;
							// printf( __( 'All posts filed under: %s', 'zuki' ), '<span>' . single_cat_title( '', false ) . '</span>' );

						elseif ( is_tag() ) :
							printf( __( 'All posts tagged: %s', 'zuki' ), '<span>' . single_tag_title( '', false ) . '</span>' );

						elseif ( is_author() ) :
							printf( __( 'Author: %s', 'zuki' ), '<span class="vcard">' . get_the_author() . '</span>' );

						elseif ( is_day() ) :
							printf( __( 'Day: %s', 'zuki' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'zuki' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'zuki' ) ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'zuki' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'zuki' ) ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'zuki' );

						elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
							_e( 'Galleries', 'zuki');

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'zuki');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'zuki' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'zuki' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'zuki' );

						elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
							_e( 'Statuses', 'zuki' );

						elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
							_e( 'Audios', 'zuki' );

						elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
							_e( 'Chats', 'zuki' );

						else :
							_e( 'Archives', 'zuki' );

						endif;
					?>
			</h1>
			<?php
				// Show an optional term description.
				$term_description = term_description();
				if ( ! empty( $term_description ) ) :
					printf( '<div class="taxonomy-description">%s</div>', $term_description );
				endif;
			?>
		</header><!-- end .archive-header -->

		<?php /* Start the Loop */ ?>

<div class="front-content widget-area">
<aside id="zuki_recentposts_medium_one-3" class="widget widget_zuki_recentposts_medium_one">
		<?php while ( have_posts() ) : the_post(); ?>

			    <article class="rp-medium-one">


      <div class="rp-medium-one-content">
         <?php if ( '' != get_the_post_thumbnail() ) : ?>
			 <div class="entry-thumb">
				 <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'zuki' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php the_post_thumbnail('small'); ?></a>
			</div><!-- end .entry-thumb -->
		<?php endif; ?>

			<div class="entry-date"><a href="<?php the_permalink(); ?>" class="entry-date"><?php echo get_the_date(); ?></a></div>
			<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php zuki_title_limit( 85, '...'); ?></a></h3>
			<p class="summary"><?php echo zuki_excerpt(20); ?></p>
			<div class="entry-author">
			<?php
				printf( __( 'by <a href="%1$s" title="%2$s">%3$s</a>', 'zuki' ),
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
				sprintf( esc_attr__( 'All posts by %s', 'zuki' ), get_the_author() ),
				get_the_author() );
			?>
			</div><!-- end .entry-author -->
			<?php if ( comments_open() ) : ?>
			<div class="entry-comments">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'comments 0', 'zuki' ) . '</span>', __( 'comment 1', 'zuki' ), __( 'comments %', 'zuki' ) ); ?>
			</div><!-- end .entry-comments -->
			<?php endif; // comments_open() ?>
      </div><!--end .rp-medium-one -->


      </article><!--end .rp-medium-one -->
			
		<?php endwhile; // end of the loop. ?>
</aside></div>

		<?php else : ?>

			<article id="post-0" class="post no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nothing Found', 'zuki' ); ?></h1>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for.', 'zuki' ); ?></p>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		<?php endif; ?>

		<?php
		// Previous/next post navigation.
		zuki_content_nav( 'nav-below' ); ?>

</div><!-- end #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>