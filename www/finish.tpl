<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
{include file=$template_meta}
<link rel="stylesheet" href="/common/css/import.css">
{include file=$template_javascript}
</head>
<body id="contact_finish">
<div id="base">
{include file=$template_header}
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
						<p class="mb20">ご入力いただいたメールアドレス{if !empty( $arr_post.mail )}({$arr_post.mail}){/if}宛に、確認メールをお送りしておりますのでご確認ください。</p>
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
{include file=$template_footer}
</div>
</body>
</html>
