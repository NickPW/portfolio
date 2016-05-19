<?php
/* * ***********************Slider************************ */
add_shortcode('quick_home_slider', 'quick_home_slider');
function quick_home_slider() {
	extract(shortcode_atts(array(
		'limit' => ''), $atts));
	$output = '<div class="main-flex-slider">
				<ul class="slides list-unstyled">';
	// Start the Loop.
	query_posts(array('post_type' => 'sliders','posts_per_page' => $limit ));
	while ( have_posts() ) : the_post();
		$output.= '<li>
                    <h1 class="home-h1">
					' . get_the_title() . '
				    </h1>
                   </li>';
	endwhile; wp_reset_query();
	$output.='</ul>
			  </div>';
		
	return $output;
}
add_shortcode('quick_home_slider', 'quick_home_slider');
/* * ***********************************Testimonials******************************* */
function quick_testimonials($atts) {
    extract(shortcode_atts(array(
         'limit' => ''), $atts));
	
	$output = '<div id="testi-carousel" class="owl-carousel">';
				
				// Start the Loop.
				query_posts(array('post_type' => 'testimonials','posts_per_page' => $limit ));
				 while ( have_posts() ) : the_post();
				 
				  $output.= '<div>
                                <p class="lead color-reverse">
                                    <i class="fa fa-quote-left"></i>
				                     ' . get_the_content() .'
				                </p>
							  	<p class="author">-' . get_the_title() . '</p>
								</div>';
					 endwhile; wp_reset_query();
					 
					  $output.= '</div>';
		
    return $output;	
}
add_shortcode('testimonials', 'quick_testimonials');
/* * ***************Portfolios*************** */
function quick_portfolio($atts) {
    extract(shortcode_atts(array(
        'limit' => '9', 'title' => '', 'category' => ''), $atts));
    $work_args = array(
        'posts_per_page' => $limit,
        'orderby' => 'menu_order',
        'post_type' => 'portfolios',
        'category' => $category
    );
    $work_array = get_posts($work_args);
    $output ='';
    foreach ($work_array as $portfolio):
        $cats = wp_get_object_terms($portfolio->ID, 'category');
        $cat_slugs = '';
        $cat_names = '';
        if ($cats):
            $i = 1;
            foreach ($cats as $cat) {
                $cat_slugs .= $cat->slug . " ";
                if (count($cats) == $i) {
                    $cat_names.=$cat->name;
                } else {
                    $cat_names.=$cat->name . ' / ';
                }
                $i++;
            }
			
        endif;
		$img_url = wp_get_attachment_url( get_post_thumbnail_id( $portfolio->ID ) );    
        $output .='<div class="col-sm-6 col-md-4">
					  <div class="portfolio-col">
						 <div class="item-img-wrap ">
							' . get_the_post_thumbnail($portfolio->ID, 'full', array('class' => 'img-responsive', 'alt' => '')) . '
							<div class="item-img-overlay">
							   <a href="' . $img_url . '" class="show-image"> 
								   <span></span>  
							   </a>
						   </div>
						 </div>
						 <div class="work-desc">
							<h3>' . $portfolio->post_title . '</h3>
							<p>' . $cat_names . '</p>
						 </div>
					</div>
                  </div>';
    endforeach;
    return $output;
}
add_shortcode('portfolio', 'quick_portfolio');
/* * ***************Posts*************** */
function recent_quick_posts($atts){
       
    $q = new WP_Query(
       array( 'orderby' => 'date', 'posts_per_page' => '6')
     );
    
    $img_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
    $output = '';
    while($q->have_posts()) : $q->the_post();
     $output .= '<div class="col-sm-6 col-md-4">
                <div class="blog-col">
                    ' . get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive', 'alt' => '')) . '
                    <h3><a href="#">' . get_the_title() . '</a></h3>
                    <span>' . get_the_date() . '</span>
                    <p>' . get_the_content() . '</p>
                    <p class="text-right"><a href="#" class="btn btn-xs btn-blog">Read More</a></p>
                </div>
            </div>';
    endwhile;
    wp_reset_query();
    return $output;
}
add_shortcode('recent-posts', 'recent_quick_posts');

/* * *********************** Load Child Theme CSS & JS ************************ */

function child_styles() {
	// load child theme css ahead of parent stylesheet
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'child_styles' );

function enqueue_child_theme_styles_scripts() {
	// load plugin CSS
	wp_enqueue_style('flexslider', get_stylesheet_directory_uri() . '/css/flexslider.css');
	wp_enqueue_style('owl.carousel', get_stylesheet_directory_uri() . '/css/owl.carousel.css');
	wp_enqueue_style('magnific-popup', get_stylesheet_directory_uri() . '/css/magnific-popup.css');
	wp_enqueue_style('animate', get_stylesheet_directory_uri() . '/css/animate.css');

	// load plugin JS + custom JS
	wp_enqueue_script('jquery.sticky', get_stylesheet_directory_uri() . '/js/jquery.sticky.js', array ( 'jquery' ), 1.0, true);
	wp_enqueue_script('jquery.stellar.min', get_stylesheet_directory_uri() . '/js/jquery.stellar.min.js', array ( 'jquery' ), 1.0, true);
	wp_enqueue_script('jquery.flexslider', get_stylesheet_directory_uri() . '/js/jquery.flexslider.js', array ( 'jquery' ), 1.0, true);
	wp_enqueue_script('owl.carousel', get_stylesheet_directory_uri() . '/js/owl.carousel.js', array ( 'jquery' ), 1.0, true);
	wp_enqueue_script('jquery.waypoints', get_stylesheet_directory_uri() . '/js/jquery.waypoints.js', array ( 'jquery' ), 1.0, true);
	wp_enqueue_script('jquery.counterup', get_stylesheet_directory_uri() . '/js/jquery.counterup.js', array ( 'jquery' ), 1.0, true);
	wp_enqueue_script('jquery.magnific-popup', get_stylesheet_directory_uri() . '/js/jquery.magnific-popup.js', array ( 'jquery' ), 1.0, true);
	wp_enqueue_script('wow', get_stylesheet_directory_uri() . '/js/wow.js', array ( 'jquery' ), 1.0, true);
	wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/js/custom.js', array ( 'jquery' ), 1.0, true);
}
add_action('wp_enqueue_scripts', 'enqueue_child_theme_styles_scripts');