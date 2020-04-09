<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getActionForward");
$query->setAction("select");
$query->setPriority("");
if(isset($args->act)) {
${'act61_argument'} = new ConditionArgument('act', $args->act, 'equal');
${'act61_argument'}->createConditionValue();
if(!${'act61_argument'}->isValid()) return ${'act61_argument'}->getErrorMessage();
} else
${'act61_argument'} = NULL;if(${'act61_argument'} !== null) ${'act61_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_action_forward`', '`action_forward`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`act`',$act61_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>