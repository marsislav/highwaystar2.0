<article <?php post_class('test-class');?> >
    <h2>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
    </h2>
    <div>
        <?php _themename_post_meta();?>
    </div>
    <div>
        <?php the_excerpt();?>
    </div>
    <?php _themename_readmore_link();?>
    <?php echo _themename_delete_post();?>
</article>