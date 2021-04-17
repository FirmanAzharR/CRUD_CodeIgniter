<?php

class Penjualan extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model("Mpenjualan");
		$this->load->model("Mpelanggan");
		$this->load->model("Mbarang");
	}

	function index(){
		$data["penjualan"]=$this->Mpenjualan->tampil_penjualan();
		$this->load->view("header");
		$this->load->view("penjualan",$data);
		$this->load->view("footer");
	}

	function tambah(){
		$data["pelanggan"] = $this->Mpelanggan->tampil_pelanggan();
		$inputan = $this->input->post();

		$this->load->library("form_validation");
		$this->form_validation->set_rules("tgl","Tanggal","required");
		$this->form_validation->set_rules("kode_pelanggan","Pelanggan","required");
		$this->form_validation->set_message("required","%s harus di isi");

		if ($this->form_validation->run() == TRUE) {
			$id = $this->Mpenjualan->get_id();
			if ($id!=NULL) {
				$next_id = (int) substr($id, 5, 5);
				$next_id+=1;
			}else{
				$next_id = 1;
			}
			$text = "NOTA_";
			$inputan["id_nota"] = $text . sprintf($next_id);
			$this->Mpenjualan->simpan($inputan);
			redirect("penjualan");
		}else{
			$data["error"] = validation_errors();
		}

		$this->load->view("header");
		$this->load->view("tambahpenjualan",$data);
		$this->load->view("footer");
	}

	function edit($id){
		$data["penjualan"] = $this->Mpenjualan->select_penjualan($id);
		$data["pelanggan"] = $this->Mpelanggan->tampil_pelanggan();
		$inputan = $this->input->post();

		$this->load->library("form_validation");
		$this->form_validation->set_rules("tgl","Tanggal","required");
		$this->form_validation->set_rules("kode_pelanggan","Pelanggan","required");
		$this->form_validation->set_message("required","%s harus di isi");

		if ($this->form_validation->run() == TRUE) {
			$this->Mpenjualan->edit($id,$inputan);
			redirect('penjualan');
		}else{
			$data["error"] = validation_errors();
		}
		$this->load->view("header");
		$this->load->view("editpenjualan",$data);
		$this->load->view("footer");
	}

	function additem($id){
		$inputan = $this->input->post();

		$data["penjualan"]=$this->Mpenjualan->select_penjualan($id);
		// echo "<pre>";
		// print_r($data["penjualan"]);
		// echo "</pre>";
		$data["barang"]=$this->Mbarang->tampil_barang();
		$data["pelanggan"]=$this->Mpelanggan->select_pelanggan($data["penjualan"]["kode_pelanggan"]);
		$data["items"]=$this->Mpenjualan->daftar_item($data["penjualan"]["id_nota"]);		
		$this->load->library("form_validation");
		$this->form_validation->set_rules("kode_barang","Barang","required");
		$this->form_validation->set_message("required","%s harus di isi");

		if ($this->form_validation->run() == TRUE) {
			$select_barang=$this->Mbarang->select_barang($inputan['kode_barang']);
			$update["subtotal"]=$data["penjualan"]["subtotal"]+$select_barang['harga'];

			$this->Mpenjualan->additems($inputan);
			$this->Mpenjualan->edit($id,$update);
			redirect("penjualan/additem/$id");
		}else{
			$data["error"] = validation_errors();
		}

		$this->load->view("header");
		$this->load->view("additem",$data);
		$this->load->view("footer");
	}

	function delete($nota){
		$this->Mpenjualan->delete_item($nota);
		$this->Mpenjualan->delete_penjualan($nota);
		redirect('penjualan');
	}
}

?>