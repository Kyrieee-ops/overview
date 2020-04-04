<?php

/*--------------------------------------------------------------------------
	
	Script Name : Responsive Mailform
	Author      : FIRSTSTEP - Motohiro Tani
	Author URL  : https://www.1-firststep.com
	Create Date : 2014/03/25
	Version     : 7.2.1
	Last Update : 2019/10/03
	
--------------------------------------------------------------------------*/

//mailform.phpファイルの二つ上の階層にあるファイルを指定➡この場合指定した階層にsession.phpがあるかを確認し、存在した場合には、session.phpをincludeで読み込みする
if ( file_exists( dirname( __FILE__ ) .'/../addon/token/session.php' ) ) {
	include( dirname( __FILE__ ) .'/../addon/token/session.php' );
}


error_reporting( E_ALL );




mb_language( 'ja' );
mb_internal_encoding( 'UTF-8' );
date_default_timezone_set( 'Asia/Tokyo' );



//➀mailform.phpのファイルが存在するか確認し、存在した場合、Mailformclassをインスタンス化
require_once( dirname( __FILE__ ) .'/class.mailform.php' );
$responsive_mailform = new Mailform();



//addon/confirm/にconfirm.phpが存在するか確認し、存在すれば、confirm.phpを読み込み
if ( file_exists( dirname( __FILE__ ) .'/../addon/confirm/confirm.php' ) ) {
	include( dirname( __FILE__ ) .'/../addon/confirm/confirm.php' );
}



//➀maiform.phpファイルが存在した場合にはここのメソッドにアクセス
$responsive_mailform->javascript_action_check();
$responsive_mailform->referer_check();

if ( file_exists( dirname( __FILE__ ) .'/../addon/token/token.php' ) ) {
	include( dirname( __FILE__ ) .'/../addon/token/token.php' );
}

$responsive_mailform->post_check( 'default' );

if ( file_exists( dirname( __FILE__ ) .'/../addon/block/block.php' ) ) {
	include( dirname( __FILE__ ) .'/../addon/block/block.php' );
}

$responsive_mailform->mail_set( 'send' );
$responsive_mailform->mail_set( 'thanks' );

if ( file_exists( dirname( __FILE__ ) .'/../addon/csv-record/include/csv.php' ) ) {
	include( dirname( __FILE__ ) .'/../addon/csv-record/include/csv.php' );
}

$responsive_mailform->mail_send();
$responsive_mailform->mail_result();




?>