 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
 */
 function getDataSetting($table_name)
{   
    $CI =& get_instance();
    $CI->load->model('frontend/getdata/setting_model');
    $row=$CI->setting_model->getDataSetting($table_name);
    return $row;
    
}


