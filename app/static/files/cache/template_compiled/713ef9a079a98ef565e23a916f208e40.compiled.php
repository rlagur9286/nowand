<?php if(!defined("__XE__"))exit;?>
<?php $__Context->skin_id = "LofNews_".mt_rand() ?>
<?php $__Context->slide_id = $__Context->skin_id ?>
<!--#Meta:widgets/contentslider/skins/Lof_SliderNews/js/mootools.svn.js--><?php $__tmp=array('widgets/contentslider/skins/Lof_SliderNews/js/mootools.svn.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:widgets/contentslider/skins/Lof_SliderNews/js/lofslidernews.mt11.js--><?php $__tmp=array('widgets/contentslider/skins/Lof_SliderNews/js/lofslidernews.mt11.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:widgets/contentslider/skins/prettyPhoto/prettyPhoto.css--><?php $__tmp=array('widgets/contentslider/skins/prettyPhoto/prettyPhoto.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:widgets/contentslider/skins/prettyPhoto/jquery.prettyPhoto.js--><?php $__tmp=array('widgets/contentslider/skins/prettyPhoto/jquery.prettyPhoto.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--[if lte IE 6]>
<script src="/widgets/contentslider/skins/Lof_SliderNews/js/DD_belatedPNG_0.0.8a-min.js"></script>
<script>
  DD_belatedPNG.fix('.lof-main-item-desc');
</script>
<![endif]-->
<?php if(!$__Context->widget_info->ptypoto_theme){ ?>
<?php $__Context->prettyPhoto_theme = "pp_default" ?>
<?php }else{ ?>
<?php $__Context->prettyPhoto_theme = $__Context->widget_info->ptypoto_theme ?>
<?php } ?>
<?php if($__Context->widget_info->title_font_size){ ?>
<?php $__Context->title_font_size = $__Context->widget_info->title_font_size ?>
<?php }else{ ?>
<?php $__Context->title_font_size = 14 ?>
<?php } ?>
<?php if($__Context->widget_info->title_font_color){ ?>
<?php $__Context->title_font_color = $__Context->widget_info->title_font_color ?>
<?php }else{ ?>
<?php $__Context->title_font_color = '#fff' ?>
<?php } ?>
<?php if($__Context->widget_info->title_font_family!="Default"){ ?>
<?php $__Context->title_font_family = $__Context->widget_info->title_font_family ?>
<?php }else{ ?>
<?php $__Context->title_font_family = "돋움,'Trebuchet MS',Trebuchet,Arial,Verdana,sans-serif" ?>
<?php } ?>
<?php if($__Context->widget_info->title_font_user!=""){ ?>
<?php $__Context->title_font_family = $__Context->widget_info->title_font_user ?>
<?php } ?>
<?php if(!$__Context->widget_info->title_height){ ?>
<?php $__Context->textT1_Height = 14 ?>
<?php }else{ ?>
<?php $__Context->textT1_Height = $__Context->widget_info->title_height ?>
<?php } ?>
<?php if($__Context->widget_info->content_font_size){ ?>
<?php $__Context->content_font_size = $__Context->widget_info->content_font_size ?>
<?php }else{ ?>
<?php $__Context->content_font_size = 13 ?>
<?php } ?>
<?php if($__Context->widget_info->content_font_color){ ?>
<?php $__Context->content_font_color = $__Context->widget_info->content_font_color ?>
<?php }else{ ?>
<?php $__Context->content_font_color = '#fff' ?>
<?php } ?>
<?php if($__Context->widget_info->content_font_family!="Default"){ ?>
<?php $__Context->content_font_family = $__Context->widget_info->content_font_family ?>
<?php }else{ ?>
<?php $__Context->content_font_family = "돋움,Arial, Helvetica, sans-serif" ?>
<?php } ?>
<?php if($__Context->widget_info->content_font_user!=""){ ?>
<?php $__Context->content_font_family = $__Context->widget_info->content_font_user ?>
<?php } ?>
<?php if(!$__Context->widget_info->content_height){ ?>
<?php $__Context->textC1_Height = 40 ?>
<?php }else{ ?>
<?php $__Context->textC1_Height = $__Context->widget_info->content_height ?>
<?php } ?>
<?php $__Context->nav_height = ($__Context->widget_info->thumbnail_height+26) * $__Context->widget_info->cols_list_count ?>
<?php  $__Context->skincssimgpath = getSiteUrl()."widgets/contentslider/skins/Lof_SliderNews/images" ?>
<style type="text/css">
.textT1_<?php echo $__Context->skin_id ?>, .textT1_<?php echo $__Context->skin_id ?> a, .textT1_<?php echo $__Context->skin_id ?> a:visited {
	color:<?php echo $__Context->title_font_color ?>;
	font-family: <?php echo $__Context->title_font_family ?>;
	font-size: <?php echo $__Context->title_font_size ?>px;
	text-decoration: none;
	height: <?php echo $__Context->textT1_Height ?>px;
	line-height: <?php echo $__Context->title_font_size ?>px;
	text-align:left;
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
	line-height: <?php echo $__Context->content_font_size ?>px;
	height: <?php echo $__Context->textC1_Height ?>px;
	<?php if($__Context->widget_info->show_content=='Y'){ ?>display:block;<?php }else{ ?>display:none;<?php } ?>
}
.textC1_<?php echo $__Context->skin_id ?> a:hover, .textC1_<?php echo $__Context->skin_id ?> a:focus {
	text-decoration: underline;
}
/* CSS Document */
.lof-slidecontent_<?php echo $__Context->skin_id ?>{
	position:relative;
	overflow:hidden;
	width:<?php echo $__Context->widget_info->slider_img_width+$__Context->widget_info->navigation_size ?>px; /* 전체 넓이 */
	height:<?php echo $__Context->nav_height ?>px; /* 전체 높이 : 300 */
}
.lof-slidecontent_<?php echo $__Context->skin_id ?> .preload{
	height:100%;
	width:100%;
	background:#FFF;
	position:absolute;
	top:0;
	left:0;
	z-index:100000;
	color:#FFF;
	text-align:center
}
.lof-slidecontent_<?php echo $__Context->skin_id ?> .preload div{
	height:100%;
	width:100%;
	background:transparent url('<?php echo $__Context->skincssimgpath ?>/load-indicator.gif') no-repeat scroll 50% 50%;
}
/* main flash */
.lof-slidecontent_<?php echo $__Context->skin_id ?> .lof-main-wapper{
	margin-right:auto;
	overflow:hidden;
	background:transparent url('<?php echo $__Context->skincssimgpath ?>/load-indicator.gif') no-repeat scroll 50% 50%;
	padding:0px;
	height:100%;
	width:<?php echo $__Context->widget_info->slider_img_width ?>px;  /* 슬라이드 이미지 넓이 */
	position:relative;
	overflow:hidden;
}
.lof-slidecontent_<?php echo $__Context->skin_id ?> .lof-main-wapper .lof-main-item_<?php echo $__Context->skin_id ?>{
	overflow:hidden;
	padding:0px;
	margin:0px;
	height:100%;
	width:100%;
	position:absolute;
}
.lof-slidecontent_<?php echo $__Context->skin_id ?> .lof-main-wapper .lof-main-item_<?php echo $__Context->skin_id ?> img{
	padding:0px;	
	width:<?php echo $__Context->widget_info->slider_img_width ?>px;  /* 슬라이드 이미지 넓이 */
}
.lof-slidecontent_<?php echo $__Context->skin_id ?> .lof-main-item-desc{
	z-index:100;
	position:absolute;
	bottom:0px;
	left:0px;
	width:<?php echo $__Context->widget_info->slider_img_width ?>px;  /* 캡션박스 넓이 */
	background:url('<?php echo $__Context->skincssimgpath ?>/transparent_bg.png');
	/* filter:0.7(opacity:60) */
}
.lof-slidecontent_<?php echo $__Context->skin_id ?> .lof-main-item-desc p{
	margin:0 5px;
	padding:0px;
}
.lof-slidecontent_<?php echo $__Context->skin_id ?> .lof-main-item-desc h3 a{
	margin:0 5px;
	padding:0px 0px;
}
/* item navigator */
.lof-slidecontent_<?php echo $__Context->skin_id ?> ul.lof-navigator{
	top:<?php if($__Context->colorset=="Right"){ ?>-100px<?php }else{ ?>0px<?php } ?>;
	padding:0;
	margin:0;
	position:absolute;
	width:100%;
}
.lof-slidecontent_<?php echo $__Context->skin_id ?> ul.lof-navigator li{
	cursor:hand; 
	cursor:pointer;
	list-style:none;
	width:100%;
	padding:0;
	margin:0;
	overflow:hidden;
}
.lof-slidecontent_<?php echo $__Context->skin_id ?> .lof-navigator-outer{
	position:absolute;
	right:0;
	top:0px;
	z-index:100;
	height:<?php echo $__Context->nav_height ?>px; /* 왼쪽 썸네일 박스 높이 */
	width:<?php echo $__Context->widget_info->navigation_size+15 ?>px; /* 왼쪽 썸네일 박스 넓이 */
	overflow:hidden;
	color:#FFF
}
.lof-slidecontent_<?php echo $__Context->skin_id ?> .lof-navigator li.active{
	background:url('<?php echo $__Context->skincssimgpath ?>/arrow-bg.png') no-repeat scroll left center; 
	color:#FFF
}
.lof-slidecontent_<?php echo $__Context->skin_id ?> .lof-navigator li:hover{
	
}
.lof-slidecontent_<?php echo $__Context->skin_id ?> .lof-navigator li h3{
	color:#FFF;
	padding:10px 0 0 !important; /* 여백 */
	margin:0;
	font-size:11px; /* 썸네일 박스 제목 크기 */
}
.lof-slidecontent_<?php echo $__Context->skin_id ?> .lof-navigator li div{
	background:url('<?php echo $__Context->skincssimgpath ?>/transparent_bg.png');
	color:#FFF;
	height:100%;
	position:relative;
	margin-left:15px;
	padding-left:0px; /* 여백 */
	border-top:1px solid #E1E1E1;
}
.lof-slidecontent_<?php echo $__Context->skin_id ?> .lof-navigator li:first-child div{border-top:0px solid #E1E1E1;}
.lof-slidecontent_<?php echo $__Context->skin_id ?> .lof-navigator li.active div{
	background:url('<?php echo $__Context->skincssimgpath ?>/grad-bg.png');
	color:#FFF;
}
.lof-slidecontent_<?php echo $__Context->skin_id ?> .lof-navigator li div a{
	color:#FFF;
	text-decoration: none;
}
.lof-slidecontent_<?php echo $__Context->skin_id ?> .lof-navigator li div a:hover{
	color:#FFF;
	text-decoration:underline;
}
.lof-slidecontent_<?php echo $__Context->skin_id ?> .lof-navigator li img{
	height:<?php echo $__Context->widget_info->thumbnail_height ?>px; /* 썸네일 높이 */
	width:<?php echo $__Context->widget_info->thumbnail_width ?>px; /* 썸네일 넓이 */
	margin: 10px; /* 여백 */
	float:left;
	padding:3px;
	border:#fff solid 1px;
}
.lof-slidecontent_<?php echo $__Context->skin_id ?> .lof-navigator li.active img{
	border:#fffC  solid 1px;
}
.lof-slidecontent_<?php echo $__Context->skin_id ?> .lof-navigator li h3 a{
	color:#FFF;
	font-size:11px; /* 썸네일 박스 제목 크기 */
	text-decoration: none;
}
.lof-slidecontent_<?php echo $__Context->skin_id ?> .lof-navigator li h3 a:hover{
	color:#FFF;
	text-decoration:underline;
}
.lof-slidecontent_<?php echo $__Context->skin_id ?> .lof-navigator li.active h3{
	color:#FFF;
}
.lof-slidecontent_<?php echo $__Context->skin_id ?> .lof-next{
	position:absolute;
	top:0;
	height:30px;
	background:#F9F9F9;
	display:block;
	width:100%;
}
.lof-slidecontent_<?php echo $__Context->skin_id ?> .lof-previous{
	position:absolute;
	bottom:0;
	height:30px;
	background:#F9F9F9;
	display:block;
	width:100%;
}
<?php if($__Context->colorset=="Right"){ ?>
.lof-snleft_<?php echo $__Context->skin_id ?> .lof-main-wapper{
	margin-left:auto;
	margin-right:inherit;
	clear:both;
	height:<?php echo $__Context->nav_height ?>px; /* 높이 */
}
.lof-snleft_<?php echo $__Context->skin_id ?> .lof-navigator-outer{
	left:0;
	top:0;
	right:inherit;
}
	
.lof-snleft_<?php echo $__Context->skin_id ?> .lof-navigator li.active{
	background:url('<?php echo $__Context->skincssimgpath ?>/arrow-bg2.gif') center right no-repeat;
	}
.lof-snleft_<?php echo $__Context->skin_id ?> .lof-navigator li div{
	margin-left:inherit;
	margin-right:15px;
}
	
.lof-snleft_<?php echo $__Context->skin_id ?> .lof-navigator li.active div{
	margin-left:inherit;
	margin-right:15px;
	background:url('<?php echo $__Context->skincssimgpath ?>/grad-bg2.gif'); 
}
<?php } ?>
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
<?php $__Context->_imgidx=0 ?>
<?php if($__Context->widget_info->content_items_shuffle=='Y'){ ?>
	<?php shuffle($__Context->widget_info->content_items) ?>
<?php } ?>
<div id="<?php echo $__Context->slide_id ?>" class="lof-slidecontent_<?php echo $__Context->skin_id ?> lof-snleft_<?php echo $__Context->skin_id ?>">
	<div class="preload" style="visibility: hidden; zoom: 1; opacity: 0; "><div></div></div>
	<div class="lof-main-wapper">
		<?php if($__Context->widget_info->content_items&&count($__Context->widget_info->content_items))foreach($__Context->widget_info->content_items as $__Context->key => $__Context->item){ ?>
		<?php if($__Context->item->getThumbnail()){ ?>
		<div class="lof-main-item_<?php echo $__Context->skin_id ?>" style="display: block; visibility: visible; zoom: 1; opacity: 0.998621875; ">
        		<img src="<?php echo $__Context->item->getImgslider() ?>" title='<?php echo $__Context->item->getTitle($__Context->widget_info->subject_cut_size) ?>' height="<?php echo $__Context->nav_height ?>px" width="<?php echo $__Context->widget_info->slider_img_width ?>px">
				<?php if($__Context->widget_info->show_content_title=='Y'){ ?>
				<div class="lof-main-item-desc">
                <h3 class="textT1_<?php echo $__Context->skin_id ?>"><a href="<?php echo $__Context->item->getDocumentSrl() ?>" title='<?php echo $__Context->item->getTitle($__Context->widget_info->subject_cut_size) ?>' /><?php echo $__Context->item->getTitle($__Context->widget_info->subject_cut_size) ?></a></h3>
                <p class="textC1_<?php echo $__Context->skin_id ?>"><a href="<?php echo $__Context->item->getDocumentSrl() ?>"><?php echo $__Context->item->getContent($__Context->widget_info->content_cut_size) ?></a></p>
				</div><?php } ?>
        </div> 
		<?php } ?>
		<?php } ?>
	</div>
	<div class="lof-navigator-outer">
  		<ul class="lof-navigator">
			<?php if($__Context->widget_info->content_items&&count($__Context->widget_info->content_items))foreach($__Context->widget_info->content_items as $__Context->key => $__Context->item){ ?>
			<?php if($__Context->item->getThumbnail()){ ?>
			<li style="height: <?php echo $__Context->widget_info->thumbnail_height+26 ?>px;">
            	<div>
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
					<img src="<?php echo $__Context->item->getThumbnail() ?>" <?php if($__Context->widget_info->img_fade=='Y'&&$__Context->widget_info->open_article!='N'){ ?>class='fade'<?php } ?> />
					</a>
                </div>    
            </li>
			<?php };
} ?>
        </ul>
	</div>
</div>
<script type="text/javascript">
	var _lofmain =  $('<?php echo $__Context->slide_id ?>');
	var _lofscmain = _lofmain.getElement('.lof-main-wapper');
	var _lofnavigator = _lofmain.getElement('.lof-navigator-outer .lof-navigator');
	var object = new LofFlashContent( 
		_lofscmain, _lofnavigator, _lofmain.getElement('.lof-navigator-outer'), {
			fxObject		: {transition:Fx.Transitions.Quad.easeInOut,  duration:800},
			interval		: <?php echo $__Context->widget_info->slide_delay ?>,
			direction		: 'opacity',
			mainItemSelector: 'div.lof-main-item_<?php echo $__Context->skin_id ?>',
			autoStart		: <?php echo $__Context->widget_info->slide_auto ?>,
			auto			: <?php echo $__Context->widget_info->slide_auto ?>,
			navItemsDisplay	: <?php echo $__Context->widget_info->cols_list_count ?>,
			startItem		: 0,
			navItemHeight	: <?php echo $__Context->widget_info->thumbnail_height+26 ?>
		});
	object.start( true, _lofmain.getElement('.preload') );
</script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
<?php if($__Context->widget_info->open_article!='N'||$__Context->widget_info->target_ext_var=='link'||$__Context->widget_info->target_ext_var=='image'){ ?>
	if ($.browser.msie && $.browser.version < 7) return; // Don't execute code if it's IE6 or below cause it doesn't support it.
	$(".fade").fadeTo(1, 1);
	$(".fade").hover(function () {
		$(this).fadeTo("fast", 0.33);
	}, function () {
		$(this).fadeTo("slow", 1);
	});
	$(".lof-slidecontent_<?php echo $__Context->skin_id ?> .lof-navigator").find("a[rel^='prettyPhoto']").prettyPhoto({theme:'<?php echo $__Context->prettyPhoto_theme ?>'});
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