<?php

class Pelanggan extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model("Mpelanggan");
		$this->load->model("Mpenjualan");
	}

	function index(){
		$data["pelanggan"]=$this->Mpelanggan->tampil_pelanggan();
		$this->load->view("header");
		$this->load->view("pelanggan",$data);
		$this->load->view("footer");
	}

	function tambah(){
		$inputan = $this->input->post();
		$this->load->library("form_validation");
		$this->form_validation->set_rules("nama","Nama Pelanggan","required");
		$this->form_validation->set_rules("domisili","Domisili","required");
		
		$this->form_validation->set_message("required","%s harus di isi");

		if ($this->form_validation->run() == TRUE) {
			$id = $this->Mpelanggan->get_id();
			$next_id = (int) substr($id, 10, 10);
			$next_id+=1;
			$text = "PELANGGAN_";
			$inputan["id_pelanggan"] = $text . sprintf($next_id);
			$this->Mpelanggan->simpan($inputan);
			redirect("pelanggan");
		}else{
			$data["error"] = validation_errors();
		}

		$this->load->view("header");
		$this->load->view("tambahpelanggan",$data);
		$this->load->view("footer");
	}

	function edit($id){
		$data["pelanggan"] = $this->Mpelanggan->select_pelanggan($id);
		$inputan = $this->input->post();

		$this->load->library("form_validation");
		$this->form_validation->set_rules("nama","Nama Pelanggan","required");
		$this->form_validation->set_rules("domisili","Domisili","required");
		$this->form_validation->set_message("required","%s harus di isi");

		if ($this->form_validation->run() == TRUE) {
			$this->Mpelanggan->edit($id,$inputan);
			redirect('pelanggan');
		}else{
			$data["error"] = validation_errors();
		}
		$this->load->view("header");
		$this->load->view("editpelanggan",$data);
		$this->load->view("footer");
	}

	function delete($id){
		$data =  $this->Mpenjualan->select_transaksi($id);
 		foreach ($data as $key => $value) {
 			$this->Mpenjualan->delete_item_pelanggan($value['id_nota']);
 		}
		$this->Mpenjualan->delete_transaksi($id);
		$this->Mpelanggan->delete_pelanggan($id);
		redirect('pelanggan');
	}
}

?>