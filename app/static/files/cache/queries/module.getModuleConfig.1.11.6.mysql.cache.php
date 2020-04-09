<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleConfig");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module)) {
${'module53_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module53_argument'}->createConditionValue();
if(!${'module53_argument'}->isValid()) return ${'module53_argument'}->getErrorMessage();
} else
${'module53_argument'} = NULL;if(${'module53_argument'} !== null) ${'module53_argument'}->setColumnType('varchar');
if(isset($args->site_srl)) {
${'site_srl54_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl54_argument'}->createConditionValue();
if(!${'site_srl54_argument'}->isValid()) return ${'site_srl54_argument'}->getErrorMessage();
} else
${'site_srl54_argument'} = NULL;if(${'site_srl54_argument'} !== null) ${'site_srl54_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`config`')
));
$query->setTables(array(
new Table('`xe_module_config`', '`module_config`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module53_argument,"equal")
,new ConditionWithArgument('`site_srl`',$site_srl54_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>