<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Home_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('recipes_model');
    }
    // Calls for views on homepage
    public function index()
    {
        $recipe = new Recipes_model;
        $result = $recipe->get_all();

        $data = [
            'title' => 'Recipe Book',
            'recipes' => $result
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav');
        //$this->load->view('templates/searchbar');
		$this->load->view('home', $data);
        $this->load->view('templates/footer');       
    }
}

/* End of file Home_controller.php and path \application\controllers\Home_controller.php */
