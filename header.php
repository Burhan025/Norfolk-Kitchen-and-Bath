<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie10 lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]--><head>
        <title><?php wp_title(); ?></title>
        <meta name="google-site-verification" content="6hR8M_Y1cLPBTD5iCtGlv0uRKC-9i-KpQcWRLm4NlNg" />
		<meta name="p:domain_verify" content="de75fcad20ab672f107b2a9aed1b8faf"/>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--<link rel="stylesheet" href="https://use.typekit.net/laz4kjg.css">-->
		<!--<link rel="stylesheet" type="text/css" href="<?php ## bloginfo('template_directory'); ?>/css/vendor/font-awesome.css" />-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
		<!--<link href='//fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,700,600,800' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>		
		<link href='//fonts.googleapis.com/css?family=Kameron:400,700' rel='stylesheet' type='text/css'>	-->	
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;700&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/vendor/normalize.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/main.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrapgrid.css" />
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <meta name="application-name" content="Norfolk Kitchen &amp; Bath"/>
        <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png">
		<meta name="facebook-domain-verification" content="9886kgkl7k7ogm03k9trel6iv1meuk" />
        <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico"><![endif]-->      
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <!-- <script>window.jQuery || document.write('<script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/vendor/jquery-1.10.1.min.js"><\/script>')</script>-->
        <!--[if (gte IE 6)&(lte IE 8)]><script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/vendor/selectivizr-min.js"></script><![endif]-->
		<script>
		 var $ = jQuery;
		</script>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<!-- <script src='http://widget.rlcdn.net/widget/rl_chatwidget.js'></script>
		<script>var id ='USA1860499'; var rl_adid='69097'; var rl_key = '169201'; rl_chatinit(id, rl_adid, rl_key) ;</script> -->
		<!--<script type="text/javascript">var switchTo5x=true;</script>
		<script type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script>
		<script type="text/javascript">stLight.options({publisher: "b70f39dc-25b6-465a-b17b-f44f517a0883", publisherGA:"UA-6830191-1", doNotHash: true, doNotCopy: true, hashAddressBar: false});</script>-->

		<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5efe462fc666750012908190&product=inline-share-buttons&cms=sop' async='async'></script>

		
        <?php if(!isset($_GET['fl_builder'])): ?>
			<script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/vendor/restive.min.js"></script>
			<script>
				$('html').restive({
					breakpoints: ['480','1024'],
					classes: ['css-480','css-1024'],
					force_dip: true, 
					turbo_classes: 'is_mobile=mobi,is_phone=phone,is_tablet=tablet,is_landscape=landscape'
				});
			</script>
		<?php endif; ?>
		
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/slick.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/slick-theme.css" />
		
		<?php // wordpress head functions ?>
        <?php wp_head(); ?>
        <?php // end of wordpress head ?>
		
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/nw.css" />
		
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
			
			ga('create', 'UA-6830191-1', 'auto');
			ga('send', 'pageview');
		</script>
        
        <script>
			document.addEventListener( 'wpcf7mailsent', function( event ) {
				ga('send', 'event', 'Contact Form', 'submit');
			}, false );
		</script>
        
		
		
		<style>
			.nw-gradient-white:after{
			content:"";
			display:block;
			position:absolute;
			right:100%;
			bottom:0;
			height:210px;
			right:0;
			left:0;
			z-index:1;	
			/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#ffffff+0,ffffff+100&1+0,0+100;White+to+Transparent */
			background: -moz-linear-gradient(bottom, rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%); /* FF3.6-15 */
			background: -webkit-linear-gradient(bottom, rgba(255,255,255,1) 0%,rgba(255,255,255,0) 100%); /* Chrome10-25,Safari5.1-6 */
			background: linear-gradient(to top, rgba(255,255,255,1) 0%,rgba(255,255,255,0) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#00ffffff',GradientType=0 ); /* IE6-9 */
		}
		
		.nw_image_blocks .main,
		.home-intro-content{
			position:relative;
			z-index:1;	
		}
		
		
		</style>
		
		


		
		<script type="text/javascript">
		//clearInterval(myInterval);
		function play_testimonials(){
			var currentEl = jQuery('.testimonial_slideshow  blockquote.active');
			var nextEl = jQuery('.testimonial_slideshow  blockquote.active').next();
			currentEl.removeClass('active').hide();
			if(nextEl.length){		
				nextEl.addClass('active').fadeIn();
			}else{
				jQuery('.testimonial_slideshow blockquote:first-child').addClass('active').fadeIn();	
			}
		};
		
			jQuery(document).ready(function(e){
				jQuery('.testimonial_slideshow  blockquote:first-child').addClass('active').fadeIn();
				var timer=9000;
				if(jQuery('.testimonial_slideshow  blockquote').length > 1){
						var myInterval = setInterval(function(){
							play_testimonials();
						}, timer);
						
						
						jQuery('.testimonial_slideshow .nav_left').click(function(){
							var currentEl = jQuery('.testimonial_slideshow  blockquote.active');
							var nextEl = jQuery('.testimonial_slideshow  blockquote.active').prev();
							currentEl.removeClass('active').hide();
							if(nextEl.length){		
								nextEl.addClass('active').fadeIn();
							}else{
								jQuery('.testimonial_slideshow blockquote:last-child').addClass('active').fadeIn();	
							}
						});
						
						jQuery('.testimonial_slideshow .nav_right').click(function(){
							var currentEl = jQuery('.testimonial_slideshow  blockquote.active');							
							var nextEl = jQuery('.testimonial_slideshow  blockquote.active').next();
							currentEl.removeClass('active').hide();
							if(nextEl.length){		
								nextEl.addClass('active').fadeIn();
							}else{
								jQuery('.testimonial_slideshow blockquote:first-child').addClass('active').fadeIn();	
							}
						});
						
						jQuery('.testimonial_slideshow .testimonial_wrapper').hover(function(){
							clearInterval(myInterval);
						}, function(){
							myInterval = setInterval(function(){
								play_testimonials();
							}, timer);
						});
						
					}else{
						jQuery('.testimonial_slideshow .nav_right, .testimonial_slideshow .nav_right').hide();
					}
			});
		</script>
		<!-- Facebook Pixel Code -->
		<!--<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window,document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '253536862108805'); 
		fbq('track', 'PageView');
		</script>
		<noscript>
		<img height="1" width="1" 
		src="https://www.facebook.com/tr?id=253536862108805&ev=PageView
		&noscript=1"/>
		</noscript><script charset="UTF-8" src="https://www.norfolkkitchenandbath.com/wp-content/neptune/a683558ed203e447961621824e985095_1.js" async></script>-->
		<!-- End Facebook Pixel Code -->
    </head>
	<body <?php body_class(); ?>>
        
        <div class="hidden">
            <?php 
            $currentPage = $_SERVER['REQUEST_URI'];
            pixelsPick($currentPage); 
            ?>
        </div>
        
        
		<!--[if lt IE 7]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->
		
	<?php if ( is_page_template( 'page-blank.php' ) ) {?>
	<?php } else {?>
		<?php if (get_field('header_announcement', 'options')) { ?>
		<div class="header-announcement">
			<div class="container">
			<?php echo get_field('header_announcement', 'options'); ?>
			</div>
		</div>
		<?php } ?>
		<?php echo get_template_part( 'content', 'upper-header' ); ?>
		<?php echo get_template_part( 'content', 'lower-header' ); ?>
	<?php } ?>