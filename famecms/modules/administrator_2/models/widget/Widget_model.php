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

class Widget_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
public function getTableList()
		{	
			$this->db->select('A.id_widget AS id_widget,A.widget_name AS widget_name');
            $this->db->from('fame_widget AS A');
            $query=$this->db->get();
            $result = $query->result_array();
			return $result;
		}
public function getOldData($pid)
		{	
			$this->db->select('A.id_widget AS id_widget,A.widget_name AS name,A.widget_content AS content');
            $this->db->from('fame_widget AS A');
            $this->db->where('A.id_widget',$pid);
            $query=$this->db->get();
            $result = $query->result();
			return $result;
		}
public function create_new($name,$content){
			$data=array(
			'widget_name'=>$name,
			'widget_content'=>$content
			);
			$create = $this->db->insert('fame_widget',$data);
			if ($create){
				return true;
			} else {
				return false;
			}
		}
public function update_set($pid,$name,$content){
			$data=array(
			'widget_name'=>$name,
			'widget_content'=>$content
			);
			$this->db->where('id_widget',$pid);
			$update = $this->db->update('fame_widget',$data);
			if ($update){
				return true;
			} else {
				return false;
			}
		}
public function delete_permanent_content($id){
			$this->db->where('id_widget', $id);
			$delete_permanent = $this->db->delete('fame_widget'); 
			if ($delete_permanent){
				return true;
			} else {
				return false;
			}
		}
}