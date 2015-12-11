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
}