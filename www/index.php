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
//  データ取得
//----------------------------------------
// 操作クラス
$objManage      = new DB_manage( _DNS );
$objInformation = new FT_information( $objManage );

// お知らせ
$t_information  = $objInformation->GetSearchList( null, array("fetch" => _DB_FETCH_ALL), 4 );

// クラス削除
unset( $objInformation   );
unset( $objManage        );

//----------------------------------------
//  smarty設定
//----------------------------------------
$smarty = new MySmarty("front");
$smarty->compile_dir .= "";

// テンプレートに設定
$smarty->assign( "t_information" , $t_information );

// オプション設定
$smarty->assign( "OptionAge"     , $OptionAge     );
$smarty->assign( "OptionSex"     , $OptionSex     );

// 表示
$smarty->display("index.tpl");

?>
