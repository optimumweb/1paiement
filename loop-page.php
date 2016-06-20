<?php /* Start loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
    <?php wpbp_post_before(); ?>
    <article id="page-<?php the_ID(); ?>" class="page">
        <?php wpbp_post_inside_before(); ?>
        <?php if ( !get_post_meta(get_the_ID(), 'hide_the_title', true) ) : ?>
            <?php if ( has_featured_image() ) : ?>
                <header class="page-header page-header-with-bg" data-parallax="scroll" data-position="top" data-image-src="<?php echo get_featured_image_url(); ?>">
            <?php else : ?>
                <header class="page-header">
            <?php endif; ?>
                <h1 class="page-title"><?php the_title(); ?></h1>
                <?php if ( $page_lead = get_post_meta(get_the_ID(), 'page_lead', true) ) : ?>
                    <p class="lead page-lead"><?php echo $page_lead; ?></p>
                <?php endif; ?>
            </header>
        <?php endif; ?>
        <section class="page-content">
            <?php the_content(); ?>
        </section>
        <footer class="page-footer">
            <?php wp_link_pages(array( 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'wpbp'), 'after' => '</p></nav>' )); ?>
        </footer>
        <div class="clear"></div>
        <?php wpbp_post_inside_after(); ?>
    </article>
    <?php wpbp_post_after(); ?>
<?php endwhile; // End the loop ?>