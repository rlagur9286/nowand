<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateCounterUnique");
$query->setAction("update");
$query->setPriority("");

${'unique_visitor6_argument'} = new Argument('unique_visitor', NULL);
${'unique_visitor6_argument'}->setColumnOperation('+');
${'unique_visitor6_argument'}->ensureDefaultValue(1);
if(!${'unique_visitor6_argument'}->isValid()) return ${'unique_visitor6_argument'}->getErrorMessage();
if(${'unique_visitor6_argument'} !== null) ${'unique_visitor6_argument'}->setColumnType('number');

${'pageview7_argument'} = new Argument('pageview', NULL);
${'pageview7_argument'}->setColumnOperation('+');
${'pageview7_argument'}->ensureDefaultValue(1);
if(!${'pageview7_argument'}->isValid()) return ${'pageview7_argument'}->getErrorMessage();
if(${'pageview7_argument'} !== null) ${'pageview7_argument'}->setColumnType('number');

${'regdate8_argument'} = new ConditionArgument('regdate', $args->regdate, 'in');
${'regdate8_argument'}->checkNotNull();
${'regdate8_argument'}->createConditionValue();
if(!${'regdate8_argument'}->isValid()) return ${'regdate8_argument'}->getErrorMessage();
if(${'regdate8_argument'} !== null) ${'regdate8_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`unique_visitor`', ${'unique_visitor6_argument'})
,new UpdateExpression('`pageview`', ${'pageview7_argument'})
));
$query->setTables(array(
new Table('`xe_counter_status`', '`counter_status`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`regdate`',$regdate8_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>