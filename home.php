<?php get_header(); ?>

<div id="page-home">
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
				<div class="meta">
					<span class="time">
						Posted at <?php the_time(); ?>
					</span>
					•
					<span class="category">
						Category <?php the_category(", "); ?>
					</span>
				</div>
			</article>
		<?php endwhile; ?>
		</div>
	<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>
