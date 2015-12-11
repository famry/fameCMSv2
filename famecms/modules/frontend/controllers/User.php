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

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        // Ideally you would autoload the parser
        $this->load->library('parser');
        //$this->load->helper('phpass');
    }

    public function index()
    {
		$data['title']="Profile";
		
        /*// for load external js
		$loadJSFiles = array();
		$loadJSFiles[] = base_url('themes/proui/js/pages/index.js');
		$this->smarty->assign('loadJSFiles', $loadJSFiles);
		
		 // for init external js
		$initJSFiles = array();
		$initJSFiles[] = "Index.init()";
		$this->smarty->assign('initJSFiles', $initJSFiles);*/
		
        // Load the template from the views directory
		$data['content'] = "profile.tpl";
        $this->parser->parse("layout/main.tpl",$data);
    	
    }   

}
