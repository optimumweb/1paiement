<?php wpbp_post_before(); ?>
<article id="question-<?php the_ID(); ?>" class="question recent-question">
    <?php wpbp_post_inside_before(); ?>
    <h4 class="question-title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h4>
    <div class="question-content">
        <?php the_content(); ?>
    </div>
    <?php wpbp_post_inside_after(); ?>
</article>
<?php wpbp_post_after(); ?>