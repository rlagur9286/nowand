<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleCategories");
$query->setAction("select");
$query->setPriority("");
if(isset($args->moduleCategorySrl)) {
${'moduleCategorySrl7_argument'} = new ConditionArgument('moduleCategorySrl', $args->moduleCategorySrl, 'in');
${'moduleCategorySrl7_argument'}->createConditionValue();
if(!${'moduleCategorySrl7_argument'}->isValid()) return ${'moduleCategorySrl7_argument'}->getErrorMessage();
} else
${'moduleCategorySrl7_argument'} = NULL;if(${'moduleCategorySrl7_argument'} !== null) ${'moduleCategorySrl7_argument'}->setColumnType('number');

${'sort_index8_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index8_argument'}->ensureDefaultValue('title');
if(!${'sort_index8_argument'}->isValid()) return ${'sort_index8_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_module_categories`', '`module_categories`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_category_srl`',$moduleCategorySrl7_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index8_argument'}, "asc")
));
$query->setLimit();
return $query; ?>