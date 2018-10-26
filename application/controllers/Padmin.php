<?php
class Padmin extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!isset($_SESSION['logged_in'])){
			$url=base_url('loginadmin');
			redirect($url);
		};
		$this->load->model('m_padmin');
	}
	public function index(){
		if(isset($_SESSION['logged_in'])){
			$x['kategori']=$this->m_padmin->get_all_kategori_tabel();
			$x['bagian']=$this->m_padmin->get_all_bagian();
			$x['data']=$this->m_padmin->get_all_data();
			$this->load->view('admin/header');
			$this->load->view('admin/topbar');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/index',$x);
			$this->load->view('admin/footer');
		}
	}

	public function detail(){
		if(isset($_SESSION['logged_in'])){
			$kode=$this->uri->segment(3);
			$x['data']=$this->m_padmin->get_data_by_kode($kode);
			$sum6=$this->m_padmin->sum_data6($kode);
			$sum7=$this->m_padmin->sum_data7($kode);
			$sum8=$this->m_padmin->sum_data8($kode);
			$x['xtab2']=$sum6['temsum6']+$sum7['temsum7']+$sum8['temsum8'];
			$sum9=$this->m_padmin->sum_data9($kode);
			$sum10=$this->m_padmin->sum_data10($kode);
			$sum11=$this->m_padmin->sum_data11($kode);
			$x['xtab3']=$sum9['temsum9']+$sum10['temsum10']+$sum11['temsum11'];
			$this->load->view('admin/header');
			$this->load->view('admin/topbar');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/data/detail',$x);
			$this->load->view('admin/footer');
		}
	}

	public function grehabilitasi(){
		if(isset($_SESSION['logged_in'])){
			$x['kategori']=$this->m_padmin->get_all_kategori_tabel();
			$x['bagian']=$this->m_padmin->get_all_bagian();
			$this->load->view('admin/header');
			$this->load->view('admin/topbar');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/data/grehabilitasi',$x);
			$this->load->view('admin/footer');
		}
	}

	public function greklamasi(){
		if(isset($_SESSION['logged_in'])){
			$tabel='tabel2';
			$x['katpenilaian']=$this->m_padmin->get_all_katpenilaian_tabel($tabel);
			$this->load->view('admin/header');
			$this->load->view('admin/topbar');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/data/greklamasi',$x);
			$this->load->view('admin/footer');
		}
	}

	
	public function gproduksi(){
		if(isset($_SESSION['logged_in'])){
			$tabel='tabel3';
			$x['katpenilaian']=$this->m_padmin->get_all_katpenilaian_tabel($tabel);
			$this->load->view('admin/header');
			$this->load->view('admin/topbar');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/data/gproduksi',$x);
			$this->load->view('admin/footer');
		}
	}
	
	public function formdata(){
		if(isset($_SESSION['logged_in'])){

			$tabel='tabel2';
			$x['katpenilaian']=$this->m_padmin->get_all_katpenilaian_tabel($tabel);
			$tabel='tabel3';
			$x['katpenilaian1']=$this->m_padmin->get_all_katpenilaian_tabel($tabel);
			$x['kategori']=$this->m_padmin->get_all_kategori_tabel();
			$x['bagian']=$this->m_padmin->get_all_bagian();
			$this->load->view('admin/header');
			$this->load->view('admin/topbar');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/data/formdata',$x);
			$this->load->view('admin/footer');
		}
	}
	function save_data(){

		$namper=$this->input->post('namper');
		$alper=$this->input->post('alper');
		$tel=$this->input->post('tel');
		$fax=$this->input->post('fax');
		$bidang=$this->input->post('bidang');
		$pj=$this->input->post('pj');
		$jabatan=$this->input->post('jabatan');
		$inputAddress=$this->input->post('inputAddress');
		$latitude=$this->input->post('latitude');
		$longitude=$this->input->post('longitude');
		$selch=$this->input->post('selch');
		$pbdevisi=$this->input->post('pbdevisi');
		$kateg=$this->input->post('kateg');
		$kategg=$this->input->post('kategg');

		$ck="KDR";
		$tgl=date('dmy');
		$cc=$this->m_padmin->get_all_hasil()->num_rows();	
		$glokid=$this->m_padmin->last_lokid();	
		$gperid=$this->m_padmin->last_perid();
		$rand=rand(0,999);
		$rand2=rand(0,10);
		$kode=$ck.$rand.$tgl.$cc.$rand2;
		foreach ($selch as $selchs=>$value) {
			$ct4=count($selch);
		}

		$hasil_sech=($ct4/24)*100;
		$hlokid=$glokid['lokasi_id']+1;
		$hperid=$gperid['perusahaan_id']+1;
		
		$per=$this->m_padmin->save_perusahaan($hperid,$namper,$alper,$tel,$fax,$bidang,$pj,$jabatan);
		if($per){
			$lok=$this->m_padmin->save_lokasi($hlokid,$inputAddress,$latitude,$longitude);
			if($lok){
				$hsl=$this->m_padmin->save_hasil($kode,$hperid,$hlokid,$hasil_sech);
				if($hsl){

					foreach ($kateg as $kategs=>$value) {
						list($data_v ,$kat_id) = explode("/", $value);
						$ss=$rr=$this->m_padmin->save_temp($kode,$kat_id,$data_v);
					}	
					if($ss){
						foreach ($kategg as $kateggs=>$value) {
							list($data_v ,$kat_id) = explode("/", $value);
							$rr=$this->m_padmin->save_temp($kode,$kat_id,$data_v);
						}
						if($rr){
							echo $this->session->set_flashdata('msg','<div class="alert bg-success alert-icon-left alert-dismissible mb-2" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
								<strong>Sukses!</strong> Data berhasil ditambahkan</div>');
							redirect();

						}
						else {
							echo $this->session->set_flashdata('msg','<div class="alert bg-danger alert-icon-left alert-dismissible mb-2" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
								<strong>Error !</strong> Data gagal ditambah.
								</div>');
							redirect();	
						}
					}
				}
			}
		}
	}
}		