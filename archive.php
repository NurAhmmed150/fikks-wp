<?php 
   get_header();
?>
    <h2>
        <?php if(is_category()){
            single_cat_title();
        } elseif (is_author()) {
            echo "Author: " . get_the_author();
        } elseif (is_tag()) {
            single_tag_title();
        } elseif (is_time()) {
            get_the_date();
        } else{
            echo 'author';
        }
  
        ?>
    </h2>
<?php         
   get_template_part('template-parts/content'); 
   
   get_footer();
?>