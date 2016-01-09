<?php

use Squarely\Setup;
use Squarely\Wrapper;

?>

<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?> id="page-top">

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'squarely'); ?>
    </div>
  <![endif]-->
  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>
  <div class="wrap" role="document">
  <?php while (have_posts()) : the_post(); ?>
    <div class="hero">

    <?php the_content(); ?>
    </div>
    <?php endwhile; ?>

    <?php get_template_part('hero');?>
    <?php get_template_part('feature');?>
    <?php get_template_part('templates/services');?>
    <?php get_template_part('templates/quote');?>
    <?php get_template_part('resources');?>
    <?php get_template_part('consult');?>
  </div><!-- /.wrap -->
<?php
      get_template_part('templates/footer'); wp_footer(); ?>
  </body>
</html>
