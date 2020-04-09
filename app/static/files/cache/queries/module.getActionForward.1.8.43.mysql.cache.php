<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getActionForward");
$query->setAction("select");
$query->setPriority("");
if(isset($args->act)) {
${'act6_argument'} = new ConditionArgument('act', $args->act, 'equal');
${'act6_argument'}->createConditionValue();
if(!${'act6_argument'}->isValid()) return ${'act6_argument'}->getErrorMessage();
} else
${'act6_argument'} = NULL;if(${'act6_argument'} !== null) ${'act6_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_action_forward`', '`action_forward`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`act`',$act6_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>