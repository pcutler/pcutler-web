<?php

/*
 * The header core options for the Shoestrap theme
 */
if ( !function_exists( 'shoestrap_module_header_options' ) ) {
  function shoestrap_module_header_options() {

    /*-----------------------------------------------------------------------------------*/
    /* The Options Array */
    /*-----------------------------------------------------------------------------------*/

    // Set the Options Array
    global $of_options, $smof_details;

    // Header
    $of_options[] = array(
      "name"      => __("Header Options", "shoestrap"),
      "type"      => "heading"
    );

    $url = admin_url( 'nav-menus.php' );
    $of_options[] = array(
      "name"      => "",
      "desc"      => "",
      "id"        => "help7",
      "std"       => "<h3 style=\"margin: 0 0 10px;\">Advanced NavBar Options</h3>
                      <p>You can activate or deactivate your Primary NavBar here, and define its properties.
                      Please note that you might have to manually create a menu if it doesn't already exist
                      and add items to it from <a href=\"$url\">this page</a>.</p>",
      "icon"      => true,
      "type"      => "info"
    );

    $url = admin_url( 'nav-menus.php?action=locations' );
    $of_options[] = array(
      "name"      => __("Type of NavBar", "shoestrap"),
      "desc"      => __("Normal mode or Pills?"),
      "id"        => "navbar_toggle",
      "std"       => 1,
      "on"        => __("Normal", "shoestrap"),
      "off"       => __("Pills", "shoestrap"),
      "customizer"=> array(),
      "type"      => "switch"
    );

    $of_options[] = array(
      "name"      => "",
      "desc"      => "",
      "id"        => "helpnavbarbg",
      "std"       => "<h3 style=\"margin: 0 0 10px;\">NavBar Styling Options</h3>
                      <p>Customize the look and feel of your navbar below.</p>",
      "icon"      => true,
      "type"      => "info"
    );    

    $of_options[] = array(
      "name"      => __("NavBar Background Color", "shoestrap"),
      "desc"      => __("Pick a background color for the NavBar. Default: #eeeeee.", "shoestrap"),
      "id"        => "navbar_bg",
      "std"       => "#f8f8f8",
      "less"      => true,
      "customizer"=> array(),
      "type"      => "color"
    );

    $of_options[] = array(
      "name"      => __("NavBar Background Opacity", "shoestrap"),
      "desc"      => __("Pick a background opacity for the NavBar. Default: 100%.", "shoestrap"),
      "id"        => "navbar_bg_opacity",
      "std"       => 100,
      "min"       => 0,
      "step"      => 1,
      "max"       => 100,
      "less"      => true,
      "type"      => "sliderui"
    );

    $of_options[] = array(
      "name"      => __("NavBar Menu Style", "shoestrap"),
      "desc"      => __("You can use an alternative menu style for your NavBars.", "shoestrap"),
      "id"        => "navbar_style",
      "std"       => 'default',
      "type"      => "select",
      "customizer"=> array(),
      "options"   => array(
        'default' => __( "Default", "shoestrap"),
        'style1'  => __( "Style", "shoestrap") . " 1",
        'style2'  => __( "Style", "shoestrap") . " 2",
        'style3'  => __( "Style", "shoestrap") . " 3",
        'style4'  => __( "Style", "shoestrap") . " 4",
        'style5'  => __( "Style", "shoestrap") . " 5",
        'style6'  => __( "Style", "shoestrap") . " 6",
      )
    );

    $of_options[] = array(
      "name"      => __("Display Branding (Sitename or Logo) on the NavBar", "shoestrap"),
      "desc"      => __("Default: ON", "shoestrap"),
      "id"        => "navbar_brand",
      "std"       => 1,
      "customizer"=> array(),
      "type"      => "switch"
    );

    $of_options[] = array(
      "name"      => __("Use Logo (if available) for branding on the NavBar", "shoestrap"),
      "desc"      => __("If this option is OFF, or there is no logo available, then the sitename will be displayed instead. Default: ON", "shoestrap"),
      "id"        => "navbar_logo",
      "std"       => 1,
      "customizer"=> array(),
      "type"      => "switch"
    );

    $of_options[] = array(
      "name"      => __("Logo Margin from top", "shoestrap"),
      "desc"      => __("Tweak the margin from top of the logo in your NavBar. Minimum: -30px, Maximum: 30px. Default: 0", "shoestrap"),
      "id"        => "logo_top_margin",
      "std"       => 0,
      "min"       => -100,
      "step"      => 1,
      "max"       => 100,
      "less"      => true,
      "type"      => "sliderui"
    );

    $of_options[] = array(
      "name"      => __("NavBar Positioning", "shoestrap"),
      "desc"      => __("Using this option you can set the navbar to be fixed to top, fixed to bottom or normal. When you're using one of the \"fixed\" options, the navbar will stay fixed on the top or bottom of the page. Default: Normal", "shoestrap"),
      "id"        => "navbar_fixed",
      "std"       => 0,
      "on"        => __("Fixed", "shoestrap"),
      "off"       => __("Scroll", "shoestrap"),
      "type"      => "switch"
    );

    $of_options[] = array(
      "name"      => __("Fixed NavBar Position", "shoestrap"),
      "desc"      => __("Using this option you can set the navbar to be fixed to top, fixed to bottom or normal. When you're using one of the \"fixed\" options, the navbar will stay fixed on the top or bottom of the page. Default: Normal", "shoestrap"),
      "id"        => "navbar_fixed_position",
      "fold"      => "navbar_fixed",
      "std"       => 0,
      "on"        => __("Bottom", "shoestrap"),
      "off"       => __("Top", "shoestrap"),
      "type"      => "switch"
    );

    $of_options[] = array(
      "name"      => __("NavBar Height", "shoestrap"),
      "desc"      => __("Select the height of the NavBar in pixels. Should be equal or greater than the height of your logo if you've added one.", "shoestrap"),
      "id"        => "navbar_height",
      "std"       => 50,
      "min"       => 38,
      "step"      => 1,
      "max"       => 200,
      "less"      => true,
      "type"      => "sliderui"
    );

    $of_options[] = array(
      "name"      => __("Navbar Font", "shoestrap"),
      "desc"      => __("The font used in navbars.", "shoestrap"),
      "id"        => "font_navbar",
      'less'      => true,
      "std"       => array(
        'face'    => 'Arial, Helvetica, sans-serif',
        'size'    => '14px',
        'color'   => '#333333',
        'google'  => 'false',
        'color'   => '#333333',
      ),
      "preview"   => array(
        "text"    => __( "This is my preview text!", "shoestrap" ), //this is the text from preview box
        "size"    => "30px" //this is the text size from preview box
      ),
      "type"      => "select_google_font_hybrid",
      "fold"      => "advanced_toggle"
    );

    $of_options[] = array(
      "name"      => __("Branding Font", "shoestrap"),
      "desc"      => __("The branding font for your site.", "shoestrap"),
      "id"        => "font_brand",
      'less'      => true,
      "std"       => array(
        'face'    => 'Arial, Helvetica, sans-serif',
        'size'    => '18px',
        'color'   => '#333333',
        'google'  => 'false',
        'color'   => '#333333',
      ),
      "preview"   => array(
        "text"    => __( "This is my preview text!", "shoestrap" ), //this is the text from preview box
        "size"    => "30px" //this is the text size from preview box
      ),
      "type"      => "select_google_font_hybrid",
      "fold"      => "advanced_toggle"
    );

    $of_options[] = array(
      "name"      => __("NavBar Margin", "shoestrap"),
      "desc"      => __("Select the top and bottom margin of the NavBar in pixels. Applies only in static top navbar (scroll condition). Default: 0px.", "shoestrap"),
      "id"        => "navbar_margin",
      "std"       => 0,
      "min"       => 0,
      "step"      => 1,
      "max"       => 200,
      "type"      => "sliderui"
    );

    $of_options[] = array(
      "name"      => __("Display social links in the NavBar.", "shoestrap"),
      "desc"      => __("Display social links in the NavBar. These can be setup in the \"Social\" section on the left. Default: OFF", "shoestrap"),
      "id"        => "navbar_social",
      "customizer"=> array(),
      "std"       => 0,
      "type"      => "switch"
    );

    $of_options[] = array(
      "name"      => __("Search form on the NavBar", "shoestrap"),
      "desc"      => __("Display a search form in the NavBar. Default: On", "shoestrap"),
      "id"        => "navbar_search",
      "customizer"=> array(),
      "std"       => 1,
      "type"      => "switch"
    );

    $of_options[] = array(
      "name"      => __("Float NavBar menu to the right", "shoestrap"),
      "desc"      => __("Floats the primary navigation to the right. Default: On", "shoestrap"),
      "id"        => "navbar_nav_right",
      "std"       => 1,
      "customizer"=> array(),
      "type"      => "switch"
    );

    $of_options[] = array(
      "name"      => "",
      "desc"      => "",
      "id"        => "help9",
      "std"       => "<h3 style=\"margin: 0 0 10px;\">Secondary NavBar</h3>
                      <p>The secondary navbar is a 2nd navbar, located right above the main wrapper. You can show a menu there, by assigning it from Appearance -> Menus.</p>",
      "icon"      => true,
      "type"      => "info",
      "fold"      => "advanced_toggle"
    );

    $of_options[] = array(
      "name"      => __("Enable the Secondary NavBar", "shoestrap"),
      "desc"      => __("Display a Secondary NavBar on top of the Main NavBar. Default: ON", "shoestrap"),
      "id"        => "secondary_navbar_toggle",
      "customizer"=> array(),
      "std"       => 0,
      "type"      => "switch",
      "fold"      => "advanced_toggle"
    );

    $of_options[] = array(
      "name"      => __("Display social networks in the navbar", "shoestrap"),
      "desc"      => __("Enable this option to display your social networks as a dropdown menu on the seondary navbar.", "shoestrap"),
      "id"        => "navbar_secondary_social",
      "fold"      => "secondary_navbar_toggle",
      "std"       => 0,
      "type"      => "switch",
    );

    $of_options[] = array(
      "name"      => __("Secondary NavBar Margin", "shoestrap"),
      "desc"      => __("Select the top and bottom margin of header in pixels. Default: 0px.", "shoestrap"),
      "id"        => "secondary_navbar_margin",
      "std"       => 0,
      "min"       => 0,
      "max"       => 200,
      "type"      => "sliderui",
      "fold"      => "secondary_navbar_toggle"
    );

    $url = admin_url( 'widgets.php' );
    $of_options[] = array(
      "name"      => "",
      "desc"      => "",
      "id"        => "help9",
      "std"       => "<h3 style=\"margin: 0 0 10px;\">Extra Branding Area</h3>
                      <p>You can enable an extra branding/header area. In this header you can add your logo, and any other widgets you wish.
                      To add widgets on your header, visit <a href=\"$url\">this page</a> and add your widgets to the <strong>Header</strong> Widget Area.</p>",
      "icon"      => true,
      "type"      => "info",
      "fold"      => "advanced_toggle"
    );

    $of_options[] = array(
      "name"      => __("Display the Header.", "shoestrap"),
      "desc"      => __("Turn this ON to display the header. Default: OFF", "shoestrap"),
      "id"        => "header_toggle",
      "customizer"=> array(),
      "std"       => 0,
      "type"      => "switch",
      "fold"      => "advanced_toggle"
    );

    $of_options[] = array(
      "name"      => __("Display branding on your Header.", "shoestrap"),
      "desc"      => __("Turn this ON to display branding (Sitename or Logo)on your Header. Default: ON", "shoestrap"),
      "id"        => "header_branding",
      "customizer"=> array(),
      "std"       => 1,
      "type"      => "switch",
      "fold"      => "header_toggle"
    );

    $of_options[] = array(
      "name"      => __("Header Background Color", "shoestrap"),
      "desc"      => __("Select the background color for your header. Default: #EEEEEE.", "shoestrap"),
      "id"        => "header_bg",
      "std"       => "#EEEEEE",
      "customizer"=> array(),
      "type"      => "color",
      "fold"      => "header_toggle"
    );

    $of_options[] = array(
      "name"      => __("Header Background Opacity", "shoestrap"),
      "desc"      => __("Select the background opacity for your header. Default: 100%.", "shoestrap"),
      "id"        => "header_bg_opacity",
      "std"       => 100,
      "min"       => 0,
      "step"      => 1,
      "max"       => 100,
      "less"      => true,
      "type"      => "sliderui",
      "fold"      => "header_toggle"
    );

    $of_options[] = array(
      "name"      => __("Header Text Color", "shoestrap"),
      "desc"      => __("Select the text color for your header. Default: #333333.", "shoestrap"),
      "id"        => "header_color",
      "std"       => "#333333",
      "customizer"=> array(),
      "type"      => "color",
      "fold"      => "header_toggle"
    );

    $of_options[] = array(
      "name"      => __("Header Top Margin", "shoestrap"),
      "desc"      => __("Select the top margin of header in pixels. Default: 0px.", "shoestrap"),
      "id"        => "header_margin_top",
      "std"       => 0,
      "min"       => 0,
      "max"       => 200,
      "type"      => "sliderui",
      "fold"      => "header_toggle"
    );

    $of_options[] = array(
      "name"      => __("Header Bottom Margin", "shoestrap"),
      "desc"      => __("Select the bottom margin of header in pixels. Default: 0px.", "shoestrap"),
      "id"        => "header_margin_bottom",
      "std"       => 0,
      "min"       => 0,
      "max"       => 200,
      "type"      => "sliderui",
      "fold"      => "header_toggle"
    );



    do_action( 'shoestrap_module_header_options_modifier' );

    $smof_details = array();
    foreach( $of_options as $option ) {
      if (isset($option['id']))
        $smof_details[$option['id']] = $option;
    }
  }
}
add_action( 'init', 'shoestrap_module_header_options', 65 );

include_once( dirname(__FILE__).'/functions.navbar.php' );
include_once( dirname(__FILE__).'/functions.secondary.navbar.php' );
include_once( dirname(__FILE__).'/functions.header.php' );
include_once( dirname(__FILE__).'/functions.slide-down.php' );
