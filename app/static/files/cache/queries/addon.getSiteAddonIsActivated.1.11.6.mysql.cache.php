<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSiteAddonIsActivated");
$query->setAction("select");
$query->setPriority("");

${'site_srl62_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl62_argument'}->checkNotNull();
${'site_srl62_argument'}->createConditionValue();
if(!${'site_srl62_argument'}->isValid()) return ${'site_srl62_argument'}->getErrorMessage();
if(${'site_srl62_argument'} !== null) ${'site_srl62_argument'}->setColumnType('number');

${'addon63_argument'} = new ConditionArgument('addon', $args->addon, 'equal');
${'addon63_argument'}->checkNotNull();
${'addon63_argument'}->createConditionValue();
if(!${'addon63_argument'}->isValid()) return ${'addon63_argument'}->getErrorMessage();
if(${'addon63_argument'} !== null) ${'addon63_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_addons_site`', '`addons_site`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl62_argument,"equal")
,new ConditionWithArgument('`addon`',$addon63_argument,"equal", 'and')
,new ConditionWithoutArgument('`is_used`',"'Y'","equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>