<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Edit_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
    }
    public function index()
    {
        $data['title'] = "Edit Recipe";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav');
		$this->load->view('pages/edit_recipe', $data);
        $this->load->view('templates/footer');   
    }
}

/* End of file Edit_controller.php and path \application\controllers\pages\Edit_controller.php */
