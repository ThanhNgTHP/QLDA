<?php 
/**
 * Plugin Name: Element-helper
 * Plugin URI:  https://wordpress.org/plugins/classic-editor/
 * Description: 
 * Version:     1.6.3
 * Author:      WordPress Contributors
 * Author URI:  
 * License:     GPLv2 or later
 * License URI: 
 * Text Domain: 
 * Domain Path: /languages
 * Requires at least: 4.9
 * Requires PHP: 5.2.4
 */
?>

<?php 
    add_shortcode('dropdowns', 'dropdowns');
?>

<?php 

    function dropdowns($attrs){
        $content = $attrs['content'];
        $count = $attrs['count'];
        $options = explode(",", $attrs['options']);

        ob_start();

        include dirname((__FILE__)).'/dropdowns/index.php';
        $output = ob_get_contents();

        ob_end_clean();

        return $output;
    }

?>