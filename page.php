<?php 
   get_header();
?>
    <div class="row tm-row">
        <?php
            if(have_posts()):
            while(have_posts()): the_post();
        ?>
        <div class="row tm-row tm-mb-45">
            <div class="col-12">
            <hr class="tm-hr-primary tm-mb-55">
                <div class="tm-post-link-inner">
                    <?php the_post_thumbnail(); ?>  
                </div>
            </div>
        </div>
        <div class="row tm-row tm-mb-40">
            <div class="col-12">                    
                <div class="mb-4">
                    <h2 class="pt-2 tm-mb-40 tm-color-primary tm-post-title"><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>                            
                </div>                    
            </div>
        </div>
            <?php
               endwhile;
               endif;
            ?>       
    </div>
<?php 
   get_footer();
?>