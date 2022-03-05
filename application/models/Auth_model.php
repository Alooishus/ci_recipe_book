<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Auth_model extends CI_Model 
{
    public function __construct()
    {
        parent::__construct();
        if($this->session->has_userdata('authenticated'))
        {
            if($this->session->userdata('authenticated') != '1')
            {
                redirect(base_url('login'));
            }
        }
    }                       
                        
}


/* End of file Auth_model.php and path \application\models\Auth_model.php */
