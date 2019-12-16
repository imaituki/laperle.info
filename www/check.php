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
//  初期化
//----------------------------------------
$message   = NULL;

//----------------------------------------
//  ヘッダー情報
//----------------------------------------
// タイトル
$_HTML_HEADER["title"] = "ご予約";

// キーワード
$_HTML_HEADER["keyword"] = "";

// ディスクリプション
$_HTML_HEADER["description"] = "";

//----------------------------------------
// エントリークラス
//----------------------------------------
// クラス呼び出し
$objManage  = new DB_manage( _DNS );
$objContact = new FT_contact( $objManage );

// 文字エンコード
$arr_post = $objContact->convert( $arr_post );

// チェック
$message = $objContact->check( $arr_post );

// クラス削除
unset( $objManage  );
unset( $objContact );

//----------------------------------------
//  smarty設定
//----------------------------------------
$smarty = new MySmarty("front");
$smarty->compile_dir .= "";

// テンプレートに設定
$smarty->assign( "message" , $message  );
$smarty->assign( "arr_post", $arr_post );

// オプション設定
$smarty->assign( "OptionAge"     , $OptionAge     );
$smarty->assign( "OptionSex"     , $OptionSex     );
$smarty->assign( "OptionTime"    , $OptionTime    );


// エラーチェック
if( empty( $message["ng"] ) ) {

	// 表示
	$smarty->display("check.tpl");

} else {

	// 表示
	$smarty->display("index.tpl");

}


?>
