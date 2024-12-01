<?php
if( ! defined('NWINITIALIZER_DEV') ) define('NWINITIALIZER_DEV', true);
## include('includes/functions.php');
include('includes/init.php');

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

register_post_type( 'testimonials',
    array(
        'labels'                => array(
            'name'              => __( 'Testimonials' ),
            'singular_name'     => __( 'Testimonial' )
            ),
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'supports'              => array( 'title', 'editor', "thumbnail", "author", "custom-fields", "comments"),
        'rewrite'               => array( 'slug' => 'testimonials', 'with_front' => true ),
        'has_archive'           => true
    ) 
);


register_nav_menus(
	array(
		'main-nav' => __( 'The Main Menu', 'nwinitializr' ),
		'footer-nav' => __( 'The Footer Menu', 'nwinitializr' ),
		'commercial-markets-nav' => __( 'The Commercial Markets Top Menu', 'nwinitializr' ),
		'commercial-markets-footer-nav' => __( 'The Commercial Markets Footer Menu', 'nwinitializr' ),
		'commercial-markets-block-nav' => __( 'The Commercial Markets Block Navigation', 'nwinitializr' )
	)
);
include('includes/images.php');
include('includes/embedded.plugins.php');
## include('includes/bundled.plugins.php');

include('includes/post-types/load-post-types.php');

include('includes/sidebars.php');
add_action( 'widgets_init', 'nwinitializr_register_sidebars' );
## include('includes/custom.php');
include('includes/tweaks.php');

/* Site Optimization - Removing several assets from Home page that we dont need */

// Remove Assets from HOME page only
function remove_home_assets() {
  if (is_front_page()) {
      
	  wp_dequeue_style('responsive-lightbox-nivo_lightbox-css');
	  wp_dequeue_style('responsive-lightbox-nivo_lightbox-css-d');
	  wp_dequeue_style('wp-lightbox-2.min.css');
	  
	  wp_dequeue_script('responsive-lightbox-nivo_lightbox-js');
	  wp_dequeue_script('responsive-lightbox-lite-script-js-extra');
	  wp_dequeue_script('responsive-lightbox-lite-script-js');
	  wp_dequeue_script('nivo-slider-js');
	  wp_dequeue_script('wp-jquery-lightbox-js-extra');
	  wp_dequeue_script('wp-jquery-lightbox-js');
	  
  }
  
};
add_action( 'wp_enqueue_scripts', 'remove_home_assets', 99999 );

## include('includes/theme-options.php');

## function my_page_template_redirect()
## {
## 
##     if( is_page( 'newsletter-registration' ) && !isset($_GET['ne'])  )
##     {
##         wp_redirect( home_url( '/newsletter/' ) );
##         exit();
##     }
## }
## add_action( 'template_redirect', 'my_page_template_redirect' );

# commenting out since it's breaking metaslider search
/*
function searchfilter($query) {

    if ($query->is_search && !is_admin() ) {
        $query->set('post_type',array('page', 'project'));
    }
return $query;
}
add_filter('pre_get_posts','searchfilter');
*/

// added to include location schema markup
function my_change_mce_options( $init ) {
  $ext = 'span[*]'; // added all options because adding this actually overwrote the allowed span attributes (id, class, style, etc) and I couldn't find the base list, so i don't want to drop support for anything that currently exists
  if ( isset( $init['extended_valid_elements'] ) ) {
    $init['extended_valid_elements'] .= ',' . $ext;
  } else {
    $init['extended_valid_elements'] = $ext;
  }
  return $init;
}

add_filter('tiny_mce_before_init', 'my_change_mce_options');

function pixelsPick($currentPage) {
$targetPage1 = "/custom-kitchen-special-offer/thank-you/";
$targetPage2 = "/special-financing-offer/thank-you/";
$targetPage3 = "/10-kitchens-under-10k-special-offer/thank-you/";
$targetPage4 = "/custom-kitchen-new-special-offer/thank-you/";
$targetPage5 = "/10-kitchens-under-10k-new-special-offer/thank-you/";

if($currentPage == $targetPage1) {
?>
    <!--
    Start of DoubleClick Floodlight Tag: Please do not remove
    Activity name of this tag: HTV - WCVB - Norfolk Kitchen & Bath_Conversion ñ Custom Kitchen_4/21/2016
    URL of the webpage where the tag is expected to be placed: http://www.coreaudience.com
    This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
    Creation Date: 04/21/2016
    -->
    <script type="text/javascript">
    var axel = Math.random() + "";
    var a = axel * 10000000000000;
    document.write('<img src="https://ad.doubleclick.net/ddm/activity/src=5568843;type=invmedia;cat=smut2dje;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=' + a + '?" width="1" height="1" alt=""/>');
    </script>
    <noscript>
    <img src="https://ad.doubleclick.net/ddm/activity/src=5568843;type=invmedia;cat=smut2dje;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=1?" width="1" height="1" alt=""/>
    </noscript>
    <!-- End of DoubleClick Floodlight Tag: Please do not remove -->
<?php
} elseif($currentPage == $targetPage2){
?>
    <!--
    Start of DoubleClick Floodlight Tag: Please do not remove
    Activity name of this tag: HTV - WCVB - Norfolk Kitchen & Bath_Conversion ñ Finance_4/21/2016
    URL of the webpage where the tag is expected to be placed: http://www.coreaudience.com
    This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
    Creation Date: 04/21/2016
    -->
    <script type="text/javascript">
    var axel = Math.random() + "";
    var a = axel * 10000000000000;
    document.write('<img src="https://ad.doubleclick.net/ddm/activity/src=5568843;type=invmedia;cat=cudciipt;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=' + a + '?" width="1" height="1" alt=""/>');
    </script>
    <noscript>
    <img src="https://ad.doubleclick.net/ddm/activity/src=5568843;type=invmedia;cat=cudciipt;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=1?" width="1" height="1" alt=""/>
    </noscript>
    <!-- End of DoubleClick Floodlight Tag: Please do not remove -->   
<?php
} elseif($currentPage == $targetPage3){
?>        
    <!--
    Start of DoubleClick Floodlight Tag: Please do not remove
    Activity name of this tag: HTV - WCVB - Norfolk Kitchen & Bath_Conversion – 10 under 10_7/18/2016
    URL of the webpage where the tag is expected to be placed: http://www.norfolkkitchenandbath.com
    This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
    Creation Date: 07/18/2016
    -->
    <script type="text/javascript">
    var axel = Math.random() + "";
    var a = axel * 10000000000000;
    document.write('<img src="https://ad.doubleclick.net/ddm/activity/src=5568843;type=invmedia;cat=ppqmswek;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=' + a + '?" width="1" height="1" alt=""/>');
    </script>
    <noscript>
    <img src="https://ad.doubleclick.net/ddm/activity/src=5568843;type=invmedia;cat=ppqmswek;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=1?" width="1" height="1" alt=""/>
    </noscript>
    <!-- End of DoubleClick Floodlight Tag: Please do not remove -->
<?php
} elseif($currentPage == $targetPage4){
?>
<!--
Start of DoubleClick Floodlight Tag: Please do not remove
Activity name of this tag: WCVB - Norfolk Kitchen & Bath_Conversion_Custom Kitchen_8/04/2016
URL of the webpage where the tag is expected to be placed: http://www.norfolkkitchenandbath.com
This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
Creation Date: 08/04/2016
-->
<script type="text/javascript">
var axel = Math.random() + "";
var a = axel * 10000000000000;
document.write('<img src="https://ad.doubleclick.net/ddm/activity/src=5568843;type=invmedia;cat=noi6xxiq;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=' + a + '?" width="1" height="1" alt=""/>');
</script>
<noscript>
<img src="https://ad.doubleclick.net/ddm/activity/src=5568843;type=invmedia;cat=noi6xxiq;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=1?" width="1" height="1" alt=""/>
</noscript>
<!-- End of DoubleClick Floodlight Tag: Please do not remove -->

<!--
Start of DoubleClick Floodlight Tag: Please do not remove
Activity name of this tag: Custom Kitchen_Conversion pixel_8/11/2016
URL of the webpage where the tag is expected to be placed: http://www.norfolkkitchenandbath.com/custom-kitchen-special-offer/?
This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
Creation Date: 08/11/2016
-->
<script type="text/javascript">
var axel = Math.random() + "";
var a = axel * 10000000000000;
document.write('<iframe src="https://5935800.fls.doubleclick.net/activityi;src=5935800;type=10und00;cat=custo0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=' + a + '?" width="1" height="1" frameborder="0" style="display:none"></iframe>');
</script>
<noscript>
<iframe src="https://5935800.fls.doubleclick.net/activityi;src=5935800;type=10und00;cat=custo0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=1?" width="1" height="1" frameborder="0" style="display:none"></iframe>
</noscript>
<!-- End of DoubleClick Floodlight Tag: Please do not remove -->
<?php
} elseif($currentPage == $targetPage5){
?> 
<!--
Start of DoubleClick Floodlight Tag: Please do not remove
Activity name of this tag: WCVB - Norfolk Kitchen & Bath_Conversion_10 under 10K_8/04/2016
URL of the webpage where the tag is expected to be placed: http://www.norfolkkitchenandbath.com
This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
Creation Date: 08/04/2016
-->
<script type="text/javascript">
var axel = Math.random() + "";
var a = axel * 10000000000000;
document.write('<img src="https://ad.doubleclick.net/ddm/activity/src=5568843;type=invmedia;cat=i12rhueq;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=' + a + '?" width="1" height="1" alt=""/>');
</script>
<noscript>
<img src="https://ad.doubleclick.net/ddm/activity/src=5568843;type=invmedia;cat=i12rhueq;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=1?" width="1" height="1" alt=""/>
</noscript>
<!-- End of DoubleClick Floodlight Tag: Please do not remove -->

<!--
Start of DoubleClick Floodlight Tag: Please do not remove
Activity name of this tag: 10 Under 10K_Conversion Pixel_8/11/2016
URL of the webpage where the tag is expected to be placed: http://www.norfolkkitchenandbath.com/10-kitchens-under-10k-special-offer/?
This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
Creation Date: 08/11/2016
-->
<script type="text/javascript">
var axel = Math.random() + "";
var a = axel * 10000000000000;
document.write('<iframe src="https://5935800.fls.doubleclick.net/activityi;src=5935800;type=10und00;cat=10und0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=' + a + '?" width="1" height="1" frameborder="0" style="display:none"></iframe>');
</script>
<noscript>
<iframe src="https://5935800.fls.doubleclick.net/activityi;src=5935800;type=10und00;cat=10und0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=1?" width="1" height="1" frameborder="0" style="display:none"></iframe>
</noscript>
<!-- End of DoubleClick Floodlight Tag: Please do not remove -->
<?php
} else{
 ?>
<!--
Start of DoubleClick Floodlight Tag: Please do not remove
Activity name of this tag: HTV - WCVB - Norfolk Kitchen & Bath_ RTG_4/21/2016
URL of the webpage where the tag is expected to be placed: http://www.coreaudience.com
This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
Creation Date: 04/21/2016
-->
<script type="text/javascript">
var axel = Math.random() + "";
var a = axel * 10000000000000;
document.write('<img src="https://ad.doubleclick.net/ddm/activity/src=5568843;type=invmedia;cat=qb41akqj;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=' + a + '?" width="1" height="1" alt=""/>');
</script>
<noscript>
<img src="https://ad.doubleclick.net/ddm/activity/src=5568843;type=invmedia;cat=qb41akqj;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=1?" width="1" height="1" alt=""/>
</noscript>
<!-- End of DoubleClick Floodlight Tag: Please do not remove -->
<?php
}  
}

if ( ! function_exists( 'twentyfourteen_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 *
 * @since Twenty Fourteen 1.0
 *
 * @global WP_Query   $wp_query   WordPress Query object.
 * @global WP_Rewrite $wp_rewrite WordPress Rewrite object.
 */
function twentyfourteen_paging_nav() {
	global $wp_query, $wp_rewrite;

	// Don't print empty markup if there's only one page.
	if ( $wp_query->max_num_pages < 2 ) {
		return;
	}

	$paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
	$pagenum_link = html_entity_decode( get_pagenum_link() );
	$query_args   = array();
	$url_parts    = explode( '?', $pagenum_link );

	if ( isset( $url_parts[1] ) ) {
		wp_parse_str( $url_parts[1], $query_args );
	}

	$pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
	$pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

	$format  = $wp_rewrite->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
	$format .= $wp_rewrite->using_permalinks() ? user_trailingslashit( $wp_rewrite->pagination_base . '/%#%', 'paged' ) : '?paged=%#%';

	// Set up paginated links.
	$links = paginate_links( array(
		'base'     => $pagenum_link,
		'format'   => $format,
		'total'    => $wp_query->max_num_pages,
		'current'  => $paged,
		'mid_size' => 1,
		'add_args' => array_map( 'urlencode', $query_args ),
		'prev_text' => __( '&larr; Previous', 'twentyfourteen' ),
		'next_text' => __( 'Next &rarr;', 'twentyfourteen' ),
	) );

	if ( $links ) :

	?>
	<nav class="navigation paging-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'twentyfourteen' ); ?></h1>
		<div class="pagination loop-pagination">
			<?php echo $links; ?>
		</div><!-- .pagination -->
	</nav><!-- .navigation -->
	<?php
	endif;
}
endif;

?>
