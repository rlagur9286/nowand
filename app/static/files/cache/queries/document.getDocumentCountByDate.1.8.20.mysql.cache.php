<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentCountByDate");
$query->setAction("select");
$query->setPriority("");
if(isset($args->moduleSrlList)) {
${'moduleSrlList11_argument'} = new ConditionArgument('moduleSrlList', $args->moduleSrlList, 'in');
${'moduleSrlList11_argument'}->createConditionValue();
if(!${'moduleSrlList11_argument'}->isValid()) return ${'moduleSrlList11_argument'}->getErrorMessage();
} else
${'moduleSrlList11_argument'} = NULL;if(${'moduleSrlList11_argument'} !== null) ${'moduleSrlList11_argument'}->setColumnType('number');
if(isset($args->regDate)) {
${'regDate12_argument'} = new ConditionArgument('regDate', $args->regDate, 'like_prefix');
${'regDate12_argument'}->createConditionValue();
if(!${'regDate12_argument'}->isValid()) return ${'regDate12_argument'}->getErrorMessage();
} else
${'regDate12_argument'} = NULL;if(${'regDate12_argument'} !== null) ${'regDate12_argument'}->setColumnType('date');
if(isset($args->statusList)) {
${'statusList13_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList13_argument'}->createConditionValue();
if(!${'statusList13_argument'}->isValid()) return ${'statusList13_argument'}->getErrorMessage();
} else
${'statusList13_argument'} = NULL;if(${'statusList13_argument'} !== null) ${'statusList13_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$moduleSrlList11_argument,"in")
,new ConditionWithArgument('`regdate`',$regDate12_argument,"like_prefix", 'and')
,new ConditionWithArgument('`status`',$statusList13_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>