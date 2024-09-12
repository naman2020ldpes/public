<?php
/**
* Menu Functions
*
* @package MagSoul WordPress Theme
* @copyright Copyright (C) 2024 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

// Get our wp_nav_menu() fallback, wp_page_menu(), to show a "Home" link as the first item
function magsoul_page_menu_args( $args ) {
    $args['show_home'] = true;
    return $args;
}
add_filter( 'wp_page_menu_args', 'magsoul_page_menu_args' );

function magsoul_primary_menu_text() {
   $menu_text = '';
    if ( magsoul_get_option('primary_menu_text') ) {
        $menu_text = magsoul_get_option('primary_menu_text');
    }
   return apply_filters( 'magsoul_primary_menu_text', $menu_text );
}

function magsoul_secondary_menu_text() {
   $menu_text = esc_html__( 'Menu', 'magsoul' );
    if ( magsoul_get_option('secondary_menu_text') ) {
        $menu_text = magsoul_get_option('secondary_menu_text');
    }
   return apply_filters( 'magsoul_secondary_menu_text', $menu_text );
}

function magsoul_primary_fallback_menu() {
   wp_page_menu( array(
        'sort_column'  => 'menu_order, post_title',
        'menu_id'      => 'magsoul-menu-primary-navigation',
        'menu_class'   => 'magsoul-primary-nav-menu magsoul-menu-primary',
        'container'    => 'ul',
        'echo'         => true,
        'link_before'  => '',
        'link_after'   => '',
        'before'       => '',
        'after'        => '',
        'item_spacing' => 'discard',
        'walker'       => '',
    ) );
}

function magsoul_secondary_fallback_menu() {
   wp_page_menu( array(
        'sort_column'  => 'menu_order, post_title',
        'menu_id'      => 'magsoul-menu-secondary-navigation',
        'menu_class'   => 'magsoul-secondary-nav-menu magsoul-menu-secondary',
        'container'    => 'ul',
        'echo'         => true,
        'link_before'  => '',
        'link_after'   => '',
        'before'       => '',
        'after'        => '',
        'item_spacing' => 'discard',
        'walker'       => '',
    ) );
}

function magsoul_secondary_menu_location() {
    $secondary_menu_location = 'before-footer';
    if ( magsoul_get_option('secondary_menu_location') ) {
        $secondary_menu_location = magsoul_get_option('secondary_menu_location');
    }
    return apply_filters( 'magsoul_secondary_menu_location', $secondary_menu_location );
}

function magsoul_secondary_menu_area() {
if ( magsoul_is_secondary_menu_active() ) { ?>
<div class="magsoul-container magsoul-secondary-menu-container magsoul-clearfix">
<div class="magsoul-secondary-menu-container-inside magsoul-clearfix">
<nav class="magsoul-nav-secondary" id="magsoul-secondary-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation" aria-label="<?php esc_attr_e( 'Secondary Menu', 'magsoul' ); ?>">
<div class="magsoul-outer-wrapper magsoul-secondary-menu-outer-wrapper">
<button class="magsoul-secondary-responsive-menu-icon" aria-controls="magsoul-menu-secondary-navigation" aria-expanded="false"><?php echo esc_html( magsoul_secondary_menu_text() ); ?></button>
<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'magsoul-menu-secondary-navigation', 'menu_class' => 'magsoul-secondary-nav-menu magsoul-menu-secondary magsoul-clearfix', 'fallback_cb' => 'magsoul_secondary_fallback_menu', 'container' => '', ) ); ?>
</div>
</nav>
</div>
</div>
<?php }
}