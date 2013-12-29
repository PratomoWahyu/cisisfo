<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modkategori extends CI_Model {

	public function tambahkategori()
	{
		$kategori = $this->input->post('nmkategori');
		$data = array('namaKategori' => $kategori);
		$this->db->insert('kategori', $data);
	}
	public function lihatsemuakategori()
	{
		
			$diambil = $this->db->get('kategori');
			if ($diambil->num_rows()>0) {
		 	foreach ($diambil->result() as $data) {
		 		$hasil[]=$data;
		 	 }
		 	return $hasil;
		 	
			}
	}
	public function lihatkategori($id)
	{
		$diambil = $this->db->get_where('kategori',array('idKategori' => $id));

			if ($diambil->num_rows()>0) {
		 	foreach ($diambil->result() as $data) {
		 		$hasiln[]=$data;
		 	 }
		 	return $hasiln;
		 	
			}
	}
	public function hapuskategori($idkategori)
	{
		$this->db->delete('kategori',array('idKategori' => $idkategori));

	}
	public function ubahkategori($id)
	{
		$kategori=$this->input->post('nmkategoriu');
		$data=array('namaKategori' => $kategori);
		$this->db->where('idKategori',$id);
		$this->db->update('kategori',$data);
	}
}

/* End of file modkategori.php */
/* Location: ./application/models/modkategori.php */

 ?>