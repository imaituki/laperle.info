<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
{include file=$template_meta}
<link rel="stylesheet" href="/common/css/import.css">
{include file=$template_javascript}
<script type="text/javascript" src="/common/js/lightbox/import.js"></script>
</head>
<body id="information_detail">
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
		<div class="pos_ab tp_0"><img src="/common/image/contents/top/deco_h.png" alt="フェイシャルレメディサロン la perle"></div>
		<div class="center3">
			<div id="pankuzu">
				<ul>
					<li><a href="/">HOME</a></li>
					<li>{$t_information.title}</li>
				</ul>
			</div>
		</div>
		<div class="wrapper pos_re">
			<div class="center3 information">
				<h2 class="mincho pos_ac">{$t_information.title}</h2>
				<div class="mb50 mincho pos_ac">{$t_information.date|date_format:"%Y/%m/%d"}</div>
				{if $t_information.image1}
				<div class="center2">
					<div class="pos_ac mb20"><img src="{$_RENEWAL_DIR}/common/photo/information/image1/l_{$t_information.image1}" alt="{$t_information.title}"></div>
					{/if}
					{if $t_information.image2 || $t_information.image3 || $t_information.image4 }
						<div class="row mb30">
							{if $t_information.image2}
							<div class="col-xs-4 height-1 mb20">
								<a class="ov" href="/common/photo/information/image2/l_{$t_information.image2}" rel="lightbox">
									<div class="img_rect"><img src="/common/photo/information/image2/m_{$t_information.image2}" alt="{$t_information.title}"></div></a>
							</div>
							{/if}
							{if $t_information.image3}
							<div class="col-xs-4 height-1 mb20">
								<a class="ov" href="/common/photo/information/image3/l_{$t_information.image3}" rel="lightbox">
									<div class="img_rect"><img src="/common/photo/information/image3/m_{$t_information.image3}" alt="{$t_information.title}"></div></a>
							</div>
							{/if}
							{if $t_information.image4}
							<div class="col-xs-4 height-1 mb20">
								<a class="ov" href="/common/photo/information/image4/l_{$t_information.image4}" rel="lightbox">
									<div class="img_rect"><img src="{$_RENEWAL_DIR}/common/photo/information/image4/m_{$t_information.image4}" alt="{$t_information.title}"></div></a>
							</div>
							{/if}
						</div>
					{/if}
				</div>
				<div class="mb50">{$t_information.comment}</div>
				<div class="pos_ac"><a href="/information/{if $arr_get.page != NULL}?page={$arr_get.page}{/if}" class="button _more">新着情報一覧に戻る<i class="fas fa-angle-right"></i></a></div>
			</div>
		</div>
		<div class="pos_ab bt_0"><img src="/common/image/contents/top/deco_f.png" alt="フェイシャルレメディサロン la perle"></div>
	</section>
</div>
</main>
{include file=$template_footer}
</div>
</body>
</html>
