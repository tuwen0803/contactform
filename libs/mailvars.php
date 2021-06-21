<?php
//メールの送信先などの情報を記述したファイル
//メールの宛先（To）の Email アドレス
define('MAIL_TO', "to.mon@hows.co.jp");
//メールの宛先（To）の名前  
define('MAIL_TO_NAME', "内見予約 ");
//Cc の Email アドレス
define('MAIL_CC', 'raku_belle@icloud.com');
//Cc の名前
define('MAIL_CC_NAME', 'Cc内見予約');
//Bcc の Email アドレス
define('MAIL_BCC', 'tu.wen@icloud.com');
//Return-Pathに指定するメールアドレス
define('MAIL_RETURN_PATH', 'to.mon@hows.co.jp');
//自動返信の返信先名前（自動返信を設定する場合）
define('AUTO_REPLY_NAME', '返信先名前');