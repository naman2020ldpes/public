<?php
/**
* The template for displaying search results pages.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
*
* @package MagSoul WordPress Theme
* @copyright Copyright (C) 2024 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

get_header(); ?>

<div class="magsoul-main-wrapper magsoul-clearfix" id="magsoul-main-wrapper" itemscope="itemscope" itemtype="http://schema.org/Blog" role="main">
<div class="theiaStickySidebar">
<div class="magsoul-main-wrapper-inside magsoul-clearfix">

<?php magsoul_before_main_content(); ?>

<div class="magsoul-posts-wrapper" id="magsoul-posts-wrapper">

<div class="magsoul-page-header-outside">
<header class="magsoul-page-header">
<div class="magsoul-page-header-inside">
<h1 class="page-title"><?php echo esc_html( 'Search Results for:', 'magsoul' ); ?> <span><?php echo esc_html(get_search_query()); ?></span></h1>
</div>
</header>
</div>

<div class="magsoul-posts-content">

<?php if (have_posts()) : ?>

    <div class="magsoul-posts magsoul-posts-grid">
    <?php $magsoul_post_counter=1; while (have_posts()) : the_post(); ?>

        <?php get_template_part( 'template-parts/content-grid' ); ?>

    <?php $magsoul_post_counter++; endwhile; ?>
    </div>
    <div class="clear"></div>

    <?php magsoul_posts_navigation(); ?>

<?php else : ?>

  <?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>

</div>

</div><!--/#magsoul-posts-wrapper -->

<?php magsoul_after_main_content(); ?>

</div>
</div>
</div><!-- /#magsoul-main-wrapper -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>