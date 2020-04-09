<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNewestDocuments");
$query->setAction("select");
$query->setPriority("");

${'module_srl15_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl15_argument'}->checkFilter('number');
${'module_srl15_argument'}->checkNotNull();
${'module_srl15_argument'}->createConditionValue();
if(!${'module_srl15_argument'}->isValid()) return ${'module_srl15_argument'}->getErrorMessage();
if(${'module_srl15_argument'} !== null) ${'module_srl15_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl16_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'equal');
${'category_srl16_argument'}->createConditionValue();
if(!${'category_srl16_argument'}->isValid()) return ${'category_srl16_argument'}->getErrorMessage();
} else
${'category_srl16_argument'} = NULL;if(${'category_srl16_argument'} !== null) ${'category_srl16_argument'}->setColumnType('number');
if(isset($args->statusList)) {
${'statusList17_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList17_argument'}->createConditionValue();
if(!${'statusList17_argument'}->isValid()) return ${'statusList17_argument'}->getErrorMessage();
} else
${'statusList17_argument'} = NULL;if(${'statusList17_argument'} !== null) ${'statusList17_argument'}->setColumnType('varchar');

${'list_count20_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count20_argument'}->ensureDefaultValue('20');
if(!${'list_count20_argument'}->isValid()) return ${'list_count20_argument'}->getErrorMessage();

${'sort_index18_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index18_argument'}->ensureDefaultValue('documents.list_order');
if(!${'sort_index18_argument'}->isValid()) return ${'sort_index18_argument'}->getErrorMessage();

${'order_type19_argument'} = new SortArgument('order_type19', $args->order_type);
${'order_type19_argument'}->ensureDefaultValue('asc');
if(!${'order_type19_argument'}->isValid()) return ${'order_type19_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`documents`.`module_srl`',$module_srl15_argument,"in", 'and')
,new ConditionWithArgument('`documents`.`category_srl`',$category_srl16_argument,"equal", 'and')
,new ConditionWithArgument('`status`',$statusList17_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index18_argument'}, $order_type19_argument)
));
$query->setLimit(new Limit(${'list_count20_argument'}));
return $query; ?>