<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMenuItem");
$query->setAction("insert");
$query->setPriority("");

${'menu_item_srl27_argument'} = new Argument('menu_item_srl', $args->{'menu_item_srl'});
${'menu_item_srl27_argument'}->checkFilter('number');
${'menu_item_srl27_argument'}->checkNotNull();
if(!${'menu_item_srl27_argument'}->isValid()) return ${'menu_item_srl27_argument'}->getErrorMessage();
if(${'menu_item_srl27_argument'} !== null) ${'menu_item_srl27_argument'}->setColumnType('number');

${'parent_srl28_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
${'parent_srl28_argument'}->checkFilter('number');
${'parent_srl28_argument'}->ensureDefaultValue('0');
if(!${'parent_srl28_argument'}->isValid()) return ${'parent_srl28_argument'}->getErrorMessage();
if(${'parent_srl28_argument'} !== null) ${'parent_srl28_argument'}->setColumnType('number');

${'menu_srl29_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl29_argument'}->checkFilter('number');
${'menu_srl29_argument'}->checkNotNull();
if(!${'menu_srl29_argument'}->isValid()) return ${'menu_srl29_argument'}->getErrorMessage();
if(${'menu_srl29_argument'} !== null) ${'menu_srl29_argument'}->setColumnType('number');

${'name30_argument'} = new Argument('name', $args->{'name'});
${'name30_argument'}->checkNotNull();
if(!${'name30_argument'}->isValid()) return ${'name30_argument'}->getErrorMessage();
if(${'name30_argument'} !== null) ${'name30_argument'}->setColumnType('text');
if(isset($args->desc)) {
${'desc31_argument'} = new Argument('desc', $args->{'desc'});
if(!${'desc31_argument'}->isValid()) return ${'desc31_argument'}->getErrorMessage();
} else
${'desc31_argument'} = NULL;if(${'desc31_argument'} !== null) ${'desc31_argument'}->setColumnType('varchar');
if(isset($args->url)) {
${'url32_argument'} = new Argument('url', $args->{'url'});
if(!${'url32_argument'}->isValid()) return ${'url32_argument'}->getErrorMessage();
} else
${'url32_argument'} = NULL;if(${'url32_argument'} !== null) ${'url32_argument'}->setColumnType('varchar');

${'is_shortcut33_argument'} = new Argument('is_shortcut', $args->{'is_shortcut'});
${'is_shortcut33_argument'}->ensureDefaultValue('N');
${'is_shortcut33_argument'}->checkNotNull();
if(!${'is_shortcut33_argument'}->isValid()) return ${'is_shortcut33_argument'}->getErrorMessage();
if(${'is_shortcut33_argument'} !== null) ${'is_shortcut33_argument'}->setColumnType('char');
if(isset($args->open_window)) {
${'open_window34_argument'} = new Argument('open_window', $args->{'open_window'});
if(!${'open_window34_argument'}->isValid()) return ${'open_window34_argument'}->getErrorMessage();
} else
${'open_window34_argument'} = NULL;if(${'open_window34_argument'} !== null) ${'open_window34_argument'}->setColumnType('char');
if(isset($args->expand)) {
${'expand35_argument'} = new Argument('expand', $args->{'expand'});
if(!${'expand35_argument'}->isValid()) return ${'expand35_argument'}->getErrorMessage();
} else
${'expand35_argument'} = NULL;if(${'expand35_argument'} !== null) ${'expand35_argument'}->setColumnType('char');
if(isset($args->normal_btn)) {
${'normal_btn36_argument'} = new Argument('normal_btn', $args->{'normal_btn'});
if(!${'normal_btn36_argument'}->isValid()) return ${'normal_btn36_argument'}->getErrorMessage();
} else
${'normal_btn36_argument'} = NULL;if(${'normal_btn36_argument'} !== null) ${'normal_btn36_argument'}->setColumnType('varchar');
if(isset($args->hover_btn)) {
${'hover_btn37_argument'} = new Argument('hover_btn', $args->{'hover_btn'});
if(!${'hover_btn37_argument'}->isValid()) return ${'hover_btn37_argument'}->getErrorMessage();
} else
${'hover_btn37_argument'} = NULL;if(${'hover_btn37_argument'} !== null) ${'hover_btn37_argument'}->setColumnType('varchar');
if(isset($args->active_btn)) {
${'active_btn38_argument'} = new Argument('active_btn', $args->{'active_btn'});
if(!${'active_btn38_argument'}->isValid()) return ${'active_btn38_argument'}->getErrorMessage();
} else
${'active_btn38_argument'} = NULL;if(${'active_btn38_argument'} !== null) ${'active_btn38_argument'}->setColumnType('varchar');
if(isset($args->group_srls)) {
${'group_srls39_argument'} = new Argument('group_srls', $args->{'group_srls'});
if(!${'group_srls39_argument'}->isValid()) return ${'group_srls39_argument'}->getErrorMessage();
} else
${'group_srls39_argument'} = NULL;if(${'group_srls39_argument'} !== null) ${'group_srls39_argument'}->setColumnType('text');

${'listorder40_argument'} = new Argument('listorder', $args->{'listorder'});
${'listorder40_argument'}->checkNotNull();
if(!${'listorder40_argument'}->isValid()) return ${'listorder40_argument'}->getErrorMessage();
if(${'listorder40_argument'} !== null) ${'listorder40_argument'}->setColumnType('number');

${'regdate41_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate41_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate41_argument'}->isValid()) return ${'regdate41_argument'}->getErrorMessage();
if(${'regdate41_argument'} !== null) ${'regdate41_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`menu_item_srl`', ${'menu_item_srl27_argument'})
,new InsertExpression('`parent_srl`', ${'parent_srl28_argument'})
,new InsertExpression('`menu_srl`', ${'menu_srl29_argument'})
,new InsertExpression('`name`', ${'name30_argument'})
,new InsertExpression('`desc`', ${'desc31_argument'})
,new InsertExpression('`url`', ${'url32_argument'})
,new InsertExpression('`is_shortcut`', ${'is_shortcut33_argument'})
,new InsertExpression('`open_window`', ${'open_window34_argument'})
,new InsertExpression('`expand`', ${'expand35_argument'})
,new InsertExpression('`normal_btn`', ${'normal_btn36_argument'})
,new InsertExpression('`hover_btn`', ${'hover_btn37_argument'})
,new InsertExpression('`active_btn`', ${'active_btn38_argument'})
,new InsertExpression('`group_srls`', ${'group_srls39_argument'})
,new InsertExpression('`listorder`', ${'listorder40_argument'})
,new InsertExpression('`regdate`', ${'regdate41_argument'})
));
$query->setTables(array(
new Table('`xe_menu_item`', '`menu_item`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>