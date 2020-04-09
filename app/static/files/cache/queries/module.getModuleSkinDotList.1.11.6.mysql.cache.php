<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleSkinDotList");
$query->setAction("select");
$query->setPriority("");

${'skin60_argument'} = new ConditionArgument('skin', $args->skin, 'like');
${'skin60_argument'}->ensureDefaultValue('.');
${'skin60_argument'}->createConditionValue();
if(!${'skin60_argument'}->isValid()) return ${'skin60_argument'}->getErrorMessage();
if(${'skin60_argument'} !== null) ${'skin60_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`module`')
,new SelectExpression('`skin`')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`skin`',$skin60_argument,"like")))
));
$query->setGroups(array(
'`skin`' ));
$query->setOrder(array());
$query->setLimit();
return $query; ?>