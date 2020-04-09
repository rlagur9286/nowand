<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateCounterPageview");
$query->setAction("update");
$query->setPriority("");

${'pageview1_argument'} = new Argument('pageview', NULL);
${'pageview1_argument'}->setColumnOperation('+');
${'pageview1_argument'}->ensureDefaultValue(1);
if(!${'pageview1_argument'}->isValid()) return ${'pageview1_argument'}->getErrorMessage();
if(${'pageview1_argument'} !== null) ${'pageview1_argument'}->setColumnType('number');

${'regdate2_argument'} = new ConditionArgument('regdate', $args->regdate, 'in');
${'regdate2_argument'}->checkNotNull();
${'regdate2_argument'}->createConditionValue();
if(!${'regdate2_argument'}->isValid()) return ${'regdate2_argument'}->getErrorMessage();
if(${'regdate2_argument'} !== null) ${'regdate2_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`pageview`', ${'pageview1_argument'})
));
$query->setTables(array(
new Table('`xe_counter_status`', '`counter_status`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`regdate`',$regdate2_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>