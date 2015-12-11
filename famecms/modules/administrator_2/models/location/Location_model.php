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

class Location_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
public function getTableList()
		{	
			$this->db->select('A.location_id AS id_location,A.name AS location_name,A.is_visible AS visible');
            $this->db->from('location AS A');
            $this->db->where('A.location_type','0');
            $query=$this->db->get();
            $result = $query->result_array();
			return $result;
		}
public function getOldData($pid)
		{	
			$this->db->select('A.location_id AS id_location,A.name AS name,A.is_visible AS publish');
            $this->db->from('location AS A');
            $this->db->where('A.location_id',$pid);
            $query=$this->db->get();
            $result = $query->result();
			return $result;
		}
public function create_new_country($name,$publish){
			$data=array(
			'name'=>$name,
			'location_type'=>'0',
			'parent_id'=>'0',
			'is_visible'=>$publish,
			);
			$create = $this->db->insert('location',$data);
			if ($create){
				return true;
			} else {
				return false;
			}
		}
public function update_set_country($pid,$name,$publish){
			//$str = str_replace(" ", "-", $title);
			//$uniqueID = createUniqueID(6,'ID','fame_post');
			$data=array(
			'name'=>$name,
			'is_visible'=>$publish
			);
			$this->db->where('location_id',$pid);
			$update = $this->db->update('location',$data);
			if ($update){
				return true;
			} else {
				return false;
			}
		}
}