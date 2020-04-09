<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/seo/tpl','_AdminHeader.html') ?>
<?php Context::addJsFile("modules/seo/ruleset/saveSetting.xml", FALSE, "", 0, "body", TRUE, "") ?><form action="./" class="x_form-horizontal"  method="post" enctype="multipart/form-data"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="saveSetting" />
	<input type="hidden" name="module" value="seo" />
	<input type="hidden" name="act" value="procSeoAdminSaveSetting" />
	<input type="hidden" name="setting_section" value="<?php echo $__Context->setting_section ?>" />
	<input type="hidden" name="success_return_url" value="<?php echo getUrl('act', $__Context->act) ?>" />
	
	<?php if($__Context->setting_section == 'general'){ ?>
		<?php  $__Context->use_multilang = true ?>
		<section class="section default">
			<h1>기본 설정</h1>
			<div class="x_control-group default">
				<label for="enable" class="x_control-label">기능 활성화</label>
				<div class="x_controls">
					<label><input type="checkbox" name="enable" id="enable" value="Y"<?php if($__Context->config->enable == 'Y'){ ?> checked="checked"<?php } ?> /> 검색엔진 최적화 기능 사용</label>
				</div>
			</div>
			<div class="x_control-group">
				<label class="x_control-label" for="site_image">사이트 대표 이미지</label>
				<div class="x_controls">
					<input type="file" name="site_image" id="site_image" />
					<p class="x_help-block">페이스북 공유 시 문서에 이미지가 없으면 기본 이미지로 사용됩니다. (추천 : 1200x600, 600x315, 200x200)</p>
					<?php if($__Context->config->site_image_url){ ?><div class="x_thumbnail">
						<img src="<?php echo $__Context->config->site_image_url ?>" alt="지정된 사이트 대표 이미지" />
					</div><?php } ?>
				</div>
			</div>
		</section>
		<section class="section">
			<h1>문서 제목 최적화</h1>
			<p class="x_well x_well-small">
				<em class="x_label x_label-success">사용 권장</em> 사이트 이름 및 문서의 제목을 효과적으로 표시할 수 있습니다.
				<br>
				<br>
				<span class="x_label x_label-info">예시 - 메인 페이지</span> '사이트 이름 - 사이트 부제'
				<br>
				<span class="x_label x_label-info">예시 - 모듈 페이지</span> '페이지 제목 - 사이트 이름'
				<br>
				<span class="x_label x_label-info">예시 - 글(게시물)</span> '글 제목 - 사이트 이름'
			</p>
			<div class="x_control-group">
				<label for="use_optimize_title" class="x_control-label">문서 제목 최적화</label>
				<div class="x_controls">
					<label><input type="checkbox" name="use_optimize_title" id="use_optimize_title" value="Y"<?php if($__Context->config->use_optimize_title == 'Y'){ ?> checked="checked"<?php } ?> /> 문서 제목 최적화 기능 사용</label>
				</div>
			</div>
			<div class="x_control-group">
				<label class="x_control-label" for="lang_site_name">사이트 이름</label>
				<div class="x_controls">
					<input type="text" name="site_name" id="site_name" value="<?php if(strpos($__Context->config->site_name, '$user_lang->') === false){;
echo $__Context->config->site_name;
}else{;
echo htmlspecialchars($__Context->config->site_name);
} ?>" class="lang_code" />
					<p class="x_help-block">모든 페이지의 제목으로 사용되며 '모듈 브라우저 타이틀 - 사이트 이름' 또는 '글 제목 - 사이트 이름'과 같이 표시됩니다.</p>
				</div>
			</div>
			<div class="x_control-group">
				<label class="x_control-label" for="lang_site_slogan">사이트 부제</label>
				<div class="x_controls">
					<input type="text" name="site_slogan" id="site_slogan" value="<?php if(strpos($__Context->config->site_slogan, '$user_lang->') === false){;
echo $__Context->config->site_slogan;
}else{;
echo htmlspecialchars($__Context->config->site_slogan);
} ?>" class="lang_code" />
					<p class="x_help-block">사이트의 부제, 슬로건, 캐치프레이즈. 시작 페이지에서만 표시되며 '사이트 이름 - 사이트 부제'와 같이 표시됩니다.</p>
				</div>
			</div>
		</section>
		<section class="section">
			<h1>기본 메타태그</h1>
			<p class="x_well x_well-small">사이트 전역에 사용 될 <code>&lt;meta&gt;</code> 태그 설정.</p>
			<div class="x_control-group">
				<label class="x_control-label" for="lang_site_keywords">사이트 키워드 (keywords)</label>
				<div class="x_controls">
					<input type="text" name="site_keywords" id="site_keywords" value="<?php if(strpos($__Context->config->site_keywords, '$user_lang->') === false){;
echo $__Context->config->site_keywords;
}else{;
echo htmlspecialchars($__Context->config->site_keywords);
} ?>" class="lang_code x_input-xxlarge" />
					<p class="x_help-block">여러 키워드는 콤마(,)로 구분하여 입력하세요.</p>
				</div>
			</div>
			<div class="x_control-group">
				<label class="x_control-label" for="lang_site_description">사이트 설명 (description)</label>
				<div class="x_controls">
					<input type="text" name="site_description" id="site_description" value="<?php if(strpos($__Context->config->site_description, '$user_lang->') === false){;
echo $__Context->config->site_description;
}else{;
echo htmlspecialchars($__Context->config->site_description);
} ?>" class="lang_code x_input-xxlarge" />
					<p class="x_help-block">사이트의 주제에 관한 설명. 200자 미만으로 너무 길지 않고 의도적으로 너무 많은 키워드를 반복하는 것은 좋지 않습니다.</p>
				</div>
			</div>
		</section>
	<?php } ?>
	
	<?php if($__Context->setting_section == 'analytics'){ ?>
		<section class="section">
			<h1>Google</h1>
			<p class="x_well">
				Google Analytics 추적 코드를 자동으로 삽입하고, 최적화 된 URL을 추적하도록 돕습니다.<br>
				<span class="x_label x_label-important">Important</span> 이미 추적 코드를 사용 중이면 삽입한 추적 코드를 제거하거나 이 설정을 입력하지 마세요.
			</p>
			<div class="x_control-group">
				<label class="x_control-label" for="ga_id">속성 ID</label>
				<div class="x_controls">
					<input type="text" name="ga_id" id="ga_id" value="<?php echo $__Context->config->ga_id ?>" placeholder="UA-XXXXXXXX-X" />
				</div>
			</div>
			<div class="x_control-group">
				<label class="x_control-label" for="ga_except_admin">관리자 제외</label>
				<div class="x_controls">
					<label><input type="checkbox" name="ga_except_admin" id="ga_except_admin" value="Y"<?php if($__Context->config->ga_except_admin == 'Y'){ ?> checked="checked"<?php } ?> /> 관리자 접속 시 추적 코드를 사용하지 않음</label>
				</div>
			</div>
		</section>
		<section class="section">
			<h1>NAVER</h1>
			<p class="x_well">
				Naver Analytics 추적 코드를 자동으로 삽입합니다.<br>
				<span class="x_label x_label-important">Important</span> 이미 추적 코드를 사용 중이면 삽입한 추적 코드를 제거하거나 이 설정을 입력하지 마세요.
			</p>
			<div class="x_control-group">
				<label class="x_control-label" for="na_id">발급 ID</label>
				<div class="x_controls">
					<input type="text" name="na_id" id="na_id" value="<?php echo $__Context->config->na_id ?>" />
				</div>
			</div>
			<div class="x_control-group">
				<label class="x_control-label" for="na_except_admin">관리자 제외</label>
				<div class="x_controls">
					<label><input type="checkbox" name="na_except_admin" id="na_except_admin" value="Y"<?php if($__Context->config->na_except_admin == 'Y'){ ?> checked="checked"<?php } ?> /> 관리자 접속 시 추적 코드를 사용하지 않음</label>
				</div>
			</div>
		</section>
	<?php } ?>
	
	<?php if($__Context->setting_section == 'miscellaneous'){ ?>
		<section class="section <?php if(false && !$__Context->config->fb_app_id && !$__Context->config->fb_admins){ ?>collapsed<?php } ?>">
			<h1>Facebook</h1>
			<p class="x_well x_well-small">페이스북 앱 연동 설정이 필요한 때 활용할 수 있습니다.</p>
			<div class="x_control-group">
				<label class="x_control-label" for="fb_app_id">Facebook App ID</label>
				<div class="x_controls">
					<input type="text" name="fb_app_id" id="fb_app_id" value="<?php echo $__Context->config->fb_app_id ?>" />
					<p class="x_help-inline">페이스북 앱의 app_id</p>
				</div>
			</div>
			<div class="x_control-group">
				<label class="x_control-label" for="fb_admins">Facebook Admin</label>
				<div class="x_controls">
					<input type="text" name="fb_admins" id="fb_admins" value="<?php echo $__Context->config->fb_admins ?>" />
					<p class="x_help-block">페이스북 앱의 관리자. 이메일이나 페이스북의 개인 주소가 아닌 숫자로 된 고유ID를 입력해야 합니다. 여러명을 지정 시 콤마(,)로 구분.</p>
				</div>
			</div>
		</section>
	<?php } ?>
	<div class="x_clearfix btnArea">
		<div class="x_pull-right">
			<button class="x_btn x_btn-primary" type="submit"><?php echo $__Context->lang->cmd_save ?></button>
		</div>
	</div>
</form>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/module/tpl','include.multilang.html') ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/module/tpl','include.multilang.textarea.html') ?>
