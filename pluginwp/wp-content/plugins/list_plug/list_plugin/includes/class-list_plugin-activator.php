<?php

/**
 * Fired during plugin activation
 *
 * @link       http://listplugin.com
 * @since      1.0.0
 *
 * @package    List_plugin
 * @subpackage List_plugin/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    List_plugin
 * @subpackage List_plugin/includes
 * @author     Dmitriy Savushkin <alwayswannafly4@gmail.com>
 */
class List_plugin_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

	}

	/*Register employer*/

	public static function register_employer_post_type(){
		register_employer_post_type(
			'employer',
			array(

				)
			);
	}

}
