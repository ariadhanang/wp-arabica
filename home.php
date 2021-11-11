<?php get_header(); ?>

<div id="page-home">
	<?php if (have_posts()) : ?>
	<div class="posts">
		<?php while(have_posts()) : the_post(); ?>
			<article class="post">
				<h2>
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</h2>
			</article>
		<?php endwhile; ?>
		</div>
	<?php endif; ?>
</div>

<?php get_footer(); ?>
