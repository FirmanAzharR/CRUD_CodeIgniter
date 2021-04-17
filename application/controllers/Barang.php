<?php

class Barang extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model("Mbarang");
		$this->load->model("Mpenjualan");
	}

	function index(){
		$data["barang"]=$this->Mbarang->tampil_barang();
		$this->load->view("header");
		$this->load->view("barang",$data);
		$this->load->view("footer");
	}

	function tambah(){
		$inputan = $this->input->post();
		$this->load->library("form_validation");
		$this->form_validation->set_rules("nama","Nama Barang","required");
		$this->form_validation->set_rules("harga","Harga Barang","required");
		
		$this->form_validation->set_message("required","%s harus di isi");

		if ($this->form_validation->run() == TRUE) {
			$id = $this->Mbarang->get_id();
			if ($id!=NULL) {
				$next_id = (int) substr($id, 4, 4);
				$next_id+=1;
			}else{
				$next_id = 1;
			}
			$text = "BRG_";
			$inputan["kode"] = $text . sprintf($next_id);
			$this->Mbarang->simpan($inputan);
			redirect("barang");
		}else{
			$data["error"] = validation_errors();
		}

		$this->load->view("header");
		$this->load->view("tambahbarang",$data);
		$this->load->view("footer");
	}

	function edit($id){
		$data["barang"] = $this->Mbarang->select_barang($id);
		$inputan = $this->input->post();

		$this->load->library("form_validation");
		$this->form_validation->set_rules("nama","Nama Barang","required");
		$this->form_validation->set_rules("harga","Harga Barang","required");
		$this->form_validation->set_message("required","%s harus di isi");

		if ($this->form_validation->run() == TRUE) {
			$this->Mbarang->edit($id,$inputan);
			redirect('barang');
		}else{
			$data["error"] = validation_errors();
		}
		$this->load->view("header");
		$this->load->view("editbarang",$data);
		$this->load->view("footer");
	}

	function delete($kode){
		$this->Mpenjualan->delete_transaksi_item($kode);
		$this->Mbarang->delete_barang($kode);
	}
}

?>