<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_padmin extends CI_Model{


	function cekadminlogin($user_username,$user_password){
		$hasil=$this->db->query("SELECT * FROM user WHERE user_username='$user_username' AND user_password=md5('$user_password')");
		return $hasil;
	}
	function get_all_kategori(){
		$hasil=$this->db->query("SELECT * FROM kategori");
		return $hasil;
	}
	function get_all_kategori_tabel(){
		$hasil=$this->db->query("SELECT * FROM kategori where kategori_ref='tabel4'");
		return $hasil;
	}
	function get_all_bagian(){
		$hasil=$this->db->query("SELECT * FROM bagian");
		return $hasil;
	}
	function get_all_katpenilaian_tabel($tabel){
		$hasil=$this->db->query("SELECT * FROM kategori where kategori_ref='$tabel'");
		return $hasil;
	}
	function get_subbag_by_bagian($bagian_id){
		$hasil=$this->db->query("SELECT * FROM subbag where bagian_id='$bagian_id'");
		return $hasil;
	}
	function get_all_penilaian_by_katid($kategori_id){
		$hasil=$this->db->query("SELECT * FROM penilaian where kategori_id='$kategori_id'");
		return $hasil;
	}
	function get_sub_penilaian($penilaian_id){
		$hasil=$this->db->query("SELECT * from sub_penilaian where penilaian_id='$penilaian_id'");
		return $hasil;
	}
	function get_sum_bot($kategori_id){
		$hasil=$this->db->query("SELECT penilaian.kategori_id,  sum(penilaian.penilaian_bobot) as sumpenbot,sum(sub_penilaian.subp_bobot) as sumsubot FROM penilaian left join sub_penilaian on penilaian.penilaian_id=sub_penilaian.penilaian_id where penilaian.kategori_id='$kategori_id' group by penilaian.kategori_id");
		return $hasil;
	}
	function get_selection_by_subbag($subbag_id,$kategori_id){
		$hasil=$this->db->query("SELECT * FROM selection where kategori_id='$kategori_id' && subbag_id='$subbag_id'");
		return $hasil;
	}

	function tes_select($bagian_id){
		$hasil=$this->db->query("select * from bagian inner join subbag on bagian.bagian_id=subbag.bagian_id left join selection on subbag.subbag_id=selection.subbag_id where bagian.bagian_id='1' order by subbag.subbag_id");
		return $hasil;
	}

	function count_bag($bagian_id){
		$hasil=$this->db->query("SELECT count(bagian_id) as cbag,bagian_id from subbag where bagian_id='$bagian_id' group by bagian_id");
		return $hasil;
	}

	function save_temp($kode,$kat_id,$data_v){
		$hasil=$this->db->query("INSERT INTO temp VALUES(null,'$kode','$kat_id','$data_v')");
		return $hasil;
	}

	function get_all_hasil(){
		$hasil=$this->db->query("SELECT * FROM hasil");
		return $hasil;
	}

	function save_perusahaan($hperid,$namper,$alper,$tel,$fax,$bidang,$pj,$jabatan){
		$hasil=$this->db->query("INSERT INTO perusahaan VALUES('$hperid','$namper','$alper','$tel','$fax','$bidang','$pj','$jabatan')");
		return $hasil;
	}

	function save_lokasi($hlokid,$inputAddress,$latitude,$longitude){
		$hasil=$this->db->query("INSERT INTO lokasi VALUES('$hlokid','$inputAddress','$latitude','$longitude')");
		return $hasil;
	}

	function last_perid(){
		$hasil=$this->db->query("SELECT max(perusahaan_id) as perusahaan_id FROM perusahaan");
		return $hasil->row_array();
	}
	function last_lokid(){
		$hasil=$this->db->query("SELECT max(lokasi_id) as lokasi_id FROM lokasi");
		return $hasil->row_array();
	}
	function save_hasil($kode,$hperid,$hlokid,$hasil_sech){
		$hasil=$this->db->query("INSERT INTO hasil VALUES('$kode','$hperid','$hlokid','$hasil_sech')");
		return $hasil;
	}

	function get_all_data(){
		$hasil=$this->db->query("SELECT * FROM hasil inner join perusahaan on hasil.perusahaan_id=perusahaan.perusahaan_id inner join lokasi on hasil.lokasi_id=lokasi.lokasi_id");
		return $hasil;
	}
	function get_data_by_kode($kode){
		$hasil=$this->db->query("SELECT * FROM hasil inner join perusahaan on hasil.perusahaan_id=perusahaan.perusahaan_id inner join lokasi on hasil.lokasi_id=lokasi.lokasi_id where hasil.hasil_kode='$kode'");
		return $hasil;
	}
	function get_all_temp_by_kode($kode){
		$hasil=$this->db->query("SELECT * FROM temp inner join kategori on temp.temp_kat=kategori.kategori_id where temp_kode='$kode' group by temp.temp_kat");
		return $hasil;
	}

	function sum_data($hasil_kode,$temkat){
		$hasil=$this->db->query("SELECT sum(tem_value) as temsum from temp WHERE temp_kode='$hasil_kode' and temp_kat='$temkat'");
		return $hasil;
	}
	function sum_data6($kode){
		$hasil=$this->db->query("SELECT sum(tem_value) as temsum6 from temp WHERE temp_kode='$kode' and temp_kat='6'");
		return $hasil->row_array();
	}
	function sum_data7($kode){
		$hasil=$this->db->query("SELECT sum(tem_value) as temsum7 from temp WHERE temp_kode='$kode' and temp_kat='7'");
		return $hasil->row_array();
	}
	function sum_data8($kode){
		$hasil=$this->db->query("SELECT sum(tem_value) as temsum8 from temp WHERE temp_kode='$kode' and temp_kat='8'");
		return $hasil->row_array();
	}
	function sum_data9($kode){
		$hasil=$this->db->query("SELECT sum(tem_value) as temsum9 from temp WHERE temp_kode='$kode' and temp_kat='9'");
		return $hasil->row_array();
	}
	function sum_data10($kode){
		$hasil=$this->db->query("SELECT sum(tem_value) as temsum10 from temp WHERE temp_kode='$kode' and temp_kat='10'");
		return $hasil->row_array();
	}
	function sum_data11($kode){
		$hasil=$this->db->query("SELECT sum(tem_value) as temsum11 from temp WHERE temp_kode='$kode' and temp_kat='11'");
		return $hasil->row_array();
	}
}