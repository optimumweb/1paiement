<?php get_template_part('head'); ?>
    <?php wpbp_wrap_before(); ?>
    <div id="wrap" role="document">
        <?php wpbp_header_before(); ?>
        <header id="header" role="banner">
            <?php wpbp_header_inside_before(); ?>
            <div class="container fluid">
                <div class="grid_4">
                    <h1 id="site-title">
                        <a href="<?php echo home_url(); ?>/"><img src="<?php echo THEME_URI; ?>/img/logo.png" width="800" height="350" alt="<?php bloginfo('name'); ?>" /></a>
                    </h1>
                </div>
                <div class="grid_8">
                    <div id="header-widgets">
                        <?php dynamic_sidebar("Header Widgets"); ?>
                    </div>
                </div>
            </div>
            <?php wpbp_header_inside_after(); ?>
        </header>
        <?php wpbp_header_after(); ?>
        <nav id="main-nav" role="navigation">
            <div class="container">
                <div class="grid_12">
                    <?php wp_nav_menu( array( 'theme_location' => 'primary_navigation' ) ); ?>
                    <div class="clear"></div>
                </div>
            </div>
        </nav>
