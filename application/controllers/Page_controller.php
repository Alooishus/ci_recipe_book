<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Page_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
    }
    public function index()
    {
                
    }
}

/* End of file Page_controller.php and path \application\controllers\Page_controller.php */
