<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Recipes_model extends CI_Model 
{
    public function get_recipe_cards()
    {
        //$query = $this->db->get('recipes');

        $this->db->select('recipe_name as rname, user_name as uname, image_path');
        $this->db->from('recipes');
        $this->db->join('users', 'users.id = recipes.user_id');
        $this->db->join('images', 'images.id = recipes.image_id');
        $query = $this->db->get();

        return $query->result();
    }                        
                        
}


/* End of file Recipes_model.php and path \application\models\Recipes_model.php */
