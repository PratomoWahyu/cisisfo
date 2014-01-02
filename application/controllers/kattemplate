<?php 
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Kattemplate extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			
		}
	
		public function index()
		{
			$this->load->view('header');
			$data=$this->getallkattemplate();
			$this->load->view('formkattemplate');
			$this->load->view('footer');
		}
		public function setkattemplate()
		{
			if ($this->input->post('submit')) {
				$this->load->model('modkattemplate');
				$this->modkattemplate->tambahkattemplate();
				redirect('kattemplate/index');
			}
		}
		public function getallkattemplate()
		{
			$this->load->model('modkattemplate');
			$data['hasil']=$this->modkattemplate->lihatsemuakattemplate();
			return $data;

		}
		public function getkattemplate($id)
		{
			$this->load->model('modkattemplate');
			$datan['hasiln']=$this->modkattemplate->lihatkattemplate($id);
			return $datan;

		}
		public function delkattemplate($id)
		{
			$this->load->model('modkattemplate');
			$this->modkattemplate->hapuskattemplate($id);
			redirect('kattemplate/index');
		}
		public function editkattemplate($id)
		{
			$this->load->view('header');
			$data=$this->getallkattemplate();
			$datan=$this->getkattemplate($id);
			$this->load->view('formubahkattemplatea',$datan);
			$this->load->view('formubahkattemplateb',$data);
			$this->load->view('footer');

		}
		public function seteditkattemplate($id)
		{
			$this->load->model('modkattemplate');
			$this->modkattemplate->ubahkattemplate($id);
			redirect('kattemplate/index');
		}
	}
	
	/* End of file kattemplate.php */
	/* Location: ./application/controllers/kattemplate.php */

 ?>
