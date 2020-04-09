<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateLayout");
$query->setAction("update");
$query->setPriority("");
if(isset($args->title)) {
${'title8_argument'} = new Argument('title', $args->{'title'});
if(!${'title8_argument'}->isValid()) return ${'title8_argument'}->getErrorMessage();
} else
${'title8_argument'} = NULL;if(${'title8_argument'} !== null) ${'title8_argument'}->setColumnType('varchar');
if(isset($args->extra_vars)) {
${'extra_vars9_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars9_argument'}->isValid()) return ${'extra_vars9_argument'}->getErrorMessage();
} else
${'extra_vars9_argument'} = NULL;if(${'extra_vars9_argument'} !== null) ${'extra_vars9_argument'}->setColumnType('text');
if(isset($args->layout)) {
${'layout10_argument'} = new Argument('layout', $args->{'layout'});
if(!${'layout10_argument'}->isValid()) return ${'layout10_argument'}->getErrorMessage();
} else
${'layout10_argument'} = NULL;if(${'layout10_argument'} !== null) ${'layout10_argument'}->setColumnType('varchar');
if(isset($args->layout_path)) {
${'layout_path11_argument'} = new Argument('layout_path', $args->{'layout_path'});
if(!${'layout_path11_argument'}->isValid()) return ${'layout_path11_argument'}->getErrorMessage();
} else
${'layout_path11_argument'} = NULL;if(${'layout_path11_argument'} !== null) ${'layout_path11_argument'}->setColumnType('varchar');

${'layout_srl12_argument'} = new ConditionArgument('layout_srl', $args->layout_srl, 'equal');
${'layout_srl12_argument'}->checkFilter('number');
${'layout_srl12_argument'}->checkNotNull();
${'layout_srl12_argument'}->createConditionValue();
if(!${'layout_srl12_argument'}->isValid()) return ${'layout_srl12_argument'}->getErrorMessage();
if(${'layout_srl12_argument'} !== null) ${'layout_srl12_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`title`', ${'title8_argument'})
,new UpdateExpression('`extra_vars`', ${'extra_vars9_argument'})
,new UpdateExpression('`layout`', ${'layout10_argument'})
,new UpdateExpression('`layout_path`', ${'layout_path11_argument'})
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`layout_srl`',$layout_srl12_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>