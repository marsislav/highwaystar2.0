<form role="search" method="get"action="<?php esc_url(home_url('/'));?>">
    <input type="search" name="s" placeholder=<?php echo esc_html_x('Search...', '_themename'); ?>  value="<?php  echo esc_attr(get_search_query()) ?>"/>
    <button type="submit"><?php echo esc_html_x('Search!', '_themename');?></button>
</form>