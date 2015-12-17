<?php
class JConfig {
	public $offline = '0';
	public $offline_message = 'Ce site est en maintenance.<br /> Merci de revenir ultérieurement.';
	public $display_offline_message = '1';
	public $offline_image = '';
	public $sitename = 'Nyx';
	public $editor = 'tinymce';
	public $captcha = '0';
	public $list_limit = '20';
	public $access = '1';
	public $debug = '0';
	public $debug_lang = '0';
	public $dbtype = 'mysqli';
	public $dbprefix = 'nyxws_';
	public $live_site = '';
	public $secret = 'n0T83I8oIgiwN9U8';
	public $gzip = '0';
	public $error_reporting = 'default';
	public $helpurl = 'http://help.joomla.fr/3/index.php?option=com_help&keyref=Help{major}{minor}:{keyref}';
	public $ftp_host = '';
	public $ftp_port = '';
	public $ftp_user = '';
	public $ftp_pass = '';
	public $ftp_root = '';
	public $ftp_enable = '0';
	public $offset = 'UTC';
	public $mailonline = '1';
	public $mailer = 'mail';
	public $mailfrom = 'actadifo@gmail.com';
	public $fromname = 'Nyx Local';
	public $sendmail = '/usr/sbin/sendmail';
	public $smtpauth = '0';
	public $smtpuser = '';
	public $smtppass = '';
	public $smtphost = 'localhost';
	public $smtpsecure = 'none';
	public $smtpport = '25';
	public $caching = '0';
	public $cache_handler = 'file';
	public $cachetime = '15';
	public $MetaDesc = 'Test';
	public $MetaKeys = '';
	public $MetaTitle = '1';
	public $MetaAuthor = '1';
	public $MetaVersion = '0';
	public $robots = '';
	public $sef = '1';
	public $sef_rewrite = '0';
	public $sef_suffix = '0';
	public $unicodeslugs = '0';
	public $feed_limit = '10';
	public $log_path = 'C:\\xampp\\htdocs\\mysite/logs';
	public $tmp_path = 'C:\\xampp\\htdocs\\mysite/tmp';
	public $lifetime = '15';
	public $session_handler = 'database';
	
	public function __construct(){
		// Paramètres de connexion à la super base de données
		$super_host ='localhost';
		$super_user ='root';
		$super_mdp ='';
		$super_schema ='credential';
		$super_port ='3306';
		$super_table = 'db_credential';
		$super_colonne ='tinyurl';
		$url = 'nyx-e.com';
		
		$resultat = array();		
		$link = new mysqli($super_host,$super_user,$super_mdp,$super_schema,$super_port);
		$q = mysqli_query($link,'select * from '.$super_table.' where '.$super_colonne.' = "'.$url.'";');
			while ($row = mysqli_fetch_assoc($q)) {
			foreach($row as $key => $val) $resultat[$key] = $val;
			}
		
		$credential = array("host" => $resultat['hostname'], "user" => $resultat['user'], "password" => $resultat['mdp'], "db" => $resultat['dbschema']);
		
		foreach($credential as $key => $value) $this->{$key} = $value;
	}
}
