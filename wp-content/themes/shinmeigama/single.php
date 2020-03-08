<?php get_header(); ?>

<main>
	<h2>伸明窯からのお知らせ</h2>

	<?php if(have_posts()): while(have_posts()):the_post(); ?>

	<h3>
		<span><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time></span><br>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h3>
	<p><?php the_content('Read more'); ?></p>

	<?php endwhile; endif; ?>

	<?php previous_post_link('%link','◀&nbsp;前へ'); ?>
	<?php next_post_link('%link','次へ&nbsp;▶'); ?>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>​