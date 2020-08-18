<?php 
   get_header();
?>
    <h3>Search results for: <?php the_search_query(); ?></h3>
<?php
    get_template_part('template-parts/content'); 

    get_footer();
?>