<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getTriggers");
$query->setAction("select");
$query->setPriority("");
if(isset($args->trigger_name)) {
${'trigger_name8_argument'} = new ConditionArgument('trigger_name', $args->trigger_name, 'equal');
${'trigger_name8_argument'}->createConditionValue();
if(!${'trigger_name8_argument'}->isValid()) return ${'trigger_name8_argument'}->getErrorMessage();
} else
${'trigger_name8_argument'} = NULL;if(${'trigger_name8_argument'} !== null) ${'trigger_name8_argument'}->setColumnType('varchar');
if(isset($args->called_position)) {
${'called_position9_argument'} = new ConditionArgument('called_position', $args->called_position, 'equal');
${'called_position9_argument'}->createConditionValue();
if(!${'called_position9_argument'}->isValid()) return ${'called_position9_argument'}->getErrorMessage();
} else
${'called_position9_argument'} = NULL;if(${'called_position9_argument'} !== null) ${'called_position9_argument'}->setColumnType('varchar');

${'14_argument'} = new Argument('', $args->{''});
${'14_argument'}->ensureDefaultValue('called_method');
if(!${'14_argument'}->isValid()) return ${'14_argument'}->getErrorMessage();

${'13_argument'} = new Argument('', $args->{''});
${'13_argument'}->ensureDefaultValue('type');
if(!${'13_argument'}->isValid()) return ${'13_argument'}->getErrorMessage();

${'12_argument'} = new Argument('', $args->{''});
${'12_argument'}->ensureDefaultValue('module');
if(!${'12_argument'}->isValid()) return ${'12_argument'}->getErrorMessage();

${'11_argument'} = new Argument('', $args->{''});
${'11_argument'}->ensureDefaultValue('called_position');
if(!${'11_argument'}->isValid()) return ${'11_argument'}->getErrorMessage();

${'10_argument'} = new Argument('', $args->{''});
${'10_argument'}->ensureDefaultValue('trigger_name');
if(!${'10_argument'}->isValid()) return ${'10_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_module_trigger`', '`module_trigger`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`trigger_name`',$trigger_name8_argument,"equal")
,new ConditionWithArgument('`called_position`',$called_position9_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'10_argument'}, "asc")
,new OrderByColumn(${'11_argument'}, "asc")
,new OrderByColumn(${'12_argument'}, "asc")
,new OrderByColumn(${'13_argument'}, "asc")
,new OrderByColumn(${'14_argument'}, "asc")
));
$query->setLimit();
return $query; ?>