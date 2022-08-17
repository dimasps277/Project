<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Hasil extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Guru');
        $this->load->model('Model_Kriteria');
        $this->load->model('Model_Penilaian');

        if ($this->session->userdata('logged_in') != "login") {
            ?>
            <script type="text/javascript">
                    alert('Login Dahulu Sebelum Akses Halaman Ini !');
                    window.location='<?php echo base_url(''); ?>'
                </script>
            <?php
        }
    }

    public function index() 
    {
        $data['page'] = "Hasil";
		$this->load->view('user/hasil/data_hasil', $data);
    }
	
	public function cetak() 
    {
		$this->load->view('user/hasil/cetak');
    }
}