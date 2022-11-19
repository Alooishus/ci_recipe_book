<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Insert_api extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('recipes_model');
    }
    public function index()
    {
                
    }

    public function create()
    {
        $recipe = new Recipes_model;
        $hours = $this->input->post('hours');
        $minutes = $this->input->post('minutes');
        $recipe_data = [
            'title' => $this->input->post('recipe_name'),
            'difficulty' => $this->input->post('difficulty'),
            'total_time' => $hours.$minutes,
            'description' => $this->input->post('description'),
            'user_id' => $this->session->user_id
        ];
        $recipe_id = $recipe->insert_recipe($recipe_data);
        $categories = $this->input->post('category');
        foreach($categories as $category){
            $category_data = [
                'recipe_id' => $recipe_id,
                'category_id' => $category
            ];
            $recipe->insert_category($category_data);
        }

        /* $result = 'fail';
        if(isset($_FILES['thumbnail-image']['name']))
        {
            //$config['file_name']            = $_FILES['thumbnail-image']['name'];
            $config['upload_path']          = '././uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            //$config['max_size']             = 10000;
            //$config['max_width']            = 1024;
            //$config['max_height']           = 768;

            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('thumbnail-image'))
            {
                // no image selected to insert image-line of placeholder
                $image_line_data = [
                    'recipe_id' => $recipe_id,
                    'image_id' => 1,
                ];
                $this->db->insert('images_line', $image_line_data);
            }
            else
            {
                $data = array('upload_data' => $this->upload->data());
                $image_data = [
                    'image_path' => $data['upload_data']['full_path'] 
                ];

                $image_id = $recipe->insert_image($image_data);
                $image_line_data = [
                    'recipe_id' => $recipe_id,
                    'image_id' => $image_id,
                ];
                $this->db->insert('images_line', $image_line_data);
                // $result = 'success';
                // $this->load->view('upload_success', $data);
            }
        } */
        
        


    }
}

/* End of file Insert_api.php and path \application\controllers\api\Insert_api.php */
