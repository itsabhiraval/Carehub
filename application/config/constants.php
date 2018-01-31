<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');


define('CURRENT_DATETIME',		date('Y-m-d H:i:s'));

define('DOCUMENT_ROOT',		$_SERVER['DOCUMENT_ROOT'].'');
define('SUB_DIR',		'IWMF/');
//define('SUB_DIR',		'iwmf/v3/');


define('EMAIL_FROM',		'oldbook.2015gp@gmail.com');
define('EMAIL_NAME',		'OLDBOOKS');
define('SMS_FROM',		'(201) 885-6452');
define('ANDROID_API_ACCESS_KEY','AIzaSyB0bveL6AQjG9jdd4s7cD_JIiu1pdABgGQ');
define('KEY','oldbook2015');

define('FACEBOOK_APP_ID','356083594580234');
define('FACEBOOK_APP_SECRET','4a65a36b446a4578466fb0b5d87632c3');
define('TWITTER_CONSUMER_KEY','yJt3lSG6bm7qgJAIPGuPiBhkx');
define('TWITTER_CONSUMER_SECRET','OqCqAimzueMgaIn9wDmFun9PG2SVDBOkUyyGJslXaGe48QAmgX');

//deep
define('MAILGUN_KEY','key-47d447b4ab92b6659a1906b18cd516e7');
define('MAILGUN_PUBKEY','pubkey-74793d45597b2d9aeb7f840949ec54af');
define('MAILGUN_DOMAIN','sandboxb8da8e9c701941f6876276bfee01efa0.mailgun.org');

define('OFFSET', 3);
//iwmf
//define('MAILGUN_KEY','key-bf811b73398afff4f902680aa1d8e85c');
//define('MAILGUN_PUBKEY','pubkey-84096bd8bd20c01c4b1b211e974a5951');
//define('MAILGUN_DOMAIN','sandbox19853f84cfaa40d382bae32ffcd72ff5.mailgun.org');
//define('MAILGUN_LIST','yJt3lSG6bm7qgJAIPGuPiBhkx');
//define('MAILGUN_SECRET','IWMF2015');   

//way2sms credential
define('WAY2SMSID','8866195707');
define('WAY2SMSPASS','ilovemymothe');

/* End of file constants.php */
/* Location: ./application/config/constants.php */