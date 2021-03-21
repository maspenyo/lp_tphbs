<?php
class Main extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('M_Wilayah');

	}

    function index(){
    	$data['hasil'] = $this->M_Wilayah->kabupaten();
    	$data['title'] = "Ujian Susulan";
        //$this->template->load_admin('main2','pilih_kota_kab',$data);
        $this->template->load_admin('main2','pilih_start2',$data);
    }

    function sekolah(){
    	$id = $this->uri->segment(3);
    	$data['hasil'] = $this->M_Wilayah->sekolah($id);
    	$data['kabupaten'] = $this->M_Wilayah->detail_kabupaten($id);
    	$data['title'] = "Pilih Sekolah";
    	$this->template->load_admin('main2','pilih_sekolah_cb',$data);
    }

    function start(){
    	$id = $this->uri->segment(3);
    	$data['hasil'] = $this->M_Wilayah->detail_sekolah($id);
    	$data['title'] = "Sekolah";
    	$this->template->load_admin('main2','pilih_start',$data);
    }

    function mulai(){
    	$id = $this->input->post("sekolah");
    	if($id == 0){
    		redirect('main');
    	}
    	//echo $id;
    	$data['hasil'] = $this->M_Wilayah->detail_sekolah($id);
    	$data['title'] = "Sekolah";
    	$this->template->load_admin('main2','pilih_start',$data);
    }

    function get_sekolah(){
    	$id_kabupaten = $this->input->post('kabupaten');
    	$data = $this->M_Wilayah->Sekolah($id_kabupaten);
    	echo json_encode($data);
    }
}