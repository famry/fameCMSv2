<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * FameCMS
 *
 * Codeigniter CMS + Angular
 *
 * @package   FameCMS (Mini-Developer version)
 * @author    Faizal Amry (Famry)
 * @copyright 2015 Faizal Amry
 * @link      http:/famecms.com
 * @license   MIT
 * @version   1.0
 ==============================================================
 * CI Smarty
 *
 * Smarty templating for Codeigniter
 *
 * @package   CI Smarty
 * @author    Dwayne Charrington
 * @copyright 2015 Dwayne Charrington and Github contributors
 * @link      http://ilikekillnerds.com
 * @license   MIT
 * @version   3.0
 */

class Message extends CI_Controller {
	public $page_name = "Inbox";
    public function __construct()
    {
        parent::__construct();

        // Ideally you would autoload the parser
        $this->load->library('parser');
    }

    public function index()
    {
        // Some example data
		$data['title']=$this->page_name;
		$data['heading']=$this->page_name;
		$data['page_desc']=$this->page_name;
		
        // for load external js
		$loadJSFiles = array();
		$loadJSFiles[] = base_url('public/js/admin/proui/message.js');
		$loadJSFiles[] = base_url('themes/proui/js/pages/readyInboxCompose.js');
		$this->smarty->assign('loadJSFiles', $loadJSFiles);
		
		 // for init external js
		$initJSFiles = array();
		$initJSFiles[] = "ReadyInboxCompose.init();";
		$this->smarty->assign('initJSFiles', $initJSFiles);
		
        // Load the template from the views directory
		$data['content'] = "menu/message/index.tpl";
        $this->parser->parse("layout/main.tpl",$data);
    }
	
}
