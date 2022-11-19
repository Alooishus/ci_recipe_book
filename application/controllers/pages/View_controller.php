<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class View_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
        $this->load->model('recipes_model');
    }
    public function index()
    {
        $id = $this->input->post('id');
        $recipe = new Recipes_model;
        $result = $recipe->get($id);

        $data = [
            'title' => 'View Recipe',
            'recipe' => $result
        ];

        /* $data = ['View Recipe']; */

        /* $this->load->view('templates/header', $data);
        $this->load->view('templates/nav'); */
		echo $this->load->view('pages/view_recipe', $data, true);
        /* $this->load->view('templates/footer');  */  
    }
}
