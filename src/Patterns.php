<?php
/**
 * Patterns Class.
 *
 * @package navas-features
 */

namespace NavasFeatures;

/**
 * Class Patterns.
 */
class Patterns {

	/**
	 * Constructor.
	 */
	public function __construct() {
		$this->init();
	}

	/**
	 * Initialize.
	 */
	private function init() {
		/**
		 * Actions.
		 */
		add_action( 'init', [ $this, 'register_block_patterns' ] );
		add_action( 'init', [ $this, 'register_block_pattern_categories' ] );
	}

	/**
	 * Register Block Patterns.
	 */
	public function register_block_patterns() {
		if ( function_exists( 'register_block_pattern' ) ) {

			// Get the two column pattern content.
			$two_columns_content = navas_features_get_template( 'patterns/two-columns' );

			/**
			 * Register Two Column Pattern
			 */
			register_block_pattern(
				'navas-features/two-columns',
				[
					'title'       => __( 'Navas Features Two Column', 'navas-features' ),
					'description' => __( 'Navas Two Column Patterns', 'navas-features' ),
					'categories'  => [ 'navas-columns' ],
					'content'     => $two_columns_content,
				]
			);

			/**
			 * Two Columns Secondary Pattern
			 */
			$two_columns_secondary_content = navas_features_get_template( 'patterns/two-columns-secondary' );

			register_block_pattern(
				'navas-features/two-columns-secondary',
				[
					'title'       => __( 'Navas Two Columns Secondary', 'navas-features' ),
					'description' => __( 'Navas Cover Block with image and text', 'navas-features' ),
					'categories'  => [ 'Navas-columns' ],
					'content'     => $two_columns_secondary_content,
				]
			);
		}
	}

	/**
	 * Register Block Pattern Categories.
	 */
	public function register_block_pattern_categories() {

		$pattern_categories = [
			'navas-columns' => __( 'Navas Features Columns', 'navas-features' ),
		];

		if ( ! empty( $pattern_categories ) ) {
			foreach ( $pattern_categories as $pattern_category => $pattern_category_label ) {
				register_block_pattern_category(
					$pattern_category,
					[ 'label' => $pattern_category_label ]
				);
			}
		}
	}
}