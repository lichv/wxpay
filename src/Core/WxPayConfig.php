<?php
namespace WxPay\Core;
/**
* 	配置账号信息
*/

class WxPayConfig
{

	public static $APPID = '';
	public static $MCHID = '';
	public static $KEY = '';
	public static $APPSECRET = '';
	
	public static $SSLCERT_PATH = '';
	public static $SSLKEY_PATH = '';

	public static $CURL_PROXY_HOST = "0.0.0.0";
	public static $CURL_PROXY_PORT = 0;

	public static $REPORT_LEVENL = 1;


	public static function init($config){
		self::$APPID = $config['appid'];
		self::$MCHID = $config['mchid'];
		self::$KEY = $config['key'];
		self::$APPSECRET = $config['appsecret'];
		self::$SSLCERT_PATH = $config['cert_path'];
		self::$SSLKEY_PATH = $config['key_path'];
		self::$CURL_PROXY_HOST = empty($config['proxy_host'])?"0.0.0.0":$config['proxy_host'];
		self::$CURL_PROXY_PORT = empty($config['proxy_port'])?0:$config['proxy_port'];
		self::$REPORT_LEVENL = empty($config['report_level'])?1:$config['report_level'];
	}

}
