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
		

		$file_path="assets/images/".$_POST['nip'].".jpg";
		$nip = $this->input->post('nip');
		$nama = $this->input->post('nama_lengkap');
		//$nama_fakultas = $this->input->post('nama_fakultas');
		$nama_jabatan= $this->input->post('nama_jabatan');
		$golongan_pangkat = $this->input->post('golongan_pangkat');
		$tmpt_lahir=$this->input->post('tmpt_lahir');
		$tgl_lahir= $this->input->post('tgl_lahir');
		$tmt_jabatan= $this->input->post('tmt_jabatan');
		$tmt_pensiun= $this->input->post('tmt_pensiun');
		$email= $this->input->post('email');
		$no_hp= $this->input->post('no_hp');
		$alamat= $this->input->post('alamat');
		//$tmt_pangkat= $this->input->post('tmt_pangkat');
		
		
		//$tmpt_didik= $this->input->post('tmpt_didik');
		//$thn_lulus= $this->input->post('thn_lulus');
		//$ijazah= $this->input->post('ijazah');
		
		

		$image=$file_path;
		
		$data = array(
			'nip' => $nip,
			'nama_lengkap' => $nama,
			'nama_jabatan'=>$nama_jabatan,
			'golongan_pangkat' => $golongan_pangkat,
			'tmpt_lahir' => $tmpt_lahir,
			'tgl_lahir'=>$tgl_lahir,
			'tmt_jabatan'=>$tmt_jabatan,
			'tmt_pensiun'=>$tmt_pensiun,
			'email'=>$email,
			'no_hp'=>$no_hp,
			'alamat'=>$alamat,
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
			keluarga.nama_istri,keluarga.jml_anak,keluarga.alamat, biodata_pegawai.alamat, biodata_pegawai.tmpt_lahir, biodata_pegawai.email From biodata_pegawai left join keluarga on biodata_pegawai.nip=keluarga.nip where biodata_pegawai.nip=$nip OR keluarga.nama_istri=NULL")->result();

		$data['pendidikan']=$this->db->query("SELECT * from biodata_pegawai left join pendidikan_pegawai on biodata_pegawai.nip=pendidikan_pegawai.nip where biodata_pegawai.nip=$nip ORDER BY pendidikan_pegawai.thn_lulus  DESC LIMIT 1")->result();

		$data['pekerjaan']=$this->db->query("SELECT * FROM biodata_pegawai left join pekerjaan_pegawai on biodata_pegawai.nip=pekerjaan_pegawai.nip where biodata_pegawai.nip=$nip")->result();


		$data['penelitian']=$this->db->query("SELECT * FROM biodata_pegawai left join penelitian_pegawai on biodata_pegawai.nip=penelitian_pegawai.nip where biodata_pegawai.nip=$nip")->result();


		$data['istri']=$this->db->query("SELECT * FROM biodata_pegawai left join keluarga on biodata_pegawai.nip=keluarga.nip where biodata_pegawai.nip=$nip")->result();





		//print_r ($data); 
		//$data['user']=$this->db->query("SELECT * from biodata_pegawai left join keluarga on biodata_pegawai.nip=keluarga.nip where biodata_pegawai.nip=$nip OR keluarga.nama_istri=NULL")->result();
		//$data['user']=$this->db->query("SELECT * From biodata_pegawai left join keluarga on biodata_pegawai.nip=keluarga.nip where biodata_pegawai.nip=$nip OR keluarga.nama_istri=NULL")->result();
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
	$data['user']=$this->db->query("SELECT biodata_pegawai.nip, biodata_pegawai.nama_lengkap, biodata_pegawai.golongan_pangkat,nama_istri, jml_anak,keluarga.alamat From biodata_pegawai left join keluarga on biodata_pegawai.nip=keluarga.nip where biodata_pegawai.nip=$nip OR keluarga.nama_istri=NULL")->result();
	//print_r($data['user']);
	$this->load->view('admin/v_tambahkeluargaistri',$data);
	}


	function updatedatakeluarga(){
		$nip = $this->input->post('nip');
		$nama_istri = $_POST['nama_istri'];
		$tempat = $_POST['tempat'];
		$tgl_lahir_istri = $_POST['tgl_lahir_istri'];
		$alamat = $_POST['alamat'];
		$pekerjaan = $_POST['pekerjaan'];


		$check['nip']=$this->db->query("select nip from keluarga where nip=$nip")->num_rows();
		//print_r($check);
		
		if($check['nip']==0){
			$data = array(
				'nip' => $nip,
				'nama_istri' => $nama_istri,
				'tempat' => $tempat,
				'tgl_lahir_istri' => $tgl_lahir_istri,
				'alamat' => $alamat,
				'pekerjaan' => $pekerjaan
				);
			$this->m_data->input_data($data,'keluarga');
		}
		else{
			$data = array(
				'nip' => $nip,
				'nama_istri' => $nama_istri,
				'tempat' => $tempat,
				'tgl_lahir' => $tgl_lahir,
				'alamat' => $alamat,
				'pekerjaan' => $pekerjaan
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


#=========================PENDIDIKAN

	function view_detail_pendidikan($nip){
		$data['user']=$this->db->query("SELECT biodata_pegawai.nip, biodata_pegawai.nama_lengkap, biodata_pegawai.golongan_pangkat,biodata_pegawai.tmt_pangkat,biodata_pegawai.nama_jabatan, biodata_pegawai.tmt_jabatan,
			biodata_pegawai.tmpt_didik,biodata_pegawai.thn_lulus,biodata_pegawai.ijazah,biodata_pegawai.tgl_lahir,
			biodata_pegawai.tmt_pensiun,biodata_pegawai.image, 
			keluarga.nama_istri,keluarga.jml_anak,keluarga.alamat, biodata_pegawai.alamat, biodata_pegawai.tmpt_lahir, biodata_pegawai.email From biodata_pegawai left join keluarga on biodata_pegawai.nip=keluarga.nip where biodata_pegawai.nip=$nip OR keluarga.nama_istri=NULL")->result();
		$data['pendidikan']=$this->db->query("SELECT * from biodata_pegawai left join pendidikan_pegawai on biodata_pegawai.nip=pendidikan_pegawai.nip where biodata_pegawai.nip=$nip ORDER BY pendidikan_pegawai.thn_lulus  DESC")->result();
		$this->load->view('admin/v_detail_pendidikan',$data);
	}

	function tambahdatapendidikan($nip){
		#$where = array('nip' => $nip);
		#print_r($data['jurusan']);
		#$data['user']=$this->db->query("SELECT nip From biodata_pegawai left join pendidikan_pegawai on biodata_pegawai.nip=pendidikan_pegawai.nip where 
			#biodata_pegawai.nip=$nip")->result();
		$data['user']=$this->db->query("SELECT nip From biodata_pegawai where 
			biodata_pegawai.nip=$nip")->result();
	//print_r($data['user']);
	$this->load->view('admin/v_tambahpendidikan',$data);	
	}


	function adddatapendidikan(){
		$nip = $this->input->post('nip');
		$tingkat = $_POST['tingkat'];
		$nama_perguruan = $_POST['nama_perguruan'];
		$jurusan = $_POST['jurusan'];
		$thn_lulus = $_POST['thn_lulus'];
		$no_ijazah = $_POST['no_ijazah'];
		
		$data = array(
				'nip' => $nip,
				'tingkat' => $tingkat,
				'nama_perguruan' => $nama_perguruan,
				'jurusan' => $jurusan,
				'thn_lulus'=>$thn_lulus,
				'no_ijazah'=>$no_ijazah
				);
		 
		//$where = array('nip' => $nip);
		 
		$this->m_data->input_data($data,'pendidikan_pegawai');
		redirect('home/detaildata/'.$nip);
	}



#===========================PEKERJAAN
	function view_detail_pekerjaan($nip){
		$data['user']=$this->db->query("SELECT biodata_pegawai.nip, biodata_pegawai.nama_lengkap, biodata_pegawai.golongan_pangkat,biodata_pegawai.tmt_pangkat,biodata_pegawai.nama_jabatan, biodata_pegawai.tmt_jabatan,
			biodata_pegawai.tmpt_didik,biodata_pegawai.thn_lulus,biodata_pegawai.ijazah,biodata_pegawai.tgl_lahir,
			biodata_pegawai.tmt_pensiun,biodata_pegawai.image, 
			keluarga.nama_istri,keluarga.jml_anak,keluarga.alamat From biodata_pegawai left join keluarga on biodata_pegawai.nip=keluarga.nip where biodata_pegawai.nip=$nip OR keluarga.nama_istri=NULL")->result();
		$this->load->view('admin/v_detail_pekerjaan',$data);
	}

	function tambahdatapekerjaan($nip){
		#$where = array('nip' => $nip);
		#print_r($data['jurusan']);
		#$data['user']=$this->db->query("SELECT nip From biodata_pegawai left join pendidikan_pegawai on biodata_pegawai.nip=pendidikan_pegawai.nip where 
			#biodata_pegawai.nip=$nip")->result();
		$data['user']=$this->db->query("SELECT nip From biodata_pegawai where 
			biodata_pegawai.nip=$nip")->result();
	//print_r($data['user']);
	$this->load->view('admin/v_tambahpekerjaan',$data);	
	}




	function adddatapekerjaan(){
		$nip = $this->input->post('nip');
		$jabatan = $_POST['jabatan'];
		$golongan_pangkat = $_POST['golongan_pangkat'];
		$jenis_sk = $_POST['jenis_sk'];
		$no_surat = $_POST['no_surat'];
		$tgl_sk = $_POST['tgl_sk'];
		$tmt_sk = $_POST['tmt_sk'];
		$tmt_jabatan = $_POST['tmt_jabatan'];
		$data = array(
				'nip' => $nip,
				'jabatan' => $jabatan,
				'golongan_pangkat' => $golongan_pangkat,
				'jenis_sk' => $jenis_sk,
				'no_surat'=>$no_surat,
				'tgl_sk'=>$tgl_sk,
				'tmt_sk'=>$tmt_sk,
				'tmt_jabatan'=>$tmt_jabatan
				);
		 
		//$where = array('nip' => $nip);
		 
		$this->m_data->input_data($data,'pekerjaan_pegawai');
		redirect('home/detaildata/'.$nip);
	}


#===============================Penelelitian
	function view_detail_penelitian($nip){
		$data['user']=$this->db->query("SELECT biodata_pegawai.nip, biodata_pegawai.nama_lengkap, biodata_pegawai.golongan_pangkat,biodata_pegawai.tmt_pangkat,biodata_pegawai.nama_jabatan, biodata_pegawai.tmt_jabatan,
			biodata_pegawai.tmpt_didik,biodata_pegawai.thn_lulus,biodata_pegawai.ijazah,biodata_pegawai.tgl_lahir,
			biodata_pegawai.tmt_pensiun,biodata_pegawai.image, 
			keluarga.nama_istri,keluarga.jml_anak,keluarga.alamat From biodata_pegawai left join keluarga on biodata_pegawai.nip=keluarga.nip where biodata_pegawai.nip=$nip OR keluarga.nama_istri=NULL")->result();
		$this->load->view('admin/v_detail_penelitian',$data);
	}


	function tambahdatapenelitian($nip){
		#$where = array('nip' => $nip);
		#print_r($data['jurusan']);
		#$data['user']=$this->db->query("SELECT nip From biodata_pegawai left join pendidikan_pegawai on biodata_pegawai.nip=pendidikan_pegawai.nip where 
			#biodata_pegawai.nip=$nip")->result();
		$data['user']=$this->db->query("SELECT nip From biodata_pegawai where 
			biodata_pegawai.nip=$nip")->result();
	//print_r($data['user']);
	$this->load->view('admin/v_tambahpenelitian',$data);	
	}


	function adddatapenelitian(){
		$nip = $this->input->post('nip');
		$jabatan = $_POST['jabatan'];
		$golongan_pangkat = $_POST['golongan_pangkat'];
		$jenis_sk = $_POST['jenis_sk'];
		$no_surat = $_POST['no_surat'];
		$tgl_sk = $_POST['tgl_sk'];
		$tmt_sk = $_POST['tmt_sk'];
		$tmt_jabatan = $_POST['tmt_jabatan'];
		$data = array(
				'nip' => $nip,
				'jabatan' => $jabatan,
				'golongan_pangkat' => $golongan_pangkat,
				'jenis_sk' => $jenis_sk,
				'no_surat'=>$no_surat,
				'tgl_sk'=>$tgl_sk,
				'tmt_sk'=>$tmt_sk,
				'tmt_jabatan'=>$tmt_jabatan
				);
		 
		//$where = array('nip' => $nip);
		 
		$this->m_data->input_data($data,'pekerjaan_pegawai');
		redirect('home/detaildata/'.$nip);
	}

	#======================Pendidikan=======
	

}
