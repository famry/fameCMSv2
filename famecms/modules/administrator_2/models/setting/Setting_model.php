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

class Setting_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('phpass');

    }

public function getDataSetting($table_name) {

   $this->db->select('A.id_site AS id_site,A.site_title AS site_title,A.site_tagline AS site_tagline,A.site_email AS site_email,
   	A.site_phone AS site_phone,A.site_address AS site_address,
   	B.limit_registration AS limit_registration,B.limit_by AS limit_by,B.limit_number AS limit_number,
   	C.custom_logo AS custom_logo,C.custom_logo_url AS custom_logo_url,C.custom_favicon AS custom_favicon,
   	C.custom_favicon_url AS custom_favicon_url,C.register_admin AS register_admin,C.forget_password AS forget_password,
   	C.maintenance_mode AS maintenance_mode');
    $this->db->from('fame_setting_general AS A');
    $this->db->where('A.id_site','1');
    $this->db->join('fame_setting_socnet AS B', 'B.id_site = A.id_site');
    $this->db->join('fame_setting_custom AS C', 'C.id_site = A.id_site');
    $query=$this->db->get();
	foreach ($query->result() as $row)
		{
			return $row->$table_name;
		}

	}

public function getGeneralSetting()
	{	
		$this->db->select('id_site AS id_site,site_title AS sitename,site_tagline AS tagline,site_email AS email,
			site_phone AS phone,site_address AS address');
        $this->db->from('fame_setting_general');
        $this->db->where('id_site','1');
        $query=$this->db->get();
        $result = $query->result();
		return $result;
	}

public function getCustomSetting()
	{	
		$this->db->select('id_option,id_site,
			custom_logo,custom_logo_url,custom_favicon,custom_favicon_url,
			register_admin,forget_password,maintenance_mode');
        $this->db->from('fame_setting_custom');
        $this->db->where('id_site','1');
        $query=$this->db->get();
        $result = $query->result();
		return $result;
	}

public function update_profile($f_name,$l_name,$username,$picture)
	{
		if($picture){
		define('UPLOAD_DIR', 'public/img/thumb/');
		$img = str_replace('data:image/png;base64,', '', $picture);
		$img = str_replace(' ', '+', $img);
		$dataimg = base64_decode($img);
		$fileimg = UPLOAD_DIR . uniqid() . '.jpg';
		$success = file_put_contents($fileimg, $dataimg);
		//print $success ? $file : 'Unable to save the file.';
		if ($success){
		$data=array(
					'first_name'=>$f_name,
					'last_name'=>$l_name,
					'profil_pic_url'=>$fileimg
				);
		} else {
					return false;
				}
		} else {
		$data=array(
					'first_name'=>$f_name,
					'last_name'=>$l_name
				);
		}
		$this->db->where('user_name',$username);
		$updateData = $this->db->update('fame_user',$data);
		if ($updateData){
	  		return true;
		} else {
			return false;
		}
	}

public function update_general_setting($sitename,$tagline,$email,$phone,$address){
			$data=array(
			'site_title'=>$sitename,
			'site_tagline'=>$tagline,
			'site_email'=>$email,
			'site_phone'=>$phone,
			'site_address'=>$address,
			);
			$this->db->where('id_site','1');
			$update = $this->db->update('fame_setting_general',$data);
			if ($update){
				return true;
			} else {
				return false;
			}
		}

public function update_socnet_setting($register_limit,$limit_by,$limit_num){
			$data=array(
			'limit_registration'=>$register_limit,
			'limit_by'=>$limit_by,
			'limit_number'=>$limit_num,
			);
			$this->db->where('id_site','1');
			$update = $this->db->update('fame_setting_socnet',$data);
			if ($update){
				return true;
			} else {
				return false;
			}
		}

public function update_custom_setting($custom_logo,$custom_logo_url,$custom_favicon,$custom_favicon_url,$register_admin,$forget_password,$maintenance_mode){
			$data=array(
			'custom_logo'=>$custom_logo,
			'custom_logo_url'=>$custom_logo_url,
			'custom_favicon'=>$custom_favicon,
			'custom_favicon_url'=>$custom_favicon_url,
			'register_admin'=>$register_admin,
			'forget_password'=>$forget_password,
			'maintenance_mode'=>$maintenance_mode
			);
			$this->db->where('id_site','1');
			$update = $this->db->update('fame_setting_custom',$data);
			if ($update){
				return true;
			} else {
				return false;
			}
		}
}