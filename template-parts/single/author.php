<div class="post-author">
    <h2 class="screen-reader-text"><?php esc_attr_e('About the author', '_themename'); ?></h2>
    <?php
    $author_id = get_the_author_meta('ID');
    $author_posts = get_the_author_posts();
    $author_display = get_the_author();
    $author_post_url = get_author_posts_url($author_id);
    $author_description = get_the_author_meta('user_description');
    $author_website = get_the_author_meta('user_url');
    ?>
    <div class="post-author-avatar">
        <?php echo get_avatar($author_id, 250); ?>
    </div>
    <div class="post-author-info">
        <?php if ($author_website) { ?>
        <a href="<?php echo esc_url($author_website); ?>" target="_blank">
            <?php } ?>
            <div class="post-author-name"><?php echo esc_html($author_display); ?>
                <?php if ($author_website) { ?>
        </a>
    <?php } ?>
    </div>
    <div class="author-info">
        <a href="<?php echo esc_url($author_post_url); ?>">
            <?php printf(esc_html(_n('%s post', '%s posts', $author_posts, '_themename')), number_format_i18n($author_posts)); ?>
        </a>
    </div>
    <div class="author-desc">
            <?php echo esc_html( $author_description); ?>
    </div>
</div>
</div>

