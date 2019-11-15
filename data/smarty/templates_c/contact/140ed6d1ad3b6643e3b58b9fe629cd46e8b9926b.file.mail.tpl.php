<?php /* Smarty version Smarty-3.1.18, created on 2019-11-14 18:38:44
         compiled from "./mail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13467651975dca0b9aa7a7c1-09775585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '140ed6d1ad3b6643e3b58b9fe629cd46e8b9926b' => 
    array (
      0 => './mail.tpl',
      1 => 1573723902,
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
    't_seminar' => 0,
    'arr_post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dca0b9aab48f6_65178550')) {function content_5dca0b9aab48f6_65178550($_smarty_tpl) {?>--------------------------------------------------------
■ <?php if ($_smarty_tpl->tpl_vars['t_seminar']->value['title']) {?>お申し込み<?php } else { ?>お問い合わせ<?php }?>内容
--------------------------------------------------------
<?php if ($_smarty_tpl->tpl_vars['t_seminar']->value['title']) {?>
[申し込みセミナー]
<?php echo $_smarty_tpl->tpl_vars['t_seminar']->value['title'];?>

<?php }?>

[お名前]
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['name'])===null||$tmp==='' ? '' : $tmp);?>


[フリガナ]
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['ruby'])===null||$tmp==='' ? '' : $tmp);?>


[メール]
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['mail'])===null||$tmp==='' ? '' : $tmp);?>


[電話番号]
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['tel'])===null||$tmp==='' ? '' : $tmp);?>


[Fax番号]
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['fax'])===null||$tmp==='' ? "--" : $tmp);?>


[<?php if ($_smarty_tpl->tpl_vars['t_seminar']->value['title']) {?>お申し込み<?php } else { ?>お問い合わせ<?php }?>内容]
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['comment'])===null||$tmp==='' ? '' : $tmp);?>

<?php }} ?>
