<?php get_header(); ?>

<div class="container">
<?php if (have_posts()) : ?>
	<div class="posts">
	<?php while(have_posts()) : the_post(); ?>
		<article class="post">
			<h2>
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			</h2>
			<div class="thumbnail">
				<?php the_post_thumbnail(); ?>
			</div>
			<div class="content">
				<?php the_content("Read more..."); ?>
			</div>
		</article>
	<?php endwhile; ?>
	</div>
<?php endif; ?>
</div>

<?php get_footer(); ?>
