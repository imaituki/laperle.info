<?php /* Smarty version Smarty-3.1.18, created on 2019-11-13 09:59:53
         compiled from "../template/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15721923775d9db06c0306b4-55849894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '536be3878faadbfd3173360df0efbc870ffbb3e2' => 
    array (
      0 => '../template/list.tpl',
      1 => 1573454558,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15721923775d9db06c0306b4-55849894',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5d9db06c0c8589_85913552',
  'variables' => 
  array (
    'template_pagenavi' => 0,
    't_seminar' => 0,
    'seminar' => 0,
    'arr_post' => 0,
    'OptionSeminarCategory' => 0,
    '_CONTENTS_ID' => 0,
    '_ARR_IMAGE' => 0,
    'file' => 0,
    '_IMAGEFULLPATH' => 0,
    '_CONTENTS_DIR' => 0,
    '_ARR_FILE' => 0,
    'file2' => 0,
    '_FILEFULLPATH' => 0,
    '_CONTENTS_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d9db06c0c8589_85913552')) {function content_5d9db06c0c8589_85913552($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/brownotter8/data/smarty/libs/plugins/modifier.date_format.php';
?>
<script type="text/javascript">
sortableInit();
</script>

<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_pagenavi']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<table class="footable table table-stripped toggle-arrow-tiny tbl_1" data-page-size="15" id="sortable-table">
	<thead>
		<tr>
			<th></th>
			<th width="200">開催日</th>
			<th>掲載期間</th>
			<th>カテゴリ</th>
			<th>タイトル</th>
			<th class="photo">写真</th>
			<th class="photo">ﾌｧｲﾙ</th>
			<th class="showhide">表示</th>
			<th class="delete">削除</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<th></th>
			<th>開催日</th>
			<th>掲載期間</th>
			<th>カテゴリ</th>
			<th>タイトル</th>
			<th class="photo">写真</th>
			<th class="photo">ﾌｧｲﾙ</th>
			<th class="showhide">表示</th>
			<th class="delete">削除</th>
		</tr>
	</tfoot>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['seminar'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['seminar']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['t_seminar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['seminar']->key => $_smarty_tpl->tpl_vars['seminar']->value) {
$_smarty_tpl->tpl_vars['seminar']->_loop = true;
?>
		<tr id="<?php echo $_smarty_tpl->tpl_vars['seminar']->value['id_seminar'];?>
">
			<td class="move_i"><?php if ((($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['mode'])===null||$tmp==='' ? '' : $tmp)=="search") {?><?php } else { ?><i class="fa fa-sort"><span></span></i><?php }?></td>
			<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['seminar']->value['date_start'],"%Y/%m/%d");?>
～<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['seminar']->value['date_end'],"%Y/%m/%d");?>
</td>
			<td>
				<?php if ($_smarty_tpl->tpl_vars['seminar']->value['display_indefinite']==0) {?>
					<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['seminar']->value['display_start'],"%Y/%m/%d");?>
<br />
					<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['seminar']->value['display_end'],"%Y/%m/%d");?>

				<?php } else { ?>
					無期限
				<?php }?>
			</td>
			<td>
				<?php echo $_smarty_tpl->tpl_vars['OptionSeminarCategory']->value[$_smarty_tpl->tpl_vars['seminar']->value['seminar_category']];?>

			</td>
			<td><a href="./edit.php?id=<?php echo $_smarty_tpl->tpl_vars['seminar']->value[$_smarty_tpl->tpl_vars['_CONTENTS_ID']->value];?>
"><?php echo $_smarty_tpl->tpl_vars['seminar']->value['title'];?>
</a></td>
			<td class="pos_al">
				<div class="lightBoxGallery">
					<?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_ARR_IMAGE']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['file']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['file']['iteration']++;
?>
						<?php if ($_smarty_tpl->tpl_vars['seminar']->value[$_smarty_tpl->tpl_vars['file']->value['name']]) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['_CONTENTS_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>
/l_<?php echo $_smarty_tpl->tpl_vars['seminar']->value[$_smarty_tpl->tpl_vars['file']->value['name']];?>
" title="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['file']->value['comment'])===null||$tmp==='' ? '' : $tmp);?>
" rel="lightbox[]">
								<img src="<?php echo $_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['_CONTENTS_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>
/s_<?php echo $_smarty_tpl->tpl_vars['seminar']->value[$_smarty_tpl->tpl_vars['file']->value['name']];?>
" width="50" />
							</a>
						<?php }?>
						<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['file']['iteration']%3==0) {?><br /><?php }?>
					<?php } ?>
				</div>
			</td>
			<td class="pos_al">
				<?php  $_smarty_tpl->tpl_vars['file2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_ARR_FILE']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['file2']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['file2']->key => $_smarty_tpl->tpl_vars['file2']->value) {
$_smarty_tpl->tpl_vars['file2']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['file2']['iteration']++;
?>
					<?php if ($_smarty_tpl->tpl_vars['seminar']->value[$_smarty_tpl->tpl_vars['file2']->value['name']]) {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['_FILEFULLPATH']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['_CONTENTS_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['file2']->value['name'];?>
/<?php echo $_smarty_tpl->tpl_vars['seminar']->value[$_smarty_tpl->tpl_vars['file2']->value['name']];?>
" title="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['file2']->value['comment'])===null||$tmp==='' ? '' : $tmp);?>
" target="_blank" ">
							<i class="fa fa-file-text-o" aria-hidden="true"></i>
						</a>
					<?php }?>
					<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['file2']['iteration']%3==0) {?><br /><?php }?>
				<?php } ?>
			</td>
			<td class="pos_ac">
				<div class="switch">
					<div class="onoffswitch">
						<input type="checkbox" value="1" class="onoffswitch-checkbox btn_display" id="display<?php echo $_smarty_tpl->tpl_vars['seminar']->value[$_smarty_tpl->tpl_vars['_CONTENTS_ID']->value];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['seminar']->value[$_smarty_tpl->tpl_vars['_CONTENTS_ID']->value];?>
"<?php if ($_smarty_tpl->tpl_vars['seminar']->value['display_flg']==1) {?> checked<?php }?>>
						<label class="onoffswitch-label" for="display<?php echo $_smarty_tpl->tpl_vars['seminar']->value[$_smarty_tpl->tpl_vars['_CONTENTS_ID']->value];?>
">
							<span class="onoffswitch-inner"></span>
							<span class="onoffswitch-switch"></span>
						</label>
					</div>
				</div>
			</td>
			<td class="pos_ac">
				<a href="javascript:void(0)" class="btn btn-danger btn_delete" data-id="<?php echo $_smarty_tpl->tpl_vars['seminar']->value[$_smarty_tpl->tpl_vars['_CONTENTS_ID']->value];?>
">削除</a>
			</td>
		</tr>
		<?php }
if (!$_smarty_tpl->tpl_vars['seminar']->_loop) {
?>
		<tr>
			<td colspan="6"><?php echo $_smarty_tpl->tpl_vars['_CONTENTS_NAME']->value;?>
は見つかりません。</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_pagenavi']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
