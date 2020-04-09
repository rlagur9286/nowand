<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleSkinDotList");
$query->setAction("select");
$query->setPriority("");

${'skin57_argument'} = new ConditionArgument('skin', $args->skin, 'like');
${'skin57_argument'}->ensureDefaultValue('.');
${'skin57_argument'}->createConditionValue();
if(!${'skin57_argument'}->isValid()) return ${'skin57_argument'}->getErrorMessage();
if(${'skin57_argument'} !== null) ${'skin57_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`module`')
,new SelectExpression('`skin`')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`skin`',$skin57_argument,"like")))
));
$query->setGroups(array(
'`skin`' ));
$query->setOrder(array());
$query->setLimit();
return $query; ?>