<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteExceptModules");
$query->setAction("delete");
$query->setPriority("");

$query->setTables(array(
new Table('`xe_syndication_except_modules`', '`syndication_except_modules`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>