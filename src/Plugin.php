<?php
/**
 * Plugin Class.
 *
 * @package navas-features
 */

namespace NavasFeatures;

/**
 * Class Plugin.
 */
class Plugin {

	/**
	 * Constructor.
	 */
	public function __construct() {
		$this->init();
	}

	public function activate() {}
	public function deactivate() {}

	/**
	 * Initialize plugin
	 */
	private function init() {
		define( 'NAVAS_FEATURES_PLUGIN_PATH', untrailingslashit( plugin_dir_path( __DIR__ ) ) );
		define( 'NAVAS_FEATURES_PLUGIN_URL', untrailingslashit( plugin_dir_url( __DIR__ ) ) );
		define( 'NAVAS_FEATURES_PLUGIN_BUILD_PATH', NAVAS_FEATURES_PLUGIN_PATH . '/assets/build' );
		define( 'NAVAS_FEATURES_PLUGIN_BUILD_URL', NAVAS_FEATURES_PLUGIN_URL . '/assets/build' );
		define( 'NAVAS_FEATURES_PLUGIN_VERSION', '1.0.0' );

		new Assets();
		new Patterns();
	}
}
