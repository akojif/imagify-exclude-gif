# Imagify - Exclude GIF Extension

## Description

**Imagify - Exclude GIF Extension** is a WordPress plugin that extends the functionality of the Imagify plugin by allowing you to exclude GIF images from being converted to WebP format.

## Installation

### Via WordPress Admin:

1. Download the latest release of the plugin from the [Releases](https://github.com/akojif/imagify-exclude-gif/releases) page.
2. Navigate to your WordPress admin area.
3. Go to Plugins -> Add New.
4. Click the "Upload Plugin" button.
5. Select the plugin ZIP file you downloaded in step 1.
6. Click "Install Now" and then "Activate Plugin".

### Via SSH/SFTP:

1. Download the latest release of the plugin from the [Releases](https://github.com/akojif/imagify-exclude-gif/releases) page.
2. Upload the plugin ZIP file to your WordPress site using SSH or SFTP.
3. Access your WordPress site's directory on the server.
4. Navigate to the `wp-content/plugins` directory.
5. Upload the plugin ZIP file to this directory.
6. Extract the contents of the ZIP file.
7. Log in to your WordPress admin area.
8. Go to Plugins.
9. Find the plugin in the list and click "Activate".

## Usage

Once the plugin is activated, it automatically integrates with the Imagify plugin. By default, Imagify automatically converts images(JPG, PNG, & GIF) to WebP format to optimize performance. However, with **Imagify - Exclude GIF Extension** activated, GIF images will be excluded from this conversion process.

## Testing

To test the plugin, you can use PHPUnit along with the WordPress testing framework. The `tests` directory contains test cases for various aspects of the plugin, including activation, deactivation, and skipping conversion of GIF to WebP.

To run the tests, follow these steps:

1. Navigate to the plugin directory in your command-line interface.
2. Execute the command `phpunit`.

## License

**Imagify - Exclude GIF Extension** is licensed under the GNU License. See the [LICENSE](LICENSE) file for more information.
