<?php
//-------------------------------------------------------------------
// 作成日：2019/10/11
// 作成者：岡田
// 内  容：トップページ
//-------------------------------------------------------------------

//----------------------------------------
//  共通設定
//----------------------------------------
require "./config.ini";

//----------------------------------------
//  smarty設定
//----------------------------------------
$smarty = new MySmarty("front");
$smarty->compile_dir .= "privacy/";

// 表示
$smarty->display("index.tpl");

?>
