<?php /* Start loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
    <?php wpbp_post_before(); ?>
    <article id="page-<?php the_ID(); ?>" class="page">
        <?php wpbp_post_inside_before(); ?>
        <?php the_content(); ?>
        <div class="clear"></div>
        <?php wpbp_post_inside_after(); ?>
    </article>
    <?php wpbp_post_after(); ?>
<?php endwhile; // End the loop ?>