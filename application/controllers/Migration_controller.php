<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Migration_controller extends CI_Controller {

    public function index()
    {
        $this->load->library('migration');

        if ($this->migration->current() === FALSE)
        {
                show_error($this->migration->error_string());
        }
        else
        {
            echo "Table Migrated Successfully.";
        }
    }
}

/* End of file Migration_controller.php and path \application\controllers\Migration_controller.php */
