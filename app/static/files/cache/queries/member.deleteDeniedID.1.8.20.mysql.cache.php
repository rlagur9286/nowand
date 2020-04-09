<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteDeniedID");
$query->setAction("delete");
$query->setPriority("");

${'user_id1_argument'} = new ConditionArgument('user_id', $args->user_id, 'equal');
${'user_id1_argument'}->checkNotNull();
${'user_id1_argument'}->createConditionValue();
if(!${'user_id1_argument'}->isValid()) return ${'user_id1_argument'}->getErrorMessage();
if(${'user_id1_argument'} !== null) ${'user_id1_argument'}->setColumnType('varchar');

$query->setTables(array(
new Table('`xe_member_denied_user_id`', '`member_denied_user_id`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`user_id`',$user_id1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>