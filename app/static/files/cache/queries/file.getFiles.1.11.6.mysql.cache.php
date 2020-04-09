<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getFiles");
$query->setAction("select");
$query->setPriority("");

${'upload_target_srl11_argument'} = new ConditionArgument('upload_target_srl', $args->upload_target_srl, 'equal');
${'upload_target_srl11_argument'}->checkFilter('number');
${'upload_target_srl11_argument'}->checkNotNull();
${'upload_target_srl11_argument'}->createConditionValue();
if(!${'upload_target_srl11_argument'}->isValid()) return ${'upload_target_srl11_argument'}->getErrorMessage();
if(${'upload_target_srl11_argument'} !== null) ${'upload_target_srl11_argument'}->setColumnType('number');
if(isset($args->isvalid)) {
${'isvalid12_argument'} = new ConditionArgument('isvalid', $args->isvalid, 'equal');
${'isvalid12_argument'}->createConditionValue();
if(!${'isvalid12_argument'}->isValid()) return ${'isvalid12_argument'}->getErrorMessage();
} else
${'isvalid12_argument'} = NULL;if(${'isvalid12_argument'} !== null) ${'isvalid12_argument'}->setColumnType('char');
if(isset($args->sort_index)) {
${'sort_index13_argument'} = new Argument('sort_index', $args->{'sort_index'});
if(!${'sort_index13_argument'}->isValid()) return ${'sort_index13_argument'}->getErrorMessage();
} else
${'sort_index13_argument'} = NULL;
$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`upload_target_srl`',$upload_target_srl11_argument,"equal")
,new ConditionWithArgument('`isvalid`',$isvalid12_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index13_argument'}, "asc")
));
$query->setLimit();
return $query; ?>