<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Login_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = "Recipe Book";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav');
		$this->load->view('auth/login', $data);
        $this->load->view('templates/footer'); 
    }
}

/* End of file Login_controller.php and path \application\controllers\Login_controller.php */
