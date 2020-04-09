<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateFileValid");
$query->setAction("update");
$query->setPriority("");

${'isvalid5_argument'} = new Argument('isvalid', $args->{'isvalid'});
${'isvalid5_argument'}->ensureDefaultValue('Y');
${'isvalid5_argument'}->checkNotNull();
if(!${'isvalid5_argument'}->isValid()) return ${'isvalid5_argument'}->getErrorMessage();
if(${'isvalid5_argument'} !== null) ${'isvalid5_argument'}->setColumnType('char');

${'upload_target_srl6_argument'} = new ConditionArgument('upload_target_srl', $args->upload_target_srl, 'equal');
${'upload_target_srl6_argument'}->checkFilter('number');
${'upload_target_srl6_argument'}->checkNotNull();
${'upload_target_srl6_argument'}->createConditionValue();
if(!${'upload_target_srl6_argument'}->isValid()) return ${'upload_target_srl6_argument'}->getErrorMessage();
if(${'upload_target_srl6_argument'} !== null) ${'upload_target_srl6_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`isvalid`', ${'isvalid5_argument'})
));
$query->setTables(array(
new Table('`xe_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`upload_target_srl`',$upload_target_srl6_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>