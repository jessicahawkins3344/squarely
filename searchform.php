<div class="card-block">
<form role="search" method="get" class="search-form form-inline" action="<?= esc_url(home_url('/')); ?>">
  <label class="sr-only"><?php _e('Search for:', 'squarely'); ?></label>
  <div class="input-group">
    <input type="text" value="<?= get_search_query(); ?>" name="s" class="search-field form-control" placeholder="<?php _e('Search', 'squarely'); ?> <?php bloginfo('name'); ?>" required>
    <span class="input-group-btn">
      <button type="button" class="btn btn-primary "><?php _e('Search', 'squarely'); ?></button>
    </span>
  </div>
</form>
</div>
