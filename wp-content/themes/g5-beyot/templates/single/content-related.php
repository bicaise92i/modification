<?php
/**
 * The template for displaying content related
 *
 * @package WordPress
 * @subpackage Theme_Name
 * @since Theme_Version 1.0
 */
$size = 'medium-image';
$excerpt =  get_the_excerpt();
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('post-grid clearfix'); ?>>
	<div class="entry-content-wrap clearfix">
		<?php g5plus_get_post_thumbnail($size,0,false); ?>
		<div class="entry-post-meta clearfix">
			<div class="entry-meta-date">
				<i class="icon-calendar2"></i> <?php printf('<a href="%1$s">%2$s</a>',esc_url(get_the_title()),esc_html( get_the_time(get_option('date_format')))); ?>
			</div>
		</div>
		<div class="entry-content-inner">
			<div class="entry-info-post clearfix">
				<h3 class="entry-post-title"><a title="<?php the_title(); ?>"
												href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
			</div>
			<div class="entry-excerpt">
				<?php the_excerpt(); ?>
			</div>
		</div>
	</div>
</article>
