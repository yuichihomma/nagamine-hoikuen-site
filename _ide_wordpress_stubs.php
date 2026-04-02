<?php

// IDE-only stubs for Intelephense when WordPress core is not part of the workspace.

if ( ! class_exists( 'WP_Theme' ) ) {
    class WP_Theme {
        public function get( string $header ): string {
            return '';
        }
    }
}

if ( ! function_exists( 'add_action' ) ) {
    function add_action( string $hook_name, callable|string $callback, int $priority = 10, int $accepted_args = 1 ): true {
        return true;
    }
}

if ( ! function_exists( 'wp_enqueue_style' ) ) {
    function wp_enqueue_style(
        string $handle,
        string $src = '',
        array $deps = array(),
        string|bool|null $ver = false,
        string $media = 'all'
    ): void {}
}

if ( ! function_exists( 'get_stylesheet_uri' ) ) {
    function get_stylesheet_uri(): string {
        return '';
    }
}

if ( ! function_exists( 'wp_get_theme' ) ) {
    function wp_get_theme( ?string $stylesheet = null, ?string $theme_root = null ): WP_Theme {
        return new WP_Theme();
    }
}

if ( ! function_exists( 'wp_head' ) ) {
    function wp_head(): void {}
}

if ( ! function_exists( 'wp_footer' ) ) {
    function wp_footer(): void {}
}

if ( ! function_exists( 'body_class' ) ) {
    function body_class( array|string $css_class = '' ): void {}
}

if ( ! function_exists( 'get_header' ) ) {
    function get_header( ?string $name = null, array $args = array() ): void {}
}

if ( ! function_exists( 'get_footer' ) ) {
    function get_footer( ?string $name = null, array $args = array() ): void {}
}
