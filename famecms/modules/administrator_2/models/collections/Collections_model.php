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

class Collections_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('admin');
    }

public function update_set($pid,$title,$content,$publish,$parent,$sidebar,$sidebar_name,$ordernum){
			//$str = str_replace(" ", "-", $title);
			//$uniqueID = createUniqueID(6,'ID','fame_post');
			$data=array(
			'post_title'=>$title,
			'post_content'=>$content,
			'post_status'=>$publish,
			'post_parent'=>$parent,
			'menu_order'=>$ordernum,
			'sidebar_type'=>$sidebar,
			'sidebar_id'=>$sidebar_name,
			'post_modified'=>date('Y-m-d H:i:s'),
			);
			$this->db->where('ID',$pid);
			$update = $this->db->update('fame_post',$data);
			if ($update){
				return true;
			} else {
				return false;
			}
		}

public function getTableList()
		{	
			$this->db->select('A.id_cat AS collection_id,A.name_cat AS collection_name,A.slug AS collection_slug,A.cat_status AS status');
            $this->db->from('fame_category AS A');
            $this->db->where('A.cat_type','collection');
            $where = "A.cat_status != 'delete'";
            $this->db->where($where);
            $query=$this->db->get();
            $result = $query->result_array();
			return $result;
		}
public function getProductList($id)
		{	
			$this->db->select('A.id_product AS product_id,A.product_name AS product_name,A.product_url AS product_url,A.status AS status,B.name_cat AS cat_name');
            $this->db->from('fame_product AS A');
            $this->db->join('fame_category AS B', 'B.id_cat = A.product_cat');
            $this->db->where('B.slug',$id);
            $where = "A.status != 'delete'";
            $this->db->where($where);
            $query=$this->db->get();
            $result = $query->result_array();
			return $result;
		}
		
public function getOldData($pid)
		{	
			$this->db->select('A.id_cat AS id,A.name_cat AS name,A.cat_desc AS desc');
			$this->db->from('fame_category AS A');
            $this->db->where('A.id_cat',$pid);
            $query=$this->db->get();
            $result = $query->result();
			return $result;
		}
}