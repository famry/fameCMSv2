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

class Users extends CI_Controller {
	public $page_name = "Users";
    public function __construct()
    {
        parent::__construct();

        // Ideally you would autoload the parser
        $this->load->library('parser');
    }

    public function index()
    {
       if($this->session->has_userdata('admin_id'))
		{
			$this->_Userindex();
		} else {
			// redirect them to the login page
			redirect('administrator/login', 'refresh');
		}
	}

    public function _Userindex(){
    	// Some example data
		$data['title']=$this->page_name;
		$data['heading']="List ".$this->page_name;
		$data['page_desc']="List ".$this->page_name;
		
        // for load external js
		$loadJSFiles = array();
		//$loadJSFiles[] = base_url('public/js/admin/proui/page.js');
		//$loadJSFiles[] = base_url('themes/proui/js/ckeditor/ckeditor.js');
		$loadJSFiles[] = base_url('themes/proui/js/pages/tablesDatatables.js');
		$this->smarty->assign('loadJSFiles', $loadJSFiles);
		
		 // for init external js
		$initJSFiles = array();
		$initJSFiles[] = "TablesDatatables.init();";
		$this->smarty->assign('initJSFiles', $initJSFiles);
        // Load the template from the views directory
        $this->load->model('administrator/user/user_model');
		$getData=$this->user_model->getTableList();
		$this->smarty->assign('items', $getData);
		$data['content'] = "menu/users/index.tpl";
        $this->parser->parse("layout/main.tpl",$data);
    }
}
