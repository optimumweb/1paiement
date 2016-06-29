<?php wpbp_post_before(); ?>
<article id="question-<?php the_ID(); ?>" class="question recent-question">
    <?php wpbp_post_inside_before(); ?>
    <h3 class="question-title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h3>
    <p class="question-excerpt"><?php the_excerpt(); ?></p>
    <?php wpbp_post_inside_after(); ?>
</article>
<?php wpbp_post_after(); ?>