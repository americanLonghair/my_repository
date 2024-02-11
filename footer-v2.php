<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package electro
 *
 * 这段注释是针对网页底部显示的模板，通常用于显示页面底部的内容。
 * 它说明了该模板包含了#content div 的闭合标签以及该标签之后的所有内容。
 * 注释中的 @package electro 表示这个模板属于名为 "electro" 的主题或包。
 *
 * #content div即 <div id="content">, #表示id选择器
 */
?>

<?php
/**
 *
 */
do_action( 'electro_content_bottom' ); //钩子函数执行electro_content_bottom相关代码 ?>
?>
</div><!-- .col-full -->
</div><!-- #content -->

<?php do_action( 'electro_before_footer' ); //钩子函数执行electro_before_footer相关代码 ?>

<footer id="colophon" class="site-footer">

    <?php
    /**
     * @hooked electro_footer_widgets           - 10
     * @hooked electro_footer_divider           - 10
     * @hooked electro_footer_bottom_widgets    - 10
     * @hooked electro_copyright_bar            - 10
     */
    do_action( 'electro_footer' ); ?>

</footer><!-- #colophon -->

<?php do_action( 'electro_after_footer' ); //钩子函数执行electro_after_footer相关代码 ?>

</div><!-- #page -->
</div>

<?php do_action( 'electro_after_page' ); //钩子函数执行electro_after_page相关代码 ?>

<?php wp_footer(); //执行WordPress的wp_footer()函数生成footer代码 ?>

</body>
</html><!-- 上述代码中已经包含开始标签，所以这里可以直接写结束标签 -->