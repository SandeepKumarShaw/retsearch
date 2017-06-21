<?php

if ( ! defined( 'ABSPATH' ) ) {
    die( 'Error!' );
}

function Advanced_Search_by_tier5_menu() { 
    add_menu_page( 'Advanced Rets Search', 'Advanced Rets Search', 1, 'asbt_page_options', 'rets_search_css_setting' );
    add_submenu_page( 'asbt_page_options', 'Advanced Rets Search', 'Settings', 'manage_options', 'rets-search-settings', 'rets_search_settings_page' );
}
add_action('admin_menu', 'Advanced_Search_by_tier5_menu');

function rets_search_css_setting(){
    include('rets_search_form_css.php');
    retssearchCSSSettings();
}

add_action( 'admin_print_scripts', 'asbt_admin_scripts' );






add_action( 'admin_init', function() {
//register_setting( 'my-rets-search-plugin-settings', 'RS_Global' );
register_setting( 'my-rets-search-plugin-settings', 'RS_Global_Result' );
register_setting( 'my-rets-search-plugin-settings', 'RS_Advanced' );
register_setting( 'my-rets-search-plugin-settings', 'RS_NewSearch' );
register_setting( 'my-rets-search-plugin-settings', 'RS_ModifiedSearchPage' );
register_setting( 'my-rets-search-plugin-settings', 'RS_Mortgagesearch' );
register_setting( 'my-rets-search-plugin-settings', 'RS_PrintableFlyer' );
});


function rets_search_settings_page() {
?>
<div class="wrap">
<form action="options.php" method="post">

<?php
settings_fields( 'my-rets-search-plugin-settings' );
do_settings_sections( 'my-rets-search-plugin-settings' );
?>
<table>

<!--    <tr>
        <th>Rets Global Search page Slug</th>
        <td><input type="text" placeholder="Enter your page slug" name="RS_Global" value="<?php echo esc_attr( get_option('RS_Global') ); ?>" size="30" /></td>
        <td></td>
    </tr>-->
    <tr>
        <th>RETS Search Page Slug</th>
        <td><input type="text" placeholder="Enter your page slug" name="RS_Global_Result" value="<?php echo esc_attr( get_option('RS_Global_Result') ); ?>" size="30" /></td>
        <td><em>Shortcode : [global_rets_search_result]</em></td>
    </tr>
    <tr>
        <th>Advanced Search Page Slug</th>
        <td><input type="text" placeholder="Enter your page slug" name="RS_Advanced" value="<?php echo esc_attr( get_option('RS_Advanced') ); ?>" size="30" /></td>
        <td><em>Shortcode : [advanced_rets_search]</em></td>
    </tr>
    <tr>
        <th>Property Details Page Slug</th>
        <td><input type="text" placeholder="Enter your page slug" name="RS_NewSearch" value="<?php echo esc_attr( get_option('RS_NewSearch') ); ?>" size="30" /></td>
        <td><em>Shortcode : [property_details]</em></td>
    </tr>
    <tr>
        <th>Photo Gallery Page Slug</th>
        <td><input type="text" placeholder="Enter your page slug" name="RS_ModifiedSearchPage" value="<?php echo esc_attr( get_option('RS_ModifiedSearchPage') ); ?>" size="30" /></td>
        <td><em>Shortcode : [property_photo_gallery]</em></td>
    </tr>
    <tr>
        <th>Rets Mortgage Page Slug</th>
        <td><input type="text" placeholder="Enter your page slug" name="RS_Mortgagesearch" value="<?php echo esc_attr( get_option('RS_Mortgagesearch') ); ?>" size="30" /></td>
        <td><em>Shortcode : [rets_mortgage_page]</em></td>        
    </tr>
    <tr>
        <th>Rets PrintableFlyer Page Slug</th>
        <td><input type="text" placeholder="Enter your page slug" name="RS_PrintableFlyer" value="<?php echo esc_attr( get_option('RS_PrintableFlyer') ); ?>" size="30" /></td>
        <td><em>Shortcode : [rets_printableflyer_page]</em></td>        
    </tr>
</table>
    <p>
        <em>Shortcode for RETS global search widget : [global_rets_search action=<?php echo site_url(); ?>/<?php echo esc_attr( get_option('RS_Global_Result') ); ?>]</em>
    </p>
    <?php submit_button(); ?>
</form>
</div>
<?php
}