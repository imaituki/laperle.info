--------------------------------------------------------
■ ご予約内容
--------------------------------------------------------
[お名前]
{$arr_post.name|default:""}

[お名前（フリガナ）]
{$arr_post.ruby|default:""}

[生年月日]
{$arr_post.birthday|implode:"-"|date_format:"%Y年%m月%d日"}

[メール]
{$arr_post.mail|default:""}

[電話番号]
{$arr_post.tel|default:""}

[性別]
{$OptionSex[$arr_post.sex]}

[紹介者]
{$arr_post.introducer|default:""}

[予約希望日時(第一希望)]
{$arr_post.date1}　{$OptionTime[$arr_post.time1]}

[予約希望日時(第二希望)]
{$arr_post.date2|default:"--"}{if $arr_post.time2}　{$OptionTime[$arr_post.time2]}{/if}


[予約希望日時(第三希望)]
{$arr_post.date3|default:"--"}{if $arr_post.time3}　{$OptionTime[$arr_post.time3]}{/if}


[肌やお顔、体の悩み]
{$arr_post.comment1|default:"--"}

[その他連絡事項]
{$arr_post.comment2|default:"--"}
