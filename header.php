<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body>

	<header id="site-header">
		<div class="container">
			<div class="brand">
				<h1 class="site-title">
					<a href="<?php get_site_url(); ?>">
						<?php bloginfo("name"); ?>
					</a>
				</h1>
				<p class="site-description"><?php bloginfo("description"); ?></p>
			</div>
			<div class="menu">
				<div class="container">
					<?php wp_nav_menu(array('theme_location' => 'header-menu'));?>
				</div>
			</div>
		</div>
	</header>
	<div id="site-content">