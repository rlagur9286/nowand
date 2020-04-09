<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl14_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl14_argument'}->checkFilter('number');
${'module_srl14_argument'}->createConditionValue();
if(!${'module_srl14_argument'}->isValid()) return ${'module_srl14_argument'}->getErrorMessage();
} else
${'module_srl14_argument'} = NULL;if(${'module_srl14_argument'} !== null) ${'module_srl14_argument'}->setColumnType('number');
if(isset($args->exclude_module_srl)) {
${'exclude_module_srl15_argument'} = new ConditionArgument('exclude_module_srl', $args->exclude_module_srl, 'notin');
${'exclude_module_srl15_argument'}->checkFilter('number');
${'exclude_module_srl15_argument'}->createConditionValue();
if(!${'exclude_module_srl15_argument'}->isValid()) return ${'exclude_module_srl15_argument'}->getErrorMessage();
} else
${'exclude_module_srl15_argument'} = NULL;if(${'exclude_module_srl15_argument'} !== null) ${'exclude_module_srl15_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl16_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'in');
${'category_srl16_argument'}->createConditionValue();
if(!${'category_srl16_argument'}->isValid()) return ${'category_srl16_argument'}->getErrorMessage();
} else
${'category_srl16_argument'} = NULL;if(${'category_srl16_argument'} !== null) ${'category_srl16_argument'}->setColumnType('number');
if(isset($args->s_is_notice)) {
${'s_is_notice17_argument'} = new ConditionArgument('s_is_notice', $args->s_is_notice, 'equal');
${'s_is_notice17_argument'}->createConditionValue();
if(!${'s_is_notice17_argument'}->isValid()) return ${'s_is_notice17_argument'}->getErrorMessage();
} else
${'s_is_notice17_argument'} = NULL;if(${'s_is_notice17_argument'} !== null) ${'s_is_notice17_argument'}->setColumnType('char');
if(isset($args->member_srl)) {
${'member_srl18_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl18_argument'}->checkFilter('number');
${'member_srl18_argument'}->createConditionValue();
if(!${'member_srl18_argument'}->isValid()) return ${'member_srl18_argument'}->getErrorMessage();
} else
${'member_srl18_argument'} = NULL;if(${'member_srl18_argument'} !== null) ${'member_srl18_argument'}->setColumnType('number');
if(isset($args->statusList)) {
${'statusList19_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList19_argument'}->createConditionValue();
if(!${'statusList19_argument'}->isValid()) return ${'statusList19_argument'}->getErrorMessage();
} else
${'statusList19_argument'} = NULL;if(${'statusList19_argument'} !== null) ${'statusList19_argument'}->setColumnType('varchar');
if(isset($args->division)) {
${'division20_argument'} = new ConditionArgument('division', $args->division, 'more');
${'division20_argument'}->createConditionValue();
if(!${'division20_argument'}->isValid()) return ${'division20_argument'}->getErrorMessage();
} else
${'division20_argument'} = NULL;if(${'division20_argument'} !== null) ${'division20_argument'}->setColumnType('number');
if(isset($args->last_division)) {
${'last_division21_argument'} = new ConditionArgument('last_division', $args->last_division, 'below');
${'last_division21_argument'}->createConditionValue();
if(!${'last_division21_argument'}->isValid()) return ${'last_division21_argument'}->getErrorMessage();
} else
${'last_division21_argument'} = NULL;if(${'last_division21_argument'} !== null) ${'last_division21_argument'}->setColumnType('number');
if(isset($args->s_title)) {
${'s_title22_argument'} = new ConditionArgument('s_title', $args->s_title, 'like');
${'s_title22_argument'}->createConditionValue();
if(!${'s_title22_argument'}->isValid()) return ${'s_title22_argument'}->getErrorMessage();
} else
${'s_title22_argument'} = NULL;if(${'s_title22_argument'} !== null) ${'s_title22_argument'}->setColumnType('varchar');
if(isset($args->s_content)) {
${'s_content23_argument'} = new ConditionArgument('s_content', $args->s_content, 'like');
${'s_content23_argument'}->createConditionValue();
if(!${'s_content23_argument'}->isValid()) return ${'s_content23_argument'}->getErrorMessage();
} else
${'s_content23_argument'} = NULL;if(${'s_content23_argument'} !== null) ${'s_content23_argument'}->setColumnType('bigtext');
if(isset($args->s_user_name)) {
${'s_user_name24_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name24_argument'}->createConditionValue();
if(!${'s_user_name24_argument'}->isValid()) return ${'s_user_name24_argument'}->getErrorMessage();
} else
${'s_user_name24_argument'} = NULL;if(${'s_user_name24_argument'} !== null) ${'s_user_name24_argument'}->setColumnType('varchar');
if(isset($args->s_user_id)) {
${'s_user_id25_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id25_argument'}->createConditionValue();
if(!${'s_user_id25_argument'}->isValid()) return ${'s_user_id25_argument'}->getErrorMessage();
} else
${'s_user_id25_argument'} = NULL;if(${'s_user_id25_argument'} !== null) ${'s_user_id25_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name26_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name26_argument'}->createConditionValue();
if(!${'s_nick_name26_argument'}->isValid()) return ${'s_nick_name26_argument'}->getErrorMessage();
} else
${'s_nick_name26_argument'} = NULL;if(${'s_nick_name26_argument'} !== null) ${'s_nick_name26_argument'}->setColumnType('varchar');
if(isset($args->s_email_address)) {
${'s_email_address27_argument'} = new ConditionArgument('s_email_address', $args->s_email_address, 'like');
${'s_email_address27_argument'}->createConditionValue();
if(!${'s_email_address27_argument'}->isValid()) return ${'s_email_address27_argument'}->getErrorMessage();
} else
${'s_email_address27_argument'} = NULL;if(${'s_email_address27_argument'} !== null) ${'s_email_address27_argument'}->setColumnType('varchar');
if(isset($args->s_homepage)) {
${'s_homepage28_argument'} = new ConditionArgument('s_homepage', $args->s_homepage, 'like');
${'s_homepage28_argument'}->createConditionValue();
if(!${'s_homepage28_argument'}->isValid()) return ${'s_homepage28_argument'}->getErrorMessage();
} else
${'s_homepage28_argument'} = NULL;if(${'s_homepage28_argument'} !== null) ${'s_homepage28_argument'}->setColumnType('varchar');
if(isset($args->s_tags)) {
${'s_tags29_argument'} = new ConditionArgument('s_tags', $args->s_tags, 'like');
${'s_tags29_argument'}->createConditionValue();
if(!${'s_tags29_argument'}->isValid()) return ${'s_tags29_argument'}->getErrorMessage();
} else
${'s_tags29_argument'} = NULL;if(${'s_tags29_argument'} !== null) ${'s_tags29_argument'}->setColumnType('text');
if(isset($args->s_member_srl)) {
${'s_member_srl30_argument'} = new ConditionArgument('s_member_srl', $args->s_member_srl, 'equal');
${'s_member_srl30_argument'}->createConditionValue();
if(!${'s_member_srl30_argument'}->isValid()) return ${'s_member_srl30_argument'}->getErrorMessage();
} else
${'s_member_srl30_argument'} = NULL;if(${'s_member_srl30_argument'} !== null) ${'s_member_srl30_argument'}->setColumnType('number');
if(isset($args->s_readed_count)) {
${'s_readed_count31_argument'} = new ConditionArgument('s_readed_count', $args->s_readed_count, 'more');
${'s_readed_count31_argument'}->createConditionValue();
if(!${'s_readed_count31_argument'}->isValid()) return ${'s_readed_count31_argument'}->getErrorMessage();
} else
${'s_readed_count31_argument'} = NULL;if(${'s_readed_count31_argument'} !== null) ${'s_readed_count31_argument'}->setColumnType('number');
if(isset($args->s_voted_count)) {
${'s_voted_count32_argument'} = new ConditionArgument('s_voted_count', $args->s_voted_count, 'more');
${'s_voted_count32_argument'}->createConditionValue();
if(!${'s_voted_count32_argument'}->isValid()) return ${'s_voted_count32_argument'}->getErrorMessage();
} else
${'s_voted_count32_argument'} = NULL;if(${'s_voted_count32_argument'} !== null) ${'s_voted_count32_argument'}->setColumnType('number');
if(isset($args->s_blamed_count)) {
${'s_blamed_count33_argument'} = new ConditionArgument('s_blamed_count', $args->s_blamed_count, 'less');
${'s_blamed_count33_argument'}->createConditionValue();
if(!${'s_blamed_count33_argument'}->isValid()) return ${'s_blamed_count33_argument'}->getErrorMessage();
} else
${'s_blamed_count33_argument'} = NULL;if(${'s_blamed_count33_argument'} !== null) ${'s_blamed_count33_argument'}->setColumnType('number');
if(isset($args->s_comment_count)) {
${'s_comment_count34_argument'} = new ConditionArgument('s_comment_count', $args->s_comment_count, 'more');
${'s_comment_count34_argument'}->createConditionValue();
if(!${'s_comment_count34_argument'}->isValid()) return ${'s_comment_count34_argument'}->getErrorMessage();
} else
${'s_comment_count34_argument'} = NULL;if(${'s_comment_count34_argument'} !== null) ${'s_comment_count34_argument'}->setColumnType('number');
if(isset($args->s_trackback_count)) {
${'s_trackback_count35_argument'} = new ConditionArgument('s_trackback_count', $args->s_trackback_count, 'more');
${'s_trackback_count35_argument'}->createConditionValue();
if(!${'s_trackback_count35_argument'}->isValid()) return ${'s_trackback_count35_argument'}->getErrorMessage();
} else
${'s_trackback_count35_argument'} = NULL;if(${'s_trackback_count35_argument'} !== null) ${'s_trackback_count35_argument'}->setColumnType('number');
if(isset($args->s_uploaded_count)) {
${'s_uploaded_count36_argument'} = new ConditionArgument('s_uploaded_count', $args->s_uploaded_count, 'more');
${'s_uploaded_count36_argument'}->createConditionValue();
if(!${'s_uploaded_count36_argument'}->isValid()) return ${'s_uploaded_count36_argument'}->getErrorMessage();
} else
${'s_uploaded_count36_argument'} = NULL;if(${'s_uploaded_count36_argument'} !== null) ${'s_uploaded_count36_argument'}->setColumnType('number');
if(isset($args->s_regdate)) {
${'s_regdate37_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate37_argument'}->createConditionValue();
if(!${'s_regdate37_argument'}->isValid()) return ${'s_regdate37_argument'}->getErrorMessage();
} else
${'s_regdate37_argument'} = NULL;if(${'s_regdate37_argument'} !== null) ${'s_regdate37_argument'}->setColumnType('date');
if(isset($args->s_last_update)) {
${'s_last_update38_argument'} = new ConditionArgument('s_last_update', $args->s_last_update, 'like_prefix');
${'s_last_update38_argument'}->createConditionValue();
if(!${'s_last_update38_argument'}->isValid()) return ${'s_last_update38_argument'}->getErrorMessage();
} else
${'s_last_update38_argument'} = NULL;if(${'s_last_update38_argument'} !== null) ${'s_last_update38_argument'}->setColumnType('date');
if(isset($args->s_ipaddress)) {
${'s_ipaddress39_argument'} = new ConditionArgument('s_ipaddress', $args->s_ipaddress, 'like_prefix');
${'s_ipaddress39_argument'}->createConditionValue();
if(!${'s_ipaddress39_argument'}->isValid()) return ${'s_ipaddress39_argument'}->getErrorMessage();
} else
${'s_ipaddress39_argument'} = NULL;if(${'s_ipaddress39_argument'} !== null) ${'s_ipaddress39_argument'}->setColumnType('varchar');
if(isset($args->start_date)) {
${'start_date40_argument'} = new ConditionArgument('start_date', $args->start_date, 'more');
${'start_date40_argument'}->createConditionValue();
if(!${'start_date40_argument'}->isValid()) return ${'start_date40_argument'}->getErrorMessage();
} else
${'start_date40_argument'} = NULL;if(${'start_date40_argument'} !== null) ${'start_date40_argument'}->setColumnType('date');
if(isset($args->end_date)) {
${'end_date41_argument'} = new ConditionArgument('end_date', $args->end_date, 'less');
${'end_date41_argument'}->createConditionValue();
if(!${'end_date41_argument'}->isValid()) return ${'end_date41_argument'}->getErrorMessage();
} else
${'end_date41_argument'} = NULL;if(${'end_date41_argument'} !== null) ${'end_date41_argument'}->setColumnType('date');

${'page44_argument'} = new Argument('page', $args->{'page'});
${'page44_argument'}->ensureDefaultValue('1');
if(!${'page44_argument'}->isValid()) return ${'page44_argument'}->getErrorMessage();

${'page_count45_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count45_argument'}->ensureDefaultValue('10');
if(!${'page_count45_argument'}->isValid()) return ${'page_count45_argument'}->getErrorMessage();

${'list_count46_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count46_argument'}->ensureDefaultValue('20');
if(!${'list_count46_argument'}->isValid()) return ${'list_count46_argument'}->getErrorMessage();

${'sort_index42_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index42_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index42_argument'}->isValid()) return ${'sort_index42_argument'}->getErrorMessage();

${'order_type43_argument'} = new SortArgument('order_type43', $args->order_type);
${'order_type43_argument'}->ensureDefaultValue('asc');
if(!${'order_type43_argument'}->isValid()) return ${'order_type43_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl14_argument,"in")
,new ConditionWithArgument('`module_srl`',$exclude_module_srl15_argument,"notin", 'and')
,new ConditionWithArgument('`category_srl`',$category_srl16_argument,"in", 'and')
,new ConditionWithArgument('`is_notice`',$s_is_notice17_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl18_argument,"equal", 'and')
,new ConditionWithArgument('`status`',$statusList19_argument,"in", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`list_order`',$division20_argument,"more", 'and')
,new ConditionWithArgument('`list_order`',$last_division21_argument,"below", 'and')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`title`',$s_title22_argument,"like")
,new ConditionWithArgument('`content`',$s_content23_argument,"like", 'or')
,new ConditionWithArgument('`user_name`',$s_user_name24_argument,"like", 'or')
,new ConditionWithArgument('`user_id`',$s_user_id25_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$s_nick_name26_argument,"like", 'or')
,new ConditionWithArgument('`email_address`',$s_email_address27_argument,"like", 'or')
,new ConditionWithArgument('`homepage`',$s_homepage28_argument,"like", 'or')
,new ConditionWithArgument('`tags`',$s_tags29_argument,"like", 'or')
,new ConditionWithArgument('`member_srl`',$s_member_srl30_argument,"equal", 'or')
,new ConditionWithArgument('`readed_count`',$s_readed_count31_argument,"more", 'or')
,new ConditionWithArgument('`voted_count`',$s_voted_count32_argument,"more", 'or')
,new ConditionWithArgument('`blamed_count`',$s_blamed_count33_argument,"less", 'or')
,new ConditionWithArgument('`comment_count`',$s_comment_count34_argument,"more", 'or')
,new ConditionWithArgument('`trackback_count`',$s_trackback_count35_argument,"more", 'or')
,new ConditionWithArgument('`uploaded_count`',$s_uploaded_count36_argument,"more", 'or')
,new ConditionWithArgument('`regdate`',$s_regdate37_argument,"like_prefix", 'or')
,new ConditionWithArgument('`last_update`',$s_last_update38_argument,"like_prefix", 'or')
,new ConditionWithArgument('`ipaddress`',$s_ipaddress39_argument,"like_prefix", 'or')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`last_update`',$start_date40_argument,"more", 'and')
,new ConditionWithArgument('`last_update`',$end_date41_argument,"less", 'and')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index42_argument'}, $order_type43_argument)
));
$query->setLimit(new Limit(${'list_count46_argument'}, ${'page44_argument'}, ${'page_count45_argument'}));
return $query; ?>