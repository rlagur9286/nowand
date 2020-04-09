<?php if(!defined("__XE__")) exit(); $layout_info = new stdClass;
$layout_info->site_srl = 0;
$layout_info->layout = 'xe_funeral';
$layout_info->type = NULL;
$layout_info->path = './layouts/xe_funeral/';
$layout_info->title = 'XEDITION';
$layout_info->description = 'XE 1.8 기본 테마';
$layout_info->version = '1.9';
$layout_info->date = '20150625';
$layout_info->homepage = NULL;
$layout_info->layout_srl = $layout_srl;
$layout_info->layout_title = $layout_title;
$layout_info->license = NULL;
$layout_info->license_link = NULL;
$layout_info->layout_type = 'P';
$layout_info->author = array();
$layout_info->author[0] = new stdClass;
$layout_info->author[0]->name = 'NAVER';
$layout_info->author[0]->email_address = 'developer@xpressengine.com';
$layout_info->author[0]->homepage = 'https://www.xpressengine.com/';
$layout_info->extra_var = new stdClass;
$layout_info->extra_var->use_demo = new stdClass;
$layout_info->extra_var->use_demo->group = '기본';
$layout_info->extra_var->use_demo->title = '메인 페이지 데모 사용';
$layout_info->extra_var->use_demo->type = 'select';
$layout_info->extra_var->use_demo->value = $vars->use_demo;
$layout_info->extra_var->use_demo->description = NULL;
$layout_info->extra_var->use_demo->options = array();
$layout_info->extra_var->use_demo->options['Y'] = new stdClass;
$layout_info->extra_var->use_demo->options['Y']->val = '사용함';
$layout_info->extra_var->use_demo->options['N'] = new stdClass;
$layout_info->extra_var->use_demo->options['N']->val = '사용 안 함';
$layout_info->extra_var->layout_type = new stdClass;
$layout_info->extra_var->layout_type->group = '기본';
$layout_info->extra_var->layout_type->title = '레이아웃 타입';
$layout_info->extra_var->layout_type->type = 'select';
$layout_info->extra_var->layout_type->value = $vars->layout_type;
$layout_info->extra_var->layout_type->description = NULL;
$layout_info->extra_var->layout_type->options = array();
$layout_info->extra_var->layout_type->options['auto'] = new stdClass;
$layout_info->extra_var->layout_type->options['auto']->val = '자동 적용';
$layout_info->extra_var->layout_type->options['main'] = new stdClass;
$layout_info->extra_var->layout_type->options['main']->val = '메인형';
$layout_info->extra_var->layout_type->options['sub'] = new stdClass;
$layout_info->extra_var->layout_type->options['sub']->val = '서브형';
$layout_info->extra_var->menu_type_main = new stdClass;
$layout_info->extra_var->menu_type_main->group = '기본';
$layout_info->extra_var->menu_type_main->title = '메인형 메뉴 타입';
$layout_info->extra_var->menu_type_main->type = 'select';
$layout_info->extra_var->menu_type_main->value = $vars->menu_type_main;
$layout_info->extra_var->menu_type_main->description = NULL;
$layout_info->extra_var->menu_type_main->options = array();
$layout_info->extra_var->menu_type_main->options['basic'] = new stdClass;
$layout_info->extra_var->menu_type_main->options['basic']->val = '기본형 : FIXED+SHRINKING';
$layout_info->extra_var->menu_type_main->options['startup'] = new stdClass;
$layout_info->extra_var->menu_type_main->options['startup']->val = '투명형 : TRANSPARENT HEADER';
$layout_info->extra_var->menu_type_main->options['magazine'] = new stdClass;
$layout_info->extra_var->menu_type_main->options['magazine']->val = '매거진형 : HEADER WITH BOTTOM MENU';
$layout_info->extra_var->menu_type_sub = new stdClass;
$layout_info->extra_var->menu_type_sub->group = '기본';
$layout_info->extra_var->menu_type_sub->title = '서브형 메뉴 타입';
$layout_info->extra_var->menu_type_sub->type = 'select';
$layout_info->extra_var->menu_type_sub->value = $vars->menu_type_sub;
$layout_info->extra_var->menu_type_sub->description = NULL;
$layout_info->extra_var->menu_type_sub->options = array();
$layout_info->extra_var->menu_type_sub->options['basic'] = new stdClass;
$layout_info->extra_var->menu_type_sub->options['basic']->val = '기본형 : SIMPLE-TEXT HEADER';
$layout_info->extra_var->menu_type_sub->options['basic_regular'] = new stdClass;
$layout_info->extra_var->menu_type_sub->options['basic_regular']->val = '기본형 : REGULAR HEADER';
$layout_info->extra_var->menu_type_sub->options['onepage_parallax'] = new stdClass;
$layout_info->extra_var->menu_type_sub->options['onepage_parallax']->val = '투명형 : REGULAR RARALLAX';
$layout_info->extra_var->menu_type_sub->options['magazine_simple'] = new stdClass;
$layout_info->extra_var->menu_type_sub->options['magazine_simple']->val = '매거진형 : SIMPLE-TEXT HEADER';
$layout_info->extra_var->menu_type_sub->options['magazine_regular'] = new stdClass;
$layout_info->extra_var->menu_type_sub->options['magazine_regular']->val = '매거진형 : REGULAR HEADER';
$layout_info->extra_var->content_fixed_width = new stdClass;
$layout_info->extra_var->content_fixed_width->group = '기본';
$layout_info->extra_var->content_fixed_width->title = 'contet_fixed_width';
$layout_info->extra_var->content_fixed_width->type = 'select';
$layout_info->extra_var->content_fixed_width->value = $vars->content_fixed_width;
$layout_info->extra_var->content_fixed_width->description = NULL;
$layout_info->extra_var->content_fixed_width->options = array();
$layout_info->extra_var->content_fixed_width->options['index'] = new stdClass;
$layout_info->extra_var->content_fixed_width->options['index']->val = '시작 모듈만 전체 폭';
$layout_info->extra_var->content_fixed_width->options['N'] = new stdClass;
$layout_info->extra_var->content_fixed_width->options['N']->val = '전체 폭';
$layout_info->extra_var->content_fixed_width->options['Y'] = new stdClass;
$layout_info->extra_var->content_fixed_width->options['Y']->val = '고정폭';
$layout_info->extra_var->menu_fixed = new stdClass;
$layout_info->extra_var->menu_fixed->group = '기본';
$layout_info->extra_var->menu_fixed->title = '메뉴 고정';
$layout_info->extra_var->menu_fixed->type = 'select';
$layout_info->extra_var->menu_fixed->value = $vars->menu_fixed;
$layout_info->extra_var->menu_fixed->description = '매거진형 메뉴에는 적용되지 않습니다';
$layout_info->extra_var->menu_fixed->options = array();
$layout_info->extra_var->menu_fixed->options['Y'] = new stdClass;
$layout_info->extra_var->menu_fixed->options['Y']->val = '상단에 고정';
$layout_info->extra_var->menu_fixed->options['N'] = new stdClass;
$layout_info->extra_var->menu_fixed->options['N']->val = '고정 안 함';
$layout_info->extra_var->sidebar_position = new stdClass;
$layout_info->extra_var->sidebar_position->group = '기본';
$layout_info->extra_var->sidebar_position->title = '사이드바 위치';
$layout_info->extra_var->sidebar_position->type = 'select';
$layout_info->extra_var->sidebar_position->value = $vars->sidebar_position;
$layout_info->extra_var->sidebar_position->description = '레이아웃 타입 서브형에서만 사용되는 옵션입니다.';
$layout_info->extra_var->sidebar_position->options = array();
$layout_info->extra_var->sidebar_position->options['right'] = new stdClass;
$layout_info->extra_var->sidebar_position->options['right']->val = '오른쪽';
$layout_info->extra_var->sidebar_position->options['left'] = new stdClass;
$layout_info->extra_var->sidebar_position->options['left']->val = '왼쪽';
$layout_info->extra_var->sidebar_position->options['none'] = new stdClass;
$layout_info->extra_var->sidebar_position->options['none']->val = '풀 페이지';
$layout_info->extra_var->enable_intergration_search = new stdClass;
$layout_info->extra_var->enable_intergration_search->group = '기본';
$layout_info->extra_var->enable_intergration_search->title = '통함 검색';
$layout_info->extra_var->enable_intergration_search->type = 'select';
$layout_info->extra_var->enable_intergration_search->value = $vars->enable_intergration_search;
$layout_info->extra_var->enable_intergration_search->description = NULL;
$layout_info->extra_var->enable_intergration_search->options = array();
$layout_info->extra_var->enable_intergration_search->options['Y'] = new stdClass;
$layout_info->extra_var->enable_intergration_search->options['Y']->val = '사용';
$layout_info->extra_var->enable_intergration_search->options['N'] = new stdClass;
$layout_info->extra_var->enable_intergration_search->options['N']->val = '사용 안 함';
$layout_info->extra_var->logo_img = new stdClass;
$layout_info->extra_var->logo_img->group = '기본';
$layout_info->extra_var->logo_img->title = '기본형 로고 이미지';
$layout_info->extra_var->logo_img->type = 'image';
$layout_info->extra_var->logo_img->value = $vars->logo_img;
$layout_info->extra_var->logo_img->description = NULL;
$layout_info->extra_var->logo_img_transparent = new stdClass;
$layout_info->extra_var->logo_img_transparent->group = '기본';
$layout_info->extra_var->logo_img_transparent->title = '투명형 로고 이미지';
$layout_info->extra_var->logo_img_transparent->type = 'image';
$layout_info->extra_var->logo_img_transparent->value = $vars->logo_img_transparent;
$layout_info->extra_var->logo_img_transparent->description = NULL;
$layout_info->extra_var->logo_img_magazine = new stdClass;
$layout_info->extra_var->logo_img_magazine->group = '기본';
$layout_info->extra_var->logo_img_magazine->title = '매거진형 로고 이미지';
$layout_info->extra_var->logo_img_magazine->type = 'image';
$layout_info->extra_var->logo_img_magazine->value = $vars->logo_img_magazine;
$layout_info->extra_var->logo_img_magazine->description = NULL;
$layout_info->extra_var->logo_text = new stdClass;
$layout_info->extra_var->logo_text->group = '기본';
$layout_info->extra_var->logo_text->title = '사이트 로고 문자';
$layout_info->extra_var->logo_text->type = 'text';
$layout_info->extra_var->logo_text->value = $vars->logo_text;
$layout_info->extra_var->logo_text->description = NULL;
$layout_info->extra_var->logo_url = new stdClass;
$layout_info->extra_var->logo_url->group = '기본';
$layout_info->extra_var->logo_url->title = '사이트 로고 링크 주소';
$layout_info->extra_var->logo_url->type = 'text';
$layout_info->extra_var->logo_url->value = $vars->logo_url;
$layout_info->extra_var->logo_url->description = NULL;
$layout_info->extra_var->footer_logo_img = new stdClass;
$layout_info->extra_var->footer_logo_img->group = '기본';
$layout_info->extra_var->footer_logo_img->title = '푸터 로고 이미지';
$layout_info->extra_var->footer_logo_img->type = 'image';
$layout_info->extra_var->footer_logo_img->value = $vars->footer_logo_img;
$layout_info->extra_var->footer_logo_img->description = NULL;
$layout_info->extra_var->footer_logo_text = new stdClass;
$layout_info->extra_var->footer_logo_text->group = '기본';
$layout_info->extra_var->footer_logo_text->title = '푸터 로고 문자';
$layout_info->extra_var->footer_logo_text->type = 'text';
$layout_info->extra_var->footer_logo_text->value = $vars->footer_logo_text;
$layout_info->extra_var->footer_logo_text->description = NULL;
$layout_info->extra_var->footer_logo_url = new stdClass;
$layout_info->extra_var->footer_logo_url->group = '기본';
$layout_info->extra_var->footer_logo_url->title = '푸터 로고 링크 주소';
$layout_info->extra_var->footer_logo_url->type = 'text';
$layout_info->extra_var->footer_logo_url->value = $vars->footer_logo_url;
$layout_info->extra_var->footer_logo_url->description = NULL;
$layout_info->extra_var->footer_text = new stdClass;
$layout_info->extra_var->footer_text->group = '기본';
$layout_info->extra_var->footer_text->title = '푸터 내용';
$layout_info->extra_var->footer_text->type = 'textarea';
$layout_info->extra_var->footer_text->value = $vars->footer_text;
$layout_info->extra_var->footer_text->description = NULL;
$layout_info->extra_var->footer_copyright = new stdClass;
$layout_info->extra_var->footer_copyright->group = '기본';
$layout_info->extra_var->footer_copyright->title = '카피라이트 내용';
$layout_info->extra_var->footer_copyright->type = 'textarea';
$layout_info->extra_var->footer_copyright->value = $vars->footer_copyright;
$layout_info->extra_var->footer_copyright->description = NULL;
$layout_info->extra_var->use_login_widget = new stdClass;
$layout_info->extra_var->use_login_widget->group = '기본';
$layout_info->extra_var->use_login_widget->title = '로그인 위젯 사용';
$layout_info->extra_var->use_login_widget->type = 'select';
$layout_info->extra_var->use_login_widget->value = $vars->use_login_widget;
$layout_info->extra_var->use_login_widget->description = NULL;
$layout_info->extra_var->use_login_widget->options = array();
$layout_info->extra_var->use_login_widget->options['Y'] = new stdClass;
$layout_info->extra_var->use_login_widget->options['Y']->val = '사용함';
$layout_info->extra_var->use_login_widget->options['N'] = new stdClass;
$layout_info->extra_var->use_login_widget->options['N']->val = '사용 안 함';
$layout_info->extra_var->color_set = new stdClass;
$layout_info->extra_var->color_set->group = '기본';
$layout_info->extra_var->color_set->title = '컬러셋';
$layout_info->extra_var->color_set->type = 'select';
$layout_info->extra_var->color_set->value = $vars->color_set;
$layout_info->extra_var->color_set->description = '상단 컬러셋을 설정합니다.';
$layout_info->extra_var->color_set->options = array();
$layout_info->extra_var->color_set->options[''] = new stdClass;
$layout_info->extra_var->color_set->options['']->val = 'Royal classic';
$layout_info->extra_var->color_set->options['color_grape_fruit'] = new stdClass;
$layout_info->extra_var->color_set->options['color_grape_fruit']->val = 'Grape Fruit';
$layout_info->extra_var->color_set->options['color_hot_pink'] = new stdClass;
$layout_info->extra_var->color_set->options['color_hot_pink']->val = 'Hot Pink';
$layout_info->extra_var->color_set->options['color_orchid'] = new stdClass;
$layout_info->extra_var->color_set->options['color_orchid']->val = 'Orchid';
$layout_info->extra_var->color_set->options['color_blue_jeans'] = new stdClass;
$layout_info->extra_var->color_set->options['color_blue_jeans']->val = 'Blue Jeans';
$layout_info->extra_var->color_set->options['color_blue_jeans'] = new stdClass;
$layout_info->extra_var->color_set->options['color_blue_jeans']->val = 'Blue Jeans';
$layout_info->extra_var->color_set->options['color_mint'] = new stdClass;
$layout_info->extra_var->color_set->options['color_mint']->val = 'Mint';
$layout_info->extra_var->color_set->options['color_sunflower'] = new stdClass;
$layout_info->extra_var->color_set->options['color_sunflower']->val = 'Sunflower';
$layout_info->extra_var->color_set->options['color_bitter_sweet'] = new stdClass;
$layout_info->extra_var->color_set->options['color_bitter_sweet']->val = 'Bitter Sweet';
$layout_info->extra_var->color_set->options['color_java_coffee'] = new stdClass;
$layout_info->extra_var->color_set->options['color_java_coffee']->val = 'Java Coffee';
$layout_info->extra_var->color_set->options['color_gray'] = new stdClass;
$layout_info->extra_var->color_set->options['color_gray']->val = 'Gray';
$layout_info->extra_var->use_slide = new stdClass;
$layout_info->extra_var->use_slide->group = '슬라이드';
$layout_info->extra_var->use_slide->title = '슬라이드 사용';
$layout_info->extra_var->use_slide->type = 'select';
$layout_info->extra_var->use_slide->value = $vars->use_slide;
$layout_info->extra_var->use_slide->description = NULL;
$layout_info->extra_var->use_slide->options = array();
$layout_info->extra_var->use_slide->options['Y'] = new stdClass;
$layout_info->extra_var->use_slide->options['Y']->val = '사용함';
$layout_info->extra_var->use_slide->options['N'] = new stdClass;
$layout_info->extra_var->use_slide->options['N']->val = '사용 안 함';
$layout_info->extra_var->slide_img1 = new stdClass;
$layout_info->extra_var->slide_img1->group = '슬라이드';
$layout_info->extra_var->slide_img1->title = '슬라이드 이미지 1';
$layout_info->extra_var->slide_img1->type = 'image';
$layout_info->extra_var->slide_img1->value = $vars->slide_img1;
$layout_info->extra_var->slide_img1->description = NULL;
$layout_info->extra_var->slide_text1 = new stdClass;
$layout_info->extra_var->slide_text1->group = '슬라이드';
$layout_info->extra_var->slide_text1->title = '슬라이드 설명 1';
$layout_info->extra_var->slide_text1->type = 'textarea';
$layout_info->extra_var->slide_text1->value = $vars->slide_text1;
$layout_info->extra_var->slide_text1->description = NULL;
$layout_info->extra_var->slide_img2 = new stdClass;
$layout_info->extra_var->slide_img2->group = '슬라이드';
$layout_info->extra_var->slide_img2->title = '슬라이드 이미지 2';
$layout_info->extra_var->slide_img2->type = 'image';
$layout_info->extra_var->slide_img2->value = $vars->slide_img2;
$layout_info->extra_var->slide_img2->description = NULL;
$layout_info->extra_var->slide_text2 = new stdClass;
$layout_info->extra_var->slide_text2->group = '슬라이드';
$layout_info->extra_var->slide_text2->title = '슬라이드 설명 2';
$layout_info->extra_var->slide_text2->type = 'textarea';
$layout_info->extra_var->slide_text2->value = $vars->slide_text2;
$layout_info->extra_var->slide_text2->description = NULL;
$layout_info->extra_var->slide_img3 = new stdClass;
$layout_info->extra_var->slide_img3->group = '슬라이드';
$layout_info->extra_var->slide_img3->title = '슬라이드 이미지 3';
$layout_info->extra_var->slide_img3->type = 'image';
$layout_info->extra_var->slide_img3->value = $vars->slide_img3;
$layout_info->extra_var->slide_img3->description = NULL;
$layout_info->extra_var->slide_text3 = new stdClass;
$layout_info->extra_var->slide_text3->group = '슬라이드';
$layout_info->extra_var->slide_text3->title = '슬라이드 설명 3';
$layout_info->extra_var->slide_text3->type = 'textarea';
$layout_info->extra_var->slide_text3->value = $vars->slide_text3;
$layout_info->extra_var->slide_text3->description = NULL;
$layout_info->extra_var->slide_img4 = new stdClass;
$layout_info->extra_var->slide_img4->group = '슬라이드';
$layout_info->extra_var->slide_img4->title = '슬라이드 이미지 4';
$layout_info->extra_var->slide_img4->type = 'image';
$layout_info->extra_var->slide_img4->value = $vars->slide_img4;
$layout_info->extra_var->slide_img4->description = NULL;
$layout_info->extra_var->slide_text4 = new stdClass;
$layout_info->extra_var->slide_text4->group = '슬라이드';
$layout_info->extra_var->slide_text4->title = '슬라이드 설명 4';
$layout_info->extra_var->slide_text4->type = 'textarea';
$layout_info->extra_var->slide_text4->value = $vars->slide_text4;
$layout_info->extra_var->slide_text4->description = NULL;
$layout_info->extra_var->slide_img5 = new stdClass;
$layout_info->extra_var->slide_img5->group = '슬라이드';
$layout_info->extra_var->slide_img5->title = '슬라이드 이미지 5';
$layout_info->extra_var->slide_img5->type = 'image';
$layout_info->extra_var->slide_img5->value = $vars->slide_img5;
$layout_info->extra_var->slide_img5->description = NULL;
$layout_info->extra_var->slide_text5 = new stdClass;
$layout_info->extra_var->slide_text5->group = '슬라이드';
$layout_info->extra_var->slide_text5->title = '슬라이드 설명 5';
$layout_info->extra_var->slide_text5->type = 'textarea';
$layout_info->extra_var->slide_text5->value = $vars->slide_text5;
$layout_info->extra_var->slide_text5->description = NULL;
$layout_info->extra_var_count = 31;
$layout_info->menu_count = 3;
$layout_info->menu = new stdClass;
$layout_info->default_menu = 'GNB';
$layout_info->menu->GNB = new stdClass;
$layout_info->menu->GNB->name = 'GNB';
$layout_info->menu->GNB->title = '메인 메뉴';
$layout_info->menu->GNB->maxdepth = '3';
$layout_info->menu->GNB->menu_srl = $vars->GNB;
$layout_info->menu->GNB->xml_file = "./files/cache/menu/".$vars->GNB.".xml.php";
$layout_info->menu->GNB->php_file = "./files/cache/menu/".$vars->GNB.".php";
$layout_info->menu->UNB = new stdClass;
$layout_info->menu->UNB->name = 'UNB';
$layout_info->menu->UNB->title = '매거진형 추가 메뉴';
$layout_info->menu->UNB->maxdepth = '1';
$layout_info->menu->UNB->menu_srl = $vars->UNB;
$layout_info->menu->UNB->xml_file = "./files/cache/menu/".$vars->UNB.".xml.php";
$layout_info->menu->UNB->php_file = "./files/cache/menu/".$vars->UNB.".php";
$layout_info->menu->FNB = new stdClass;
$layout_info->menu->FNB->name = 'FNB';
$layout_info->menu->FNB->title = '푸터 메뉴';
$layout_info->menu->FNB->maxdepth = '2';
$layout_info->menu->FNB->menu_srl = $vars->FNB;
$layout_info->menu->FNB->xml_file = "./files/cache/menu/".$vars->FNB.".xml.php";
$layout_info->menu->FNB->php_file = "./files/cache/menu/".$vars->FNB.".php";