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
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <?php if ( is_page( 'solutions' )) : ?>
    <section class="bg-white page-header-bg" style="padding: 1em!important;" >
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <?php get_template_part('templates/page', 'header'); ?>
          </div>
        </div>
      </div>
    </section>
    <?php else : ?>
      <section class=" banner bg-transparent page-header-bg" style="padding: 4em!important;" >
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <?php get_template_part('templates/page', 'header'); ?>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>
    </section>
    <section style="padding: 2em 4em!important;">
      <div class="wrap" role="document">
          <main>
            <?php include Wrapper\template_path(); ?>
          </main><!-- /.main -->
          <?php if (Setup\display_sidebar()) : ?>
            <aside class="sidebar">
              <?php include Wrapper\sidebar_path(); ?>
            </aside><!-- /.sidebar -->
          <?php endif; ?>
      </div><!-- /.wrap -->
    </section>
    <?php get_template_part('consult');?>
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
    <script>
    jQuery(document).ready(function($) {

  $(".backy").backstretch([BackStretchImg.src],{duration:3000,fade:750});

});</script>
  </body>
</html>