<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {
    public function __construct(){
        parent::__construct();
        //Do your magic here
    }
    public function index()
    {
        $data['the_view_content'] = 'homepage_view';
        $this->load->view('templates/master_view', $data);
    }

}

/* End of file Homepage.php */
/* Location: ./application/controllers/Homepage.php */