<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteDocumentExtraVars");
$query->setAction("delete");
$query->setPriority("");

${'module_srl13_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl13_argument'}->checkFilter('number');
${'module_srl13_argument'}->checkNotNull();
${'module_srl13_argument'}->createConditionValue();
if(!${'module_srl13_argument'}->isValid()) return ${'module_srl13_argument'}->getErrorMessage();
if(${'module_srl13_argument'} !== null) ${'module_srl13_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl14_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl14_argument'}->checkFilter('number');
${'document_srl14_argument'}->createConditionValue();
if(!${'document_srl14_argument'}->isValid()) return ${'document_srl14_argument'}->getErrorMessage();
} else
${'document_srl14_argument'} = NULL;if(${'document_srl14_argument'} !== null) ${'document_srl14_argument'}->setColumnType('number');
if(isset($args->var_idx)) {
${'var_idx15_argument'} = new ConditionArgument('var_idx', $args->var_idx, 'equal');
${'var_idx15_argument'}->checkFilter('number');
${'var_idx15_argument'}->createConditionValue();
if(!${'var_idx15_argument'}->isValid()) return ${'var_idx15_argument'}->getErrorMessage();
} else
${'var_idx15_argument'} = NULL;if(${'var_idx15_argument'} !== null) ${'var_idx15_argument'}->setColumnType('number');
if(isset($args->lang_code)) {
${'lang_code16_argument'} = new ConditionArgument('lang_code', $args->lang_code, 'equal');
${'lang_code16_argument'}->createConditionValue();
if(!${'lang_code16_argument'}->isValid()) return ${'lang_code16_argument'}->getErrorMessage();
} else
${'lang_code16_argument'} = NULL;if(${'lang_code16_argument'} !== null) ${'lang_code16_argument'}->setColumnType('varchar');
if(isset($args->eid)) {
${'eid17_argument'} = new ConditionArgument('eid', $args->eid, 'equal');
${'eid17_argument'}->createConditionValue();
if(!${'eid17_argument'}->isValid()) return ${'eid17_argument'}->getErrorMessage();
} else
${'eid17_argument'} = NULL;if(${'eid17_argument'} !== null) ${'eid17_argument'}->setColumnType('varchar');

$query->setTables(array(
new Table('`xe_document_extra_vars`', '`document_extra_vars`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl13_argument,"equal")
,new ConditionWithArgument('`document_srl`',$document_srl14_argument,"equal", 'and')
,new ConditionWithArgument('`var_idx`',$var_idx15_argument,"equal", 'and')
,new ConditionWithArgument('`lang_code`',$lang_code16_argument,"equal", 'and')
,new ConditionWithArgument('`eid`',$eid17_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>