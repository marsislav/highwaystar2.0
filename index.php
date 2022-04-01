
    <?php get_header();?>
    <main>
        <?php if (have_posts()){?>
            <?php while(have_posts()) {?>
                <?php the_post();?>
                <h2>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                </h2>
                <div>
                    <?php hs_post_meta();?>
                </div>
            <div>
            <?php the_excerpt();?>
            </div>
            <?php hs_readmore_link();?>
            <?php }?>
            <?php the_posts_pagination(); ?>
            
        <?php } else { ?>
                <h3>No posts yet :(</h3>
                <?php }?>
    </main>
            

       
    <?php get_footer();?>