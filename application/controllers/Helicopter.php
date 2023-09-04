<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Helicopter extends CI_Controller {

	public function index()
	{
		$this->load->view('helicopter/index.php');
	}
}
