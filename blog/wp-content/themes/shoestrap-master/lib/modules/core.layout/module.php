<?php

/*
 * The layout core options for the Shoestrap theme
 */
if ( !function_exists( 'shoestrap_module_layout_options' ) ) {
  function shoestrap_module_layout_options() {

    /*-----------------------------------------------------------------------------------*/
    /* The Options Array */
    /*-----------------------------------------------------------------------------------*/

    // Set the Options Array
    global $of_options, $smof_details;

    // Layout Settings
    $of_options[] = array(
      "name"      => __("Layout Options", "shoestrap"),
      "type"      => "heading"
    );

    $of_options[] = array(
      "name"      => "",
      "desc"      => "",
      "id"        => "help5",
      "std"       => "<h3 style=\"margin: 0 0 10px;\">Layout Options</h3>
                      <p>In this area you can select your site's layout, the width of your sidebars,
                      as well as other, more advanced options.</p>",
      "icon"      => true,
      "type"      => "info"
    );

    $of_options[] = array(
      "name"      => __("Site Style", "shoestrap"),
      "desc"      => __("Select the default site layout. Default: Wide", "shoestrap"),
      "id"        => "site_style",
      "std"       => "wide",
      "type"      => "select",
      "customizer"=> array(),
      "options"   => array(
        'wide'    =>"Wide",
        'boxed'   =>"Boxed",
        'fluid'   =>"Fluid",
      )
    );

    $of_options[] = array(
      "name"      => __("Layout", "shoestrap"),
      "desc"      => __("Select main content and sidebar arrangement. Choose between 1, 2 or 3 column layout.", "shoestrap"),
      "id"        => "layout",
      "std"       => get_theme_mod('layout', 1),
      "type"      => "images",
      "customizer"=> array(),
      "options"   => array(
        0         => get_template_directory_uri() . SMOF_DIR . '/addons/assets/images/1c.png',
        1         => get_template_directory_uri() . SMOF_DIR . '/addons/assets/images/2cr.png',
        2         => get_template_directory_uri() . SMOF_DIR . '/addons/assets/images/2cl.png',
        3         => get_template_directory_uri() . SMOF_DIR . '/addons/assets/images/3cl.png',
        4         => get_template_directory_uri() . SMOF_DIR . '/addons/assets/images/3cr.png',
        5         => get_template_directory_uri() . SMOF_DIR . '/addons/assets/images/3cm.png',
      )
    );

        $of_options[] = array(
      "name"      => __("Primary Sidebar Width", "shoestrap"),
      "desc"      => __("Select the width of the Primary Sidebar. Please note that the values represent grid columns. The total width of the page is 12 columns, so selecting 4 here will make the primary sidebar to have a width of 1/3 (4/12) of the total page width.", "shoestrap"),
      "id"        => "layout_primary_width",
      "std"       => 4,
      "min"       => 1,
      "step"      => 1,
      "max"       => 11,
      "advanced"  => true,
      "type"      => "sliderui"
    );

    $of_options[] = array(
      "name"      => __("Secondary Sidebar Width", "shoestrap"),
      "desc"      => __("Select the width of the Secondary Sidebar. Please note that the values represent grid columns. The total width of the page is 12 columns, so selecting 4 here will make the secondary sidebar to have a width of 1/3 (4/12) of the total page width.", "shoestrap"),
      "id"        => "layout_secondary_width",
      "std"       => 3,
      "min"       => 1,
      "step"      => 1,
      "max"       => 11,
      "advanced"  => true,
      "type"      => "sliderui"
    );

    $of_options[] = array(
      "name"      => __("Show sidebars on the frontpage", "shoestrap"),
      "desc"      => __("OFF by default. If you want to display the sidebars in your frontpage, turn this ON.", "shoestrap"),
      "id"        => "layout_sidebar_on_front",
      "customizer"=> array(),
      "std"       => 0,
      "type"      => "switch"
    );

    $of_options[] = array(
      "name"      => __("Margin from top (Works best in \"Boxed\" mode)", "shoestrap"),
      "desc"      => __("This will add a margin above the navbar. Useful if you've enabled the 'Boxed' mode above. Default: 0px", "shoestrap"),
      "id"        => "navbar_margin_top",
      "fold"      => "navbar_boxed",
      "std"       => 0,
      "min"       => 0,
      "step"      => 1,
      "max"       => 120,
      "advanced"  => true,
      "type"      => "sliderui"
    );


    $of_options[] = array(
      "name"      => __("Show Breadcrumbs", "shoestrap"),
      "desc"      => __("Display Breadcrumbs. Default: OFF.", "shoestrap"),
      "id"        => "breadcrumbs",
      "std"       => 0,
      "type"      => "switch",
      "customizer"=> array(),
    );

    $of_options[] = array(
      "name"      => __("Breadcrumbs Location", "shoestrap"),
      "desc"      => __("Display Breadcrumbs. Default: OFF.", "shoestrap"),
      "id"        => "breadcrumbs_location",
      "std"       => 0,
      "on"        => "In Header",
      "off"       => "Below Header",
      "type"      => "switch",
      "fold"      => "breadcrumbs",
      "customizer"=> array(),
    );

    $of_options[] = array(
      "name"      => __("Body Top Margin", "shoestrap"),
      "desc"      => __("Select the top margin of body element in pixels. Default: 0px.", "shoestrap"),
      "id"        => "body_margin_top",
      "std"       => 0,
      "min"       => 0,
      "max"       => 200,
      "type"      => "sliderui",
      "fold"      => "advanced_toggle"
    );

    $of_options[] = array(
      "name"      => __("Body Bottom Margin", "shoestrap"),
      "desc"      => __("Select the bottom margin of body element in pixels. Default: 0px.", "shoestrap"),
      "id"        => "body_margin_bottom",
      "std"       => 0,
      "min"       => 0,
      "max"       => 200,
      "type"      => "sliderui",
      "fold"      => "advanced_toggle"
    );

    $of_options[] = array(
      "name"      => __("Custom Grid", "shoestrap"),
      "desc"      => "<strong>" . __("CAUTION:", "shoestrap") . "</strong> " . __("Only use this if you know what you are doing, as changing these values might break the way your site looks on some devices. The default settings should be fine for the vast majority of sites.", "shoestrap"),
      "id"        => "custom_grid",
      "std"       => 0,
      "type"      => "switch",
      "fold"      => "advanced_toggle"
    );

    $of_options[] = array(
      "name"      => __("Tablet Container Width", "shoestrap"),
      "desc"      => __("The width of Tablet screens. This is used to calculate the responsive layout breakpoints. Suitable for phones. Default: 728px", "shoestrap"),
      "id"        => "container_tablet",
      "fold"      => "custom_grid",
      "std"       => 720,
      "min"       => 620,
      "step"      => 2,
      "max"       => 2100,
      "advanced"  => true,
      "less"      => true,
      "type"      => "sliderui"
    );

    $of_options[] = array(
      "name"      => __("Desktop Container Width", "shoestrap"),
      "desc"      => __("The width of normal screens. This is used to calculate the responsive layout breakpoints. Suitable for medium & normal screens. Default: 940px", "shoestrap"),
      "id"        => "container_desktop",
      "fold"      => "custom_grid",
      "std"       => 940,
      "min"       => 620,
      "step"      => 2,
      "max"       => 2100,
      "advanced"  => true,
      "less"      => true,
      "type"      => "sliderui",

    );

    $of_options[] = array(
      "name"      => __("Large Desktop Container Width", "shoestrap"),
      "desc"      => __("The width of Large Desktop screens. This is used to calculate the responsive layout breakpoints. Suitable for large screens. Default: 1170px", "shoestrap"),
      "id"        => "container_large_desktop",
      "fold"      => "custom_grid",
      "std"       => 1140,
      "min"       => 620,
      "step"      => 2,
      "max"       => 2100,
      "advanced"  => true,
      "less"      => true,
      "type"      => "sliderui"
    );

    $of_options[] = array(
      "name"      => __("Columns Gutter", "shoestrap"),
      "desc"      => __("The space between the columns in your grid. Default: 30px", "shoestrap"),
      "id"        => "layout_gutter",
      "fold"      => "custom_grid",
      "std"       => 30,
      "min"       => 0,
      "step"      => 2,
      "max"       => 100,
      "advanced"  => true,
      "less"      => true,
      "type"      => "sliderui",
    );

    do_action( 'shoestrap_module_layout_options_modifier' );

    $smof_details = array();
    foreach( $of_options as $option ) {
      if (isset($option['id']))
        $smof_details[$option['id']] = $option;
    }
  }
}
add_action( 'init','shoestrap_module_layout_options', 55 );

include_once( dirname(__FILE__).'/functions.layout.php' );
