<article <?php post_class('test-class');?> >
    <div class="post-inner">
        <?php if(get_the_post_thumbnail() !==''){?>
            <div class="post-thumbnail">
                <?php the_post_thumbnail('large'); ?>
            </div>
        <?php }?>
        <header class="post-header">
            <?php if (is_single()){?>
                <h1>
                    <?php the_title(); ?>
                </h1>
            <?php } else { ?>
                <h2>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                </h2>
            <?php }?>

            <div>
                <?php _themename_post_meta();?>
            </div>
        </header>
        <div>
            <?php if (is_single()){?>
            <?php the_content();
                  wp_link_pages();
            ?>
            <?php } else {?>
                <?php the_excerpt();?>
            <?php }?>

        </div>
        <?php if (is_single()){?>
            <footer class="post-footer">
                <?php if (has_category()){
                    echo '<div class="post-categories">';
                    /*translators: used between categories*/
                    $cats_list = get_the_category_list(esc_html__(', ', '_themename') );
                    /*translators: %s is the categories list*/
                    printf(esc_html__('Posted in: %s', '_themename'),$cats_list);
                    echo '</div>';}
                if (has_tag()){
                    echo '<div class="post-tags">';
                        $tags_list=get_the_tag_list('<ul> <li>', '</li><li>', '</li></ul>');
                        echo $tags_list;
                    echo '</div>';
                }?>

            </footer>
       <?php }?>

        <?php if (!is_single()) {_themename_readmore_link();}?>
    </div>
</article>