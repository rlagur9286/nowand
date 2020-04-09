<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNewestDocuments");
$query->setAction("select");
$query->setPriority("");

${'module_srl17_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl17_argument'}->checkFilter('number');
${'module_srl17_argument'}->checkNotNull();
${'module_srl17_argument'}->createConditionValue();
if(!${'module_srl17_argument'}->isValid()) return ${'module_srl17_argument'}->getErrorMessage();
if(${'module_srl17_argument'} !== null) ${'module_srl17_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl18_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'equal');
${'category_srl18_argument'}->createConditionValue();
if(!${'category_srl18_argument'}->isValid()) return ${'category_srl18_argument'}->getErrorMessage();
} else
${'category_srl18_argument'} = NULL;if(${'category_srl18_argument'} !== null) ${'category_srl18_argument'}->setColumnType('number');
if(isset($args->statusList)) {
${'statusList19_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList19_argument'}->createConditionValue();
if(!${'statusList19_argument'}->isValid()) return ${'statusList19_argument'}->getErrorMessage();
} else
${'statusList19_argument'} = NULL;if(${'statusList19_argument'} !== null) ${'statusList19_argument'}->setColumnType('varchar');

${'list_count22_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count22_argument'}->ensureDefaultValue('20');
if(!${'list_count22_argument'}->isValid()) return ${'list_count22_argument'}->getErrorMessage();

${'sort_index20_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index20_argument'}->ensureDefaultValue('documents.list_order');
if(!${'sort_index20_argument'}->isValid()) return ${'sort_index20_argument'}->getErrorMessage();

${'order_type21_argument'} = new SortArgument('order_type21', $args->order_type);
${'order_type21_argument'}->ensureDefaultValue('asc');
if(!${'order_type21_argument'}->isValid()) return ${'order_type21_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`documents`.`module_srl`',$module_srl17_argument,"in", 'and')
,new ConditionWithArgument('`documents`.`category_srl`',$category_srl18_argument,"equal", 'and')
,new ConditionWithArgument('`status`',$statusList19_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index20_argument'}, $order_type21_argument)
));
$query->setLimit(new Limit(${'list_count22_argument'}));
return $query; ?>