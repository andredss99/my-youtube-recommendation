<?php

    /**
     * @link                https://github.com/andredss99/my-youtube-recommendation
     * @since               1.0.0
     * @package             My_Youtube_Recommendation
     * 
     * @wordpress-plugin
     * Plugin Name:         My Youtube Recommendation
     * Plugin URI:          https://github.com/andredss99/my-youtube-recommendation
     * Description:         Display the last videos from a Youtube channel using Youtube feed.
     * Version:             1.0.0
     * Author:              André Sousa
     * Author URI:          https://github.com/andredss99
     * License:             GPLv3 or later
     * License URI:         https://www.gnu.org/licenses/gpl-3.0.html
     * Text Domain:         my-youtube-recommendation
     * Domain Path:         /languages/
     */

    if (!defined('WPIND')) {
        wp_die();
    }
    
    // Plugin Version
    if (!defined('MY_YOUTUBE_RECOMMENDATION_VERSION')) {
        define('MY_YOUTUBE_RECOMMENDATION_VERSION', '1.0.0');
    }

    // Plugin Name
    if (!defined('MY_YOUTUBE_RECOMMENDATION_NAME')) {
        define('MY_YOUTUBE_RECOMMENDATION_NAME', 'My Youtube Recommendation');
    }

    // Plugin Slug
    if (!defined('MY_YOUTUBE_RECOMMENDATION_PLUGIN_SLUG')) {
        define('MY_YOUTUBE_RECOMMENDATION_PLUGIN_SLUG', 'my-youtube-recommendation');
    }

    // Plugin Basename
    if (!defined('MY_YOUTUBE_RECOMMENDATION_BASENAME')) {
        define('MY_YOUTUBE_RECOMMENDATION_BASENAME', plugin_basename(__FILE__));
    }

    // Plugin Folder
    if (!defined('MY_YOUTUBE_RECOMMENDATION_PLUGIN_DIR')) {
        define('MY_YOUTUBE_RECOMMENDATION_PLUGIN_DIR', plugin_dir_path(__FILE__));
    }

    // JSON File Name
    if (!defined('MY_YOUTUBE_RECOMMENDATION_JSON_FILENAME')) {
        define('MY_YOUTUBE_RECOMMENDATION_JSON_FILENAME', 'my-yt-rec.json');
    }

    require_once MY_YOUTUBE_RECOMMENDATION_PLUGIN_DIR . "includes/class-youtube-recommendation.php";
    require_once MY_YOUTUBE_RECOMMENDATION_PLUGIN_DIR . "includes/class-youtube-recommendation-json.php";
    require_once MY_YOUTUBE_RECOMMENDATION_PLUGIN_DIR . "includes/class-youtube-recommendation-shortcode.php";
    require_once MY_YOUTUBE_RECOMMENDATION_PLUGIN_DIR . "includes/class-youtube-recommendation-widget.php";

    if (is_admin()) {
        require_once MY_YOUTUBE_RECOMMENDATION_PLUGIN_DIR . "includes/class-youtube-recommendation-admin.php";
    }