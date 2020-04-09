<?php if(!defined("__XE__"))exit;?><!--#Meta:widgets/contentslider/skins/bxSlider/js/jquery.bxSlider.js--><?php $__tmp=array('widgets/contentslider/skins/bxSlider/js/jquery.bxSlider.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:widgets/contentslider/skins/prettyPhoto/prettyPhoto.css--><?php $__tmp=array('widgets/contentslider/skins/prettyPhoto/prettyPhoto.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:widgets/contentslider/skins/prettyPhoto/jquery.prettyPhoto.js--><?php $__tmp=array('widgets/contentslider/skins/prettyPhoto/jquery.prettyPhoto.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->colorset=="Multiple_Slides"){ ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('widgets/contentslider/skins/bxSlider','Multiple_Slides.html') ?>
<?php }elseif($__Context->colorset=="Article_Slides"){ ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('widgets/contentslider/skins/bxSlider','Article_Slides.html') ?>
<?php }elseif($__Context->colorset=="Auto_Fade"){ ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('widgets/contentslider/skins/bxSlider','Auto_Fade.html') ?>
<?php }elseif($__Context->colorset=="Slide_News"){ ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('widgets/contentslider/skins/bxSlider','Slide_News.html') ?>
<?php }else{ ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('widgets/contentslider/skins/bxSlider','Vertical_Slides.html') ?>
<?php } ?>
