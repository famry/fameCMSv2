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

class Location extends CI_Controller {
	public $page_name = "Location";
    public function __construct()
    {
        	parent::__construct();
        	// Ideally you would autoload the parser
        	$this->load->library('parser');
        	$this->load->library('security');
    }

    public function index()
    {

    	if($this->session->has_userdata('admin_id')){
			$this->_manage_page();
				} else {
				// redirect them to the login page
				redirect('administrator/login', 'refresh');
    		}
    }
     public function getOldData()
    {
			$id=$this->session->userdata('admin_id');
			$pid = $this->uri->segment('4');
			if ($id && $pid)
			{
				$this->load->model('administrator/location/location_model');
				$getData=$this->location_model->getOldData($pid);
				echo json_encode($getData);
			} else {
				show_404('page');
			}
    }
    public function add_country()
	{
			$this->load->model('administrator/location/location_model');

			$postdata = file_get_contents("php://input");
			if ($postdata){
		    $request = json_decode($postdata);
		    $name = $this->security->xss_clean($request->name);
		    $publish = $this->security->xss_clean($request->publish);
		    $action=$this->location_model->create_new_country($name,$publish);
			    if($action){
			    	echo $result = '{"status" : "success","message" : "New Country has been succesfully created!"}';
			    } else {
			    	echo $result = '{"status" : "failure","message" : "Failed to create a new country!! Please try again later!!"}';
			    }
			} else {
	    		show_404('page');
	    	}
	}
	public function update_country()
	{
			$this->load->model('administrator/location/location_model');
			$pid = $this->uri->segment(4);
			$postdata = file_get_contents("php://input");
			if ($postdata & $pid){
		    $request = json_decode($postdata);
	    	$name = $this->security->xss_clean($request->name);
	    	$publish = $this->security->xss_clean($request->publish);
		    $action=$this->location_model->update_set_country($pid,$name,$publish);
			    if($action){
			    	echo $result = '{"status" : "success","message" : "Country has been succesfully updated!"}';
			    } else {
			    	echo $result = '{"status" : "failure","message" : "Failed to update country!! Please try again later!!"}';
			    }
			} else {
	    		show_404('page');
	    	}
	}
    public function _manage_page(){
    	 // Some example data
			$data['title']="List Countries";
			$data['heading']="List Countries";
			$data['page_desc']="List Countries";
			
	        // for load external js
			$loadJSFiles = array();
			$loadJSFiles[] = base_url('public/js/admin/proui/location.js');
			$loadJSFiles[] = base_url('themes/proui/js/pages/tablesDatatables.js');
			$this->smarty->assign('loadJSFiles', $loadJSFiles);
			
			 // for init external js
			$initJSFiles = array();
			$initJSFiles[] = "TablesDatatables.init();";
			$this->smarty->assign('initJSFiles', $initJSFiles);
	        // Load the template from the views directory
	        $this->load->model('administrator/location/location_model');
	        $getData=$this->location_model->getTableList();
			$this->smarty->assign('items', $getData);
			$data['content'] = "menu/location/index.tpl";
	        $this->parser->parse("layout/main.tpl",$data);
    }
   
}
