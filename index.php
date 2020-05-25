<?php get_header(); ?>
<?php $custom = new WP_Query(); ?>



<?php if(have_posts()) { ?> 
    <?php while(have_posts()) { ?> 
       <?php the_post(); ?>

        <h2>
            <a href="<?php the_permalink()?>" title="<?php the_title_attribute()?>"><?php the_title() ?> </a>
        </h2>

        <div>
            <?php practicetheme_post_meta(); ?>
        </div>

        <div>
            <?php the_excerpt()?>
        </div>

        <div>
            <?php practicetheme_readmore_link()?>
        </div>

    <?php } ?>
    <?php the_posts_pagination() ?>
    <?php do_action('_practicetheme_after_pagination'); ?>
    <?php do_action('_practicetheme_after_pagination2'); ?>


<?php } else { ?> 
    <p><?php _e('Sorry, no posts matched your criteria.', 'practicetheme'); ?></p>
<? } ?>

<?php get_footer(); ?>