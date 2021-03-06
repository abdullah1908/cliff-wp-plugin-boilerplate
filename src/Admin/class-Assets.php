<?php

namespace WP_Plugin_Name\Admin;

use WP_Plugin_Name\Plugin_Data as Plugin_Data;

// Abort if this file is called directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( Assets::class ) ) {
	/**
	 * Enqueues the admin-specific assets.
	 */
	class Assets {

		/**
		 * Register the stylesheets for the admin area.
		 */
		public function enqueue_styles(): void {
			wp_enqueue_style(
				Plugin_Data::plugin_text_domain(),
				Plugin_Data::get_assets_url_base() . 'admin.css',
				[],
				Plugin_Data::plugin_version(),
				'all'
			);
		}

		/**
		 * Register the JavaScript for the admin area.
		 */
		public function enqueue_scripts(): void {
			wp_enqueue_script(
				Plugin_Data::plugin_text_domain(),
				Plugin_Data::get_assets_url_base() . 'admin.js',
				[ 'jquery' ],
				Plugin_Data::plugin_version(),
				false
			);
		}
	}
}