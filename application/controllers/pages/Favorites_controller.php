<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Favorites_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
    }
    public function index()
    {
        $data['title'] = "Favorites";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav');
		$this->load->view('pages/favorites');
        $this->load->view('templates/footer');          
    }
}

/* End of file Favorites_controller.php and path \application\controllers\pages\Favorites_controller.php */
