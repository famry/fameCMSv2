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

class Administrator extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        // Ideally you would autoload the parser
        $this->load->library('parser');
        $this->load->library('security');
        $this->load->helper('phpass');
        $this->load->helper('admin');
    }
	
	
    /*============================================
				Start Function Page Controller
	==============================================*/
	
	// Index Controller Function
    public function index()
    {

    	if($this->session->has_userdata('admin_id'))
		{
			$this->_admin_page();
		} else {
			// redirect them to the login page
			redirect('administrator/login', 'refresh');
    	}
    }
	
	// Login Controller Function
     public function login()
    {
    	if($this->session->has_userdata('admin_id'))
		{
			// redirect them to the login page
			redirect('administrator/', 'refresh');
		} else {
			$this->_login_page();
    	}
    }
	
	// Logout Controller Function
    public function logout (){
    	if($this->session->has_userdata('admin_id')){
			$sessionLogin = array('admin_id', 'admin_username','admin_role_id','admin_session_id','admin_logged_in');
			$this->session->unset_userdata($sessionLogin);
			redirect('administrator/login', 'refresh');
    	} else {
    		redirect('administrator/login', 'refresh');
    	}
    }
     /*public function lock_account (){
    	if($this->session->has_userdata('admin_id')){
			$sessionLock = array('admin_session_id','admin_logged_in');
			$this->session->unset_userdata($sessionLock);
			redirect('administrator/login', 'refresh');
    	} else {
    		redirect('administrator/login', 'refresh');
    	}
    }*/
	/*============================================
				End Function Page Controller
	==============================================*/

	
    /*============================================
				Start Function AngularJS
	==============================================*/
	
	//Login Function
     public function auth_login()
    {	
    		$postdata = file_get_contents("php://input"); 
    	if ($postdata){
    		$request = json_decode($postdata);
    		$username = $this->security->xss_clean(isset($request->username)?$request->username:'');
		    $password = $this->security->xss_clean(isset($request->password)?$request->password:'');
		    //$hasher = new PasswordHash(PHPASS_HASH_STRENGTH, PHPASS_HASH_PORTABLE);
    		//$hash_password = $hasher->HashPassword($password);
		    /*if(isset($request->remember)){
		    $remember = (bool) $request->remember;
		    } else {
		    $remember = (bool) false;	
		    }*/
		     
        	$this->load->model('administrator/user/user_model');
        	/*$validateEmail = $this->member_model->checkValidateEmail($email);
        	if($validateEmail)
			    {
				   echo $result = '{"status" : "failure","message" : "Your Account is not active!!"}';
				} else {*/
					 if ($this->user_model->login($username, $password))
					{
						//if the login is successful
						echo $result = '{"status" : "success","message" : "Login Success!!","username" :"'.$username.'"}';
					}
					else
					{
						// if the login was un-successful
						echo $result = '{"status" : "failure","message" : "Email / Password not match!!"}';
					}
				//}
    	} else {
    		show_404('page');
    	}
    }
	
	//Register Function
    public function auth_register()
	{
				$this->load->model('administrator/user/user_model');

				$postdata = file_get_contents("php://input");
				if ($postdata){
			    $request = json_decode($postdata);
			    $f_name = $this->security->xss_clean($request->firstname);
			    $l_name = $this->security->xss_clean($request->lastname);
			    $email = $this->security->xss_clean($request->email);
			    $username = $this->security->xss_clean($request->username);
			    $pass = $this->security->xss_clean($request->password);
			    $hasher = new PasswordHash(PHPASS_HASH_STRENGTH, PHPASS_HASH_PORTABLE);
    			$hash_password = $hasher->HashPassword($pass);
			    $register_auth=$this->user_model->register($f_name,$l_name,$email,$username,$hash_password);
				    if($register_auth){
				    	echo $result = '{"status" : "success","message" : "Registration Success"}';
				    } else {
				    	echo $result = '{"status" : "failure","message" : "Registration Failed!! Please try again later!!"}';
				    }
				} else {
		    		show_404('page');
		    	}
	}
	
	//Check Exist Email Function
    public function checkExistEmail()
	{
        		$this->load->model('administrator/user/user_model');
				$postdata = file_get_contents("php://input");
				if ($postdata){
			    $request = json_decode($postdata);
			    $email = $request->email;
			    $checkEmail=$this->user_model->checkExistEmail($email);
			    if($checkEmail){
			    	echo $result = '{"status" : "failure","message" : "Email already exist!!"}';
			    } else {
			    	echo $result = '{"status" : "success","message" : "Email is available!!"}';
			    }
			    } else {
    		show_404('page');
    		}
	}
	
	//Check Exist Username Function
	public function checkExistUsername()
	{
				$this->load->model('administrator/user/user_model');
				$postdata = file_get_contents("php://input");
				if ($postdata){
			    $request = json_decode($postdata);
			    $username = $request->username;
			    $checkUsername=$this->user_model->checkExistUsername($username);
			    if($checkUsername){
			    	echo $result = '{"status" : "failure","message" : "Profile Url already exist!!"}';
			    } else {
			    	echo $result = '{"status" : "success","message" : "Profile Url is available!!"}';
			    }
			     } else {
    		show_404('page');
    		}
	}
	
	//Get Data Profile Function
	public function getDataProfile()
	{
				
				$id=$this->session->userdata('admin_id');
				if ($id){
				$this->load->model('administrator/user/user_model');
			    $getData=$this->user_model->getDataProfile($id);
				echo json_encode($getData);
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
	
	//Dashboard Page
     public function _admin_page(){
     	$page_name = "Dashboard";
		$data['title']=$page_name;
		$data['heading']=$page_name;
		$data['page_desc']=$page_name;
		
        // for load external js
		$loadJSFiles = array();
		$loadJSFiles[] = base_url('themes/proui/js/pages/index.js');
		$this->smarty->assign('loadJSFiles', $loadJSFiles);
		
		 // for init external js
		$initJSFiles = array();
		$initJSFiles[] = "Index.init()";
		$this->smarty->assign('initJSFiles', $initJSFiles);
		
        // Load the template from the views directory
		$data['content'] = "index.tpl";
		
		
		
        $this->parser->parse("layout/main.tpl",$data);
     }
	 
	//Login Page
     public function _login_page(){
     	$page_name = "Login";
		$data['title']=$page_name;
		$data['heading']=$page_name;
		$data['page_desc']=$page_name;
		
        // for load external js
		$loadJSFiles = array();
		//$loadJSFiles[] = base_url('themes/proui/js/pages/login.js');
		//$loadJSFiles[] = base_url('themes/proui/js/pages/uiProgress.js');
		$this->smarty->assign('loadJSFiles', $loadJSFiles);
		
		 // for init external js
		$initJSFiles = array();
		//$initJSFiles[] = "Login.init()";
		//$initJSFiles[] = "UiProgress.init()";
		$this->smarty->assign('initJSFiles', $initJSFiles);
		
        // Load the template from the views directory
		//$data['content'] = "index.tpl";
        $this->parser->parse("layout/login.tpl",$data);
     }
	
	/*============================================
				End Function View Page
	==============================================*/

}
