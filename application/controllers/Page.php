<?php
class Page extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Model_page');
		
		if($this->session->userdata('status')!= "login"){
			redirect(base_url('login'));
		}
	}
	
	public function index(){
		$data['title'] = 'Dashboard';
		$this->load->view('header', $data);
    $this->load->view('dashboard');
    $this->load->view('footer');
	} 

	public function karyawan(){
		$data['hasil']= $this->Model_page->tampil('tbl_karyawan')->result();
		$data['title'] = 'Karyawan';
		$this->load->view('header', $data);
    $this->load->view('Karyawan');
    $this->load->view('footer');
	}

	public function cetak(){
		$data['hasil']= $this->Model_page->tampil('tbl_karyawan')->result();
		$this->load->view('cetak', $data);
	}

	public function tambah(){
		$data['title'] = 'Tambah Karyawan';
		$this->load->view('header', $data);
    $this->load->view('tambah');
    $this->load->view('footer');
	}

	
	public function tambah_proses()
	{
		$nama = $_POST['nama'];
		$asal = $_POST['asal'];
		$masuk = $_POST['masuk'];
		$keluar = $_POST['keluar'];
		$data = array(
			'nama_karyawan'=>$nama,
			'asal_instansi'=>$asal,
			'tgl_masuk'=>$masuk,
			'tgl_keluar'=>$keluar
		);
		$this->Model_page->tambah('tbl_karyawan',$data);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success solid alert-right-icon alert-dismissible fade show">
		<span><i class="mdi mdi-check"></i></span>
		<button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
		</button> Berhasil menambahkan data karyawan
		</div>'
	);
	redirect(base_url('page/karyawan'));
}


public function nilai($id){
	$where = array('id' => $id);
	$data['hasil'] = $this->Model_page->nilai($where,'tbl_karyawan')->row();
	$data['title'] = 'Nilai Karyawan';
	$this->load->view('header', $data);
	$this->load->view('nilai');
	$this->load->view('footer');
}

public function update_nilai()
	{
		$id = $_POST['id'];
		$komunikasi = $_POST['komunikasi'];
		$tanggung_jawab = $_POST['tanggung_jawab'];
		$kesopanan = $_POST['kesopanan'];
		$kedisiplinan= $_POST['kedisiplinan'];
		$kerapian= $_POST['kerapian'];

		$data = array(
			'nilai_komunikasi'=>$komunikasi,
			'nilai_tanggung_jawab'=>$tanggung_jawab,
			'nilai_kesopanan'=>$kesopanan,
			'nilai_kedisiplinan'=>$kedisiplinan,
			'nilai_kerapian'=>$kerapian
		);
	 
		$where = array(
			'id' => $id
		);
	 
		$this->Model_page->update($where,$data,'tbl_karyawan');
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success solid alert-right-icon alert-dismissible fade show">
		<span><i class="mdi mdi-check"></i></span>
		<button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
		</button> Berhasil merubah nilai karyawan
		</div>'
		);
		redirect(base_url('page/nilai/'.$id));
	}

	function hapus($id)
	{
		$where = array('id'=>$id);
		$this->Model_page->hapus('tbl_karyawan',$where);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success solid alert-right-icon alert-dismissible fade show">
		<span><i class="mdi mdi-check"></i></span>
		<button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
		</button> Berhasil menghapus data karyawan
		</div>'
		);
		redirect(base_url('page/karyawan'));
	}
}