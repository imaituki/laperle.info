<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
{include file=$template_meta}
<link rel="stylesheet" href="/common/css/import.css">
{include file=$template_javascript}
</head>
<body id="contact_check">
<div id="base">
{include file=$template_header}
<main>
<div id="body">
	<div id="page_title">
		<div class="img_back"><img src="/common/image/contents/title.jpg" alt="～ご予約～"></div>
		<div class="page_title_wrap">
			<div class="center3 mincho cg">
				<h2 class="mincho"><span class="en">Contact</span>～ご予約～</h2>
			</div>
		</div>
	</div>
	<section class="bg_3 pos_re">
		<div class="center3">
			<div id="pankuzu">
				<ul>
					<li><a href="/">HOME</a></li>
					<li>ご予約</li>
				</ul>
			</div>
		</div>
		<div class="wrapper pos_re">
			<form action="./#form" method="post">
				<div class="center3">
					<h4 class="mincho mb50 pos_al">確認フォーム</h4>
					<div class="bg_clear">
						<table class="tbl_form mb50">
							<tbody>
								<tr>
									<th scope="row">お名前</th>
									<td>{$arr_post.name}<input type="hidden" name="name" value="{$arr_post.name}"></td>
								</tr>
								<tr>
									<th scope="row">お名前（フリガナ）</th>
									<td>{$arr_post.ruby}<input type="hidden" name="ruby" value="{$arr_post.ruby}" ></td>
								</tr>
								<tr>
									<th scope="row">生年月日</th>
									<td>
										{$arr_post.birthday|implode:"-"|date_format:"%Y年%m月%d日"}
										<input type="hidden" name="birthday[Year]" value="{$arr_post.birthday.Year}">
										<input type="hidden" name="birthday[Month]" value="{$arr_post.birthday.Month}">
										<input type="hidden" name="birthday[Day]" value="{$arr_post.birthday.Day}">
									</td>
								</tr>
								{*
								<tr>
									<th scope="row">年齢</th>
									<td>{$OptionAge[$arr_post.age]}<input type="hidden" name="age" value="{$arr_post.age}" ></td>
								</tr>
								*}
								<tr>
									<th scope="row">メールアドレス</th>
									<td>{$arr_post.mail}<input type="hidden" name="mail" value="{$arr_post.mail}" ></td>

								</tr>
								<tr>
									<th scope="row">電話番号</th>
									<td>{$arr_post.tel}<input type="hidden" name="tel" value="{$arr_post.tel}" ></td>
								</tr>
								<tr>
									<th scope="row">性別</th>
									<td>{$OptionSex[$arr_post.sex]}<input type="hidden" name="sex" value="{$arr_post.sex}" ></td>
								</tr>
								<tr>
									<th scope="row">紹介者</th>
									<td>{$arr_post.introducer}<input type="hidden" name="introducer" value="{$arr_post.introducer}" ></td>

								</tr>
								<tr>
									<th scope="row">予約希望日時（第一希望）</th>
									<td>{$arr_post.date1}　{$OptionTime[$arr_post.time1]}
										<input type="hidden" name="date1" value="{$arr_post.date1}" >
										<input type="hidden" name="time1" value="{$arr_post.time1}" >
									</td>
								</tr>
								<tr>
									<th scope="row">予約希望日時（第二希望）</th>
									<td>{$arr_post.date2|default:"--"}　{if $arr_post.time2}{$OptionTime[$arr_post.time2]}{/if}
										<input type="hidden" name="date2" value="{$arr_post.date2}" >
										<input type="hidden" name="time2" value="{$arr_post.time2}" >
									</td>
								</tr>
								<tr>
									<th scope="row">予約希望日時（第三希望）</th>
									<td>{$arr_post.date3|default:"--"}　{if $arr_post.time3}{$OptionTime[$arr_post.time3]}{/if}
										<input type="hidden" name="date3" value="{$arr_post.date3}" >
										<input type="hidden" name="time3" value="{$arr_post.time3}" >
									</td>
								</tr>
								<tr class="last">
									<th scope="row" style="vertical-align: unset;">肌やお顔、体の悩み</th>
									<td>{$arr_post.comment1|nl2br|default:"--"}<input type="hidden" name="comment1" value="{$arr_post.comment1}" ></td>
								</tr>
								<tr class="last">
									<th scope="row" style="vertical-align: unset;">その他連絡事項</th>
									<td>{$arr_post.comment2|nl2br|default:"--"}<input type="hidden" name="comment2" value="{$arr_post.comment2}" ></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="pos_ac form_button mb100">
					<div class="col-xs-6 mb20 left">
						<button class="button _back" type="submit"><i class="fas fa-arrow-left"></i>修正する</button>
					</div>
					<div class="col-xs-6 right">
						<button id="send_button" class="button" type="submit">送信する<i class="fas fa-arrow-right"></i></button>
					</div>
				</div>
			</form>
		</div>
	</section>
</div>
</main>
{include file=$template_footer}
</div>
</body>
</html>
