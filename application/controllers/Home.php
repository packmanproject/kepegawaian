<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	function __construct(){
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
        $this->load->helper('html');
     }


//===============================================HOME dan LOGIN ======================

	function index()
	{
		$this->load->view('v_home');
	}


	function login()
	{

	}

//===============================================VIEW SEMUA  DATA======================

	function viewdata()
	{

		$this->load->model('m_data');
		$data['row']=$this->m_data->jmlbaris();
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('admin/v_listpegawai',$data);
	}

//===============================================Tambah DATA======================

	function tambahdata()
	{
		$data['jurusan']=$this->db->query("select id_fakultas, nama_fakultas from fakultas")->result();
		$this->load->view('admin/v_inputpegawai',$data);	
	}


	function tambah_aksi()
	{


		$this->load->library('form_validation');
		$this->load->model('m_data');
		$this->form_validation->set_rules('nip', 'nip', 'trim|required|min_length[2]|xss_clean');


		$file_tmp=$_FILES['image']['tmp_name'];
		$file_type=$_FILES['image']['type'];

		$file_error=$_FILES['image']['error'];
		$file_size=$_FILES['image']['size'];
		$nip = $this->input->post('nip');

		$file_path="assets/images/".$_POST['nip'].".jpg";

		$nama = $this->input->post('nama_lengkap');
		//$nama_fakultas = $this->input->post('nama_fakultas');
		$golongan = $this->input->post('golongan_pangkat');
		$tmt_pangkat= $this->input->post('tmt_pangkat');
		$nama_jabatan= $this->input->post('nama_jabatan');
		$tmt_jabatan= $this->input->post('tmt_jabatan');
		$tmpt_didik= $this->input->post('tmpt_didik');
		$thn_lulus= $this->input->post('thn_lulus');
		$ijazah= $this->input->post('ijazah');
		$tgl_lahir= $this->input->post('tgl_lahir');
		$tmt_pensiun= $this->input->post('tmt_pensiun');

		$image=$file_path;
		
		$data = array(
			'nip' => $nip,
			'nama_lengkap' => $nama,
			//'nama_fakultas'=>$nama_fakultas,
			'golongan_pangkat' => $golongan,
			'tmt_pangkat'=>$tmt_pangkat,
			'nama_jabatan'=>$nama_jabatan,
			'tmt_jabatan'=>$tmt_jabatan,
			'tmpt_didik'=>$tmpt_didik,
			'thn_lulus'=>$thn_lulus,
			'ijazah'=>$ijazah,
			'tgl_lahir'=>$tgl_lahir,
			'tmt_pensiun'=>$tmt_pensiun,

			'image' => $image
		);

				
		if($file_type=='image/jpeg'){
			if($file_size>0 AND file_error==0){
					 move_uploaded_file($file_tmp, "assets/images/".$_POST['nip'].".jpg");
			}
		}  

		$this->m_data->input_data($data,'biodata_pegawai');
		
		
		redirect('home/viewdata');
		
		
	}

//===============================================EDIT DATA======================


	function editdata($nip)
	{
		$where = array('nip' => $nip);
		$data['user'] = $this->m_data->edit_data($where,'biodata_pegawai')->result();
		$this->load->view('admin/v_editpegawai',$data);
	}


	function updatedata(){
		$nip = $this->input->post('nip');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$golongan_pangkat = $this->input->post('golongan_pangkat');
		
	 
		$data = array(
			'nip' => $nip,
			'nama_lengkap' => $nama_lengkap,
			'golongan_pangkat' => $golongan_pangkat
		);
	 
		$where = array(
			'nip' => $nip
		);
	 
		$this->m_data->update_data($where,$data,'biodata_pegawai');
		redirect('home/viewdata');
	}

//===============================================HAPUS DATA======================

	function hapusdata($nip)
	{
		$where = array('nip' => $nip);
		$this->m_data->hapus_data($where,'biodata_pegawai');
		redirect('home/viewdata');
	}

	

//==============================================DETAIL DATA=============

	function detaildata($nip)
	{
		// 		keluarga.nama_istri == NULL
		$data['user']=$this->db->query("SELECT biodata_pegawai.nip, biodata_pegawai.nama_lengkap, biodata_pegawai.golongan_pangkat,biodata_pegawai.tmt_pangkat,biodata_pegawai.nama_jabatan, biodata_pegawai.tmt_jabatan,
			biodata_pegawai.tmpt_didik,biodata_pegawai.thn_lulus,biodata_pegawai.ijazah,biodata_pegawai.tgl_lahir,
			biodata_pegawai.tmt_pensiun,biodata_pegawai.image, 
			keluarga.nama_istri,keluarga.jml_anak,keluarga.alamat From biodata_pegawai left join keluarga on biodata_pegawai.nip=keluarga.nip where biodata_pegawai.nip=$nip OR keluarga.nama_istri=NULL")->result();
		//print_r ($data); 
		//$data['user']=$this->db->query("SELECT * from biodata_pegawai left join keluarga on biodata_pegawai.nip=keluarga.nip where biodata_pegawai.nip=$nip OR keluarga.nama_istri=NULL")->result();
		$this->load->view('admin/v_detailpegawai',$data);
		
	}


//=============================================SEARCH DATA========================

	function search(){

		$filter = $this->input->post('filter');
        $field  = $this->input->post('field');
        $search = $this->input->post('search');

        if (isset($filter) && !empty($search)) {
            $this->load->model('m_data');
            $data['user'] = $this->m_data->getStudentsWhereLike($field, $search);
        } else {
            $this->load->model('m_data');
            $data['user'] = $this->m_data->getStudents();
        }

        $this->load->view('admin/v_listpegawai',$data);

        

	}

	

#===========================================================================
	function tambahdatakeluarga($nip){

	$where = array('nip' => $nip);
		#print_r($data['jurusan']);
	$data['user']=$this->db->query("SELECT biodata_pegawai.nip, biodata_pegawai.nama_lengkap, biodata_pegawai.golongan_pangkat,nama_istri, jml_anak,alamat From biodata_pegawai left join keluarga on biodata_pegawai.nip=keluarga.nip where biodata_pegawai.nip=$nip OR keluarga.nama_istri=NULL")->result();
	//print_r($data['user']);
	$this->load->view('admin/v_editpegawaikeluarga',$data);
	}


	function updatedatakeluarga(){
		$nip = $this->input->post('nip');
		$nama_istri = $_POST['nama_istri'];
		$jml_anak = $_POST['jml_anak'];
		$alamat = $_POST['alamat'];

		$check['nip']=$this->db->query("select nip from keluarga where nip=$nip")->num_rows();
		//print_r($check);
		
		if($check['nip']==0){
			$data = array(
				'nip' => $nip,
				'nama_istri' => $nama_istri,
				'jml_anak' => $jml_anak,
				'alamat' => $alamat
				);
			$this->m_data->input_data($data,'keluarga');
		}
		else{
			$data = array(
				'nip' => $nip,
				'nama_istri' => $nama_istri,
				'jml_anak' => $jml_anak,
				'alamat' => $alamat
				);
		 
			$where = array('nip' => $nip);
		 
			$this->m_data->update_data($where,$data,'keluarga');
		}
		


				
		redirect('home/viewdata');
	}


	function view_detail_keluarga($nip){
		$data['user']=$this->db->query("SELECT biodata_pegawai.nip, biodata_pegawai.nama_lengkap, biodata_pegawai.golongan_pangkat,biodata_pegawai.tmt_pangkat,biodata_pegawai.nama_jabatan, biodata_pegawai.tmt_jabatan,
			biodata_pegawai.tmpt_didik,biodata_pegawai.thn_lulus,biodata_pegawai.ijazah,biodata_pegawai.tgl_lahir,
			biodata_pegawai.tmt_pensiun,biodata_pegawai.image, 
			keluarga.nama_istri,keluarga.jml_anak,keluarga.alamat From biodata_pegawai left join keluarga on biodata_pegawai.nip=keluarga.nip where biodata_pegawai.nip=$nip OR keluarga.nama_istri=NULL")->result();
		$this->load->view('admin/v_detail_keluarga',$data);

	}

	function view_detail_pendidikan($nip){
		$data['user']=$this->db->query("SELECT biodata_pegawai.nip, biodata_pegawai.nama_lengkap, biodata_pegawai.golongan_pangkat,biodata_pegawai.tmt_pangkat,biodata_pegawai.nama_jabatan, biodata_pegawai.tmt_jabatan,
			biodata_pegawai.tmpt_didik,biodata_pegawai.thn_lulus,biodata_pegawai.ijazah,biodata_pegawai.tgl_lahir,
			biodata_pegawai.tmt_pensiun,biodata_pegawai.image, 
			keluarga.nama_istri,keluarga.jml_anak,keluarga.alamat From biodata_pegawai left join keluarga on biodata_pegawai.nip=keluarga.nip where biodata_pegawai.nip=$nip OR keluarga.nama_istri=NULL")->result();
		$this->load->view('admin/v_detail_pendidikan',$data);
	}

	function view_detail_pekerjaan($nip){
		$data['user']=$this->db->query("SELECT biodata_pegawai.nip, biodata_pegawai.nama_lengkap, biodata_pegawai.golongan_pangkat,biodata_pegawai.tmt_pangkat,biodata_pegawai.nama_jabatan, biodata_pegawai.tmt_jabatan,
			biodata_pegawai.tmpt_didik,biodata_pegawai.thn_lulus,biodata_pegawai.ijazah,biodata_pegawai.tgl_lahir,
			biodata_pegawai.tmt_pensiun,biodata_pegawai.image, 
			keluarga.nama_istri,keluarga.jml_anak,keluarga.alamat From biodata_pegawai left join keluarga on biodata_pegawai.nip=keluarga.nip where biodata_pegawai.nip=$nip OR keluarga.nama_istri=NULL")->result();
		$this->load->view('admin/v_detail_pekerjaan',$data);
	}


	function view_detail_penelitian($nip){
		$data['user']=$this->db->query("SELECT biodata_pegawai.nip, biodata_pegawai.nama_lengkap, biodata_pegawai.golongan_pangkat,biodata_pegawai.tmt_pangkat,biodata_pegawai.nama_jabatan, biodata_pegawai.tmt_jabatan,
			biodata_pegawai.tmpt_didik,biodata_pegawai.thn_lulus,biodata_pegawai.ijazah,biodata_pegawai.tgl_lahir,
			biodata_pegawai.tmt_pensiun,biodata_pegawai.image, 
			keluarga.nama_istri,keluarga.jml_anak,keluarga.alamat From biodata_pegawai left join keluarga on biodata_pegawai.nip=keluarga.nip where biodata_pegawai.nip=$nip OR keluarga.nama_istri=NULL")->result();
		$this->load->view('admin/v_detail_penelitian',$data);
	}

}
