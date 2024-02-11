<?php

/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * 用于显示评论的模板。
 * 包含当前评论（已有评论）和评论表单（评论输入框）的页面区域。
 *
 * @package electro
 */


/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the passwordd we will
 * return early without loading the comment.
 *
 * 如果当前帖子受密码保护并且访问者尚未输入密码，
 * 我们将提前返回而不加载评论。
 */

if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="commetns-area">

    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'electro' ), number_format_i18n( get_comments_number() ) ); ?>
        </h2>

        <ol class="comment-list">
            <?php
                wp_list_comments( array(
                    'type'          => 'comment',
                    'style'         => 'ol',
                    'short_ping'    => true,
                    'callback'      => 'electro_comment',
                ) )
            ?>
        </ol><!-- .comment-list  .评论列表 -->

        <?php $comments_by_type = separate_comments($comments); ?><!-- 将评论array数组按有无trackbacks/pingbacks划分 -->
        <?php if ( ! empty( $comments_by_type['pings'] ) ) : ?><!-- 如果pingbacks值非空就执行以下代码 -->
            <h2 class="ping-title">
                <?php echo apply_filters( 'electro_pingbacks_title', esc_html__( 'Trackbacks and Pingbacks', 'electro' ) );?>
            </h2>

            <ol class="pings-list">
                <?php
                    /*
                     * 这段代码是 WordPress 主题中用于显示 trackbacks 和 pingbacks（即其他网站对当前文章的引用）的部分。
                     * 具体来说，它包含了一个有序列表（<ol>）元素，
                     * 并使用了 WordPress 提供的 wp_list_comments 函数来列出类型为 "pings"（即 trackbacks 和 pingbacks）的评论。
                       在调用 wp_list_comments 函数时，通过传递一个包含各种参数的数组来指定显示的方式和样式。

                        在这个示例中，设置了 'type' => 'pings' 来指定只显示类型为 pings 的评论，
                        设置了 'style' => 'ol' 来指定使用有序列表样式显示，
                        设置了 'short_ping' => true 来指定显示简短的 pingback 内容，
                        最后通过 'callback' => 'electro_pings' 来指定使用名为 'electro_pings' 的回调函数来处理每个评论的显示。
                     */
                    wp_list_comments( array(
                        'type'          => 'pings',
                        'style'         => 'ol',
                        'short_ping'    => true,
                        'callback'      => 'electro_pings',
                    ) );
                ?>
            </ol><!-- .ping-list  .pingbakcs列表 -->
        <?php endif; // check for pings list  检查是否存在pingback列表 ?>

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments ') ) : // are there comments to navigate through 检查评论是否有导航分页 ?>
        <nav id="comment-nav-below" class="comment-navigation">
            <h1 class="screen-reader-text sr-only"><?php esc_html_e( 'Comment navigation', 'electro' );?></h1>
            <div class="nav-previous"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'electro' ) ); ?></div><!-- &larr; 是html中的左箭头，这种写法可以避免转义出现问题。 注意要带分号  -->
            <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'electro' ) ); ?></div>
        </nav><!-- #comment-nav-below -->
        <?php endif; //check for comment navigation 检查是否有评论导航分页 ?>

    <?php endif; // have_comments()  endif作用于32行, 结束整个have_comments()函数的各个条件判断分支 ?>

    <?php if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :?>
        <p class="no-comments"><?php esc_html_e( 'Comments are closed', 'electro'); ?></p>
    <?php endif; ?>

    <?php comment_form(); ?>


</div><!-- #comments #评论 -->


