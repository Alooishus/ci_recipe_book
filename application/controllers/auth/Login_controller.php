<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Login_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(
            array('url', 'form')
        );
        $this->load->library('form_validation');
    }

    /**
     * Load login page views
     */
    public function index()
    {
        $data['title'] = "Log In";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav');
		$this->load->view('auth/login', $data);
        $this->load->view('templates/footer');        
    }

    /**
     * Validate the login form inputs and set session on success
     * 
     * Success sets session vars:
     * * authenticated = 1
     * * auth_user = db->user_name
     * * redirect to homepage
     * 
     * Fail sets session status['fail'] and status_message
     * * redirect to login
     */
    public function login()
    {
        $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        // Send user back to index function if form validation fails
        if ($this->form_validation->run() == FALSE) 
        {
            $this->index();
        }
        else
        {
            $this->load->model('users_model');
            // Get values from HTML form post
            $data = array(
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            );
            $user = new Users_model;

            $result = $user->login_user($data);
            if ($result != FALSE)
            {
                $this->session->set_userdata('authenticated', '1');
                $this->session->set_userdata('auth_user', $result->user_name);
                redirect(base_url());
            } 
            else 
            {
               $this->session->set_flashdata('status', 'fail');
               $this->session->set_flashdata('status_message', 'Invalid Email or Password');
               redirect(base_url('login'));
            }
            

        }
    }
}

/* End of file Login_controller.php and path \application\controllers\auth\Login_controller.php */
