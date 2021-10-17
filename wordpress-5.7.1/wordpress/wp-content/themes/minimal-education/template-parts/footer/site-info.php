<?php
/**
 * Displays footer site info
 *
 * @subpackage Minimal Education
 * @since 1.0
 * @version 1.4
 */

?>
<div class="site-info py-4 text-center">
    <p class="mb-0"><?php
        echo esc_html( get_theme_mod( 'education_insight_footer_text' ) );
        printf(
            /* translators: %s: Education WordPress Theme. */
            esc_html__( ' %s ', 'minimal-education' ),
            '<a href="' . esc_attr__( 'https://www.ovationthemes.com/wordpress/free-minimal-education-wordpress-theme/', 'minimal-education' ) . '"> Education WordPress Theme</a>'
        );
    ?></p>
</div>