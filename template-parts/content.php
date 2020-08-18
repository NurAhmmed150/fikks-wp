    
<div class="row tm-row">
    <?php
        if(have_posts()):
        while(have_posts()): the_post();
    ?>
    <article class="col-12 col-md-6 tm-post">
        <hr class="tm-hr-primary">
            <div class="tm-post-link-inner">
                <?php the_post_thumbnail(); ?>                           
            </div>
            <h2 class="tm-pt-30 tm-color-primary tm-post-title"><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p class="tm-pt-30">
                <div class='excerpt-content'><?php the_excerpt(); ?></div>
            </p>
            <div class="d-flex justify-content-between tm-pt-45">
                <span class="tm-color-primary"><?php the_category(', '); ?></span>
                <span class="primary-time"><?php the_time('F jS, Y'); ?></span>
            </div>
        <hr>
            <div class="d-flex justify-content-between">
                <span><?php comments_number(); ?></span>
                <span>By <a href='<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>'><?php the_author(); ?></a></span>
            </div>
    </article>
            <?php
               endwhile;
               endif;
            ?>       
            </div>
           <div class="row tm-row tm-mt-100 tm-mb-75">
              <div class="tm-paging-wrapper">
            <nav class="tm-paging-nav d-inline-block">
                <?php echo paginate_links(); ?>                
            </nav>
    </div>                
</div>