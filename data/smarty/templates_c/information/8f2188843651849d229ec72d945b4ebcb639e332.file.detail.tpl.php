<?php /* Smarty version Smarty-3.1.18, created on 2020-01-20 13:23:07
         compiled from "./detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16079345195dc912400ee812-37862559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f2188843651849d229ec72d945b4ebcb639e332' => 
    array (
      0 => './detail.tpl',
      1 => 1579494141,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16079345195dc912400ee812-37862559',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5dc91240109e58_19999524',
  'variables' => 
  array (
    'template_meta' => 0,
    'template_javascript' => 0,
    'template_header' => 0,
    't_information' => 0,
    '_RENEWAL_DIR' => 0,
    'arr_get' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc91240109e58_19999524')) {function content_5dc91240109e58_19999524($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/laperle/data/smarty/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_meta']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="/common/css/import.css">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script type="text/javascript" src="/common/js/lightbox/import.js"></script>
</head>
<body id="information_detail">
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
	<section class="bg_1 pos_re">
		<div class="pos_ab tp_0"><img src="/common/image/contents/top/deco_h.png" alt="フェイシャルレメディサロン la perle（ラペルル）"></div>
		<div class="center3">
			<div id="pankuzu">
				<ul>
					<li><a href="/">HOME</a></li>
					<li><?php echo $_smarty_tpl->tpl_vars['t_information']->value['title'];?>
</li>
				</ul>
			</div>
		</div>
		<div class="wrapper pos_re">
			<div class="center3 information">
				<h2 class="mincho pos_ac"><?php echo $_smarty_tpl->tpl_vars['t_information']->value['title'];?>
</h2>
				<div class="mb50 mincho pos_ac"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['t_information']->value['date'],"%Y/%m/%d");?>
</div>
				<?php if ($_smarty_tpl->tpl_vars['t_information']->value['image1']) {?>
				<div class="center2">
					<div class="pos_ac mb20"><img src="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/photo/information/image1/l_<?php echo $_smarty_tpl->tpl_vars['t_information']->value['image1'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['t_information']->value['title'];?>
"></div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['t_information']->value['image2']||$_smarty_tpl->tpl_vars['t_information']->value['image3']||$_smarty_tpl->tpl_vars['t_information']->value['image4']) {?>
						<div class="row mb30">
							<?php if ($_smarty_tpl->tpl_vars['t_information']->value['image2']) {?>
							<div class="col-xs-4 height-1 mb20">
								<a class="ov" href="/common/photo/information/image2/l_<?php echo $_smarty_tpl->tpl_vars['t_information']->value['image2'];?>
" rel="lightbox">
									<div class="img_rect"><img src="/common/photo/information/image2/m_<?php echo $_smarty_tpl->tpl_vars['t_information']->value['image2'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['t_information']->value['title'];?>
"></div></a>
							</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['t_information']->value['image3']) {?>
							<div class="col-xs-4 height-1 mb20">
								<a class="ov" href="/common/photo/information/image3/l_<?php echo $_smarty_tpl->tpl_vars['t_information']->value['image3'];?>
" rel="lightbox">
									<div class="img_rect"><img src="/common/photo/information/image3/m_<?php echo $_smarty_tpl->tpl_vars['t_information']->value['image3'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['t_information']->value['title'];?>
"></div></a>
							</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['t_information']->value['image4']) {?>
							<div class="col-xs-4 height-1 mb20">
								<a class="ov" href="/common/photo/information/image4/l_<?php echo $_smarty_tpl->tpl_vars['t_information']->value['image4'];?>
" rel="lightbox">
									<div class="img_rect"><img src="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/photo/information/image4/m_<?php echo $_smarty_tpl->tpl_vars['t_information']->value['image4'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['t_information']->value['title'];?>
"></div></a>
							</div>
							<?php }?>
						</div>
					<?php }?>
				</div>
				<div class="mb50"><?php echo $_smarty_tpl->tpl_vars['t_information']->value['comment'];?>
</div>
				<div class="pos_ac"><a href="/information/<?php if ($_smarty_tpl->tpl_vars['arr_get']->value['page']!=null) {?>?page=<?php echo $_smarty_tpl->tpl_vars['arr_get']->value['page'];?>
<?php }?>" class="button _more">新着情報一覧に戻る<i class="fas fa-angle-right"></i></a></div>
			</div>
		</div>
		<div class="pos_ab bt_0"><img src="/common/image/contents/top/deco_f.png" alt="フェイシャルレメディサロン la perle（ラペルル）"></div>
	</section>
</div>
</main>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
</body>
</html>
<?php }} ?>
