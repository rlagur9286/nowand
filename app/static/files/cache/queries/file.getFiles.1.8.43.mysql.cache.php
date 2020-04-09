<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getFiles");
$query->setAction("select");
$query->setPriority("");

${'upload_target_srl25_argument'} = new ConditionArgument('upload_target_srl', $args->upload_target_srl, 'equal');
${'upload_target_srl25_argument'}->checkFilter('number');
${'upload_target_srl25_argument'}->checkNotNull();
${'upload_target_srl25_argument'}->createConditionValue();
if(!${'upload_target_srl25_argument'}->isValid()) return ${'upload_target_srl25_argument'}->getErrorMessage();
if(${'upload_target_srl25_argument'} !== null) ${'upload_target_srl25_argument'}->setColumnType('number');
if(isset($args->isvalid)) {
${'isvalid26_argument'} = new ConditionArgument('isvalid', $args->isvalid, 'equal');
${'isvalid26_argument'}->createConditionValue();
if(!${'isvalid26_argument'}->isValid()) return ${'isvalid26_argument'}->getErrorMessage();
} else
${'isvalid26_argument'} = NULL;if(${'isvalid26_argument'} !== null) ${'isvalid26_argument'}->setColumnType('char');
if(isset($args->sort_index)) {
${'sort_index27_argument'} = new Argument('sort_index', $args->{'sort_index'});
if(!${'sort_index27_argument'}->isValid()) return ${'sort_index27_argument'}->getErrorMessage();
} else
${'sort_index27_argument'} = NULL;
$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`upload_target_srl`',$upload_target_srl25_argument,"equal")
,new ConditionWithArgument('`isvalid`',$isvalid26_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index27_argument'}, "asc")
));
$query->setLimit();
return $query; ?>