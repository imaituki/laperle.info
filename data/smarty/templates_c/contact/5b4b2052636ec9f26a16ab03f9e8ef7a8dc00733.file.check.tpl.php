<?php /* Smarty version Smarty-3.1.18, created on 2019-11-14 18:37:59
         compiled from "./check.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13275175875dca08f40e5e74-82077781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b4b2052636ec9f26a16ab03f9e8ef7a8dc00733' => 
    array (
      0 => './check.tpl',
      1 => 1573723902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13275175875dca08f40e5e74-82077781',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5dca08f4124fb6_52939326',
  'variables' => 
  array (
    'template_meta' => 0,
    'template_javascript' => 0,
    'template_header' => 0,
    't_seminar' => 0,
    'arr_post' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dca08f4124fb6_52939326')) {function content_5dca08f4124fb6_52939326($_smarty_tpl) {?><!DOCTYPE html>
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
					<p class="mb10 c_red">まだフォームの送信は完了していません。</p>
					<p class="mb30">下記内容をご確認の上、「送信する」ボタンを押してください。</p>
					<form action="" method="post">
						<table class="tbl_form mb50">
							<tbody>
								<?php if ($_smarty_tpl->tpl_vars['t_seminar']->value['title']) {?>
								<tr>
									<th scope="row">申し込みセミナー</th>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['t_seminar']->value['title'];?>

										<input type="hidden" name="id_seminar" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['t_seminar']->value['id_seminar'])===null||$tmp==='' ? '' : $tmp);?>
">
									</td>
								</tr>
								<?php }?>
								<tr>
									<th scope="row">お名前</th>
									<td><?php echo $_smarty_tpl->tpl_vars['arr_post']->value['name'];?>
<input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['name'];?>
"></td>
								</tr>
								<tr>
									<th scope="row">フリガナ</th>
									<td><?php echo $_smarty_tpl->tpl_vars['arr_post']->value['ruby'];?>
<input type="hidden" name="ruby" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['ruby'];?>
" ></td>
								</tr>
								<tr>
									<th scope="row">メールアドレス</th>
									<td><?php echo $_smarty_tpl->tpl_vars['arr_post']->value['mail'];?>

										<input type="hidden" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['mail'];?>
">
									</td>
								</tr>
								<tr>
									<th scope="row">電話番号</th>
									<td><?php echo $_smarty_tpl->tpl_vars['arr_post']->value['tel'];?>

										<input type="hidden" name="tel" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['tel'];?>
">
									</td>
								</tr>
								<tr>
									<th scope="row">Fax番号</th>
									<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['fax'])===null||$tmp==='' ? "--" : $tmp);?>

										<input type="hidden" name="fax" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['fax'];?>
">
									</td>
								</tr>
								<tr>
									<th scope="row"><?php if ($_smarty_tpl->tpl_vars['t_seminar']->value['title']) {?>申し込み<?php } else { ?>お問い合わせ<?php }?>内容</th>
									<td><?php echo nl2br($_smarty_tpl->tpl_vars['arr_post']->value['comment']);?>

										<input type="hidden" name="comment" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['comment'];?>
" />
									</td>
								</tr>
							</tbody>
						</table>
						<div class="row form_button">
							<div class="col-xs-6 mb20 pos_ac">
								<button class="button _back" formaction="index.php?seminar=<?php echo $_smarty_tpl->tpl_vars['t_seminar']->value['id_seminar'];?>
" type="submit"><i class="fa fa-arrow-left"></i>修正する</button>
							</div>
							<div class="col-xs-6 pos_ac">
								<button id="send_button" class="button _more" formaction="send.php">送信する<i class="fa fa-arrow-right"></i></button>
							</div>
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
