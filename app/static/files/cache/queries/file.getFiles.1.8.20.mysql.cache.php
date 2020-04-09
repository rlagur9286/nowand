<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getFiles");
$query->setAction("select");
$query->setPriority("");

${'upload_target_srl27_argument'} = new ConditionArgument('upload_target_srl', $args->upload_target_srl, 'equal');
${'upload_target_srl27_argument'}->checkFilter('number');
${'upload_target_srl27_argument'}->checkNotNull();
${'upload_target_srl27_argument'}->createConditionValue();
if(!${'upload_target_srl27_argument'}->isValid()) return ${'upload_target_srl27_argument'}->getErrorMessage();
if(${'upload_target_srl27_argument'} !== null) ${'upload_target_srl27_argument'}->setColumnType('number');
if(isset($args->isvalid)) {
${'isvalid28_argument'} = new ConditionArgument('isvalid', $args->isvalid, 'equal');
${'isvalid28_argument'}->createConditionValue();
if(!${'isvalid28_argument'}->isValid()) return ${'isvalid28_argument'}->getErrorMessage();
} else
${'isvalid28_argument'} = NULL;if(${'isvalid28_argument'} !== null) ${'isvalid28_argument'}->setColumnType('char');
if(isset($args->sort_index)) {
${'sort_index29_argument'} = new Argument('sort_index', $args->{'sort_index'});
if(!${'sort_index29_argument'}->isValid()) return ${'sort_index29_argument'}->getErrorMessage();
} else
${'sort_index29_argument'} = NULL;
$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`upload_target_srl`',$upload_target_srl27_argument,"equal")
,new ConditionWithArgument('`isvalid`',$isvalid28_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index29_argument'}, "asc")
));
$query->setLimit();
return $query; ?>