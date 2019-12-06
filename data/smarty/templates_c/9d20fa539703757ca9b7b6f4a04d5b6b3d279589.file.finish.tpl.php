<?php /* Smarty version Smarty-3.1.18, created on 2019-11-27 12:02:11
         compiled from "./finish.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21203846265ddcf0a19e5d41-91442088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d20fa539703757ca9b7b6f4a04d5b6b3d279589' => 
    array (
      0 => './finish.tpl',
      1 => 1574823208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21203846265ddcf0a19e5d41-91442088',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ddcf0a1a0f888_29399241',
  'variables' => 
  array (
    'template_meta' => 0,
    'template_javascript' => 0,
    'template_header' => 0,
    'arr_post' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ddcf0a1a0f888_29399241')) {function content_5ddcf0a1a0f888_29399241($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_meta']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="/common/css/import.css">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>
<body id="contact_finish">
<div id="base">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<main>
<div id="body">
	<div id="page_title">
		<div class="img_back"><img src="/common/image/contents/title.jpg" alt="ご予約"></div>
		<div class="page_title_wrap">
			<div class="center3 mincho cg">
				<h2 class="mincho"><span class="en">Contact</span>～ご予約～</h2>
			</div>
		</div>
	</div>
	<section class="bg_3 pos_re">
		<div class="pos_ab tp_0"><img src="/common/image/contents/top/h_deco.png" alt="フェイシャルレメディサロン ~la perle~"></div>
		<div class="center3">
			<div id="pankuzu">
				<ul>
					<li><a href="/">HOME</a></li>
					<li>ご予約</li>
				</ul>
			</div>
		</div>
		<div class="wrapper pos_re finish">
			<div class="center3">
				<h4 class="mincho mb50 pos_al">ご予約が完了しました</h4>
				<div class="bg_clear">
					<div class="center2">
						<p class="mb20">ご入力いただいたメールアドレス<?php if (!empty($_smarty_tpl->tpl_vars['arr_post']->value['mail'])) {?>(<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['mail'];?>
)<?php }?>宛に、確認メールをお送りしておりますのでご確認ください。</p>
						<p class="mb20">
							しばらくたっても自動送信メールが届かない場合には、主に次の原因が考えられます。<br>
							「ご入力いただいたメールアドレスが間違っている」<br>
							「迷惑メール対策による受信メールの自動削除設定」<br>
							「メールボックスの容量オーバー（特にフリーメール）」<br>
							「メールの受信制限や拒否設定（特に携帯メール）」</p>
						<p class="mb20">メールアドレスの間違いや、ドメイン指定などの受信設定を今一度ご確認いただき、<br class="hidden-only">送受信できる正しいメールアドレスを、メールまたはお電話にてご連絡くださいますようお願い申し上げます。</p>
						<p>その他、何かご不明な点等ございましたら、お気軽にお問い合わせください。</p>
					</div>
				</div>
				<div class="pos_ac "><a href="/" class="button _more"><i class="fa fa-arrow-right"></i>トップページに戻る</a></div>
			</div>
		</div>
		<div class="pos_ab bt_0"><img src="/common/image/contents/top/f_deco.png" alt="フェイシャルレメディサロン ~la perle~"></div>
	</section>
</div>
</main>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
</body>
</html>
<?php }} ?>
