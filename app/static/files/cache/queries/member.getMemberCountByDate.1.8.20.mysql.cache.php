<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberCountByDate");
$query->setAction("select");
$query->setPriority("");
if(isset($args->regDate)) {
${'regDate10_argument'} = new ConditionArgument('regDate', $args->regDate, 'like_prefix');
${'regDate10_argument'}->createConditionValue();
if(!${'regDate10_argument'}->isValid()) return ${'regDate10_argument'}->getErrorMessage();
} else
${'regDate10_argument'} = NULL;if(${'regDate10_argument'} !== null) ${'regDate10_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`regdate`',$regDate10_argument,"like_prefix")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>