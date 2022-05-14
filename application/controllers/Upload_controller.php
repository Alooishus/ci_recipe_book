<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Upload_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }
    public function index()
    {
        $this->load->view('upload_form', array('error' => ' ' ));
    }

    public function ajax_upload()
    {
        sleep(3);
        if($_FILES["files"]["name"] != '')
        {
            $output = '';
            $config["upload_path"] = './uploads/';
            $config["allowed_types"] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            for($count = 0; $count<count($_FILES["files"]["name"]); $count++)
            {
                $_FILES["file"]["name"] = $_FILES["files"]["name"][$count];
                $_FILES["file"]["type"] = $_FILES["files"]["type"][$count];
                $_FILES["file"]["tmp_name"] = $_FILES["files"]["tmp_name"][$count];
                $_FILES["file"]["error"] = $_FILES["files"]["error"][$count];
                $_FILES["file"]["size"] = $_FILES["files"]["size"][$count];
                if($this->upload->do_upload('file'))
                {
                    $data = $this->upload->data();
                    $output .= '
                    <div class="col-lg-2" id="'.($count+1).'">
                        <img src="'.base_url().'uploads/'.$data["file_name"].'" class="img-responsive img-thumbnail" style="width:auto; max-height:100px;" />
                        <p class="font-weight-bold font-italic">figure: '.($count+1).'</p>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="thumbnail'.($count+1).'" name="thumbnail-radio" class="custom-control-input">
                            <label class="custom-control-label" for="thumbnail'.($count+1).'"><small>Make Thumbnail</small></label>
                        </div>
                    </div>
                    ';  
                }
            }
            echo $output;   
        }
    }
}

/* End of file Upload_controller.php and path \application\controllers\Upload_controller.php */
