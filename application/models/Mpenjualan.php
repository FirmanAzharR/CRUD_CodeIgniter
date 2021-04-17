<?php

class MPenjualan extends CI_Model
{
	function tampil_penjualan(){

		$this->db->from('penjualan');
        $this->db->join('pelanggan', 'penjualan.kode_pelanggan=pelanggan.id_pelanggan');
        $getAll=$this->db->get();
        $data = $getAll->result_array();
        return $data;
	}
	function simpan($data){
		$this->db->insert("penjualan",$data);
	}
	function get_id(){
		$this->db->select_max('id_nota');
		$res= $this->db->get('penjualan')->row_array()['id_nota'];
		return $res;
	}

	function select_penjualan($kode){
		$this->db->where("id_nota",$kode);
		$get = $this->db->get("penjualan");
		$data = $get->row_array();
		return $data;
	}


	function select_transaksi($kode_pelanggan){
		$this->db->where("kode_pelanggan",$kode_pelanggan);
		$get = $this->db->get("penjualan");
		$data = $get->result_array();
		return $data;
	}

	function edit($kode,$data){
		$this->db->where("id_nota",$kode);
		$this->db->update("penjualan",$data);
	}

	function additems($data){
		$this->db->insert("item_penjualan",$data);
	}

	function daftar_item($nota){
		// $this->db->where("nota",$nota);
		// $getAll = $this->db->get("item_penjualan");
		// $data = $getAll->result_array();
		// return $data;
		$this->db->from('item_penjualan');
        $this->db->join('barang', 'item_penjualan.kode_barang=barang.kode');
        $this->db->where('nota', $nota);
        $getAll=$this->db->get();
        $data = $getAll->result_array();
        return $data;
	}

	function delete_penjualan($nota){
		$this->db->where('id_nota', $nota);
		$this->db->delete('penjualan');
	}

	function delete_item($nota){
		$this->db->where('nota', $nota);
		$this->db->delete('item_penjualan');
	}
	
	function delete_transaksi($id){
		$this->db->where('kode_pelanggan', $id);
		$this->db->delete('penjualan');
	}

	function delete_transaksi_item($kode){
		$this->db->where('kode_barang', $kode);
		$this->db->delete('item_penjualan');
	}

	function delete_item_pelanggan($kode){
		$this->db->where('nota', $kode);
		$this->db->delete('item_penjualan');
	}
}

?>