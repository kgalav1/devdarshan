<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Packagedetails extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("PackageDetailsModel", "model");
    }

    public function index()
    {
        $data = $this->model->getData();
        // print_r($data);die;
        
        $this->load->view('package_details/index.php', array('data' => $data));
    }
}
