<?php

    /**
     * Plugin Name: My Youtube Recommendation
     */

    add_filter('the_content', 'thanks');

    function thanks($content) {
        return $content . "<p><strong></strong></p>";
    }