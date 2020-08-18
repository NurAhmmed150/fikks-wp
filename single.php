<?php 
   get_header();
?>
          
            <div class="row tm-row">
                <div class="col-12">
                    <hr class="tm-hr-primary tm-mb-55">
                    <div class="tm-post-link-inner">
                            <?php the_post_thumbnail(); ?>                           
                        </div>
                </div>
            </div>
            <?php
                if(have_posts()):
                while(have_posts()): the_post();
            ?>
                 <div class="row tm-row">
                <div class="col-lg-8 tm-post-col">
                    <div class="tm-post-full">                    
                        <div class="mb-4">
                            <h2 class="pt-2 tm-color-primary tm-post-title"><?php the_title(); ?></h2>
                            <p class="tm-mb-40"><?php the_time('F jS, Y'); ?> <a href='<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>'><?php the_author(); ?></a></p>
                            <p><?php the_content(); ?></p>
                            <span class="d-block text-right tm-color-primary"><span class="tm-color-primary"><?php the_category(', '); ?></span></span>
                        </div>
                        
            
                        <div>
                            <h2 class="tm-color-primary tm-post-title">Comments</h2>
                            <hr class="tm-hr-primary tm-mb-45">
                            <div class="tm-comment-reply tm-mb-45">

                                <?php 
                                  if (comments_open() || get_comments_number()):
                                  comments_template();
                                  endif;
                                ?>

                            </div>                     
                        </div>
                    </div>
                </div>
            <?php
               endwhile;
               endif;
            ?>   
                <aside class="col-lg-4 tm-aside-col">
                    <div class="post-page-sidebar">
                        <hr class="mb-3 tm-hr-primary">
                        <?php dynamic_sidebar('sidebar1'); ?>
                    </div>                    
                </aside>
            </div>
<?php 
   get_footer();
?>


