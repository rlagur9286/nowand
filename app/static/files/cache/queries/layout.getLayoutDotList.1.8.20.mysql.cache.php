<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLayoutDotList");
$query->setAction("select");
$query->setPriority("");

${'site_srl52_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl52_argument'}->checkFilter('number');
${'site_srl52_argument'}->ensureDefaultValue('0');
${'site_srl52_argument'}->checkNotNull();
${'site_srl52_argument'}->createConditionValue();
if(!${'site_srl52_argument'}->isValid()) return ${'site_srl52_argument'}->getErrorMessage();
if(${'site_srl52_argument'} !== null) ${'site_srl52_argument'}->setColumnType('number');

${'layout_type53_argument'} = new ConditionArgument('layout_type', $args->layout_type, 'equal');
${'layout_type53_argument'}->ensureDefaultValue('P');
${'layout_type53_argument'}->createConditionValue();
if(!${'layout_type53_argument'}->isValid()) return ${'layout_type53_argument'}->getErrorMessage();
if(${'layout_type53_argument'} !== null) ${'layout_type53_argument'}->setColumnType('char');

${'layout54_argument'} = new ConditionArgument('layout', $args->layout, 'like');
${'layout54_argument'}->ensureDefaultValue('.');
${'layout54_argument'}->createConditionValue();
if(!${'layout54_argument'}->isValid()) return ${'layout54_argument'}->getErrorMessage();
if(${'layout54_argument'} !== null) ${'layout54_argument'}->setColumnType('varchar');

${'sort_index55_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index55_argument'}->ensureDefaultValue('layout_srl');
if(!${'sort_index55_argument'}->isValid()) return ${'sort_index55_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl52_argument,"equal")
,new ConditionWithArgument('`layout_type`',$layout_type53_argument,"equal", 'and')
,new ConditionWithArgument('`layout`',$layout54_argument,"like", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index55_argument'}, "desc")
));
$query->setLimit();
return $query; ?>