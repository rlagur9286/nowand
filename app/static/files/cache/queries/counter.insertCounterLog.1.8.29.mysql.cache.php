<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertCounterLog");
$query->setAction("insert");
$query->setPriority("");

${'site_srl2_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl2_argument'}->ensureDefaultValue('0');
${'site_srl2_argument'}->checkNotNull();
if(!${'site_srl2_argument'}->isValid()) return ${'site_srl2_argument'}->getErrorMessage();
if(${'site_srl2_argument'} !== null) ${'site_srl2_argument'}->setColumnType('number');

${'regdate3_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate3_argument'}->ensureDefaultValue(date("YmdHis"));
${'regdate3_argument'}->checkNotNull();
if(!${'regdate3_argument'}->isValid()) return ${'regdate3_argument'}->getErrorMessage();
if(${'regdate3_argument'} !== null) ${'regdate3_argument'}->setColumnType('date');

${'ipaddress4_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress4_argument'}->ensureDefaultValue($_SERVER['REMOTE_ADDR']);
${'ipaddress4_argument'}->checkNotNull();
if(!${'ipaddress4_argument'}->isValid()) return ${'ipaddress4_argument'}->getErrorMessage();
if(${'ipaddress4_argument'} !== null) ${'ipaddress4_argument'}->setColumnType('varchar');
if(isset($args->user_agent)) {
${'user_agent5_argument'} = new Argument('user_agent', $args->{'user_agent'});
if(!${'user_agent5_argument'}->isValid()) return ${'user_agent5_argument'}->getErrorMessage();
} else
${'user_agent5_argument'} = NULL;if(${'user_agent5_argument'} !== null) ${'user_agent5_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl2_argument'})
,new InsertExpression('`regdate`', ${'regdate3_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress4_argument'})
,new InsertExpression('`user_agent`', ${'user_agent5_argument'})
));
$query->setTables(array(
new Table('`xe_counter_log`', '`counter_log`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>