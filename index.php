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


<?php } else { ?> 
    <p><?php _e('Sorry, no posts matched your criteria.', 'practicetheme'); ?></p>
<? } ?>
<?php 

$comments = 1;
printf(_n('One comment', '%s comments', $comments, 'practicetheme'), $comments);

_ex('Post', 'noun', 'practicetheme');


$city = 'london';




printf(
    /* translators: % is the city name */
    esc_html( 'Your city is %s', 'firsttheme' ),
    $city
);


?>

<?php get_footer(); ?>