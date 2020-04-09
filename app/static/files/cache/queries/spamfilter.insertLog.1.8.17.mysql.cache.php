<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertLog");
$query->setAction("insert");
$query->setPriority("");

${'spamfilter_log_srl8_argument'} = new Argument('spamfilter_log_srl', $args->{'spamfilter_log_srl'});
$db = DB::getInstance(); $sequence = $db->getNextSequence(); ${'spamfilter_log_srl8_argument'}->ensureDefaultValue($sequence);
if(!${'spamfilter_log_srl8_argument'}->isValid()) return ${'spamfilter_log_srl8_argument'}->getErrorMessage();
if(${'spamfilter_log_srl8_argument'} !== null) ${'spamfilter_log_srl8_argument'}->setColumnType('number');

${'ipaddress9_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress9_argument'}->ensureDefaultValue($_SERVER['REMOTE_ADDR']);
if(!${'ipaddress9_argument'}->isValid()) return ${'ipaddress9_argument'}->getErrorMessage();
if(${'ipaddress9_argument'} !== null) ${'ipaddress9_argument'}->setColumnType('varchar');

${'regdate10_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate10_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate10_argument'}->isValid()) return ${'regdate10_argument'}->getErrorMessage();
if(${'regdate10_argument'} !== null) ${'regdate10_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`spamfilter_log_srl`', ${'spamfilter_log_srl8_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress9_argument'})
,new InsertExpression('`regdate`', ${'regdate10_argument'})
));
$query->setTables(array(
new Table('`xe_spamfilter_log`', '`spamfilter_log`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>