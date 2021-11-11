<?php get_header(); ?>

<?php if (have_posts()) : ?>
	<div class="posts single">
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
			<div class="related">
				<?php the_post_navigation(); ?>
			</div>
			<?php if ( comments_open() || get_comments_number() ) : ?>
			<div class="comments">
				<?php comments_template(); ?>
			</div>
			<?php endif; ?>
		</article>
	<?php endwhile; ?>
	</div>
<?php endif; ?>

<?php get_footer(); ?>
