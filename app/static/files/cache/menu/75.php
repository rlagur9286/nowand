<?php if(!defined("__XE__")) exit(); $menu = new stdClass();$lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); $site_srl = 0;$site_admin = false;if($site_srl) { $oModuleModel = getModel('module');$site_module_info = $oModuleModel->getSiteInfo($site_srl); if($site_module_info) Context::set('site_module_info',$site_module_info);else $site_module_info = Context::get('site_module_info');$grant = $oModuleModel->getGrant($site_module_info, $logged_info); if($grant->manager ==1) $site_admin = true;}if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srls = array(); }; $_menu_names[175] = array("en"=>'김포 청솔수목장',"ko"=>'김포 청솔수목장',"jp"=>'김포 청솔수목장',"zh-CN"=>'김포 청솔수목장',"zh-TW"=>'김포 청솔수목장',"fr"=>'김포 청솔수목장',"de"=>'김포 청솔수목장',"ru"=>'김포 청솔수목장',"es"=>'김포 청솔수목장',"tr"=>'김포 청솔수목장',"vi"=>'김포 청솔수목장',"mn"=>'김포 청솔수목장',); $_menu_names[163] = array("en"=>'김포수목장',"ko"=>'김포수목장',"jp"=>'김포수목장',"zh-CN"=>'김포수목장',"zh-TW"=>'김포수목장',"fr"=>'김포수목장',"de"=>'김포수목장',"ru"=>'김포수목장',"es"=>'김포수목장',"tr"=>'김포수목장',"vi"=>'김포수목장',"mn"=>'김포수목장',); $_menu_names[224] = array("en"=>'김포수목장 특장점',"ko"=>'김포수목장 특장점',"jp"=>'김포수목장 특장점',"zh-CN"=>'김포수목장 특장점',"zh-TW"=>'김포수목장 특장점',"fr"=>'김포수목장 특장점',"de"=>'김포수목장 특장점',"ru"=>'김포수목장 특장점',"es"=>'김포수목장 특장점',"tr"=>'김포수목장 특장점',"vi"=>'김포수목장 특장점',"mn"=>'김포수목장 특장점',); $_menu_names[222] = array("en"=>'김포수목장 시설전경',"ko"=>'김포수목장 시설전경',"jp"=>'김포수목장 시설전경',"zh-CN"=>'김포수목장 시설전경',"zh-TW"=>'김포수목장 시설전경',"fr"=>'김포수목장 시설전경',"de"=>'김포수목장 시설전경',"ru"=>'김포수목장 시설전경',"es"=>'김포수목장 시설전경',"tr"=>'김포수목장 시설전경',"vi"=>'김포수목장 시설전경',"mn"=>'김포수목장 시설전경',); $_menu_names[166] = array("en"=>'벽제중앙추모공원',"ko"=>'벽제중앙추모공원',"jp"=>'벽제중앙추모공원',"zh-CN"=>'벽제중앙추모공원',"zh-TW"=>'벽제중앙추모공원',"fr"=>'벽제중앙추모공원',"de"=>'벽제중앙추모공원',"ru"=>'벽제중앙추모공원',"es"=>'벽제중앙추모공원',"tr"=>'벽제중앙추모공원',"vi"=>'벽제중앙추모공원',"mn"=>'벽제중앙추모공원',); $_menu_names[74] = array("en"=>'벽제납골당',"ko"=>'벽제납골당',"jp"=>'벽제납골당',"zh-CN"=>'벽제납골당',"zh-TW"=>'벽제납골당',"fr"=>'벽제납골당',"de"=>'벽제납골당',"ru"=>'벽제납골당',"es"=>'벽제납골당',"tr"=>'벽제납골당',"vi"=>'벽제납골당',"mn"=>'벽제납골당',); $_menu_names[165] = array("en"=>'벽제납골당 특장점',"ko"=>'벽제납골당 특장점',"jp"=>'벽제납골당 특장점',"zh-CN"=>'벽제납골당 특장점',"zh-TW"=>'벽제납골당 특장점',"fr"=>'벽제납골당 특장점',"de"=>'벽제납골당 특장점',"ru"=>'벽제납골당 특장점',"es"=>'벽제납골당 특장점',"tr"=>'벽제납골당 특장점',"vi"=>'벽제납골당 특장점',"mn"=>'벽제납골당 특장점',); $_menu_names[140] = array("en"=>'벽제납골당 시설전경',"ko"=>'벽제납골당 시설전경',"jp"=>'벽제납골당 시설전경',"zh-CN"=>'벽제납골당 시설전경',"zh-TW"=>'벽제납골당 시설전경',"fr"=>'벽제납골당 시설전경',"de"=>'벽제납골당 시설전경',"ru"=>'벽제납골당 시설전경',"es"=>'벽제납골당 시설전경',"tr"=>'벽제납골당 시설전경',"vi"=>'벽제납골당 시설전경',"mn"=>'벽제납골당 시설전경',); $_menu_names[161] = array("en"=>'나우앤드',"ko"=>'나우앤드',"jp"=>'나우앤드',"zh-CN"=>'나우앤드',"zh-TW"=>'나우앤드',"fr"=>'나우앤드',"de"=>'나우앤드',"ru"=>'나우앤드',"es"=>'나우앤드',"tr"=>'나우앤드',"vi"=>'나우앤드',"mn"=>'나우앤드',); $_menu_names[172] = array("en"=>'양주 하늘안추모공원',"ko"=>'양주 하늘안추모공원',"jp"=>'양주 하늘안추모공원',"zh-CN"=>'양주 하늘안추모공원',"zh-TW"=>'양주 하늘안추모공원',"fr"=>'양주 하늘안추모공원',"de"=>'양주 하늘안추모공원',"ru"=>'양주 하늘안추모공원',"es"=>'양주 하늘안추모공원',"tr"=>'양주 하늘안추모공원',"vi"=>'양주 하늘안추모공원',"mn"=>'양주 하늘안추모공원',); $_menu_names[155] = array("en"=>'양주납골당',"ko"=>'양주납골당',"jp"=>'양주납골당',"zh-CN"=>'양주납골당',"zh-TW"=>'양주납골당',"fr"=>'양주납골당',"de"=>'양주납골당',"ru"=>'양주납골당',"es"=>'양주납골당',"tr"=>'양주납골당',"vi"=>'양주납골당',"mn"=>'양주납골당',); $_menu_names[228] = array("en"=>'양주납골당 특장점',"ko"=>'양주납골당 특장점',"jp"=>'양주납골당 특장점',"zh-CN"=>'양주납골당 특장점',"zh-TW"=>'양주납골당 특장점',"fr"=>'양주납골당 특장점',"de"=>'양주납골당 특장점',"ru"=>'양주납골당 특장점',"es"=>'양주납골당 특장점',"tr"=>'양주납골당 특장점',"vi"=>'양주납골당 특장점',"mn"=>'양주납골당 특장점',); $_menu_names[226] = array("en"=>'양주납골당 시설전경',"ko"=>'양주납골당 시설전경',"jp"=>'양주납골당 시설전경',"zh-CN"=>'양주납골당 시설전경',"zh-TW"=>'양주납골당 시설전경',"fr"=>'양주납골당 시설전경',"de"=>'양주납골당 시설전경',"ru"=>'양주납골당 시설전경',"es"=>'양주납골당 시설전경',"tr"=>'양주납골당 시설전경',"vi"=>'양주납골당 시설전경',"mn"=>'양주납골당 시설전경',); $_menu_names[174] = array("en"=>'남양주 에덴추모공원',"ko"=>'남양주 에덴추모공원',"jp"=>'남양주 에덴추모공원',"zh-CN"=>'남양주 에덴추모공원',"zh-TW"=>'남양주 에덴추모공원',"fr"=>'남양주 에덴추모공원',"de"=>'남양주 에덴추모공원',"ru"=>'남양주 에덴추모공원',"es"=>'남양주 에덴추모공원',"tr"=>'남양주 에덴추모공원',"vi"=>'남양주 에덴추모공원',"mn"=>'남양주 에덴추모공원',); $_menu_names[159] = array("en"=>'남양주납골당',"ko"=>'남양주납골당',"jp"=>'남양주납골당',"zh-CN"=>'남양주납골당',"zh-TW"=>'남양주납골당',"fr"=>'남양주납골당',"de"=>'남양주납골당',"ru"=>'남양주납골당',"es"=>'남양주납골당',"tr"=>'남양주납골당',"vi"=>'남양주납골당',"mn"=>'남양주납골당',); $_menu_names[230] = array("en"=>'남양주납골당 특장점',"ko"=>'남양주납골당 특장점',"jp"=>'남양주납골당 특장점',"zh-CN"=>'남양주납골당 특장점',"zh-TW"=>'남양주납골당 특장점',"fr"=>'남양주납골당 특장점',"de"=>'남양주납골당 특장점',"ru"=>'남양주납골당 특장점',"es"=>'남양주납골당 특장점',"tr"=>'남양주납골당 특장점',"vi"=>'남양주납골당 특장점',"mn"=>'남양주납골당 특장점',); $_menu_names[232] = array("en"=>'남양주납골당 시설전경',"ko"=>'남양주납골당 시설전경',"jp"=>'남양주납골당 시설전경',"zh-CN"=>'남양주납골당 시설전경',"zh-TW"=>'남양주납골당 시설전경',"fr"=>'남양주납골당 시설전경',"de"=>'남양주납골당 시설전경',"ru"=>'남양주납골당 시설전경',"es"=>'남양주납골당 시설전경',"tr"=>'남양주납골당 시설전경',"vi"=>'남양주납골당 시설전경',"mn"=>'남양주납골당 시설전경',); ; $menu->list = array(175=>array("node_srl" => 175, "parent_srl" => 0, "menu_name_key" => '김포 청솔수목장', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[175][$lang_type] : ""), "href" => (true ? getSiteUrl('', '','mid','gimpo') : ""), "url" => (true ? 'gimpo' : ""), "is_shortcut" => 'Y', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("gimpo","gimpo_info","board_photo","gimpo") && in_array(Context::get("mid"), array("gimpo","gimpo_info","board_photo","gimpo")) ? 1 : 0), "expand" => 'N', "list" => array(163=>array("node_srl" => 163, "parent_srl" => 175, "menu_name_key" => '김포수목장', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[163][$lang_type] : ""), "href" => (true ? getSiteUrl('', '','mid','gimpo') : ""), "url" => (true ? 'gimpo' : ""), "is_shortcut" => 'N', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("gimpo") && in_array(Context::get("mid"), array("gimpo")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("gimpo") && in_array(Context::get("mid"), array("gimpo")) ? $_menu_names[163][$lang_type] : $_menu_names[163][$lang_type]) : ""),),224=>array("node_srl" => 224, "parent_srl" => 175, "menu_name_key" => '김포수목장 특장점', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[224][$lang_type] : ""), "href" => (true ? getSiteUrl('', '','mid','gimpo_info') : ""), "url" => (true ? 'gimpo_info' : ""), "is_shortcut" => 'N', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("gimpo_info") && in_array(Context::get("mid"), array("gimpo_info")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("gimpo_info") && in_array(Context::get("mid"), array("gimpo_info")) ? $_menu_names[224][$lang_type] : $_menu_names[224][$lang_type]) : ""),),222=>array("node_srl" => 222, "parent_srl" => 175, "menu_name_key" => '김포수목장 시설전경', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[222][$lang_type] : ""), "href" => (true ? getSiteUrl('', '','mid','board_photo') : ""), "url" => (true ? 'board_photo' : ""), "is_shortcut" => 'N', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("board_photo") && in_array(Context::get("mid"), array("board_photo")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("board_photo") && in_array(Context::get("mid"), array("board_photo")) ? $_menu_names[222][$lang_type] : $_menu_names[222][$lang_type]) : ""),),), "link" => (true ? (array("gimpo","gimpo_info","board_photo","gimpo") && in_array(Context::get("mid"), array("gimpo","gimpo_info","board_photo","gimpo")) ? $_menu_names[175][$lang_type] : $_menu_names[175][$lang_type]) : ""),),166=>array("node_srl" => 166, "parent_srl" => 0, "menu_name_key" => '벽제중앙추모공원', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[166][$lang_type] : ""), "href" => (true ? getSiteUrl('', '','mid','byeokje') : ""), "url" => (true ? 'byeokje' : ""), "is_shortcut" => 'Y', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("byeokje","byeokje_info","byeokje_photo","byeokje") && in_array(Context::get("mid"), array("byeokje","byeokje_info","byeokje_photo","byeokje")) ? 1 : 0), "expand" => 'N', "list" => array(74=>array("node_srl" => 74, "parent_srl" => 166, "menu_name_key" => '벽제납골당', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[74][$lang_type] : ""), "href" => (true ? getSiteUrl('', '','mid','byeokje') : ""), "url" => (true ? 'byeokje' : ""), "is_shortcut" => 'N', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("byeokje") && in_array(Context::get("mid"), array("byeokje")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("byeokje") && in_array(Context::get("mid"), array("byeokje")) ? $_menu_names[74][$lang_type] : $_menu_names[74][$lang_type]) : ""),),165=>array("node_srl" => 165, "parent_srl" => 166, "menu_name_key" => '벽제납골당 특장점', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[165][$lang_type] : ""), "href" => (true ? getSiteUrl('', '','mid','byeokje_info') : ""), "url" => (true ? 'byeokje_info' : ""), "is_shortcut" => 'N', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("byeokje_info") && in_array(Context::get("mid"), array("byeokje_info")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("byeokje_info") && in_array(Context::get("mid"), array("byeokje_info")) ? $_menu_names[165][$lang_type] : $_menu_names[165][$lang_type]) : ""),),140=>array("node_srl" => 140, "parent_srl" => 166, "menu_name_key" => '벽제납골당 시설전경', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[140][$lang_type] : ""), "href" => (true ? getSiteUrl('', '','mid','byeokje_photo') : ""), "url" => (true ? 'byeokje_photo' : ""), "is_shortcut" => 'N', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("byeokje_photo") && in_array(Context::get("mid"), array("byeokje_photo")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("byeokje_photo") && in_array(Context::get("mid"), array("byeokje_photo")) ? $_menu_names[140][$lang_type] : $_menu_names[140][$lang_type]) : ""),),), "link" => (true ? (array("byeokje","byeokje_info","byeokje_photo","byeokje") && in_array(Context::get("mid"), array("byeokje","byeokje_info","byeokje_photo","byeokje")) ? $_menu_names[166][$lang_type] : $_menu_names[166][$lang_type]) : ""),),161=>array("node_srl" => 161, "parent_srl" => 0, "menu_name_key" => '나우앤드', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[161][$lang_type] : ""), "href" => (true ? getSiteUrl('', '','mid','page_XFYd23') : ""), "url" => (true ? 'page_XFYd23' : ""), "is_shortcut" => 'N', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("page_XFYd23") && in_array(Context::get("mid"), array("page_XFYd23")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("page_XFYd23") && in_array(Context::get("mid"), array("page_XFYd23")) ? $_menu_names[161][$lang_type] : $_menu_names[161][$lang_type]) : ""),),172=>array("node_srl" => 172, "parent_srl" => 0, "menu_name_key" => '양주 하늘안추모공원', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[172][$lang_type] : ""), "href" => (true ? getSiteUrl('', '','mid','yangju') : ""), "url" => (true ? 'yangju' : ""), "is_shortcut" => 'Y', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("yangju","yangju_info","yangju_photo","yangju") && in_array(Context::get("mid"), array("yangju","yangju_info","yangju_photo","yangju")) ? 1 : 0), "expand" => 'N', "list" => array(155=>array("node_srl" => 155, "parent_srl" => 172, "menu_name_key" => '양주납골당', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[155][$lang_type] : ""), "href" => (true ? getSiteUrl('', '','mid','yangju') : ""), "url" => (true ? 'yangju' : ""), "is_shortcut" => 'N', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("yangju") && in_array(Context::get("mid"), array("yangju")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("yangju") && in_array(Context::get("mid"), array("yangju")) ? $_menu_names[155][$lang_type] : $_menu_names[155][$lang_type]) : ""),),228=>array("node_srl" => 228, "parent_srl" => 172, "menu_name_key" => '양주납골당 특장점', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[228][$lang_type] : ""), "href" => (true ? getSiteUrl('', '','mid','yangju_info') : ""), "url" => (true ? 'yangju_info' : ""), "is_shortcut" => 'N', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("yangju_info") && in_array(Context::get("mid"), array("yangju_info")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("yangju_info") && in_array(Context::get("mid"), array("yangju_info")) ? $_menu_names[228][$lang_type] : $_menu_names[228][$lang_type]) : ""),),226=>array("node_srl" => 226, "parent_srl" => 172, "menu_name_key" => '양주납골당 시설전경', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[226][$lang_type] : ""), "href" => (true ? getSiteUrl('', '','mid','yangju_photo') : ""), "url" => (true ? 'yangju_photo' : ""), "is_shortcut" => 'N', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("yangju_photo") && in_array(Context::get("mid"), array("yangju_photo")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("yangju_photo") && in_array(Context::get("mid"), array("yangju_photo")) ? $_menu_names[226][$lang_type] : $_menu_names[226][$lang_type]) : ""),),), "link" => (true ? (array("yangju","yangju_info","yangju_photo","yangju") && in_array(Context::get("mid"), array("yangju","yangju_info","yangju_photo","yangju")) ? $_menu_names[172][$lang_type] : $_menu_names[172][$lang_type]) : ""),),174=>array("node_srl" => 174, "parent_srl" => 0, "menu_name_key" => '남양주 에덴추모공원', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[174][$lang_type] : ""), "href" => (true ? getSiteUrl('', '','mid','namyangju') : ""), "url" => (true ? 'namyangju' : ""), "is_shortcut" => 'Y', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("namyangju","namyangju_info","namyangju_photo","namyangju") && in_array(Context::get("mid"), array("namyangju","namyangju_info","namyangju_photo","namyangju")) ? 1 : 0), "expand" => 'N', "list" => array(159=>array("node_srl" => 159, "parent_srl" => 174, "menu_name_key" => '남양주납골당', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[159][$lang_type] : ""), "href" => (true ? getSiteUrl('', '','mid','namyangju') : ""), "url" => (true ? 'namyangju' : ""), "is_shortcut" => 'N', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("namyangju") && in_array(Context::get("mid"), array("namyangju")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("namyangju") && in_array(Context::get("mid"), array("namyangju")) ? $_menu_names[159][$lang_type] : $_menu_names[159][$lang_type]) : ""),),230=>array("node_srl" => 230, "parent_srl" => 174, "menu_name_key" => '남양주납골당 특장점', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[230][$lang_type] : ""), "href" => (true ? getSiteUrl('', '','mid','namyangju_info') : ""), "url" => (true ? 'namyangju_info' : ""), "is_shortcut" => 'N', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("namyangju_info") && in_array(Context::get("mid"), array("namyangju_info")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("namyangju_info") && in_array(Context::get("mid"), array("namyangju_info")) ? $_menu_names[230][$lang_type] : $_menu_names[230][$lang_type]) : ""),),232=>array("node_srl" => 232, "parent_srl" => 174, "menu_name_key" => '남양주납골당 시설전경', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[232][$lang_type] : ""), "href" => (true ? getSiteUrl('', '','mid','namyangju_photo') : ""), "url" => (true ? 'namyangju_photo' : ""), "is_shortcut" => 'N', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("namyangju_photo") && in_array(Context::get("mid"), array("namyangju_photo")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("namyangju_photo") && in_array(Context::get("mid"), array("namyangju_photo")) ? $_menu_names[232][$lang_type] : $_menu_names[232][$lang_type]) : ""),),), "link" => (true ? (array("namyangju","namyangju_info","namyangju_photo","namyangju") && in_array(Context::get("mid"), array("namyangju","namyangju_info","namyangju_photo","namyangju")) ? $_menu_names[174][$lang_type] : $_menu_names[174][$lang_type]) : ""),),); if(!$is_admin) { recurciveExposureCheck($menu->list); }Context::set("included_menu", $menu); ?>