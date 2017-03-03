<?php
/*
Plugin Name: Menu access management
Plugin URI: http://www.eoxia.com
Description: Permet de gérer l'accés au menu pour les différents utilisateurs
Version: 1.0
Author: Eoxia
Author URI: http://www.eoxia.com
*/

function wpmenuaccess_order_menu($user_id, $output_type='display'){
	global $menu;
	$output = array();
	if($output_type=='display'){
		$output = '';
		$menu_item_allowed=0;
		$user_menu_management = get_user_meta($_REQUEST['user_id'], 'menu_access_mngt', true);
	}

	if(is_array($menu)){
		$menu_position=1;
		foreach($menu as $item_menu_key => $item_menu){
			if(user_can($user_id, $item_menu[1])){
				$value = $item_menu[2];//((!empty($item_menu[2]) && substr($item_menu[2], 0, 9)=='separator')?substr($item_menu[2], 0, 9).$menu_position:(!empty($item_menu[5])?$item_menu[5]:$item_menu[2]));

				switch($output_type){
					case 'display':
						$checked = (!empty($user_menu_management) && array_key_exists($value, $user_menu_management))?'':'checked="checked" ';
						$output .= '<p><input '.$checked.'type="checkbox" name="menu_access_management[]" value="'.$value.'" id="'.$item_menu[2].'" /><label for="'.$item_menu[2].'">'.(!empty($item_menu[0])?$item_menu[0]:__('separator')).'</label> '.$item_menu_key.'</p>';
						$menu_item_allowed++;
					break;
					case 'array':
						if(!empty($value) && !in_array($value, $_REQUEST['menu_access_management']))
							$output[$value]=$value;
					break;
				}
				$menu_position++;
			}
		}
	}

	if(($output_type=='display') && ($menu_item_allowed>0)){
		$output = '<h3>'.__('G&eacute;rer l\'acc&egrave;s aux diff&eacute;rents menu pour l\'utilisateur courant').'</h3>'.$output;
	}

	return $output;
}

function menu_access_management_existing_menu(){
	echo wpmenuaccess_order_menu($_REQUEST['user_id'], 'display');
}
add_action('edit_user_profile', 'menu_access_management_existing_menu');

function menu_access_management_save(){
	update_usermeta($_REQUEST['user_id'], 'menu_access_mngt', wpmenuaccess_order_menu($_REQUEST['user_id'], 'array'));
}
add_action('edit_user_profile_update', 'menu_access_management_save');

function menu_access_management_execution(){
	global $menu;
	$user_menu_management = get_user_meta(get_current_user_id(), 'menu_access_mngt', true);
	if(!empty($user_menu_management)){
		foreach($menu as $item_key => $menu_item){
			if(in_array($menu_item[2], $user_menu_management)){
				unset($menu[$item_key]);
			}
		}
	}
}
add_action('admin_menu', 'menu_access_management_execution');


// function menu_access_management_execution(){
	// $user_menu_management = get_user_meta(get_current_user_id(), 'menu_access_mngt', true);
	// $item_to_hide_list = '  ';
	// if(!empty($user_menu_management)){
		// foreach($user_menu_management as $item => $val){
			// $item_to_hide_list.=((substr($item, 0, 9)=='separator')?('#adminmenu li.wp-menu-separator:nth-child('.substr($item, 9).')'):'#'.$item).', ';
		// }
	// }
	// $item_to_hide_list = substr($item_to_hide_list,0,-2);
	// if(!empty($item_to_hide_list)){
// echo '<style type="text/css" >';
// echo '	'.$item_to_hide_list.'{	display:none; }';
// echo '</style>';
	// }
// }
// add_action('admin_head', 'menu_access_management_execution');