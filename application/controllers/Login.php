<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function index(){
		$this->load->view('login');
	}


	


	public function cek_login() {
		//$data = array('username' => $this->input->post('username', TRUE),
						//'password' => md5($this->input->post('password', TRUE))
		//	);
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = array(
		'username' => $username,
		'password' => md5($password)
		);

		$hasil=$this->db->get_where('login',$where);
		#$this->load->model('model_user');
		//$hasil = $this->model_user->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				//$sess_data['logged_in'] = 'Sudah Loggin';
				//$sess_data['uid'] = $sess->uid;
				$sess_data['username'] = $sess->username;
				$sess_data['level'] = $sess->level;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('level')=='1') {
				redirect('home');
			}
			elseif ($this->session->userdata('level')=='2') {
				redirect('member/c_member');
			}		
		}
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}



#=================================================================================================

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}	






}
?>