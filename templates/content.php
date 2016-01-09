<div class="col-sm-6 col-md-4">
	<div class="card">
      <div class="overlay-container card-img-top">
      <?php // 'item' is used as an identifier (see Setp 5, line 6) ?>
          <?php if ( has_post_thumbnail() ) { 
                      the_post_thumbnail(' img-responsive');
                } ?>
        <a class="overlay " href="<?php the_permalink(); ?>">
          <i class="icon-btn-warning fa fa-search-plus fa-3x"></i>
        </a>
      </div>
      <div class="card-block">
        <div class="card-title m-b-0">
          <p class="lead strong text-xs-center m-b-0"><?php the_title();?></p>
        </div>
      </div>
    </div> <!-- end item -->
</div>

