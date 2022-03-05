<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Register_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(
            array('url', 'form')
        );
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = "Recipe Book";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav');
		$this->load->view('auth/register', $data);
        $this->load->view('templates/footer');     
    }

    public function register()
    {
        $this->form_validation->set_rules('user_name', 'User Name', 'trim|required|alpha');
        $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[password]');
        if($this->form_validation->run() == FALSE)
        {
            $this->index();
        }
        else
        {
            $this->load->model('users_model');
            $data = array(
                'user_name' => $this->input->post('user_name'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT)
            );
            $register = new Users_model;
            $check_status = $register->register_user($data);
            if($check_status)
            {
                $this->session->set_flashdata('status', 'success');
                $this->session->set_flashdata('status_message', 'Registration Successful <br> Please Login');
                redirect(base_url('login'));
            }
            else 
            {
                $this->session->set_flashdata('status', 'fail');
                $this->session->set_flashdata('status_message', 'Registration Failed');
                redirect(base_url('register'));
            }
        }
    }
}

/* End of file Register_controller.php and path \application\controllers\auth\Register_controller.php */
