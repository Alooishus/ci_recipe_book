<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Categories_model extends CI_Model 
{
    public function category_insert($data)
    {
        //return $this->db->insert('categories', $data);
        $this->db->insert('categories', $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    
    public function get_all()
    {
        $this->db->select('*');
        $this->db->from('categories');
        $records = $this->db->get();
        return $records->result_array();
    }

    public function get($id)
    {
        $this->db->select('*');
        $this->db->from('categories');
        $this->db->where('id', $id);
        return $this->db->get();
        
    }

    public function get_category_recipe($id)
    {
        $this->db->select('*');
        $this->db->from('categories_line');
        $this->db->join('categories', 'categories.id = categories_line.category_id');
        $this->db->where('recipe_id', $id);
        $records = $this->db->get();
        return $records->result_array();
    }
                        
}


/* End of file Categories_model.php and path \application\models\Categories_model.php */
