/**
 * Shortcode to render archive.
 * 
 * Reference: https://codex.wordpress.org/Function_Reference/wp_get_archives
 *
 * @param array $atts
 *
 * @return string
 * 
 * By: Wajid Khan
 */
function exponent_archives_shortcode( $atts ) { ?>
    <div class="exp-archive taxonomy-list widget taxonomy-category">
        <select class="exp-archive-dropdown" name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
            <option value=""><?php echo esc_attr( __( 'Monthly Archives' ) ); ?></option> 
            <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option' ) ); ?>
        </select>
    </div>
	<?php
}
add_shortcode( 'archives', 'exponent_archives_shortcode' );
