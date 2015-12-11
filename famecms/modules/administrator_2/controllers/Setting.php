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

class Setting extends CI_Controller {
	public $page_name = "Setting";
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
     public function profile()
    {

    	if($this->session->has_userdata('admin_id'))
		{
			$this->_manage_profile();
		} else {
			// redirect them to the login page
			redirect('administrator/login', 'refresh');
    	}
    }
   
    public function profile_update(){
    	$this->load->model('administrator/setting/setting_model');
		$postdata = file_get_contents("php://input");
		if ($postdata){
	    $request = json_decode($postdata);
	    $f_name = $this->security->xss_clean($request->first_name);
	    $l_name = $this->security->xss_clean($request->last_name);
	    $username = $this->security->xss_clean($request->user_name);
	    if (isset($request->crop_picture)){
	    $picture = $request->crop_picture;
		} else {
		$picture = "";	
		}

	    $updProfile=$this->setting_model->update_profile($f_name,$l_name,$username,$picture);
		    if($updProfile){
		    	echo $result = '{"status" : "success","message" : "Profile has been update"}';
		    } else {
		    	echo $result = '{"status" : "failure","message" : "Update Profile Failed!! Please try again later!!"}';
		    }
		} else {
    		show_404('page');
    	}
    }

    public function general_setting_update(){
    	$this->load->model('administrator/setting/setting_model');
		$postdata = file_get_contents("php://input");
		if ($postdata){
	    $request = json_decode($postdata);
	    $sitename = $this->security->xss_clean(isset($request->sitename)?$request->sitename:'');
	    $tagline = $this->security->xss_clean(isset($request->tagline)?$request->tagline:'');
	    $email = $this->security->xss_clean(isset($request->email)?$request->email:'');
	    $phone = $this->security->xss_clean(isset($request->phone)?$request->phone:'');
	    $address = $this->security->xss_clean(isset($request->address)?$request->address:'');
	    

	    $updSetting=$this->setting_model->update_general_setting($sitename,$tagline,$email,$phone,$address);
		    if($updSetting){
		    	echo $result = '{"status" : "success","message" : "General Setting has been update"}';
		    } else {
		    	echo $result = '{"status" : "failure","message" : "Update General Setting Failed!! Please try again later!!"}';
		    }
		} else {
    		show_404('page');
    	}
    }

    public function custom_setting_update(){
    	$this->load->model('administrator/setting/setting_model');
		$postdata = file_get_contents("php://input");
		if ($postdata){
	    $request = json_decode($postdata);
	    $custom_logo = $this->security->xss_clean(isset($request->custom_logo)?$request->custom_logo:'');
	    $custom_logo_url = $this->security->xss_clean(isset($request->custom_logo_url)?$request->custom_logo_url:'');
	    $custom_favicon = $this->security->xss_clean(isset($request->custom_favicon)?$request->custom_favicon:'');
	    $custom_favicon_url = $this->security->xss_clean(isset($request->custom_favicon_url)?$request->custom_favicon_url:'');
	    $register_admin = $this->security->xss_clean(isset($request->register_admin)?$request->register_admin:'');
	    $forget_password = $this->security->xss_clean(isset($request->forget_password)?$request->forget_password:'');
	    $maintenance_mode = $this->security->xss_clean(isset($request->maintenance_mode)?$request->maintenance_mode:'');

	    $updSetting=$this->setting_model->update_custom_setting($custom_logo,$custom_logo_url,$custom_favicon,$custom_favicon_url,$register_admin,$forget_password,$maintenance_mode);
		    if($updSetting){
		    	echo $result = '{"status" : "success","message" : "Custom Setting has been update"}';
		    } else {
		    	echo $result = '{"status" : "failure","message" : "Update Custom Setting Failed!! Please try again later!!"}';
		    }
		} else {
    		show_404('page');
    	}
    }

    public function getGeneralSetting()
    {
			$id=$this->session->userdata('admin_id');
			if ($id)
			{
				$this->load->model('administrator/setting/setting_model');
				$getData=$this->setting_model->getGeneralSetting();
				echo json_encode($getData);
			} else {
				show_404('page');
			}
    }

    public function getCustomSetting()
    {
			$id=$this->session->userdata('admin_id');
			if ($id)
			{
				$this->load->model('administrator/setting/setting_model');
				$getData=$this->setting_model->getCustomSetting();
				echo json_encode($getData);
			} else {
				show_404('page');
			}
    }

    public function _manage_page(){
        // Some example data
        $data['title']=$this->page_name;
		$data['heading']=$this->page_name;
		$data['page_desc']=$this->page_name." Page";
		 
		 // for load external js
		$loadJSFiles = array();
		//$loadJSFiles[] = base_url('themes/proui/js/pages/tablesDatatables.js');
		$this->smarty->assign('loadJSFiles', $loadJSFiles);
		
		 // for init external js
		$initJSFiles = array();
		//$initJSFiles[] = "TablesDatatables.init();";
		$this->smarty->assign('initJSFiles', $initJSFiles);
        // Load the template from the views directory
		$data['content'] = "menu/setting/index.tpl";
        $this->parser->parse("layout/main.tpl",$data);
    }

     public function _manage_profile()
    {
        // Some example data
        $data['title']='Profile '.$this->page_name;
		$data['heading']='Profile '.$this->page_name;
		$data['page_desc']='Profile '.$this->page_name." Page";
		 
		 // for load external js
		$loadJSFiles = array();
		//$loadJSFiles[] = base_url('themes/proui/js/pages/tablesDatatables.js');
		$this->smarty->assign('loadJSFiles', $loadJSFiles);
		
		 // for init external js
		$initJSFiles = array();
		//$initJSFiles[] = "TablesDatatables.init();";
		$this->smarty->assign('initJSFiles', $initJSFiles);
        // Load the template from the views directory
		$data['content'] = "menu/setting/profile.tpl";
        $this->parser->parse("layout/main.tpl",$data);
    }
}
