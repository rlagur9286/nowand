<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleUpdateLog");
$query->setAction("select");
$query->setPriority("");
if(isset($args->update_id)) {
${'update_id50_argument'} = new ConditionArgument('update_id', $args->update_id, 'in');
${'update_id50_argument'}->createConditionValue();
if(!${'update_id50_argument'}->isValid()) return ${'update_id50_argument'}->getErrorMessage();
} else
${'update_id50_argument'} = NULL;if(${'update_id50_argument'} !== null) ${'update_id50_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_module_update`', '`module_update`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`update_id`',$update_id50_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>