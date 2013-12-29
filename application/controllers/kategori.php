<?php 
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Kategori extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			
		}
	
		public function index()
		{
			$this->load->view('header');
			$data=$this->getallkategori();
			$this->load->view('formtambah',$data);
			$this->load->view('footer');
		}

		public function setkategori()
		{
			if ($this->input->post('submit')) {
				$this->load->model('modkategori');
				$this->modkategori->tambahkategori();
				redirect('kategori/index');
			}
		}

		public function getallkategori()
		{
			$this->load->model('modkategori');
			$data['hasil']=$this->modkategori->lihatsemuakategori();
			return $data;

		}
		public function getkategori($id)
		{
			$this->load->model('modkategori');
			$datan['hasiln']=$this->modkategori->lihatkategori($id);
			return $datan;

		}
		public function delkategori($id)
		{
			$this->load->model('modkategori');
			$this->modkategori->hapuskategori($id);
			redirect('kategori/index');
		}
		public function editkategori($id)
		{
			$this->load->view('header');
			$data=$this->getallkategori();
			$datan=$this->getkategori($id);
			$this->load->view('formubaha',$datan);
			$this->load->view('formubahb',$data);
			$this->load->view('footer');

		}
		public function seteditkategori($id)
		{
			$this->load->model('modkategori');
			$this->modkategori->ubahkategori($id);
			redirect('kategori/index');
		}
	
	}
	
	/* End of file kategori.php */
	/* Location: ./application/controllers/kategori.php */
 ?>