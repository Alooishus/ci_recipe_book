<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Ingredients_model extends CI_Model 
{
    public function get_ingredients()
    {
        $query = $this->db->get('ingredients');
        return $query->result();
    }                        
                        
}


/* End of file Ingredients_model.php and path \application\models\Ingredients_model.php */
