<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getPackageCount");
$query->setAction("select");
$query->setPriority("");
if(isset($args->category_srl)) {
${'category_srl8_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'equal');
${'category_srl8_argument'}->checkFilter('number');
${'category_srl8_argument'}->createConditionValue();
if(!${'category_srl8_argument'}->isValid()) return ${'category_srl8_argument'}->getErrorMessage();
} else
${'category_srl8_argument'} = NULL;if(${'category_srl8_argument'} !== null) ${'category_srl8_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_autoinstall_packages`', '`autoinstall_packages`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`category_srl`',$category_srl8_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>