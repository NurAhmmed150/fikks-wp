
<?php 
   get_header();
?>
            <div class="row tm-row">
            <?php
                if(have_posts()):
                while(have_posts()): the_post();
            ?>
            <div class="row tm-row tm-mb-40">
                <div class="col-12">                    
                    <div class="mb-4">
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