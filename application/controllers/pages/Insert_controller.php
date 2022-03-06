<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Insert_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
    }
    public function index()
    {
        $data['title'] = "Add Recipe";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav');
		$this->load->view('pages/add_recipe', $data);
        $this->load->view('templates/footer');     
    }
}

/* End of file Insert_controller.php and path \application\controllers\pages\Insert_controller.php */
