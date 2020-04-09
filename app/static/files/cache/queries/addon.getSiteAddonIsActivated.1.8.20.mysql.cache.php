<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSiteAddonIsActivated");
$query->setAction("select");
$query->setPriority("");

${'site_srl58_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl58_argument'}->checkNotNull();
${'site_srl58_argument'}->createConditionValue();
if(!${'site_srl58_argument'}->isValid()) return ${'site_srl58_argument'}->getErrorMessage();
if(${'site_srl58_argument'} !== null) ${'site_srl58_argument'}->setColumnType('number');

${'addon59_argument'} = new ConditionArgument('addon', $args->addon, 'equal');
${'addon59_argument'}->checkNotNull();
${'addon59_argument'}->createConditionValue();
if(!${'addon59_argument'}->isValid()) return ${'addon59_argument'}->getErrorMessage();
if(${'addon59_argument'} !== null) ${'addon59_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_addons_site`', '`addons_site`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl58_argument,"equal")
,new ConditionWithArgument('`addon`',$addon59_argument,"equal", 'and')
,new ConditionWithoutArgument('`is_used`',"'Y'","equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>