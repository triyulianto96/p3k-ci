<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('M_Mahasiswa');
    }

    public function index()
    {
        $queryAllMahasiswa = $this->M_Mahasiswa->getDataMahasiswa();
        $DATA = array('queryAllMhs' => $queryAllMahasiswa);
        $this->load->view('home', $DATA);
    }

    public function halaman_tambah() 
    {
        $this->load->view('halaman_tambah_mhs');
    }

    public function fungsiTambah()
    {
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $jurusan = $this->input->post('jurusan');

        $ArrInsert = array(
            'nim' => $nim,
            'nama' => $nama,
            'jurusan' => $jurusan
        );

        $this->M_Mahasiswa->insertDataMahasiswa($ArrInsert);
        redirect(base_url(''));

    }
	public function halaman_edit($nim)
{
		$queryMahasiswaDetail = $this->M_Mahasiswa->getDataMahasiswaDetail($nim);
		$DATA = array('queryMhsDetail' => $queryMahasiswaDetail);
		$this->load->view('halaman_edit_mhs', $DATA);
	}
	public function fungsiEdit()
	{
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$jurusan = $this->input->post('jurusan');
		$ArrUpdate = array(
			'nama' => $nama,
			'jurusan' => $jurusan
		);
		$this->M_Mahasiswa->updateDataMahasiswa($nim, $ArrUpdate);
		redirect(base_url(''));
	}
	public function fungsiDelete($nim)
	{
		$this->M_Mahasiswa->deleteDataMahasiswa($nim);
		redirect(base_url(''));
	}
}
