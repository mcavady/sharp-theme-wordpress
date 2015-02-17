<?php
/**
 * Register our sidebars and widgetized areas.
 **/
function arphabet_widgets_init() {
  register_sidebar( array(
    'name' => 'Below main content',
    'id' => 'home_right_1',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widget-title">',
    'after_title' => '</h2>',
    ) );
  //gallery side bar
  register_sidebar( array(
    'name' => 'Gallery Main Page',
    'id' => 'home_right_2',
    'before_widget' => '<div class="gallery-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gallery-widget-title">',
    'after_title' => '</h2>',
    ) );
}

//supports woocommerce
add_theme_support( 'woocommerce' );

add_action( 'widgets_init', 'arphabet_widgets_init' );

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}


$defaults = array(
        'header-text'            => true,
	'default-color'          => '000',
//        'default-text-color'     => '000',
//	'default-image'          => '',
//	'default-repeat'         => '',
//	'default-position-x'     => '',
//	'default-attachment'     => '',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
);

add_theme_support( 'post-thumbnails' );

add_action( 'init', 'register_my_menu' );

add_theme_support( 'custom-header', $defaults );

add_theme_support( 'custom-background', $defaults );

add_theme_support( 'html5', array( 'search-form' ) );
?>

<?php
//Gallery widget
class Gallery_Widget extends WP_Widget {

public function __construct() {
  //widget process create it
  parent::__construct(
    'gallery_widget', //base ID
    __('Gallery', 'text_domain'), //name
    array( 'description' => __( 'A gallery widget', 'text_domain' ), ) //argumanets to pass
    );
}

public function widget( $args, $instance ) {
  // outputs the content of the gallery widget --- look at making a loop
  $title = apply_filters( 'widget_title', $instance['title']);
  $imageurl = apply_filters( 'imageurl', $instance['imageurl']);
  $imageurl1 = apply_filters( 'imageurl1', $instance['imageurl1']);
  $imageurl2 = apply_filters( 'imageurl2', $instance['imageurl2']);
  $imageurl3 = apply_filters( 'imageurl3', $instance['imageurl3']);
  $imageurl4 = apply_filters( 'imageurl4', $instance['imageurl4']);
  $imageurl5 = apply_filters( 'imageurl5', $instance['imageurl5']);
  echo $args['before_widget'];

  //check each field for empty and display if not empty --- look at changing to a loop
   if ( !empty( $title ) ) //blar
    echo $args['before_title'] ."<a h2>". $title . "</h2>" . $args['after_title'];
   if ( !empty( $imageurl ) )
    echo "<img class='gallery-image' src=" . $imageurl . " height='250' width='' alt='missing img' >";
   if ( !empty( $imageurl1 ) )
    echo "<img class='gallery-image' src=" . $imageurl1 . " height='250' width='' alt='missing img' >";
   if ( !empty( $imageurl2 ) )
    echo "<img class='gallery-image' src=" . $imageurl2 . " height='250' width='' alt='missing img' >";
   if ( !empty( $imageurl3 ) )
    echo "<img class='gallery-image' src=" . $imageurl3 . " height='250' width='' alt='missing img' >";
   if ( !empty( $imageurl4 ) )
    echo "<img class='gallery-image' src=" . $imageurl4 . " height='250' width='' alt='missing img' >";
   if ( !empty( $imageurl5 ) )
    echo "<img class='gallery-image' src=" . $imageurl5 . " height='250' width='' alt='missing img' >";

  echo $args['after_widget'];
}

public function form( $instance ) {
  // outputs options form admin --- look at changing to a loop
  if ( isset( $instance[ 'title' ] ) ) {
      $title = $instance[ 'title' ];
  }
  if ( isset( $instance[ 'imageurl' ] ) ) {

      $imageurl = $instance[ 'imageurl' ];
  }
  if ( isset( $instance[ 'imageurl1' ] ) ) {

      $imageurl1 = $instance[ 'imageurl1' ];
  }
  if ( isset( $instance[ 'imageurl2' ] ) ) {

      $imageurl2 = $instance[ 'imageurl2' ];
  }
  if ( isset( $instance[ 'imageurl3' ] ) ) {

      $imageurl3 = $instance[ 'imageurl3' ];
  }
  if ( isset( $instance[ 'imageurl4' ] ) ) {

      $imageurl4 = $instance[ 'imageurl4' ];
   }
  if ( isset( $instance[ 'imageurl5' ] ) ) {

      $imageurl5 = $instance[ 'imageurl5' ];
   }
  else {
      $title = __( 'Gallery', 'text_domain' );
      $imageurl = __( 'No image URL', 'text_domain' );
      $imageurl1 = __( 'No image URL', 'text_domain' );
      $imageurl2 = __( 'No image URL', 'text_domain' );
      $imageurl3 = __( 'No image URL', 'text_domain' );
      $imageurl4 = __( 'No image URL', 'text_domain' );
      $imageurl5 = __( 'No image URL', 'text_domain' );
  }
  ?>
<!-- widget admin form -->
  <p>
  <label for"<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:'); ?></label>
  <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
  </p>
  <p>
  <label>URL's for images to display</label>
  <input class="widefat" id="<?php echo $this->get_field_id( 'imageurl' ); ?>" name="<?php echo $this->get_field_name( 'imageurl' ); ?>" type="text" value="<?php echo esc_attr( $imageurl ); ?>">
  <input class="widefat" id="<?php echo $this->get_field_id( 'imageurl1' ); ?>" name="<?php echo $this->get_field_name( 'imageurl1' ); ?>" type="text" value="<?php echo esc_attr( $imageurl1 ); ?>">
  <input class="widefat" id="<?php echo $this->get_field_id( 'imageurl2' ); ?>" name="<?php echo $this->get_field_name( 'imageurl2' ); ?>" type="text" value="<?php echo esc_attr( $imageurl2 ); ?>">
  <input class="widefat" id="<?php echo $this->get_field_id( 'imageurl3' ); ?>" name="<?php echo $this->get_field_name( 'imageurl3' ); ?>" type="text" value="<?php echo esc_attr( $imageurl3 ); ?>">
  <input class="widefat" id="<?php echo $this->get_field_id( 'imageurl4' ); ?>" name="<?php echo $this->get_field_name( 'imageurl4' ); ?>" type="text" value="<?php echo esc_attr( $imageurl4 ); ?>">
  <input class="widefat" id="<?php echo $this->get_field_id( 'imageurl5' ); ?>" name="<?php echo $this->get_field_name( 'imageurl5' ); ?>" type="text" value="<?php echo esc_attr( $imageurl5 ); ?>">
  </p>
<!-- end the form for admin panel -->
<?php
}

public function update( $new_instance, $old_instance ) {
  //process widget options and update --- look at making a loop
  $instance = array();
  $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
  $instance['imageurl'] = ( ! empty( $new_instance['imageurl'] ) ) ? strip_tags( $new_instance['imageurl'] ) : '';
  $instance['imageurl1'] = ( ! empty( $new_instance['imageurl1'] ) ) ? strip_tags( $new_instance['imageurl1'] ) : '';
  $instance['imageurl2'] = ( ! empty( $new_instance['imageurl2'] ) ) ? strip_tags( $new_instance['imageurl2'] ) : '';
  $instance['imageurl3'] = ( ! empty( $new_instance['imageurl3'] ) ) ? strip_tags( $new_instance['imageurl3'] ) : '';
  $instance['imageurl4'] = ( ! empty( $new_instance['imageurl4'] ) ) ? strip_tags( $new_instance['imageurl4'] ) : '';
  $instance['imageurl5'] = ( ! empty( $new_instance['imageurl5'] ) ) ? strip_tags( $new_instance['imageurl5'] ) : '';

  return $instance;
  }//end gallery widget
}
?>
<?php
//register widget gallery
function register_gallery_widget() {
  register_widget( 'Gallery_Widget' );
}
add_action( 'widgets_init', 'register_gallery_widget' );
?>

<?php
function mytheme_customize_register( $wp_customize ) {
   //All our sections, settings, and controls will be added here
	$wp_customize->add_section( 'mytheme_new_section_name' , array(
    	'title'      => __( 'Visible Section Name', 'mytheme' ),
    	'priority'   => 30,
	) );
}
add_action( 'customize_register', 'mytheme_customize_register' );
?>

<?php
// Redefine woocommerce_output_related_products()

/**
* WooCommerce Extra Feature
* --------------------------
*
* Change number of related products on product page
* Set your own value for 'posts_per_page'
*
*/
function woo_related_products_limit() {
	global $product;
	$args['posts_per_page'] = 6;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args' );
function jk_related_products_args( $args ) {
	$args['posts_per_page'] = 3; // 4 related products
	$args['columns'] = 1; // arranged in 2 columns
	return $args;
}
?>
