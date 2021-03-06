<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta <?php bloginfo( 'charset' ); ?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<title><?php
				global $page, $paged;
				$site_description = get_bloginfo( 'description', 'display' );
			 	if ($site_description && ( is_home() || is_front_page() )) {
					bloginfo('name');
					echo " - $site_description";
				} else {
					echo trim(wp_title('',0));
					if ( $paged >= 2 || $page >= 2 )
						echo ' - ' . sprintf( __( '第%s页' ), max( $paged, $page ) );
					echo ' | ' ;
					bloginfo('name');
				}
			?></title>
		<meta name="keywords" content="<?php echo limi_get_talk( 'text_seokey','L-Talk_Design by limi'); ?>">
		<meta name="description" content="<?php echo limi_get_talk( 'text_seodes','L-Talk_Design by limi'); ?>">
		<?php wp_head();?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/icon/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/style.css">	
		<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
		<script src="<?php echo get_template_directory_uri();?>/js/preload.js"></script>
		<script type="text/javascript">
			$.QianLoad.PageLoading({
				sleep: 50
			});
		</script>
	</head>
	<body>
	<div class="loading">
		<svg xmlns="http://www.w3.org/2000/svg" style="width: 60px; height: 70px;">
		    <g>
		        <path class="cls-1" d="M397.17,198.17h29l-21,52h21l-5,15h-51Z" transform="translate(-368.68 -197.17)"/>
		    </g>
		</svg>
	</div>
	<header class="main_b">
		<div class="top-header">
			<?php $def_bg =  get_template_directory_uri();?>
			<div class="logo"><a href="<?php echo home_url( '/' ); ?>" title="回到主页"><img src="<?php echo limi_get_talk( 'logo_uploader',$def_bg.'/images/logo.png'); ?>" /></a></div>
		</div>
		<div class="header">
			<div class="mouse-follow-nav">
					<?php wp_nav_menu(); ?> 
					<div class="line_100"></div>
			</div>
			<span class="target" style="z-index: 2"></span>
		</div>
		
		<!-- bootstrap nav -->
		
		<div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
		      <div class="container">
		        <div class="navbar-header nav-title ">
		          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
				  <span class="logo"><a href="<?php echo home_url( '/' ); ?>" title="回到主页"><img src="<?php echo limi_get_talk( 'logo_uploader',$def_bg.'/images/logo.png'); ?>" /></a></span>
		        </div>
		        <div class="collapse navbar-collapse navbar-right is-collapse">
		         <?php
		         wp_nav_menu( array(
		         'theme_location' => 'header-menu',
		         'container' => '',
		         'menu_class' => 'nav navbar-nav',
		         'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
		         'before' => '',
		         'after' => '',
		         'walker' => new wp_bootstrap_navwalker())
		         );
		         ?>
		        </div><!-- /.nav-collapse -->
		      </div><!-- /.container -->
		    </div>
	</header>