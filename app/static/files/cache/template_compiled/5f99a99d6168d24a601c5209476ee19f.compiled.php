<?php if(!defined("__XE__"))exit;?><div class="x_page-header">
	<h1>SEO</h1>
</div>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<div>
	<ul class="x_nav x_nav-tabs">
		<li<?php if($__Context->act == 'dispSeoAdminSetting' && $__Context->setting_section == 'general'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispSeoAdminSetting', 'setting_section','general') ?>">기본 설정</a></li>
		<li<?php if($__Context->act == 'dispSeoAdminSetting' && $__Context->setting_section == 'analytics'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispSeoAdminSetting', 'setting_section','analytics') ?>">Analytics</a></li>
		<li<?php if($__Context->act == 'dispSeoAdminSetting' && $__Context->setting_section == 'miscellaneous'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispSeoAdminSetting', 'setting_section','miscellaneous') ?>">기타</a></li>
	</ul>
</div>
