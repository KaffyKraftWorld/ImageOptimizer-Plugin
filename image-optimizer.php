<?php
/*
Plugin Name: Image Optimizer
Plugin URI: /#
Description: Automatically optimizes uploaded images to reduce their file sizes without compromising quality.
Version: 1.0.0
Author: Kafayat Faniran
Author URI: https://www.linkedin.com/in/kafayatfaniran
License: GPL2
*/

if(! defined( 'ABSPATH' )) {
  die('Get out!');
}

register_activation_hook(__FILE__, 'image_optimizer_activate');
register_deactivation_hook(__FILE__, 'image_optimizer_deactivate');

function image_optimizer_activate() {
    // .
}

function image_optimizer_deactivate() {
    // .
}

class ImageOptimizer {

  public function __construct() {
      
      add_filter('wp_handle_upload', array($this, 'optimize_uploaded_image'));
  }

    // The image optimization function
    public function optimize_uploaded_image($file) {
        $file_path = $file['file'];
        $mime_type = $file['type'];

        if (strpos($mime_type, 'image/jpeg') !== false) {
            $this->optimize_jpeg_image($file_path);
        }

        return $file;
    }

    // Optimize JPEG images using jpegoptim
    private function optimize_jpeg_image($file_path) {
        if (function_exists('exec') && is_executable('/usr/bin/jpegoptim')) {
            $cmd = '/usr/bin/jpegoptim -o --max=85 ' . escapeshellarg($file_path);
            exec($cmd);
        }
    }
}

new ImageOptimizer();
