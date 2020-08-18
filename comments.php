<?php
    if (post_password_required()):
      return;
    endif;
?>
<div class="comment-form">
    <?php comment_form(); ?>
</div>
<div class="comments">
    <?php if (have_comments()): ?>
        <h3 class="comment-title">
	     	<?php comments_number(__( '% Responses', 'navonil' )); ?>
        </h3>

       	<div class="comments-list">
           <?php wp_list_comments();  ?>
      	</div>
		  <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
           <?php 
  	        	if (get_comment_pages_count() > 1 && get_option('page_comments')):
            ?>
    	<div class="navigation">
          <?php previous_comments_link(); ?>
          <?php next_comments_link(); ?> 
        </div>
     	<?php
  		endif;
     	?>
        <?php endif; ?>
        <?php
     		if (!comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' )):
      	?>
		<p class="no-comments"><?php _e('Comments are closed.', 'navonil' ); ?></p>
    	<?php 
        endif; 
        ?>       
</div>

