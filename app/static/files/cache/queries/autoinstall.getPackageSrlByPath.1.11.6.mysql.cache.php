<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getPackageSqlByPath");
$query->setAction("select");
$query->setPriority("");

${'path7_argument'} = new ConditionArgument('path', $args->path, 'equal');
${'path7_argument'}->checkNotNull();
${'path7_argument'}->createConditionValue();
if(!${'path7_argument'}->isValid()) return ${'path7_argument'}->getErrorMessage();
if(${'path7_argument'} !== null) ${'path7_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`package_srl`')
));
$query->setTables(array(
new Table('`xe_autoinstall_packages`', '`autoinstall_packages`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`path`',$path7_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>