<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModulePartConfig");
$query->setAction("insert");
$query->setPriority("");

${'module7_argument'} = new Argument('module', $args->{'module'});
${'module7_argument'}->checkNotNull();
if(!${'module7_argument'}->isValid()) return ${'module7_argument'}->getErrorMessage();
if(${'module7_argument'} !== null) ${'module7_argument'}->setColumnType('varchar');

${'module_srl8_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl8_argument'}->checkNotNull();
if(!${'module_srl8_argument'}->isValid()) return ${'module_srl8_argument'}->getErrorMessage();
if(${'module_srl8_argument'} !== null) ${'module_srl8_argument'}->setColumnType('number');
if(isset($args->config)) {
${'config9_argument'} = new Argument('config', $args->{'config'});
if(!${'config9_argument'}->isValid()) return ${'config9_argument'}->getErrorMessage();
} else
${'config9_argument'} = NULL;if(${'config9_argument'} !== null) ${'config9_argument'}->setColumnType('text');

${'regdate10_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate10_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate10_argument'}->isValid()) return ${'regdate10_argument'}->getErrorMessage();
if(${'regdate10_argument'} !== null) ${'regdate10_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`module`', ${'module7_argument'})
,new InsertExpression('`module_srl`', ${'module_srl8_argument'})
,new InsertExpression('`config`', ${'config9_argument'})
,new InsertExpression('`regdate`', ${'regdate10_argument'})
));
$query->setTables(array(
new Table('`xe_module_part_config`', '`module_part_config`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>