<?php /* Smarty version Smarty-3.1.18, created on 2020-01-17 18:59:48
         compiled from "./check.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3180762165ddcde52003e09-78787870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b4b2052636ec9f26a16ab03f9e8ef7a8dc00733' => 
    array (
      0 => './check.tpl',
      1 => 1579255055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3180762165ddcde52003e09-78787870',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ddcde52075002_62070045',
  'variables' => 
  array (
    'template_meta' => 0,
    'template_javascript' => 0,
    'template_header' => 0,
    'arr_post' => 0,
    'OptionSex' => 0,
    'OptionTime' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ddcde52075002_62070045')) {function content_5ddcde52075002_62070045($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/laperle/data/smarty/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_meta']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="/common/css/import.css">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>
<body id="contact_check">
<div id="base">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<main>
<div id="body">
	<div id="page_title">
		<div class="img_back"><img src="/common/image/contents/title.jpg" alt="～ご予約～"></div>
		<div class="page_title_wrap">
			<div class="center3 mincho cg">
				<h2 class="mincho"><span class="en">Contact</span>～ご予約～</h2>
			</div>
		</div>
	</div>
	<section class="bg_3 pos_re">
		<div class="center3">
			<div id="pankuzu">
				<ul>
					<li><a href="/">HOME</a></li>
					<li>ご予約</li>
				</ul>
			</div>
		</div>
		<div class="wrapper pos_re">
			<form action="./#form" method="post">
				<div class="center3">
					<h4 class="mincho mb50 pos_al">確認フォーム</h4>
					<div class="bg_clear">
						<table class="tbl_form mb50">
							<tbody>
								<tr>
									<th scope="row">お名前</th>
									<td><?php echo $_smarty_tpl->tpl_vars['arr_post']->value['name'];?>
<input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['name'];?>
"></td>
								</tr>
								<tr>
									<th scope="row">お名前（フリガナ）</th>
									<td><?php echo $_smarty_tpl->tpl_vars['arr_post']->value['ruby'];?>
<input type="hidden" name="ruby" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['ruby'];?>
" ></td>
								</tr>
								<tr>
									<th scope="row">生年月日</th>
									<td>
										<?php echo smarty_modifier_date_format(implode($_smarty_tpl->tpl_vars['arr_post']->value['birthday'],"-"),"%Y年%m月%d日");?>

										<input type="hidden" name="birthday[Year]" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['birthday']['Year'];?>
">
										<input type="hidden" name="birthday[Month]" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['birthday']['Month'];?>
">
										<input type="hidden" name="birthday[Day]" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['birthday']['Day'];?>
">
									</td>
								</tr>
								
								<tr>
									<th scope="row">メールアドレス</th>
									<td><?php echo $_smarty_tpl->tpl_vars['arr_post']->value['mail'];?>
<input type="hidden" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['mail'];?>
" ></td>

								</tr>
								<tr>
									<th scope="row">電話番号</th>
									<td><?php echo $_smarty_tpl->tpl_vars['arr_post']->value['tel'];?>
<input type="hidden" name="tel" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['tel'];?>
" ></td>
								</tr>
								<tr>
									<th scope="row">性別</th>
									<td><?php echo $_smarty_tpl->tpl_vars['OptionSex']->value[$_smarty_tpl->tpl_vars['arr_post']->value['sex']];?>
<input type="hidden" name="sex" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['sex'];?>
" ></td>
								</tr>
								<tr>
									<th scope="row">紹介者</th>
									<td><?php echo $_smarty_tpl->tpl_vars['arr_post']->value['introducer'];?>
<input type="hidden" name="introducer" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['introducer'];?>
" ></td>

								</tr>
								<tr>
									<th scope="row">予約希望日時（第一希望）</th>
									<td><?php echo $_smarty_tpl->tpl_vars['arr_post']->value['date1'];?>
　<?php echo $_smarty_tpl->tpl_vars['OptionTime']->value[$_smarty_tpl->tpl_vars['arr_post']->value['time1']];?>

										<input type="hidden" name="date1" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['date1'];?>
" >
										<input type="hidden" name="time1" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['time1'];?>
" >
									</td>
								</tr>
								<tr>
									<th scope="row">予約希望日時（第二希望）</th>
									<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['date2'])===null||$tmp==='' ? "--" : $tmp);?>
　<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['time2']) {?><?php echo $_smarty_tpl->tpl_vars['OptionTime']->value[$_smarty_tpl->tpl_vars['arr_post']->value['time2']];?>
<?php }?>
										<input type="hidden" name="date2" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['date2'];?>
" >
										<input type="hidden" name="time2" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['time2'];?>
" >
									</td>
								</tr>
								<tr>
									<th scope="row">予約希望日時（第三希望）</th>
									<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['date3'])===null||$tmp==='' ? "--" : $tmp);?>
　<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['time3']) {?><?php echo $_smarty_tpl->tpl_vars['OptionTime']->value[$_smarty_tpl->tpl_vars['arr_post']->value['time3']];?>
<?php }?>
										<input type="hidden" name="date3" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['date3'];?>
" >
										<input type="hidden" name="time3" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['time3'];?>
" >
									</td>
								</tr>
								<tr class="last">
									<th scope="row" style="vertical-align: unset;">肌やお顔、体の悩み</th>
									<td><?php echo (($tmp = @nl2br($_smarty_tpl->tpl_vars['arr_post']->value['comment1']))===null||$tmp==='' ? "--" : $tmp);?>
<input type="hidden" name="comment1" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['comment1'];?>
" ></td>
								</tr>
								<tr class="last">
									<th scope="row" style="vertical-align: unset;">その他連絡事項</th>
									<td><?php echo (($tmp = @nl2br($_smarty_tpl->tpl_vars['arr_post']->value['comment2']))===null||$tmp==='' ? "--" : $tmp);?>
<input type="hidden" name="comment2" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['comment2'];?>
" ></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="pos_ac form_button mb100">
					<div class="col-xs-6 mb20 left">
						<button class="button _back" type="submit"><i class="fas fa-arrow-left"></i>修正する</button>
					</div>
					<div class="col-xs-6 right">
						<button id="send_button" class="button" type="submit">送信する<i class="fas fa-arrow-right"></i></button>
					</div>
				</div>
			</form>
		</div>
	</section>
</div>
</main>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
</body>
</html>
<?php }} ?>
