<?php

class menu extends CI_Controller{
	public function construct(){
		parent::__construct();
		$this->load->model('m_menu');
	}
	public function index(){
		$this->load->view('input');
	}
	public function inputnama(){
		$Id = $this->input->post('id');
		$Nama = $this->input->post('nama');

		$this->m_menu->input($Id, $Nama);
		redirect('menu/viewmenu');
	}
	public function viewmenu(){
		$data = $this->m_menu->getmenu();
		$this->session->set_userdata('makanan', $data);
		$this->load->view('berandamenu');
	}
	public function transaksi(){
		$NamaMakanan = $this->input->post('namamakanan');
		$HargaMakanan = $this->input->post('hargamakanan');
		$JumlahMakanan = $this->input->post('jumlahmakanan');

		$this->m_menu->transaksi($NamaMakanan, $JumlahMakanan);
	}
}

?>