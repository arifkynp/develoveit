<?php
function qqtheme_widgets() {  
  
  register_sidebar( array(
    'name' => 'Header Post',
    'id' => 'header-post',
    'description' => 'Header Post 100% terletak di atas dengan background biru langit',
    'before_widget' => '<p id="%1$s" class="widget-container %2$s">',
    'after_widget' => '</p><br/>',
    'before_title' => '<h1>',
    'after_title' => '</h1>',
  ) );
  
  register_sidebar( array(
    'name' => 'Top 1',
    'id' => 'top-1',
    'description' => 'Top Bar 100% terletak di atas dengan background hitam #333333',
    'before_widget' => '<p id="%1$s" class="widget-container %2$s">',
    'after_widget' => '</p>',
    'before_title' => '<h1>',
    'after_title' => '</h1>',
  ) );
  
   register_sidebar( array(
    'name' => 'Top 2',
    'id' => 'top-2',
    'description' => 'Top Bar 2 100% terletak di atas dengan background biru langit',
    'before_widget' => '<p id="%1$s" class="widget-container %2$s">',
    'after_widget' => '</p>',
    'before_title' => '<h1>',
    'after_title' => '</h1>',
  ) );
  

  register_sidebar( array(
    'name' => 'Sidebar',
    'id' => 'sidebar',
    'description' => 'Sidebar dengan lebar lebih kurang 300px terletak di sebelah kanan',
    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
    'after_widget' => '</li><br/><div class="separator"></div><br/><div class="clear"></div>',
    'before_title' => '<div class="before"></div><h1 class="widget-title">',
    'after_title' => '</h1>',
  ) );
  
  register_sidebar( array(
    'name' => 'Sidebar Kiri',
    'id' => 'sidebar-kiri',
    'description' => 'Sidebar kiri dengan lebar 50% terletak di bawah',
    'before_widget' => '<p id="%1$s" class="widget-container %2$s">',
    'after_widget' => '</p>',
    'before_title' => '<div class="before"></div><h1>',
    'after_title' => '</h1>',
  ) );

  register_sidebar( array(
    'name' => 'Sidebar Kanan',
    'id' => 'sidebar-kanan',
    'description' => 'Sidebar kanan dengan lebar 50% terletak di bawah',
    'before_widget' => '<p id="%1$s" class="widget-container %2$s">',
    'after_widget' => '</p>',
    'before_title' => '<div class="before"></div><h1>',
    'after_title' => '</h1>',
  ) );
  
  
  register_sidebar( array(
    'name' => 'Sidebar Lebar',
    'id' => 'sidebar-lebar',
    'description' => 'Footerbar Lebar 100% terletak atas sidebar kiri dan kanan ',
    'before_widget' => '<p id="%1$s" class="widget-container %2$s">',
    'after_widget' => '</p>',
    'before_title' => '<h1>',
    'after_title' => '</h1>',
  ) );
  
  
  register_sidebar( array(
    'name' => 'Footer Kiri',
    'id' => 'footer-kiri',
    'description' => 'Footerbar 30% terletak di bawah sebelah kiri',
    'before_widget' => '<p id="%1$s" class="widget-container %2$s">',
    'after_widget' => '</p><br/>',
    'before_title' => '<h1>',
    'after_title' => '</h1>',
  ) );
  
  register_sidebar( array(
    'name' => 'Footer Tengah',
    'id' => 'footer-tengah',
    'description' => 'Footerbar 30% terletak di bawah sebelah tengah',
    'before_widget' => '<p id="%1$s" class="widget-container %2$s">',
    'after_widget' => '</p><br/>',
    'before_title' => '<h1>',
    'after_title' => '</h1>',
  ) );
  
  register_sidebar( array(
    'name' => 'Footer Kanan',
    'id' => 'footer-kanan',
    'description' => 'Footerbar 30% terletak di bawah sebelah kanan',
    'before_widget' => '<p id="%1$s" class="widget-container %2$s">',
    'after_widget' => '</p><br/>',
    'before_title' => '<h1>',
    'after_title' => '</h1>',
  ) );
  
  
	
  register_nav_menu( 'primary', __( 'QQTheme Menu' ) );
  
}
add_action( 'widgets_init', 'qqtheme_widgets' );
?>
<?php
define( 'HEADER_IMAGE_WIDTH',900);
define( 'HEADER_IMAGE_HEIGHT',400 );
define( 'HEADER_TEXTCOLOR', 'FFF' );

function qqtheme_header_style() {
echo '
<style type="text/css">
#headimg {
  background:#FFF;
}
#name { 
  font-family: Georgia, "Bitstream Charter", serif;
  font-size:30px;
}
h1 a {
  text-decoration:none;
  }
#desc { 
  font-family: Georgia, "Bitstream Charter", serif;
  font-size:14px;
}

</style>';
}
add_custom_image_header( '', 'qqtheme_header_style' );
?>
<?php
add_theme_support('post-thumbnails');


$args = array(
	'default-color' => '999',
	'default-image' => get_template_directory_uri().'/image/background.jpg',
);
add_theme_support( 'custom-background', $args );


if ( ! function_exists( 'twentythirteen_post_nav' ) ) :
/**
 * Display navigation to next/previous post when applicable.
*
* @since Twenty Thirteen 1.0
*/
function qqtheme_post_nav() {
	global $post;

	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous )
		return;
	?>
	<nav class="navigation post-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'twentythirteen' ); ?></h1>
		<div class="nav-links">

			
			<br/>
			<div class="left"><?php previous_post_link( '%link', _x( ' <div class="left"> Previous<br/> &larr; %title </div> ', 'Previous post link', 'twentythirteen' ) ); ?></div>
			<div class="right"><?php next_post_link( '%link', _x( ' <div class="right">Next<br/> %title &rarr;</div>', 'Next post link', 'twentythirteen' ) ); ?></div>
			<div class="clear"></div>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

function qqtheme_permalink(){
	?>  <div class="clear"></div><div class="clear"></div><div class="wide-box sharebox">Share link : <a href="<?php the_permalink();?>"><?php the_permalink();?></a></div>

	<?php }

?>