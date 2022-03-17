<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Users_model extends CI_Model 
{
    /**
     * Insert user details 
     * @return bool
     */
    public function register_user($data)
    {
        return $this->db->insert('users', $data);
    }
    
    /**
     * Get user by email for password validation
     * @return object
     */
    public function login_user($data)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email',$data['email']);
        $this->db->limit('1');
        $query = $this->db->get();

        if($query->num_rows() == 1)
        {
            $result = $query->row();
            if(password_verify($data['password'], $result->password))
            {
                return $result;
            }
            else
            {
                return FALSE;
            }
        }
        else
        {
            return FALSE;
        }
    }
                        
}


/* End of file Users_model.php and path \application\models\Users_model.php */
