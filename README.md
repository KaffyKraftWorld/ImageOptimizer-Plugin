### Using the Image Optimizer Plugin

## Installation

- Download the plugin ZIP file from this GitHub repository.
- Login to your WordPress admin dashboard.
- Navigate to `Plugins` > `Add New`.
- Click on the `Upload` Plugin button.
- Choose the downloaded ZIP file and click `Install Now`.

Once installed, click on `Activate` to activate the plugin.

### Image Optimization

After activating the plugin, it will automatically optimize uploaded images to reduce their file sizes without compromising its quality. The optimization process occurs in the background when an image is uploaded to your WordPress media library.

The plugin will detect the image type and apply optimization for supported formats (e.g., JPEG). By default, the plugin uses the jpegoptim library to optimize JPEG images with a maximum quality of 85.

### Image Quality Settings (Optional)

By default, the plugin is configured to provide a good balance between image quality and file size reduction. However, if you wish to adjust the image quality settings or enable additional features, you can do so by following these steps;

- Open the `image-optimizer.php` file in your plugin directory.
- Look for the Image_Optimizer class and locate the `optimize_jpeg_image()` method.

In this method, you can modify the jpegoptim command and adjust the quality level to your desired value.

Note: Be cautious while adjusting the quality level as too much compression can lead to a visible loss of image quality.

### Testing and Debugging

After making changes to the image optimization logic or quality settings, it's essential to thoroughly test the plugin with various image formats and sizes. Check that the images are properly optimized and that the quality meets your expectations.

### Verification

To verify that the plugin is working correctly, upload an image to your WordPress media library. The plugin should optimize the image automatically, resulting in a smaller file size while maintaining acceptable image quality.