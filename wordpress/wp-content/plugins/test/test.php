<?php 

/**
 * Plugin Name:       Test
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Day la test.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            John Smith
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages 
 */

?>


<?php	

if(!class_exists('test')):
	class Test{
		function __construct()
		{
			// add_filter('the_content', array($this, 'filter_the_content'), 1);		
			add_filter('plugin_action_links', array($this, 'filter_plugin_action_links'), 999, 2);
		}

		public function filter_the_content($content){
			return $content . "<h1>Test</h1>";
		}
		public function filter_plugin_action_links($link, $file){

			array_unshift($link, '<a href="#1">Settings</a>');

			return $link;
		}
	}
	
	$test = new test();
endif
?>
