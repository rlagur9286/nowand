<?php if(!defined("__XE__"))exit;?>
<?php $__Context->skin_id = mt_rand() ?>
<?php $__Context->slide_id = "bxSlider_".$__Context->skin_id ?>
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
<?php $__Context->textT1_Height = 25 ?>
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
<?php $__Context->bxWindowWidth = $__Context->widget_info->thumbnail_width+($__Context->widget_info->thumbnail_bdsize*2) ?>
<?php $__Context->bxWindowHeight = $__Context->widget_info->thumbnail_height+($__Context->widget_info->thumbnail_bdsize*2) ?>
<?php $__Context->bxContentWidth = $__Context->widget_info->navigation_size - $__Context->bxWindowWidth - 10 ?>
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
/*전체 넓이*/
#bxSwrapper_<?php echo $__Context->skin_id ?> {
	width:<?php echo $__Context->widget_info->navigation_size ?>px;
<?php if($__Context->widget_info->navigation_control=='Y'){ ?>
	height:<?php echo $__Context->bxWindowHeight+24 ?>px;
<?php }else{ ?>
	height:<?php echo $__Context->bxWindowHeight ?>px;
<?php } ?>
	margin:0 auto;
	font: 12px "Courier";
	font-family: "Courier New" 12px; /*silly ie fix*/
}
#<?php echo $__Context->slide_id ?> {
	padding: 0;
	margin: 0;
	list-style: none;
	height:<?php echo $__Context->bxWindowHeight ?>px;
	float: left;
}
#<?php echo $__Context->slide_id ?> li {
	padding: 0;
	margin: 0;
	height:<?php echo $__Context->bxWindowHeight ?>px;
}
#bxSwrapper_<?php echo $__Context->skin_id ?> a, #bxSwrapper_<?php echo $__Context->skin_id ?> a:hover {
	text-decoration: none;
	color: #000;
}
/* 이미지 출력부분 */
#bxSwrapper_<?php echo $__Context->skin_id ?> .bxImage_<?php echo $__Context->skin_id ?> {
	float: left;
	margin-right: 10px;
	border: <?php echo $__Context->widget_info->thumbnail_bdsize ?>px solid <?php echo $__Context->widget_info->thumbnail_bdcolor ?>;	/* 썸네일 테투리 두께와 색 지정 */
	width:<?php echo $__Context->widget_info->thumbnail_width ?>px; /* important */
	height:<?php echo $__Context->widget_info->thumbnail_height ?>px; /* important */
}
/* 제목+카테고리 출력부분 */
#bxSwrapper_<?php echo $__Context->skin_id ?> .bxTitle_<?php echo $__Context->skin_id ?> {
	float: left;
	width:<?php echo $__Context->bxContentWidth ?>px;
	height:<?php echo $__Context->textT1_Height ?>px;
	margin-top:0px;
	margin-bottom:0px;
	letter-spacing:-1px;
	text-align:center;
	overflow:hidden;
}
/* 내용 출력부분 */
#bxSwrapper_<?php echo $__Context->skin_id ?> .bxContent_<?php echo $__Context->skin_id ?> {
	line-height: 1.5em;
	width: <?php echo $__Context->bxContentWidth ?>px;
	margin-top:5px;
	float: left;
	overflow:hidden;
}
/* gray, blue, green, orange, purple, red, yellow */
/*next button*/
#bxSwrapper_<?php echo $__Context->skin_id ?> .bx-next {
	position:absolute;
	top:<?php if($__Context->widget_info->show_title=='Y'){ ?>30%<?php }else{ ?>40%<?php } ?>;
	right:-40px;
	z-index:999;
	width: 30px;
	height: 30px;
	text-indent: -999999px;
	background: url('<?php echo $__Context->skincssimgpath ?>/gray_next.png') no-repeat 0 -30px;
}
/*previous button*/
#bxSwrapper_<?php echo $__Context->skin_id ?> .bx-prev {
	position:absolute;
	top:<?php if($__Context->widget_info->show_title=='Y'){ ?>30%<?php }else{ ?>40%<?php } ?>;
	left:-40px;
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
	text-decoration: none;
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
#bxSwrapper_<?php echo $__Context->skin_id ?> .clear {
	clear: both;
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
	background:url('<?php echo $__Context->skincssimgpath ?>/no_image.png') no-repeat center center;
}
#<?php echo $__Context->slide_id ?> .open_doc {
	width:<?php echo $__Context->widget_info->thumbnail_width ?>px;
	height:<?php echo $__Context->widget_info->thumbnail_height ?>px;
	float:left;
	background:url('<?php echo $__Context->skincssimgpath ?>/document.png') no-repeat center center;
}
</style>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('#<?php echo $__Context->slide_id ?>').bxSlider({
			mode: 'fade', // 'horizontal', 'vertical', 'fade'
			infiniteLoop: true,
			auto: <?php echo $__Context->widget_info->slide_auto ?>,
			autoHover: true,
			bxMaxHeight: <?php echo $__Context->bxWindowHeight ?>,
			pager: <?php if($__Context->widget_info->navigation_control=='Y'){ ?>true<?php }else{ ?>false<?php } ?>,
			pause: <?php echo $__Context->widget_info->slide_delay ?>,
			controls: <?php if($__Context->widget_info->show_control=='Y'){ ?>true<?php }else{ ?>false<?php } ?>
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
		<?php if($__Context->widget_info->show_content_title=='N'){ ?>
			<?php if($__Context->item->getThumbnail()){ ?>
	<li>
		<?php if($__Context->widget_info->open_article=='Z'){ ?>
			<?php if($__Context->widget_info->target_ext_var=='link'&&$__Context->item->getLinkedType()!=''||$__Context->widget_info->target_ext_var=='image'&&$__Context->item->getLinkedType()!=''){ ?>
			<a href="<?php echo $__Context->item->getLink() ?>" rel='prettyPhoto[mixed]' />
			<?php }elseif($__Context->item->getThumbnail()){ ?>
			<a href="<?php echo $__Context->item->getPreview() ?>" rel='prettyPhoto[mixed]' />
			<?php }else{ ?>
			<a class="no_image" />
			<?php } ?>
		<?php }elseif($__Context->widget_info->open_article=='Y'){ ?>
			<?php if($__Context->widget_info->target_ext_var=='link'&&$__Context->item->getLinkedType()!=''||$__Context->widget_info->target_ext_var=='image'&&$__Context->item->getLinkedType()!=''){ ?>
			<a href="<?php echo $__Context->item->getLink() ?>" rel='prettyPhoto[mixed]' />
			<?php }elseif($__Context->item->getThumbnail()){ ?>
			<a href="<?php echo $__Context->item->getDocumentSrl() ?>" class="open_doc" />
			<?php }else{ ?>
			<a href="<?php echo $__Context->item->getDocumentSrl() ?>" class="open_doc" />
			<?php } ?>
		<?php }else{ ?>
			<?php if($__Context->widget_info->target_ext_var=='link'&&$__Context->item->getLinkedType()!=''||$__Context->widget_info->target_ext_var=='image'&&$__Context->item->getLinkedType()!=''){ ?>
			<a href="<?php echo $__Context->item->getLink() ?>" rel='prettyPhoto[mixed]' />
			<?php }elseif($__Context->item->getThumbnail()){ ?>
			<a />
			<?php }else{ ?>
			<a class="no_image" />
			<?php } ?>
		<?php } ?>
			<img src="<?php echo $__Context->item->getImgslider() ?>" width="<?php echo $__Context->widget_info->slider_img_width ?>" height="<?php echo $__Context->widget_info->slider_img_height ?>" <?php if($__Context->widget_info->img_fade=='Y'&&$__Context->widget_info->open_article!='N'){ ?>class='fade'<?php } ?> />
		</a>
		<div class="clear"></div>
	</li>
			<?php } ?>
		<?php }else{ ?>
	<li>
			<?php if($__Context->item->getThumbnail()){ ?>
			<div class="bxImage_<?php echo $__Context->skin_id ?>">
		<?php if($__Context->widget_info->open_article=='Z'){ ?>
			<?php if($__Context->widget_info->target_ext_var=='link'&&$__Context->item->getLinkedType()!=''||$__Context->widget_info->target_ext_var=='image'&&$__Context->item->getLinkedType()!=''){ ?>
			<a href="<?php echo $__Context->item->getLink() ?>" rel='prettyPhoto[mixed]' />
			<?php }elseif($__Context->item->getThumbnail()){ ?>
			<a href="<?php echo $__Context->item->getPreview() ?>" rel="prettyPhoto[mixed]"/>
			<?php }else{ ?>
			<a class="no_image" />
			<?php } ?>
		<?php }elseif($__Context->widget_info->open_article=='Y'){ ?>
			<?php if($__Context->widget_info->target_ext_var=='link'&&$__Context->item->getLinkedType()!=''||$__Context->widget_info->target_ext_var=='image'&&$__Context->item->getLinkedType()!=''){ ?>
			<a href="<?php echo $__Context->item->getLink() ?>" rel='prettyPhoto[mixed]' />
			<?php }elseif($__Context->item->getThumbnail()){ ?>
			<a href="<?php echo $__Context->item->getDocumentSrl() ?>" class="open_doc" />
			<?php }else{ ?>
			<a href="<?php echo $__Context->item->getDocumentSrl() ?>" class="open_doc" />
			<?php } ?>
		<?php }else{ ?>
			<?php if($__Context->widget_info->target_ext_var=='link'&&$__Context->item->getLinkedType()!=''||$__Context->widget_info->target_ext_var=='image'&&$__Context->item->getLinkedType()!=''){ ?>
			<a href="<?php echo $__Context->item->getLink() ?>" rel='prettyPhoto[mixed]' />
			<?php }elseif($__Context->item->getThumbnail()){ ?>
			<a />
			<?php }else{ ?>
			<a class="no_image" />
			<?php } ?>
		<?php } ?>
			<img src="<?php echo $__Context->item->getThumbnail() ?>" width="<?php echo $__Context->widget_info->thumbnail_width ?>" height="<?php echo $__Context->widget_info->thumbnail_height ?>" <?php if($__Context->widget_info->img_fade=='Y'&&$__Context->widget_info->open_article!='N'){ ?>class='fade'<?php } ?> />
		</a></div>
			<?php } ?>
			<p class="bxTitle_<?php echo $__Context->skin_id ?> textT1_<?php echo $__Context->skin_id ?>"><strong><a href="<?php echo $__Context->item->getLink() ?>"><?php echo $__Context->item->getTitle($__Context->widget_info->subject_cut_size) ?></a></strong><br></p>
			<p class="bxContent_<?php echo $__Context->skin_id ?> textC1_<?php echo $__Context->skin_id ?>"><a href="<?php echo $__Context->item->getLink() ?>"><?php echo $__Context->item->getContent($__Context->widget_info->content_cut_size) ?> More</a></p>
		<div class="clear"></div>
	</li>
		<?php } ?>
<?php } ?>
</ul>
</div>
