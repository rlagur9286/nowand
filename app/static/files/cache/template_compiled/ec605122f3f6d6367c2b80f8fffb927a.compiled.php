<?php if(!defined("__XE__"))exit;?>
<?php echo Context::addHtmlHeader('<meta name="viewport" content="width=1300">') ?>
<?php Context::loadLang('layouts/xe_funeral/lang'); ?>
	<?php  $__Context->_is_indexmodule = ($__Context->site_module_info->module_srl === $__Context->current_module_info->module_srl) ?>
	<?php  $__Context->_body_class = array() ?>
	<?php  $__Context->_container_class = array() ?>
	<?php  $__Context->_visual_class = array() ?>
	<?php  $__Context->_selected_menu = null ?>
	<?php  $__Context->_magazine_header = false ?>
	<?php  $__Context->_onepage_header = false ?>
	<?php  $__Context->sub_header_title = $__Context->module_info->browser_title ?>
	<?php  $__Context->_enable_slide = false ?>
	<?php  $__Context->_enable_unb = false ?>
	<?php  $__Context->_sample_slide = false ?>
	<?php  $__Context->_sample_footer = false ?>
	<?php if(!$__Context->layout_info->use_demo){;
$__Context->layout_info->use_demo = 'Y';
} ?>
	<?php if(!$__Context->layout_info->layout_type){;
$__Context->layout_info->layout_type = 'auto';
} ?>
	<?php if(!$__Context->layout_info->menu_type_main){;
$__Context->layout_info->menu_type_main = 'basic';
} ?>
	<?php if(!$__Context->layout_info->menu_type_sub){;
$__Context->layout_info->menu_type_sub = 'basic';
} ?>
	<?php if(!$__Context->layout_info->content_fixed_width){;
$__Context->layout_info->content_fixed_width = 'index';
} ?>
	<?php if(!$__Context->layout_info->menu_fixed){;
$__Context->layout_info->menu_fixed = 'Y';
} ?>
	<?php if(!$__Context->layout_info->sidebar_position){;
$__Context->layout_info->sidebar_position = 'right';
} ?>
	<?php if(!$__Context->layout_info->use_slide){;
$__Context->layout_info->use_slide = 'Y';
} ?>
	<?php if(!$__Context->layout_info->enable_intergration_search){;
$__Context->layout_info->enable_intergration_search = 'Y';
} ?>
	<?php if($__Context->layout_info->use_slide === 'Y'){ ?>
		<?php  $__Context->_enable_slide = true ?>
	<?php } ?>
	<?php if($__Context->layout_info->use_demo === 'Y'){ ?>
		<?php  $__Context->_sample_slide = true ?>
		<?php  $__Context->_enable_slide = false ?>
		<?php if($__Context->_is_indexmodule){;
$__Context->_enable_slide = true;
} ?>
	<?php } ?>
	<?php if(!$__Context->layout_info->slide_img1){;
$__Context->_sample_slide = true;
} ?>
	<?php if($__Context->layout_info->use_demo === 'Y'){;
$__Context->_sample_footer = true;
} ?>
	<?php if($__Context->layout_info->footer_logo_img || $__Context->layout_info->footer_logo_text){;
$__Context->_sample_footer = false;
} ?>
	
	<?php if($__Context->mid === 'xeicon'){ ?>
		<?php  $__Context->layout_info->layout_type = 'sub' ?>
		<?php  $__Context->layout_info->menu_type_sub = 'onepage_parallax' ?>
		<?php  $__Context->layout_info->content_fixed_width = 'N' ?>
	<?php } ?>
	<?php if($__Context->layout_info->content_fixed_width === 'index'){ ?>
		<?php  $__Context->layout_info->content_fixed_width = (!$__Context->_is_indexmodule) ? 'Y' : 'N'; ?>
	<?php } ?>
	<?php if($__Context->layout_info->content_fixed_width === 'Y'){ ?>
		<?php  $__Context->_body_class[] = 'fixed-width' ?>
	<?php } ?>
	
	<?php  $__Context->_fixed_width_act = array(
		'dispMemberSignUpForm',
		'dispMemberLoginForm',
		'dispMemberFindAccount',
		'dispMemberInfo',
		'dispMemberModifyPassword',
		'dispMemberModifyEmailAddress',
		'dispMemberModifyInfo',
		'dispMemberLeave',
		'dispMemberScrappedDocument',
		'dispMemberSavedDocument',
		'dispMemberOwnDocument',
		'dispCommunicationFriend',
		'dispCommunicationMessages',
		'dispNcenterliteUserConfig',
		'dispNcenterliteNotifyList',
		'dispLoginxeclientListProvider',
		'dispAjaxboardNotificationConfig',
		'IS'
	) ?>
	<?php if(in_array($__Context->act, $__Context->_fixed_width_act)){ ?>
		<?php  $__Context->_body_class[] = 'fixed-width' ?>
		<?php  $__Context->layout_info->sidebar_position = 'none' ?>
		<?php  $__Context->sub_header_title = 'Membership' ?>
		<?php  $__Context->layout_info->use_demo = 'N' ?>
		<?php if($__Context->act === 'IS'){;
$__Context->sub_header_title = 'Search';
} ?>
	<?php } ?>
	<?php if($__Context->layout_info->layout_type === 'auto'){ ?>
		<?php  $__Context->layout_info->layout_type = ($__Context->_is_indexmodule) ? 'main' : 'sub'; ?>
	<?php } ?>
	<?php  $__Context->_body_class[] = $__Context->layout_info->layout_type ?>
	<?php if(!$__Context->_is_indexmodule){;
$__Context->_body_class[] = $__Context->layout_info->sidebar_position;
} ?>
	<?php if($__Context->layout_info->layout_type === 'main'){ ?>
		<?php  $__Context->_visual_class[] = 'main' ?>
		<?php if($__Context->layout_info->menu_type_main === 'startup'){ ?>
			<?php  $__Context->_container_class[] = 'onepage' ?>
			<?php  $__Context->_onepage_header = true ?>
		<?php } ?>
		<?php if($__Context->layout_info->menu_type_main === 'magazine'){ ?>
			<?php  $__Context->_container_class[] = 'magazine' ?>
			<?php  $__Context->_enable_unb = true ?>
			<?php  $__Context->_magazine_header = true ?>
			<?php  $__Context->layout_info->menu_fixed = 'N' ?>
		<?php } ?>
	<?php } ?>
	<?php if($__Context->layout_info->layout_type === 'sub'){ ?>
		<?php  $__Context->_enable_slide = false ?>
		<?php  $__Context->_visual_class[] = 'sub' ?>
		<?php if($__Context->layout_info->menu_type_sub === 'basic_regular' || $__Context->layout_info->menu_type_sub === 'magazine_regular'){ ?>
			<?php  $__Context->_visual_class[] = 'sub_type2' ?>
		<?php } ?>
		<?php if($__Context->layout_info->menu_type_sub === 'magazine_simple' || $__Context->layout_info->menu_type_sub === 'magazine_regular'){ ?>
			<?php  $__Context->_container_class[] = 'magazine' ?>
			<?php  $__Context->_magazine_header = true ?>
			<?php  $__Context->_enable_unb = true ?>
			<?php  $__Context->layout_info->menu_fixed = 'N' ?>
		<?php } ?>
		<?php if($__Context->layout_info->menu_type_sub === 'onepage_parallax'){ ?>
			<?php  $__Context->_container_class[] = 'onepage' ?>
			<?php  $__Context->_onepage_header = true ?>
			<?php  $__Context->_visual_class[] = 'sub_type3' ?>
		<?php } ?>
	<?php } ?>
	<?php if($__Context->layout_info->menu_fixed === 'Y'){ ?>
		<?php  $__Context->_container_class[] = 'fixed_header' ?>
	<?php } ?>
	
	<?php if(!$__Context->_is_indexmodule){;
$__Context->layout_info->use_demo = 'N';
} ?>
	
	<?php if($__Context->act === 'dispPageAdminContentModify'){;
$__Context->layout_info->use_demo = 'N';
} ?>
<?php  $__Context->_body_class = join(' ', $__Context->_body_class) ?>
<?php  $__Context->_visual_class = join(' ', $__Context->_visual_class) ?>
<?php  $__Context->_container_class = join(' ', $__Context->_container_class) ?>
<!--#Meta:layouts/xe_funeral/css/layout.css--><?php $__tmp=array('layouts/xe_funeral/css/layout.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/xe_funeral/css/idangerous.swiper.css--><?php $__tmp=array('layouts/xe_funeral/css/idangerous.swiper.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/xe_funeral/css/welcome.css--><?php $__tmp=array('layouts/xe_funeral/css/welcome.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/xe_funeral/css/webfont.css--><?php $__tmp=array('layouts/xe_funeral/css/webfont.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->mid === 'xeicon'){ ?><!--#Meta:layouts/xe_funeral/css/xeicon.css--><?php $__tmp=array('layouts/xe_funeral/css/xeicon.css','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<!--#Meta:common/xeicon/xeicon.min.css--><?php $__tmp=array('common/xeicon/xeicon.min.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
<?php if($__Context->_enable_slide){ ?><!--#Meta:layouts/xe_funeral/js/idangerous.swiper.min.js--><?php $__tmp=array('layouts/xe_funeral/js/idangerous.swiper.min.js','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<!--#Meta:layouts/xe_funeral/js/layout.js--><?php $__tmp=array('layouts/xe_funeral/js/layout.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/xe_funeral/js/xe_official.js--><?php $__tmp=array('layouts/xe_funeral/js/xe_official.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->layout_info->use_demo ==='Y'){ ?><!--#Meta:layouts/xe_funeral/js/welcome.js--><?php $__tmp=array('layouts/xe_funeral/js/welcome.js','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<!--#Meta:layouts/xe_funeral/js/jquery.parallax-scroll.min.js--><?php $__tmp=array('layouts/xe_funeral/js/jquery.parallax-scroll.min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<p class="skip"><a href="#content"><?php echo $__Context->lang->skip_to_content ?></a></p>
<div class="container <?php echo $__Context->_container_class ?>  <?php echo $__Context->menutype_class ?>">
	<!-- HEADER -->
	<div id="header" class="header_wrap xe-clearfix" >
		<div class="wrap_menu clear">
		<header class="header">
			
				<div class="side">
				<ul>
					<!-- search -->
					<?php if($__Context->layout_info->enable_intergration_search === 'Y'){ ?><li class="click">
						<a href="#" title="<?php echo $__Context->lang->cmd_search ?>"><i class="xi-magnifier"></i><span class="blind"><?php echo $__Context->lang->cmd_search ?></span></a>
					</li><?php } ?>
					<!-- admin -->
					<?php if($__Context->logged_info->is_admin == 'Y'){ ?><li>
						<a href="<?php echo getUrl('', 'module', 'admin') ?>" target="_blank" title="<?php echo $__Context->lang->cmd_management ?>"><i class="xi-cog"></i><span class="blind"><?php echo $__Context->lang->cmd_management ?></span></a>
					</li><?php } ?>
					<!-- login -->
					<li class="hover">
						<?php if($__Context->is_logged){ ?>
							<!-- after_login -->
							<a href="<?php echo getUrl('act', 'dispMemberInfo') ?>" class="login_after">
								<?php if($__Context->logged_info->profile_image->src){ ?>
									<img src="<?php echo $__Context->logged_info->profile_image->src ?>" alt="<?php echo $__Context->logged_info->nick_name ?>" />
								<?php }else{ ?>
									<img src="/layouts/xe_funeral/img/ico_default.jpg" alt="<?php echo $__Context->logged_info->nick_name ?>" />
								<?php } ?>
							</a>
							<div class="ly ly_login">
								<ul>
									<?php if($__Context->logged_info->menu_list&&count($__Context->logged_info->menu_list))foreach($__Context->logged_info->menu_list as $__Context->key=>$__Context->val){ ?><li><a href="<?php echo getUrl('act', $__Context->key, 'member_srl', '', 'page', '') ?>"><?php echo Context::getLang($__Context->val) ?></a></li><?php } ?>
									<li><a href="<?php echo getUrl('act', 'dispMemberLogout') ?>"><?php echo $__Context->lang->cmd_logout ?></a></li>
								</ul>
								<span class="edge"></span>
							</div>
							<!-- /after_login -->
						<?php }else{ ?>
							<!-- before_login -->
							<a href="<?php echo getUrl('act', 'dispMemberLoginForm') ?>" id="ly_btn"><i class="xi-user-add"></i><span class="blind"><?php echo $__Context->lang->cmd_login ?>/<?php echo $__Context->lang->cmd_signup ?></span></a>
							<div class="ly ly_login">
								<ul>
									<li><a id="ly_login_btn" href="<?php echo getUrl('act', 'dispMemberLoginForm') ?>"><?php echo $__Context->lang->cmd_login ?></a></li>
									<li><a href="<?php echo getUrl('act', 'dispMemberSignUpForm') ?>"><?php echo $__Context->lang->cmd_signup ?></a></li>
								</ul>
								<span class="edge"></span>
							</div>
							<!-- /before_login -->
						<?php } ?>
					</li>
				</ul>
			</div>
			
			<div class="logo-item">
				<?php  $__Context->_logo_img = $__Context->layout_info->logo_img ?>
				<?php if($__Context->_magazine_header && $__Context->layout_info->logo_img_magazine){ ?>
					<?php  $__Context->_logo_img = $__Context->layout_info->logo_img_magazine ?>
				<?php } ?>
				<a href="<?php if($__Context->layout_info->logo_url){;
echo $__Context->layout_info->logo_url;
}else{;
echo getUrl('');
} ?>">
					<?php if($__Context->_logo_img){ ?>
						<?php if($__Context->_magazine_header){ ?>
							<img src="<?php echo $__Context->layout_info->logo_img_magazine ?>" alt="<?php echo $__Context->layout_info->logo_text ?>" />
						<?php }else{ ?>
							<?php if($__Context->_onepage_header && $__Context->layout_info->logo_img_transparent){ ?>
								<?php  $__Context->_logo_img = $__Context->layout_info->logo_img_transparent ?>
							<?php } ?>
							<img src="<?php echo $__Context->_logo_img ?>"<?php if($__Context->_onepage_header && $__Context->layout_info->logo_img_transparent){ ?> data-logo="<?php echo $__Context->layout_info->logo_img ?>"<?php } ?> alt="<?php echo $__Context->layout_info->logo_text ?>" />
						<?php } ?>
					<?php }else{ ?>
						<?php  $__Context->_logo_img = 'logo.png' ?>
						<?php if($__Context->_magazine_header){;
$__Context->_logo_img = 'm_logo.png';
} ?>
						<?php if($__Context->_onepage_header){;
$__Context->_logo_img = 's_logo.png';
} ?>
						<img src="<?php echo $__Context->layout_info->path ?>img/<?php echo $__Context->_logo_img ?>"<?php if($__Context->_onepage_header){ ?> data-logo="<?php echo $__Context->layout_info->path ?>img/logo.png"<?php } ?> alt="나우앤드" />
					<?php } ?>
				</a>
			</div>
			
			<!-- GNB -->
			<?php if($__Context->GNB->list){ ?><div class="gnb">
				<ul class="main_menu clear">
					<?php if($__Context->GNB->list&&count($__Context->GNB->list))foreach($__Context->GNB->list as $__Context->key1=>$__Context->val1){ ?><li<?php if($__Context->val1['selected']){ ?> class="on"<?php } ?> class="depth">
						<a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window'] == 'Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a>
						<?php if($__Context->val1['selected']){;
$__Context->_selected_menu = $__Context->val1;
} ?>
						<div>
						<?php if($__Context->val1['list']){ ?><ul class="depth2">
							<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li<?php if($__Context->val2['list']){ ?> class="more"<?php } ?>>
								<a href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window'] == 'Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['link'] ?></a>
								<?php if($__Context->val2['list']){ ?><ul class="depth3">
									<?php if($__Context->val2['list']&&count($__Context->val2['list']))foreach($__Context->val2['list'] as $__Context->key3=>$__Context->val3){ ?><li>
										<a href="<?php echo $__Context->val3['href'] ?>"<?php if($__Context->val3['open_window'] == 'Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val3['link'] ?></a>
									</li><?php } ?>
								</ul><?php } ?>
							</li><?php } ?>
						</ul><?php } ?>
						</div>
					</li><?php } ?>
				</ul>
			</div><?php } ?>
			<!-- /GNB -->
		</header>
	</div>
	</div>
	<!-- END:HEADER -->
	<!-- VISUAL-SUBHEADER -->
	<?php if($__Context->layout_info->layout_type === 'sub'){ ?><div class="visual <?php echo $__Context->_visual_class ?>">
		<?php  $__Context->_subheader_img = 'sub_banner_01.jpg' ?>
		<?php if($__Context->layout_info->menu_type_sub === 'onepage_parallax'){;
$__Context->_subheader_img = 'sub_banner_02.jpg';
} ?>
		<?php if($__Context->mid === 'xeicon'){;
$__Context->_subheader_img = 'sub_banner_xeicon.jpg';
} ?>
		<?php if($__Context->GNB->list&&count($__Context->GNB->list))foreach($__Context->GNB->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['selected']){ ?>
		<span class="bg_img" style="background-image:url('<?php echo $__Context->layout_info->path ?>img/visual_<?php echo $__Context->val1['url'] ?>.jpg')"></span>
		<?php }} ?>
		<span class="mask"></span>
	</div><?php } ?>
    <!-- Swiper -->
    <?php if($__Context->layout_info->layout_type === 'main' && $__Context->_enable_slide){ ?><div class="visual swiper-container">
		<!-- 슬라이드 -->
		<div class="swiper-wrapper">
		<?php if($__Context->_sample_slide){ ?>
			<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/xe_funeral/demo','slide.html') ?>
		<?php }else{ ?>
			<?php if($__Context->layout_info->slide_img1){ ?><div style="background-image:url('<?php echo $__Context->layout_info->slide_img1 ?>');" class="swiper-slide">
				<?php if($__Context->layout_info->slide_text1){ ?><div>
					<div>
						<?php echo $__Context->layout_info->slide_text1 ?>
					</div>
				</div><?php } ?>
			</div><?php } ?>
			<?php if($__Context->layout_info->slide_img2){ ?><div style="background-image:url('<?php echo $__Context->layout_info->slide_img2 ?>');" class="swiper-slide">
				<?php if($__Context->layout_info->slide_text2){ ?><div>
					<div>
						<?php echo $__Context->layout_info->slide_text2 ?>
					</div>
				</div><?php } ?>
			</div><?php } ?>
			<?php if($__Context->layout_info->slide_img3){ ?><div style="background-image:url('<?php echo $__Context->layout_info->slide_img3 ?>');" class="swiper-slide">
				<?php if($__Context->layout_info->slide_text3){ ?><div>
					<div>
						<?php echo $__Context->layout_info->slide_text3 ?>
					</div>
				</div><?php } ?>
			</div><?php } ?>
			<?php if($__Context->layout_info->slide_img4){ ?><div style="background-image:url('<?php echo $__Context->layout_info->slide_img4 ?>');" class="swiper-slide">
				<?php if($__Context->layout_info->slide_text4){ ?><div>
					<div>
						<?php echo $__Context->layout_info->slide_text4 ?>
					</div>
				</div><?php } ?>
			</div><?php } ?>
			<?php if($__Context->layout_info->slide_img5){ ?><div style="background-image:url('<?php echo $__Context->layout_info->slide_img5 ?>');" class="swiper-slide">
				<?php if($__Context->layout_info->slide_text5){ ?><div>
					<div>
						<?php echo $__Context->layout_info->slide_text5 ?>
					</div>
				</div><?php } ?>
			</div><?php } ?>
		<?php } ?>
		</div>
		<!-- END:슬라이드 -->
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button left"><button type="button" class="swiper-button-prev"><i class="xi-angle-left"></i></button></div>
		<div class="swiper-button right"><button type="button" class="swiper-button-next"><i class="xi-angle-right"></i></button></div>
    </div><?php } ?>
	<!-- /VISUAL -->
	<!-- BODY -->
	<div class="body <?php echo $__Context->_body_class ?>">
					
		<!-- CONTENT -->
			<div class="content" id="content">
				
				<div class="page_title">
				<span><?php echo $__Context->module_info->browser_title ?></span>
				</div>
				<div class="tel_head">
					<h2 class="tel_title"><b>1522-4991</b>24시간 실시간 상담전화</h2>
					<p>전문상담사가 직접 상담해드리는 빠르고 간편한 1:1상담을 이용해보시기 바랍니다.</p>
					</div>
					<ul class="info-count">
						<li><a href="tel:1522-4991"><span><i class="fa fa-podcast fa-3x"></i><strong>친절상담</strong></span></a></li>
						<li><a href="tel:1522-4991"><span><i class="fa fa-car fa-3x"></i><strong>무료답사</strong></span></a></li>
						<li><a href="tel:1522-4991"><span><i class="fa fa-users fa-3x"></i><strong>무료동행</strong></span></a></li>
					</ul>
					<?php if($__Context->GNB->list&&count($__Context->GNB->list))foreach($__Context->GNB->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['selected'] && $__Context->val1['list']){ ?><div class="sub_Menu">
					<ul>
					  <?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li<?php if($__Context->val2['selected']){ ?> class="active"<?php } ?>><a href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['link'] ?></a>
						<?php if($__Context->val2['list']){ ?><ul>
						  <?php if($__Context->val2['list']&&count($__Context->val2['list']))foreach($__Context->val2['list'] as $__Context->key3=>$__Context->val3){ ?><li<?php if($__Context->val3['selected']){ ?> class="active"<?php } ?>><a href="<?php echo $__Context->val3['href'] ?>"<?php if($__Context->val3['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val3['link'] ?></a></li><?php } ?>
						</ul><?php } ?>
					  </li><?php } ?>
					</ul>
					</div><?php }} ?>
				<?php echo $__Context->content ?>
			</div>
			<?php if($__Context->layout_info->use_demo === 'Y'){ ?>
				<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/xe_funeral/demo','welcome_main.html') ?>
			<?php } ?>
		<!-- /CONTENT -->
	</div>
	<!-- END:BODY -->
	<footer class="footer">
		<div class="f_info_area">
			<div class="f_info2">
				<div class="site_map">
					<?php if($__Context->FNB->list){ ?><ul>
						<?php $__Context->i = 0 ?>
						<?php if($__Context->FNB->list&&count($__Context->FNB->list))foreach($__Context->FNB->list as $__Context->key1=>$__Context->val1){ ?><li<?php if(!($__Context->i % 6) && $__Context->i > 0){ ?> class="clear"<?php } ?>>
							<?php $__Context->i++ ?>
							<a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window'] == 'Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a>
						</li><?php } ?>
					</ul><?php } ?>
				</div>
			</div>
		</div>
		<div class="f_cr_area">
			<div class="copyright">
					<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/xe_funeral/demo','copyright.html') ?>
			</div>
		</div>
	</footer>
</div>
<!-- TOP -->
<a href="#" class="btn_top"><i class="xi-angle-up"><span class="blind"><?php echo $__Context->lang->cmd_move_up ?></span></i></a>
<!-- /TOP -->
<!-- Login widget -->
<?php if($__Context->layout_info->use_login_widget != 'N'){ ?><section class="login_widget"<?php if($__Context->XE_VALIDATOR_ID != 'layouts/xedition/layout/1' || !$__Context->XE_VALIDATOR_MESSAGE){ ?> style="display:none"<?php } ?>>
	<!--#Meta:layouts/xe_funeral/css/widget.login.css--><?php $__tmp=array('layouts/xe_funeral/css/widget.login.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
	<div class="ly_dimmed"></div>
	<div class="signin">
		<div class="login-header">
			<h1>LOGIN</h1>
		</div>
		<div class="login-body">
			<form action="<?php echo getUrl('', 'act', 'procMemberLogin') ?>" method="post" autocomplete="off"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
				<input type="hidden" name="act" value="procMemberLogin" />
				<input type="hidden" name="success_return_url" value="<?php echo getCurrentPageUrl() ?>" />
				<input type="hidden" name="xe_validator_id" value="layouts/xedition/layout/1" />
				<fieldset>
					<legend class="blind"><?php echo $__Context->lang->cmd_login ?></legend>
					<div class="control-group">
						<div class="group">
							<input type="text" name="user_id" id="uemail" required="true" />
							<span class="highlight"></span>
							<span class="bar"></span>
							<label class="info_label" for="uemail"><?php echo $__Context->lang->user_id ?></label>
						</div>
						<div class="group">
							<input type="password" name="password" id="upw" required="true" />
							<span class="highlight"></span>
							<span class="bar"></span>
							<label class="info_label" for="upw"><?php echo $__Context->lang->password ?></label>
						</div>
					</div>
					<?php if($__Context->XE_VALIDATOR_ID == 'layouts/xedition/layout/1' && $__Context->XE_VALIDATOR_MESSAGE){ ?><div class="control-group">
						<p class="error"><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
					</div><?php } ?>
					<div class="control-group">
						<label class="chk_label" for="keepid_opt">
							<input type="checkbox" name="keep_signed" id="keepid_opt" value="Y" />
							<span class="checkbox"></span> <?php echo $__Context->lang->keep_signed ?>
						</label>
						<div id="warning">
							<p style="text-align:right;"><i class="xi-close"></i></p>
							<p><?php echo str_replace('\n\n', '<br />', $__Context->lang->about_keep_signed) ?></p>
							<div class="edge"></div>
						</div>
						<button type="submit" class="btn_submit"><?php echo $__Context->lang->cmd_login ?></button>
					</div>
				</fieldset>
			</form>
		</div>
		<div class="login-footer">
			<a href="<?php echo getUrl('act', 'dispMemberFindAccount') ?>"><?php echo $__Context->lang->cmd_find_member_account ?></a>
			<span class="f_bar">|</span>
			<a href="<?php echo getUrl('act', 'dispMemberSignUpForm') ?>"><?php echo $__Context->lang->cmd_signup ?></a>
		</div>
		<a href="#" class="btn_ly_popup"><span class="blind">닫기</span></a>
	</div>
	<script>
	jQuery(function ($) {
		var keep_msg = $("#warning");
		$(".chk_label").on("mouseenter mouseleave focusin focusout", function (e) {
			if(e.type == "mouseenter" || e.type == "focusin") {
				keep_msg.show();
			}
			else {
				keep_msg.hide();
			}
		});
		$("#ly_login_btn, #ly_btn").click(function () {
			$(".login_widget").show();
			return false;
		});
		$(".btn_ly_popup").click(function () {
			$(".login_widget").hide();
			return false;
		});
		$("input").blur(function () {
			var $this = $(this);
			if ($this.val()) {
				$this.addClass("used");
			}
			else {
				$this.removeClass("used");
			}
		});
	});
	</script>
</section><?php } ?>
<!-- /Login widget -->    
<?php if($__Context->_enable_slide){ ?><script>
jQuery(document).ready(function () {
	var swiper = new Swiper('.swiper-container', {
	    autoplay: 6000,
	    loop: true,
	    pagination: '.swiper-pagination',
	    paginationClickable: true
	});
	jQuery('.swiper-button-next').on('click', function(e){
		e.preventDefault();
		swiper.swipeNext();
	});
	jQuery('.swiper-button-prev').on('click', function(e){
		e.preventDefault();
		swiper.swipePrev();
	});
});
</script><?php } ?>
