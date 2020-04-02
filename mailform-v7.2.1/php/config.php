<?php


/* -- 以下、基本の設定 ------------------------------------------------------------------------------------------------------------------------------------------------- */


//【必須】 自分のメールアドレスの設定 -- 複数のメールアドレスに送信したい場合は、以下の行をコピーして増やしていけばOKです。行頭の//を消せば有効となります。いくつでも追加可能。 --
$rm_send_address[] = 'triple321jhango@gmail.com';
//$rm_send_address[] = 'aaa@example.co.jp';
//$rm_send_address[] = 'bbb@example.co.jp';




//【必須】 サンクスページのURL -- index.htmlからの相対パス、またはhttp://からの絶対パス --
$rm_thanks_page_url = 'thanks.html';








/* -- 以下、自分に届くメールの設定 ------------------------------------------------------------------------------------------------------------------------------------- */


//【任意】 自分に届くメールの題名
$rm_send_subject = 'メールフォームからお問い合わせがありました。';




//【任意】 自分に届くメールの本文 -- EOMからEOM;までの間の文章を自由に変更してください。 --
$rm_send_body = <<<EOM

メールフォームからお問い合わせがありました。
お問い合わせの内容は以下の通りです。

EOM;








/* -- 以下、相手への自動返信メールの設定 ------------------------------------------------------------------------------------------------------------------------------- */


//【任意】 相手に自動返信メールを送るかどうか -- 送らない場合は0、送る場合は1にしてください。 --
$rm_reply_mail = 1;




//【だいたい必須】 メールの差出人名に表示される自分の名前 -- 相手への自動返信メールに使用されます --
$rm_send_name = 'レスポンシブメールフォーム　差出人';




//【任意】 相手に届く自動返信メールの題名
$rm_thanks_subject = 'お問い合わせありがとうございました。';




//【任意】 相手に届く自動返信メールの本文 -- EOMからEOM;までの間の文章を自由に変更してください。 --
$rm_thanks_body  = <<<EOM

この度はお問い合わせをいただき、ありがとうございました。
折り返し担当者から返信が行きますので、しばらくお待ちください。
以下の内容でお問い合わせをお受けいたしました。

EOM;




//【だいたい必須】 相手に届く自動返信メールの最後に付加される署名 -- EOMからEOM;までの間の文章を自由に変更してください。 --
$rm_thanks_body_signature = <<<EOM

この度はお問い合わせを頂き、重ねてお礼申し上げます。
-----------------------------------------------------------------------------------

　　レスポンシブメールフォーム
　　〒***-**** ここに住所など
　　TEL : ***-***-****
　　Web Site URL : https://www.1-firststep.com
　　Blog URL : https://www.firstsync.net

-----------------------------------------------------------------------------------

EOM;








/* -- 以下、スパム対策機能 --------------------------------------------------------------------------------------------------------------------------------------------- */


//【任意】 メールフォームを設置するサイトのドメイン -- 記入した場合はリファラチェック機能が有効になります。 --
$rm_domain_name = '';
//$rm_domain_name = '1-firststep.com';








