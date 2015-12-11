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

class Page extends CI_Controller {
	public $page_name = "Pages";
    public function __construct()
    {
        parent::__construct();

        // Ideally you would autoload the parser
        $this->load->library('parser');
        $this->load->library('security');
    }

    public function index()
    {

    	if($this->session->has_userdata('admin_id'))
		{
			$this->_manage_page();
		} else {
			// redirect them to the login page
			redirect('administrator/login', 'refresh');
    	}
    }
    public function trash()
    {

    	if($this->session->has_userdata('admin_id'))
		{
			$this->_trash_page();
		} else {
			// redirect them to the login page
			redirect('administrator/login', 'refresh');
    	}
    }

    public function getParentList()
    {
			$id=$this->session->userdata('admin_id');
			$pid = $this->uri->segment('4');
			if ($id)
			{
				$this->load->model('administrator/pages/pages_model');
				$getData=$this->pages_model->getParentList($pid);
				echo json_encode($getData);
			} else {
				show_404('page');
			}
    }
    public function getSidebarList()
    {
			$id=$this->session->userdata('admin_id');
			if ($id)
			{
				$this->load->model('administrator/pages/pages_model');
				$getData=$this->pages_model->getSidebarList();
				echo json_encode($getData);
			} else {
				show_404('page');
			}
    }
    public function getOldData()
    {
			$id=$this->session->userdata('admin_id');
			$pid = $this->uri->segment(4);
			if ($id & $pid)
			{
				$this->load->model('administrator/pages/pages_model');
				$getData=$this->pages_model->getOldData($pid);
				echo json_encode($getData);
			} else {
				show_404('page');
			}
    }
    public function add()
	{
				$this->load->model('administrator/pages/pages_model');

				$postdata = file_get_contents("php://input");
				if ($postdata){
			    $request = json_decode($postdata);
			    $title = $this->security->xss_clean($request->title);
			    $content = $this->security->xss_clean($request->content);
			    $publish = $this->security->xss_clean($request->publish);
			    $parent = $this->security->xss_clean($request->parent);
			    $sidebar = $this->security->xss_clean($request->sidebar);
			    $sidebar_name = $this->security->xss_clean($request->sidebar_name);
			    $ordernum = $this->security->xss_clean($request->ordernum);
			    $action=$this->pages_model->create_new($title,$content,$publish,$parent,$sidebar,$sidebar_name,$ordernum);
				    if($action){
				    	echo $result = '{"status" : "success","message" : "New page has been succesfully created!"}';
				    } else {
				    	echo $result = '{"status" : "failure","message" : "Failed to create a new page!! Please try again later!!"}';
				    }
				} else {
		    		show_404('page');
		    	}
	}
	public function update()
	{
				$this->load->model('administrator/pages/pages_model');
				$pid = $this->uri->segment(4);
				$postdata = file_get_contents("php://input");
				if ($postdata && $pid){
			    $request = json_decode($postdata);
			    $title = $this->security->xss_clean($request->title);
			    $content = $this->security->xss_clean($request->content);
			    $publish = $this->security->xss_clean($request->publish);
			    $parent = $this->security->xss_clean($request->parent);
			    $sidebar = $this->security->xss_clean($request->sidebar);
			    $sidebar_name = $this->security->xss_clean($request->sidebar_name);
			    $ordernum = $this->security->xss_clean($request->ordernum);
			    $action=$this->pages_model->update_set($pid,$title,$content,$publish,$parent,$sidebar,$sidebar_name,$ordernum);
				    if($action){
				    	echo $result = '{"status" : "success","message" : "Page has been succesfully updated!"}';
				    } else {
				    	echo $result = '{"status" : "failure","message" : "Failed to update page!! Please try again later!!"}';
				    }
				} else {
		    		show_404('page');
		    	}
	}
	public function delete()
    {
			$id=$this->session->userdata('admin_id');
			$pid=$this->uri->segment('4');
			if ($id & $pid)
			{
				$this->load->model('administrator/pages/pages_model');
				$action=$this->pages_model->delete_content($pid);
					if($action){
				    	echo $result = '{"status" : "success","message" : "Page has been succesfully moved to trash!"}';
				    } else {
				    	echo $result = '{"status" : "failure","message" : "Failed to moving page to trash!! Please try again later!!"}';
				    }
			} else {
				show_404('page');
			}
    }
    public function restore()
    {
			$id=$this->session->userdata('admin_id');
			$pid=$this->uri->segment('4');
			if ($id && $pid)
			{
				$this->load->model('administrator/pages/pages_model');
				$action=$this->pages_model->restore_content($pid);
					if($action){
				    	echo $result = '{"status" : "success","message" : "Page has been succesfully restored!"}';
				    } else {
				    	echo $result = '{"status" : "failure","message" : "Failed to restore page!! Please try again later!!"}';
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
				$this->load->model('administrator/pages/pages_model');
				$action=$this->pages_model->delete_permanent_content($pid);
					if($action){
				    	echo $result = '{"status" : "success","message" : "Page has been succesfully deleted!"}';
				    } else {
				    	echo $result = '{"status" : "failure","message" : "Failed to delete page!! Please try again later!!"}';
				    }
			} else {
				show_404('page');
			}
    }
	
    public function _manage_page(){
    	 // Some example data
		$data['title']=$this->page_name;
		$data['heading']="List ".$this->page_name;
		$data['page_desc']="List Active ".$this->page_name;
		
        // for load external js
		$loadJSFiles = array();
		$loadJSFiles[] = base_url('public/js/admin/proui/page.js');
		$loadJSFiles[] = base_url('themes/proui/js/pages/tablesDatatables.js');
		$this->smarty->assign('loadJSFiles', $loadJSFiles);
		
		 // for init external js
		$initJSFiles = array();
		$initJSFiles[] = "TablesDatatables.init();";
		$this->smarty->assign('initJSFiles', $initJSFiles);
        // Load the template from the views directory
        $this->load->model('administrator/pages/pages_model');
		$getData=$this->pages_model->getTableList();
		$this->smarty->assign('items', $getData);
		$data['content'] = "menu/pages/index.tpl";
        $this->parser->parse("layout/main.tpl",$data);
    }
    public function _trash_page(){
    	 // Some example data
		$data['title']=$this->page_name;
		$data['heading']="Trash ".$this->page_name;
		$data['page_desc']="List Trash ".$this->page_name;
		
        // for load external js
		$loadJSFiles = array();
		$loadJSFiles[] = base_url('public/js/admin/proui/page.js');
		$loadJSFiles[] = base_url('themes/proui/js/pages/tablesDatatables.js');
		$this->smarty->assign('loadJSFiles', $loadJSFiles);
		
		 // for init external js
		$initJSFiles = array();
		$initJSFiles[] = "TablesDatatables.init();";
		$this->smarty->assign('initJSFiles', $initJSFiles);
        // Load the template from the views directory
        $this->load->model('administrator/pages/pages_model');
		$getData=$this->pages_model->getTrashList();
		$this->smarty->assign('items', $getData);
		$data['content'] = "menu/pages/trash.tpl";
        $this->parser->parse("layout/main.tpl",$data);
    }
}
