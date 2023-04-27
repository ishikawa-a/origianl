<form method="get" id="searchform" class="icon-magnifying-glass" action="<?php echo esc_url( home_url( '/' ) ); ?>">
   <input type="text" name="s" id="s" placeholder="<?php if(!is_search()){ echo '検索';} ?>" value="<?php if(is_search()){ echo get_search_query();} ?>"/>
</form>