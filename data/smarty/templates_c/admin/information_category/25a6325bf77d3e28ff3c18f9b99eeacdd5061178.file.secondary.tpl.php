<?php /* Smarty version Smarty-3.1.18, created on 2019-10-07 10:33:52
         compiled from "/home/jwcc/8063/html/admin/common/inc/secondary.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6911402975d96fe2470a5c6-19179471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25a6325bf77d3e28ff3c18f9b99eeacdd5061178' => 
    array (
      0 => '/home/jwcc/8063/html/admin/common/inc/secondary.tpl',
      1 => 1570412019,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6911402975d96fe2470a5c6-19179471',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5d96fe24745bc8_23133923',
  'variables' => 
  array (
    'manage' => 0,
    '_ADMIN' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d96fe24745bc8_23133923')) {function content_5d96fe24745bc8_23133923($_smarty_tpl) {?><nav class="navbar-default navbar-static-side" role="navigation">
	<div class="sidebar-collapse">
		<ul class="nav metismenu" id="side-menu" style="padding-bottom:30px;">
			<li class="nav-header">
				
			</li>
			<li<?php if ($_smarty_tpl->tpl_vars['manage']->value=='') {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/"><i class="fa fa-home"></i><span class="nav-label">HOME</span></a></li>
			<li <?php if ($_smarty_tpl->tpl_vars['action']->value=='information') {?>class="active"<?php }?>>
				<a href="#"><i class="fa fa-info-circle"></i><span class="nav-label">お知らせ管理</span><span class="fa arrow"></span></a>
				<ul class="nav nav-second-level collapse">
					<li <?php if ($_smarty_tpl->tpl_vars['manage']->value=='information') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/contents/information/">お知らせ一覧</a></li>
					<li <?php if ($_smarty_tpl->tpl_vars['manage']->value=='information_new') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/contents/information/php/new.php">お知らせ登録</a></li>
					<li <?php if ($_smarty_tpl->tpl_vars['manage']->value=='information_category') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/contents/information_category/">お知らせカテゴリ一覧</a></li>
					<li <?php if ($_smarty_tpl->tpl_vars['manage']->value=='information_category_new') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/contents/information_category/php/new.php">お知らせカテゴリ登録</a></li>
				</ul>
			</li>
			<li <?php if ($_smarty_tpl->tpl_vars['action']->value=='case') {?>class="active"<?php }?>>
				<a href="#"><i class="fa fa-truck"></i><span class="nav-label">事例管理</span><span class="fa arrow"></span></a>
				<ul class="nav nav-second-level collapse">
					<li <?php if ($_smarty_tpl->tpl_vars['manage']->value=='case') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/contents/case/">事例一覧</a></li>
					<li <?php if ($_smarty_tpl->tpl_vars['manage']->value=='case_new') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/contents/case/php/new.php">事例登録</a></li>
					<li <?php if ($_smarty_tpl->tpl_vars['manage']->value=='case_category') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/contents/case_category/">事例カテゴリ一覧</a></li>
					<li <?php if ($_smarty_tpl->tpl_vars['manage']->value=='case_category_new') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/contents/case_category/php/new.php">事例カテゴリ登録</a></li>
				</ul>
			</li>
			<li<?php if ($_smarty_tpl->tpl_vars['manage']->value=="siteconf") {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/contents/siteconf/"><i class="fa fa-gear"></i><span class="nav-label">サイト設定</span></a></li>
		</ul>
	</div>
</nav>
<?php }} ?>
