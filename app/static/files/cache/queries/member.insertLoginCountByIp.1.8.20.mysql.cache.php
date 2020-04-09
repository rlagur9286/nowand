<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertLoginCountByIp");
$query->setAction("insert");
$query->setPriority("");

${'ipaddress2_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress2_argument'}->checkNotNull();
if(!${'ipaddress2_argument'}->isValid()) return ${'ipaddress2_argument'}->getErrorMessage();
if(${'ipaddress2_argument'} !== null) ${'ipaddress2_argument'}->setColumnType('varchar');

${'count3_argument'} = new Argument('count', $args->{'count'});
${'count3_argument'}->checkNotNull();
if(!${'count3_argument'}->isValid()) return ${'count3_argument'}->getErrorMessage();
if(${'count3_argument'} !== null) ${'count3_argument'}->setColumnType('number');

${'regdate4_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate4_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate4_argument'}->isValid()) return ${'regdate4_argument'}->getErrorMessage();
if(${'regdate4_argument'} !== null) ${'regdate4_argument'}->setColumnType('date');

${'last_update5_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update5_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_update5_argument'}->isValid()) return ${'last_update5_argument'}->getErrorMessage();
if(${'last_update5_argument'} !== null) ${'last_update5_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`ipaddress`', ${'ipaddress2_argument'})
,new InsertExpression('`count`', ${'count3_argument'})
,new InsertExpression('`regdate`', ${'regdate4_argument'})
,new InsertExpression('`last_update`', ${'last_update5_argument'})
));
$query->setTables(array(
new Table('`xe_member_login_count`', '`member_login_count`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>