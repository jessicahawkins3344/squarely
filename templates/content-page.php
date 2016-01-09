<?php
$cc = get_the_content();
if($cc != '') : ?>
<div class="card">
<div class="card-block" style="padding: 4em!important;">
<?php the_content(); ?>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'squarely'), 'after' => '</p></nav>']); ?>
</div>
</div>
<?php else : ?>
	<div></div>
<?php endif; ?>

<div class="row m-t-lg m-b-lg" style="margin-bottom: 7em!important;">
  <?php if ( is_page( 'solutions' )) : ?>
  	<div id="solutions" class="m-t-lg m-b-lg" style="margin-top: 7em!important;">
  		<?php get_template_part('templates/content', 'solutions'); ?>
  	</div>
<?php endif; ?>
</div>
