<?php if(!defined("__XE__"))exit;?><!--#Meta:widgets/contentslider/skins/Galleriffic/js/jquery.galleriffic.js--><?php $__tmp=array('widgets/contentslider/skins/Galleriffic/js/jquery.galleriffic.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:widgets/contentslider/skins/Galleriffic/js/jquery.opacityrollover.js--><?php $__tmp=array('widgets/contentslider/skins/Galleriffic/js/jquery.opacityrollover.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:widgets/contentslider/skins/prettyPhoto/prettyPhoto.css--><?php $__tmp=array('widgets/contentslider/skins/prettyPhoto/prettyPhoto.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:widgets/contentslider/skins/prettyPhoto/jquery.prettyPhoto.js--><?php $__tmp=array('widgets/contentslider/skins/prettyPhoto/jquery.prettyPhoto.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->colorset=="Left"){ ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('widgets/contentslider/skins/Galleriffic','Left.html') ?>
<?php }elseif($__Context->colorset=="Right"){ ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('widgets/contentslider/skins/Galleriffic','Right.html') ?>
<?php }elseif($__Context->colorset=="Top"){ ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('widgets/contentslider/skins/Galleriffic','Top.html') ?>
<?php }else{ ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('widgets/contentslider/skins/Galleriffic','Bottom.html') ?>
<?php } ?>
