<?php get_header(); ?>
<main>
    a
    <div class="container">
        <div class="row">kjuhu
            <div class="col-md-<?php echo is_active_sidebar('primary-sidebar') ? '8' : '12'; ?>">
                <?php get_template_part('loop', 'index'); ?>
            </div>


            <?php if (is_active_sidebar('primary-sidebar')) { ?>
                <div class="col-md-4"><?php get_sidebar(); ?></div>
            <?php } ?>
        </div>
    </div>
</main>


<?php get_footer(); ?>