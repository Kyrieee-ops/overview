<?php
/**
 * Reverse engineering of this file is strictly prohibited.
 * このファイルのリバースエンジニアリングは禁止されています。
 *
 * MicroEngine MailForm
 * https://microengine.jp/mailform/
 *
 * @copyright Copyright (C) 2014-2017 MicroEngine Inc.
 */

$code = 'PD9waHAKY2xhc3MgTWVfR3VhcmQKewogICAgcHVibGljIHN0YXRpYyBmdW5jdGlvbiByZW5kZXIoJGh0bWwsICRjb252ZXJ0X2NoYXJfY29kZSwgJGNoYXJfY29kZSwgJHN5c3RlbV9jaGFyX2NvZGUpCiAgICB7CiAgICAgICAgJGxpbmtfZWxlbSA9ICRodG1sLT5maW5kKCcjcG93ZXJlZF9ieV9tZScsIDApOwogICAgICAgIGlmIChNZV9HdWFyZDo6Y2hlY2tfbGljZW5zZSgpKSB7CiAgICAgICAgICAgIGlmICgkbGlua19lbGVtICE9PSBudWxsKSB7CiAgICAgICAgICAgICAgICAkbGlua19lbGVtLT5vdXRlcnRleHQgPSAnJzsKICAgICAgICAgICAgfQogICAgICAgIH0gZWxzZSB7CiAgICAgICAgICAgICRwb3dlcmVkX2J5X2xpbmsgPSAnUG93ZXJlZCBieSA8YSBocmVmPSJodHRwczovL21pY3JvZW5naW5lLmpwLyIgdGFyZ2V0PSJfYmxhbmsiPk1pY3JvRW5naW5lPC9hPic7CiAgICAgICAgICAgIGlmICgkbGlua19lbGVtID09PSBudWxsKSB7CiAgICAgICAgICAgICAgICAkaHRtbC0+ZmluZCgnYm9keScsIDApLT5pbm5lcnRleHQgLj0gJzxkaXY+JyAuICRwb3dlcmVkX2J5X2xpbmsgLiAnPC9kaXY+JzsKICAgICAgICAgICAgfSBlbHNlIHsKICAgICAgICAgICAgICAgICRsaW5rX2VsZW0tPmlubmVydGV4dCA9ICRwb3dlcmVkX2J5X2xpbms7CiAgICAgICAgICAgIH0KICAgICAgICB9CiAgICAgICAgaWYgKCRjb252ZXJ0X2NoYXJfY29kZSkgewogICAgICAgICAgICAkaHRtbCA9IG1iX2NvbnZlcnRfZW5jb2RpbmcoJGh0bWwsICRjaGFyX2NvZGUsICRzeXN0ZW1fY2hhcl9jb2RlKTsKICAgICAgICB9CiAgICAgICAgZWNobyAkaHRtbDsKICAgIH0KICAgIHByaXZhdGUgc3RhdGljIGZ1bmN0aW9uIGNoZWNrX2xpY2Vuc2UoKQogICAgewogICAgICAgICRyZXN1bHQgPSBmYWxzZTsKICAgICAgICAkbGljZW5zZV9maWxlX3BhdGggPSBEQVRBX1JPT1QgLiAnL2NvbmZpZy9saWNlbnNlLnBocCc7CiAgICAgICAgaWYgKCFmaWxlX2V4aXN0cygkbGljZW5zZV9maWxlX3BhdGgpIHx8ICFpc19yZWFkYWJsZSgkbGljZW5zZV9maWxlX3BhdGgpKSB7CiAgICAgICAgICAgIHJldHVybiAkcmVzdWx0OwogICAgICAgIH0KICAgICAgICAkbGljZW5zZV9saXN0ID0gaW5jbHVkZSgkbGljZW5zZV9maWxlX3BhdGgpOwogICAgICAgICRwcmVmaXggPSAnbWVfbWFpbGZvcm09MTAwMDB5ZW5fJzsKICAgICAgICAkaGFzaCA9IHNoYTEoJHByZWZpeCAuICRfU0VSVkVSWyJIVFRQX0hPU1QiXSk7CiAgICAgICAgaWYgKHN0cnBvcygkX1NFUlZFUlsiSFRUUF9IT1NUIl0sICd3d3cuJykgPT09IDApIHsKICAgICAgICAgICAgJGhhc2hfd3d3ID0gc3Vic3RyKCRfU0VSVkVSWyJIVFRQX0hPU1QiXSwgNCk7CiAgICAgICAgfSBlbHNlIHsKICAgICAgICAgICAgJGhhc2hfd3d3ID0gJ3d3dy4nIC4gJF9TRVJWRVJbIkhUVFBfSE9TVCJdOwogICAgICAgIH0KICAgICAgICAkaGFzaF93d3cgPSBzaGExKCRwcmVmaXggLiAkaGFzaF93d3cpOwogICAgICAgIGZvcmVhY2ggKCRsaWNlbnNlX2xpc3QgYXMgJGxpY2Vuc2UpIHsKICAgICAgICAgICAgaWYgKCRsaWNlbnNlID09PSAkaGFzaCB8fCAkbGljZW5zZSA9PT0gJGhhc2hfd3d3KSB7CiAgICAgICAgICAgICAgICAkcmVzdWx0ID0gdHJ1ZTsKICAgICAgICAgICAgICAgIGJyZWFrOwogICAgICAgICAgICB9CiAgICAgICAgfQogICAgICAgIHJldHVybiAkcmVzdWx0OwogICAgfQp9';

$tmp = tmpfile();
fwrite($tmp, base64_decode($code));
$meta_data = stream_get_meta_data($tmp);
$tmp_filename = $meta_data['uri'];
include_once $tmp_filename;
