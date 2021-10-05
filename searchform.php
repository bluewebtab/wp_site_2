<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<!-- wp will search for a file called searchform.php and use it as a 
template for the search form displayed inside the search widget.
It's inportant that you set the method to GET and that the input field has a name of s. -->

<form role="search" method="get" class="search-form"
      action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="input-group">
        <input type="search" id="<?php echo $unique_id; ?>"
               class="form-control" name="s"
               value="<?php the_search_query(); ?>"
               placeholder="<?php _e( 'Search', 'udemy' ); ?>"/>
        <span class="input-group-btn">
            <button type="submit" class="btn btn-danger"><i class="icon-search"></i></button>
        </span>
    </div>
</form>