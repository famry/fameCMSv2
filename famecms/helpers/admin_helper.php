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
 function getDataLoginAdmin($id,$table_name)
{   
    $CI =& get_instance();
    $CI->load->model('administrator/user/user_model');
    $row=$CI->user_model->getDataProfile($id,$table_name);
    return $row;
    
}

 function getDataSetting($table_name)
{   
    $CI =& get_instance();
    $CI->load->model('administrator/setting/setting_model');
    $row=$CI->setting_model->getDataSetting($table_name);
    return $row;
    
}

function createUniqueID($length,$column_name,$table_name){
$CI =& get_instance();
// The length we want the unique reference number to be  
$unique_ref_length = $length;  
  
// A true/false variable that lets us know if we've  
// found a unique reference number or not  
$unique_ref_found = false;  
  
// Define possible characters.  
// Notice how characters that may be confused such  
// as the letter 'O' and the number zero don't exist  
$possible_chars = "0123456789";  
  
// Until we find a unique reference, keep generating new ones  
while (!$unique_ref_found) {  
  
    // Start with a blank reference number  
    $unique_ref = "";  
      
    // Set up a counter to keep track of how many characters have   
    // currently been added  
    $i = 0;  
      
    // Add random characters from $possible_chars to $unique_ref   
    // until $unique_ref_length is reached  
    while ($i < $unique_ref_length) {  
      
        // Pick a random character from the $possible_chars list  
        $char = substr($possible_chars, mt_rand(0, strlen($possible_chars)-1), 1);  
          
        $unique_ref .= $char;  
          
        $i++;  
      
    }  
      
    // Our new unique reference number is generated.  
    // Lets check if it exists or not 
    $CI->db->select($column_name);
	$CI->db->where($column_name, $unique_ref); 
    $query=$CI->db->get($table_name);
    $result = $query->num_rows() ;
    if ($result==0) {  
      
        // We've found a unique number. Lets set the $unique_ref_found  
        // variable to true and exit the while loop  
        $unique_ref_found = true;  
      
    }  
}  
return $unique_ref;
}
