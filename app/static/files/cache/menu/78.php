<?php if(!defined("__XE__")) exit(); $menu = new stdClass();$lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); $site_srl = 0;$site_admin = false;if($site_srl) { $oModuleModel = getModel('module');$site_module_info = $oModuleModel->getSiteInfo($site_srl); if($site_module_info) Context::set('site_module_info',$site_module_info);else $site_module_info = Context::get('site_module_info');$grant = $oModuleModel->getGrant($site_module_info, $logged_info); if($grant->manager ==1) $site_admin = true;}if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srls = array(); }; $_menu_names[68] = array("en"=>'Board',"ko"=>'Board',"jp"=>'Board',"zh-CN"=>'Board',"zh-TW"=>'Board',"fr"=>'Board',"de"=>'Board',"ru"=>'Board',"es"=>'Board',"tr"=>'Board',"vi"=>'Board',"mn"=>'Board',); ; $menu->list = array(68=>array("node_srl" => 68, "parent_srl" => 0, "menu_name_key" => 'Board', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[68][$lang_type] : ""), "href" => (true ? getSiteUrl('', '','mid','board') : ""), "url" => (true ? 'board' : ""), "is_shortcut" => 'N', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("board") && in_array(Context::get("mid"), array("board")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("board") && in_array(Context::get("mid"), array("board")) ? $_menu_names[68][$lang_type] : $_menu_names[68][$lang_type]) : ""),),); if(!$is_admin) { recurciveExposureCheck($menu->list); }Context::set("included_menu", $menu); ?>