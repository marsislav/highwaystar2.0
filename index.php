
    <?php get_header();?>
    <main>
        <?php if (have_posts()){?>
            <?php while(have_posts()) {?>
                <?php the_post();?>
                <h2>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                </h2>
                <div>Posted on: <a href="<?php echo get_permalink();?>"> <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date();?> </time> </a>
            By: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'))?>"> <?php echo get_the_author();?></a>
            </div>
            <div>
            <?php the_excerpt();?>
            </div>
            <a href="<?php echo get_the_permalink();?>" title="<?php the_title_attribute(); ?>">Read more... <span class="u-screen-reder-text">About <?php the_title();?></span></a>
            <?php }?>
            <?php the_posts_pagination(); ?>
            
        <?php } else { ?>
                <h3>No posts yet :(</h3>
                <?php }?>
    </main>
            

       
    <?php get_footer();?>