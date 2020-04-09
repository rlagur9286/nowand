<?php if(!defined("__XE__"))exit;?>
<?php $__Context->skin_id = "Galleriffic_".mt_rand() ?>
<?php $__Context->slide_id = $__Context->skin_id ?>
<?php if(!$__Context->widget_info->ptypoto_theme){ ?>
<?php $__Context->prettyPhoto_theme = "pp_default" ?>
<?php }else{ ?>
<?php $__Context->prettyPhoto_theme = $__Context->widget_info->ptypoto_theme ?>
<?php } ?>
<?php if(!$__Context->widget_info->title_height){ ?>
<?php $__Context->grf2TiHT = 25 ?>
<?php }else{ ?>
<?php $__Context->grf2TiHT = $__Context->widget_info->title_height ?>
<?php } ?>
<?php if(!$__Context->widget_info->content_height){ ?>
<?php $__Context->grf2ConHT = 50 ?>
<?php }else{ ?>
<?php $__Context->grf2ConHT = $__Context->widget_info->content_height ?>
<?php } ?>
<?php $__Context->slider_img_width=$__Context->widget_info->slider_img_width+($__Context->widget_info->slider_img_bdsize*2) ?>
<?php $__Context->slider_img_height=$__Context->widget_info->slider_img_height+($__Context->widget_info->slider_img_bdsize*2) ?>
<?php $__Context->tablespace=10 ?>
<?php $__Context->slider_width=$__Context->slider_img_width+$__Context->tablespace+$__Context->widget_info->navigation_size ?>
<?php if($__Context->widget_info->title_font_size){ ?>
<?php $__Context->title_font_size = $__Context->widget_info->title_font_size ?>
<?php }else{ ?>
<?php $__Context->title_font_size = 14 ?>
<?php } ?>
<?php if($__Context->widget_info->title_font_color){ ?>
<?php $__Context->title_font_color = $__Context->widget_info->title_font_color ?>
<?php }else{ ?>
<?php $__Context->title_font_color = '#000' ?>
<?php } ?>
<?php if($__Context->widget_info->title_font_family!="Default"){ ?>
<?php $__Context->title_font_family = $__Context->widget_info->title_font_family ?>
<?php }else{ ?>
<?php $__Context->title_font_family = "돋움,'Trebuchet MS', Verdana, sans-serif" ?>
<?php } ?>
<?php if($__Context->widget_info->title_font_user!=""){ ?>
<?php $__Context->title_font_family = $__Context->widget_info->title_font_user ?>
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
<?php $__Context->content_font_family = "돋움,'Lucida Grande', 'Lucida Sans Unicode', Verdana, Helvetica, Arial, sans-serif" ?>
<?php } ?>
<?php if($__Context->widget_info->content_font_user!=""){ ?>
<?php $__Context->content_font_family = $__Context->widget_info->content_font_user ?>
<?php } ?>
<?php $__Context->skincssimgpath = getSiteUrl()."widgets/contentslider/skins/Galleriffic/js" ?>
<style type="text/css">
.textT1_<?php echo $__Context->skin_id ?>, .textT1_<?php echo $__Context->skin_id ?> a, .textT1_<?php echo $__Context->skin_id ?> a:visited {
	color:<?php echo $__Context->title_font_color ?>;
	font-family: <?php echo $__Context->title_font_family ?>;
	font-size: <?php echo $__Context->title_font_size ?>px;
	text-decoration: none;
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
	<?php if($__Context->widget_info->show_content=='Y'){ ?>display:block;<?php }else{ ?>display:none;<?php } ?>
}
.textC1_<?php echo $__Context->skin_id ?> a:hover, .textC1_<?php echo $__Context->skin_id ?> a:focus {
	text-decoration: underline;
}
/* Default 스킨 전체 레이어 */
#<?php echo $__Context->slide_id ?>_page {
	width: <?php echo $__Context->slider_width ?>px;
	margin: 0 auto;
}
div.content_<?php echo $__Context->skin_id ?> {
	display: block;
	float: left;
	width: <?php echo $__Context->slider_img_width ?>px; 
}
div.content_<?php echo $__Context->skin_id ?> a, div.navigation_<?php echo $__Context->skin_id ?> a {
	text-decoration: none;
	color: #777;
}
div.content_<?php echo $__Context->skin_id ?> a:focus, div.content_<?php echo $__Context->skin_id ?> a:hover, div.content_<?php echo $__Context->skin_id ?> a:active {
	text-decoration: underline;
}
div.controls_<?php echo $__Context->skin_id ?> {
	margin-top: 5px;
	height: 23px;
}
div.controls_<?php echo $__Context->skin_id ?> a {
	padding: 5px;
}
div.controls_<?php echo $__Context->skin_id ?> div.ss-controls {
	float: left;
}
div.controls_<?php echo $__Context->skin_id ?> div.nav-controls {
	float: right;
}
div.slideshow-container_<?php echo $__Context->skin_id ?> {
	position: relative;
	clear: both;
	height: <?php echo $__Context->slider_img_height ?>px; /* 슬라이더 높이 */
}
div.loader_<?php echo $__Context->skin_id ?> {
	position: absolute;
	top: 0;
	left: 0;
	background-image: url('<?php echo $__Context->skincssimgpath ?>/loader.gif');
	background-repeat: no-repeat;
	background-position: center;
	width: <?php echo $__Context->slider_img_width ?>px;
	height: <?php echo $__Context->slider_img_height ?>px;
}
div.slideshow_<?php echo $__Context->skin_id ?> {
}
div.slideshow_<?php echo $__Context->skin_id ?> span.image-wrapper_<?php echo $__Context->skin_id ?> {
	display: block;
	position: absolute;
	top: 0;
	left: 0;
}
div.slideshow_<?php echo $__Context->skin_id ?> a.advance-link {
	display: block;
	width: <?php echo $__Context->slider_img_width ?>px;
	height: <?php echo $__Context->slider_img_height ?>px; /* 슬라이더 높이 */
	line-height: <?php echo $__Context->slider_img_height ?>px; /* 변경하지 마세요. */
	text-align: center;
}
div.slideshow_<?php echo $__Context->skin_id ?> a.advance-link:hover, div.slideshow_<?php echo $__Context->skin_id ?> a.advance-link:active, div.slideshow_<?php echo $__Context->skin_id ?> a.advance-link:visited {
	text-decoration: none;
}
div.slideshow_<?php echo $__Context->skin_id ?> img {
	vertical-align: middle;
	border: <?php echo $__Context->widget_info->slider_img_bdsize ?>px solid <?php echo $__Context->widget_info->slider_img_bdcolor ?>;	/* 슬라이드 테투리 두께와 색 지정 */
}
div.caption-container_<?php echo $__Context->skin_id ?> {
	position: relative;
	clear: left;
	height: <?php echo $__Context->grf2TiHT+$__Context->grf2ConHT ?>px; /* 갭션 높이 */
}
span.image-caption_<?php echo $__Context->skin_id ?> {
	display: block;
	position: absolute;
	width: <?php echo $__Context->slider_img_width ?>px;							/* 내용 넓이 */
	top: 0;
	left: 0;
}
div.captionContent_<?php echo $__Context->skin_id ?> {
	padding: 12px;
}
div.image-title_<?php echo $__Context->skin_id ?> {
	font-weight: bold;
	<?php if($__Context->widget_info->title_height){ ?>
	height: <?php echo $__Context->widget_info->title_height ?>px;
	<?php } ?>
}
div.image-desc_<?php echo $__Context->skin_id ?> {
	line-height: 1.3em;
	padding-top: 12px;
	<?php if($__Context->widget_info->content_height){ ?>
	height: <?php echo $__Context->widget_info->content_height ?>px;
	<?php } ?>
}
ul.thumbsImages_<?php echo $__Context->skin_id ?> {
	clear: both;
	margin: 0;
	padding: 0;
}
ul.thumbsImages_<?php echo $__Context->skin_id ?> li {
	float: left;
	padding: 0;
	margin: 5px 10px 5px 0;
	list-style: none;
}
a.thumbImg_<?php echo $__Context->skin_id ?> {
	padding: 2px;
	display: block;
	border: <?php echo $__Context->widget_info->thumbnail_bdsize ?>px solid <?php echo $__Context->widget_info->thumbnail_bdcolor ?>;	/* 썸네일 테투리 두께와 색 지정 */
}
ul.thumbsImages_<?php echo $__Context->skin_id ?> li.selected a.thumbImg_<?php echo $__Context->skin_id ?> {
	background: #000;
}
a.thumbImg_<?php echo $__Context->skin_id ?>:focus {
	outline: none;
}
ul.thumbsImages_<?php echo $__Context->skin_id ?> img {
	border: none;
	display: block;
}
/* 썸네일 박스 */
div.navigation_<?php echo $__Context->skin_id ?> {
	/* The navigation style is set using jQuery so that the javascript specific styles won't be applied unless javascript is enabled. */
	width: <?php echo $__Context->widget_info->navigation_size ?>px;
	float: left;
	margin-left: <?php echo $__Context->tablespace ?>px;					/* 슬라이드 박스 간격 */
}
div.navigation_<?php echo $__Context->skin_id ?> div.top {
	margin-bottom: 12px;
	height: 11px;
}
div.navigation_<?php echo $__Context->skin_id ?> div.bottom {
	margin-top: 12px;
}
/* 페이지 버튼 */
div.paginationBtn_<?php echo $__Context->skin_id ?> {
	clear: both;
}
div.paginationBtn_<?php echo $__Context->skin_id ?> a, div.paginationBtn_<?php echo $__Context->skin_id ?> span.current, div.paginationBtn_<?php echo $__Context->skin_id ?> span.ellipsis {
	display: block;
	float: left;
	margin-right: 2px;
	padding: 4px 7px 2px 7px;
	border: 1px solid #ccc;
}
div.paginationBtn_<?php echo $__Context->skin_id ?> a:hover {
	background-color: #eee;
	text-decoration: none;
}
div.paginationBtn_<?php echo $__Context->skin_id ?> span.current {
	font-weight: bold;
	background-color: #000;
	border-color: #000;
	color: #fff;
}
div.paginationBtn_<?php echo $__Context->skin_id ?> span.ellipsis {
	border: none;
	padding: 5px 0 3px 2px;
}
</style>
<script type="text/javascript">
	document.write('<style>.noscript { display: none; }</style>');
</script>
<?php $__Context->_imgidx=1 ?>
<?php if($__Context->widget_info->content_items_shuffle=='Y'){ ?>
	<?php shuffle($__Context->widget_info->content_items) ?>
<?php } ?>
<div id="<?php echo $__Context->slide_id ?>_page">
	<div id="gallery_<?php echo $__Context->skin_id ?>" class="content_<?php echo $__Context->skin_id ?>">
		<?php if($__Context->widget_info->show_control=='Y'){ ?>
		<div id="controls_<?php echo $__Context->skin_id ?>" class="controls_<?php echo $__Context->skin_id ?>"></div><?php } ?>
		<div class="slideshow-container_<?php echo $__Context->skin_id ?>">
			<div id="loading_<?php echo $__Context->skin_id ?>" class="loader_<?php echo $__Context->skin_id ?>"></div>
			<div id="slideshow_<?php echo $__Context->skin_id ?>" class="slideshow_<?php echo $__Context->skin_id ?>"></div>
		</div>
		<?php if($__Context->widget_info->show_content_title=='Y'){ ?>
		<div id="caption_<?php echo $__Context->skin_id ?>" class="caption-container_<?php echo $__Context->skin_id ?>"></div><?php } ?>
	</div>
	<div id="thumbsImg_<?php echo $__Context->skin_id ?>" class="navigation_<?php echo $__Context->skin_id ?>">
		<ul class="thumbsImages_<?php echo $__Context->skin_id ?> noscript">
			<?php if($__Context->widget_info->content_items&&count($__Context->widget_info->content_items))foreach($__Context->widget_info->content_items as $__Context->key => $__Context->item){ ?>
			<?php if($__Context->item->getThumbnail()){ ?>
			<li>
		<?php if($__Context->widget_info->open_article=='Z'){ ?>
			<?php if($__Context->widget_info->target_ext_var=='link'&&$__Context->item->getLinkedType()!=''||$__Context->widget_info->target_ext_var=='image'&&$__Context->item->getLinkedType()!=''){ ?>
				<a class="thumbImg_<?php echo $__Context->skin_id ?>" name="<?php echo $__Context->_imgidx++ ?>" href="<?php echo $__Context->item->getLink() ?>" alt="<?php echo $__Context->item->getImgslider() ?>" title='<?php echo $__Context->item->getTitle($__Context->widget_info->subject_cut_size) ?> #크게보기' rel="prettyPhoto">
			<?php }else{ ?>
				<a class="thumbImg_<?php echo $__Context->skin_id ?>" name="<?php echo $__Context->_imgidx++ ?>" href="<?php echo $__Context->item->getPreview() ?>" alt="<?php echo $__Context->item->getImgslider() ?>" title='<?php echo $__Context->item->getTitle($__Context->widget_info->subject_cut_size) ?> #크게보기' rel="prettyPhoto">
			<?php } ?>
		<?php }elseif($__Context->widget_info->open_article=='Y'){ ?>
				<a class="thumbImg_<?php echo $__Context->skin_id ?>" name="<?php echo $__Context->_imgidx++ ?>" alt="<?php echo $__Context->item->getImgslider() ?>" href="<?php echo $__Context->item->getDocumentSrl() ?>" title='<?php echo $__Context->item->getTitle($__Context->widget_info->subject_cut_size) ?> #내용보기'>
		<?php }else{ ?>
				<a class="thumbImg_<?php echo $__Context->skin_id ?>" name="<?php echo $__Context->_imgidx++ ?>" href="<?php echo $__Context->item->getImgslider() ?>" alt="<?php echo $__Context->item->getLink() ?>" title='<?php echo $__Context->item->getTitle($__Context->widget_info->subject_cut_size) ?> #다음그림'>
		<?php } ?>
					<img src="<?php echo $__Context->item->getThumbnail() ?>" alt='<?php echo $__Context->item->getTitle($__Context->widget_info->subject_cut_size) ?> #<?php echo $__Context->_imgidx ?>' />
				</a>
				<?php if($__Context->widget_info->show_content_title=='Y'){ ?>
				<div class="captionContent_<?php echo $__Context->skin_id ?>">
					<div class="image-title_<?php echo $__Context->skin_id ?> textT1_<?php echo $__Context->skin_id ?>">
					<a href="<?php echo $__Context->item->getLink() ?>"><?php echo $__Context->item->getTitle($__Context->widget_info->subject_cut_size) ?></a></div>
					<div class="image-desc_<?php echo $__Context->skin_id ?> textC1_<?php echo $__Context->skin_id ?>">
					<a href="<?php echo $__Context->item->getLink() ?>"><?php echo $__Context->item->getContent($__Context->widget_info->content_cut_size) ?></a></div>
				</div><?php } ?>
			</li>
			<?php };
} ?>
		</ul>
	</div>
	<div style="clear: both;"></div>
</div>
<script type="text/javascript">
	jQuery(document).ready(function() {
		var onMouseOutOpacity = 0.67;
		jQuery('#thumbsImg_<?php echo $__Context->skin_id ?> ul.thumbsImages_<?php echo $__Context->skin_id ?> li').opacityrollover({
			mouseOutOpacity:   onMouseOutOpacity,
			mouseOverOpacity:  1.0,
			fadeSpeed:         'fast',
			exemptionSelector: '.selected'
		});
				
		var gallery = jQuery('#thumbsImg_<?php echo $__Context->skin_id ?>').galleriffic({
			delay:                     <?php echo $__Context->widget_info->slide_delay ?>,
			numThumbs:                 <?php echo $__Context->widget_info->cols_list_count ?>,
			preloadAhead:              <?php echo $__Context->widget_info->list_count ?>,
			enableTopPager:            <?php if($__Context->widget_info->navigation_control=='Y'){ ?>true<?php }else{ ?>false<?php } ?>,
			enableBottomPager:         false,
			maxPagesToShow:            3,
			imageContainerSel:         '#slideshow_<?php echo $__Context->skin_id ?>',
			controlsContainerSel:      '#controls_<?php echo $__Context->skin_id ?>',
			captionContainerSel:       '#caption_<?php echo $__Context->skin_id ?>',
			loadingContainerSel:       '#loading_<?php echo $__Context->skin_id ?>',
			renderSSControls:          <?php if($__Context->widget_info->show_control=='Y'){ ?>true<?php }else{ ?>false<?php } ?>,
			renderNavControls:         <?php if($__Context->widget_info->show_control=='Y'){ ?>true<?php }else{ ?>false<?php } ?>,
			playLinkText:              'Play Slideshow',
			pauseLinkText:             'Pause Slideshow',
			prevLinkText:              '&lsaquo; Previous Photo',
			nextLinkText:              'Next Photo &rsaquo;',
			nextPageLinkText:          'Next &rsaquo;',
			prevPageLinkText:          '&lsaquo; Prev',
			enableHistory:             false,
			autoStart:                 <?php echo $__Context->widget_info->slide_auto ?>,
			syncTransitions:           false,
			defaultTransitionDuration: 100,
			skinidno:				   '<?php echo $__Context->skin_id ?>',
			openArticle:			   '<?php echo $__Context->widget_info->open_article ?>',
			ptyPotoTheme:			   '<?php echo $__Context->widget_info->ptypoto_theme ?>',
			onSlideChange:             function(prevIndex, nextIndex) {
				// 'this' refers to the gallery, which is an extension of $('#thumbs')
				this.find('ul.thumbsImages_<?php echo $__Context->skin_id ?>').children()
					.eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
					.eq(nextIndex).fadeTo('fast', 1.0);
			},
			onPageTransitionOut:       function(callback) {
				this.fadeTo('fast', 0.0, callback);
			},
			onPageTransitionIn:        function() {
				this.fadeTo('fast', 1.0);
			}
		});
		gallery.find('a.thumbImg_<?php echo $__Context->skin_id ?>').hover(function(e) {
			gallery.clickHandler(e, this);
		});
	});
</script>
