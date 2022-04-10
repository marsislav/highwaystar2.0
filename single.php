
<?php get_header();?>
<?php
$layout= _themename_meta(get_the_ID(),'_themename_post_layout', 'full');
$sidebar =is_active_sidebar('primary-sidebar');
if ($layout==='sidebar' && !$sidebar){
    $layout='full';
}
?>
<main>
    <div class="container single-post-<?php echo $layout;?>">
        <div class="row">
            <div class="col-md-<?php echo $layout==='sidebar' ? '8' : '12'; ?> ">

                <?php if (have_posts()){?>
                    <?php while(have_posts()) {?>
                        <?php the_post();?>
                        <?php get_template_part ('template-parts/post/content'); ?>
                        <?php if (get_theme_mod('_themename_display_author_info', true)){
                        get_template_part ('template-parts/single/author');} ?>
                    <?php }?>
                    <?php get_template_part ('template-parts/single/navigation'); ?>
                <?php } else { ?>
                    <?php get_template_part ('template-parts/post/content', 'none'); ?>
                <?php }?>

            </div>
        </div>
<?php if ($layout==='sidebar'){ ?>
        <div class="col-md-4"><?php get_sidebar();?></div>
        <?php } ?>
    </div>
</main>



<?php get_footer();?>