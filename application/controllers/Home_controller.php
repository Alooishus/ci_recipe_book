<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Home_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    // Calls for views on homepage
    public function index()
    {
        $data['title'] = "Recipe Book";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav');
        $this->load->view('templates/searchbar');
		$this->load->view('home');
        $this->load->view('templates/footer');       
    }
}

/* End of file Home_controller.php and path \application\controllers\Home_controller.php */
