<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMidInfo");
$query->setAction("select");
$query->setPriority("");
if(isset($args->mid)) {
${'mid4_argument'} = new ConditionArgument('mid', $args->mid, 'equal');
${'mid4_argument'}->createConditionValue();
if(!${'mid4_argument'}->isValid()) return ${'mid4_argument'}->getErrorMessage();
} else
${'mid4_argument'} = NULL;if(${'mid4_argument'} !== null) ${'mid4_argument'}->setColumnType('varchar');
if(isset($args->module_srl)) {
${'module_srl5_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl5_argument'}->createConditionValue();
if(!${'module_srl5_argument'}->isValid()) return ${'module_srl5_argument'}->getErrorMessage();
} else
${'module_srl5_argument'} = NULL;if(${'module_srl5_argument'} !== null) ${'module_srl5_argument'}->setColumnType('number');
if(isset($args->site_srl)) {
${'site_srl6_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl6_argument'}->createConditionValue();
if(!${'site_srl6_argument'}->isValid()) return ${'site_srl6_argument'}->getErrorMessage();
} else
${'site_srl6_argument'} = NULL;if(${'site_srl6_argument'} !== null) ${'site_srl6_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`mid`',$mid4_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl5_argument,"equal", 'and')
,new ConditionWithArgument('`site_srl`',$site_srl6_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>