<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class mailing extends Module {
	
		var $version = '1.09';
	var $name = 'emails';
		
		function __construct () {
		// set the active module
		$this->active_module = $this->name;	
		
		parent::__construct();
		}
		
		/*
		* Pre-admin function
		*
		* Initiate navigation in control panel
		*/
		function admin_preload ()
		{
					$this->CI->admin_navigation->child_link('mailing',10,'Emails List',site_url('admincp/mailing'));
					$this->CI->admin_navigation->child_link('mailing',20,'Add Emails',site_url('admincp/mailing/mail_add'));
					$this->CI->admin_navigation->child_link('mailing',30,'Parse Emails',site_url('admincp/mailing/csv_parse'));
					$this->CI->admin_navigation->child_link('mailing',40,'Send Emails',site_url('admincp/mailing/send'));
					
					
		}
}