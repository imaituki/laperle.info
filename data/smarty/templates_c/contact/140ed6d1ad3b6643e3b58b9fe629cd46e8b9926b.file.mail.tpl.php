<?php /* Smarty version Smarty-3.1.18, created on 2019-12-16 14:14:17
         compiled from "./mail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13467651975dca0b9aa7a7c1-09775585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '140ed6d1ad3b6643e3b58b9fe629cd46e8b9926b' => 
    array (
      0 => './mail.tpl',
      1 => 1576473228,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13467651975dca0b9aa7a7c1-09775585',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5dca0b9aab48f6_65178550',
  'variables' => 
  array (
    'arr_post' => 0,
    'OptionAge' => 0,
    'OptionSex' => 0,
    'OptionTime' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dca0b9aab48f6_65178550')) {function content_5dca0b9aab48f6_65178550($_smarty_tpl) {?>--------------------------------------------------------
■ ご予約内容
--------------------------------------------------------
[お名前]
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['name'])===null||$tmp==='' ? '' : $tmp);?>


[お名前（フリガナ）]
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['ruby'])===null||$tmp==='' ? '' : $tmp);?>


[年齢]
<?php echo $_smarty_tpl->tpl_vars['OptionAge']->value[$_smarty_tpl->tpl_vars['arr_post']->value['age']];?>


[メール]
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['mail'])===null||$tmp==='' ? '' : $tmp);?>


[電話番号]
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['tel'])===null||$tmp==='' ? '' : $tmp);?>


[性別]
<?php echo $_smarty_tpl->tpl_vars['OptionSex']->value[$_smarty_tpl->tpl_vars['arr_post']->value['sex']];?>


[紹介者]
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['introducer'])===null||$tmp==='' ? '' : $tmp);?>


[予約希望日時(第一希望)]
<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['date1'];?>
　<?php echo $_smarty_tpl->tpl_vars['OptionTime']->value[$_smarty_tpl->tpl_vars['arr_post']->value['time1']];?>


[予約希望日時(第二希望)]
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['date2'])===null||$tmp==='' ? "--" : $tmp);?>
<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['time2']) {?>　<?php echo $_smarty_tpl->tpl_vars['OptionTime']->value[$_smarty_tpl->tpl_vars['arr_post']->value['time2']];?>
<?php }?>


[予約希望日時(第三希望)]
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['date3'])===null||$tmp==='' ? "--" : $tmp);?>
<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['time3']) {?>　<?php echo $_smarty_tpl->tpl_vars['OptionTime']->value[$_smarty_tpl->tpl_vars['arr_post']->value['time3']];?>
<?php }?>


[肌やお顔、体の悩み]
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['comment1'])===null||$tmp==='' ? "--" : $tmp);?>


[その他連絡事項]
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['comment2'])===null||$tmp==='' ? "--" : $tmp);?>

<?php }} ?>
