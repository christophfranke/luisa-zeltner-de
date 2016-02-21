<?php

// Create custom admin table if it doesn't exist

function createtable_photocrati_admin() {
	global $table_prefix, $wpdb;
	
	$photocrati_styles = $table_prefix . "photocrati_styles";
	
	if($wpdb->get_var("show tables like '$photocrati_styles'") == $photocrati_styles) {
	
		function add_column_if_not_exist($db, $column, $column_attr){
			global $wpdb;
			$columns = $wpdb->get_results("SHOW COLUMNS FROM $db LIKE '$column'");
			if(!$columns){
				$wpdb->query("ALTER TABLE `$db` ADD `$column`  $column_attr");
			}
		}
		
		add_column_if_not_exist($photocrati_styles, 'preset_name', 'TINYTEXT NULL');
		add_column_if_not_exist($photocrati_styles, 'preset_title', 'TINYTEXT NULL');
		add_column_if_not_exist($photocrati_styles, 'header_height', 'TINYTEXT NULL');
		add_column_if_not_exist($photocrati_styles, 'header_logo_margin_above', 'TINYTEXT NULL');
		add_column_if_not_exist($photocrati_styles, 'header_logo_margin_below', 'TINYTEXT NULL');
		add_column_if_not_exist($photocrati_styles, 'title_size', 'TINYTEXT NULL');
		add_column_if_not_exist($photocrati_styles, 'title_color', 'TINYTEXT NULL');
		add_column_if_not_exist($photocrati_styles, 'title_style', 'TINYTEXT NULL');
		add_column_if_not_exist($photocrati_styles, 'description_size', 'TINYTEXT NULL');
		add_column_if_not_exist($photocrati_styles, 'description_color', 'TINYTEXT NULL');
		add_column_if_not_exist($photocrati_styles, 'description_style', 'TINYTEXT NULL');
		add_column_if_not_exist($photocrati_styles, 'bg_top_offset', 'TINYTEXT NULL');
		add_column_if_not_exist($photocrati_styles, 'container_padding', 'TINYTEXT NULL');
		add_column_if_not_exist($photocrati_styles, 'footer_font', 'TINYTEXT NULL');
		add_column_if_not_exist($photocrati_styles, 'footer_font_color', 'TINYTEXT NULL');
	
	} else {
	
		$sql0 = "CREATE TABLE `". $photocrati_styles . "` ( ";
		$sql0 .= " `option_set` numeric NOT NULL, ";
		$sql0 .= " `dynamic_style` tinytext NOT NULL, ";
		$sql0 .= " `display_sidebar` tinytext NOT NULL, ";
		$sql0 .= " `content_width` tinytext NOT NULL, ";
		$sql0 .= " `sidebar_width` tinytext NOT NULL, ";
		$sql0 .= " `logo_menu_position` tinytext NOT NULL, ";
		$sql0 .= " `bg_color` tinytext NOT NULL, ";
		$sql0 .= " `bg_image` tinytext NOT NULL, ";
		$sql0 .= " `bg_repeat` tinytext NOT NULL, ";
		$sql0 .= " `header_bg_color` tinytext NOT NULL, ";
		$sql0 .= " `header_bg_image` tinytext NOT NULL, ";
		$sql0 .= " `header_bg_repeat` tinytext NOT NULL, ";
		$sql0 .= " `container_color` tinytext NOT NULL, ";
		$sql0 .= " `container_border` tinytext NOT NULL, ";
		$sql0 .= " `container_border_color` tinytext NOT NULL, ";
		$sql0 .= " `font_color` tinytext NOT NULL, ";
		$sql0 .= " `font_size` tinytext NOT NULL, ";
		$sql0 .= " `font_style` tinytext NOT NULL, ";
		$sql0 .= " `h1_color` tinytext NOT NULL, ";
		$sql0 .= " `h1_size` tinytext NOT NULL, ";
		$sql0 .= " `h2_color` tinytext NOT NULL, ";
		$sql0 .= " `h2_size` tinytext NOT NULL, ";
		$sql0 .= " `h3_color` tinytext NOT NULL, ";
		$sql0 .= " `h3_size` tinytext NOT NULL, ";
		$sql0 .= " `h4_color` tinytext NOT NULL, ";
		$sql0 .= " `h4_size` tinytext NOT NULL, ";
		$sql0 .= " `h5_color` tinytext NOT NULL, ";
		$sql0 .= " `h5_size` tinytext NOT NULL, ";
		$sql0 .= " `link_color` tinytext NOT NULL, ";
		$sql0 .= " `link_hover_color` tinytext NOT NULL, ";
		$sql0 .= " `link_hover_style` tinytext NOT NULL, ";
		$sql0 .= " `sidebar_font_color` tinytext NOT NULL, ";
		$sql0 .= " `sidebar_font_size` tinytext NOT NULL, ";
		$sql0 .= " `sidebar_font_style` tinytext NOT NULL, ";
		$sql0 .= " `sidebar_bg_color` tinytext NOT NULL, ";
		$sql0 .= " `sidebar_link_color` tinytext NOT NULL, ";
		$sql0 .= " `sidebar_link_hover_color` tinytext NOT NULL, ";
		$sql0 .= " `sidebar_link_hover_style` tinytext NOT NULL, ";
		$sql0 .= " `sidebar_title_color` tinytext NOT NULL, ";
		$sql0 .= " `sidebar_title_size` tinytext NOT NULL, ";
		$sql0 .= " `sidebar_title_style` tinytext NOT NULL, ";
		$sql0 .= " `menu_style` tinytext NOT NULL, ";
		$sql0 .= " `menu_color` tinytext NOT NULL, ";
		$sql0 .= " `menu_hover_color` tinytext NOT NULL, ";
		$sql0 .= " `menu_font_size` tinytext NOT NULL, ";
		$sql0 .= " `menu_font_style` tinytext NOT NULL, ";
		$sql0 .= " `menu_font_color` tinytext NOT NULL, ";
		$sql0 .= " `menu_font_hover_color` tinytext NOT NULL, ";
		$sql0 .= " `submenu_color` tinytext NOT NULL, ";
		$sql0 .= " `submenu_hover_color` tinytext NOT NULL, ";
		$sql0 .= " `submenu_font_size` tinytext NOT NULL, ";
		$sql0 .= " `submenu_font_style` tinytext NOT NULL, ";
		$sql0 .= " `submenu_font_color` tinytext NOT NULL, ";
		$sql0 .= " `submenu_font_hover_color` tinytext NOT NULL, ";
		$sql0 .= " `nextgen_border` tinytext NOT NULL, ";
		$sql0 .= " `nextgen_border_color` tinytext NOT NULL, ";
		$sql0 .= " `custom_logo` tinytext NOT NULL, ";
		$sql0 .= " `custom_logo_image` tinytext NOT NULL, ";
		$sql0 .= " `footer_copy` longtext NOT NULL, ";
		$sql0 .= " `custom_sidebar` tinytext NOT NULL, ";
		$sql0 .= " `custom_sidebar_position` tinytext NOT NULL, ";
		$sql0 .= " `custom_sidebar_html` longtext NOT NULL, ";
		$sql0 .= " `social_media` tinytext NOT NULL, ";
		$sql0 .= " `social_media_title` tinytext NOT NULL, ";
		$sql0 .= " `social_media_set` tinytext NOT NULL, ";
		$sql0 .= " `social_rss` tinytext NOT NULL, ";
		$sql0 .= " `social_email` longtext NOT NULL, ";
		$sql0 .= " `social_twitter` tinytext NOT NULL, ";
		$sql0 .= " `social_facebook` longtext NOT NULL, ";
		$sql0 .= " `google_analytics` longtext NOT NULL, ";
		$sql0 .= " `custom_css` longtext NOT NULL, ";
		$sql0 .= " `preset_name` tinytext NOT NULL, ";
		$sql0 .= " `preset_title` tinytext NOT NULL, ";
		$sql0 .= " `header_height` tinytext NOT NULL, ";
		$sql0 .= " `header_logo_margin_above` tinytext NOT NULL, ";
		$sql0 .= " `header_logo_margin_below` tinytext NOT NULL, ";
		$sql0 .= " `title_size` tinytext NOT NULL, ";
		$sql0 .= " `title_color` tinytext NOT NULL, ";
		$sql0 .= " `title_style` tinytext NOT NULL, ";
		$sql0 .= " `description_size` tinytext NOT NULL, ";
		$sql0 .= " `description_color` tinytext NOT NULL, ";
		$sql0 .= " `description_style` tinytext NOT NULL, ";
		$sql0 .= " `bg_top_offset` tinytext NOT NULL, ";
		$sql0 .= " `container_padding` tinytext NOT NULL, ";
		$sql0 .= " `footer_font` tinytext NOT NULL, ";
		$sql0 .= " `footer_font_color` tinytext NOT NULL ";
		$sql0 .= ") ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ; ";
		
		require_once(ABSPATH . 'wp-admin/upgrade-functions.php');
		dbDelta($sql0);
		
		$sql1 = "INSERT INTO ". $photocrati_styles . " VALUES (";
		$sql1 .= "1 "; // option_set
		$sql1 .= ",'YES'"; // dynamic_style
		$sql1 .= ",'YES'"; // display_sidebar
		$sql1 .= ",'70'"; // content_width
		$sql1 .= ",'30'"; // sidebar_width
		$sql1 .= ",'bottom-top'"; // logo_menu_position
		$sql1 .= ",'000000'"; // bg_color
		$sql1 .= ",''"; // bg_image
		$sql1 .= ",'repeat'"; // bg_repeat
		$sql1 .= ",'000000'"; // header_bg_color
		$sql1 .= ",''"; // header_bg_image
		$sql1 .= ",'repeat'"; // header_bg_repeat
		$sql1 .= ",'transparent'"; // container_color
		$sql1 .= ",'0'"; // container_border
		$sql1 .= ",'FFFFFF'"; // container_border_color
		$sql1 .= ",'FFFFFF'"; // font_color
		$sql1 .= ",'12'"; // font_size
		$sql1 .= ",'Arial, Helvetica, sans-serif'"; // font_style
		$sql1 .= ",'FFFFFF'"; // h1_color
		$sql1 .= ",'22'"; // h1_size
		$sql1 .= ",'FFFFFF'"; // h2_color
		$sql1 .= ",'20'"; // h2_size
		$sql1 .= ",'FFFFFF'"; // h3_color
		$sql1 .= ",'18'"; // h3_size
		$sql1 .= ",'FFFFFF'"; // h4_color
		$sql1 .= ",'16'"; // h4_size
		$sql1 .= ",'FFFFFF'"; // h5_color
		$sql1 .= ",'14'"; // h5_size
		$sql1 .= ",'eb941a'"; // link_color
		$sql1 .= ",'ff6600'"; // link_hover_color
		$sql1 .= ",'none'"; // link_hover_style
		$sql1 .= ",'ababab'"; // sidebar_font_color
		$sql1 .= ",'12'"; // sidebar_font_size
		$sql1 .= ",'Arial, Helvetica, sans-serif'"; // sidebar_font_style
		$sql1 .= ",'transparent'"; // sidebar_bg_color
		$sql1 .= ",'eb941a'"; // sidebar_link_color
		$sql1 .= ",'ff6600'"; // sidebar_link_hover_color
		$sql1 .= ",'underline'"; // sidebar_link_hover_style
		$sql1 .= ",'b0854a'"; // sidebar_title_color
		$sql1 .= ",'14'"; // sidebar_title_size
		$sql1 .= ",'Arial, Helvetica, sans-serif'"; // sidebar_title_style
		$sql1 .= ",'color'"; // menu_style
		$sql1 .= ",'000000'"; // menu_color
		$sql1 .= ",'eb941a'"; // menu_hover_color
		$sql1 .= ",'12'"; // menu_font_size
		$sql1 .= ",'Arial, Helvetica, sans-serif'"; // menu_font_style
		$sql1 .= ",'FFFFFF'"; // menu_font_color
		$sql1 .= ",'704100'"; // menu_font_hover_color
		$sql1 .= ",'474747'"; // submenu_color
		$sql1 .= ",'eb941a'"; // submenu_hover_color
		$sql1 .= ",'12'"; // submenu_font_size
		$sql1 .= ",'Arial, Helvetica, sans-serif'"; // submenu_font_style
		$sql1 .= ",'FFFFFF'"; // submenu_font_color
		$sql1 .= ",'704100'"; // submenu_font_hover_color
		$sql1 .= ",'5'"; // nextgen_border
		$sql1 .= ",'E1E1E1'"; // nextgen_border_color
		$sql1 .= ",'custom'"; // custom_logo
		$sql1 .= ",'Logo_Orange2.png'"; // custom_logo_image
		$sql1 .= ",''"; // footer_copy
		$sql1 .= ",'OFF'"; // custom_sidebar
		$sql1 .= ",'ABOVE'"; // custom_sidebar_position
		$sql1 .= ",''"; // custom_sidebar_html
		$sql1 .= ",'OFF'"; // social_media
		$sql1 .= ",'Follow Me'"; // social_media_title
		$sql1 .= ",'small'"; // social_media_set
		$sql1 .= ",''"; // social_rss
		$sql1 .= ",''"; // social_email
		$sql1 .= ",''"; // social_twitter
		$sql1 .= ",''"; // social_facebook
		$sql1 .= ",''"; // google_analytics
		$sql1 .= ",''"; // custom_css
		$sql1 .= ",'preset-fstop'"; // preset_name
		$sql1 .= ",'Photocrati F-Stop'"; // preset_title
		$sql1 .= ",'140'"; // header_height
		$sql1 .= ",'60'"; // header_logo_margin_above
		$sql1 .= ",'20'"; // header_logo_margin_below
		$sql1 .= ",'24'"; // title_size
		$sql1 .= ",'FFFFFF'"; // title_color
		$sql1 .= ",'Arial, Helvetica, sans-serif'"; // title_style
		$sql1 .= ",'12'"; // description_size
		$sql1 .= ",'FFFFFF'"; // description_color
		$sql1 .= ",'Arial, Helvetica, sans-serif'"; // description_style
		$sql1 .= ",'0'"; // bg_top_offset
		$sql1 .= ",'10'"; // container_padding
		$sql1 .= ",'12'"; // footer_font
		$sql1 .= ",'FFFFFF'"; // footer_font_color
		$sql1 .= ")";
		$wpdb->query($sql1);
		
	}
	
	
	$photocrati_presets = $table_prefix . "photocrati_presets";
	
	if($wpdb->get_var("show tables like '$photocrati_presets'") != $photocrati_presets) {
	
		$sqlcopy = "CREATE TABLE `". $photocrati_presets . "` LIKE `". $photocrati_styles . "`";
		
		require_once(ABSPATH . 'wp-admin/upgrade-functions.php');
		dbDelta($sqlcopy);
		
		
		$pre = "INSERT INTO ". $photocrati_presets . " VALUES (";
		$pre .= "1 "; // option_set
		$pre .= ",'YES'"; // dynamic_style
		$pre .= ",'YES'"; // display_sidebar
		$pre .= ",'70'"; // content_width
		$pre .= ",'30'"; // sidebar_width
		$pre .= ",'bottom-top'"; // logo_menu_position
		$pre .= ",'000000'"; // bg_color
		$pre .= ",''"; // bg_image
		$pre .= ",'repeat'"; // bg_repeat
		$pre .= ",'000000'"; // header_bg_color
		$pre .= ",''"; // header_bg_image
		$pre .= ",'repeat'"; // header_bg_repeat
		$pre .= ",'transparent'"; // container_color
		$pre .= ",'0'"; // container_border
		$pre .= ",'FFFFFF'"; // container_border_color
		$pre .= ",'FFFFFF'"; // font_color
		$pre .= ",'12'"; // font_size
		$pre .= ",'Arial, Helvetica, sans-serif'"; // font_style
		$pre .= ",'FFFFFF'"; // h1_color
		$pre .= ",'22'"; // h1_size
		$pre .= ",'FFFFFF'"; // h2_color
		$pre .= ",'20'"; // h2_size
		$pre .= ",'FFFFFF'"; // h3_color
		$pre .= ",'18'"; // h3_size
		$pre .= ",'FFFFFF'"; // h4_color
		$pre .= ",'16'"; // h4_size
		$pre .= ",'FFFFFF'"; // h5_color
		$pre .= ",'14'"; // h5_size
		$pre .= ",'eb941a'"; // link_color
		$pre .= ",'ff6600'"; // link_hover_color
		$pre .= ",'none'"; // link_hover_style
		$pre .= ",'ababab'"; // sidebar_font_color
		$pre .= ",'12'"; // sidebar_font_size
		$pre .= ",'Arial, Helvetica, sans-serif'"; // sidebar_font_style
		$pre .= ",'transparent'"; // sidebar_bg_color
		$pre .= ",'eb941a'"; // sidebar_link_color
		$pre .= ",'ff6600'"; // sidebar_link_hover_color
		$pre .= ",'underline'"; // sidebar_link_hover_style
		$pre .= ",'b0854a'"; // sidebar_title_color
		$pre .= ",'14'"; // sidebar_title_size
		$pre .= ",'Arial, Helvetica, sans-serif'"; // sidebar_title_style
		$pre .= ",'color'"; // menu_style
		$pre .= ",'000000'"; // menu_color
		$pre .= ",'eb941a'"; // menu_hover_color
		$pre .= ",'12'"; // menu_font_size
		$pre .= ",'Arial, Helvetica, sans-serif'"; // menu_font_style
		$pre .= ",'FFFFFF'"; // menu_font_color
		$pre .= ",'704100'"; // menu_font_hover_color
		$pre .= ",'474747'"; // submenu_color
		$pre .= ",'eb941a'"; // submenu_hover_color
		$pre .= ",'12'"; // submenu_font_size
		$pre .= ",'Arial, Helvetica, sans-serif'"; // submenu_font_style
		$pre .= ",'FFFFFF'"; // submenu_font_color
		$pre .= ",'704100'"; // submenu_font_hover_color
		$pre .= ",'5'"; // nextgen_border
		$pre .= ",'E1E1E1'"; // nextgen_border_color
		$pre .= ",'custom'"; // custom_logo
		$pre .= ",'Logo_Orange2.png'"; // custom_logo_image
		$pre .= ",''"; // footer_copy
		$pre .= ",'OFF'"; // custom_sidebar
		$pre .= ",'ABOVE'"; // custom_sidebar_position
		$pre .= ",''"; // custom_sidebar_html
		$pre .= ",'OFF'"; // social_media
		$pre .= ",'Follow Me'"; // social_media_title
		$pre .= ",'small'"; // social_media_set
		$pre .= ",''"; // social_rss
		$pre .= ",''"; // social_email
		$pre .= ",''"; // social_twitter
		$pre .= ",''"; // social_facebook
		$pre .= ",''"; // google_analytics
		$pre .= ",'#footer {
border-top:0 solid #E8E7E7;
text-align:center;
}'"; // custom_css
		$pre .= ",'preset-fstop'"; // preset_name
		$pre .= ",'Photocrati F-Stop'"; // preset_title
		$pre .= ",'140'"; // header_height
		$pre .= ",'60'"; // header_logo_margin_above
		$pre .= ",'20'"; // header_logo_margin_below
		$pre .= ",'24'"; // title_size
		$pre .= ",'FFFFFF'"; // title_color
		$pre .= ",'Arial, Helvetica, sans-serif'"; // title_style
		$pre .= ",'12'"; // description_size
		$pre .= ",'FFFFFF'"; // description_color
		$pre .= ",'Arial, Helvetica, sans-serif'"; // description_style
		$pre .= ",'0'"; // bg_top_offset
		$pre .= ",'10'"; // container_padding
		$pre .= ",'12'"; // footer_font
		$pre .= ",'FFFFFF'"; // footer_font_color
		$pre .= ")";
		$wpdb->query($pre);
		
		
		$pre1 = "INSERT INTO ". $photocrati_presets . " VALUES (";
		$pre1 .= "1 "; // option_set
		$pre1 .= ",'YES'"; // dynamic_style
		$pre1 .= ",'YES'"; // display_sidebar
		$pre1 .= ",'70'"; // content_width
		$pre1 .= ",'30'"; // sidebar_width
		$pre1 .= ",'bottom-top'"; // logo_menu_position
		$pre1 .= ",'FFFFFF'"; // bg_color
		$pre1 .= ",''"; // bg_image
		$pre1 .= ",'repeat'"; // bg_repeat
		$pre1 .= ",'FFFFFF'"; // header_bg_color
		$pre1 .= ",''"; // header_bg_image
		$pre1 .= ",'repeat'"; // header_bg_repeat
		$pre1 .= ",'transparent'"; // container_color
		$pre1 .= ",'0'"; // container_border
		$pre1 .= ",'666666'"; // container_border_color
		$pre1 .= ",'333333'"; // font_color
		$pre1 .= ",'12'"; // font_size
		$pre1 .= ",'helvetica, arial, sans-serif'"; // font_style
		$pre1 .= ",'333333'"; // h1_color
		$pre1 .= ",'22'"; // h1_size
		$pre1 .= ",'333333'"; // h2_color
		$pre1 .= ",'20'"; // h2_size
		$pre1 .= ",'333333'"; // h3_color
		$pre1 .= ",'18'"; // h3_size
		$pre1 .= ",'333333'"; // h4_color
		$pre1 .= ",'16'"; // h4_size
		$pre1 .= ",'333333'"; // h5_color
		$pre1 .= ",'14'"; // h5_size
		$pre1 .= ",'5da85b'"; // link_color
		$pre1 .= ",'2ecc29'"; // link_hover_color
		$pre1 .= ",'none'"; // link_hover_style
		$pre1 .= ",'545454'"; // sidebar_font_color
		$pre1 .= ",'12'"; // sidebar_font_size
		$pre1 .= ",'helvetica, arial, sans-serif'"; // sidebar_font_style
		$pre1 .= ",'transparent'"; // sidebar_bg_color
		$pre1 .= ",'5da85b'"; // sidebar_link_color
		$pre1 .= ",'2ecc29'"; // sidebar_link_hover_color
		$pre1 .= ",'none'"; // sidebar_link_hover_style
		$pre1 .= ",'a6a6a6'"; // sidebar_title_color
		$pre1 .= ",'15'"; // sidebar_title_size
		$pre1 .= ",'helvetica, arial, sans-serif'"; // sidebar_title_style
		$pre1 .= ",'color'"; // menu_style
		$pre1 .= ",'FFFFFF'"; // menu_color
		$pre1 .= ",'E8E8EA'"; // menu_hover_color
		$pre1 .= ",'12'"; // menu_font_size
		$pre1 .= ",'helvetica, arial, sans-serif'"; // menu_font_style
		$pre1 .= ",'666666'"; // menu_font_color
		$pre1 .= ",'5da85b'"; // menu_font_hover_color
		$pre1 .= ",'E8E8EA'"; // submenu_color
		$pre1 .= ",'b2d3b1'"; // submenu_hover_color
		$pre1 .= ",'12'"; // submenu_font_size
		$pre1 .= ",'helvetica, arial, sans-serif'"; // submenu_font_style
		$pre1 .= ",'5da85b'"; // submenu_font_color
		$pre1 .= ",'595959'"; // submenu_font_hover_color
		$pre1 .= ",'1'"; // nextgen_border
		$pre1 .= ",'CCCCCC'"; // nextgen_border_color
		$pre1 .= ",'custom'"; // custom_logo
		$pre1 .= ",'Logo_Tall_Green.png'"; // custom_logo_image
		$pre1 .= ",''"; // footer_copy
		$pre1 .= ",'OFF'"; // custom_sidebar
		$pre1 .= ",'ABOVE'"; // custom_sidebar_position
		$pre1 .= ",''"; // custom_sidebar_html
		$pre1 .= ",'OFF'"; // social_media
		$pre1 .= ",'Follow Me'"; // social_media_title
		$pre1 .= ",'small'"; // social_media_set
		$pre1 .= ",''"; // social_rss
		$pre1 .= ",''"; // social_email
		$pre1 .= ",''"; // social_twitter
		$pre1 .= ",''"; // social_facebook
		$pre1 .= ",''"; // google_analytics
		$pre1 .= ",'#footer {
border-top:0 solid #E8E7E7;
text-align:center;
}

h1 {
border-bottom:0 solid #E1E1E1;
text-align:center;
}'"; // custom_css
		$pre1 .= ",'preset-emulsion'"; // preset_name
		$pre1 .= ",'Photocrati Emulsion'"; // preset_title
		$pre1 .= ",'140'"; // header_height
		$pre1 .= ",'60'"; // header_logo_margin_above
		$pre1 .= ",'20'"; // header_logo_margin_below
		$pre1 .= ",'24'"; // title_size
		$pre1 .= ",'333333'"; // title_color
		$pre1 .= ",'helvetica, arial, sans-serif'"; // title_style
		$pre1 .= ",'12'"; // description_size
		$pre1 .= ",'333333'"; // description_color
		$pre1 .= ",'helvetica, arial, sans-serif'"; // description_style
		$pre1 .= ",'0'"; // bg_top_offset
		$pre1 .= ",'10'"; // container_padding
		$pre1 .= ",'12'"; // footer_font
		$pre1 .= ",'333333'"; // footer_font_color
		$pre1 .= ")";
		$wpdb->query($pre1);
		
		
		$pre2 = "INSERT INTO ". $photocrati_presets . " VALUES (";
		$pre2 .= "1 "; // option_set
		$pre2 .= ",'YES'"; // dynamic_style
		$pre2 .= ",'YES'"; // display_sidebar
		$pre2 .= ",'70'"; // content_width
		$pre2 .= ",'30'"; // sidebar_width
		$pre2 .= ",'bottom-top'"; // logo_menu_position
		$pre2 .= ",'42413F'"; // bg_color
		$pre2 .= ",''"; // bg_image
		$pre2 .= ",'repeat'"; // bg_repeat
		$pre2 .= ",'42413F'"; // header_bg_color
		$pre2 .= ",''"; // header_bg_image
		$pre2 .= ",'repeat'"; // header_bg_repeat
		$pre2 .= ",'transparent'"; // container_color
		$pre2 .= ",'0'"; // container_border
		$pre2 .= ",'CCCCCC'"; // container_border_color
		$pre2 .= ",'F1F1F1'"; // font_color
		$pre2 .= ",'13'"; // font_size
		$pre2 .= ",'Lucida Grande, Lucida Sans, Lucida Sans Unicode, sans-serif'"; // font_style
		$pre2 .= ",'F0F0EE'"; // h1_color
		$pre2 .= ",'22'"; // h1_size
		$pre2 .= ",'FFFFFF'"; // h2_color
		$pre2 .= ",'20'"; // h2_size
		$pre2 .= ",'FFFFFF'"; // h3_color
		$pre2 .= ",'18'"; // h3_size
		$pre2 .= ",'FFFFFF'"; // h4_color
		$pre2 .= ",'16'"; // h4_size
		$pre2 .= ",'FFFFFF'"; // h5_color
		$pre2 .= ",'14'"; // h5_size
		$pre2 .= ",'6197CA'"; // link_color
		$pre2 .= ",'1c84e6'"; // link_hover_color
		$pre2 .= ",'none'"; // link_hover_style
		$pre2 .= ",'a8a8a8'"; // sidebar_font_color
		$pre2 .= ",'12'"; // sidebar_font_size
		$pre2 .= ",'Lucida Grande, Lucida Sans, Lucida Sans Unicode, sans-serif'"; // sidebar_font_style
		$pre2 .= ",'transparent'"; // sidebar_bg_color
		$pre2 .= ",'6197CA'"; // sidebar_link_color
		$pre2 .= ",'3597f2'"; // sidebar_link_hover_color
		$pre2 .= ",'underline'"; // sidebar_link_hover_style
		$pre2 .= ",'bcd4eb'"; // sidebar_title_color
		$pre2 .= ",'16'"; // sidebar_title_size
		$pre2 .= ",'Lucida Grande, Lucida Sans, Lucida Sans Unicode, sans-serif'"; // sidebar_title_style
		$pre2 .= ",'color'"; // menu_style
		$pre2 .= ",'42413F'"; // menu_color
		$pre2 .= ",'666666'"; // menu_hover_color
		$pre2 .= ",'12'"; // menu_font_size
		$pre2 .= ",'Lucida Grande, Lucida Sans, Lucida Sans Unicode, sans-serif'"; // menu_font_style
		$pre2 .= ",'ffffff'"; // menu_font_color
		$pre2 .= ",'bcd4eb'"; // menu_font_hover_color
		$pre2 .= ",'C2C2C2'"; // submenu_color
		$pre2 .= ",'A0A6AA'"; // submenu_hover_color
		$pre2 .= ",'12'"; // submenu_font_size
		$pre2 .= ",'Lucida Grande, Lucida Sans, Lucida Sans Unicode, sans-serif'"; // submenu_font_style
		$pre2 .= ",'1B1B1B'"; // submenu_font_color
		$pre2 .= ",'F0F0EE'"; // submenu_font_hover_color
		$pre2 .= ",'5'"; // nextgen_border
		$pre2 .= ",'E1E1E1'"; // nextgen_border_color
		$pre2 .= ",'custom'"; // custom_logo
		$pre2 .= ",'Logo_Script_Blue.png'"; // custom_logo_image
		$pre2 .= ",''"; // footer_copy
		$pre2 .= ",'OFF'"; // custom_sidebar
		$pre2 .= ",'ABOVE'"; // custom_sidebar_position
		$pre2 .= ",''"; // custom_sidebar_html
		$pre2 .= ",'OFF'"; // social_media
		$pre2 .= ",'Follow Me'"; // social_media_title
		$pre2 .= ",'small'"; // social_media_set
		$pre2 .= ",''"; // social_rss
		$pre2 .= ",''"; // social_email
		$pre2 .= ",''"; // social_twitter
		$pre2 .= ",''"; // social_facebook
		$pre2 .= ",''"; // google_analytics
		$pre2 .= ",'#footer {
border-top:0;
text-align:center;
}

h1 {
border-bottom:0px;
}

p {
margin-bottom:0.5em;
}'"; // custom_css
		$pre2 .= ",'preset-signature'"; // preset_name
		$pre2 .= ",'Photocrati Signature'"; // preset_title
		$pre2 .= ",'140'"; // header_height
		$pre2 .= ",'60'"; // header_logo_margin_above
		$pre2 .= ",'20'"; // header_logo_margin_below
		$pre2 .= ",'24'"; // title_size
		$pre2 .= ",'F0F0EE'"; // title_color
		$pre2 .= ",'Lucida Grande, Lucida Sans, Lucida Sans Unicode, sans-serif'"; // title_style
		$pre2 .= ",'12'"; // description_size
		$pre2 .= ",'F0F0EE'"; // description_color
		$pre2 .= ",'Lucida Grande, Lucida Sans, Lucida Sans Unicode, sans-serif'"; // description_style
		$pre2 .= ",'0'"; // bg_top_offset
		$pre2 .= ",'10'"; // container_padding
		$pre2 .= ",'12'"; // footer_font
		$pre2 .= ",'FFFFFF'"; // footer_font_color
		$pre2 .= ")";
		$wpdb->query($pre2);
		
		
		$pre3 = "INSERT INTO ". $photocrati_presets . " VALUES (";
		$pre3 .= "1 "; // option_set
		$pre3 .= ",'YES'"; // dynamic_style
		$pre3 .= ",'YES'"; // display_sidebar
		$pre3 .= ",'73'"; // content_width
		$pre3 .= ",'27'"; // sidebar_width
		$pre3 .= ",'right-left'"; // logo_menu_position
		$pre3 .= ",'067506'"; // bg_color
		$pre3 .= ",'Green_BG.jpg'"; // bg_image
		$pre3 .= ",'no-repeat'"; // bg_repeat
		$pre3 .= ",'000000'"; // header_bg_color
		$pre3 .= ",''"; // header_bg_image
		$pre3 .= ",'repeat'"; // header_bg_repeat
		$pre3 .= ",'e1e8d0'"; // container_color
		$pre3 .= ",'0'"; // container_border
		$pre3 .= ",'d9f5a2'"; // container_border_color
		$pre3 .= ",'000000'"; // font_color
		$pre3 .= ",'13'"; // font_size
		$pre3 .= ",'Lucida Grande, Lucida Sans, Lucida Sans Unicode, sans-serif'"; // font_style
		$pre3 .= ",'4a640b'"; // h1_color
		$pre3 .= ",'26'"; // h1_size
		$pre3 .= ",'4a640b'"; // h2_color
		$pre3 .= ",'24'"; // h2_size
		$pre3 .= ",'4a640b'"; // h3_color
		$pre3 .= ",'22'"; // h3_size
		$pre3 .= ",'4a640b'"; // h4_color
		$pre3 .= ",'20'"; // h4_size
		$pre3 .= ",'4a640b'"; // h5_color
		$pre3 .= ",'18'"; // h5_size
		$pre3 .= ",'6ea34b'"; // link_color
		$pre3 .= ",'8bc714'"; // link_hover_color
		$pre3 .= ",'underline'"; // link_hover_style
		$pre3 .= ",'5c5c5c'"; // sidebar_font_color
		$pre3 .= ",'12'"; // sidebar_font_size
		$pre3 .= ",'Lucida Grande, Lucida Sans, Lucida Sans Unicode, sans-serif'"; // sidebar_font_style
		$pre3 .= ",'transparent'"; // sidebar_bg_color
		$pre3 .= ",'417e4a'"; // sidebar_link_color
		$pre3 .= ",'417e4a'"; // sidebar_link_hover_color
		$pre3 .= ",'underline'"; // sidebar_link_hover_style
		$pre3 .= ",'417e4a'"; // sidebar_title_color
		$pre3 .= ",'14'"; // sidebar_title_size
		$pre3 .= ",'Georgia, \"Times New Roman\", Times, serif'"; // sidebar_title_style
		$pre3 .= ",'color'"; // menu_style
		$pre3 .= ",'000000'"; // menu_color
		$pre3 .= ",'067506'"; // menu_hover_color
		$pre3 .= ",'13'"; // menu_font_size
		$pre3 .= ",'Lucida Grande, Lucida Sans, Lucida Sans Unicode, sans-serif'"; // menu_font_style
		$pre3 .= ",'ffffff'"; // menu_font_color
		$pre3 .= ",'fefeb9'"; // menu_font_hover_color
		$pre3 .= ",'000000'"; // submenu_color
		$pre3 .= ",'067506'"; // submenu_hover_color
		$pre3 .= ",'12'"; // submenu_font_size
		$pre3 .= ",'Lucida Grande, Lucida Sans, Lucida Sans Unicode, sans-serif'"; // submenu_font_style
		$pre3 .= ",'FFFFFF'"; // submenu_font_color
		$pre3 .= ",'fefeb9'"; // submenu_font_hover_color
		$pre3 .= ",'5'"; // nextgen_border
		$pre3 .= ",'007401'"; // nextgen_border_color
		$pre3 .= ",'custom'"; // custom_logo
		$pre3 .= ",'Logo_Shiny_Green.png'"; // custom_logo_image
		$pre3 .= ",''"; // footer_copy
		$pre3 .= ",'OFF'"; // custom_sidebar
		$pre3 .= ",'ABOVE'"; // custom_sidebar_position
		$pre3 .= ",''"; // custom_sidebar_html
		$pre3 .= ",'OFF'"; // social_media
		$pre3 .= ",'Follow Me'"; // social_media_title
		$pre3 .= ",'small'"; // social_media_set
		$pre3 .= ",''"; // social_rss
		$pre3 .= ",''"; // social_email
		$pre3 .= ",''"; // social_twitter
		$pre3 .= ",''"; // social_facebook
		$pre3 .= ",''"; // google_analytics
		$pre3 .= ",'.menu ul {
line-height:2;
}

.menu a:link, .menu a:visited {
padding:93px 17px 47px;
}

h1 {
border-bottom:0px;
}

h2 {
font-family:Georgia, Times, Sans Serif;
}

div.sidebar {
padding: 20px;
}

div.slideshow {
margin-bottom:20px;
}

p {
margin-bottom:0.5em;
line-height:1.9em;
}'"; // custom_css
		$pre3 .= ",'preset-vignette'"; // preset_name
		$pre3 .= ",'Photocrati Vignette'"; // preset_title
		$pre3 .= ",'120'"; // header_height
		$pre3 .= ",'25'"; // header_logo_margin_above
		$pre3 .= ",'10'"; // header_logo_margin_below
		$pre3 .= ",'24'"; // title_size
		$pre3 .= ",'F0F0EE'"; // title_color
		$pre3 .= ",'Lucida Grande, Lucida Sans, Lucida Sans Unicode, sans-serif'"; // title_style
		$pre3 .= ",'12'"; // description_size
		$pre3 .= ",'F0F0EE'"; // description_color
		$pre3 .= ",'Lucida Grande, Lucida Sans, Lucida Sans Unicode, sans-serif'"; // description_style
		$pre3 .= ",'0'"; // bg_top_offset
		$pre3 .= ",'30'"; // container_padding
		$pre3 .= ",'12'"; // footer_font
		$pre3 .= ",'FFFFFF'"; // footer_font_color
		$pre3 .= ")";
		$wpdb->query($pre3);
		
		
		$pre4 = "INSERT INTO ". $photocrati_presets . " VALUES (";
		$pre4 .= "1 "; // option_set
		$pre4 .= ",'YES'"; // dynamic_style
		$pre4 .= ",'N0'"; // display_sidebar
		$pre4 .= ",'100'"; // content_width
		$pre4 .= ",'30'"; // sidebar_width
		$pre4 .= ",'bottom-top'"; // logo_menu_position
		$pre4 .= ",'FFFFFF'"; // bg_color
		$pre4 .= ",'Muslin_BG.jpg'"; // bg_image
		$pre4 .= ",'repeat'"; // bg_repeat
		$pre4 .= ",'FFFFFF'"; // header_bg_color
		$pre4 .= ",'Doilly_BG2.jpg'"; // header_bg_image
		$pre4 .= ",'repeat-x'"; // header_bg_repeat
		$pre4 .= ",'FFFFFF'"; // container_color
		$pre4 .= ",'0'"; // container_border
		$pre4 .= ",'666666'"; // container_border_color
		$pre4 .= ",'333333'"; // font_color
		$pre4 .= ",'14'"; // font_size
		$pre4 .= ",'Georgia, \"Times New Roman\", Times, serif'"; // font_style
		$pre4 .= ",'944C7D'"; // h1_color
		$pre4 .= ",'22'"; // h1_size
		$pre4 .= ",'944C7D'"; // h2_color
		$pre4 .= ",'20'"; // h2_size
		$pre4 .= ",'944C7D'"; // h3_color
		$pre4 .= ",'18'"; // h3_size
		$pre4 .= ",'944C7D'"; // h4_color
		$pre4 .= ",'16'"; // h4_size
		$pre4 .= ",'944C7D'"; // h5_color
		$pre4 .= ",'14'"; // h5_size
		$pre4 .= ",'e65370'"; // link_color
		$pre4 .= ",'f00534'"; // link_hover_color
		$pre4 .= ",'none'"; // link_hover_style
		$pre4 .= ",'333333'"; // sidebar_font_color
		$pre4 .= ",'12'"; // sidebar_font_size
		$pre4 .= ",'Arial, Helvetica, sans-serif'"; // sidebar_font_style
		$pre4 .= ",'transparent'"; // sidebar_bg_color
		$pre4 .= ",'0072CB'"; // sidebar_link_color
		$pre4 .= ",'0072CB'"; // sidebar_link_hover_color
		$pre4 .= ",'underline'"; // sidebar_link_hover_style
		$pre4 .= ",'333333'"; // sidebar_title_color
		$pre4 .= ",'14'"; // sidebar_title_size
		$pre4 .= ",'Arial, Helvetica, sans-serif'"; // sidebar_title_style
		$pre4 .= ",'color'"; // menu_style
		$pre4 .= ",'FFFFFF'"; // menu_color
		$pre4 .= ",'e3d6c6'"; // menu_hover_color
		$pre4 .= ",'12'"; // menu_font_size
		$pre4 .= ",'helvetica, arial, sans-serif'"; // menu_font_style
		$pre4 .= ",'995083'"; // menu_font_color
		$pre4 .= ",'e55070'"; // menu_font_hover_color
		$pre4 .= ",'f5efe7'"; // submenu_color
		$pre4 .= ",'e3d6c6'"; // submenu_hover_color
		$pre4 .= ",'12'"; // submenu_font_size
		$pre4 .= ",'helvetica, arial, sans-serif'"; // submenu_font_style
		$pre4 .= ",'73604a'"; // submenu_font_color
		$pre4 .= ",'e55070'"; // submenu_font_hover_color
		$pre4 .= ",'0'"; // nextgen_border
		$pre4 .= ",'ffffff'"; // nextgen_border_color
		$pre4 .= ",'custom'"; // custom_logo
		$pre4 .= ",'Logo_Fade_Pink.png'"; // custom_logo_image
		$pre4 .= ",''"; // footer_copy
		$pre4 .= ",'OFF'"; // custom_sidebar
		$pre4 .= ",'ABOVE'"; // custom_sidebar_position
		$pre4 .= ",''"; // custom_sidebar_html
		$pre4 .= ",'OFF'"; // social_media
		$pre4 .= ",'Follow Me'"; // social_media_title
		$pre4 .= ",'small'"; // social_media_set
		$pre4 .= ",''"; // social_rss
		$pre4 .= ",''"; // social_email
		$pre4 .= ",''"; // social_twitter
		$pre4 .= ",''"; // social_facebook
		$pre4 .= ",''"; // google_analytics
		$pre4 .= ",'.footer-widget-area {
      background:#F7EEE3 none repeat scroll 0 0;
}

.widget-title, .widgettitle {
       margin-top:13px;
}

.footer-widget-container a {
color:#E65370;
}

.widget-title, .widgettitle {
color:#944C7D;
font-family:Georgia,Times,Serif;
font-size:17px;
font-weight:bold;
margin-bottom:21px;
}

p {
margin-bottom:2.5em;
}

.footer-widget-container a:hover, .footer-widget-container a:active {
      color: #f00534;
      text-decoration: underline;
}

.widget-title, .widgettitle {
padding:8px;
}

div.slideshow {
margin-bottom: 23px;
}'"; // custom_css
		$pre4 .= ",'preset-canvas'"; // preset_name
		$pre4 .= ",'Photocrati Canvas'"; // preset_title
		$pre4 .= ",'190'"; // header_height
		$pre4 .= ",'60'"; // header_logo_margin_above
		$pre4 .= ",'20'"; // header_logo_margin_below
		$pre4 .= ",'24'"; // title_size
		$pre4 .= ",'944C7D'"; // title_color
		$pre4 .= ",'helvetica, arial, sans-serif'"; // title_style
		$pre4 .= ",'12'"; // description_size
		$pre4 .= ",'944C7D'"; // description_color
		$pre4 .= ",'helvetica, arial, sans-serif'"; // description_style
		$pre4 .= ",'0'"; // bg_top_offset
		$pre4 .= ",'30'"; // container_padding
		$pre4 .= ",'12'"; // footer_font
		$pre4 .= ",'333333'"; // footer_font_color
		$pre4 .= ")";
		$wpdb->query($pre4);
		
		
		$pre5 = "INSERT INTO ". $photocrati_presets . " VALUES (";
		$pre5 .= "1 "; // option_set
		$pre5 .= ",'YES'"; // dynamic_style
		$pre5 .= ",'YES'"; // display_sidebar
		$pre5 .= ",'70'"; // content_width
		$pre5 .= ",'30'"; // sidebar_width
		$pre5 .= ",'left-right'"; // logo_menu_position
		$pre5 .= ",'FFFFFF'"; // bg_color
		$pre5 .= ",''"; // bg_image
		$pre5 .= ",'repeat'"; // bg_repeat
		$pre5 .= ",'FFFFFF'"; // header_bg_color
		$pre5 .= ",''"; // header_bg_image
		$pre5 .= ",'repeat'"; // header_bg_repeat
		$pre5 .= ",'transparent'"; // container_color
		$pre5 .= ",'0'"; // container_border
		$pre5 .= ",'CCCCCC'"; // container_border_color
		$pre5 .= ",'666666'"; // font_color
		$pre5 .= ",'13'"; // font_size
		$pre5 .= ",'helvetica, arial, sans-serif'"; // font_style
		$pre5 .= ",'7695B2'"; // h1_color
		$pre5 .= ",'22'"; // h1_size
		$pre5 .= ",'333333'"; // h2_color
		$pre5 .= ",'20'"; // h2_size
		$pre5 .= ",'333333'"; // h3_color
		$pre5 .= ",'18'"; // h3_size
		$pre5 .= ",'333333'"; // h4_color
		$pre5 .= ",'16'"; // h4_size
		$pre5 .= ",'333333'"; // h5_color
		$pre5 .= ",'14'"; // h5_size
		$pre5 .= ",'2B5780'"; // link_color
		$pre5 .= ",'266ead'"; // link_hover_color
		$pre5 .= ",'underline'"; // link_hover_style
		$pre5 .= ",'666666'"; // sidebar_font_color
		$pre5 .= ",'12'"; // sidebar_font_size
		$pre5 .= ",'Verdana, Arial, Helvetica, sans-serif'"; // sidebar_font_style
		$pre5 .= ",'transparent'"; // sidebar_bg_color
		$pre5 .= ",'2B5780'"; // sidebar_link_color
		$pre5 .= ",'2B5780'"; // sidebar_link_hover_color
		$pre5 .= ",'underline'"; // sidebar_link_hover_style
		$pre5 .= ",'333333'"; // sidebar_title_color
		$pre5 .= ",'14'"; // sidebar_title_size
		$pre5 .= ",'Arial, Helvetica, sans-serif'"; // sidebar_title_style
		$pre5 .= ",'transparent'"; // menu_style
		$pre5 .= ",'FFFFFF'"; // menu_color
		$pre5 .= ",'FFFFFF'"; // menu_hover_color
		$pre5 .= ",'12'"; // menu_font_size
		$pre5 .= ",'Arial, Helvetica, sans-serif'"; // menu_font_style
		$pre5 .= ",'A8A8A8'"; // menu_font_color
		$pre5 .= ",'2D73B6'"; // menu_font_hover_color
		$pre5 .= ",'E8E8E8'"; // submenu_color
		$pre5 .= ",'C8C9CB'"; // submenu_hover_color
		$pre5 .= ",'12'"; // submenu_font_size
		$pre5 .= ",'Arial, Helvetica, sans-serif'"; // submenu_font_style
		$pre5 .= ",'484848'"; // submenu_font_color
		$pre5 .= ",'2D73B6'"; // submenu_font_hover_color
		$pre5 .= ",'5'"; // nextgen_border
		$pre5 .= ",'CCCCCC'"; // nextgen_border_color
		$pre5 .= ",'custom'"; // custom_logo
		$pre5 .= ",'Logo_Steel.png'"; // custom_logo_image
		$pre5 .= ",''"; // footer_copy
		$pre5 .= ",'OFF'"; // custom_sidebar
		$pre5 .= ",'ABOVE'"; // custom_sidebar_position
		$pre5 .= ",''"; // custom_sidebar_html
		$pre5 .= ",'OFF'"; // social_media
		$pre5 .= ",'Follow Me'"; // social_media_title
		$pre5 .= ",'small'"; // social_media_set
		$pre5 .= ",''"; // social_rss
		$pre5 .= ",''"; // social_email
		$pre5 .= ",''"; // social_twitter
		$pre5 .= ",''"; // social_facebook
		$pre5 .= ",''"; // google_analytics
		$pre5 .= ",'p {
margin-bottom:0.5em;
}

#footer {
border-top:0 solid #E8E7E7;
text-align:center;
}'"; // custom_css
		$pre5 .= ",'preset-lightbox'"; // preset_name
		$pre5 .= ",'Photocrati Lightbox'"; // preset_title
		$pre5 .= ",'120'"; // header_height
		$pre5 .= ",'25'"; // header_logo_margin_above
		$pre5 .= ",'10'"; // header_logo_margin_below
		$pre5 .= ",'24'"; // title_size
		$pre5 .= ",'333333'"; // title_color
		$pre5 .= ",'helvetica, arial, sans-serif'"; // title_style
		$pre5 .= ",'12'"; // description_size
		$pre5 .= ",'333333'"; // description_color
		$pre5 .= ",'helvetica, arial, sans-serif'"; // description_style
		$pre5 .= ",'0'"; // bg_top_offset
		$pre5 .= ",'10'"; // container_padding
		$pre5 .= ",'12'"; // footer_font
		$pre5 .= ",'333333'"; // footer_font_color
		$pre5 .= ")";
		$wpdb->query($pre5);
		
		
		$pre6 = "INSERT INTO ". $photocrati_presets . " VALUES (";
		$pre6 .= "1 "; // option_set
		$pre6 .= ",'YES'"; // dynamic_style
		$pre6 .= ",'YES'"; // display_sidebar
		$pre6 .= ",'70'"; // content_width
		$pre6 .= ",'30'"; // sidebar_width
		$pre6 .= ",'left-right'"; // logo_menu_position
		$pre6 .= ",'000000'"; // bg_color
		$pre6 .= ",''"; // bg_image
		$pre6 .= ",'repeat'"; // bg_repeat
		$pre6 .= ",'000000'"; // header_bg_color
		$pre6 .= ",''"; // header_bg_image
		$pre6 .= ",'repeat'"; // header_bg_repeat
		$pre6 .= ",'transparent'"; // container_color
		$pre6 .= ",'0'"; // container_border
		$pre6 .= ",'CCCCCC'"; // container_border_color
		$pre6 .= ",'F1F1F1'"; // font_color
		$pre6 .= ",'13'"; // font_size
		$pre6 .= ",'helvetica, arial, sans-serif'"; // font_style
		$pre6 .= ",'F0F0EE'"; // h1_color
		$pre6 .= ",'22'"; // h1_size
		$pre6 .= ",'FFFFFF'"; // h2_color
		$pre6 .= ",'20'"; // h2_size
		$pre6 .= ",'FFFFFF'"; // h3_color
		$pre6 .= ",'18'"; // h3_size
		$pre6 .= ",'FFFFFF'"; // h4_color
		$pre6 .= ",'16'"; // h4_size
		$pre6 .= ",'FFFFFF'"; // h5_color
		$pre6 .= ",'14'"; // h5_size
		$pre6 .= ",'7c943b'"; // link_color
		$pre6 .= ",'a9e600'"; // link_hover_color
		$pre6 .= ",'underline'"; // link_hover_style
		$pre6 .= ",'F1F1F1'"; // sidebar_font_color
		$pre6 .= ",'12'"; // sidebar_font_size
		$pre6 .= ",'Verdana, Arial, Helvetica, sans-serif'"; // sidebar_font_style
		$pre6 .= ",'transparent'"; // sidebar_bg_color
		$pre6 .= ",'6197CA'"; // sidebar_link_color
		$pre6 .= ",'6197CA'"; // sidebar_link_hover_color
		$pre6 .= ",'underline'"; // sidebar_link_hover_style
		$pre6 .= ",'FFFFFF'"; // sidebar_title_color
		$pre6 .= ",'14'"; // sidebar_title_size
		$pre6 .= ",'Arial, Helvetica, sans-serif'"; // sidebar_title_style
		$pre6 .= ",'transparent'"; // menu_style
		$pre6 .= ",'000000'"; // menu_color
		$pre6 .= ",'000000'"; // menu_hover_color
		$pre6 .= ",'12'"; // menu_font_size
		$pre6 .= ",'helvetica, arial, sans-serif'"; // menu_font_style
		$pre6 .= ",'c2c2c2'"; // menu_font_color
		$pre6 .= ",'9ac22b'"; // menu_font_hover_color
		$pre6 .= ",'bdbdbd'"; // submenu_color
		$pre6 .= ",'1F1F1F'"; // submenu_hover_color
		$pre6 .= ",'12'"; // submenu_font_size
		$pre6 .= ",'helvetica, arial, sans-serif'"; // submenu_font_style
		$pre6 .= ",'35382d'"; // submenu_font_color
		$pre6 .= ",'9ac22b'"; // submenu_font_hover_color
		$pre6 .= ",'5'"; // nextgen_border
		$pre6 .= ",'E1E1E1'"; // nextgen_border_color
		$pre6 .= ",'custom'"; // custom_logo
		$pre6 .= ",'Logo_Stretch_Green.png'"; // custom_logo_image
		$pre6 .= ",''"; // footer_copy
		$pre6 .= ",'OFF'"; // custom_sidebar
		$pre6 .= ",'ABOVE'"; // custom_sidebar_position
		$pre6 .= ",''"; // custom_sidebar_html
		$pre6 .= ",'OFF'"; // social_media
		$pre6 .= ",'Follow Me'"; // social_media_title
		$pre6 .= ",'small'"; // social_media_set
		$pre6 .= ",''"; // social_rss
		$pre6 .= ",''"; // social_email
		$pre6 .= ",''"; // social_twitter
		$pre6 .= ",''"; // social_facebook
		$pre6 .= ",''"; // google_analytics
		$pre6 .= ",'p {
margin-bottom:0.5em;
}

h1 {
border-bottom:0px;
}

#footer {
border-top:0px;
}'"; // custom_css
		$pre6 .= ",'preset-darkroom'"; // preset_name
		$pre6 .= ",'Photocrati Darkroom'"; // preset_title
		$pre6 .= ",'120'"; // header_height
		$pre6 .= ",'25'"; // header_logo_margin_above
		$pre6 .= ",'10'"; // header_logo_margin_below
		$pre6 .= ",'24'"; // title_size
		$pre6 .= ",'FFFFFF'"; // title_color
		$pre6 .= ",'helvetica, arial, sans-serif'"; // title_style
		$pre6 .= ",'12'"; // description_size
		$pre6 .= ",'F1F1F1'"; // description_color
		$pre6 .= ",'helvetica, arial, sans-serif'"; // description_style
		$pre6 .= ",'0'"; // bg_top_offset
		$pre6 .= ",'10'"; // container_padding
		$pre6 .= ",'12'"; // footer_font
		$pre6 .= ",'F1F1F1'"; // footer_font_color
		$pre6 .= ")";
		$wpdb->query($pre6);
		
		
		$pre7 = "INSERT INTO ". $photocrati_presets . " VALUES (";
		$pre7 .= "1 "; // option_set
		$pre7 .= ",'YES'"; // dynamic_style
		$pre7 .= ",'YES'"; // display_sidebar
		$pre7 .= ",'70'"; // content_width
		$pre7 .= ",'30'"; // sidebar_width
		$pre7 .= ",'left-right'"; // logo_menu_position
		$pre7 .= ",'24221f'"; // bg_color
		$pre7 .= ",''"; // bg_image
		$pre7 .= ",'repeat'"; // bg_repeat
		$pre7 .= ",'24221f'"; // header_bg_color
		$pre7 .= ",''"; // header_bg_image
		$pre7 .= ",'repeat'"; // header_bg_repeat
		$pre7 .= ",'transparent'"; // container_color
		$pre7 .= ",'0'"; // container_border
		$pre7 .= ",'CCCCCC'"; // container_border_color
		$pre7 .= ",'F1F1F1'"; // font_color
		$pre7 .= ",'13'"; // font_size
		$pre7 .= ",'Tahoma, Trebuchet, Helvetica, sans-serif'"; // font_style
		$pre7 .= ",'F0F0EE'"; // h1_color
		$pre7 .= ",'22'"; // h1_size
		$pre7 .= ",'FFFFFF'"; // h2_color
		$pre7 .= ",'20'"; // h2_size
		$pre7 .= ",'FFFFFF'"; // h3_color
		$pre7 .= ",'18'"; // h3_size
		$pre7 .= ",'FFFFFF'"; // h4_color
		$pre7 .= ",'16'"; // h4_size
		$pre7 .= ",'FFFFFF'"; // h5_color
		$pre7 .= ",'14'"; // h5_size
		$pre7 .= ",'6197CA'"; // link_color
		$pre7 .= ",'2993f5'"; // link_hover_color
		$pre7 .= ",'underline'"; // link_hover_style
		$pre7 .= ",'c2c2c2'"; // sidebar_font_color
		$pre7 .= ",'12'"; // sidebar_font_size
		$pre7 .= ",'Tahoma, Trebuchet, Helvetica, sans-serif'"; // sidebar_font_style
		$pre7 .= ",'transparent'"; // sidebar_bg_color
		$pre7 .= ",'6197CA'"; // sidebar_link_color
		$pre7 .= ",'2c92f2'"; // sidebar_link_hover_color
		$pre7 .= ",'underline'"; // sidebar_link_hover_style
		$pre7 .= ",'FFFFFF'"; // sidebar_title_color
		$pre7 .= ",'14'"; // sidebar_title_size
		$pre7 .= ",'Tahoma, Trebuchet, Helvetica, sans-serif'"; // sidebar_title_style
		$pre7 .= ",'transparent'"; // menu_style
		$pre7 .= ",'42413F'"; // menu_color
		$pre7 .= ",'42413F'"; // menu_hover_color
		$pre7 .= ",'12'"; // menu_font_size
		$pre7 .= ",'Tahoma, Trebuchet, Helvetica, sans-serif'"; // menu_font_style
		$pre7 .= ",'8C8C8C'"; // menu_font_color
		$pre7 .= ",'2f90eb'"; // menu_font_hover_color
		$pre7 .= ",'999999'"; // submenu_color
		$pre7 .= ",'2f90eb'"; // submenu_hover_color
		$pre7 .= ",'12'"; // submenu_font_size
		$pre7 .= ",'Tahoma, Trebuchet, Helvetica, sans-serif'"; // submenu_font_style
		$pre7 .= ",'1B1B1B'"; // submenu_font_color
		$pre7 .= ",'F0F0EE'"; // submenu_font_hover_color
		$pre7 .= ",'5'"; // nextgen_border
		$pre7 .= ",'E1E1E1'"; // nextgen_border_color
		$pre7 .= ",'custom'"; // custom_logo
		$pre7 .= ",'Logo_Bright_Blue.png'"; // custom_logo_image
		$pre7 .= ",''"; // footer_copy
		$pre7 .= ",'OFF'"; // custom_sidebar
		$pre7 .= ",'ABOVE'"; // custom_sidebar_position
		$pre7 .= ",''"; // custom_sidebar_html
		$pre7 .= ",'OFF'"; // social_media
		$pre7 .= ",'Follow Me'"; // social_media_title
		$pre7 .= ",'small'"; // social_media_set
		$pre7 .= ",''"; // social_rss
		$pre7 .= ",''"; // social_email
		$pre7 .= ",''"; // social_twitter
		$pre7 .= ",''"; // social_facebook
		$pre7 .= ",''"; // google_analytics
		$pre7 .= ",'#footer {
border-top:0 solid #E8E7E7;
text-align:center;
}

h1 {
border-bottom:0 solid #E1E1E1;
text-align:center;
}'"; // custom_css
		$pre7 .= ",'preset-exposure'"; // preset_name
		$pre7 .= ",'Photocrati Exposure'"; // preset_title
		$pre7 .= ",'120'"; // header_height
		$pre7 .= ",'25'"; // header_logo_margin_above
		$pre7 .= ",'10'"; // header_logo_margin_below
		$pre7 .= ",'24'"; // title_size
		$pre7 .= ",'FFFFFF'"; // title_color
		$pre7 .= ",'helvetica, arial, sans-serif'"; // title_style
		$pre7 .= ",'12'"; // description_size
		$pre7 .= ",'F1F1F1'"; // description_color
		$pre7 .= ",'helvetica, arial, sans-serif'"; // description_style
		$pre7 .= ",'0'"; // bg_top_offset
		$pre7 .= ",'10'"; // container_padding
		$pre7 .= ",'12'"; // footer_font
		$pre7 .= ",'F1F1F1'"; // footer_font_color
		$pre7 .= ")";
		$wpdb->query($pre7);
		
		
		$pre8 = "INSERT INTO ". $photocrati_presets . " VALUES (";
		$pre8 .= "1 "; // option_set
		$pre8 .= ",'YES'"; // dynamic_style
		$pre8 .= ",'YES'"; // display_sidebar
		$pre8 .= ",'70'"; // content_width
		$pre8 .= ",'30'"; // sidebar_width
		$pre8 .= ",'top-bottom'"; // logo_menu_position
		$pre8 .= ",'2f1c0b'"; // bg_color
		$pre8 .= ",'Wood_BG.jpg'"; // bg_image
		$pre8 .= ",'repeat-x'"; // bg_repeat
		$pre8 .= ",'ebe8dd'"; // header_bg_color
		$pre8 .= ",''"; // header_bg_image
		$pre8 .= ",'repeat'"; // header_bg_repeat
		$pre8 .= ",'transparent'"; // container_color
		$pre8 .= ",'0'"; // container_border
		$pre8 .= ",'CCCCCC'"; // container_border_color
		$pre8 .= ",'ebe8dd'"; // font_color
		$pre8 .= ",'13'"; // font_size
		$pre8 .= ",'helvetica, arial, sans-serif'"; // font_style
		$pre8 .= ",'ffffff'"; // h1_color
		$pre8 .= ",'24'"; // h1_size
		$pre8 .= ",'d4c6a3'"; // h2_color
		$pre8 .= ",'20'"; // h2_size
		$pre8 .= ",'ded7ca'"; // h3_color
		$pre8 .= ",'18'"; // h3_size
		$pre8 .= ",'c5b383'"; // h4_color
		$pre8 .= ",'16'"; // h4_size
		$pre8 .= ",'c5b383'"; // h5_color
		$pre8 .= ",'14'"; // h5_size
		$pre8 .= ",'be3501'"; // link_color
		$pre8 .= ",'eb551e'"; // link_hover_color
		$pre8 .= ",'none'"; // link_hover_style
		$pre8 .= ",'c5b383'"; // sidebar_font_color
		$pre8 .= ",'12'"; // sidebar_font_size
		$pre8 .= ",'helvetica, arial, sans-serif'"; // sidebar_font_style
		$pre8 .= ",'transparent'"; // sidebar_bg_color
		$pre8 .= ",'be3501'"; // sidebar_link_color
		$pre8 .= ",'eb551e'"; // sidebar_link_hover_color
		$pre8 .= ",'underline'"; // sidebar_link_hover_style
		$pre8 .= ",'FFFFFF'"; // sidebar_title_color
		$pre8 .= ",'16'"; // sidebar_title_size
		$pre8 .= ",'helvetica, arial, sans-serif'"; // sidebar_title_style
		$pre8 .= ",'transparent'"; // menu_style
		$pre8 .= ",'FFFFFF'"; // menu_color
		$pre8 .= ",'FFFFFF'"; // menu_hover_color
		$pre8 .= ",'14'"; // menu_font_size
		$pre8 .= ",'helvetica, arial, sans-serif'"; // menu_font_style
		$pre8 .= ",'280b03'"; // menu_font_color
		$pre8 .= ",'be3501'"; // menu_font_hover_color
		$pre8 .= ",'f5f3eb'"; // submenu_color
		$pre8 .= ",'ccc4a7'"; // submenu_hover_color
		$pre8 .= ",'12'"; // submenu_font_size
		$pre8 .= ",'helvetica, arial, sans-serif'"; // submenu_font_style
		$pre8 .= ",'280b03'"; // submenu_font_color
		$pre8 .= ",'be3501'"; // submenu_font_hover_color
		$pre8 .= ",'1'"; // nextgen_border
		$pre8 .= ",'f5f3ed'"; // nextgen_border_color
		$pre8 .= ",'custom'"; // custom_logo
		$pre8 .= ",'Logo_Brown.png'"; // custom_logo_image
		$pre8 .= ",''"; // footer_copy
		$pre8 .= ",'OFF'"; // custom_sidebar
		$pre8 .= ",'ABOVE'"; // custom_sidebar_position
		$pre8 .= ",''"; // custom_sidebar_html
		$pre8 .= ",'OFF'"; // social_media
		$pre8 .= ",'Follow Me'"; // social_media_title
		$pre8 .= ",'small'"; // social_media_set
		$pre8 .= ",''"; // social_rss
		$pre8 .= ",''"; // social_email
		$pre8 .= ",''"; // social_twitter
		$pre8 .= ",''"; // social_facebook
		$pre8 .= ",''"; // google_analytics
		$pre8 .= ",'h1 {
     border-bottom: 0px;
     padding-top: 24px;

}

h2 {
     padding-top: 41px;
}

.widget-title, .widgettitle {
     padding-top: 12px;
]

#footer {
     border-top: 0px;
}'"; // custom_css
		$pre8 .= ",'preset-rangefinder'"; // preset_name
		$pre8 .= ",'Photocrati Rangefinder'"; // preset_title
		$pre8 .= ",'140'"; // header_height
		$pre8 .= ",'10'"; // header_logo_margin_above
		$pre8 .= ",'20'"; // header_logo_margin_below
		$pre8 .= ",'24'"; // title_size
		$pre8 .= ",'333333'"; // title_color
		$pre8 .= ",'helvetica, arial, sans-serif'"; // title_style
		$pre8 .= ",'12'"; // description_size
		$pre8 .= ",'666666'"; // description_color
		$pre8 .= ",'helvetica, arial, sans-serif'"; // description_style
		$pre8 .= ",'0'"; // bg_top_offset
		$pre8 .= ",'10'"; // container_padding
		$pre8 .= ",'12'"; // footer_font
		$pre8 .= ",'F1F1F1'"; // footer_font_color
		$pre8 .= ")";
		$wpdb->query($pre8);
		
		
		$pre9 = "INSERT INTO ". $photocrati_presets . " VALUES (";
		$pre9 .= "1 "; // option_set
		$pre9 .= ",'YES'"; // dynamic_style
		$pre9 .= ",'YES'"; // display_sidebar
		$pre9 .= ",'70'"; // content_width
		$pre9 .= ",'30'"; // sidebar_width
		$pre9 .= ",'left-right'"; // logo_menu_position
		$pre9 .= ",'000000'"; // bg_color
		$pre9 .= ",'Grille_BG.jpg'"; // bg_image
		$pre9 .= ",'repeat-x'"; // bg_repeat
		$pre9 .= ",'ffffff'"; // header_bg_color
		$pre9 .= ",''"; // header_bg_image
		$pre9 .= ",'repeat'"; // header_bg_repeat
		$pre9 .= ",'e3e3e3'"; // container_color
		$pre9 .= ",'9'"; // container_border
		$pre9 .= ",'fffcf7'"; // container_border_color
		$pre9 .= ",'423f3d'"; // font_color
		$pre9 .= ",'11'"; // font_size
		$pre9 .= ",'Lucida Grande, Lucida Sans, Lucida Sans Unicode, sans-serif'"; // font_style
		$pre9 .= ",'274a6b'"; // h1_color
		$pre9 .= ",'20'"; // h1_size
		$pre9 .= ",'274a6b'"; // h2_color
		$pre9 .= ",'18'"; // h2_size
		$pre9 .= ",'274a6b'"; // h3_color
		$pre9 .= ",'16'"; // h3_size
		$pre9 .= ",'274a6b'"; // h4_color
		$pre9 .= ",'14'"; // h4_size
		$pre9 .= ",'274a6b'"; // h5_color
		$pre9 .= ",'12'"; // h5_size
		$pre9 .= ",'6197CA'"; // link_color
		$pre9 .= ",'61b3ff'"; // link_hover_color
		$pre9 .= ",'none'"; // link_hover_style
		$pre9 .= ",'383738'"; // sidebar_font_color
		$pre9 .= ",'12'"; // sidebar_font_size
		$pre9 .= ",'Georgia, \"Times New Roman\", Times, serif'"; // sidebar_font_style
		$pre9 .= ",'transparent'"; // sidebar_bg_color
		$pre9 .= ",'6197CA'"; // sidebar_link_color
		$pre9 .= ",'61b3ff'"; // sidebar_link_hover_color
		$pre9 .= ",'underline'"; // sidebar_link_hover_style
		$pre9 .= ",'274a6b'"; // sidebar_title_color
		$pre9 .= ",'14'"; // sidebar_title_size
		$pre9 .= ",'Lucida Grande, Lucida Sans, Lucida Sans Unicode, sans-serif'"; // sidebar_title_style
		$pre9 .= ",'transparent'"; // menu_style
		$pre9 .= ",'42413F'"; // menu_color
		$pre9 .= ",'42413F'"; // menu_hover_color
		$pre9 .= ",'11'"; // menu_font_size
		$pre9 .= ",'Lucida Grande, Lucida Sans, Lucida Sans Unicode, sans-serif'"; // menu_font_style
		$pre9 .= ",'8C8C8C'"; // menu_font_color
		$pre9 .= ",'6197ca'"; // menu_font_hover_color
		$pre9 .= ",'6f7378'"; // submenu_color
		$pre9 .= ",'6197ca'"; // submenu_hover_color
		$pre9 .= ",'11'"; // submenu_font_size
		$pre9 .= ",'Lucida Grande, Lucida Sans, Lucida Sans Unicode, sans-serif'"; // submenu_font_style
		$pre9 .= ",'1B1B1B'"; // submenu_font_color
		$pre9 .= ",'ffffff'"; // submenu_font_hover_color
		$pre9 .= ",'5'"; // nextgen_border
		$pre9 .= ",'E1E1E1'"; // nextgen_border_color
		$pre9 .= ",'custom'"; // custom_logo
		$pre9 .= ",'Logo_Steel.png'"; // custom_logo_image
		$pre9 .= ",''"; // footer_copy
		$pre9 .= ",'OFF'"; // custom_sidebar
		$pre9 .= ",'ABOVE'"; // custom_sidebar_position
		$pre9 .= ",''"; // custom_sidebar_html
		$pre9 .= ",'OFF'"; // social_media
		$pre9 .= ",'Follow Me'"; // social_media_title
		$pre9 .= ",'small'"; // social_media_set
		$pre9 .= ",''"; // social_rss
		$pre9 .= ",''"; // social_email
		$pre9 .= ",''"; // social_twitter
		$pre9 .= ",''"; // social_facebook
		$pre9 .= ",''"; // google_analytics
		$pre9 .= ",'.menu ul {
       line-height: 1.5em;
}

p {
margin-bottom:0.5em;
}'"; // custom_css
		$pre9 .= ",'preset-polarized'"; // preset_name
		$pre9 .= ",'Photocrati Polarized'"; // preset_title
		$pre9 .= ",'140'"; // header_height
		$pre9 .= ",'25'"; // header_logo_margin_above
		$pre9 .= ",'10'"; // header_logo_margin_below
		$pre9 .= ",'24'"; // title_size
		$pre9 .= ",'333333'"; // title_color
		$pre9 .= ",'helvetica, arial, sans-serif'"; // title_style
		$pre9 .= ",'12'"; // description_size
		$pre9 .= ",'666666'"; // description_color
		$pre9 .= ",'helvetica, arial, sans-serif'"; // description_style
		$pre9 .= ",'20'"; // bg_top_offset
		$pre9 .= ",'20'"; // container_padding
		$pre9 .= ",'12'"; // footer_font
		$pre9 .= ",'F1F1F1'"; // footer_font_color
		$pre9 .= ")";
		$wpdb->query($pre9);
		
		
		$pre10 = "INSERT INTO ". $photocrati_presets . " VALUES (";
		$pre10 .= "1 "; // option_set
		$pre10 .= ",'YES'"; // dynamic_style
		$pre10 .= ",'YES'"; // display_sidebar
		$pre10 .= ",'70'"; // content_width
		$pre10 .= ",'30'"; // sidebar_width
		$pre10 .= ",'left-right'"; // logo_menu_position
		$pre10 .= ",'000000'"; // bg_color
		$pre10 .= ",''"; // bg_image
		$pre10 .= ",'repeat'"; // bg_repeat
		$pre10 .= ",'ffffff'"; // header_bg_color
		$pre10 .= ",'header-bg.jpg'"; // header_bg_image
		$pre10 .= ",'repeat-x'"; // header_bg_repeat
		$pre10 .= ",'transparent'"; // container_color
		$pre10 .= ",'0'"; // container_border
		$pre10 .= ",'CCCCCC'"; // container_border_color
		$pre10 .= ",'E1E1E1'"; // font_color
		$pre10 .= ",'13'"; // font_size
		$pre10 .= ",'helvetica, arial, sans-serif'"; // font_style
		$pre10 .= ",'f09f8f'"; // h1_color
		$pre10 .= ",'22'"; // h1_size
		$pre10 .= ",'FFFFFF'"; // h2_color
		$pre10 .= ",'20'"; // h2_size
		$pre10 .= ",'FFFFFF'"; // h3_color
		$pre10 .= ",'18'"; // h3_size
		$pre10 .= ",'FFFFFF'"; // h4_color
		$pre10 .= ",'16'"; // h4_size
		$pre10 .= ",'FFFFFF'"; // h5_color
		$pre10 .= ",'14'"; // h5_size
		$pre10 .= ",'995c53'"; // link_color
		$pre10 .= ",'d46b58'"; // link_hover_color
		$pre10 .= ",'none'"; // link_hover_style
		$pre10 .= ",'E1E1E1'"; // sidebar_font_color
		$pre10 .= ",'12'"; // sidebar_font_size
		$pre10 .= ",'helvetica, arial, sans-serif'"; // sidebar_font_style
		$pre10 .= ",'transparent'"; // sidebar_bg_color
		$pre10 .= ",'f09f8f'"; // sidebar_link_color
		$pre10 .= ",'d46b58'"; // sidebar_link_hover_color
		$pre10 .= ",'none'"; // sidebar_link_hover_style
		$pre10 .= ",'a8a8a8'"; // sidebar_title_color
		$pre10 .= ",'16'"; // sidebar_title_size
		$pre10 .= ",'helvetica, arial, sans-serif'"; // sidebar_title_style
		$pre10 .= ",'transparent'"; // menu_style
		$pre10 .= ",'FFFFFF'"; // menu_color
		$pre10 .= ",'FFFFFF'"; // menu_hover_color
		$pre10 .= ",'12'"; // menu_font_size
		$pre10 .= ",'helvetica, arial, sans-serif'"; // menu_font_style
		$pre10 .= ",'d4d4d4'"; // menu_font_color
		$pre10 .= ",'d46b58'"; // menu_font_hover_color
		$pre10 .= ",'E8E8E8'"; // submenu_color
		$pre10 .= ",'d46b58'"; // submenu_hover_color
		$pre10 .= ",'12'"; // submenu_font_size
		$pre10 .= ",'helvetica, arial, sans-serif'"; // submenu_font_style
		$pre10 .= ",'995c53'"; // submenu_font_color
		$pre10 .= ",'ffffff'"; // submenu_font_hover_color
		$pre10 .= ",'5'"; // nextgen_border
		$pre10 .= ",'E1E1E1'"; // nextgen_border_color
		$pre10 .= ",'custom'"; // custom_logo
		$pre10 .= ",'Logo_Melon.png'"; // custom_logo_image
		$pre10 .= ",''"; // footer_copy
		$pre10 .= ",'OFF'"; // custom_sidebar
		$pre10 .= ",'ABOVE'"; // custom_sidebar_position
		$pre10 .= ",''"; // custom_sidebar_html
		$pre10 .= ",'OFF'"; // social_media
		$pre10 .= ",'Follow Me'"; // social_media_title
		$pre10 .= ",'small'"; // social_media_set
		$pre10 .= ",''"; // social_rss
		$pre10 .= ",''"; // social_email
		$pre10 .= ",''"; // social_twitter
		$pre10 .= ",''"; // social_facebook
		$pre10 .= ",''"; // google_analytics
		$pre10 .= ",'#footer {
border-top:0;
text-align:center;
}

h1 {
border-bottom:0px;
}

p {
margin-bottom:0.5em;
line-height:1.7em;
}'"; // custom_css
		$pre10 .= ",'preset-wideangle'"; // preset_name
		$pre10 .= ",'Photocrati Wide Angle'"; // preset_title
		$pre10 .= ",'120'"; // header_height
		$pre10 .= ",'11'"; // header_logo_margin_above
		$pre10 .= ",'10'"; // header_logo_margin_below
		$pre10 .= ",'24'"; // title_size
		$pre10 .= ",'333333'"; // title_color
		$pre10 .= ",'helvetica, arial, sans-serif'"; // title_style
		$pre10 .= ",'12'"; // description_size
		$pre10 .= ",'666666'"; // description_color
		$pre10 .= ",'helvetica, arial, sans-serif'"; // description_style
		$pre10 .= ",'0'"; // bg_top_offset
		$pre10 .= ",'20'"; // container_padding
		$pre10 .= ",'12'"; // footer_font
		$pre10 .= ",'F1F1F1'"; // footer_font_color
		$pre10 .= ")";
		$wpdb->query($pre10);
		
		
		$pre11 = "INSERT INTO ". $photocrati_presets . " VALUES (";
		$pre11 .= "1 "; // option_set
		$pre11 .= ",'YES'"; // dynamic_style
		$pre11 .= ",'YES'"; // display_sidebar
		$pre11 .= ",'70'"; // content_width
		$pre11 .= ",'30'"; // sidebar_width
		$pre11 .= ",'left-right'"; // logo_menu_position
		$pre11 .= ",'FFFFFF'"; // bg_color
		$pre11 .= ",''"; // bg_image
		$pre11 .= ",'repeat'"; // bg_repeat
		$pre11 .= ",'000000'"; // header_bg_color
		$pre11 .= ",'header-bg-blk.jpg'"; // header_bg_image
		$pre11 .= ",'repeat-x'"; // header_bg_repeat
		$pre11 .= ",'transparent'"; // container_color
		$pre11 .= ",'0'"; // container_border
		$pre11 .= ",'CCCCCC'"; // container_border_color
		$pre11 .= ",'333333'"; // font_color
		$pre11 .= ",'12'"; // font_size
		$pre11 .= ",'Lucida Grande, Lucida Sans, Lucida Sans Unicode, sans-serif'"; // font_style
		$pre11 .= ",'786644'"; // h1_color
		$pre11 .= ",'22'"; // h1_size
		$pre11 .= ",'333333'"; // h2_color
		$pre11 .= ",'20'"; // h2_size
		$pre11 .= ",'333333'"; // h3_color
		$pre11 .= ",'18'"; // h3_size
		$pre11 .= ",'333333'"; // h4_color
		$pre11 .= ",'16'"; // h4_size
		$pre11 .= ",'333333'"; // h5_color
		$pre11 .= ",'14'"; // h5_size
		$pre11 .= ",'cbb07b'"; // link_color
		$pre11 .= ",'e3cc9e'"; // link_hover_color
		$pre11 .= ",'none'"; // link_hover_style
		$pre11 .= ",'757375'"; // sidebar_font_color
		$pre11 .= ",'12'"; // sidebar_font_size
		$pre11 .= ",'Lucida Grande, Lucida Sans, Lucida Sans Unicode, sans-serif'"; // sidebar_font_style
		$pre11 .= ",'transparent'"; // sidebar_bg_color
		$pre11 .= ",'b39968'"; // sidebar_link_color
		$pre11 .= ",'f0d198'"; // sidebar_link_hover_color
		$pre11 .= ",'none'"; // sidebar_link_hover_style
		$pre11 .= ",'786644'"; // sidebar_title_color
		$pre11 .= ",'14'"; // sidebar_title_size
		$pre11 .= ",'Lucida Grande, Lucida Sans, Lucida Sans Unicode, sans-serif'"; // sidebar_title_style
		$pre11 .= ",'transparent'"; // menu_style
		$pre11 .= ",'000000'"; // menu_color
		$pre11 .= ",'000000'"; // menu_hover_color
		$pre11 .= ",'12'"; // menu_font_size
		$pre11 .= ",'Lucida Grande, Lucida Sans, Lucida Sans Unicode, sans-serif'"; // menu_font_style
		$pre11 .= ",'c9ac71'"; // menu_font_color
		$pre11 .= ",'d4d0d4'"; // menu_font_hover_color
		$pre11 .= ",'333333'"; // submenu_color
		$pre11 .= ",'666666'"; // submenu_hover_color
		$pre11 .= ",'12'"; // submenu_font_size
		$pre11 .= ",'Lucida Grande, Lucida Sans, Lucida Sans Unicode, sans-serif'"; // submenu_font_style
		$pre11 .= ",'cbb07b'"; // submenu_font_color
		$pre11 .= ",'e3cc9e'"; // submenu_font_hover_color
		$pre11 .= ",'5'"; // nextgen_border
		$pre11 .= ",'CCCCCC'"; // nextgen_border_color
		$pre11 .= ",'custom'"; // custom_logo
		$pre11 .= ",'Logo_Gold.png'"; // custom_logo_image
		$pre11 .= ",''"; // footer_copy
		$pre11 .= ",'OFF'"; // custom_sidebar
		$pre11 .= ",'ABOVE'"; // custom_sidebar_position
		$pre11 .= ",''"; // custom_sidebar_html
		$pre11 .= ",'OFF'"; // social_media
		$pre11 .= ",'Follow Me'"; // social_media_title
		$pre11 .= ",'small'"; // social_media_set
		$pre11 .= ",''"; // social_rss
		$pre11 .= ",''"; // social_email
		$pre11 .= ",''"; // social_twitter
		$pre11 .= ",''"; // social_facebook
		$pre11 .= ",''"; // google_analytics
		$pre11 .= ",'#footer {
border-top:0;
text-align:center;
}

h1 {
border-bottom:0px;
}

p {
margin-bottom:0.5em;
line-height:1.7em;
}'"; // custom_css
		$pre11 .= ",'preset-silverhalide'"; // preset_name
		$pre11 .= ",'Photocrati Silver Halide'"; // preset_title
		$pre11 .= ",'120'"; // header_height
		$pre11 .= ",'11'"; // header_logo_margin_above
		$pre11 .= ",'10'"; // header_logo_margin_below
		$pre11 .= ",'24'"; // title_size
		$pre11 .= ",'FFFFFF'"; // title_color
		$pre11 .= ",'helvetica, arial, sans-serif'"; // title_style
		$pre11 .= ",'12'"; // description_size
		$pre11 .= ",'F1F1F1'"; // description_color
		$pre11 .= ",'helvetica, arial, sans-serif'"; // description_style
		$pre11 .= ",'0'"; // bg_top_offset
		$pre11 .= ",'20'"; // container_padding
		$pre11 .= ",'12'"; // footer_font
		$pre11 .= ",'666666'"; // footer_font_color
		$pre11 .= ")";
		$wpdb->query($pre11);
		
		
		$pre12 = "INSERT INTO ". $photocrati_presets . " VALUES (";
		$pre12 .= "1 "; // option_set
		$pre12 .= ",'YES'"; // dynamic_style
		$pre12 .= ",'YES'"; // display_sidebar
		$pre12 .= ",'70'"; // content_width
		$pre12 .= ",'30'"; // sidebar_width
		$pre12 .= ",'left-right'"; // logo_menu_position
		$pre12 .= ",'a5a6a1'"; // bg_color
		$pre12 .= ",''"; // bg_image
		$pre12 .= ",'repeat'"; // bg_repeat
		$pre12 .= ",'2E2E2E'"; // header_bg_color
		$pre12 .= ",''"; // header_bg_image
		$pre12 .= ",'repeat-x'"; // header_bg_repeat
		$pre12 .= ",'transparent'"; // container_color
		$pre12 .= ",'0'"; // container_border
		$pre12 .= ",'CCCCCC'"; // container_border_color
		$pre12 .= ",'000000'"; // font_color
		$pre12 .= ",'12'"; // font_size
		$pre12 .= ",'Lucida Grande, Lucida Sans, Lucida Sans Unicode, sans-serif'"; // font_style
		$pre12 .= ",'5a6153'"; // h1_color
		$pre12 .= ",'22'"; // h1_size
		$pre12 .= ",'000000'"; // h2_color
		$pre12 .= ",'20'"; // h2_size
		$pre12 .= ",'000000'"; // h3_color
		$pre12 .= ",'18'"; // h3_size
		$pre12 .= ",'000000'"; // h4_color
		$pre12 .= ",'16'"; // h4_size
		$pre12 .= ",'000000'"; // h5_color
		$pre12 .= ",'14'"; // h5_size
		$pre12 .= ",'4a751e'"; // link_color
		$pre12 .= ",'94a683'"; // link_hover_color
		$pre12 .= ",'none'"; // link_hover_style
		$pre12 .= ",'424242'"; // sidebar_font_color
		$pre12 .= ",'12'"; // sidebar_font_size
		$pre12 .= ",'Lucida Grande, Lucida Sans, Lucida Sans Unicode, sans-serif'"; // sidebar_font_style
		$pre12 .= ",'transparent'"; // sidebar_bg_color
		$pre12 .= ",'4a751e'"; // sidebar_link_color
		$pre12 .= ",'94a683'"; // sidebar_link_hover_color
		$pre12 .= ",'none'"; // sidebar_link_hover_style
		$pre12 .= ",'f1ffe3'"; // sidebar_title_color
		$pre12 .= ",'16'"; // sidebar_title_size
		$pre12 .= ",'Lucida Grande, Lucida Sans, Lucida Sans Unicode, sans-serif'"; // sidebar_title_style
		$pre12 .= ",'transparent'"; // menu_style
		$pre12 .= ",'2E2E2E'"; // menu_color
		$pre12 .= ",'2E2E2E'"; // menu_hover_color
		$pre12 .= ",'12'"; // menu_font_size
		$pre12 .= ",'Arial, Helvetica, sans-serif'"; // menu_font_style
		$pre12 .= ",'faffe3'"; // menu_font_color
		$pre12 .= ",'d4f52e'"; // menu_font_hover_color
		$pre12 .= ",'999999'"; // submenu_color
		$pre12 .= ",'C8C9CB'"; // submenu_hover_color
		$pre12 .= ",'12'"; // submenu_font_size
		$pre12 .= ",'Arial, Helvetica, sans-serif'"; // submenu_font_style
		$pre12 .= ",'FFFFFF'"; // submenu_font_color
		$pre12 .= ",'333333'"; // submenu_font_hover_color
		$pre12 .= ",'5'"; // nextgen_border
		$pre12 .= ",'E1E1E1'"; // nextgen_border_color
		$pre12 .= ",'custom'"; // custom_logo
		$pre12 .= ",'Logo_Lime.png'"; // custom_logo_image
		$pre12 .= ",''"; // footer_copy
		$pre12 .= ",'OFF'"; // custom_sidebar
		$pre12 .= ",'ABOVE'"; // custom_sidebar_position
		$pre12 .= ",''"; // custom_sidebar_html
		$pre12 .= ",'OFF'"; // social_media
		$pre12 .= ",'Follow Me'"; // social_media_title
		$pre12 .= ",'small'"; // social_media_set
		$pre12 .= ",''"; // social_rss
		$pre12 .= ",''"; // social_email
		$pre12 .= ",''"; // social_twitter
		$pre12 .= ",''"; // social_facebook
		$pre12 .= ",''"; // google_analytics
		$pre12 .= ",'#footer {
border-top:0;
text-align:right;
}

h1 {
border-bottom:0px;
}

p {
margin-bottom:0.5em;
line-height:1.7em;
}'"; // custom_css
		$pre12 .= ",'preset-filter'"; // preset_name
		$pre12 .= ",'Photocrati Filter'"; // preset_title
		$pre12 .= ",'120'"; // header_height
		$pre12 .= ",'11'"; // header_logo_margin_above
		$pre12 .= ",'10'"; // header_logo_margin_below
		$pre12 .= ",'24'"; // title_size
		$pre12 .= ",'FFFFFF'"; // title_color
		$pre12 .= ",'helvetica, arial, sans-serif'"; // title_style
		$pre12 .= ",'12'"; // description_size
		$pre12 .= ",'F1F1F1'"; // description_color
		$pre12 .= ",'helvetica, arial, sans-serif'"; // description_style
		$pre12 .= ",'0'"; // bg_top_offset
		$pre12 .= ",'20'"; // container_padding
		$pre12 .= ",'12'"; // footer_font
		$pre12 .= ",'333333'"; // footer_font_color
		$pre12 .= ")";
		$wpdb->query($pre12);
		
		
		$pre13 = "INSERT INTO ". $photocrati_presets . " VALUES (";
		$pre13 .= "1 "; // option_set
		$pre13 .= ",'YES'"; // dynamic_style
		$pre13 .= ",'YES'"; // display_sidebar
		$pre13 .= ",'70'"; // content_width
		$pre13 .= ",'30'"; // sidebar_width
		$pre13 .= ",'left-right'"; // logo_menu_position
		$pre13 .= ",'000000'"; // bg_color
		$pre13 .= ",'background_bokeh.jpg'"; // bg_image
		$pre13 .= ",'repeat-x'"; // bg_repeat
		$pre13 .= ",'FFFFFF'"; // header_bg_color
		$pre13 .= ",'polnlig_header_bg.gif'"; // header_bg_image
		$pre13 .= ",'repeat-x'"; // header_bg_repeat
		$pre13 .= ",'transparent'"; // container_color
		$pre13 .= ",'0'"; // container_border
		$pre13 .= ",'CCCCCC'"; // container_border_color
		$pre13 .= ",'E1E1E1'"; // font_color
		$pre13 .= ",'12'"; // font_size
		$pre13 .= ",'Arial, Helvetica, sans-serif'"; // font_style
		$pre13 .= ",'f04a16'"; // h1_color
		$pre13 .= ",'22'"; // h1_size
		$pre13 .= ",'FFFFFF'"; // h2_color
		$pre13 .= ",'20'"; // h2_size
		$pre13 .= ",'FFFFFF'"; // h3_color
		$pre13 .= ",'18'"; // h3_size
		$pre13 .= ",'FFFFFF'"; // h4_color
		$pre13 .= ",'16'"; // h4_size
		$pre13 .= ",'FFFFFF'"; // h5_color
		$pre13 .= ",'14'"; // h5_size
		$pre13 .= ",'ebdfd9'"; // link_color
		$pre13 .= ",'ff8661'"; // link_hover_color
		$pre13 .= ",'underline'"; // link_hover_style
		$pre13 .= ",'E1E1E1'"; // sidebar_font_color
		$pre13 .= ",'12'"; // sidebar_font_size
		$pre13 .= ",'Verdana, Arial, Helvetica, sans-serif'"; // sidebar_font_style
		$pre13 .= ",'transparent'"; // sidebar_bg_color
		$pre13 .= ",'d6874e'"; // sidebar_link_color
		$pre13 .= ",'f04916'"; // sidebar_link_hover_color
		$pre13 .= ",'underline'"; // sidebar_link_hover_style
		$pre13 .= ",'FFFFFF'"; // sidebar_title_color
		$pre13 .= ",'14'"; // sidebar_title_size
		$pre13 .= ",'Arial, Helvetica, sans-serif'"; // sidebar_title_style
		$pre13 .= ",'color'"; // menu_style
		$pre13 .= ",''"; // menu_color
		$pre13 .= ",'f04a16'"; // menu_hover_color
		$pre13 .= ",'12'"; // menu_font_size
		$pre13 .= ",'Arial, Helvetica, sans-serif'"; // menu_font_style
		$pre13 .= ",'d6874e'"; // menu_font_color
		$pre13 .= ",'FFFFFF'"; // menu_font_hover_color
		$pre13 .= ",'E8E8E8'"; // submenu_color
		$pre13 .= ",'f04a16'"; // submenu_hover_color
		$pre13 .= ",'12'"; // submenu_font_size
		$pre13 .= ",'Arial, Helvetica, sans-serif'"; // submenu_font_style
		$pre13 .= ",'333333'"; // submenu_font_color
		$pre13 .= ",'FFFFFF'"; // submenu_font_hover_color
		$pre13 .= ",'2'"; // nextgen_border
		$pre13 .= ",'faf7f7'"; // nextgen_border_color
		$pre13 .= ",'custom'"; // custom_logo
		$pre13 .= ",'Logo_Bokeh.png'"; // custom_logo_image
		$pre13 .= ",''"; // footer_copy
		$pre13 .= ",'OFF'"; // custom_sidebar
		$pre13 .= ",'ABOVE'"; // custom_sidebar_position
		$pre13 .= ",''"; // custom_sidebar_html
		$pre13 .= ",'OFF'"; // social_media
		$pre13 .= ",'Follow Me'"; // social_media_title
		$pre13 .= ",'small'"; // social_media_set
		$pre13 .= ",''"; // social_rss
		$pre13 .= ",''"; // social_email
		$pre13 .= ",''"; // social_twitter
		$pre13 .= ",''"; // social_facebook
		$pre13 .= ",''"; // google_analytics
		$pre13 .= ",'.menu a:link, .menu a:visited {
padding:52px 17px 29px;
}

#footer {
border-top:0;
}'"; // custom_css
		$pre13 .= ",'preset-bokeh'"; // preset_name
		$pre13 .= ",'Photocrati Bokeh'"; // preset_title
		$pre13 .= ",'120'"; // header_height
		$pre13 .= ",'25'"; // header_logo_margin_above
		$pre13 .= ",'10'"; // header_logo_margin_below
		$pre13 .= ",'24'"; // title_size
		$pre13 .= ",'333333'"; // title_color
		$pre13 .= ",'helvetica, arial, sans-serif'"; // title_style
		$pre13 .= ",'12'"; // description_size
		$pre13 .= ",'666666'"; // description_color
		$pre13 .= ",'helvetica, arial, sans-serif'"; // description_style
		$pre13 .= ",'0'"; // bg_top_offset
		$pre13 .= ",'20'"; // container_padding
		$pre13 .= ",'12'"; // footer_font
		$pre13 .= ",'F1F1F1'"; // footer_font_color
		$pre13 .= ")";
		$wpdb->query($pre13);
		
		
		$pre14 = "INSERT INTO ". $photocrati_presets . " VALUES (";
		$pre14 .= "1 "; // option_set
		$pre14 .= ",'YES'"; // dynamic_style
		$pre14 .= ",'YES'"; // display_sidebar
		$pre14 .= ",'74'"; // content_width
		$pre14 .= ",'26'"; // sidebar_width
		$pre14 .= ",'right-left'"; // logo_menu_position
		$pre14 .= ",'f5dddb'"; // bg_color
		$pre14 .= ",'pink_stripes.gif'"; // bg_image
		$pre14 .= ",'repeat'"; // bg_repeat
		$pre14 .= ",'FFFFFF'"; // header_bg_color
		$pre14 .= ",'header_fadepink.gif'"; // header_bg_image
		$pre14 .= ",'repeat-x'"; // header_bg_repeat
		$pre14 .= ",'ffffff'"; // container_color
		$pre14 .= ",'0'"; // container_border
		$pre14 .= ",'CCCCCC'"; // container_border_color
		$pre14 .= ",'000000'"; // font_color
		$pre14 .= ",'14'"; // font_size
		$pre14 .= ",'\"Times New Roman\", Times, serif'"; // font_style
		$pre14 .= ",'e3628b'"; // h1_color
		$pre14 .= ",'24'"; // h1_size
		$pre14 .= ",'e3628b'"; // h2_color
		$pre14 .= ",'22'"; // h2_size
		$pre14 .= ",'e3628b'"; // h3_color
		$pre14 .= ",'18'"; // h3_size
		$pre14 .= ",'e3628b'"; // h4_color
		$pre14 .= ",'16'"; // h4_size
		$pre14 .= ",'e3628b'"; // h5_color
		$pre14 .= ",'14'"; // h5_size
		$pre14 .= ",'d1a1ac'"; // link_color
		$pre14 .= ",'ff548d'"; // link_hover_color
		$pre14 .= ",'none'"; // link_hover_style
		$pre14 .= ",'858085'"; // sidebar_font_color
		$pre14 .= ",'12'"; // sidebar_font_size
		$pre14 .= ",'\"Times New Roman\", Times, serif'"; // sidebar_font_style
		$pre14 .= ",'eeeadf'"; // sidebar_bg_color
		$pre14 .= ",'c6869a'"; // sidebar_link_color
		$pre14 .= ",'e3628b'"; // sidebar_link_hover_color
		$pre14 .= ",'none'"; // sidebar_link_hover_style
		$pre14 .= ",'c6869a'"; // sidebar_title_color
		$pre14 .= ",'14'"; // sidebar_title_size
		$pre14 .= ",'Arial, Helvetica, sans-serif'"; // sidebar_title_style
		$pre14 .= ",'transparent'"; // menu_style
		$pre14 .= ",'FFFFFF'"; // menu_color
		$pre14 .= ",'FFFFFF'"; // menu_hover_color
		$pre14 .= ",'12'"; // menu_font_size
		$pre14 .= ",'Arial, Helvetica, sans-serif'"; // menu_font_style
		$pre14 .= ",'d1a1ac'"; // menu_font_color
		$pre14 .= ",'e3628b'"; // menu_font_hover_color
		$pre14 .= ",'eeeadf'"; // submenu_color
		$pre14 .= ",'ffffff'"; // submenu_hover_color
		$pre14 .= ",'12'"; // submenu_font_size
		$pre14 .= ",'Arial, Helvetica, sans-serif'"; // submenu_font_style
		$pre14 .= ",'c6869a'"; // submenu_font_color
		$pre14 .= ",'e3628b'"; // submenu_font_hover_color
		$pre14 .= ",'5'"; // nextgen_border
		$pre14 .= ",'e8e7e7'"; // nextgen_border_color
		$pre14 .= ",'custom'"; // custom_logo
		$pre14 .= ",'Logo_Pink.png'"; // custom_logo_image
		$pre14 .= ",''"; // footer_copy
		$pre14 .= ",'OFF'"; // custom_sidebar
		$pre14 .= ",'ABOVE'"; // custom_sidebar_position
		$pre14 .= ",''"; // custom_sidebar_html
		$pre14 .= ",'OFF'"; // social_media
		$pre14 .= ",'Follow Me'"; // social_media_title
		$pre14 .= ",'small'"; // social_media_set
		$pre14 .= ",''"; // social_rss
		$pre14 .= ",''"; // social_email
		$pre14 .= ",''"; // social_twitter
		$pre14 .= ",''"; // social_facebook
		$pre14 .= ",''"; // google_analytics
		$pre14 .= ",'div.slideshow {
margin-bottom: 20px;
}

#primary {
padding:25px 23px;
width:79%;
}'"; // custom_css
		$pre14 .= ",'preset-prime'"; // preset_name
		$pre14 .= ",'Photocrati Prime'"; // preset_title
		$pre14 .= ",'120'"; // header_height
		$pre14 .= ",'20'"; // header_logo_margin_above
		$pre14 .= ",'10'"; // header_logo_margin_below
		$pre14 .= ",'24'"; // title_size
		$pre14 .= ",'333333'"; // title_color
		$pre14 .= ",'helvetica, arial, sans-serif'"; // title_style
		$pre14 .= ",'12'"; // description_size
		$pre14 .= ",'666666'"; // description_color
		$pre14 .= ",'helvetica, arial, sans-serif'"; // description_style
		$pre14 .= ",'0'"; // bg_top_offset
		$pre14 .= ",'30'"; // container_padding
		$pre14 .= ",'12'"; // footer_font
		$pre14 .= ",'333333'"; // footer_font_color
		$pre14 .= ")";
		$wpdb->query($pre14);
	
		
	}
	
	
	$photocrati_fonts = $table_prefix . "photocrati_fonts";
	
	if($wpdb->get_var("show tables like '$photocrati_fonts'") != $photocrati_fonts) {
	
		$sql2 = "CREATE TABLE `". $photocrati_fonts . "` ( ";
		$sql2 .= " `font_name` tinytext NOT NULL, ";
		$sql2 .= " `font_value` tinytext NOT NULL ";
		$sql2 .= ") ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ; ";
		
		require_once(ABSPATH . 'wp-admin/upgrade-functions.php');
		dbDelta($sql2);
		
		$sql3 = "INSERT INTO ". $photocrati_fonts . " VALUES (
		'Arial'
		,'Arial, Helvetica, sans-serif'
		)";
		$wpdb->query($sql3);
		
		$sql4 = "INSERT INTO ". $photocrati_fonts . " VALUES (
		'Times New Roman'
		,'\"Times New Roman\", Times, serif'
		)";
		$wpdb->query($sql4);
		
		$sql5 = "INSERT INTO ". $photocrati_fonts . " VALUES (
		'Verdana'
		,'Verdana, Arial, Helvetica, sans-serif'
		)";
		$wpdb->query($sql5);
		
		$sql6 = "INSERT INTO ". $photocrati_fonts . " VALUES (
		'Geneva'
		,'Geneva, Arial, Helvetica, sans-serif'
		)";
		$wpdb->query($sql6);
		
		$sql7 = "INSERT INTO ". $photocrati_fonts . " VALUES (
		'Georgia'
		,'Georgia, \"Times New Roman\", Times, serif'
		)";
		$wpdb->query($sql7);
		
		$sql8 = "INSERT INTO ". $photocrati_fonts . " VALUES (
		'Times'
		,'Times, serif, \"Times New Roman\"'
		)";
		$wpdb->query($sql8);
		
		$sql9 = "INSERT INTO ". $photocrati_fonts . " VALUES (
		'Helvetica'
		,'helvetica, arial, sans-serif'
		)";
		$wpdb->query($sql9);
		
		$sql10 = "INSERT INTO ". $photocrati_fonts . " VALUES (
		'Courier'
		,'Courier, monospace, sans-serif'
		)";
		$wpdb->query($sql10);
		
		$sql11 = "INSERT INTO ". $photocrati_fonts . " VALUES (
		'Courier New'
		,'Courier New, monospace, sans-serif'
		)";
		$wpdb->query($sql11);
		
		$sql12 = "INSERT INTO ". $photocrati_fonts . " VALUES (
		'Trebuchet'
		,'Trebuchet, Tahoma, Helvetica, sans-serif'
		)";
		$wpdb->query($sql12);
		
		$sql13 = "INSERT INTO ". $photocrati_fonts . " VALUES (
		'Tahoma'
		,'Tahoma, Trebuchet, Helvetica, sans-serif'
		)";
		$wpdb->query($sql13);
		
		$sql14 = "INSERT INTO ". $photocrati_fonts . " VALUES (
		'Lucida'
		,'Lucida Grande, Lucida Sans, Lucida Sans Unicode, sans-serif'
		)";
		$wpdb->query($sql14);
		
	}
}

add_action('admin_init', 'createtable_photocrati_admin');	

?>