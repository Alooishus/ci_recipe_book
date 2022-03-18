<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Category_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('categories_model');
    }
    public function index()
    {
        $data = $this->input->post(); 
        $check = $this->validate_category($data);
        if($check['status'] == 'fail')
        {
            echo json_encode($check);
        }
        else
        {
            $check['insert_id'] = $this->add_category($data);
            echo json_encode($check);     
        }
    }

    public function validate_category($data)
    {
        $categories = new Categories_model;
        $result = $categories->get_all();
        $validation = [];
        foreach($result as $r)
        {
            if(trim(strtolower($data['category_name'])) === strtolower($r['category_name']))
            {
                $validation['status'] = 'fail';
                $validation['msg'] = 'A category named '. $data['category_name'] . ' already exists.';
                return $validation;
                exit();
            }
            else
            {
                $validation['status'] = 'success';
                $validation['msg'] = $data['category_name'] . ' added to the database!';
                $validation['category_name'] = $data['category_name'];
            }
        }
        return $validation;

    }

    public function add_category($data)
    {
        $category = new Categories_model;
        return $category->category_insert($data);

    }
}

/* End of file Category_controller.php and path \application\controllers\Category_controller.php */
