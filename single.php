<?php get_header(); ?>

<div class="container">
<?php if (have_posts()) : ?>
	<div class="posts single">
	<?php while(have_posts()) : the_post(); ?>
		<article class="post">
			<h2>
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			</h2>
			<div class="meta">
				<span class="time">
					Posted at <?php the_time(); ?>
				</span>
				•
				<span class="category">
					Category <?php the_category(", "); ?>
				</span>
			</div>
			<div class="thumbnail">
				<?php the_post_thumbnail(); ?>
			</div>
			<div class="content">
				<?php the_content("Read more..."); ?>
			</div>
			<section class="related">
				<h3 class="section-title">Related Posts</h3>
				<?php the_post_navigation(); ?>
			</section>
			<?php if ( comments_open() || get_comments_number() ) : ?>
			<section class="comments">
				<h3 class="section-title">Comments</h3>
				<?php comments_template(); ?>
			</section>
			<?php endif; ?>
		</article>
	<?php endwhile; ?>
	</div>
<?php endif; ?>
</div>

<?php get_footer(); ?>
