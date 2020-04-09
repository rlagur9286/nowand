<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteDeclared");
$query->setAction("delete");
$query->setPriority("");

${'document_srl12_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl12_argument'}->checkFilter('number');
${'document_srl12_argument'}->checkNotNull();
${'document_srl12_argument'}->createConditionValue();
if(!${'document_srl12_argument'}->isValid()) return ${'document_srl12_argument'}->getErrorMessage();
if(${'document_srl12_argument'} !== null) ${'document_srl12_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_document_declared`', '`document_declared`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl12_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>