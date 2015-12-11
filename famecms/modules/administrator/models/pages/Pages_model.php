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

class Pages_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('admin');
    }

// Get Data Default Form
public function getParentList($pid)
		{	
			$this->db->select('post_title AS name,ID AS value');
			$this->db->where('post_type', 'page'); 
            $this->db->where('post_parent', '0');
            if ($pid !='0'){
            $where = "ID != '$pid'";
            $this->db->where($where);
        	}
            $query=$this->db->get('fame_post');
            $result = $query->result_array();
			return $result;
		}
public function getSidebarList(){
			$this->db->select('widget_name AS name,id_widget AS value');
			$query=$this->db->get('fame_widget');
	        $result = $query->result_array(); 
	        return $result;
		}

// Processing Form
public function create_new($title,$content,
				$custom_seo,$seo_index,$seo_follow,$seo_title,$seo_keyword,$seo_desc,
				$publish,$custom_date,$publish_date,
				$parent,$sidebar,$sidebar_name,$comment,$ordernum){
				if($custom_date =='yes'){
					$date = $publish_date;
				} else {
					$date = date('Y-m-d H:i:s');
				}
			$str = str_replace(" ", "-", $title);
			//$uniqueID = createUniqueID(6,'ID','fame_post');
			$data=array(
			'post_author'=>$this->session->userdata('admin_id'),
			'post_date'=>$date,
			'post_title'=>$title,
			'post_content'=>$content,
			'post_excerpt'=>'',
			'post_status'=>$publish,
			'comment_status'=>$comment,
			'post_parent'=>$parent,
			'post_url'=>strtolower ( $str ),
			'menu_order'=>$ordernum,
			'post_type'=>"page",
			'sidebar_type'=>$sidebar,
			'sidebar_id'=>$sidebar_name,
			// Seo data
			'custom_seo'=>$custom_seo,
			'seo_title'=>$seo_title,
			'seo_description'=>$seo_desc,
			'seo_keyword'=>$seo_keyword,
			'seo_index'=>$seo_index,
			'seo_follow'=>$seo_follow,
			);
			$create = $this->db->insert('fame_post',$data);
			if ($create){
				return true;
			} else {
				return false;
			}
		}
		
public function update_set($pid,$title,$slug,$content,
				$custom_seo,$seo_index,$seo_follow,$seo_title,$seo_keyword,$seo_desc,
				$publish,$new_date,
				$parent,$sidebar,$sidebar_name,$comment,$ordernum){
			$str = str_replace(" ", "-", $slug);
			
			//$uniqueID = createUniqueID(6,'ID','fame_post');
			if ($new_date !=''){
			$data=array(
			'post_title'=>$title,
			'post_content'=>$content,
			'post_excerpt'=>'',
			'post_status'=>$publish,
			'comment_status'=>$comment,
			'post_date'=>date('Y-m-d H:i:s',strtotime($new_date)),
			'post_modified'=>date('Y-m-d H:i:s'),
			'post_parent'=>$parent,
			'post_url'=>strtolower ( $str ),
			'menu_order'=>$ordernum,
			'sidebar_type'=>$sidebar,
			'sidebar_id'=>$sidebar_name,
			// Seo data
			'custom_seo'=>$custom_seo,
			'seo_title'=>$seo_title,
			'seo_description'=>$seo_desc,
			'seo_keyword'=>$seo_keyword,
			'seo_index'=>$seo_index,
			'seo_follow'=>$seo_follow,
			);
			} else {
			$data=array(
			'post_title'=>$title,
			'post_content'=>$content,
			'post_excerpt'=>'',
			'post_status'=>$publish,
			'comment_status'=>$comment,
			'post_modified'=>date('Y-m-d H:i:s'),
			'post_parent'=>$parent,
			'post_url'=>strtolower ( $str ),
			'menu_order'=>$ordernum,
			'sidebar_type'=>$sidebar,
			'sidebar_id'=>$sidebar_name,
			// Seo data
			'custom_seo'=>$custom_seo,
			'seo_title'=>$seo_title,
			'seo_description'=>$seo_desc,
			'seo_keyword'=>$seo_keyword,
			'seo_index'=>$seo_index,
			'seo_follow'=>$seo_follow,
			);
			}
			
			$this->db->where('ID',$pid);
			$update = $this->db->update('fame_post',$data);
			if ($update){
				return true;
			} else {
				return false;
			}
		}

public function delete_content($id){
			$data=array(
			'post_status'=>'delete',
			);
			$this->db->where('ID', $id);
			$delete = $this->db->update('fame_post', $data);
			if ($delete){
				return true;
			} else {
				return false;
			} 
		}

public function restore_content($id){
			$data=array(
			'post_status'=>'publish',
			);
			$this->db->where('ID', $id);
			$restore = $this->db->update('fame_post', $data); 
			if ($restore){
				return true;
			} else {
				return false;
			}
		}

public function delete_permanent_content($id){
			$this->db->where('ID', $id);
			$delete_permanent = $this->db->delete('fame_post'); 
			if ($delete_permanent){
				return true;
			} else {
				return false;
			}
		}

//Get Json Data 
public function getTableList()
		{	
			$this->db->select('A.ID AS id_post,A.post_title AS title,A.post_date AS date,A.post_modified AS modified,A.post_status AS status,B.user_name AS author');
            $this->db->from('fame_post AS A');
            $this->db->where('A.post_type','page');
            $where = "A.post_status != 'delete'";
            $this->db->where($where);
            $this->db->join('fame_user AS B', 'B.user_id = A.post_author');
            $query=$this->db->get();
            $result = $query->result_array();
			return $result;
		}
		
public function getTrashList()
		{	
			$this->db->select('A.ID AS id_post,A.post_title AS title,A.post_date AS date,A.post_modified AS modified,A.post_status AS status,B.user_name AS author');
            $this->db->from('fame_post AS A');
            $this->db->where('A.post_type','page');
            $where = "A.post_status = 'delete'";
            $this->db->where($where);
            $this->db->join('fame_user AS B', 'B.user_id = A.post_author');
            $query=$this->db->get();
            $result = $query->result_array();
			return $result;
		}
		
public function getOldData($pid)
		{	
			$this->db->select('A.ID AS id_post,A.post_title AS title,A.post_content AS content,A.post_url AS slug,
			A.custom_seo AS custom_seo,A.seo_index AS seo_index,A.seo_follow AS seo_follow,A.seo_title AS seo_title,A.seo_keyword AS seo_keyword,A.seo_description AS seo_desc,
			A.post_status AS publish,A.post_date AS publish_date,
			A.post_parent AS parent,A.sidebar_type AS sidebar,A.sidebar_id AS sidebar_name,A.comment_status AS comment,A.menu_order AS ordernum');
            $this->db->from('fame_post AS A');
            $this->db->where('A.ID',$pid);
            $query=$this->db->get();
            $result = $query->result();
			return $result;
		}
}