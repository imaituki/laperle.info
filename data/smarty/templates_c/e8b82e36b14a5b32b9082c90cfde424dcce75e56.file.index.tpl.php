<?php /* Smarty version Smarty-3.1.18, created on 2020-01-20 13:13:16
         compiled from "./index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1856378865dccf1764d4590-07011526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b82e36b14a5b32b9082c90cfde424dcce75e56' => 
    array (
      0 => './index.tpl',
      1 => 1579493571,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1856378865dccf1764d4590-07011526',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5dccf176581ed0_11845040',
  'variables' => 
  array (
    'template_meta' => 0,
    'template_javascript' => 0,
    'template_header' => 0,
    'mst_siteconf' => 0,
    't_information' => 0,
    'information' => 0,
    'message' => 0,
    'arr_post' => 0,
    'OptionSex' => 0,
    'OptionTime' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dccf176581ed0_11845040')) {function content_5dccf176581ed0_11845040($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/laperle/data/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_html_select_date2')) include '/home/laperle/data/smarty/libs/plugins/function.html_select_date2.php';
if (!is_callable('smarty_function_html_radios')) include '/home/laperle/data/smarty/libs/plugins/function.html_radios.php';
if (!is_callable('smarty_function_html_options')) include '/home/laperle/data/smarty/libs/plugins/function.html_options.php';
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_meta']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="/common/css/import.css">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script type="text/javascript" src="/common/js/top.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css">
</head>
<body id="top">
<div id="base">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<main>
<div id="top_unit">
	<div id="main_image">
		<div class="unit">
			<div class="sp_none img_back"><img src="/common/image/contents/top/main_img-1.jpg" alt="フェイシャルレメディサロン la perle（ラペルル）"></div>
			<div class="pc_none img_back"><img src="/common/image/contents/top/sp_main_img-1.jpg" alt="フェイシャルレメディサロン la perle（ラペルル）"></div>
		</div>
		<div class="unit">
			<div class="sp_none img_back"><img src="/common/image/contents/top/main_img-2.jpg" alt="フェイシャルレメディサロン la perle（ラペルル）"></div>
			<div class="pc_none img_back"><img src="/common/image/contents/top/sp_main_img-2.jpg" alt="フェイシャルレメディサロン la perle（ラペルル）"></div>
		</div>
		<div class="unit">
			<div class="sp_none img_back"><img src="/common/image/contents/top/main_img-3.jpg" alt="フェイシャルレメディサロン la perle（ラペルル）"></div>
			<div class="pc_none img_back"><img src="/common/image/contents/top/sp_main_img-3.jpg" alt="フェイシャルレメディサロン la perle（ラペルル）"></div>
		</div>
		<div class="unit">
			<div class="sp_none img_back"><img src="/common/image/contents/top/main_img-4.jpg" alt="フェイシャルレメディサロン la perle（ラペルル）"></div>
			<div class="pc_none img_back"><img src="/common/image/contents/top/sp_main_img-4.jpg" alt="フェイシャルレメディサロン la perle（ラペルル）"></div>
		</div>
		<div class="unit">
			<div class="sp_none img_back"><img src="/common/image/contents/top/main_img-5.jpg" alt="フェイシャルレメディサロン la perle（ラペルル）"></div>
			<div class="pc_none img_back"><img src="/common/image/contents/top/sp_main_img-5.jpg" alt="フェイシャルレメディサロン la perle（ラペルル）"></div>
		</div>
	</div>
	<div id="main_image_text">
		<div id="main_image_text_in">
			<div class="center3">
				<h1 class="c1 mincho pos_ac-pc"><span>岡山県初</span>フェイシャルレメディ&reg;サロン</h1>
			</div>
		</div>
	</div>
</div>
<div id="body">
	<section>
		<div id="about" class="wrapper bg_0">
			<div class="center3">
				<div class="row top_menu">
					<div class="col-xs-4">
						<div class="title_photo box_shadow bor10"><img src="/common/image/contents/top/image1.jpg" alt="フェイシャルレメディ&reg;とは"></div>
					</div>
					<div class="col-xs-8">
						<h2 class="mincho mb30"><span class="en">About facial remedy</span>～フェイシャルレメディ&reg;とは～</h2>
						<p class="text border">フェイシャルレメディ&reg;︎とは、予防医学を目的とした<span class="c_red fw_bold">オールハンド、オーダーメイドの新しいエステティック手技</span>のことです。</p>
					</div>
				</div>
				<p class="mb30"><span class="c_blue fw_bold">【体の全てを本来あるべき状態に戻す】 / 【自己治癒力を高め、自分で健康美をキープする】 / 【感情による思考のクセを回避してネガティブな部分をデトックスしストレスの緩和→美容健康を高める】</span><br>といった美容効果が認められています。</p>
				<p class="mb30"><span class="c_red fw_bold">自律神経、免疫、ホルモン</span>のバランスを整え自己治癒力を高めながら、お肌の<span class="c_red fw_bold">むくみ、シワ、シミ、くすみ、たるみ、ニキビ、毛穴の開き、乾燥</span>などあらゆるお悩みの根本原因を解消します。<br>お顔には体の反射区があり、体内環境、骨格筋肉、性格、思考、感情、クセ、生活習慣など、様々な不調和の原因は、全てお顔に現れます。</p>
				<p>フェイシャルレメディ&reg;︎では、お顔に現れた不調和を読み取り、反対にお顔から不調和へとアプローチすることで根本から健康で美しいお肌、体、心へと導きます。</p>
			</div>
		</div>
	</section>
	<section>
		<div id="message" class="wrapper bg_1">
			<div class="center3">
				<h2 class="mincho mb50"><span class="en">About the Beauty Therapist</span>～セラピストについて～</h2>
				<div class="row mb50">
					<div class="col-xs-4 col-xs-push-8 height-1 disp_tb name_box">
						<div class="disp_tc pos_vt">
							<div class="box_shadow bor10 mb20"><img src="/common/image/contents/top/image2.jpg" alt="松井しおり"></div>
							<div class="pd">
								<p>フェイシャルレメディ&reg;協会</p>
								<p class="post">認定エステティシャン</p>
								<p class="name"><?php echo $_smarty_tpl->tpl_vars['mst_siteconf']->value['representative'];?>
</p>
							</div>
						</div>
					</div>
					<div class="col-xs-8 col-xs-pull-4 height-1 disp_tb">
						<div class="disp_tc">
							<h3 class="mb20">岡山唯一のフェイシャルレメディスト　松井しおり</h3>
							<p class="mb20">大学を卒業後、全国展開の大手エステサロンに就職、過去、月300万円の売り上げが最高だと言われた薄利多売の脱毛部門の経営モデルの中、月600万円をたった一人で売り上げた、全国1位の売り上げ実績と、会社で過去最高の金額を打ち出した記録を持つエステティシャンである。</p>
							<p class="mb20">幼い頃、全てのことに納得しないと出来ない性格であったと自覚する反面、社会人に成長するにつれ、気づけば自分の行動言動が人の顔色や、他人からの評価、を気にすることで心身のダメージを受けるように…。<br>これがストレスだとさえ気づかなかった状態。体調不良もこれが原因だとわからず、その後、心身とも辛い時期を過ごした経験をもつ。</p>
							<p class="mb20">そんな時にフェイシャルレメディ&reg;︎と出会い、学び習得することでようやく変わることができたと実感。家族の原因不明であった不調和も自身の施術で改善を目の当たりにする。<br>ストレスのスイッチを克服し、自分らしさを取り戻し、心身健康でいられることがどれほど、生きやすいのかということを実感し、自分や家族の不調を変えることができた経験を元に地元、岡山にサロンを独立開業。<br>今や多くのクライアントの、『心の安定』そこがベースである、という自身の考えから、健康や美容をフェイシャルレメディストとして提唱している。</p>
							<p class="mb30">フェイシャルレメディ&reg;︎の創始者、岩崎るみ氏より、直々の指導を受けている認定セラピストでもあり、今もなお、自分と顧客の為にもさらに知識や技術を掘り下げ追求するために、遠方までレッスンに通っている。</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3 height-1 disp_tb certificate">
						<div class="disp_tc">
							<div class="box_shadow bor10 mb20"><img src="/common/image/contents/top/image3.jpg" alt="フェイシャルレメディ&reg;︎協会 認定証書"></div>
							<p class="pos_ac">フェイシャルレメディ&reg;︎協会 認定証書</p>
						</div>
					</div>
					<div class="col-sm-9 height-1 disp_tb license">
						<div class="disp_tc">
							<h3 class="fw_bold mb10 sp_mt20">フェイシャルレメディ&reg;︎協会 <br class="visible-only">取得ライセンスマーク</h3>
							<div class="col-xs-6 bg_clear height-1 flex">
								<div class="license_unit">
									<div class="license_box">
										<div class="photo">
											<div class="img_back"><img src="/common/image/contents/top/mark1.png" alt="フェイシャルレメディ&reg;ディプロマコース"></div>
										</div>
										<div class="text">
											<p>FRA協会 フェイシャルレメディ&reg;<br class="visible-only">ディプロマコース</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-6 bg_clear height-1 flex">
								<div class="license_unit">
									<div class="license_box">
										<div class="photo">
											<div class="img_back"><img src="/common/image/contents/top/mark2.png" alt="フェイシャルレメディ&reg;ディプロマコース"></div>
										</div>
										<div class="text">
											<p>FRA協会 クレンジングマスター&reg;</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-6 bg_clear height-1 flex">
								<div class="license_unit">
									<div class="license_box">
										<div class="photo">
											<div class="img_back"><img src="/common/image/contents/top/mark3.png" alt="フェイシャルレメディ&reg;︎<br>FORセルフプラクティショナー認定講座"></div>
										</div>
										<div class="text">
											<p>FRA協会 フェイシャルレメディ&reg;︎<br>FORセルフインストラクター</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-6 bg_clear height-1 flex">
								<div class="license_unit">
									<div class="license_box">
										<div class="photo">
											<div class="img_back"><img src="/common/image/contents/top/mark4.png" alt="タッチニスト"></div>
										</div>
										<div class="text">
											<p>FRA協会 タッチニスト</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div id="information" class="wrapper bg_2">
			<div class="center3 mb50">
				<h2 class="mincho pos_ac mb50">～新着情報～<span class="sub">Information</span></h2>
				<div class="row mb30">
					<?php  $_smarty_tpl->tpl_vars["information"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["information"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['t_information']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["information"]->key => $_smarty_tpl->tpl_vars["information"]->value) {
$_smarty_tpl->tpl_vars["information"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["information"]->key;
?>
					<div class="col-xs-6">
						<div class="info_unit bg_clear">
							<a href="/information/detail.php?id=<?php echo $_smarty_tpl->tpl_vars['information']->value['id_information'];?>
">
								<div class="photo">
									<div class="img_sq"><img src="<?php if ($_smarty_tpl->tpl_vars['information']->value['image1']) {?>/common/photo/information/image1/l_<?php echo $_smarty_tpl->tpl_vars['information']->value['image1'];?>
<?php } else { ?>/common/image/contents/null_s.jpg<?php }?>"></div>
								</div>
								<div class="text">
									<p class="mb5"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['information']->value['date'],"%Y/%m/%d");?>
</p>
									<p><?php echo $_smarty_tpl->tpl_vars['information']->value['title'];?>
</p>
								</div>
							</a>
						</div>
					</div>
					<?php }
if (!$_smarty_tpl->tpl_vars["information"]->_loop) {
?>
						<div>お知らせはありません。</div>
					<?php } ?>
				</div>
				<div class="pos_ac"><a href="/information/" class="button _more">新着情報一覧を見る<i class="fas fa-angle-right"></i></a></div>
			</div>
		</div>
	</section>
	<section>
		<div id="menu" class="wrapper-t bg_3">
			<div class="center3">
				<div class="row mb30">
					<div class="col-xs-6 height-1 flex mb50">
						<div class="title_photo bor10 box_shadow"><img src="/common/image/contents/top/image4.jpg" alt="店舗案内"></div>
					</div>
					<div class="col-xs-6 height-1 flex">
						<h2 class="mincho"><span class="en">Salon Guide</span>～店舗案内～</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 height-1">
						<h4 class="mincho">メニュー・料金</h4>
						<h5 class="mb20">フェイシャルレメディ&reg; 80分</h5>
						<div class="flex mb30">
							<p class="tag c_red">新規価格</p>
							<p class="mincho pay fw_bold c_red">￥10,000</p>
						</div>
						<div class="flex mb30">
							<p class="tag">通常価格</p>
							<p class="mincho pay">￥20,000</p>
						</div>
						<div class="flex mb50">
							<p class="tag">1か月以内の次回予約</p>
							<p class="mincho pay">￥18,000</p>
						</div>
						<h5 class="mb20">キャンセル料金</h5>
						<p class="mb20">キャンセル料金につきましては以下の金額をいただいております。</p>
						<div class="box mb30">
							<table class="tbl_menu">
								<tbody>
									<tr>
										<th>前日のキャンセル</th>
										<td class="mincho pay">施術代の50％</td>
									</tr>
									<tr>
										<th>当日のキャンセル</th>
										<td class="mincho pay c_red">施術代全額</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="col-sm-6 height-1">
						<h4 class="mincho mb20">営業時間</h4>
						<div class="row mb30 text">
							<div class="col-xs-5 mb20 height-1">
								<div class="box">
									<p class="pos_ac">完全予約制</p>
								</div>
							</div>
							<div class="col-xs-7 height-1 mincho">
								<p class="time"><?php echo $_smarty_tpl->tpl_vars['mst_siteconf']->value['worktime'];?>
</p>
								<p class="pos_ar">（最終受付）</p>
							</div>
						</div>
						<h4 class="mincho">場所</h4>
						<div class="indent">
							<p><?php echo nl2br($_smarty_tpl->tpl_vars['mst_siteconf']->value['address']);?>
</p>
							<p>※プライベートサロンのため、ご予約時に詳しい場所のご案内をさせていただきます。</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div id="flow" class="wrapper-t bg_3">
			<div class="center3">
				<div class="row">
					<div class="col-xs-6 col-xs-push-6 height-1 flex mb50">
						<div class="bor10 box_shadow"><img src="/common/image/contents/top/image5.jpg" alt="施術の流れ"></div>
					</div>
					<div class="col-xs-6 col-xs-pull-6 height-1 flex">
						<h2 class="mincho"><span class="en">Flow</span>～施術の流れ～</h2>
					</div>
				</div>
				<h3 class="mincho pos_ac mb30">フェイシャルレメディ&reg;︎80分、<br class="visible-only">一人一人に合わせたオーダーメイド、<br>オールハンドの場合の施術の流れを<br class="visible-only">ご紹介いたします。</h3>
			</div>
			<div class="center2 flow">
				<div class="flow_unit mincho">
					<p class="pos_ac h1">カウンセリング</p>
				</div>
				<div class="square"></div>
				<div class="flow_unit mincho">
					<p class="pos_ac h1">お着替え</p>
				</div>
				<div class="square"></div>
				<div class="flow_unit facial_treatment">
					<p class="pos_ac h1 mb30 mincho">フェイシャル<br class="visible-only">トリートメント</p>
					<div class="row">
						<div class="col-xs-4 height-1 flex bg_clear number">
							<p>① クレンジング</p>
						</div>
						<div class="col-xs-8 height-1">
							<p>お肌に溜まった汚れを丁寧に洗い、落とします。<br class="hidden-only">脳が心地よく感じるリズムを取り入れた独自のクレンジングです。</p>
						</div>
					</div>
					<p class="triangle"></p>
					<div class="row">
						<div class="col-xs-4 height-1 flex bg_clear number">
							<p>② 顔液調整</p>
						</div>
						<div class="col-xs-8 height-1">
							<p>お顔に溜まった老廃物などの余分な水分を調整し、本来あるべきお顔へ戻します。その後の施術の効果も高めていきます。</p>
						</div>
					</div>
					<p class="triangle"></p>
					<div class="row">
						<div class="col-xs-4 height-1 flex bg_clear number">
							<p>③ 経絡・顔筋・臓器反射調整</p>
						</div>
						<div class="col-xs-8 height-1">
							<p>たるみの原因である筋肉を丁寧に引き上げていきます。<br class="hidden-only">お顔にある反射区を使って、心・体にもアプローチしていきます。</p>
						</div>
					</div>
					<p class="triangle"></p>
					<div class="row">
						<div class="col-xs-4 height-1 flex bg_clear number">
							<p>④ 脳脊髄液調整、<br />頭蓋調整(クラニオセイクラル)</p>
						</div>
						<div class="col-xs-8 height-1">
							<p>人の体には脳脊髄液という体液が流れています。<br class="hidden-only">脳脊髄液の流れを円滑にする事で自律神経を整えていきます。<br class="hidden-only">とても微細なタッチで痛みはありません。</p>
						</div>
					</div>
					<p class="triangle"></p>
					<div class="row">
						<div class="col-xs-4 height-1 flex bg_clear number">
							<p>⑤ 表皮調整</p>
						</div>
						<div class="col-xs-8 height-1">
							<p>ハーブパックでお肌の表面を整えます。ハーブの効能をお肌に取り入れながら香りのリラクゼーション効果もあります。</p>
						</div>
					</div>
				</div>
				<div class="square"></div>
				<div class="flow_unit mincho">
					<p class="pos_ac h1">アフタードリンク</p>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div id="contact" class="wrapper bg_3">
			<div class="center3">
				<div class="row">
					<div class="col-xs-6 height-1 flex mb50">
						<div class="bor10 box_shadow"><img src="/common/image/contents/top/image6.jpg" alt="ご予約について"></div>
					</div>
					<div class="col-xs-6 height-1 flex">
						<h2 class="mincho"><span class="en">Contact</span>～ご予約について～</h2>
					</div>
				</div>
			</div>
			<div class="center4 mb50">
				<div class="contact_box pos_ac bg_clear">
					<p class="tel c_red mincho fw_bold" data-tel="<?php echo $_smarty_tpl->tpl_vars['mst_siteconf']->value['tel'];?>
"><i class="fas fa-phone-alt"></i><?php echo $_smarty_tpl->tpl_vars['mst_siteconf']->value['tel'];?>
</p>
					<p class="mail c_red mincho mb10"><i class="fa fa-envelope"></i><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['mst_siteconf']->value['mail'];?>
" class="c_red"><?php echo $_smarty_tpl->tpl_vars['mst_siteconf']->value['mail'];?>
</a></p>
				</div>
			</div>
			<div id="form" class="center3">
				<h4 class="mincho mb50 pos_al">ご予約フォーム</h4>
				<form action="./check.php#form" method="post">
					<div class="bg_clear">
						<div class="center2">
							<table class="tbl_form mb50">
								<tbody>
									<tr>
										<th scope="row"><span class="c_red">*</span>お名前</th>
										<td>
											<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['name'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['name'];?>
</span><?php }?>
											<input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['name'];?>
">
										</td>
									</tr>
									<tr>
										<th scope="row"><span class="c_red">*</span>お名前（フリガナ）</th>
										<td>
											<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['ruby'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['ruby'];?>
</span><?php }?>
											<input type="text" name="ruby" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['ruby'];?>
">
										</td>
									</tr>
									<tr>
										<th scope="row"><span class="c_red">*</span>生年月日</th>
										<td>
											<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['birthday'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['birthday'];?>
</p><?php }?>
											<?php echo smarty_function_html_select_date2(array('field_array'=>'birthday','field_order'=>'ymd','order_format'=>"%Y年 %M月 %D日",'prefix'=>'','year_empty'=>"--",'month_empty'=>"--",'day_empty'=>"--",'start_year'=>"-10",'end_year'=>"-90",'month_format'=>"%m",'time'=>(($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['birthday'])===null||$tmp==='' ? "0000-00-00" : $tmp),'reverse_years'=>true),$_smarty_tpl);?>

										</td>
									</tr>
									
									<tr>
										<th scope="row"><span class="c_red">*</span>メールアドレス</th>
										<td>
											<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['mail'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['mail'];?>
</span><?php }?>
											<input type="text" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['mail'];?>
" maxlength="255" >
										</td>
									</tr>
									<tr>
										<th scope="row"><span class="c_red">*</span>電話番号</th>
										<td>
											<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['tel'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['tel'];?>
</span><?php }?>
											<input type="text" name="tel" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['tel'];?>
" maxlength="13" class="w150" placeholder="090-000-000">
										</td>
									</tr>
									<tr>
										<th scope="row"><span class="c_red">*</span>性別</th>
										<td>
											<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['sex'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['sex'];?>
</p><?php }?>
											<?php echo smarty_function_html_radios(array('name'=>"sex",'options'=>$_smarty_tpl->tpl_vars['OptionSex']->value,'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['sex'])===null||$tmp==='' ? 1 : $tmp)),$_smarty_tpl);?>

											<span style="color:#6D6D6D; margin-left:5px;">※男性は紹介者のみ受付</span>
										</td>
									</tr>
									<tr>
										<th scope="row"><span class="c_red">*</span>紹介者</th>
										<td>
											<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['introducer'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['introducer'];?>
</span><?php }?>
											<input type="text" class="mb10" name="introducer" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['introducer'];?>
">
											<span style="color:#6D6D6D; margin-left:5px;">※いない方は「なし」とご記入ください</span>
										</td>
									</tr>
									<tr>
										<th scope="row"><span class="c_red">*</span>予約希望日時（第一希望）</th>
										<td>
											<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['date1'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['date1'];?>
</span><?php }?>
											日付：<input name="date1" class="datepicker" readonly="readonly" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['date1'];?>
"><br>
											<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['time1'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['time1'];?>
</span><?php }?>
											時間：<select name="time1" id="time1" class="mb10">
												<option value="0">選択してください</option>
												<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['OptionTime']->value,'selected'=>$_smarty_tpl->tpl_vars['arr_post']->value['time1']),$_smarty_tpl);?>

											</select>
										</td>
									</tr>
									<tr>
										<th scope="row">予約希望日時（第二希望）</th>
										<td>
											<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['date2'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['date2'];?>
</span><?php }?>
											日付：<input name="date2" class="datepicker" readonly="readonly" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['date2'];?>
"><br>
											<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['time2'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['time2'];?>
</span><?php }?>
											時間：<select name="time2" id="time2" class="mb10">
												<option value="0">選択してください</option>
												<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['OptionTime']->value,'selected'=>$_smarty_tpl->tpl_vars['arr_post']->value['time2']),$_smarty_tpl);?>

											</select>
										</td>
									</tr>
									<tr>
										<th scope="row">予約希望日時（第三希望）</th>
										<td>
											<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['date3'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['date3'];?>
</span><?php }?>
											日付：<input name="date3" class="datepicker" readonly="readonly" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['date3'];?>
"><br>
											<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['time3'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['time3'];?>
</span><?php }?>
											時間：<select name="time3" id="time3" class="mb10">
												<option value="0">選択してください</option>
												<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['OptionTime']->value,'selected'=>$_smarty_tpl->tpl_vars['arr_post']->value['time3']),$_smarty_tpl);?>

											</select>
										</td>
									</tr>
									<tr>
										<th scope="row" class="pos_vt">肌やお顔、体の悩み</th>
										<td>
											<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['comment1'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['comment1'];?>
</span><?php }?>
											<textarea rows="5" name="comment1"><?php echo $_smarty_tpl->tpl_vars['arr_post']->value['comment1'];?>
</textarea>
										</td>
									</tr>
									<tr class="last">
										<th scope="row" class="pos_vt">その他連絡事項</th>
										<td>
											<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['comment2'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['comment2'];?>
</span><?php }?>
											<textarea rows="5" name="comment2" class="mb30"><?php echo $_smarty_tpl->tpl_vars['arr_post']->value['comment2'];?>
</textarea>
											<p class="pos_ar"><span class="c_red">*</span>は必須項目</p>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="pos_ac form_button">
						<button class="button" type="submit"><i class="fas fa-check"></i>確認する</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</div>
</main>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
<script>
$(function(){
	$(".datepicker").datepicker({
		dateFormat: 'yy年mm月dd日',
		minDate: "+1d",
		showButtonPanel: true,
		closeText: '選択解除',
		onClose: function (){
			var event = arguments.callee.caller.caller.arguments[0];
			if ($(event.delegateTarget).hasClass('ui-datepicker-close')) { $(this).val(''); }
		}
	});
});
</script>
</body>
</html>
<?php }} ?>
