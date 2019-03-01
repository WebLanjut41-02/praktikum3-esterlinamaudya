<?php

class m_menu extends CI_Model{
	function input($Id, $Nama){
		$data = array(
		'id'=>$Id, 'nama'=>$Nama
		);
		$this->db->insert('pemesan',$data);
	}
	function getMakanan(){
		$this->db->select('*');
		$this->db->from('makanan');
		$query = $this->db->get();
		return $query->result();
	}
	function transaksi($NamaMakanan, $JumlahMakanan){
		$data = array(
		'namamakanan'=>$NamaMakanan, 'jumlahmakanan'=>$JumlahMakanan
		);
		$this->db->insert('transaksi',$data);
	}
}

?>