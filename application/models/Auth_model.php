<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Auth_model extends CI_Model 
{
    public function __construct()
    {
        parent::__construct();
        // Check if the user has logged otherwise redirect to login page.
        if($this->session->has_userdata('authenticated'))
        {
            if($this->session->userdata('authenticated') != '1')
            {
                redirect(base_url('login'));
            }
        }
    }   
    
    public function check_admin()
    {
        // run check for is_admin flag in database and pass session on success
    }
                        
}


/* End of file Auth_model.php and path \application\models\Auth_model.php */
