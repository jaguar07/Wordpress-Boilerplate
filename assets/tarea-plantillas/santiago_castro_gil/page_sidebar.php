<?php get_header (url);?>

<body>
	<h1>Soy la plantilla de page.php: <?php the_title(); ?></h1>
	<?php the_post(); ?>
	<?php the_content(); ?>
	<a href="<?php bloginfo(home); ?>">home</a>
	<script src="<?php bloginfo(template_url); ?>/js/jquery-1.8.3-min.js"></script>
	<?php include(sidebar.php);?>

<?php get_footer();?>