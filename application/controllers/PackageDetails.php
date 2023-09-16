<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PackageDetails extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("PackageDetailsModel", "model");
    }

    public function index()
    {
        $this->load->view('package_details/index.php');
    }
}
