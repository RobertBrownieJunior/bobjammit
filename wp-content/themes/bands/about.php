<?php
add_action( 'admin_menu', 'bands_add_page', 99 );
function bands_add_page() {
global $bands_theme_page;
$bands_theme_page = add_theme_page( esc_html__( 'Bands', 'bands' ), esc_html__( 'Theme Options', 'bands' ), 'edit_theme_options', 'bands', 'bands_options_do_page' );
}
function bands_options_do_page() {
?>
<div class="wrap">
<?php global $bands_theme_page; ?>
<?php $current_theme = wp_get_theme(); ?>
<h1><svg viewBox="0 0 998.1 231.3" xmlns="http://www.w3.org/2000/svg" style="max-width:500px"><path d="m0 206.7c5.4-.2 9.5-.8 12.3-2 2.8-1.1 5-3.5 6.6-7 1.6-3.6 2.4-9.3 2.4-17.1v-114.9c0-11.2.4-20.2 1.2-27l-22.5.9v-23.1l83.1-.6c24-.2 42.8 4.1 56.4 12.9s20.4 21.7 20.4 38.7c0 9.8-3.7 18.9-10.9 27.1-7.3 8.3-18.1 14.4-32.2 18.1v.3c19.2 3 33.7 9.4 43.5 19.2s14.7 21.3 14.7 34.5c0 19-6.8 33.7-20.2 44.1-13.5 10.4-31 15.6-52.6 15.6h-102.2zm92.7-1.8c11.8-.6 20.6-4.3 26.4-11.2s8.7-16.1 8.7-27.8c0-12.8-3.7-22-11.1-27.8-7.4-5.7-16.6-8.5-27.6-8.5s-19.1.1-24.3.3v48.9c0 10.8-.4 19.6-1.2 26.4 13.2 0 22.9-.1 29.1-.3zm-12.3-96.6c11.8-.2 20.3-3.9 25.6-11.2s8-16.9 8-28.9c0-10.8-3-18.7-9-23.7s-13.3-7.5-21.9-7.5c-4.2 0-7.6.5-10.1 1.5s-4.5 3.4-6 7.1-2.2 9.3-2.2 16.6v46.5zm118.5 111.7c-7.3-7.5-11-17-11-28.7 0-17.6 8.2-30.9 24.6-40s36.1-14.1 59.1-15.2v-15.6c0-18.2-6.8-27.3-20.4-27.3-8.8 0-16 2.8-21.6 8.4 2.4 2.8 3.6 6.6 3.6 11.4s-1.6 9.1-4.9 12.9-8.2 5.7-14.6 5.7c-6 0-10.7-2-14.1-5.8-3.4-3.9-5.1-8.7-5.1-14.6 0-7.8 2.8-14.7 8.4-20.7s13.2-10.6 23-14c9.7-3.3 20.3-4.9 31.9-4.9 37 0 55.5 19.1 55.5 57.3l-.3 49.2c0 9.6-.4 18.4-1.2 26.4 6.6-.6 13.1-.9 19.5-.9v22.8h-56.7c-.4-2.6-.8-7.2-1.2-13.8h-.3c-12.2 12.4-27 18.6-44.4 18.6-12.6.1-22.5-3.7-29.8-11.2zm72.4-28.9v-33.6c-11.8 1.2-21.6 4.2-29.2 9-7.7 4.8-11.5 11.3-11.5 19.5 0 5.4 1.6 9.4 4.9 12s7.4 3.9 12.2 3.9c8.9 0 16.8-3.6 23.6-10.8zm73.3 15.9c7.6 0 12.5-2.1 14.6-6.3s3.1-11 3.1-20.4v-50.4c0-9 .4-17.5 1.2-25.5l-21 .9v-22.8c12.6 0 22.8-.9 30.6-2.7s13-3.9 15.6-6.3h14.7c0 .4.4 5.4 1.2 15h.6c5.8-4.6 12.9-8.5 21.5-11.9 8.5-3.3 15.8-4.9 21.8-4.9 18.2 0 31.2 5.2 39 15.6s11.7 27.3 11.7 50.7v40.2c0 9.6-.4 18.4-1.2 26.4 6.6-.6 13.1-.9 19.5-.9v22.8h-78.6v-19.5c7.6 0 12.5-2.1 14.7-6.3s3.3-11 3.3-20.4l-.3-42.6c0-13.2-1.9-22.9-5.6-29.1s-10-9.3-18.8-9.3c-4.8 0-9.7 1.1-14.7 3.2s-9.2 4.8-12.6 7.9v67.8c0 9.6-.4 18.4-1.2 26.4 6.4-.6 12.9-.9 19.5-.9v22.8h-78.6zm209 15c-9.1-6.2-16.2-15-21.3-26.5s-7.7-24.8-7.7-40.1c0-16 3.1-30.3 9.3-43s14.9-22.6 26.2-29.9c11.3-7.2 24.2-10.8 38.9-10.8 7.8 0 16.7 1.8 26.7 5.4v-19.8c0-9.6.4-18.4 1.2-26.4-6.6.6-13.7.9-21.3.9v-22.8c12.6 0 22.8-.9 30.6-2.7s13-3.9 15.6-6.3h16.2v178.2c0 9.6-.4 18.4-1.2 26.4 6.6-.6 13.1-.9 19.5-.9v22.8h-57l-1.5-13.8h-.3c-11.8 12.4-25.9 18.6-42.3 18.6-11.9 0-22.5-3.1-31.6-9.3zm61.4-21.9c4.4-2.6 8-6.1 10.8-10.5v-90c-2.2-1.6-5.3-2.9-9.3-4.1-4-1.1-8-1.6-12-1.6-12.8.2-22 5.7-27.4 16.5-5.5 10.8-8.2 24.3-8.2 40.5 0 14.4 2.6 26.9 7.9 37.4s13.4 15.8 24.2 15.8c4.9-.1 9.6-1.4 14-4zm128.8 27.9c-8.2-2.2-14.6-5-19.2-8.4h-.3l.9 9h-22.8l-1.2-51.6h19.5c1 9.2 5.8 17 14.5 23.2s19.4 9.5 32 9.5c5.6 0 10.4-1.3 14.5-3.9s6.2-6.3 6.2-11.1c0-3.6-1.3-6.6-3.9-9s-5.7-4.4-9.3-6-10.8-4.5-21.6-8.7c-12.8-5-22.4-9.1-28.8-12.3s-12.1-8-17.2-14.2c-5.1-6.3-7.6-14.4-7.6-24.5 0-8.2 2-15.9 6.2-23.2 4.1-7.3 10.4-13.3 18.9-18s18.9-7 31.3-7c5.8 0 12.1.9 18.9 2.7s12.5 4.3 17.1 7.5h.3l-.3-8.7h22.8v53.1h-19.5c-1.8-10.4-6.4-18.6-13.8-24.6s-16.5-9-27.3-9c-5.6 0-10.3 1.3-14.1 3.9s-5.7 6.6-5.7 12c0 5.6 2.2 9.8 6.6 12.4 4.4 2.7 11.8 5.8 22.2 9.2 1.2.2 3.8 1 7.8 2.4 17 6 30 13 39.2 21 9.1 8 13.7 18.5 13.7 31.5 0 10-2.6 18.4-7.7 25.3s-11.8 12.1-20.1 15.6-17.2 5.2-26.9 5.2c-8.7 0-17.1-1.1-25.3-3.3zm100.5-137.8c-1.9-4.5-2.9-7.6-2.9-9.3l-5.3.3v-7.7h29.5v6.6c-2.1-.1-3.8.2-4.8.9-1.1.6-1.7 1.8-1.7 3.3 0 .9.2 2 .6 3.3l6 22.8c.1.5.5 2.1 1.2 4.6.7 2.6 1.4 5.8 2.1 9.6h.1l5.7-20.5 9.3-30.6h9l11.4 36.8c.9 3.1 2.1 7.9 3.6 14.4h.1l3.8-13.8 5.6-20.9c1.1-4.2 2.4-7.2 4.1-9.1v-.1l-5.2.3-2.5.1v-7.7h22.5v6.6c-2.3.1-4.4 1-6.1 2.6s-3.2 4.3-4.5 8l-16.3 53.3h-8.9l-11.8-35.8c-1.1-3.1-2.1-7.2-3.2-12.3-.1-.6-.2-1.4-.5-2.5h-.1c-.7 4.3-1.6 8.7-2.9 13.1l-11.4 37.5h-8.7zm96.6 46.7c1.8-.1 3.2-.3 4.1-.6.9-.4 1.7-1.1 2.2-2.4.5-1.2.8-3.1.8-5.7v-38.3c0-3.7.1-6.7.4-9l-7.5.3v-7.7l28.4-.2c9-.1 16 1.7 21.1 5.4 5.1 3.6 7.7 9.1 7.7 16.6 0 3.8-1.1 7.4-3.2 10.9s-5.3 6.3-9.6 8.5-9.5 3.4-15.6 3.6l-3.9.1-3.3-.1v8.8c0 3.8-.1 6.8-.4 9.1 2.1-.2 5-.3 8.5-.3v7.7h-29.7zm37.9-29.9c2.5-2.7 3.8-6.7 3.8-11.9 0-9.9-4.5-14.8-13.4-14.8-2.3 0-4 .5-5.1 1.5s-1.6 3.1-1.6 6.4v22.5c1.4.2 2.9.3 4.5.3 5.4 0 9.3-1.4 11.8-4z" fill="#bc3422"/></svg></h1>
<br />
<div class="postbox" style="padding:0 1em">
<h2><?php printf( esc_html__( 'About', 'bands' ) ); ?></h2>
<p><?php printf( esc_html__( 'Thank you for choosing Bands. %1$sUpgrade to Pro%2$s', 'bands' ), '<a href="' . esc_url( 'https://bandswp.com/' ) . '" class="button-primary">', '</a>' ); ?></p>
<p><?php printf( esc_html__( 'You can customize Bands under %1$sAppearance%2$s > %1$sCustomize%2$s.', 'bands' ), '<em>', '</em>' ); ?></p>
<p><?php printf( esc_html__( 'Bands is packed with all kinds of useful features, some that are obvious, and others that are under the hood. For example, there are many %1$shelper styles and classes%2$s available.', 'bands' ), '<a href="' . esc_url( 'https://generic.tools/grid/' ) . '">', '</a>' ); ?></p>
</div>
<div class="postbox" style="padding:0 1em">
<h2><?php printf( esc_html__( 'Support', 'bands' ) ); ?></h2>
<p><a href="<?php printf( esc_url( 'mailto:music@bandswp.com' ) ); ?>" class="button-primary"><?php printf( esc_html__( 'Free Support', 'bands' ) ); ?></a>&nbsp;&nbsp;<a href="<?php printf( esc_url( 'https://calmestghost.com/' ) ); ?>" class="button-primary"><?php printf( esc_html__( 'Hire Me', 'bands' ) ); ?></a></p>
</div>
<div class="postbox" style="padding:0 1em">
<h2><?php printf( esc_html__( 'Recommended Plugins', 'bands' ) ); ?></h2>
<p><?php printf( esc_html__( 'Classic Editor', 'bands' ) ); ?> <a href="<?php printf( esc_url( admin_url( 'plugin-install.php?tab=plugin-information&plugin=classic-editor&TB_iframe=true&width=600&height=550' ) ) ); ?>" class="thickbox"><?php printf( esc_html__( 'Install', 'bands' ) ); ?></a></p>
<p><?php printf( esc_html__( 'Classic Widgets', 'bands' ) ); ?> <a href="<?php printf( esc_url( admin_url( 'plugin-install.php?tab=plugin-information&plugin=classic-widgets&TB_iframe=true&width=600&height=550' ) ) ); ?>" class="thickbox"><?php printf( esc_html__( 'Install', 'bands' ) ); ?></a></p>
</div>
</div>
<?php
}
add_action( 'admin_menu', 'bands_thickbox' );
function bands_thickbox() {
add_thickbox();
}