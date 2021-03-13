<?php
class M_Wilayah extends CI_Model{
	function kabupaten()
	{
		$this->db->order_by('id_kabupaten','ASC');
		return $this->db->from('kabupaten')->get()->result();
	}

	function detail_kabupaten($id)
	{
		$query = $this->db->query("select * from kabupaten where id_kabupaten = '$id'")->result();
		return $query;
	}

	function sekolah($id_kabupaten)
	{
		$this->db->where('id_kabupaten',$id_kabupaten);
		$this->db->order_by('id_sekolah','ASC');
		return $this->db->from('sekolah')->get()->result();
	}

	function detail_sekolah($id){
		/*$this->db->where('id_sekolah',$id);
		return $this->db->get('sekolah')->result();*/

		$query = $this->db->query("select * from sekolah, server where sekolah.id_server = server.id_server and sekolah.id_sekolah = '$id'")->result();
		return $query;

	}
}