<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * FameCMS
 *
 * Codeigniter CMS + Angular
 *
 * @package   FameCMS (Client version)
 * @author    Faizal Amry (Famry)
 * @copyright 2015 Faizal Amry
 * @link      http:/famecms.com
 * @license   MIT
 * @version   1.2
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
	
	public $page_name = "Page";
    public function __construct()
    {
        parent::__construct();

        // Ideally you would autoload the parser
        $this->load->library('parser');
        $this->load->library('security');
    }
	
	
    /*============================================
				Start Function Page Controller
	==============================================*/
	
	// Index Controller Function
    public function index()
    {

    	if($this->session->has_userdata('admin_id'))
		{
			$this->_index_page();
		} else {
			// redirect them to the login page
			redirect('administrator/login', 'refresh');
    	}
    }
	
	// Add Controller Function
	 public function add()
    {

    	if($this->session->has_userdata('admin_id'))
		{
			$this->_add_page();
		} else {
			// redirect them to the login page
			redirect('administrator/login', 'refresh');
    	}
    }
	
	// Edit Controller Function
	 public function edit($page_id ='NULL')
    {

    	if($this->session->has_userdata('admin_id'))
		{
			if ($page_id){
			$this->_edit_page($page_id);
			} else {
			show_404('page');
			}
		} else {
			// redirect them to the login page
			redirect('administrator/login', 'refresh');
    	}
    }
	
	// Trash Controller Function
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
	
	// Get Old Data Controller
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
	
	
	/*============================================
				End Function Page Controller
	==============================================*/

	
    /*============================================
				Start Function AngularJS
	==============================================*/
	 public function input_data()
	{
				$this->load->model('administrator/pages/pages_model');

				$postdata = file_get_contents("php://input"); // Get Json Data
				if ($postdata){
			    $request = json_decode($postdata); // Decode Json Data
				
				//Main Data
			    $title = $this->security->xss_clean($request->title);
			    $content = $this->security->xss_clean(isset($request->content)?$request->content:'');
				
				//SEO Data
			    $custom_seo = $this->security->xss_clean(isset($request->custom_seo)?$request->custom_seo:'');
			    $seo_index = $this->security->xss_clean(isset($request->seo_index)?$request->seo_index:'');
			    $seo_follow = $this->security->xss_clean(isset($request->seo_follow)?$request->seo_follow:'');
			    $seo_title = $this->security->xss_clean(isset($request->seo_title)?$request->seo_title:'');
			    $seo_keyword = $this->security->xss_clean(isset($request->seo_keyword)?$request->seo_keyword:'');
			    $seo_desc = $this->security->xss_clean(isset($request->seo_desc)?$request->seo_desc:'');
				
				//Publish Data
				$publish = $this->security->xss_clean($request->publish);
				$custom_date = $this->security->xss_clean($request->custom_date);
				$publish_date = $this->security->xss_clean(isset($request->publish_date)?$request->publish_date:'');
				
				//Attribute Data
				$parent = $this->security->xss_clean($request->parent);
				$sidebar = $this->security->xss_clean($request->sidebar);
			    $sidebar_name = $this->security->xss_clean(isset($request->sidebar_name)?$request->sidebar_name:'');
				$comment = $this->security->xss_clean($request->comment);
			    $ordernum = $this->security->xss_clean(isset($request->ordernum)?$request->ordernum:'');
				
			    $action=$this->pages_model->create_new(
				$title,$content,
				$custom_seo,$seo_index,$seo_follow,$seo_title,$seo_keyword,$seo_desc,
				$publish,$custom_date,$publish_date,
				$parent,$sidebar,$sidebar_name,$comment,$ordernum);
				    if($action){
				    	echo $result = '{"status" : "success","message" : "New page has been succesfully created!"}';
				    } else {
				    	echo $result = '{"status" : "failure","message" : "Failed to create a new page!! Please try again later!!"}';
				    }
				} else {
		    		show_404('page');
		    	}
	}
	
	 public function update_data()
	{
				$this->load->model('administrator/pages/pages_model');

				$postdata = file_get_contents("php://input"); // Get Json Data
				if ($postdata){
			    $request = json_decode($postdata); // Decode Json Data
				
				//Main Data
				$pid = $this->security->xss_clean($request->id_post);
			    $title = $this->security->xss_clean($request->title);
			    $slug = $this->security->xss_clean(isset($request->slug)?$request->slug:'');
			    $content = $this->security->xss_clean(isset($request->content)?$request->content:'');
				
				//SEO Data
			    $custom_seo = $this->security->xss_clean(isset($request->custom_seo)?$request->custom_seo:'');
			    $seo_index = $this->security->xss_clean(isset($request->seo_index)?$request->seo_index:'');
			    $seo_follow = $this->security->xss_clean(isset($request->seo_follow)?$request->seo_follow:'');
			    $seo_title = $this->security->xss_clean(isset($request->seo_title)?$request->seo_title:'');
			    $seo_keyword = $this->security->xss_clean(isset($request->seo_keyword)?$request->seo_keyword:'');
			    $seo_desc = $this->security->xss_clean(isset($request->seo_desc)?$request->seo_desc:'');
				
				//Publish Data
				$publish = $this->security->xss_clean($request->publish);
				//$custom_date = $this->security->xss_clean($request->custom_date);
				//$publish_date = $this->security->xss_clean(isset($request->publish_date)?$request->publish_date:'');
				$new_date = $this->security->xss_clean(isset($request->new_date)?$request->new_date:'');
				
				//Attribute Data
				$parent = $this->security->xss_clean($request->parent);
				$sidebar = $this->security->xss_clean($request->sidebar);
			    $sidebar_name = $this->security->xss_clean(isset($request->sidebar_name)?$request->sidebar_name:'');
				$comment = $this->security->xss_clean($request->comment);
			    $ordernum = $this->security->xss_clean(isset($request->ordernum)?$request->ordernum:'');
				
			    $action=$this->pages_model->update_set(
				$pid,$title,$slug,$content,
				$custom_seo,$seo_index,$seo_follow,$seo_title,$seo_keyword,$seo_desc,
				$publish,$new_date,
				$parent,$sidebar,$sidebar_name,$comment,$ordernum);
				    if($action){
				    	echo $result = '{"status" : "success","message" : "Page has been succesfully updated!"}';
				    } else {
				    	echo $result = '{"status" : "failure","message" : "Failed to update page!! Please try again later!!"}';
				    }
				} else {
		    		show_404('page');
		    	}
	}
	
	public function delete_data()
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
	
	public function restore_data()
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
	
    public function delete_permanent_data()
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
	/*============================================
				End Function AngularJS
	==============================================*/
	
	
	/*============================================
				Start Function View Page
	==============================================*/
	
	//Index Page
	 public function _index_page(){
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
	
	//Add Page
	public function _add_page(){
    	 // Some example data
		$data['title']="Create New ".$this->page_name;
		$data['heading']="Create New ".$this->page_name;
		$data['page_desc']="Form New ".$this->page_name;
		
        // for load external js
		$loadJSFiles = array();
		$loadJSFiles[] = base_url('public/js/admin/proui/page.js');
		//$loadJSFiles[] = base_url('themes/proui/js/pages/tablesDatatables.js');
		$this->smarty->assign('loadJSFiles', $loadJSFiles);
		
		 // for init external js
		$initJSFiles = array();
		//$initJSFiles[] = "TablesDatatables.init();";
		$this->smarty->assign('initJSFiles', $initJSFiles);
		
        // Load the template from the views directory
        $this->load->model('administrator/pages/pages_model');
		$getParent=$this->pages_model->getParentList(0);
		$getSidebar=$this->pages_model->getSidebarList();
		$this->smarty->assign('parentlist', $getParent);
		$this->smarty->assign('sidebarlist', $getSidebar);
		$data['content'] = "menu/pages/add.tpl";
        $this->parser->parse("layout/main.tpl",$data);
    }
	
	public function _edit_page($page_id){
    	 // Some example data
		$data['title']="Edit Data ".$this->page_name;
		$data['heading']="Edit Data ".$this->page_name;
		$data['page_desc']="Form Edit Data ".$this->page_name;
		
        // for load external js
		$loadJSFiles = array();
		$loadJSFiles[] = base_url('public/js/admin/proui/page.js');
		//$loadJSFiles[] = base_url('themes/proui/js/pages/tablesDatatables.js');
		$this->smarty->assign('loadJSFiles', $loadJSFiles);
		
		 // for init external js
		$initJSFiles = array();
		//$initJSFiles[] = "TablesDatatables.init();";
		$this->smarty->assign('initJSFiles', $initJSFiles);
		
        // Load the template from the views directory
        $this->load->model('administrator/pages/pages_model');
		$getParent=$this->pages_model->getParentList($page_id);
		$getSidebar=$this->pages_model->getSidebarList();
		$this->smarty->assign('parentlist', $getParent);
		$this->smarty->assign('sidebarlist', $getSidebar);
		$this->smarty->assign('page_id', $page_id);
		$data['content'] = "menu/pages/edit.tpl";
        $this->parser->parse("layout/main.tpl",$data);
    }
	
	//Index Page
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
	/*============================================
				End Function View Page
	==============================================*/

}
