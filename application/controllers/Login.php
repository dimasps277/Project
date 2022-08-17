<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_User');
	}

	public function index()
	{
		$this->load->view('index');
	}

    public function auth(){
        $nama_user    = $this->input->post('nama_user',TRUE);
        $password = md5($this->input->post('password',TRUE));

        $cek = $this->db->where('nama_user',$nama_user)->where('password',$password)->get('user')->row();
        $cek2 = count($cek);

    if($cek2 > 0)
    {
            $data['logged_in']  = TRUE;
            $data['id_user']    = $cek->id_user;
            $data['nama_user']  = $cek->nama_user;
            $data['email']      = $cek->email;
            $data['image']      = $cek->image;
            $data['level']      = $cek->level;
            $data['logged_in']  = "login";

            $this->session->set_userdata($data);
        if($this->session->userdata('level') == 'admin') {
            redirect('admin/dashboard');
        }elseif($this->session->userdata('level') == 'user') {
            redirect('user/dashboard');
        }
    }
    else
    {
    $this->session->set_flashdata('gagal','Username atau Password tidak sesuai');

    redirect_back();
    }
    }

    public function logout(){
        $this->session->unset_userdata('nama_user');
        session_destroy();

        redirect('');
    }
}
