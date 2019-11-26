<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
{include file=$template_meta}
<link rel="stylesheet" href="/common/css/import.css">
{include file=$template_javascript}
</head>
<body id="information">
<div id="base">
{include file=$template_header}
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
		<div class="pos_ab tp_0"><img src="/common/image/contents/top/deco_h.png" alt="private salon ~la perle~"></div>
		<div class="center3">
			<div id="pankuzu">
				<ul>
					<li><a href="/">HOME</a></li>
					<li>新着情報一覧</li>
				</ul>
			</div>
		</div>
		<div class="wrapper pos_re">
			<div class="center3 information">
				<div class="row">
					{foreach from=$t_information item="information" key="key" name="LoopInfomation"}
					<a href="./detail.php?id={$information.id_information}{if $arr_get.page != NULL}&page={$arr_get.page}{/if}">
						<div class="col-xs-6">
							<div class="img_rect"><img src="{if $information.image1}{$_RENEWAL_DIR}/common/photo/information/image1/m_{$information.image1}{else}{$_RENEWAL_DIR}/common/image/contents/null.jpg{/if}" alt="{$information.title}"></div>
							<div class="bg_clear">
								<p>{$information.date|date_format:"%Y/%m/%d"}</p>
								<p>{$information.title}</p>
							</div>
						</div>
					</a>
					{foreachelse}
					<div class="pos_ac">お知らせはありません。</div>
					{/foreach}
				</div>
				{if $page_navi.LinkPage}
				<div class="list_pager">
					<ul class="mt10">
						{$page_navi.LinkPage}
					</ul>
				</div>
				{/if}
			</div>
		</div>
		<div class="pos_ab bt_0"><img src="/common/image/contents/top/deco_f.png" alt="private salon ~la perle~"></div>
	</section>
</div>
</main>
{include file=$template_footer}
</div>
</body>
</html>
