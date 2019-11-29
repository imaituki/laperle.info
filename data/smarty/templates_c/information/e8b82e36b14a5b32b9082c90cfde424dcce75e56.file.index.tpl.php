<?php /* Smarty version Smarty-3.1.18, created on 2019-11-28 18:29:14
         compiled from "./index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12515870495dc90a92eb1ac5-14590928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b82e36b14a5b32b9082c90cfde424dcce75e56' => 
    array (
      0 => './index.tpl',
      1 => 1574933347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12515870495dc90a92eb1ac5-14590928',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5dc90a92ed4495_20779955',
  'variables' => 
  array (
    'template_meta' => 0,
    'template_javascript' => 0,
    'template_header' => 0,
    't_information' => 0,
    'information' => 0,
    'arr_get' => 0,
    '_RENEWAL_DIR' => 0,
    'page_navi' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc90a92ed4495_20779955')) {function content_5dc90a92ed4495_20779955($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/laperle/data/smarty/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_meta']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="/common/css/import.css">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>
<body id="information_list">
<div id="base">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<main>
<div id="body">
	<div id="page_title">
		<div class="img_back"><img src="/common/image/contents/title.jpg" alt="新着情報"></div>
		<div class="page_title_wrap">
			<div class="center3 mincho cg">
				<h2 class="mincho"><span class="en">Information</span>～新着情報～</h2>
			</div>
		</div>
	</div>
	<section>
		<div class="bg_1 pos_re body">
			<div class="center3">
				<div id="pankuzu">
					<ul>
						<li><a href="/">HOME</a></li>
						<li>新着情報一覧</li>
					</ul>
				</div>
			</div>
			<div class="wrapper pos_re">
				<div class="center3 information">
					<div class="row mb50">
						<?php  $_smarty_tpl->tpl_vars["information"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["information"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['t_information']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["information"]->key => $_smarty_tpl->tpl_vars["information"]->value) {
$_smarty_tpl->tpl_vars["information"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["information"]->key;
?>
						<a href="./detail.php?id=<?php echo $_smarty_tpl->tpl_vars['information']->value['id_information'];?>
<?php if ($_smarty_tpl->tpl_vars['arr_get']->value['page']!=null) {?>&page=<?php echo $_smarty_tpl->tpl_vars['arr_get']->value['page'];?>
<?php }?>">
							<div class="col-xs-6 mb30">
								<div class="img_rect"><img src="<?php if ($_smarty_tpl->tpl_vars['information']->value['image1']) {?><?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/photo/information/image1/m_<?php echo $_smarty_tpl->tpl_vars['information']->value['image1'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/image/contents/null.jpg<?php }?>" alt="<?php echo $_smarty_tpl->tpl_vars['information']->value['title'];?>
"></div>
								<div class="bg_clear">
									<p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['information']->value['date'],"%Y/%m/%d");?>
</p>
									<p><?php echo $_smarty_tpl->tpl_vars['information']->value['title'];?>
</p>
								</div>
							</div>
						</a>
						<?php }
if (!$_smarty_tpl->tpl_vars["information"]->_loop) {
?>
						<div class="pos_ac">お知らせはありません。</div>
						<?php } ?>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['page_navi']->value['LinkPage']) {?>
					<div class="list_pager">
						<ul class="mt10">
							<?php echo $_smarty_tpl->tpl_vars['page_navi']->value['LinkPage'];?>

						</ul>
					</div>
					<?php }?>
				</div>
			</div>
		</div>
	</section>
</div>
</main>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
</body>
</html>
<?php }} ?>
