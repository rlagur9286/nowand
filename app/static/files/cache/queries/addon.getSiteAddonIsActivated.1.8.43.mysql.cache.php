<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSiteAddonIsActivated");
$query->setAction("select");
$query->setPriority("");

${'site_srl51_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl51_argument'}->checkNotNull();
${'site_srl51_argument'}->createConditionValue();
if(!${'site_srl51_argument'}->isValid()) return ${'site_srl51_argument'}->getErrorMessage();
if(${'site_srl51_argument'} !== null) ${'site_srl51_argument'}->setColumnType('number');

${'addon52_argument'} = new ConditionArgument('addon', $args->addon, 'equal');
${'addon52_argument'}->checkNotNull();
${'addon52_argument'}->createConditionValue();
if(!${'addon52_argument'}->isValid()) return ${'addon52_argument'}->getErrorMessage();
if(${'addon52_argument'} !== null) ${'addon52_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_addons_site`', '`addons_site`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl51_argument,"equal")
,new ConditionWithArgument('`addon`',$addon52_argument,"equal", 'and')
,new ConditionWithoutArgument('`is_used`',"'Y'","equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>