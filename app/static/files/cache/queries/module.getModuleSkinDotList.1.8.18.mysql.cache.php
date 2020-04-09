<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleSkinDotList");
$query->setAction("select");
$query->setPriority("");

${'skin50_argument'} = new ConditionArgument('skin', $args->skin, 'like');
${'skin50_argument'}->ensureDefaultValue('.');
${'skin50_argument'}->createConditionValue();
if(!${'skin50_argument'}->isValid()) return ${'skin50_argument'}->getErrorMessage();
if(${'skin50_argument'} !== null) ${'skin50_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`module`')
,new SelectExpression('`skin`')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`skin`',$skin50_argument,"like")))
));
$query->setGroups(array(
'`skin`' ));
$query->setOrder(array());
$query->setLimit();
return $query; ?>