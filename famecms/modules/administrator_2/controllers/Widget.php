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

class Widget extends CI_Controller {
	public $page_name = "Widget";
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
			$pid = $this->uri->segment(4);
			if ($id & $pid)
			{
				$this->load->model('administrator/widget/widget_model');
				$getData=$this->widget_model->getOldData($pid);
				echo json_encode($getData);
			} else {
				show_404('page');
			}
    }
    public function add()
	{
			$this->load->model('administrator/widget/widget_model');

			$postdata = file_get_contents("php://input");
			if ($postdata){
		    $request = json_decode($postdata);
		    $name = $this->security->xss_clean($request->name);
		    $content = $this->security->xss_clean($request->content);
		    $action=$this->widget_model->create_new($name,$content);
			    if($action){
			    	echo $result = '{"status" : "success","message" : "New Widget has been succesfully created!"}';
			    } else {
			    	echo $result = '{"status" : "failure","message" : "Failed to create a new widget!! Please try again later!!"}';
			    }
			} else {
	    		show_404('page');
	    	}
	}
	public function update()
	{
			$this->load->model('administrator/widget/widget_model');
			$pid = $this->uri->segment(4);
			$postdata = file_get_contents("php://input");
			if ($postdata & $pid){
		    $request = json_decode($postdata);
	    	$name = $this->security->xss_clean($request->name);
	    	$content = $this->security->xss_clean($request->content);
		    $action=$this->widget_model->update_set($pid,$name,$content);
			    if($action){
			    	echo $result = '{"status" : "success","message" : "Widget has been succesfully updated!"}';
			    } else {
			    	echo $result = '{"status" : "failure","message" : "Failed to update widget!! Please try again later!!"}';
			    }
			} else {
	    		show_404('page');
	    	}
	}
	
    public function delete_permanent()
    {
			$id=$this->session->userdata('admin_id');
			$pid=$this->uri->segment('4');
			if ($id & $pid)
			{
				$this->load->model('administrator/widget/widget_model');
				$action=$this->widget_model->delete_permanent_content($pid);
					if($action){
				    	echo $result = '{"status" : "success","message" : "Widget has been succesfully deleted!"}';
				    } else {
				    	echo $result = '{"status" : "failure","message" : "Failed to delete widget!! Please try again later!!"}';
				    }
			} else {
				show_404('page');
			}
    }
   

    public function _manage_page(){
    	 // Some example data
			$data['title']=$this->page_name;
			$data['heading']="List ".$this->page_name;
			$data['page_desc']="List ".$this->page_name;
			
	        // for load external js
			$loadJSFiles = array();
			$loadJSFiles[] = base_url('public/js/admin/proui/widget.js');
			$loadJSFiles[] = base_url('themes/proui/js/pages/tablesDatatables.js');
			$this->smarty->assign('loadJSFiles', $loadJSFiles);
			
			 // for init external js
			$initJSFiles = array();
			$initJSFiles[] = "TablesDatatables.init();";
			$this->smarty->assign('initJSFiles', $initJSFiles);
	        // Load the template from the views directory
	        $this->load->model('administrator/widget/widget_model');
	        $getData=$this->widget_model->getTableList();
			$this->smarty->assign('items', $getData);
			$data['content'] = "menu/widget/index.tpl";
	        $this->parser->parse("layout/main.tpl",$data);
    }
    
}
