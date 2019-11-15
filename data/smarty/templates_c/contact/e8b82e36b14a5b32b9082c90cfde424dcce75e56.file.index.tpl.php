<?php /* Smarty version Smarty-3.1.18, created on 2019-11-14 18:37:43
         compiled from "./index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12353256065dc9211e51d979-33757556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b82e36b14a5b32b9082c90cfde424dcce75e56' => 
    array (
      0 => './index.tpl',
      1 => 1573723902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12353256065dc9211e51d979-33757556',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5dc9211e540132_76275022',
  'variables' => 
  array (
    'template_meta' => 0,
    'template_javascript' => 0,
    'template_header' => 0,
    't_seminar' => 0,
    'message' => 0,
    'arr_post' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc9211e540132_76275022')) {function content_5dc9211e540132_76275022($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_meta']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="/common/css/import.css">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>
<body id="contact">
<div id="base">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<main>
<div id="body">
	<div id="page_title">
		<div class="img_back"><img src="/common/image/contents/contact/top.jpg" alt="お問い合わせ"></div>
		<div class="page_title_wrap">
			<div class="center">
				<h2>お問い合わせ</h2>
			</div>
		</div>
	</div>
	<div id="pankuzu" class="bg_dot">
		<div class="center">
			<ul>
				<li><a href="/">HOME</a></li>
				<li>お問い合わせ</li>
			</ul>
		</div>
	</div>
	<section>
		<div class="wrapper bg_lblueo">
			<div class="center">
				<div class="box entry">
					<form action="./check.php#form" method="post">
						<table class="tbl_form mb50">
							<tbody>
								<?php if ($_smarty_tpl->tpl_vars['t_seminar']->value['title']) {?>
								<tr>
									<th scope="row">申し込みセミナー</th>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['t_seminar']->value['title'];?>

										<input type="hidden" name="id_seminar" value="<?php echo $_smarty_tpl->tpl_vars['t_seminar']->value['id_seminar'];?>
" />
									</td>
								</tr>
								<?php }?>
								<tr>
									<th scope="row">お名前（漢字）<span class="need">必須</span></th>
									<td>
										<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['name'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['name'];?>
</span><?php }?>
										<input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['name'];?>
">
									</td>
								</tr>
								<tr>
									<th scope="row">お名前（フリガナ）<span class="need">必須</span></th>
									<td>
										<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['ruby'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['ruby'];?>
</span><?php }?>
										<input type="text" name="ruby" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['ruby'];?>
">
									</td>
								</tr>
								<tr>
									<th scope="row">メールアドレス<span class="need">必須</span></th>
									<td>
										<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['mail'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['mail'];?>
</span><?php }?>
										<input type="text" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['mail'];?>
" maxlength="255" >
									</td>
								</tr>
								<tr>
									<th scope="row">電話番号<span class="need">必須</span></th>
									<td>
										<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['tel'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['tel'];?>
</span><?php }?>
										<input type="text" name="tel" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['tel'];?>
" maxlength="13" class="w150" placeholder="090-000-0000">
									</td>
								</tr>
								<tr>
									<th scope="row">Fax番号</th>
									<td>
										<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['fax'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['fax'];?>
</span><?php }?>
										<input type="text" name="fax" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['fax'];?>
" maxlength="13" class="w150" placeholder="090-000-0000">
									</td>
								</tr>
								<tr class="last">
									<th scope="row"><?php if ($_smarty_tpl->tpl_vars['t_seminar']->value['title']) {?>申し込み<?php } else { ?>お問い合わせ<?php }?>内容<span class="need">必須</span></th>
									<td>
										<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['comment'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['comment'];?>
</span><?php }?>
										<textarea rows="5" name="comment"><?php echo $_smarty_tpl->tpl_vars['arr_post']->value['comment'];?>
</textarea>
									</td>
								</tr>
							</tbody>
						</table>
						<div class="pos_ac form_button">
							<button class="button _more" type="submit">確認する<i class="fa fa-arrow-right"></i></button>
						</div>
					</form>
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
