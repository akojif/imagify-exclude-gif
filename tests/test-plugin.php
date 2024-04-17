<?php
class Test_Imagify_GIF_Extension extends WP_UnitTestCase {
    
    function test_extension_activation() {
        activate_plugin( 'imagify/imagify.php' );
        activate_plugin( 'imagify-exclude-gif/exclude-gif.php' );
        $this->assertTrue( 
            is_plugin_active( 'imagify-exclude-gif/exclude-gif.php' ),
            'Plugin should be active after activation.'
        );
    }

    function test_extension_deactivation() {
        activate_plugin( 'imagify/imagify.php' );
        activate_plugin( 'imagify-exclude-gif/exclude-gif.php' );
        deactivate_plugins( 'imagify-exclude-gif/exclude-gif.php' );
        $this->assertFalse( 
            is_plugin_active( 'imagify-exclude-gif/exclude-gif.php' ),
            'Plugin should be inactive after deactivation.'
        );
    }

    function test_imagify_required_for_activation() {
        deactivate_plugins( 'imagify/imagify.php' );
        activate_plugin( 'imagify-exclude-gif/exclude-gif.php' );
        $this->assertFalse( 
            is_plugin_active( 'imagify-exclude-gif/exclude-gif.php' ),
            'Plugin should not be active when Imagify plugin is not active.'
        );
        $this->assertRegExp( 
            '/Imagify plugin before activating/', 
            get_transient( 'plugin_error_transient' ),
            'Error message should be displayed when Imagify plugin is not active.'
        );
    }

    function test_no_webp_for_gif() {
        $gif_file = $this->factory->attachment->create_upload_object( 'image.gif', 0, array( 'post_mime_type' => 'image/gif' ) );
        $response = no_webp_for_gif( null, null, $gif_file, null, null, true, false );
        $this->assertNull( 
            $response, 
            'Function should return null when processing a GIF image.'
        );
        if ($response !== null) {
            $this->assertInstanceOf( 
                'WP_Error', 
                $response, 
                'Function should return a WP_Error object when processing a GIF image.'
            );
        }
    }
}