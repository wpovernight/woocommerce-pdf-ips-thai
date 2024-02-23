<?php
/**
 * Plugin Name: PDF Invoices & Packing Slips for WooCommerce - Thai Language Pack
 * Plugin URI:  http://www.wpovernight.com
 * Description: Adds Thai font (Norasi) to PDF Invoices & Packing Slips for WooCommerce
 * Version:     1.0.1
 * Author:      WP Overnight
 * Author URI:  http://www.wpovernight.com
 * License:     GPLv2 or later
 * License URI: http://www.opensource.org/licenses/gpl-license.php
 */

function wpo_wcpdf_thai( $document_type, $document ) {
	?>
		/* Load font */
		@font-face {
			font-family: 'Norasi';
			font-style: normal;
			font-weight: normal;
			src: local('Norasi'), local('Norasi'), url(<?php echo dirname( __FILE__ ); ?>/fonts/Norasi.ttf) format('truetype');
		}
		@font-face {
			font-family: 'Norasi';
			font-style: normal;
			font-weight: bold;
			src: local('Norasi Bold'), local('Norasi-Bold'), url(<?php echo dirname( __FILE__ ); ?>/fonts/Norasi-Bold.ttf) format('truetype');
		}
		@font-face {
			font-family: 'Norasi';
			font-style: italic;
			font-weight: normal;
			src: local('Norasi Italic'), local('Norasi-Italic'), url(<?php echo dirname( __FILE__ ); ?>/fonts/Norasi-Oblique.ttf) format('truetype');
		}
		@font-face {
			font-family: 'Norasi';
			font-style: italic;
			font-weight: bold;
			src: local('Norasi Bold Italic'), local('Norasi-BoldItalic'), url(<?php echo dirname( __FILE__ ); ?>/fonts/Norasi-BoldOblique.ttf) format('truetype');
		}

		/* Override font */
		body {
			font-family: 'Norasi' !important;
		}
	<?php
}

add_action( 'wpo_wcpdf_custom_styles', 'wpo_wcpdf_thai', 10, 2 );
