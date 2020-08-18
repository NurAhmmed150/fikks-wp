<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php 
   wp_head();
?>
<body>
	<header class="tm-header" id="tm-header">
        <div class="tm-header-wrapper">
            <button class="navbar-toggler tog" style= "background: #0CC;;" type="button" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="tm-site-header">
                <div class="mb-3 mx-auto">
                <a href='<?php echo esc_url( home_url( '/' ) ); ?>'>
                <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
                      $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
                      if($custom_logo_url){
                        echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="logo">'; 
                }else { ?> 
                  <div class='logo-title'>
                     <h4><?php bloginfo('title'); ?></h4>
                  </div>
                <?php  }?>
                </a>
                </div>            
                <h1 class="text-center"><?php bloginfo('description'); ?></h1>
            </div>
            <nav class="tm-nav" id="tm-nav">     
                <?php 
                   $args = array(
                       'menu' => 'main menu',
                       'theme_location' => 'main-menu',
                       'items_wrap' => '<ul>%3$s</ul>'
                   );
                   wp_nav_menu($args);
                
                ?>   
            </nav>
            <div class="tm-mb-65">
                <?php 
                   $fblink = get_theme_mod( 'link_settingfb',  __('https://www.facebook.com', 'fikkawp') );
                   if($fblink) { ?>
                    <a rel="nofollow" href="<?php echo $fblink; ?>" class="tm-social-link">
                      <i class="fab fa-facebook tm-social-icon"></i>
                    </a>
                  <?php }
                ?>
                <?php 
                   $twitterlink = get_theme_mod( 'link_settingtwitter',  __('https://www.twitter.com', 'fikkawp') );
                   if($twitterlink) { ?>
                    <a href="<?php echo $twitterlink; ?>" class="tm-social-link">
                       <i class="fab fa-twitter tm-social-icon"></i>
                    </a>              
                  <?php }
                ?>
                <?php 
                   $instagramlink = get_theme_mod( 'link_settinginstagram',  __('https://www.instagram.com', 'fikkawp') );
                   if($instagramlink) { ?>
                    <a href="<?php echo $instagramlink; ?>" class="tm-social-link">
                       <i class="fab fa-instagram tm-social-icon"></i>
                   </a>
                  <?php }
                ?>
                <?php 
                   $linkedinlink = get_theme_mod( 'link_settinginstagram',  __('https://www.linkedin.com', 'fikkawp') );
                   if($linkedinlink) { ?>
                    <a href="<?php echo $linkedinlink; ?>" class="tm-social-link">
                       <i class="fab fa-linkedin tm-social-icon"></i>
                   </a>
                  <?php }
                ?>
            </div>
            <p class="tm-mb-80 pr-5 text-white">
                <?php dynamic_sidebar('leftsidebar'); ?>
            </p>
        </div>
    </header>
    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
            <?php get_search_form();?>  