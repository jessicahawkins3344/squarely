<?php

use Squarely\Setup;
use Squarely\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <div style="text-align: right!important;">
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    </div>
    <section class="bg-default" style="padding: 4em!important;">
    <div class="wrap" role="document">
      <div class="container-fluid">
        <div class="content row">
          <div class="col-md-8">
            <?php include Wrapper\template_path(); ?>
          </div><!-- /.main -->
          <?php if (Setup\display_sidebar()) : ?>
            <div class="col-md-4">
              <?php include Wrapper\sidebar_path(); ?>
            </div><!-- /.sidebar -->
          <?php endif; ?>
        </div><!-- /.content -->
      </div>
    </div><!-- /.wrap -->
    </section>
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>