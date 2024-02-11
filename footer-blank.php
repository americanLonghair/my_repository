<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package electro
 *
 * 这段注释是用来描述页脚模板文件的作用的。它表明这个文件用于显示页面的页脚部分，
 * 并包含了关闭 #content 区域的标签以及之后的所有内容。
    在 WordPress 主题开发中，开发者通常会添加这样的注释来说明模板文件的作用和结构，
 *  以便其他开发者能够轻松地理解和编辑这些文件。
 */

  /*
   *
    在文件名 "footer-blank.php" 中，"blank" 一词通常表示空白或空缺的意思。
    因此，"footer-blank.php" 可能指的是一个没有具体内容的页脚模板文件。

    在 WordPress 主题开发中，有时会创建一些空白的模板文件，用于特定页面或情况下不需要显示页脚内容时。
    这样的文件通常只包含必要的结构，如 HTML 结构和必要的 PHP 代码，但不包含实际内容。
    这样做的目的是为了提供灵活性，使得开发者可以根据需要随时定制和扩展页面的结构和样式。

    总的来说，"footer-blank.php" 表示一个没有内容的页脚模板文件，可以根据具体需求进行定制和扩展。
   */
?>

        </div><!-- .col-full -->
    </div><!-- .#comment -->

</div><!-- #page -->
</div>

<?php do_action( 'electro_after_page' ); ?><!-- 这里要用 -->

<?php wp_footer(); ?>

</body>
</html>
