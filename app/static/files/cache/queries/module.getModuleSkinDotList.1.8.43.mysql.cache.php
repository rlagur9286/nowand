<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleSkinDotList");
$query->setAction("select");
$query->setPriority("");

${'skin5_argument'} = new ConditionArgument('skin', $args->skin, 'like');
${'skin5_argument'}->ensureDefaultValue('.');
${'skin5_argument'}->createConditionValue();
if(!${'skin5_argument'}->isValid()) return ${'skin5_argument'}->getErrorMessage();
if(${'skin5_argument'} !== null) ${'skin5_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`module`')
,new SelectExpression('`skin`')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`skin`',$skin5_argument,"like")))
));
$query->setGroups(array(
'`skin`' ));
$query->setOrder(array());
$query->setLimit();
return $query; ?>