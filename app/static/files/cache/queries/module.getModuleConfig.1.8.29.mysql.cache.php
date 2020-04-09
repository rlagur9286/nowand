<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleConfig");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module)) {
${'module9_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module9_argument'}->createConditionValue();
if(!${'module9_argument'}->isValid()) return ${'module9_argument'}->getErrorMessage();
} else
${'module9_argument'} = NULL;if(${'module9_argument'} !== null) ${'module9_argument'}->setColumnType('varchar');
if(isset($args->site_srl)) {
${'site_srl10_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl10_argument'}->createConditionValue();
if(!${'site_srl10_argument'}->isValid()) return ${'site_srl10_argument'}->getErrorMessage();
} else
${'site_srl10_argument'} = NULL;if(${'site_srl10_argument'} !== null) ${'site_srl10_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`config`')
));
$query->setTables(array(
new Table('`xe_module_config`', '`module_config`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module9_argument,"equal")
,new ConditionWithArgument('`site_srl`',$site_srl10_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>