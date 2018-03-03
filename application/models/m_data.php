<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function tampil_data(){
		return $this->db->query('select nip,nama_lengkap,golongan_pangkat,image from biodata_pegawai');
	}

	function jmlbaris(){
		$query = $this->db->query('SELECT * FROM biodata_pegawai');
		return$query->num_rows();
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}


	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}


	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}	




	function detail_data($nip, $table){
		//$query=$this->db->query("select * from $table where nip=$nip");
		$query=$this->db->query("SELECT keluarga.nip, biodata_pegawai.nama_lengkap, biodata_pegawai.golongan_pangkat 
			keluarga.nama_istri From keluarga inner join biodata_pegawai on keluarga.nip=biodata_pegawai.nip
			where keluarga.nip=$nip");
		//$this->db->select("nip,nama_lengkap,golongan_pangkat")->from($table)->where($where);
		//$query = $this->db->get_where($table,$where);
		return  $query;
	}



#================================================================SEARCH

	



	// Fungsi untuk menampilkan semua data gambar
  	public function view(){
    	return $this->db->query('select nip,nama_lengkap,golongan_pangkat,image from biodata_pegawai');
  	}

	public function upload(){
	    $config['upload_path'] = './images/';
	    $config['allowed_types'] = 'jpg|png|jpeg';
	    $config['max_size']  = '2048';
	    $config['remove_space'] = TRUE;
	  
	    $this->load->library('upload', $config); // Load konfigurasi uploadnya
	    if($this->upload->do_upload('image')){ // Lakukan upload dan Cek jika proses upload berhasil
	      // Jika berhasil :
	      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
	      return $return;
	    }else{
	      // Jika gagal :
	      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
	      return $return;
    }
  }


  		// Fungsi untuk menyimpan data ke database
   	public function save($upload){
       $data = array(
      'deskripsi'=>$this->input->post('input_deskripsi'),
      'nama_file' => $upload['file']['file_name'],
      'ukuran_file' => $upload['file']['file_size'],
      'tipe_file' => $upload['file']['file_type']
    );
    
    $this->db->insert('biodata_pegawai', $data);
  	}



}