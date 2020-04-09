<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModulePartConfig");
$query->setAction("select");
$query->setPriority("");

${'module9_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module9_argument'}->checkNotNull();
${'module9_argument'}->createConditionValue();
if(!${'module9_argument'}->isValid()) return ${'module9_argument'}->getErrorMessage();
if(${'module9_argument'} !== null) ${'module9_argument'}->setColumnType('varchar');

${'module_srl10_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl10_argument'}->checkNotNull();
${'module_srl10_argument'}->createConditionValue();
if(!${'module_srl10_argument'}->isValid()) return ${'module_srl10_argument'}->getErrorMessage();
if(${'module_srl10_argument'} !== null) ${'module_srl10_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`config`')
));
$query->setTables(array(
new Table('`xe_module_part_config`', '`module_part_config`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module9_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl10_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>