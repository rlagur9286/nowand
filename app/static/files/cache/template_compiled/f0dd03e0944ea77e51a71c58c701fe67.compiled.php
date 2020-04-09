<?php if(!defined("__XE__"))exit;?>
<?php $__Context->skin_id = "bxSlider_".mt_rand() ?>
<?php $__Context->slide_id = $__Context->skin_id ?>
<?php if(!$__Context->widget_info->ptypoto_theme){ ?>
<?php $__Context->prettyPhoto_theme = "pp_default" ?>
<?php }else{ ?>
<?php $__Context->prettyPhoto_theme = $__Context->widget_info->ptypoto_theme ?>
<?php } ?>
<?php if($__Context->widget_info->title_font_size){ ?>
<?php $__Context->title_font_size = $__Context->widget_info->title_font_size ?>
<?php }else{ ?>
<?php $__Context->title_font_size = 12 ?>
<?php } ?>
<?php if($__Context->widget_info->title_font_color){ ?>
<?php $__Context->title_font_color = $__Context->widget_info->title_font_color ?>
<?php }else{ ?>
<?php $__Context->title_font_color = '#000' ?>
<?php } ?>
<?php if($__Context->widget_info->title_font_family!="Default"){ ?>
<?php $__Context->title_font_family = $__Context->widget_info->title_font_family ?>
<?php }else{ ?>
<?php $__Context->title_font_family = "돋움,Georgia,Times New Roman,Times,serif" ?>
<?php } ?>
<?php if($__Context->widget_info->title_font_user!=""){ ?>
<?php $__Context->title_font_family = $__Context->widget_info->title_font_user ?>
<?php } ?>
<?php if(!$__Context->widget_info->title_height){ ?>
<?php $__Context->textT1_Height = 35 ?>
<?php }else{ ?>
<?php $__Context->textT1_Height = $__Context->widget_info->title_height ?>
<?php } ?>
<?php if($__Context->widget_info->content_font_size){ ?>
<?php $__Context->content_font_size = $__Context->widget_info->content_font_size ?>
<?php }else{ ?>
<?php $__Context->content_font_size = 11 ?>
<?php } ?>
<?php if($__Context->widget_info->content_font_color){ ?>
<?php $__Context->content_font_color = $__Context->widget_info->content_font_color ?>
<?php }else{ ?>
<?php $__Context->content_font_color = '#000' ?>
<?php } ?>
<?php if($__Context->widget_info->content_font_family!="Default"){ ?>
<?php $__Context->content_font_family = $__Context->widget_info->content_font_family ?>
<?php }else{ ?>
<?php $__Context->content_font_family = "돋움,Dotum,Helvetica,AppleGothic,Sans-serif" ?>
<?php } ?>
<?php if($__Context->widget_info->content_font_user!=""){ ?>
<?php $__Context->content_font_family = $__Context->widget_info->content_font_user ?>
<?php } ?>
<?php if(!$__Context->widget_info->content_height){ ?>
<?php $__Context->textC1_Height = 50 ?>
<?php }else{ ?>
<?php $__Context->textC1_Height = $__Context->widget_info->content_height ?>
<?php } ?>
<?php $__Context->bxWindowWidth = $__Context->widget_info->thumbnail_width+($__Context->widget_info->thumbnail_bdsize*2) ?>
<?php $__Context->bxWindowHeight = $__Context->widget_info->thumbnail_height+($__Context->widget_info->thumbnail_bdsize*2)+10 ?>
<?php $__Context->bxSwrapper_width = ($__Context->bxWindowWidth*$__Context->widget_info->cols_list_count)+($__Context->widget_info->cols_list_count*10) ?>
<?php if($__Context->widget_info->show_title=='Y'){ ?>
<?php $__Context->bxWindowHeight = $__Context->bxWindowHeight+$__Context->textT1_Height ?>
<?php } ?>
<?php $__Context->skincssimgpath = getSiteUrl()."widgets/contentslider/skins/bxSlider/images" ?> 
<style type="text/css">
.textT1_<?php echo $__Context->skin_id ?>, .textT1_<?php echo $__Context->skin_id ?> a, .textT1_<?php echo $__Context->skin_id ?> a:visited {
	color:<?php echo $__Context->title_font_color ?>;
	font-family: <?php echo $__Context->title_font_family ?>;
	font-size: <?php echo $__Context->title_font_size ?>px;
	text-decoration: none;
	height: <?php echo $__Context->textT1_Height ?>px;
	line-height: <?php echo $__Context->title_font_size ?>px;
	text-align:center;
	overflow:hidden;
	<?php if($__Context->widget_info->show_title=='Y'){ ?>display:block;<?php }else{ ?>display:none;<?php } ?>
}
.textT1_<?php echo $__Context->skin_id ?> a:hover, .textT1_<?php echo $__Context->skin_id ?> a:focus {
	text-decoration: underline;
}
.textC1_<?php echo $__Context->skin_id ?>, .textC1_<?php echo $__Context->skin_id ?> a, .textC1_<?php echo $__Context->skin_id ?> a:visited {
	text-align:justify;
	color:<?php echo $__Context->content_font_color ?>;
	font-family: <?php echo $__Context->content_font_family ?>;
	font-size: <?php echo $__Context->content_font_size ?>px;
	text-decoration: none;
	font-weight: normal;
	height: <?php echo $__Context->textC1_Height ?>px;
	<?php if($__Context->widget_info->show_content=='Y'){ ?>display:block;<?php }else{ ?>display:none;<?php } ?>
}
.textC1_<?php echo $__Context->skin_id ?> a:hover, .textC1_<?php echo $__Context->skin_id ?> a:focus {
	text-decoration: underline;
}
#bxSwrapper_<?php echo $__Context->skin_id ?> {
	width:<?php echo $__Context->bxSwrapper_width ?>px; /* 전체 넓이 */
	margin:0 auto;
}
#<?php echo $__Context->slide_id ?> {
	padding: 0;
	margin: 0;
	list-style: none;
	overflow: hidden;
	height: <?php echo $__Context->bxWindowHeight ?>px; /* 전체 높이 */
}
#<?php echo $__Context->slide_id ?> li {
	padding: 5px; /* 썸네일 간격 */
	margin: 0;
	zoom:1;
	width: <?php echo $__Context->bxWindowWidth ?>px; /* 썸네일 넓이 */
}
#bxSwrapper_<?php echo $__Context->skin_id ?> a, #bxSwrapper_<?php echo $__Context->skin_id ?> a:hover {
	text-decoration: none;
	color: #000;
}
/* 이미지 출력부분 */
#bxSwrapper_<?php echo $__Context->skin_id ?> .bxImage_<?php echo $__Context->skin_id ?> {
	float: left;
	margin-right: 0px;
	border: <?php echo $__Context->widget_info->thumbnail_bdsize ?>px solid <?php echo $__Context->widget_info->thumbnail_bdcolor ?>;	/* 썸네일 테투리 두께와 색 지정 */
	width:<?php echo $__Context->widget_info->thumbnail_width ?>px; /* important */
	height:<?php echo $__Context->widget_info->thumbnail_height ?>px; /* important */
}
/* 제목 출력부분 */
#bxSwrapper_<?php echo $__Context->skin_id ?> .bxTitle_<?php echo $__Context->skin_id ?> {
	position:relative;
	width:<?php echo $__Context->bxWindowWidth ?>px;
	height:<?php echo $__Context->textT1_Height ?>px;
	margin-bottom:-5px;
	text-align:center;
	margin:0;
	padding:2px;
	overflow:hidden;
	clear:both; /* important */
}
/* gray, blue, green, orange, purple, red, yellow */
/*next button*/
#bxSwrapper_<?php echo $__Context->skin_id ?> .bx-next {
	position:absolute;
	top:40%; /* 좌우 컨트롤 버튼 높이 */
	right:-40px; /* 좌우 컨트롤 버튼 간격 */
	z-index:999;
	width: 30px;
	height: 30px;
	text-indent: -999999px;
	background: url('<?php echo $__Context->skincssimgpath ?>/gray_next.png') no-repeat 0 -30px;
}
/*previous button*/
#bxSwrapper_<?php echo $__Context->skin_id ?> .bx-prev {
	position:absolute;
	top:40%; /* 좌우 컨트롤 버튼 높이 */
	left:-40px; /* 좌우 컨트롤 버튼 간격 */
	z-index:999;
	width: 30px;
	height: 30px;
	text-indent: -999999px;
	background: url('<?php echo $__Context->skincssimgpath ?>/gray_prev.png') no-repeat 0 -30px;
}
/*pager links*/
#bxSwrapper_<?php echo $__Context->skin_id ?> .bx-pager a {
	margin-right: 5px;
	color: #fff;
	padding: 3px 8px 3px 6px;
	font-size: 12px;
	zoom:1;
	background: url('<?php echo $__Context->skincssimgpath ?>/gray_pager.png') no-repeat 0 -20px;
}
/*auto start button*/
#bxSwrapper_<?php echo $__Context->skin_id ?> .bx-auto .start {
	background: url('<?php echo $__Context->skincssimgpath ?>/gray_auto.png') no-repeat 0 2px;
	padding-left: 13px;
}
/*auto stop button*/
#bxSwrapper_<?php echo $__Context->skin_id ?> .bx-auto .stop {
	background: url('<?php echo $__Context->skincssimgpath ?>/gray_auto.png') no-repeat 0 -14px;
	padding-left: 13px;
}
/*
 * End color scheme styles
 */
/*next/prev button hover state*/
#bxSwrapper_<?php echo $__Context->skin_id ?> .bx-next:hover,
#bxSwrapper_<?php echo $__Context->skin_id ?> .bx-prev:hover {
	background-position: 0 0;
}
/*pager links hover and active states*/
#bxSwrapper_<?php echo $__Context->skin_id ?> .bx-pager .pager-active,
#bxSwrapper_<?php echo $__Context->skin_id ?> .bx-pager a:hover {
	background-position: 0 0;
}
/*pager wrapper*/
#bxSwrapper_<?php echo $__Context->skin_id ?> .bx-pager {
	text-align:center;
	padding-top: 7px;
	font-size:12px;
	color:#666;
}
/*captions*/
#bxSwrapper_<?php echo $__Context->skin_id ?> .bx-captions {
	text-align:center;
	font-size: 12px;
	padding: 7px 0;
	color: #666;
}
/*auto controls*/
#bxSwrapper_<?php echo $__Context->skin_id ?> .bx-auto {
	text-align: center;
	padding-top: 15px;
}
#bxSwrapper_<?php echo $__Context->skin_id ?> .bx-auto a {
	color: #666;
	font-size: 12px;
}
#<?php echo $__Context->slide_id ?> .lightbox_image {
	width:<?php echo $__Context->widget_info->thumbnail_width ?>px;
	height:<?php echo $__Context->widget_info->thumbnail_height ?>px;
	float:left;
	background:url('<?php echo $__Context->skincssimgpath ?>/magnify.png') no-repeat center center;
}
#<?php echo $__Context->slide_id ?> .lightbox_video {
	width:<?php echo $__Context->widget_info->thumbnail_width ?>px;
	height:<?php echo $__Context->widget_info->thumbnail_height ?>px;
	float:left;
	background:url('<?php echo $__Context->skincssimgpath ?>/video.png') no-repeat center center;
}
#<?php echo $__Context->slide_id ?> .no_image {
	width:<?php echo $__Context->widget_info->thumbnail_width ?>px;
	height:<?php echo $__Context->widget_info->thumbnail_height ?>px;
	float:left;
	display:block;
	background:url('<?php echo $__Context->skincssimgpath ?>/no_image.png') no-repeat center center;
}
#<?php echo $__Context->slide_id ?> .open_doc {
	width:<?php echo $__Context->widget_info->thumbnail_width ?>px;
	height:<?php echo $__Context->widget_info->thumbnail_height ?>px;
	float:left;
	display:block;
	background:url('<?php echo $__Context->skincssimgpath ?>/document.png') no-repeat center center;
}
</style>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('#<?php echo $__Context->slide_id ?>').bxSlider({
			auto: <?php echo $__Context->widget_info->slide_auto ?>,
            autoHover: true,
			infiniteLoop: true,
			bxMaxHeight: <?php echo $__Context->bxWindowHeight ?>,
            controls: <?php if($__Context->widget_info->show_control=='Y'){ ?>true<?php }else{ ?>false<?php } ?>,
			pause: <?php echo $__Context->widget_info->slide_delay ?>,
			displaySlideQty: <?php echo $__Context->widget_info->cols_list_count ?>,
			moveSlideQty: 1
		});
<?php if($__Context->widget_info->open_article!='N'||$__Context->widget_info->target_ext_var=='link'||$__Context->widget_info->target_ext_var=='image'){ ?>
	if ($.browser.msie && $.browser.version < 7) return; // Don't execute code if it's IE6 or below cause it doesn't support it.
	$(".fade").fadeTo(1, 1);
	$(".fade").hover(function () {
		$(this).fadeTo("fast", 0.33);
	}, function () {
		$(this).fadeTo("slow", 1);
	});
	$("#<?php echo $__Context->slide_id ?>").find("a[rel^='prettyPhoto']").prettyPhoto({theme:'<?php echo $__Context->prettyPhoto_theme ?>'});
	$("a[rel^='prettyPhoto']").each(function() {
		var $image = jQuery(this).contents("img");
		$newclass = 'no_image';
		if($(this).attr('href').toLowerCase().match(/youtube\.com\/watch/i)) $newclass = 'lightbox_video';
		else if($(this).attr('href').toLowerCase().match(/vimeo\.com/i)) $newclass = 'lightbox_video';
		else if($(this).attr('href').toLowerCase().match(/(mov|swf)/i)) $newclass = 'lightbox_video';
		else if($(this).attr('href').toLowerCase().match(/(jpg|gif|jpeg|png)/i)) $newclass = 'lightbox_image';
		else $(this).removeClass("fade");
		var $padding_x = parseInt($image.css('padding-left')) + parseInt($image.css('padding-right')),
			$padding_y = parseInt($image.css('padding-top')) + parseInt($image.css('padding-bottom')),
			$margin_x = parseInt($image.css('margin-left')) + parseInt($image.css('margin-right')),
			$margin_y = parseInt($image.css('margin-top')) + parseInt($image.css('margin-bottom')),
			$border_x = parseInt($image.css('border-left-width')) + parseInt($image.css('border-right-width')),
			$border_y = parseInt($image.css('border-top-width')) + parseInt($image.css('border-bottom-width'));
		$height = parseInt($image.height()) + $margin_x + $padding_x + $border_x;
		$width = parseInt($image.width()) + $margin_y +  $padding_y + $border_y;
		$pos =  $image.position();
		$(this).addClass($newclass).css({height:$height, width:$width, top:$pos.top, left:$pos.left});
	});
<?php } ?>
	});
</script>
<?php if($__Context->widget_info->content_items_shuffle=='Y'){ ?>
<?php shuffle($__Context->widget_info->content_items) ?>
<?php } ?>
<div id="bxSwrapper_<?php echo $__Context->skin_id ?>">
<ul id="<?php echo $__Context->slide_id ?>">
<?php if($__Context->widget_info->content_items&&count($__Context->widget_info->content_items))foreach($__Context->widget_info->content_items as $__Context->key => $__Context->item){ ?>
	<li>
	<?php if($__Context->item->getThumbnail()){ ?>
		<div class="bxImage_<?php echo $__Context->skin_id ?>">
		<?php if($__Context->widget_info->open_article=='Z'){ ?>
			<?php if($__Context->widget_info->target_ext_var=='link'&&$__Context->item->getLinkedType()!=''||$__Context->widget_info->target_ext_var=='image'&&$__Context->item->getLinkedType()!=''){ ?>
			<a href="<?php echo $__Context->item->getLink() ?>" rel='prettyPhoto' />
			<?php }elseif($__Context->item->getThumbnail()){ ?>
			<a href="<?php echo $__Context->item->getLink() ?>" rel='prettyPhoto' />
			<?php }else{ ?>
			<a class="no_image" />
			<?php } ?>
		<?php }elseif($__Context->widget_info->open_article=='Y'){ ?>
			<?php if($__Context->widget_info->target_ext_var=='link'&&$__Context->item->getLinkedType()!=''||$__Context->widget_info->target_ext_var=='image'&&$__Context->item->getLinkedType()!=''){ ?>
			<a href="<?php echo $__Context->item->getLink() ?>" rel='prettyPhoto' />
			<?php }elseif($__Context->item->getThumbnail()){ ?>
			<a href="<?php echo $__Context->item->getLink() ?>" class="open_doc" />
			<?php }else{ ?>
			<a href="<?php echo $__Context->item->getLink() ?>" class="open_doc" />
			<?php } ?>
		<?php }else{ ?>
			<?php if($__Context->widget_info->target_ext_var=='link'&&$__Context->item->getLinkedType()!=''||$__Context->widget_info->target_ext_var=='image'&&$__Context->item->getLinkedType()!=''){ ?>
			<a href="<?php echo $__Context->item->getLink() ?>" rel='prettyPhoto' />
			<?php }elseif($__Context->item->getThumbnail()){ ?>
			<a />
			<?php }else{ ?>
			<a class="no_image" />
			<?php } ?>
		<?php } ?>
		<img src="<?php echo $__Context->item->getImgslider() ?>" width="<?php echo $__Context->widget_info->thumbnail_width ?>" height="<?php echo $__Context->widget_info->thumbnail_height ?>" title='<?php echo $__Context->item->getTitle($__Context->widget_info->subject_cut_size) ?>' <?php if($__Context->widget_info->img_fade=='Y'&&$__Context->widget_info->open_article!='N'){ ?>class='fade'<?php } ?> /></a><br></div>
	<?php } ?>
	<?php if($__Context->widget_info->show_title=='Y'){ ?>
		<p class="bxTitle_<?php echo $__Context->skin_id ?> textT1_<?php echo $__Context->skin_id ?>">
		<strong><a href="<?php echo $__Context->item->getLink() ?>"><?php echo $__Context->item->getTitle($__Context->widget_info->subject_cut_size) ?></a><br></strong>
		</p>
	<?php } ?>
	</li>
<?php } ?>
</ul>
</div>
