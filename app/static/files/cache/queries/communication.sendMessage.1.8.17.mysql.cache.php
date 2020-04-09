<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("sendMessage");
$query->setAction("insert");
$query->setPriority("");

${'message_srl11_argument'} = new Argument('message_srl', $args->{'message_srl'});
${'message_srl11_argument'}->checkNotNull();
if(!${'message_srl11_argument'}->isValid()) return ${'message_srl11_argument'}->getErrorMessage();
if(${'message_srl11_argument'} !== null) ${'message_srl11_argument'}->setColumnType('number');

${'related_srl12_argument'} = new Argument('related_srl', $args->{'related_srl'});
${'related_srl12_argument'}->ensureDefaultValue('0');
if(!${'related_srl12_argument'}->isValid()) return ${'related_srl12_argument'}->getErrorMessage();
if(${'related_srl12_argument'} !== null) ${'related_srl12_argument'}->setColumnType('number');

${'list_order13_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order13_argument'}->checkNotNull();
if(!${'list_order13_argument'}->isValid()) return ${'list_order13_argument'}->getErrorMessage();
if(${'list_order13_argument'} !== null) ${'list_order13_argument'}->setColumnType('number');

${'sender_srl14_argument'} = new Argument('sender_srl', $args->{'sender_srl'});
${'sender_srl14_argument'}->checkNotNull();
if(!${'sender_srl14_argument'}->isValid()) return ${'sender_srl14_argument'}->getErrorMessage();
if(${'sender_srl14_argument'} !== null) ${'sender_srl14_argument'}->setColumnType('number');

${'receiver_srl15_argument'} = new Argument('receiver_srl', $args->{'receiver_srl'});
${'receiver_srl15_argument'}->checkNotNull();
if(!${'receiver_srl15_argument'}->isValid()) return ${'receiver_srl15_argument'}->getErrorMessage();
if(${'receiver_srl15_argument'} !== null) ${'receiver_srl15_argument'}->setColumnType('number');

${'message_type16_argument'} = new Argument('message_type', $args->{'message_type'});
${'message_type16_argument'}->checkNotNull();
if(!${'message_type16_argument'}->isValid()) return ${'message_type16_argument'}->getErrorMessage();
if(${'message_type16_argument'} !== null) ${'message_type16_argument'}->setColumnType('char');

${'title17_argument'} = new Argument('title', $args->{'title'});
${'title17_argument'}->checkNotNull();
if(!${'title17_argument'}->isValid()) return ${'title17_argument'}->getErrorMessage();
if(${'title17_argument'} !== null) ${'title17_argument'}->setColumnType('varchar');

${'content18_argument'} = new Argument('content', $args->{'content'});
${'content18_argument'}->checkNotNull();
if(!${'content18_argument'}->isValid()) return ${'content18_argument'}->getErrorMessage();
if(${'content18_argument'} !== null) ${'content18_argument'}->setColumnType('text');

${'readed19_argument'} = new Argument('readed', $args->{'readed'});
${'readed19_argument'}->checkNotNull();
if(!${'readed19_argument'}->isValid()) return ${'readed19_argument'}->getErrorMessage();
if(${'readed19_argument'} !== null) ${'readed19_argument'}->setColumnType('char');

${'regdate20_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate20_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate20_argument'}->isValid()) return ${'regdate20_argument'}->getErrorMessage();
if(${'regdate20_argument'} !== null) ${'regdate20_argument'}->setColumnType('date');
if(isset($args->readed_date)) {
${'readed_date21_argument'} = new Argument('readed_date', $args->{'readed_date'});
if(!${'readed_date21_argument'}->isValid()) return ${'readed_date21_argument'}->getErrorMessage();
} else
${'readed_date21_argument'} = NULL;if(${'readed_date21_argument'} !== null) ${'readed_date21_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`message_srl`', ${'message_srl11_argument'})
,new InsertExpression('`related_srl`', ${'related_srl12_argument'})
,new InsertExpression('`list_order`', ${'list_order13_argument'})
,new InsertExpression('`sender_srl`', ${'sender_srl14_argument'})
,new InsertExpression('`receiver_srl`', ${'receiver_srl15_argument'})
,new InsertExpression('`message_type`', ${'message_type16_argument'})
,new InsertExpression('`title`', ${'title17_argument'})
,new InsertExpression('`content`', ${'content18_argument'})
,new InsertExpression('`readed`', ${'readed19_argument'})
,new InsertExpression('`regdate`', ${'regdate20_argument'})
,new InsertExpression('`readed_date`', ${'readed_date21_argument'})
));
$query->setTables(array(
new Table('`xe_member_message`', '`member_message`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>