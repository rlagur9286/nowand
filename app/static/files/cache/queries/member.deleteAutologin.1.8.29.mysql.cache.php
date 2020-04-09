<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteAutologin");
$query->setAction("delete");
$query->setPriority("");

${'autologin_key4_argument'} = new ConditionArgument('autologin_key', $args->autologin_key, 'equal');
${'autologin_key4_argument'}->ensureDefaultValue('');
${'autologin_key4_argument'}->createConditionValue();
if(!${'autologin_key4_argument'}->isValid()) return ${'autologin_key4_argument'}->getErrorMessage();
if(${'autologin_key4_argument'} !== null) ${'autologin_key4_argument'}->setColumnType('varchar');
if(isset($args->member_srl)) {
${'member_srl5_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl5_argument'}->createConditionValue();
if(!${'member_srl5_argument'}->isValid()) return ${'member_srl5_argument'}->getErrorMessage();
} else
${'member_srl5_argument'} = NULL;if(${'member_srl5_argument'} !== null) ${'member_srl5_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_member_autologin`', '`member_autologin`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`autologin_key`',$autologin_key4_argument,"equal", 'or')
,new ConditionWithArgument('`member_srl`',$member_srl5_argument,"equal", 'or')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>