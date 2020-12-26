<?php
/**
 * Deprecated functions You shouldn't use these functions and look for
 * the alternatives instead. The functions will be removed in a later version.
 * This file is loaded using 'after_setup_theme' hook at priority 10
 *
 * @package    Hoot Business
 * @subpackage Theme
 */

function hoot_theme_post_thumbnail() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_post_thumbnail()' );
	// hoot_post_thumbnail();
}
function hoot_theme_thumbnail_size() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_thumbnail_size()' );
	// hoot_thumbnail_size();
}
function hoot_theme_meta_info() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_meta_info()' );
	// hoot_meta_info();
}
function hoot_theme_display_meta_info() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_display_meta_info()' );
	// hoot_display_meta_info();
}

/* Standardizing Hoot Framework */

function hoot_theme_register_hootkit() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_register_hootkit' );
}
function hoot_theme_enqueue_hootkit() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_enqueue_hootkit' );
}
function hoot_theme_dynamic_css_hootkit_handle() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_dynamic_css_hootkit_handle' );
}
function hoot_theme_hootkit_dynamic_cssrules() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_hootkit_dynamic_cssrules' );
}
function hoot_theme_attr_header() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_attr_header' );
}
function hoot_theme_attr_menu() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_attr_menu' );
}
function hoot_theme_attr_content() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_attr_content' );
}
function hoot_theme_attr_sidebar() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_attr_sidebar' );
}
function hoot_theme_attr_branding() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_attr_branding' );
}
function hoot_theme_attr_page_wrapper() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_attr_page_wrapper' );
}
function hoot_theme_attr_topbar() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_attr_topbar' );
}
function hoot_theme_attr_header_part() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_attr_header_part' );
}
function hoot_theme_attr_header_aside() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_attr_header_aside' );
}
function hoot_theme_attr_below_header() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_attr_below_header' );
}
function hoot_theme_attr_main() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_attr_main' );
}
function hoot_theme_attr_frontpage_grid() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_attr_frontpage_grid' );
}
function hoot_theme_attr_frontpage_content() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_attr_frontpage_content' );
}
function hoot_theme_attr_frontpage_area() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_attr_frontpage_area' );
}
function hoot_theme_attr_loop_meta_wrap() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_attr_loop_meta_wrap' );
}
function hoot_theme_attr_loop_meta() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_attr_loop_meta' );
}
function hoot_theme_attr_loop_title() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_attr_loop_title' );
}
function hoot_theme_attr_loop_description() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_attr_loop_description' );
}
function hoot_theme_attr_content_wrap() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_attr_content_wrap' );
}
function hoot_theme_attr_sidebar_wrap() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_attr_sidebar_wrap' );
}
function hoot_theme_attr_sub_footer() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_attr_sub_footer' );
}
function hoot_theme_attr_post_footer() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_attr_post_footer' );
}
function hoot_theme_user_style() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_user_style' );
}
function hoot_theme_dynamic_cssrules() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_dynamic_cssrules' );
}
function hoot_theme_enqueue_scripts() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_enqueue_scripts' );
}
function hoot_theme_localize_script() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_localize_script' );
}
function hoot_theme_base_enqueue_scripts() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_base_enqueue_scripts' );
}
function hoot_theme_enqueue_styles() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_enqueue_styles' );
}
function hoot_theme_dequeue_fontawesome() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_dequeue_fontawesome' );
}
function hoot_theme_includes() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_includes' );
}
function hoot_theme_branding() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_branding' );
}
function hoot_theme_logo() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_logo' );
}
function hoot_theme_get_text_logo() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_get_text_logo' );
}
function hoot_theme_get_mixed_logo() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_get_mixed_logo' );
}
function hoot_theme_get_image_logo() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_get_image_logo' );
}
function hoot_theme_get_custom_text_logo() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_get_custom_text_logo' );
}
function hoot_theme_header_aside() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_header_aside' );
}
function hoot_theme_secondary_menu() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_secondary_menu' );
}
function hoot_theme_nav_menu_toplevel_items() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_nav_menu_toplevel_items' );
}
function hoot_theme_menu_description() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_menu_description' );
}
function hoot_theme_add_custom_title_content() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_add_custom_title_content' );
}
function hoot_theme_display_404_content() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_display_404_content' );
}
function hoot_theme_footer_structure() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_footer_structure' );
}
function hoot_theme_get_footer_columns() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_get_footer_columns' );
}
function hoot_theme_get_column_span() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_get_column_span' );
}
function hoot_theme_layout_class() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_layout_class' );
}
function hoot_theme_layout() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_layout' );
}
function hoot_theme_set_layout() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_set_layout' );
}
function hoot_theme_set_layout_span() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_set_layout_span' );
}
function hoot_theme_thumbnail_size_contentwidth() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_thumbnail_size_contentwidth' );
}
function hoot_theme_titlearea_top() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_titlearea_top' );
}
function hoot_theme_loopmeta_header_img() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_loopmeta_header_img' );
}
function hoot_theme_jetpack_infinitescroll_render() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_jetpack_infinitescroll_render' );
}
function hoot_theme_set_content_width() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_set_content_width' );
}
function hoot_theme_readmoretext() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_readmoretext' );
}
function hoot_theme_custom_excerpt_length() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_custom_excerpt_length' );
}
function hoot_theme_tgmpa_plugins() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_tgmpa_plugins' );
}
function hoot_theme_add_appearance_subpage() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_add_appearance_subpage' );
}
function hoot_theme_welcome_notice() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_welcome_notice' );
}
function hoot_theme_add_welcome_notice() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_add_welcome_notice' );
}
function hoot_theme_dismiss_welcome_notice() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_dismiss_welcome_notice' );
}
function hoot_theme_admin_enqueue_about_styles() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_admin_enqueue_about_styles' );
}
function hoot_theme_appearance_subpage() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_appearance_subpage' );
}
function hoot_theme_tabsections() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_tabsections' );
}
function hoot_theme_upstrings() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_upstrings' );
}
function hoot_theme_default_style() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_default_style' );
}
function hoot_theme_customizer_options() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_customizer_options' );
}
function hoot_theme_add_customizer_options() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_add_customizer_options' );
}
function hoot_theme_customizer_enqueue_scripts() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_customizer_enqueue_scripts' );
}
function hoot_theme_modify_default_customizer_options() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_modify_default_customizer_options' );
}
function hoot_theme_customize_register() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_customize_register' );
}
function hoot_theme_callback_logo_size() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_callback_logo_size' );
}
function hoot_theme_callback_site_title_icon() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_callback_site_title_icon' );
}
function hoot_theme_callback_logo_image() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_callback_logo_image' );
}
function hoot_theme_callback_logo_image_width() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_callback_logo_image_width' );
}
function hoot_theme_callback_logo_custom() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_callback_logo_custom' );
}
function hoot_theme_callback_show_tagline() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_callback_show_tagline' );
}
function hoot_theme_callback_show_primary_menuarea_custom() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_callback_show_primary_menuarea_custom' );
}
function hoot_theme_sanitize_textarea_allowscript() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_sanitize_textarea_allowscript' );
}
function hoot_theme_google_fonts_enqueue_url() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_google_fonts_enqueue_url' );
}
function hoot_theme_fonts_list() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_fonts_list' );
}
function hoot_theme_custom_image_sizes() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_custom_image_sizes' );
}
function hoot_theme_base_register_menus() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_base_register_menus' );
}
function hoot_theme_base_register_sidebars() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_base_register_sidebars' );
}
function hoot_theme_frontpage_register_sidebars() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_frontpage_register_sidebars' );
}
function hoot_theme_premium_register_hootkit() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_premium_register_hootkit' );
}
function hoot_theme_premium_hootkit_dynamic_cssrules() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_premium_hootkit_dynamic_cssrules' );
}
function hoot_theme_premium_slider_image_widget_settings() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_premium_slider_image_widget_settings' );
}
function hoot_theme_premium_slider_postimage_widget_settings() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_premium_slider_postimage_widget_settings' );
}
function hoot_theme_premium_slider_postimage_query() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_premium_slider_postimage_query' );
}
function hoot_theme_premium_slider_carousel_widget_settings() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_premium_slider_carousel_widget_settings' );
}
function hoot_theme_premium_slider_postcarousel_widget_settings() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_premium_slider_postcarousel_widget_settings' );
}
function hoot_theme_premium_slider_postcarousel_query() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_premium_slider_postcarousel_query' );
}
function hoot_theme_premium_social_icons_widget_settings() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_premium_social_icons_widget_settings' );
}
function hoot_theme_premium_contact_info_widget_settings() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_premium_contact_info_widget_settings' );
}
function hoot_theme_premium_vcards_widget_settings() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_premium_vcards_widget_settings' );
}
function hoot_theme_premium_number_blocks_widget_settings() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_premium_number_blocks_widget_settings' );
}
function hoot_theme_premium_buttons_widget_settings() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_premium_buttons_widget_settings' );
}
function hoot_theme_premium_icon_list_widget_settings() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_premium_icon_list_widget_settings' );
}
function hoot_theme_premium_notice_widget_settings() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_premium_notice_widget_settings' );
}
function hoot_theme_premium_toggle_widget_settings() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_premium_toggle_widget_settings' );
}
function hoot_theme_premium_tabs_widget_settings() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_premium_tabs_widget_settings' );
}
function hoot_theme_attr_premium_content() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_attr_premium_content' );
}
function hoot_theme_attr_premium_loop_meta_wrap() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_attr_premium_loop_meta_wrap' );
}
function hoot_theme_user_premium_style() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_user_premium_style' );
}
function hoot_theme_prepare_cssrules() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_prepare_cssrules' );
}
function hoot_theme_premium_dynamic_cssrules() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_premium_dynamic_cssrules' );
}
function hoot_theme_custom_user_css() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_custom_user_css' );
}
function hoot_theme_premium_enqueue_scripts() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_premium_enqueue_scripts' );
}
function hoot_theme_premium_localize_script() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_premium_localize_script' );
}
function hoot_theme_premium_base_enqueue_scripts() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_premium_base_enqueue_scripts' );
}
function hoot_theme_premium_enqueue_styles() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_premium_enqueue_styles' );
}
function hoot_theme_premium_includes() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_premium_includes' );
}
function hoot_theme_premium_unload_upsell() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_premium_unload_upsell' );
}
function hoot_theme_layout_extension() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_layout_extension' );
}
function hoot_theme_megamenu_displayicon() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_megamenu_displayicon' );
}
function hoot_theme_hide_meta_info() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_hide_meta_info' );
}
function hoot_theme_loop_meta_display_title() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_loop_meta_display_title' );
}
function hoot_theme_wooloop_meta_display_title() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_wooloop_meta_display_title' );
}
function hoot_theme_loop_meta_pre_title_content() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_loop_meta_pre_title_content' );
}
function hoot_theme_loop_meta_pre_title_content_stretch() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_loop_meta_pre_title_content_stretch' );
}
function hoot_theme_loop_meta_pre_title_content_post() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_loop_meta_pre_title_content_post' );
}
function hoot_theme_woo_pages_force_nosidebar() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_woo_pages_force_nosidebar' );
}
function hoot_theme_custom404() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_custom404' );
}
function hoot_theme_display_custom404_content() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_display_custom404_content' );
}
function hoot_theme_display_custom404_content_title() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_display_custom404_content_title' );
}
function hoot_theme_loop_pagination() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_loop_pagination' );
}
function hoot_theme_premium_custom_user_js() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_premium_custom_user_js' );
}
function hoot_theme_premium_tgmpa_plugins() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_premium_tgmpa_plugins' );
}
function hoot_theme_background_pattern() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_background_pattern' );
}
function hoot_theme_premium_scroller_modules() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_premium_scroller_modules' );
}
function hoot_theme_default_premium_style() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_default_premium_style' );
}
function hoot_theme_customizer_premium_options() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_customizer_premium_options' );
}
function hoot_theme_add_customizer_premium_options() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_add_customizer_premium_options' );
}
function hoot_theme_premium_modify_default_customizer_options() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_premium_modify_default_customizer_options' );
}
function hoot_theme_modify_customizer_options() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_modify_customizer_options' );
}
function hoot_theme_modify_options_logofont() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_modify_options_logofont' );
}
function hoot_theme_textarea_allowscript() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_textarea_allowscript' );
}
function hoot_theme_customizer_inlinecss() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_customizer_inlinecss' );
}
function hoot_theme_callback_topbar_background() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_callback_topbar_background' );
}
function hoot_theme_callback_header_background() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_callback_header_background' );
}
function hoot_theme_callback_logo_background() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_callback_logo_background' );
}
function hoot_theme_callback_menu_background() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_callback_menu_background' );
}
function hoot_theme_callback_404_custom_page() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_callback_404_custom_page' );
}
function hoot_theme_google_fonts_url_args() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_google_fonts_url_args' );
}
function hoot_theme_metaoptions_enqueue() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_metaoptions_enqueue' );
}
function hoot_theme_metaoptions() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_metaoptions' );
}
function hoot_theme_woo_setup() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_woo_setup' );
}
function hoot_theme_woo_register_sidebars() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_woo_register_sidebars' );
}
function hoot_theme_woo_attr_sidebar() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_woo_attr_sidebar' );
}
function hoot_theme_woo_layout() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_woo_layout' );
}
function hoot_theme_woo_meta_info_blocks_display() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_woo_meta_info_blocks_display' );
}
function hoot_theme_woo_loop_per_page() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_woo_loop_per_page' );
}
function hoot_theme_woo_loop_columns() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_woo_loop_columns' );
}
function hoot_theme_woo_custom_loop_columns_css() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_woo_custom_loop_columns_css' );
}
function hoot_theme_woo_set_queried_object() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_woo_set_queried_object' );
}
function hoot_theme_woo_loop_hide_product_meta() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hootbiz_woo_loop_hide_product_meta' );
}

/* Standardizing Free Version */

if ( !function_exists( 'hootbiz_attr_body' ) ) { function hootbiz_attr_body() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_attr_body' );
} }
if ( !function_exists( 'hootbiz_attr_header' ) ) { function hootbiz_attr_header() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_attr_header' );
} }
if ( !function_exists( 'hootbiz_attr_footer' ) ) { function hootbiz_attr_footer() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_attr_footer' );
} }
if ( !function_exists( 'hootbiz_attr_content' ) ) { function hootbiz_attr_content() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_attr_content' );
} }
if ( !function_exists( 'hootbiz_attr_sidebar' ) ) { function hootbiz_attr_sidebar() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_attr_sidebar' );
} }
if ( !function_exists( 'hootbiz_attr_menu' ) ) { function hootbiz_attr_menu() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_attr_menu' );
} }
if ( !function_exists( 'hootbiz_attr_head' ) ) { function hootbiz_attr_head() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_attr_head' );
} }
if ( !function_exists( 'hootbiz_attr_branding' ) ) { function hootbiz_attr_branding() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_attr_branding' );
} }
if ( !function_exists( 'hootbiz_attr_site_title' ) ) { function hootbiz_attr_site_title() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_attr_site_title' );
} }
if ( !function_exists( 'hootbiz_attr_site_description' ) ) { function hootbiz_attr_site_description() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_attr_site_description' );
} }
if ( !function_exists( 'hootbiz_attr_page' ) ) { function hootbiz_attr_page() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_attr_page' );
} }
if ( !function_exists( 'hootbiz_attr_post' ) ) { function hootbiz_attr_post() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_attr_post' );
} }
if ( !function_exists( 'hootbiz_attr_entry_title' ) ) { function hootbiz_attr_entry_title() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_attr_entry_title' );
} }
if ( !function_exists( 'hootbiz_attr_entry_author' ) ) { function hootbiz_attr_entry_author() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_attr_entry_author' );
} }
if ( !function_exists( 'hootbiz_attr_entry_published' ) ) { function hootbiz_attr_entry_published() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_attr_entry_published' );
} }
if ( !function_exists( 'hootbiz_attr_entry_content' ) ) { function hootbiz_attr_entry_content() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_attr_entry_content' );
} }
if ( !function_exists( 'hootbiz_attr_entry_summary' ) ) { function hootbiz_attr_entry_summary() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_attr_entry_summary' );
} }
if ( !function_exists( 'hootbiz_attr_entry_terms' ) ) { function hootbiz_attr_entry_terms() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_attr_entry_terms' );
} }
if ( !function_exists( 'hootbiz_attr_comment' ) ) { function hootbiz_attr_comment() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_attr_comment' );
} }
if ( !function_exists( 'hootbiz_attr_comment_author' ) ) { function hootbiz_attr_comment_author() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_attr_comment_author' );
} }
if ( !function_exists( 'hootbiz_attr_comment_published' ) ) { function hootbiz_attr_comment_published() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_attr_comment_published' );
} }
if ( !function_exists( 'hootbiz_attr_comment_permalink' ) ) { function hootbiz_attr_comment_permalink() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_attr_comment_permalink' );
} }
if ( !function_exists( 'hootbiz_attr_comment_content' ) ) { function hootbiz_attr_comment_content() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_attr_comment_content' );
} }
if ( !function_exists( 'hootbiz_hex_to_rgb' ) ) { function hootbiz_hex_to_rgb() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_hex_to_rgb' );
} }
if ( !function_exists( 'hootbiz_color_lighten' ) ) { function hootbiz_color_lighten() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_color_lighten' );
} }
if ( !function_exists( 'hootbiz_color_darken' ) ) { function hootbiz_color_darken() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_color_darken' );
} }
if ( !function_exists( 'hootbiz_color_increase' ) ) { function hootbiz_color_increase() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_color_increase' );
} }
if ( !function_exists( 'hootbiz_color_decrease' ) ) { function hootbiz_color_decrease() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_color_decrease' );
} }
if ( !function_exists( 'hootbiz_color' ) ) { function hootbiz_color() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_color' );
} }
if ( !function_exists( 'hootbiz_get_context' ) ) { function hootbiz_get_context() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_get_context' );
} }
if ( !function_exists( 'hootbiz_body_class_filter' ) ) { function hootbiz_body_class_filter() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_body_class_filter' );
} }
if ( !function_exists( 'hootbiz_post_class_filter' ) ) { function hootbiz_post_class_filter() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_post_class_filter' );
} }
if ( !function_exists( 'hootbiz_comment_class_filter' ) ) { function hootbiz_comment_class_filter() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_comment_class_filter' );
} }
if ( !function_exists( 'hootbiz_fonts_list' ) ) { function hootbiz_fonts_list() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_fonts_list' );
} }
if ( !function_exists( 'hootbiz_enum_icons' ) ) { function hootbiz_enum_icons() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_enum_icons' );
} }
if ( !function_exists( 'hootbiz_enum_background_repeat' ) ) { function hootbiz_enum_background_repeat() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_enum_background_repeat' );
} }
if ( !function_exists( 'hootbiz_enum_background_position' ) ) { function hootbiz_enum_background_position() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_enum_background_position' );
} }
if ( !function_exists( 'hootbiz_enum_background_attachment' ) ) { function hootbiz_enum_background_attachment() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_enum_background_attachment' );
} }
if ( !function_exists( 'hootbiz_enum_background_type' ) ) { function hootbiz_enum_background_type() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_enum_background_type' );
} }
if ( !function_exists( 'hootbiz_enum_background_pattern' ) ) { function hootbiz_enum_background_pattern() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_enum_background_pattern' );
} }
if ( !function_exists( 'hootbiz_enum_font_sizes' ) ) { function hootbiz_enum_font_sizes() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_enum_font_sizes' );
} }
if ( !function_exists( 'hootbiz_enum_font_sizes_array' ) ) { function hootbiz_enum_font_sizes_array() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_enum_font_sizes_array' );
} }
if ( !function_exists( 'hootbiz_enum_font_faces' ) ) { function hootbiz_enum_font_faces() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_enum_font_faces' );
} }
if ( !function_exists( 'hootbiz_enum_font_styles' ) ) { function hootbiz_enum_font_styles() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_enum_font_styles' );
} }
if ( !function_exists( 'hootbiz_enum_social_profiles' ) ) { function hootbiz_enum_social_profiles() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_enum_social_profiles' );
} }
if ( !function_exists( 'hootbiz_fonticons_list' ) ) { function hootbiz_fonticons_list() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_fonticons_list' );
} }
if ( !function_exists( 'hootbiz_add_post_type_support' ) ) { function hootbiz_add_post_type_support() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_add_post_type_support' );
} }
if ( !function_exists( 'hootbiz_add_page_for_posts_editor' ) ) { function hootbiz_add_page_for_posts_editor() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_add_page_for_posts_editor' );
} }
if ( !function_exists( 'hootbiz_archive_title_filter' ) ) { function hootbiz_archive_title_filter() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_archive_title_filter' );
} }
if ( !function_exists( 'hootbiz_archive_description_filter' ) ) { function hootbiz_archive_description_filter() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_archive_description_filter' );
} }
if ( !function_exists( 'hootbiz_untitled_post' ) ) { function hootbiz_untitled_post() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_untitled_post' );
} }
if ( !function_exists( 'hootbiz_readmore' ) ) { function hootbiz_readmore() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_readmore' );
} }
if ( !function_exists( 'hootbiz_readmore_quicktag' ) ) { function hootbiz_readmore_quicktag() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_readmore_quicktag' );
} }
if ( !function_exists( 'hootbiz_readmore_quicktag_replace' ) ) { function hootbiz_readmore_quicktag_replace() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_readmore_quicktag_replace' );
} }
if ( !function_exists( 'hootbiz_link_pages_args' ) ) { function hootbiz_link_pages_args() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_link_pages_args' );
} }
if ( !function_exists( 'hootbiz_link_pages_link' ) ) { function hootbiz_link_pages_link() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_link_pages_link' );
} }
if ( !function_exists( 'hootbiz_the_author_posts_link' ) ) { function hootbiz_the_author_posts_link() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_the_author_posts_link' );
} }
if ( !function_exists( 'hootbiz_get_comment_author_link' ) ) { function hootbiz_get_comment_author_link() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_get_comment_author_link' );
} }
if ( !function_exists( 'hootbiz_get_comment_author_url_link' ) ) { function hootbiz_get_comment_author_url_link() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_get_comment_author_url_link' );
} }
if ( !function_exists( 'hootbiz_get_avatar' ) ) { function hootbiz_get_avatar() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_get_avatar' );
} }
if ( !function_exists( 'hootbiz_post_thumbnail_html' ) ) { function hootbiz_post_thumbnail_html() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_post_thumbnail_html' );
} }
if ( !function_exists( 'hootbiz_comments_popup_link_attributes' ) ) { function hootbiz_comments_popup_link_attributes() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_comments_popup_link_attributes' );
} }
if ( !function_exists( 'hootbiz_nav_menu_css_class' ) ) { function hootbiz_nav_menu_css_class() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_nav_menu_css_class' );
} }
if ( !function_exists( 'hootbiz_meta_charset' ) ) { function hootbiz_meta_charset() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_meta_charset' );
} }
if ( !function_exists( 'hootbiz_meta_viewport' ) ) { function hootbiz_meta_viewport() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_meta_viewport' );
} }
if ( !function_exists( 'hootbiz_meta_generator' ) ) { function hootbiz_meta_generator() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_meta_generator' );
} }
if ( !function_exists( 'hootbiz_link_pingback' ) ) { function hootbiz_link_pingback() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_link_pingback' );
} }
if ( !function_exists( 'hootbiz_current_theme_supports' ) ) { function hootbiz_current_theme_supports() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_current_theme_supports' );
} }
if ( !function_exists( 'hootbiz_trim' ) ) { function hootbiz_trim() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'function' );
} }
if ( !function_exists( 'hootbiz_trim_content' ) ) { function hootbiz_trim_content() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_trim_content' );
} }
if ( !function_exists( 'hootbiz_array_insert' ) ) { function hootbiz_array_insert() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_array_insert' );
} }
if ( !function_exists( 'hootbiz_locate_script' ) ) { function hootbiz_locate_script() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_locate_script' );
} }
if ( !function_exists( 'hootbiz_locate_style' ) ) { function hootbiz_locate_style() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_locate_style' );
} }
if ( !function_exists( 'hootbiz_locate_uri' ) ) { function hootbiz_locate_uri() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_locate_uri' );
} }
if ( !function_exists( 'hootbiz_load_textdomains' ) ) { function hootbiz_load_textdomains() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_load_textdomains' );
} }
if ( !function_exists( 'hootbiz_load_textdomain_mofile' ) ) { function hootbiz_load_textdomain_mofile() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_load_textdomain_mofile' );
} }
if ( !function_exists( 'hootbiz_get_language' ) ) { function hootbiz_get_language() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_get_language' );
} }
if ( !function_exists( 'hootbiz_get_region' ) ) { function hootbiz_get_region() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_get_region' );
} }
if ( !function_exists( 'hootbiz_lib_constants' ) ) { function hootbiz_lib_constants() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_lib_constants' );
} }
if ( !function_exists( 'hootbiz_lib_core' ) ) { function hootbiz_lib_core() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_lib_core' );
} }
if ( !function_exists( 'hootbiz_data' ) ) { function hootbiz_data() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'function' );
} }
if ( !function_exists( 'hootbiz_get_data' ) ) { function hootbiz_get_data() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_get_data' );
} }
if ( !function_exists( 'hootbiz_set_data' ) ) { function hootbiz_set_data() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_set_data' );
} }
if ( !function_exists( 'hootbiz_unset_data' ) ) { function hootbiz_unset_data() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_unset_data' );
} }
if ( !function_exists( 'hootbiz_get_content_template' ) ) { function hootbiz_get_content_template() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_get_content_template' );
} }
if ( !function_exists( 'hootbiz_get_archive_content' ) ) { function hootbiz_get_archive_content() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_get_archive_content' );
} }
if ( !function_exists( 'hootbiz_get_menu' ) ) { function hootbiz_get_menu() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_get_menu' );
} }
if ( !function_exists( 'hootbiz_get_header' ) ) { function hootbiz_get_header() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_get_header' );
} }
if ( !function_exists( 'hootbiz_get_comment' ) ) { function hootbiz_get_comment() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_get_comment' );
} }
if ( !function_exists( 'hootbiz_get_sidebar' ) ) { function hootbiz_get_sidebar() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_get_sidebar' );
} }
if ( !function_exists( 'hootbiz_get_widget' ) ) { function hootbiz_get_widget() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_get_widget' );
} }
if ( !function_exists( 'hootbiz_get_footer' ) ) { function hootbiz_get_footer() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_get_footer' );
} }
if ( !function_exists( 'hootbiz_get_template_part' ) ) { function hootbiz_get_template_part() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_get_template_part' );
} }
if ( !function_exists( 'hootbiz_register_image_sizes' ) ) { function hootbiz_register_image_sizes() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_register_image_sizes' );
} }
if ( !function_exists( 'hootbiz_get_image_size_name' ) ) { function hootbiz_get_image_size_name() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_get_image_size_name' );
} }
if ( !function_exists( 'hootbiz_get_image_sizes' ) ) { function hootbiz_get_image_sizes() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_get_image_sizes' );
} }
if ( !function_exists( 'hootbiz_post_thumbnail' ) ) { function hootbiz_post_thumbnail() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_post_thumbnail' );
} }
if ( !function_exists( 'hootbiz_thumbnail_size' ) ) { function hootbiz_thumbnail_size() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_thumbnail_size' );
} }
if ( !function_exists( 'hootbiz_get_attachid_url' ) ) { function hootbiz_get_attachid_url() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_get_attachid_url' );
} }
if ( !function_exists( 'hootbiz_sanitize_html_classes' ) ) { function hootbiz_sanitize_html_classes() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_sanitize_html_classes' );
} }
if ( !function_exists( 'hootbiz_sanitize_text' ) ) { function hootbiz_sanitize_text() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_sanitize_text' );
} }
if ( !function_exists( 'hootbiz_sanitize_enum' ) ) { function hootbiz_sanitize_enum() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_sanitize_enum' );
} }
if ( !function_exists( 'hootbiz_sanitize_textarea' ) ) { function hootbiz_sanitize_textarea() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_sanitize_textarea' );
} }
if ( !function_exists( 'hootbiz_sanitize_editor' ) ) { function hootbiz_sanitize_editor() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_sanitize_editor' );
} }
if ( !function_exists( 'hootbiz_sanitize_range' ) ) { function hootbiz_sanitize_range() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_sanitize_range' );
} }
if ( !function_exists( 'hootbiz_sanitize_checkbox' ) ) { function hootbiz_sanitize_checkbox() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_sanitize_checkbox' );
} }
if ( !function_exists( 'hootbiz_sanitize_multicheck' ) ) { function hootbiz_sanitize_multicheck() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_sanitize_multicheck' );
} }
if ( !function_exists( 'hootbiz_sanitize_upload' ) ) { function hootbiz_sanitize_upload() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_sanitize_upload' );
} }
if ( !function_exists( 'hootbiz_sanitize_color' ) ) { function hootbiz_sanitize_color() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_sanitize_color' );
} }
if ( !function_exists( 'hootbiz_sanitize_hex' ) ) { function hootbiz_sanitize_hex() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_sanitize_hex' );
} }
if ( !function_exists( 'hootbiz_sanitize_rgba' ) ) { function hootbiz_sanitize_rgba() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_sanitize_rgba' );
} }
if ( !function_exists( 'hootbiz_sanitize_background_repeat' ) ) { function hootbiz_sanitize_background_repeat() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_sanitize_background_repeat' );
} }
if ( !function_exists( 'hootbiz_sanitize_background_position' ) ) { function hootbiz_sanitize_background_position() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_sanitize_background_position' );
} }
if ( !function_exists( 'hootbiz_sanitize_background_attachment' ) ) { function hootbiz_sanitize_background_attachment() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_sanitize_background_attachment' );
} }
if ( !function_exists( 'hootbiz_sanitize_background_type' ) ) { function hootbiz_sanitize_background_type() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_sanitize_background_type' );
} }
if ( !function_exists( 'hootbiz_sanitize_background_pattern' ) ) { function hootbiz_sanitize_background_pattern() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_sanitize_background_pattern' );
} }
if ( !function_exists( 'hootbiz_sanitize_icon' ) ) { function hootbiz_sanitize_icon() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_sanitize_icon' );
} }
if ( !function_exists( 'hootbiz_sanitize_fontface' ) ) { function hootbiz_sanitize_fontface() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_sanitize_fontface' );
} }
if ( !function_exists( 'hootbiz_sanitize_font_size' ) ) { function hootbiz_sanitize_font_size() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_sanitize_font_size' );
} }
if ( !function_exists( 'hootbiz_sanitize_font_style' ) ) { function hootbiz_sanitize_font_style() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_sanitize_font_style' );
} }
if ( !function_exists( 'hootbiz_sanitize_fa' ) ) { function hootbiz_sanitize_fa() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_sanitize_fa' );
} }
if ( !function_exists( 'hootbiz_register_scripts' ) ) { function hootbiz_register_scripts() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_register_scripts' );
} }
if ( !function_exists( 'hootbiz_enqueue_scripts' ) ) { function hootbiz_enqueue_scripts() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_enqueue_scripts' );
} }
if ( !function_exists( 'hootbiz_get_scripts' ) ) { function hootbiz_get_scripts() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_get_scripts' );
} }
if ( !function_exists( 'hootbiz_register_sidebar' ) ) { function hootbiz_register_sidebar() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_register_sidebar' );
} }
if ( !function_exists( 'hootbiz_get_sidebar_name' ) ) { function hootbiz_get_sidebar_name() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_get_sidebar_name' );
} }
if ( !function_exists( 'hootbiz_widget_exists' ) ) { function hootbiz_widget_exists() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_widget_exists' );
} }
if ( !function_exists( 'hootbiz_add_css_rule' ) ) { function hootbiz_add_css_rule() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_add_css_rule' );
} }
if ( !function_exists( 'hootbiz_register_styles' ) ) { function hootbiz_register_styles() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_register_styles' );
} }
if ( !function_exists( 'hootbiz_enqueue_styles' ) ) { function hootbiz_enqueue_styles() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_enqueue_styles' );
} }
if ( !function_exists( 'hootbiz_get_styles' ) ) { function hootbiz_get_styles() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_get_styles' );
} }
if ( !function_exists( 'hootbiz_min_stylesheet_uri' ) ) { function hootbiz_min_stylesheet_uri() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_min_stylesheet_uri' );
} }
if ( !function_exists( 'hootbiz_locale_stylesheet_uri' ) ) { function hootbiz_locale_stylesheet_uri() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_locale_stylesheet_uri' );
} }
if ( !function_exists( 'hootbiz_get_locale_style' ) ) { function hootbiz_get_locale_style() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_get_locale_style' );
} }
if ( !function_exists( 'hootbiz_register_adminstyles' ) ) { function hootbiz_register_adminstyles() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_register_adminstyles' );
} }
if ( !function_exists( 'hootbiz_attr' ) ) { function hootbiz_attr() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'function' );
} }
if ( !function_exists( 'hootbiz_get_attr' ) ) { function hootbiz_get_attr() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_get_attr' );
} }
if ( !function_exists( 'hootbiz_comments_callback' ) ) { function hootbiz_comments_callback() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_comments_callback' );
} }
if ( !function_exists( 'hootbiz_comments_end_callback' ) ) { function hootbiz_comments_end_callback() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_comments_end_callback' );
} }
if ( !function_exists( 'hootbiz_comment_reply_link' ) ) { function hootbiz_comment_reply_link() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_comment_reply_link' );
} }
if ( !function_exists( 'hootbiz_get_site_link' ) ) { function hootbiz_get_site_link() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_get_site_link' );
} }
if ( !function_exists( 'hootbiz_get_wp_link' ) ) { function hootbiz_get_wp_link() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_get_wp_link' );
} }
if ( !function_exists( 'hootbiz_get_wp_theme_link' ) ) { function hootbiz_get_wp_theme_link() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_get_wp_theme_link' );
} }
if ( !function_exists( 'hootbiz_get_theme_link' ) ) { function hootbiz_get_theme_link() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_get_theme_link' );
} }
if ( !function_exists( 'hootbiz_get_excerpt' ) ) { function hootbiz_get_excerpt() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_get_excerpt' );
} }
if ( !function_exists( 'hootbiz_getexcerpt_customlength' ) ) { function hootbiz_getexcerpt_customlength() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_getexcerpt_customlength' );
} }
if ( !function_exists( 'hootbiz_remove_readmore_link' ) ) { function hootbiz_remove_readmore_link() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_remove_readmore_link' );
} }
if ( !function_exists( 'hootbiz_readmore_empty_string' ) ) { function hootbiz_readmore_empty_string() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_readmore_empty_string' );
} }
if ( !function_exists( 'hootbiz_reinstate_readmore_link' ) ) { function hootbiz_reinstate_readmore_link() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_reinstate_readmore_link' );
} }
if ( !function_exists( 'hootbiz_meta_info' ) ) { function hootbiz_meta_info() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_meta_info' );
} }
if ( !function_exists( 'hootbiz_display_meta_info' ) ) { function hootbiz_display_meta_info() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_display_meta_info' );
} }
if ( !function_exists( 'hootbiz_debug_info' ) ) { function hootbiz_debug_info() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_debug_info' );
} }
if ( !function_exists( 'hootbiz_add_debug_info' ) ) { function hootbiz_add_debug_info() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_add_debug_info' );
} }
if ( !function_exists( 'hootbiz_developer_data' ) ) { function hootbiz_developer_data() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_developer_data' );
} }
if ( !function_exists( 'hootbiz_customize_content_control_interface' ) ) { function hootbiz_customize_content_control_interface () {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_customize_content_control_interface' );
} }
if ( !function_exists( 'hootbiz_customize_group_control_interface' ) ) { function hootbiz_customize_group_control_interface () {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_customize_group_control_interface' );
} }
if ( !function_exists( 'hootbiz_customize_prepare_group_settings' ) ) { function hootbiz_customize_prepare_group_settings() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_customize_prepare_group_settings' );
} }
if ( !function_exists( 'hootbiz_customize_footer_groupcontent' ) ) { function hootbiz_customize_footer_groupcontent() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_customize_footer_groupcontent' );
} }
if ( !function_exists( 'hootbiz_customize_icon_control_interface' ) ) { function hootbiz_customize_icon_control_interface () {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_customize_icon_control_interface' );
} }
if ( !function_exists( 'hootbiz_customize_footer_iconcontent' ) ) { function hootbiz_customize_footer_iconcontent() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_customize_footer_iconcontent' );
} }
if ( !function_exists( 'hootbiz_customize_controls_icon_control_js_object' ) ) { function hootbiz_customize_controls_icon_control_js_object() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_customize_controls_icon_control_js_object' );
} }
if ( !function_exists( 'hootbiz_customize_sanitize_icon_callback' ) ) { function hootbiz_customize_sanitize_icon_callback() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_customize_sanitize_icon_callback' );
} }
if ( !function_exists( 'hootbiz_customize_bettercheckbox_control_interface' ) ) { function hootbiz_customize_bettercheckbox_control_interface () {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_customize_bettercheckbox_control_interface' );
} }
if ( !function_exists( 'hootbiz_customize_prepare_bettercheckbox_settings' ) ) { function hootbiz_customize_prepare_bettercheckbox_settings() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_customize_prepare_bettercheckbox_settings' );
} }
if ( !function_exists( 'hootbiz_customize_sanitize_bettercheckbox_callback' ) ) { function hootbiz_customize_sanitize_bettercheckbox_callback() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_customize_sanitize_bettercheckbox_callback' );
} }
if ( !function_exists( 'hootbiz_sanitize_customize_multicheckbox' ) ) { function hootbiz_sanitize_customize_multicheckbox() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_sanitize_customize_multicheckbox' );
} }
if ( !function_exists( 'hootbiz_customize_radioimage_control_interface' ) ) { function hootbiz_customize_radioimage_control_interface () {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_customize_radioimage_control_interface' );
} }
if ( !function_exists( 'hootbiz_customize_sanitize_radioimage_callback' ) ) { function hootbiz_customize_sanitize_radioimage_callback() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_customize_sanitize_radioimage_callback' );
} }
if ( !function_exists( 'hootbiz_customize_sortlist_control_interface' ) ) { function hootbiz_customize_sortlist_control_interface () {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_customize_sortlist_control_interface' );
} }
if ( !function_exists( 'hootbiz_customize_prepare_sortlist_settings' ) ) { function hootbiz_customize_prepare_sortlist_settings() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_customize_prepare_sortlist_settings' );
} }
if ( !function_exists( 'hootbiz_customize_sanitize_sortlist_callback' ) ) { function hootbiz_customize_sanitize_sortlist_callback() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_customize_sanitize_sortlist_callback' );
} }
if ( !function_exists( 'hootbiz_sanitize_customize_sortlist' ) ) { function hootbiz_sanitize_customize_sortlist() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_sanitize_customize_sortlist' );
} }
if ( !function_exists( 'hootbiz_sortlist' ) ) { function hootbiz_sortlist() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_sortlist' );
} }
if ( !function_exists( 'hootbiz_customize_prepare_settings' ) ) { function hootbiz_customize_prepare_settings() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_customize_prepare_settings' );
} }
if ( !function_exists( 'hootbiz_customize_get_default' ) ) { function hootbiz_customize_get_default() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_customize_get_default' );
} }
if ( !function_exists( 'hootbiz_customize_get_choices' ) ) { function hootbiz_customize_get_choices() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_customize_get_choices' );
} }
if ( !function_exists( 'hootbiz_get_mod' ) ) { function hootbiz_get_mod() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_get_mod' );
} }
if ( !function_exists( 'hootbiz_customize_register' ) ) { function hootbiz_customize_register() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_customize_register' );
} }
if ( !function_exists( 'hootbiz_customize_add_panels' ) ) { function hootbiz_customize_add_panels() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_customize_add_panels' );
} }
if ( !function_exists( 'hootbiz_customize_add_sections' ) ) { function hootbiz_customize_add_sections() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_customize_add_sections' );
} }
if ( !function_exists( 'hootbiz_customize_add_setting' ) ) { function hootbiz_customize_add_setting() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_customize_add_setting' );
} }
if ( !function_exists( 'hootbiz_customize_enqueue_scripts' ) ) { function hootbiz_customize_enqueue_scripts() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_customize_enqueue_scripts' );
} }
if ( !function_exists( 'hootbiz_customize_preview_js' ) ) { function hootbiz_customize_preview_js() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_customize_preview_js' );
} }
if ( !function_exists( 'hootbiz_sanitize_get_mod' ) ) { function hootbiz_sanitize_get_mod() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_sanitize_get_mod' );
} }
if ( !function_exists( 'hootbiz_customize_sanitize_callback' ) ) { function hootbiz_customize_sanitize_callback() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_customize_sanitize_callback' );
} }
if ( !function_exists( 'hootbiz_sanitize_customize_enum' ) ) { function hootbiz_sanitize_customize_enum() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_sanitize_customize_enum' );
} }
if ( !function_exists( 'hootbiz_googlefonts_list' ) ) { function hootbiz_googlefonts_list() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_googlefonts_list' );
} }
if ( !function_exists( 'hootbiz_premium_archive_post_template_hierarchy' ) ) { function hootbiz_premium_archive_post_template_hierarchy() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_premium_archive_post_template_hierarchy' );
} }
if ( !function_exists( 'hootbiz_premium_widget_template_hierarchy' ) ) { function hootbiz_premium_widget_template_hierarchy() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_premium_widget_template_hierarchy' );
} }
if ( !function_exists( 'hootbiz_premium_locate_uri' ) ) { function hootbiz_premium_locate_uri() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_premium_locate_uri' );
} }
if ( !function_exists( 'hootbiz_lib_premium_constants' ) ) { function hootbiz_lib_premium_constants() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_lib_premium_constants' );
} }
if ( !function_exists( 'hootbiz_lib_premium_core' ) ) { function hootbiz_lib_premium_core() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_lib_premium_core' );
} }
if ( !function_exists( 'hootbiz_attr_page_wrapper' ) ) { function hootbiz_attr_page_wrapper() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_attr_page_wrapper' );
} }
if ( !function_exists( 'hootbiz_attr_menu' ) ) { function hootbiz_attr_menu() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_attr_menu' );
} }
if ( !function_exists( 'hootbiz_customize_betterbackground_control_interface' ) ) { function hootbiz_customize_betterbackground_control_interface () {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_customize_betterbackground_control_interface' );
} }
if ( !function_exists( 'hootbiz_customize_prepare_betterbackground_settings' ) ) { function hootbiz_customize_prepare_betterbackground_settings() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_customize_prepare_betterbackground_settings' );
} }
if ( !function_exists( 'hootbiz_customize_sanitize_betterbackground_callback' ) ) { function hootbiz_customize_sanitize_betterbackground_callback() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_customize_sanitize_betterbackground_callback' );
} }
if ( !function_exists( 'hootbiz_customize_fontface_control_interface' ) ) { function hootbiz_customize_fontface_control_interface () {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_customize_fontface_control_interface' );
} }
if ( !function_exists( 'hootbiz_customize_prepare_typography_settings' ) ) { function hootbiz_customize_prepare_typography_settings() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_customize_prepare_typography_settings' );
} }
if ( !function_exists( 'hootbiz_customize_sanitize_fontface_callback' ) ) { function hootbiz_customize_sanitize_fontface_callback() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_customize_sanitize_fontface_callback' );
} }
if ( !function_exists( 'hootbiz_premium_customize_enqueue_scripts' ) ) { function hootbiz_premium_customize_enqueue_scripts() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_premium_customize_enqueue_scripts' );
} }
if ( !function_exists( 'hootbiz_premium_customize_preview_js' ) ) { function hootbiz_premium_customize_preview_js() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_premium_customize_preview_js' );
} }
if ( !function_exists( 'hootbiz_get_metaoption' ) ) { function hootbiz_get_metaoption() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_get_metaoption' );
} }
if ( !function_exists( 'hootbiz_sanitize_get_meta' ) ) { function hootbiz_sanitize_get_meta() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_sanitize_get_meta' );
} }
if ( !function_exists( 'hootbiz_get_field_name' ) ) { function hootbiz_get_field_name() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_get_field_name' );
} }
if ( !function_exists( 'hootbiz_get_field_id' ) ) { function hootbiz_get_field_id() {
	_deprecated_function( __FUNCTION__, '2.7.0', 'hoot_get_field_id' );
} }