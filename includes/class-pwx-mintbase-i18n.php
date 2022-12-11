<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://pwxchange.com
 * @since      1.0.0
 *
 * @package    Pwx_Mintbase
 * @subpackage Pwx_Mintbase/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Pwx_Mintbase
 * @subpackage Pwx_Mintbase/includes
 * @author     PWX <pwx@obeneficio.com>
 */
class Pwx_Mintbase_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'pwx-mintbase',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
