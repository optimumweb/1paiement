<?php wpbp_post_before(); ?>
<article id="post-<?php the_ID(); ?>" class="post recent-post">
    <?php wpbp_post_inside_before(); ?>
    <h4 class="post-title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h4>
    <div class="post-content-preview">
        <?php the_content(); ?>
    </div>
    <?php wpbp_post_inside_after(); ?>
</article>
<?php wpbp_post_after(); ?>

