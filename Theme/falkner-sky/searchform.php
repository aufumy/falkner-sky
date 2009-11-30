<form id="search"method="get" action="<?php bloginfo('url'); ?>/">
 <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" value="" onFocus="this.value="test" />
 <input type="submit" id="searchsubmit" value="" />
</form>
