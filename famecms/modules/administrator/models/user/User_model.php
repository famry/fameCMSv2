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

class User_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('phpass');

    }

public function login($identify,$password)
	{
		$this->db->where("user_name",$identify);
		//$this->db->where("password",$password);
		  
		$query=$this->db->get("fame_user");
		
		if($query->num_rows()>0)
		{
		$getrow = $query->row();
		$hasher = new PasswordHash(PHPASS_HASH_STRENGTH, PHPASS_HASH_PORTABLE);
		$valid_password = $hasher->CheckPassword($password,$getrow->password);
		if ($valid_password){
			foreach($query->result() as $rows)
		{
			//add all data to session
			$newdata = array(
			  'admin_id'  => $rows->user_id,
			  'admin_username'  => $rows->user_name,
			  'admin_role_id'  => $rows->role,
			  'admin_session_id' => mt_rand(100,99999999),
			  //'user_email'    => $rows->email,
			  'admin_logged_in'  => TRUE,
			);
		}
		   $this->session->set_userdata($newdata);
		   return true;
		   
		} else {
		return false;	
		}
		}
		return false;
	}
public function register($f_name,$l_name,$email,$username,$hash_password)
			{ 
				$data=array(
					'first_name'=>$f_name,
					'last_name'=>$l_name,
					'password'=>$hash_password,
					'email'=>$email,
					'user_name'=>$username,
					'role'=>2,
					'status'=>'active',
				);
				$insertData = $this->db->insert('fame_user',$data);
				if ($insertData){
			  		return true;
				} else {
					return false;
				}
			}
public function checkExistEmail($email)
		{
			$this->db->where("email",$email);
			$query=$this->db->get("fame_user");
			if($query->num_rows()>0)
			{
				return true;
			}
				return false;
		}
public function checkExistUsername($username)
		{
			$this->db->where("user_name",$username);
			$query=$this->db->get("fame_user");
			if($query->num_rows()>0)
			{
				return true;
			}
				return false;
		}
public function getDataProfile($id)
		{	
		 	$query  = $this->db->query("SELECT A.user_id AS user_id,A.user_name AS user_name,
		 		A.first_name AS first_name,A.last_name AS last_name,A.email AS email,A.profil_pic_url AS display_picture,
		 		B.level_name AS role,A.status AS status
			FROM
			  fame_user AS A
			  LEFT JOIN fame_user_level AS B
			  ON B.level_id = A.role
			WHERE A.user_id = $id");
			return $query -> result();
		}
public function getTableList()
		{	
			$this->db->select('A.user_id AS user_id,A.user_name AS user_name,A.first_name AS first_name,
				A.last_name AS last_name,A.email AS email,A.profil_pic_url AS display_picture,
				B.level_name AS role,A.status AS status');
            $this->db->from('fame_user AS A');
            $where = "A.status != 'delete'";
            $this->db->where($where);
            $this->db->join('fame_user_level AS B', 'B.level_id = A.role','left');
            $query=$this->db->get();
            $result = $query->result_array();
			return $result;
		}
}
