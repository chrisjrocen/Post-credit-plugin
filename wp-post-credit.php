<?php
/*
Plugin Name: Post credit
Plugin URI:  https://twitter.com/ocen_chris
Description: A plugin to show credit for the writer under each post on a website
Version:     1.0
Author:      Ocen Chris
Author URI:  https://twitter.com/ocen_chris

*/

		function footer_credit_footer_note( $content ) {
	$content .= '<footer class="footer-credit-footer-note">Website is powered by <a href="https://twitter.com/ocen_chris" title="chris">Chris Ocen</a></footer>';
	return $content;
}
add_filter( 'the_content', 'footer_credit_footer_note' );

?>