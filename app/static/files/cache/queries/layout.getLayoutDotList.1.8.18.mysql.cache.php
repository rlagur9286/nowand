<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLayoutDotList");
$query->setAction("select");
$query->setPriority("");

${'site_srl45_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl45_argument'}->checkFilter('number');
${'site_srl45_argument'}->ensureDefaultValue('0');
${'site_srl45_argument'}->checkNotNull();
${'site_srl45_argument'}->createConditionValue();
if(!${'site_srl45_argument'}->isValid()) return ${'site_srl45_argument'}->getErrorMessage();
if(${'site_srl45_argument'} !== null) ${'site_srl45_argument'}->setColumnType('number');

${'layout_type46_argument'} = new ConditionArgument('layout_type', $args->layout_type, 'equal');
${'layout_type46_argument'}->ensureDefaultValue('P');
${'layout_type46_argument'}->createConditionValue();
if(!${'layout_type46_argument'}->isValid()) return ${'layout_type46_argument'}->getErrorMessage();
if(${'layout_type46_argument'} !== null) ${'layout_type46_argument'}->setColumnType('char');

${'layout47_argument'} = new ConditionArgument('layout', $args->layout, 'like');
${'layout47_argument'}->ensureDefaultValue('.');
${'layout47_argument'}->createConditionValue();
if(!${'layout47_argument'}->isValid()) return ${'layout47_argument'}->getErrorMessage();
if(${'layout47_argument'} !== null) ${'layout47_argument'}->setColumnType('varchar');

${'sort_index48_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index48_argument'}->ensureDefaultValue('layout_srl');
if(!${'sort_index48_argument'}->isValid()) return ${'sort_index48_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl45_argument,"equal")
,new ConditionWithArgument('`layout_type`',$layout_type46_argument,"equal", 'and')
,new ConditionWithArgument('`layout`',$layout47_argument,"like", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index48_argument'}, "desc")
));
$query->setLimit();
return $query; ?>