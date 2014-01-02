<?php 
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Modkattemplate extends CI_Controller {
	
	public function tambahkattemplate()
	{
		$kattemplate = $this->input->post('nmkattemplate');
		$data = array('katTemplate' => $kattemplate);
		$this->db->insert('kattemplate', $data);
	}
	public function lihatsemuakattemplate()
	{
		
			$diambil = $this->db->get('kattemplate');
			if ($diambil->num_rows()>0) {
		 	foreach ($diambil->result() as $data) {
		 		$hasil[]=$data;
		 	 }
		 	return $hasil;
		 	
			}
	}
	public function lihatkattemplate($id)
	{
		$diambil = $this->db->get_where('kattemplate',array('idKatTemplate' => $id));

			if ($diambil->num_rows()>0) {
		 	foreach ($diambil->result() as $data) {
		 		$hasiln[]=$data;
		 	 }
		 	return $hasiln;
		 	
			}
	}
	public function hapuskattemplate($idkattemplate)
	{
		$this->db->delete('kattemplate',array('idKatTemplate' => $idkattemplate));

	}
	public function ubahkattemplate($id)
	{
		$kategori=$this->input->post('nmkattemplteu');
		$data=array('katTemplate' => $kategori);
		$this->db->where('idKatTemplate',$id);
		$this->db->update('kattemplate',$data);
	}

	}
	
	/* End of file modkattemplate.php */
	/* Location: ./application/models/modkattemplate.php */

 ?>
