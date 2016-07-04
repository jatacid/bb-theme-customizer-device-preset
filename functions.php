<?php

// Add this code to your functions.php file of your Beaver Builder Child Theme


// Adjust the Medium device width

    function customtheme_adjust_customizer_responsive_sizes() {
        $tablet_margin_left = '50%'; //Half of -$tablet_width
        $tablet_width = '768px';
        $tablet_height = '1080px';
?>
        <style>
            .wp-customizer .preview-tablet .wp-full-overlay-main {
                left: <?php echo $tablet_margin_left; ?>;
                width: <?php echo $tablet_width; ?>;
                height: <?php echo $tablet_height; ?>;
            }
        </style>
<?php  } 
add_action( 'customize_controls_print_styles', 'customtheme_adjust_customizer_responsive_sizes' );
