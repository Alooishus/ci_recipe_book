<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Recipes_model extends CI_Model 
{

    public function get($id)
    {
        $this->db->select('*');
        $this->db->from('recipes'); 
        $this->db->where('id', $id);
        $record = $this->db->get();
        return $record->result_array();
    }

    public function get_all()
    {
        $this->db->select('recipes.id, recipes.title, recipes.description, recipes.total_time, recipes.difficulty, recipes.user_id, users.user_name, recipes.updated_at, recipes.created_at');
        $this->db->from('recipes');
        $this->db->join('users', 'users.id = recipes.user_id');
        $records = $this->db->get();
        return $records->result_array();
    }   
    
    public function insert_recipe($data)
    {
        $this->db->insert('recipes',$data);
        return $this->db->insert_id();
    }

    public function insert_image($data)
    {
        $this->db->insert('images', $data);
        return $this->db->insert_id();
    }

    public function insert_category($data)
    {
        $this->db->insert('categories_line', $data);
    }

                        
}


/* End of file Recipes_model.php and path \application\models\Recipes_model.php */
