<?php
function _themename_comment_callback($comment, $args, $depth)
{
    ?>
<li id="<?php comment_ID(); ?>" <?php comment_class(['comment', $comment->comment_parent ? 'comment-child' : '']) ?>>
    <article class="comment-body" id="div-comment-<?php comment_ID(); ?>">
        <?php if($args['avatar_size']!=0) echo get_avatar($comment, $args['avatar_size'], false, false, array('class' => 'comment-avatar')) ?>
        <?php edit_comment_link(esc_html__('Edit Comment', '_themename'), '<span class="comment-edit-link">', '</span>'); ?>
        <div class="comment-content">
            <div class="comment-author">
                <?php get_comment_author_link($comment); ?>
            </div>
            <a href="<?php echo esc_url(get_comment_link($comment, $args)) ?>" class="comment-time">
                <time datetime="<?php comment_time('c'); ?>"> <?php
                    printf(esc_html__('%s ago', '_themename'), human_time_diff(get_comment_time('U'), current_time('U')));
                    ?> </time>
            </a>
            <?php if ($comment->comment_approved=='0') {?>
    <p class="comment-awaiting"><?php esc_html_e('Your comment is awaiting moderation', '_themename') ;?></p>
    <?php } ?>
        <?php comment_text();?>
            <?php
                comment_reply_link(array (
                      'depth'=>$depth,
                      'max_depth'=>$args['max_depth'],
                      'add_bellow'=>'div-comment',
                      'before'=>'<div class="comment-reply-link">',
                      'after'=>'</div>'
                ))
            ?>
        </div>
    </article>
    <?php
} ?>