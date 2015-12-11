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

class Category_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('admin');
    }

// Get Data Default Form
public function getParentList($pid)
		{	
			$this->db->select('name_cat AS name,id_cat AS value');
            $this->db->where('id_parent', '0');
            if ($pid !='0'){
            $where = "ID != '$pid'";
            $this->db->where($where);
        	}
            $query=$this->db->get('fame_category');
            $result = $query->result_array();
			return $result;
		}

// Processing Form
public function create_new($name,$desc,
				$custom_seo,$seo_index,$seo_follow,$seo_title,$seo_keyword,$seo_desc,
				$publish,
				$type,$parent,$ordernum){
			$str = str_replace(" ", "-", $name);
			//$uniqueID = createUniqueID(6,'ID','fame_post');
			$data=array(
			'name_cat'=>$name,
			'cat_desc'=>$desc,
			'cat_status'=>$publish,
			'id_parent'=>$parent,
			'slug'=>strtolower ( $str ),
			'menu_order'=>$ordernum,
			'cat_type'=>$type,
			// Seo data
			'custom_seo'=>$custom_seo,
			'seo_title'=>$seo_title,
			'seo_description'=>$seo_desc,
			'seo_keyword'=>$seo_keyword,
			'seo_index'=>$seo_index,
			'seo_follow'=>$seo_follow,
			);
			$create = $this->db->insert('fame_category',$data);
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
			'cat_status'=>'delete',
			);
			$this->db->where('id_cat', $id);
			$delete = $this->db->update('fame_category', $data);
			if ($delete){
				return true;
			} else {
				return false;
			} 
		}

public function restore_content($id){
			$data=array(
			'cat_status'=>'active',
			);
			$this->db->where('id_cat', $id);
			$restore = $this->db->update('fame_category', $data); 
			if ($restore){
				return true;
			} else {
				return false;
			}
		}

public function delete_permanent_content($id){
			$this->db->where('id_cat', $id);
			$delete_permanent = $this->db->delete('fame_category'); 
			if ($delete_permanent){
				return true;
			} else {
				return false;
			}
		}

//Get Json Data 
public function getTableList()
		{	
			$this->db->select('A.id_cat AS id_cat,A.name_cat AS name,A.slug AS slug,A.id_parent AS id_parent,A.cat_type AS type,A.cat_status AS status,A.cat_image AS image,cat_desc AS desc');
            $this->db->from('fame_category AS A');
            $where = "A.cat_status != 'delete'";
            $this->db->where($where);
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