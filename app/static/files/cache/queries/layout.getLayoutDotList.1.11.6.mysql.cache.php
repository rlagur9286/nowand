<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLayoutDotList");
$query->setAction("select");
$query->setPriority("");

${'site_srl55_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl55_argument'}->checkFilter('number');
${'site_srl55_argument'}->ensureDefaultValue('0');
${'site_srl55_argument'}->checkNotNull();
${'site_srl55_argument'}->createConditionValue();
if(!${'site_srl55_argument'}->isValid()) return ${'site_srl55_argument'}->getErrorMessage();
if(${'site_srl55_argument'} !== null) ${'site_srl55_argument'}->setColumnType('number');

${'layout_type56_argument'} = new ConditionArgument('layout_type', $args->layout_type, 'equal');
${'layout_type56_argument'}->ensureDefaultValue('P');
${'layout_type56_argument'}->createConditionValue();
if(!${'layout_type56_argument'}->isValid()) return ${'layout_type56_argument'}->getErrorMessage();
if(${'layout_type56_argument'} !== null) ${'layout_type56_argument'}->setColumnType('char');

${'layout57_argument'} = new ConditionArgument('layout', $args->layout, 'like');
${'layout57_argument'}->ensureDefaultValue('.');
${'layout57_argument'}->createConditionValue();
if(!${'layout57_argument'}->isValid()) return ${'layout57_argument'}->getErrorMessage();
if(${'layout57_argument'} !== null) ${'layout57_argument'}->setColumnType('varchar');

${'sort_index58_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index58_argument'}->ensureDefaultValue('layout_srl');
if(!${'sort_index58_argument'}->isValid()) return ${'sort_index58_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl55_argument,"equal")
,new ConditionWithArgument('`layout_type`',$layout_type56_argument,"equal", 'and')
,new ConditionWithArgument('`layout`',$layout57_argument,"like", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index58_argument'}, "desc")
));
$query->setLimit();
return $query; ?>