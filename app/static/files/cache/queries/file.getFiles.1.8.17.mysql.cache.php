<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getFiles");
$query->setAction("select");
$query->setPriority("");

${'upload_target_srl21_argument'} = new ConditionArgument('upload_target_srl', $args->upload_target_srl, 'equal');
${'upload_target_srl21_argument'}->checkFilter('number');
${'upload_target_srl21_argument'}->checkNotNull();
${'upload_target_srl21_argument'}->createConditionValue();
if(!${'upload_target_srl21_argument'}->isValid()) return ${'upload_target_srl21_argument'}->getErrorMessage();
if(${'upload_target_srl21_argument'} !== null) ${'upload_target_srl21_argument'}->setColumnType('number');
if(isset($args->isvalid)) {
${'isvalid22_argument'} = new ConditionArgument('isvalid', $args->isvalid, 'equal');
${'isvalid22_argument'}->createConditionValue();
if(!${'isvalid22_argument'}->isValid()) return ${'isvalid22_argument'}->getErrorMessage();
} else
${'isvalid22_argument'} = NULL;if(${'isvalid22_argument'} !== null) ${'isvalid22_argument'}->setColumnType('char');
if(isset($args->sort_index)) {
${'sort_index23_argument'} = new Argument('sort_index', $args->{'sort_index'});
if(!${'sort_index23_argument'}->isValid()) return ${'sort_index23_argument'}->getErrorMessage();
} else
${'sort_index23_argument'} = NULL;
$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`upload_target_srl`',$upload_target_srl21_argument,"equal")
,new ConditionWithArgument('`isvalid`',$isvalid22_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index23_argument'}, "asc")
));
$query->setLimit();
return $query; ?>