<div class="row tm-row">
    <div class="col-12">
        <form role="search" method="get" class="search-form form-inline tm-mb-80 tm-search-form" action='<?php  echo esc_url( home_url( '/' ) ); ?>'>
          <label>
             <input type="search" class="search-field form-control mr-sm-2 form-control tm-search-input "   placeholder="<?php echo esc_attr( 'Search …', 'placeholder' ) ?>"
                value="<?php echo get_search_query() ?>" name="s"
                title="<?php echo esc_attr( 'Search for:', 'label' ) ?>" />
           </label>
           <button class="tm-search-button" type="submit">
                <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
            </button>  
        </form>
   </div>
</div>
