
    <?php get_header();?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-<?php echo is_active_sidebar('primary-sidebar') ? '8' : '12';?>">

            <?php if (have_posts()){?>
                <?php while(have_posts()) {?>
                    <?php the_post();?>
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
                        </article>
                <?php }?>
                <?php the_posts_pagination(); ?>

            <?php } else { ?>
                    <h3><?php echo esc_html_e('No posts yet :(' , 'hs');?></h3>
                    <?php }?>
            </div>
            </div>

            <?php if (is_active_sidebar('primary-sidebar')){?>
                <div class="col-md-4"><?php get_sidebar();?></div>
            <?php } ?>

        </div>
    </main>
            

       
    <?php get_footer();?>