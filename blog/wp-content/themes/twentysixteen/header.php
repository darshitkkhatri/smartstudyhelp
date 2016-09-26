<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700%7cJosefin+Sans:400,700' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="/blog/wp-content/themes/twentysixteen/ssh/css/style.css" />
    <link rel="stylesheet" href="/blog/wp-content/themes/twentysixteen/ssh/css/responsive.css" />
</head>

<body <?php body_class(); ?>>
	
    <!--  ================== Start header ==================== -->
      <header id="header-1" class="header navbar-fixed-top   bg-black transparent-dark">
          <div class="container">
              <div class="row">
                  <!-- Static navbar -->
                  <nav class="navbar navbar-default  mega-menu clearfix">
                      <div class="navbar-header">
                          <a href="#menuu" id="toggle-sidebar"><i class="ti-menu-alt"></i></a><!--this btn for mobile nav-->
                          <a class="navbar-brand" href="#"><img src="/blog/wp-content/themes/twentysixteen/ssh/img/logo.png" alt=""></a>
                      </div>

                      <div id="navbar" class="navbar-collapse collapse">

                          <!-- <ul class="nav navbar-nav navbar-right">
                              <li><a href="#" id="toggle-search"><i class="ti-search"></i>&nbsp;search</a>
                                  <form class="top-search">
                                      <input type="text" placeholder="search..."/>
                                      <button type="submit"><i class="ti-search"></i></button>
                                  </form>
                              </li>
                          </ul> -->


                                <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown yamm-drop"><a href="/index.html" data-toggle="dropdown" class="active dropdown-toggle">Home</a>
                                        
                                    </li>

                                    <li class="dropdown yamm-drop"><a href="/about.html" data-toggle="dropdown" class="active dropdown-toggle">About Us </a>
                                        
                                    </li>

                                    <li class="dropdown yamm-drop"><a href="/services.html" data-toggle="dropdown" class="active dropdown-toggle">Services</a>
                                       <ul class="dropdown-menu">
                                             <li>
                                                <div class="yamm-content">
                                                   <ul>
                                                      <li><a href="/academic.html">Academic</a></li>
                                                      <li><a href="/consulting.html">Consulting</a></li>
                                                   </ul>
                                                </div>
                                             </li>
                                          </ul>
                                    </li>

                                    <li class="dropdown yamm-half"><a href="/payment.html" data-toggle="dropdown" class="active dropdown-toggle">Payment</a>
                                        
                                    </li>

                                    <li class="dropdown yamm-drop"><a href="/contactus.html" data-toggle="dropdown" class="active dropdown-toggle">Contact Us</a>
                                        
                                    </li>

                                     <li class="dropdown yamm-drop"><a href="/blog" data-toggle="dropdown" class="active dropdown-toggle">Blog</a>
                                        
                                    </li>

                                </ul>
                      </div><!--/.nav-collapse -->
                  </nav>
              </div><!--end row -->
          </div><!--end container -->
      </header><!-- End header -->
	
    <!--  ================== start mobile menu  ==================== -->
    <nav id="menuu">
        <ul>
            

            <li><a href="#">Home</a>
                
            </li>

            <li><a href="#">About Us </a>
                
            </li>

            <li><a href="#">Services</a>
                
            </li>

            <li><a href="#">Payment</a>
                
            </li>

            <li><a href="#">Contact Us</a>
                
            </li>
            <li><a href="#">Blog</a>
                
            </li>

        </ul>
    </nav>

    <!--  ================== End mobile menu  ==================== -->
	
	
	
	
	
<div id="page" class="site">
	<div class="site-inner">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>

		<header id="masthead" class="site-header" role="banner" style="display:none;">
			<div class="site-header-main">
				<div class="site-branding">
					<?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->

				<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
					<button id="menu-toggle" class="menu-toggle"><?php _e( 'Menu', 'twentysixteen' ); ?></button>

					<div id="site-header-menu" class="site-header-menu">
						<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu',
									 ) );
								?>
							</nav><!-- .main-navigation -->
						<?php endif; ?>

						<?php if ( has_nav_menu( 'social' ) ) : ?>
							<nav id="social-navigation" class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'social',
										'menu_class'     => 'social-links-menu',
										'depth'          => 1,
										'link_before'    => '<span class="screen-reader-text">',
										'link_after'     => '</span>',
									) );
								?>
							</nav><!-- .social-navigation -->
						<?php endif; ?>
					</div><!-- .site-header-menu -->
				<?php endif; ?>
			</div><!-- .site-header-main -->

			<?php if ( get_header_image() ) : ?>
				<?php
					/**
					 * Filter the default twentysixteen custom header sizes attribute.
					 *
					 * @since Twenty Sixteen 1.0
					 *
					 * @param string $custom_header_sizes sizes attribute
					 * for Custom Header. Default '(max-width: 709px) 85vw,
					 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
					 */
					$custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
				?>
				<div class="header-image">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</a>
				</div><!-- .header-image -->
			<?php endif; // End header image check. ?>
		</header><!-- .site-header -->

		<div id="content" class="site-content">
