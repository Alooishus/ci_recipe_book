<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Logout_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
    }

    // Destroy session variables that mark user as logged in - redirect to homepage
    public function index()
    {
        $this->session->unset_userdata('authenticated'); 
        $this->session->unset_userdata('auth_user'); 
        $this->session->set_flashdata('status', 'You have successfully logged out!');
        redirect(base_url());
    }
}

/* End of file Logout_controller.php and path \application\controllers\auth\Logout_controller.php */
