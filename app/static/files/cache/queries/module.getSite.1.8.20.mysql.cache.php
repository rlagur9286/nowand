<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSite");
$query->setAction("select");
$query->setPriority("");

${'site_srl56_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl56_argument'}->checkNotNull();
${'site_srl56_argument'}->createConditionValue();
if(!${'site_srl56_argument'}->isValid()) return ${'site_srl56_argument'}->getErrorMessage();
if(${'site_srl56_argument'} !== null) ${'site_srl56_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_sites`', '`sites`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl56_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>