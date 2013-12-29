<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Depan extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}

}

/* End of file depan.php */
/* Location: ./application/controllers/depan.php */
 ?>