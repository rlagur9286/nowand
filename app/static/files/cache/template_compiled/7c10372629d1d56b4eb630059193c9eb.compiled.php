<?php if(!defined("__XE__"))exit;
$__Context->page_id = "Galleriffic_page_".mt_rand() ?>
<?php $__Context->slider_img_width=$__Context->widget_info->slider_img_width+($__Context->widget_info->slider_img_bdsize*2) ?>
<?php $__Context->slider_img_height=$__Context->widget_info->slider_img_height+($__Context->widget_info->slider_img_bdsize*2) ?>
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
<?php $__Context->captionheight = 0 ?>
<?php if($__Context->widget_info->show_title=='Y'){ ?>
<?php $__Context->captionheight = $__Context->captionheight+$__Context->grf2TiHT ?>
<?php } ?>
<?php if($__Context->widget_info->show_content=='Y'){ ?>
<?php $__Context->captionheight = $__Context->captionheight+$__Context->grf2ConHT ?>
<?php } ?>
<?php if($__Context->widget_info->show_control=='Y' || $__Context->widget_info->navigation_control=='Y'){ ?>
<?php $__Context->slider_height = $__Context->widget_info->slider_img_height+30 ?>
<?php } ?>
<?php if($__Context->colorset=="Left"){ ?>
<?php $__Context->slider_width=$__Context->slider_img_width+10+$__Context->widget_info->navigation_size ?>
<?php $__Context->slider_height = $__Context->widget_info->slider_img_height+$__Context->captionheight+30 ?>
<?php }elseif($__Context->colorset=="Right"){ ?>
<?php $__Context->slider_width=$__Context->slider_img_width+$__Context->widget_info->navigation_size ?>
<?php $__Context->slider_height = $__Context->widget_info->slider_img_height+$__Context->captionheight+30 ?>
<?php }elseif($__Context->colorset=="Top"){ ?>
<?php $__Context->slider_width=$__Context->slider_img_width+$__Context->widget_info->navigation_size ?>
<?php $__Context->slider_height = $__Context->slider_height+$__Context->widget_info->thumbnail_height+10 ?>
<?php }else{ ?>
<?php $__Context->slider_width=$__Context->slider_img_width+$__Context->widget_info->navigation_size ?>
<?php $__Context->slider_height = $__Context->slider_height+$__Context->widget_info->thumbnail_height+10 ?>
<?php } ?>
<style type="text/css">
#<?php echo $__Context->page_id ?> {
	display: block;
	overflow: hidden;
	position: relative;
	padding: 5px;
	margin: 0 auto;
	width: <?php echo $__Context->slider_width ?>px; /* 전체 넓이 */
	height: <?php echo $__Context->slider_height ?>px; /* 전체 높이 */
	border:solid 1px;
	border-color:#dacaae;
	background-color:#FBFDF1;
	text-align:justify;
	clear: both;
}
#<?php echo $__Context->page_id ?> h3 { margin:10px; text-align: center; width:100%; vertical-align: middle; color:red;font-family:Tahoma;font-size:9pt; }
#<?php echo $__Context->page_id ?> p { margin:5px; text-align: center; width:100%; vertical-align: middle; color:blue;font-family:Tahoma;font-size:9pt; }
#<?php echo $__Context->page_id ?> li { margin:10px; width:100%; vertical-align: middle; color:red;font-family:Tahoma;font-size:9pt; }
#<?php echo $__Context->colorset ?>_Slides{position:absolute;bottom:56px;right:18px;background:#fff;border: 1px solid #E1E1E1;width:300px;padding: 10px;}
#option_<?php echo $__Context->page_id ?> {background: #F6F6F6;border: 1px solid #E1E1E1;color:red;font-family:Tahoma;font-size:9pt;display: block;
	text-align: center;width:150px;padding: 5px 7px;position:absolute;bottom:17px;right:17px;
	-moz-border-radius: 2px;
	-webkit-border-radius: 2px;
	border-radius: 2px;
}
.textE1 {color:red;font-family:Tahoma;font-size:9pt;text-decoration:blink;text-transform:capitalize;}
</style>
<div id="<?php echo $__Context->page_id ?>" style="color:#99B81A">
	<TABLE cellSpacing="0" cellPadding="11px" width="100%" height="100%" border="0">
	<TBODY>
	<TR>
	<TD style="border:solid 1px;border-color:#FFFFFF;background-color:#f5f1e8;">
		<TABLE cellSpacing="0" cellPadding="15px" width="100%" height="100%" border="0">
		<TBODY>
		<TR>
		<TD bgColor="#fcfaf7" align="center">
			<font color=#977334>
			<h3>Galleriffic Display Area</h3>
			<p>실제 출력 크기와 약간의 차이가 있을 수 있습니다.</p>
			</font>
			<span id="option_<?php echo $__Context->page_id ?>" 
			onclick="document.getElementById('<?php echo $__Context->colorset ?>_Slides').style.display = 'block'" onmouseover="document.getElementById('<?php echo $__Context->colorset ?>_Slides').style.display = 'block'" onmouseout="document.getElementById('<?php echo $__Context->colorset ?>_Slides').style.display = 'none'" style="CURSOR:hand">적용되는 옵션 확인하기</span>
		</TD>
		</TR>
		</TBODY>
		</TABLE>
	</TD>
	</TR>
	</TBODY>
	</TABLE>
</div>
<div id="<?php echo $__Context->colorset ?>_Slides" title="Galleriffic : <?php echo $__Context->colorset ?>" style="display:none;">
	<p>적용된 옵션</p>
	<li>슬라이드 총 갯수 : <?php echo $__Context->widget_info->list_count ?></li>
	<li class="textE1">슬라이드 크기 : <?php echo $__Context->widget_info->slider_img_width ?>, <?php echo $__Context->widget_info->slider_img_height ?></li>
	<li class="textE1">네비게이션 가로 넓이 : <?php echo $__Context->widget_info->navigation_size ?></li>
	<li>컨트롤 버튼 표시 : <?php if($__Context->widget_info->show_control=='Y'){ ?>출력(기본)<?php }else{ ?>출력안함<?php } ?></li>
	<li>페이지 버튼 표시 : <?php if($__Context->widget_info->navigation_control=='Y'){ ?>출력(기본)<?php }else{ ?>출력안함<?php } ?></li>
	<li>게시물 순서 섞기 : <?php if($__Context->widget_info->content_items_shuffle=='Y'){ ?>예(기본)<?php }else{ ?>아니오<?php } ?></li>
	<li>이미지 클릭 대상 : <?php if($__Context->widget_info->open_article=='Y'){ ?>게시글<?php }elseif($__Context->widget_info->open_article=='Z'){ ?>원본이미지<?php }else{ ?>사용안함<?php } ?></li>
	<li>슬라이드 속도 : <?php echo $__Context->widget_info->slide_delay ?></li>
	<li>제목 표시 : <?php if($__Context->widget_info->show_title=='Y'){ ?>출력(기본)<?php }else{ ?>출력안함<?php } ?></li>
	<li>내용 표시 : <?php if($__Context->widget_info->show_content=='Y'){ ?>출력(기본)<?php }else{ ?>출력안함<?php } ?></li>
	<li>썸네일 크기 : <?php echo $__Context->widget_info->thumbnail_width ?>, <?php echo $__Context->widget_info->thumbnail_height ?></li>
	<li class="textE1">썸네일 이미지 수 : <?php echo $__Context->widget_info->cols_list_count ?></li>
	<li>썸네일 테두리 두께, 색</li>
</div>
