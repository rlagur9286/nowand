<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLayoutDotList");
$query->setAction("select");
$query->setPriority("");

${'site_srl1_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl1_argument'}->checkFilter('number');
${'site_srl1_argument'}->ensureDefaultValue('0');
${'site_srl1_argument'}->checkNotNull();
${'site_srl1_argument'}->createConditionValue();
if(!${'site_srl1_argument'}->isValid()) return ${'site_srl1_argument'}->getErrorMessage();
if(${'site_srl1_argument'} !== null) ${'site_srl1_argument'}->setColumnType('number');

${'layout_type2_argument'} = new ConditionArgument('layout_type', $args->layout_type, 'equal');
${'layout_type2_argument'}->ensureDefaultValue('P');
${'layout_type2_argument'}->createConditionValue();
if(!${'layout_type2_argument'}->isValid()) return ${'layout_type2_argument'}->getErrorMessage();
if(${'layout_type2_argument'} !== null) ${'layout_type2_argument'}->setColumnType('char');

${'layout3_argument'} = new ConditionArgument('layout', $args->layout, 'like');
${'layout3_argument'}->ensureDefaultValue('.');
${'layout3_argument'}->createConditionValue();
if(!${'layout3_argument'}->isValid()) return ${'layout3_argument'}->getErrorMessage();
if(${'layout3_argument'} !== null) ${'layout3_argument'}->setColumnType('varchar');

${'sort_index4_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index4_argument'}->ensureDefaultValue('layout_srl');
if(!${'sort_index4_argument'}->isValid()) return ${'sort_index4_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl1_argument,"equal")
,new ConditionWithArgument('`layout_type`',$layout_type2_argument,"equal", 'and')
,new ConditionWithArgument('`layout`',$layout3_argument,"like", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index4_argument'}, "desc")
));
$query->setLimit();
return $query; ?>