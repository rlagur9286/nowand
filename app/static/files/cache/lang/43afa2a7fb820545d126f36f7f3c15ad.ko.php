<?php
$lang->feed='피드 발행';
$lang->total_feed='통합 피드';
$lang->rss_disable='피드 끄기';
$lang->feed_copyright='저작권';
$lang->feed_document_count='한 페이지당 글 수';
$lang->feed_image='피드 이미지';
$lang->rss_type='출력할 피드(Feed) 형식';
$lang->open_rss='피드(Feed) 공개';
if(!is_array($lang->open_rss_types)){
	$lang->open_rss_types = array();
}
$lang->open_rss_types['Y']='전문 공개 ';
$lang->open_rss_types['H']='요약 공개';
$lang->open_rss_types['N']='공개하지 않음';
$lang->open_feed_to_total='통합 피드에 포함';
$lang->about_rss_disable='체크하면 피드(Feed) 출력을 하지 않습니다.';
$lang->about_rss_type='출력할 피드(Feed) 형식을 지정할 수 있습니다.';
$lang->about_open_rss='현재 페이지에 대한 피드(Feed) 공개를 선택할 수 있습니다. 글 열람 권한과 상관없이 옵션에 따라 RSS가 공개됩니다.';
$lang->about_feed_description='발행될 피드에 대한 설명을 입력할 수 있습니다. 설명을 입력하지 않으면 해당 페이지의 관리용 설명이 포함됩니다.';
$lang->about_feed_copyright='발행될 피드에 대한 저작권 정보를 입력할 수 있습니다. 입력하지 않으면 전체 피드 저작권 설정과 동일하게 적용됩니다.';
$lang->about_feed_document_count='피드 한 페이지에 공개되는 글 수. (기본 값 : 15)';
$lang->msg_rss_is_disabled='피드(Feed) 기능이 잠겨 있습니다.';
$lang->msg_rss_invalid_image_format='이미지의 형식이 잘못되었습니다.\nJPEG, GIF, PNG 파일만 지원합니다.';
